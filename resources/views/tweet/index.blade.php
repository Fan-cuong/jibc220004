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
    <div>
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
    <div>
        @foreach ($tweets as $tweet)
            <p>{{$tweet->content}}</p>
        @endforeach
    </div>
</body>
</html>