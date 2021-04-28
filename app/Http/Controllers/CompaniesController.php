<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
class CompaniesController extends Controller
{
    public function index(){
        $Companies = Companies::all();
        return view('Companies.index', compact('Companies'));
    }
}
