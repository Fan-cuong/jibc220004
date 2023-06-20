<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Http\Requests\Tweet\CreateRequest;

class UpdateRequest extends Controller
{
    public function authorize(): bool{
        return true;
    }
    public function rules(): array
    {
        return [
            'tweets' =>'required|max:140'
        ];
    }
    public function tweet():string{
        return $this->input('tweets');
    }
    public function id(): int{
        return (int) $this->route('tweetId');
    }

}
