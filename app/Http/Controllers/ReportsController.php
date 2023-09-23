<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function dailyReports(){
        return view('admin.reports.daily');
    }

    public function weeklyReports(){
        return view('admin.reports.weekly');
    }

    public function monthlyReports(){
        return view('admin.reports.month');
    }

    public function annualReports(){
        return view('admin.reports.annual');
    }

}
