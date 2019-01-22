<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Selamat Datang di Sistem Inventaris';
        return view('auth.index') -> with ('title', $title);
    }
}
