@extends("layout")

@section("title")
    Laragigs / Listings / {{ $listing["title"] }}
@endsection

@section("content")
    <h2>{{ $listing["title"] }}</h2>
    <p>{{ $listing["description"] }}</p>
@endsection
