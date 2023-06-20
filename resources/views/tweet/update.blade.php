<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wiew/tweet/update/app</title>
</head>
<body>
    <h1>hdc</h1>
    <h1>hdc</h1>
    <div>
        <a href="{{route('tweet.index')}}">戻る</a>
        <p>投稿フォーム</p>
        @if (session('feedback.success'))
            <p style="color: green">{{session('feedback.sussess')}} </p>
        @endif
        <form action="{{route('tweet.update.put',['tweetId'=>$tweets->id])}}" method="post">
            @method('PUT')
            @csrf
            <label for="tweet-content">HDC</label>
            <span>140 words</span>
            <textarea name="tweet" id="tweet-content" cols="30" rows="10" type="text" placeholder="HDCを入力してください">{{$tweets->content}} </textarea>
            @error('tweets')
                <p style="color: red">{{$message}} </p>
            @enderror
            <button type="submit">Change</button>
        </form>
    </div>
</body>
</html>