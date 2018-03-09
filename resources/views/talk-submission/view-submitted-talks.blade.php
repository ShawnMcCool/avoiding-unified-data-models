<h1>Submitted Talks</h1>

<ul>
    @foreach($talks as $talk)
        <li><a href="/submit-talks/view-talk/{{ $talk->id }}">{{ $talk->title }}</a> by {{ $talk->speaker->name }}</li>
    @endforeach
</ul>

<a href="/submit-talks/submit-new">Submit a new talk.</a>