User: {{$user->id}}

<br>
<br>
<br>
<br>
Followers:
<br>
{{-- {{dd($post->likes()[0])}} --}}
Post: {{$post->id}}
<br>
<br>
Logic here:{{$user->editComment($post, 'edited')}}
<br>
<br>
{{dd($user->comments)}}