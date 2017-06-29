<?php

namespace Minh\Timezones;
use App\Http\Controllers\Controller;

use Carbon\Carbon;

class TimezonesController extends Controller
{
    public function index($timezone){
        $time= Carbon::now($timezone)->toDateTimeString();
        return view('timezones::time',compact('time'));
    }
    //
}
