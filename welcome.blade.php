@extends('welcome')
@section('content')
    <h1>Planets</h1>

    @if ($selected_name !== null)
        <p>Showing information for planet: {{ $selected_name }}</p>
    @endif

    @if (count($planets) === 0)
        <p>No matching planets found.</p>
    @endif

    @foreach ($planets as $planet)
        <div>
            <h2>{{ $planet['name'] }}</h2>
            <p>{{ $planet['description'] }}</p>
        </div>
    @endforeach
@endsection

<!--hier geef je aan hoe het er uit moet zien en wat er moet staan ALS er geen data er van is 