@extends('layout')

@section('content')
	<h1>Bier Aanpassen</h1>
	
    <form action="{{ action('BeersController@execEdit') }}" method="post" role="form">
        <input type="hidden" name="id" value="{{ $beer->id }}">
        <div>
            <label for="title">Naam</label>
            <input style="width: 15em;" type="text" name="name" value="{{{ $beer->name }}}" />
        </div>
        <div>
            <label for="publisher">Brouwerij</label>
            <input style="width: 15em;" type="text" name="brewery" value="{{{ $beer->brewery }}}" />
        </div>
        <div>
            <label for="publisher">Beschrijving</label>
            <input style="width: 40em;" type="text" name="description" value="{{{ $beer->description }}}" />
        </div>
        <div>
            <label for="publisher">Volume</label>
            <input style="width: 5em;"  type="text" name="volume" value="{{ $beer->volume }}" />
        </div>
        <div>
            <label for="publisher">Alcohol</label>
            <input style="width: 5em;"  type="text" name="alcohol" value="{{ $beer->alcohol }}" />
        </div>
        <div>
            <label for="publisher">Prijs</label>
            <input style="width: 5em;"  type="text" name="price" value="{{ $beer->price }}" />
        </div>
        <input type="submit" value="Bewaren" />
        <a href="{{ action('BeersController@index') }}">Annuleren</a>
    </form>
@stop