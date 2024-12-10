<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ApplicationStatusUpdated;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();
        return view('admin.application', ['applications' => $applications]);
    }

    public function updateStatus($application_id, $status)
    {
        if (!in_array($status, ['approved', 'rejected'])) {
            return redirect()->back()->with('error', 'Invalid status.');
        }

        $application = Application::findOrFail($application_id);
        $user = $application->user;

        $application->update([
            'status' => $status
        ]);

        Mail::to($user->email)->send(new ApplicationStatusUpdated($user, $status));

        return redirect()->route('admin.application.index')->with('success', 'Application status updated successfully.');
    }
}
