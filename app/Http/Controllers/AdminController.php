<?php

namespace App\Http\Controllers;

use App\Exports\ExportAsSimplies;
use App\Exports\ExportAsSimpliesByDate;
use App\Models\CheklistAsSimply;
use App\Models\CheklistCipSimply;
use App\Models\CheklistCiwSimply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    function index()
    {
        return view ('Admin.index');
    }

}
