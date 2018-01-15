<?php
namespace App\Interactive\Services;
use Mail;

class HomeService
{
    public function mailService($request){
        $inputs = $request->all();
        $options = array();

        for($i = 1; $i <= 7; $i++){
            array_push($options, $request->input('option'.$i));
        }

        $no_null_options = array_filter($options, function($value){ return ($value); });
        $work_options = implode(", \n", $no_null_options);
        $mail_template = "I would like to talk to you about following terms:\n\n".$work_options;

        \Mail::raw($mail_template, function($message) use ($inputs)
        {
            $message->subject('Interactive IT Solutions');
            $message->from($inputs['email'], $inputs['name']);
            $message->to(env('ADMIN_EMAIL'));
        });

        return true;
    }
}