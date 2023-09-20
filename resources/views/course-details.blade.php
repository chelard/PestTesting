<h2>{{$course->title}}</h2>
<p>{{$course->description}}</p>
<p>{{$course->tagline}}</p>

<ul>
@foreach($course->learnings as $learning)
<li> {{$learning}}</li>

@endforeach
</ul>

<img src="{{asset('storage/'.$course->image)}}" alt="image of the course {{$course->title}}">
