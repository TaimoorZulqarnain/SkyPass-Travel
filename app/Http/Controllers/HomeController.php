<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        return view('site-components.about');
    }
    public function contact(){
        return view('site-components.contact');
    }

    public function notification(){
        return view('admin.Notification.notification');
    }

    public function notification_agent(){
        return view('agent.Notification.notification');
    }

    
}
