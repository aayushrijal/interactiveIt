<?php

namespace App\Http\Controllers\Web;
use App\Interactive\Services\HomeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * @var HomeService
     */
    private $home;

    /**
     * HomeController constructor.
     *
     * @param HomeService $home
     */
    public function __construct(HomeService $home)
    {
        $this->home = $home;
    }

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
        $content_16 = "Web Development";
        $content_17 = "UI/UX Development";
        $content_18 = "POS Machine Purchase";
        $content_19 = "Sales & Marketing";
        $content_20 = "IT Solutions";
        $content_21 = "Mobile App Development";

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

    public function postman(Request $request){
        $sendMail = $this->home->mailService($request);

        if($sendMail){
            return redirect()->back()->with('success', 'Email successfully submitted');
        }

        return redirect()->back()->with('error', 'Email sending unsuccessful');
    }
}
