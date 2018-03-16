<h1>Conference Schedule</h1>

<ul>
    @foreach($talks as $talk)
        <li><a href="/view-talk/{{ $talk->id }}">{{ $talk->title }}</a> by {{ $talk->speakerName }}</li>
    @endforeach
</ul>