<?php
namespace App\Services;
use App\Models\Tweet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tweet\CreateRequest;
use App\Http\Requests\Tweet\UpdateRequest;


class TweetService{
    public function getTweets(){
        return Tweet::orderBy('created_at','DESC')->get();
    }
}