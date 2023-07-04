<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>view/tweet/index</h1>
    @auth
        <div>
            <p>dang ky</p>
            @if (section('feedback.success'))
                <p style="color:green">{{session('feedback.success')}}</p>
            @endif
            <form action="{{route('tweet.create')}}" method="post">
                @csrf
                <label for="tweet-content">Content</label>
                <span>140 digital</span>
                <textarea name="tweet" id="tweet-content" cols="30" rows="10" placeholder="input here">  </textarea>
                @error('tweet')
                    <p style = "color: red">{{$message}}</p>
                @enderror
                <button type="submit">Submit</button>
            </form>
        </div>
    @endauth
    <div>
        @foreach ($tweets as $tweet)
            <details>
                <summary>   
                    <p>{{$tweet->content}}</p>
                </summary>
                <div>
                    <a href="{{route('tweet.update.index',['tweetId'=>$tweet->id])}}">ads</a>
                    <form action="{{route('tweet.delete',['tweetId'=>$tweet->id])}} " method="post" >
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </details>
        @endforeach
    </div>
</body>
</html>