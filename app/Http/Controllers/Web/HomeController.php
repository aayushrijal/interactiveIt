<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $content_1 = "Content 1";
        $content_2 = "Content 2";
        $content_3 = "Content 3";
        $content_4 = "Content 4";
        $content_5 = "Content 5";
        $content_6 = "Content 6";
        $content_7 = "Content 7";
        $content_8 = "Content 8";
        $content_9 = "Content 9";
        $content_10 = "Content 10";
        $content_11 = "Content 11";
        $content_12 = "Content 12";
        $content_13 = "Content 13";
        $content_14 = "Content 14";
        $content_15 = "Content 15";
        $content_16 = "Content 16";
        $content_17 = "Content 17";
        $content_18 = "Content 18";
        $content_19 = "Content 19";
        $content_20 = "Content 20";
        $content_21 = "Content 21";        

        return view('app',
            compact(
                'content_1',
                'content_2',
                'content_3',
                'content_4',
                'content_5',
                'content_6',
                'content_7',
                'content_8',
                'content_9',
                'content_10',
                'content_11',
                'content_12',
                'content_13',
                'content_14',
                'content_15',
                'content_16',
                'content_17',
                'content_18',
                'content_19',
                'content_20',
                'content_21'
            )
        );
    }
}
