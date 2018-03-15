<h1>Title: {{ $talk->title }}</h1>
<p>
    Description: {{ $talk->description }}<br/>
    Notes: {{ $talk->notesForOrganizers }}
</p>

<p>
    Speaker: {{ $talk->speaker->name }}<br/>
    Email: {{ $talk->speaker->contactEmail }}<br/>
    Bio: {{ $talk->speaker->bioText }}<br/>
    Image: {{ $talk->speaker->imageUrl }}<br/>
</p>

<a href="/submit-talks">Go Back</a> - <a href="#">Update Talk</a>