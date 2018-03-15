<h1>Title: {{ $talk->title }}</h1>
<p>
    Description: {{ $talk->description }}<br/>
    Notes: {{ $talk->notes }}
</p>

<p>
    Speaker: {{ $talk->speakerName }}<br/>
    Email: {{ $talk->speakerEmail }}<br/>
    Bio: {{ $talk->speakerBio }}<br/>
    Image: {{ $talk->speakerImage }}<br/>
</p>

<a href="/approve-talks">Go Back</a> - <a href="/approve-talks/approve-talk/{{ $talk->id }}">Approve Talk</a>