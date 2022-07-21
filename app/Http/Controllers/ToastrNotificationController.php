<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;

class ToastrNotificationController extends Controller
{
    public function toastrNotification()
    {
        //put your logic here

        Toastr::success('You Have Successfully Implement Toastr Notification :)', 'Success!!');
        return view('welcome');
    }
}
