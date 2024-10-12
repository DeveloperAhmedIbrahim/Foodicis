<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Manager;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $manager = Manager::count();
        $leads = Contact::count();
        $today_leads = Contact::whereDate('created_at', Carbon::today())->count();
        $manger_request = Manager::where('status', '0')->count();

        return view('admin_panel.admin_dashboard.dashboard', compact('manager', 'leads', 'today_leads', 'manger_request'));
    }

    public function restaurants()
    {
        $restaurants = [];
        for($i = 1; $i <= 12; $i++)
        {
            $month = $i > 9 ? $i : '0'.$i;
            $match = date('Y')."-{$month}";
            $restaurants[] = Manager::where([
                ['created_at', 'LIKE', "%{$match}%"]
            ])->count();
        }
        return response()->json($restaurants);
    }

    public function leads()
    {
        $leads = [];
        for($i = 1; $i <= 12; $i++)
        {
            $month = $i > 9 ? $i : '0'.$i;
            $match = date('Y')."-{$month}";
            $leads[] = Contact::where([
                ['created_at', 'LIKE', "%{$match}%"]
            ])->count();
        }
        return response()->json($leads);
    }

    public function printTotalLeadsData()
    {
        $totalLeads = Contact::count();
        echo "Total Leads: " . $totalLeads;
    }
    
    public function printWeeklyLeadsData()
    {
        $weeklyData = Contact::selectRaw('WEEK(created_at) as week, COUNT(*) as total_leads')
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->groupBy('week')
            ->orderBy('week')
            ->get()
            ->map(function ($item) {
                return [
                    'period' => 'Week ' . $item->week,
                    'total_leads' => $item->total_leads
                ];
            });
    
        foreach ($weeklyData as $data) {
            echo $data['period'] . ": " . $data['total_leads'] . "<br>";
        }
    }
    
}
