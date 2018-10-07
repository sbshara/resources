<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SamplesController extends Controller
{
    public function chartJS() {
        return view('LaraAdminLTE.samples.charts.chartjs');
    }

    public function flotJS() {
        return view('LaraAdminLTE.samples.charts.flot');
    }
        
    public function morrisJS() {
        return view('LaraAdminLTE.samples.charts.morris');
    }
    
    public function inlineJS() {
        return view('LaraAdminLTE.samples.charts.inline');
    }



}
