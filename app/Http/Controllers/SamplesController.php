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

    public function formAdvanced() {
        return view('LaraAdminLTE.samples.forms.advanced');
    }

    public function formEditor() {
        return view('LaraAdminLTE.samples.forms.editors');
    }

    public function formGeneral() {
        return view('LaraAdminLTE.samples.forms.general');
    }

}
