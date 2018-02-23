<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function home() {
return 'Crazy';
    }

    public function album() {
        return 'Blue';
    }

    public function pricing() {
        return 'Alladin';
    }
}
