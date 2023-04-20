<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactModel;

class contactController extends Controller
{
    public function index(){
        $contact = contactModel::first();
        return view('contact') -> with(['contact' => $contact]);
    }
}
