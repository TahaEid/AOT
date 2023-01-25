<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
//use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class user extends Controller
{
    public function getIndex(){


        $obj = new \stdClass();
        $obj -> name = '11';
        $obj -> id = '22';
        $obj -> gender = '33';
        //return view('main',compact('obj'));
        //return view('main',compact('this'));

        $data = Ticket::select('trackid','openedby')->get();

        //return Ticket::get();
        //$data = Ticket::get();

        //return view('main',compact('data'));



        $rules = [
            'trackid' => 'required|max:100',
            'openedby' => 'required|numeric',
            'openedby1' => 'required|unique:tickets,subject',
            'openedby2' => 'required',
        ];

        $messages = [
            'trackid.required' => __('messages.name'),
            'openedby.numeric' => 'openedby should be numeric',
        ];

        $Validator = Validator::make($request->all(),$rules,$messages) ;

        if ($Validator->fails()) {
            //return $Validator->errors();
            //return $Validator->errors()->first();
            return redirect()-> back()-> withErrors()-> withInputs($request->all());
        }


        Ticket::create([
            'trackid' => '123-123',
            'openedby' => '1',

        ]);

        return redirect()->back()->with(['success' => 'your request has een done']);

    }

    public function getuser(){


        $Users = User::where('expire',0)-> get();
        foreach($Users as $user){

        }


    }
}
