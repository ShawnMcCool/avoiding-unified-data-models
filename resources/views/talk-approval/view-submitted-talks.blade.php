<h1>Approve Submitted Talks</h1>

<strong>Approved Talks</strong>
<ul>
    @foreach($approvedTalks as $talk)
        <li><a href="/approve-talks/view-talk/{{ $talk->id }}">{{ $talk->title }}</a> by {{ $talk->speakerName }}</li>
    @endforeach
</ul>

<strong>Unapproved Talks</strong>
<ul>
    @foreach($unapprovedTalks as $talk)
        <li><a href="/approve-talks/view-talk/{{ $talk->id }}">{{ $talk->title }}</a> by {{ $talk->speakerName }}</li>
    @endforeach
</ul>