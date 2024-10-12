<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PurchaseIngredient;
use App\Models\Waste;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class ReportController extends Controller
{

    public function purchase_report_view(Request $request)
    {
        return view('manager_panel.admin_dashboard.reports.purchase_index');
    }
    public function purchase_report(Request $request)
    {

        $start = $request->start_date;
        $end = $request->end_date;
        $start = Carbon::parse($start)->startOfDay(); // Start of day: 00:00:00
        $end = Carbon::parse($end)->endOfDay(); // End of day: 23:59:59


        // Get the logged-in manager's ID
        $managerId =  Auth::id();
        // dd($managerId);
        // Fetch purchase ingredients between selected dates and filtered by manager_id
        $purchases = PurchaseIngredient::where('manager_id', $managerId)
            ->whereBetween('created_at', [$start, $end])
            ->get();
        // dd($purchases);
        return view('manager_panel.admin_dashboard.reports.purchasereport', compact('purchases', 'start', 'end'));
    }
    public function download_purchase_report(Request $request)
    {
        $start = $request->start_date;
        $end = $request->end_date;
        $start = Carbon::parse($start)->startOfDay(); // Start of day: 00:00:00
        $end = Carbon::parse($end)->endOfDay(); // End of day: 23:59:59

        // Fetch purchase ingredients
        $purchases = PurchaseIngredient::whereBetween('created_at', [$start, $end])->get();

        $pdf = new Dompdf();
        $html = view('manager_panel.admin_dashboard.reports.purchasereport_pdf', compact('purchases', 'start', 'end'))->render();
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        return $pdf->stream('manager_panel.admin_dashboard.reports.purchasereport_pdf.pdf'); // For direct PDF download
    }

    // ---------------------------------------

    public function waste_report_view(Request $request)
    {
        return view('manager_panel.admin_dashboard.reports.waste_index');
    }

    public function waste_report(Request $request)
    {
        $start = $request->start_date;
        $end = $request->end_date;
        $start = Carbon::parse($start)->startOfDay(); // Start of day: 00:00:00
        $end = Carbon::parse($end)->endOfDay(); // End of day: 23:59:59

        // dd($end);
        // Get the logged-in manager's ID
        $managerId =  Auth::id();
        // dd($managerId);
        // Fetch purchase ingredients between selected dates and filtered by manager_id
        $wastes = Waste::where('manager_id', $managerId)
            ->whereBetween('created_at', [$start, $end])
            ->get();
        // dd($wastes);
        return view('manager_panel.admin_dashboard.reports.wastereport', compact('wastes', 'start', 'end'));
    }

    public function download_waste_report(Request $request)
    {
        $start = $request->start_date;
        $end = $request->end_date;
        $start = Carbon::parse($start)->startOfDay(); // Start of day: 00:00:00
        $end = Carbon::parse($end)->endOfDay(); // End of day: 23:59:59

        // Fetch purchase ingredients
        $wastes = Waste::whereBetween('created_at', [$start, $end])->get();

        $pdf = new Dompdf();
        $html = view('manager_panel.admin_dashboard.reports.wastereport_pdf', compact('wastes', 'start', 'end'))->render();
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        return $pdf->stream('manager_panel.admin_dashboard.reports.wastereport_pdf.pdf'); // For direct PDF download
    }
    public function sales_report_view(Request $request)
    {
        $sales = Order::all(); // Adjust this to fetch the relevant sales data
    
        return view('manager_panel.admin_dashboard.reports.sales_index', compact('sales'));
    }

    public function sales_report(Request $request)
    {
        //Sales report
        $start = $request->start_date;
        $end = $request->end_date;
        $start = Carbon::parse($start)->startOfDay(); // Start of day: 00:00:00
        $end = Carbon::parse($end)->endOfDay(); // End of day: 23:59:59

        // dd($end);
        // Get the logged-in manager's ID
        $managerId =  Auth::id();
        // dd($managerId);
        // Fetch purchase ingredients between selected dates and filtered by manager_id
        $orders = Order::where('manager_id', $managerId)
            ->whereBetween('created_at', [$start, $end])
            ->get();
        $sales = OrderItem::where('manager_id', $managerId)
            ->whereBetween('created_at', [$start, $end])
            ->get();

        // dd($orders);

        return view('manager_panel.admin_dashboard.reports.salesreport', compact('orders', 'sales', 'start', 'end'));
    }
    public function download_order_report(Request $request)
    {
        $start = $request->start_date;
        $end = $request->end_date;
        $start = Carbon::parse($start)->startOfDay(); // Start of day: 00:00:00
        $end = Carbon::parse($end)->endOfDay(); // End of day: 23:59:59

        // Fetch purchase ingredients
        $orders = Order::whereBetween('created_at', [$start, $end])->get();

        $pdf = new Dompdf();
        $html = view('manager_panel.admin_dashboard.reports.orderreport_pdf', compact('orders', 'start', 'end'))->render();
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        return $pdf->stream('manager_panel.admin_dashboard.reports.orderreport_pdf.pdf'); // For direct PDF download
    }
    public function download_sales_report(Request $request)
    {
        $start = $request->start_date;
        $end = $request->end_date;
        $start = Carbon::parse($start)->startOfDay(); // Start of day: 00:00:00
        $end = Carbon::parse($end)->endOfDay(); // End of day: 23:59:59

        // Fetch purchase ingredients
        $sales = OrderItem::whereBetween('created_at', [$start, $end])->get();

        $pdf = new Dompdf();
        $html = view('manager_panel.admin_dashboard.reports.salesreport_pdf', compact('sales', 'start', 'end'))->render();
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'landscape');
        $pdf->render();
        return $pdf->stream('manager_panel.admin_dashboard.reports.salesreport_pdf.pdf'); // For direct PDF download
    }
}
