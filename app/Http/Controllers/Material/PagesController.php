<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Academic\Notice;
use App\Models\Notice as ModelsNotice;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home(){
        $events = Event::all();
        $images = DB::table('slider_images')->get();
        return view('home_page', compact('images', 'events'));
    }

    public function notice(){
        $notices = ModelsNotice::all();
        return view('material.pages.notice', compact('notices'));
    }

    public function events(){
        $events = Event::all();
        return view('material.pages.event', compact('events'));
    }

    public function admission(){
        return redirect('/admission-form');
    }

    public function blog(){
        return view('material.pages.blog');
    }

    public function department(){
        return view('material.pages.department');
    }
}
