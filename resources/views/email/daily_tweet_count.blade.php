@component('mail::message')

# 昨日は{{ $count }}件の呟きが追加されました！

{{ $toUser->name }}さんこんにちは！

昨日は{{ $count }}件の呟きが追加されましたよ！最新の呟きを見にいきましょう！

@component('mail::button', ['url' => route('tweet.index')])
呟きを見にいく
@endcomponent

@endcomponent