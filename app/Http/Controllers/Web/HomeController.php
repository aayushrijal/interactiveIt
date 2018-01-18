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
        return view('app');
    }

    public function postman(Request $request){
        $sendMail = $this->home->mailService($request);

        if($sendMail){
            return redirect()->back()->with('success', 'Email successfully submitted');
        }

        return redirect()->back()->with('error', 'Email sending unsuccessful');
    }
}
