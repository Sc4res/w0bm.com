<h3><a href="{{url('user/' . $user->username)}}">{{$user->username}}</a> answered on your comment.</h3>
<p><a href="{{url('user/' . $user->username)}}">{{$user->username}}</a> answered on your comment on the following video: <a href="{{url($video->id)}}">/{{$video->id}}</a></p>
@include('messages.commentpreview')