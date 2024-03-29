<?php

namespace App\Http\Controllers\Tweet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tweet\CreateRequest;
use App\Models\Tweet;

class CreateController extends Controller
{
    public function b(CreateRequest $request){
        $tweet=new Tweet;
        $tweet->user_id=$request->userId();
        $tweet->content=$request->tweet();
        $tweet->save();
        return redirect()->route('tweet.index');
    }
}
