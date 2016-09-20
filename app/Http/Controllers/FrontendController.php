<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use DB;
class FrontendController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function sendUsEmail(){
        $input = Input::all();
        //var_dump($input);die();

        $rules = [
            'email' => 'required|email',
            'name' => 'required|string',
            'message' => 'required|string',
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return Redirect::to('/')
                ->withErrors($validator)
                ->withInput();
        }else{
            Mail::send('emails.reminder', ['data'=> ['from'=> Input::get('email'), 'message'=> Input::get('message'), 'name'=> Input::get('name')],], function ($m)  {
                $m->from(Input::get('email'), 'WWW.ITAM.SK');
                $m->to("a.majik7@gmail.com", "Andrej")->subject('ITAM.SK');
            });
            return Redirect::to('/')->withErrors(['emailWasSent' => 'Email bol odoslaný.'])
                             ->withInput();
        }

    }

    public function search(){

        $input = Input::all();
        if(isset($input['query'])){
            $query = $input['query'];
            $data = Blog::select('title')->where('title','LIKE', '%' . $query . '%')->get()->toArray();
            return response()->json([ "data" => $data ]);
        }
    }
}
