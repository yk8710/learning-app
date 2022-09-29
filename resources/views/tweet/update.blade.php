<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>つぶやきアプリ</title>
</head>
<body>
  <h1>つぶやきを編集する<h1>
  <div>
    <a href="{{ route('tweet.index' }}">< 戻る</a>
    <p>投稿フォーム</p>
    <form action="{{ route('tweet.update.put', [tweetId' => $tweet->id]) }}" method="post">
      @method('PUT')
      @csrf
      <label for="tweet-content">つぶやき</label>
      <span>140文字まで</span>
      <textarea id="tweet-content" type="text" name="tweet" placeholder="つぶやきを入力"><{{ $tweet->content }}</textarea>
      @error('tweet')
      <p style="color: red;">{{ $message }}</p>
      @enderror
      <button type="submit">編集</submit>
    </form>
  </div>
</body>
</html>