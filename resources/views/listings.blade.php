<h1>{{ $heading }}</h1>
<ul>
    @if(count($listings) > 0)
        @foreach($listings as $listing)
            <li><a href="/{{ $listing["id"] }}">{{ $listing["title"] }}</a></li>
        @endforeach
    @else
    <p>No listing found...</p>
    @endif
</ul>
