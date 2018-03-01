<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Question;

class QuestionController extends Controller
{
    public function index() {
        $questions = DB::table('questions')->get(); // == $questions = \App\Question::get(); thanks to Tinker

        // create a new view object
        $view = view('questions/index');
        $view->questions = $questions;

        // return the view
        return $view;
    }

    public function show($id) {
        $question = DB::table('questions')->find($id); // == $questions = \App\Question::find($id); thanks to Tinker

        $view = view('questions/show');
        $view->question = $question;
        // return the view
        return $view;
    }

    public function create() {
        $view = view('questions/create');
        return $view;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|min:5',
            'text' => 'required',
        ]);

        $question = new Question();
        $question->user_id = \Auth::id();
        $question->title = $request->get('title');
        $question->text = $request->get('text');
        $question->save();

        $url = '/questions/'.$questions->id;
        return redirect('$url');
    }
}

// In the action index of your QuestionController add Fluent code to:

// select all the rows in the questions table and put the results in a new variable
// pass the variable to the view before returning it

///////////////////////

// In the action show of your QuestionController add Fluent code to:

// select the correct row from the table questions for the URL parameter that contains it's id and put the results in a new variable
// pass the variable to the view before returning it under a name question