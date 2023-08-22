<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class exportController extends Controller
{
    public function index(){
        return view('export.index');
    }

    public function exportexcel(){
        return Excel::download(new EmployeeExport, 'BioCrew-'.date('d-m-Y').'.xlsx');
    }

}
