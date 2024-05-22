<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestrictedRoutesController extends Controller
{
    public function indexAdmin(){
        return view ('home');
    }

    public function indexCashier(){
        return view ('CashierView.maincashier');
    }
    
    public function indexAssesor(){
        return view ('AssesorView.mainassesor');
    }

    public function indexGuard(){
        return view ('GuardView.mainguard');
    }

    public function indexQueDisplay(){
        return view ('QueueDisplayView.mainqueuedisplay');
    }
}
