<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index(){
        $messages = DB::select('select*from messages order by id desc');

        return view('form.index')->with('messages',$messages);
    }
    public function create(){
        return view('form.create');
    }
    public function store(Request $request){
        $name = $request->input("name");
        $message = $request->input("message");
        DB::insert('insert into messages (name, message) values (?,?)',array ($name,$message));
        return redirect(action('FormController@index'));
    }
}
