<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;
use App\Mail\ManagerApproved;
use Illuminate\Support\Facades\Mail;

class ManagerRequestController extends Controller
{
    public function manager_request()
    {
        $manager = Manager::get();
        // $managers = Manager::where('status', 0)->get();

        return view('admin_panel.admin_dashboard.manager_request.list', compact('manager'));
    }
   

    public function approveManager(Request $request)
    {
        $manager = Manager::find($request->id);

        if ($manager) {
            $manager->status = 1;  // Assuming 1 is for approved and 0 is for not approved
            $manager->save();

            // Send email notification to the manager
            Mail::to($manager->email)->send(new ManagerApproved($manager));

            return response()->json(['success' => true, 'message' => 'Manager approved successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'Manager not found.']);
    }
}
