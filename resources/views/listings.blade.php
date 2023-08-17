@extends("layout")

@section("title")
    Laragigs / {{ $heading }}
@endsection

@section("content")
    <h2>{{ $heading }}</h2>
    <ul>
        @if(count($listings) > 0)
            @foreach($listings as $listing)
                <li><a href="/{{ $listing["id"] }}">{{ $listing["title"] }}</a></li>
            @endforeach
        @else
        <p>No listing found...</p>
        @endif
    </ul>
@endsection

