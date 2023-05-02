<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Boolean;

class Subscription extends Controller
{

    public Boolean $status;

    public int $user_id;

    public $current_period_start;

    public $current_period_end;

    // Product id and user id
    public function active(){
        $userid = Auth::user()->name;
        return $userid;
    }
}
