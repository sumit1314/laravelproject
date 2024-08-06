@foreach($movies as $mov)
name of the movie:{{ $mov->moviename}}
<br>
genre:{{$mov-genre}}
<br>
<a href="/findshows?val={{$mov->movieid}}">search shows for {{$mov->moviename}}</a>



@endforeach