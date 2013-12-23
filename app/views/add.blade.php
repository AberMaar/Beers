@extends('layout')

@section('content')
    <h1>Nieuwe Bier</h1>
	
    <ul class="errors">
    @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
    @endforeach
    </ul>
	
    <form action="{{ action('BeersController@execAdd') }}" method="post" role="form">
        <div>
            <label for="title">Naam</label>
            <input style="width: 15em;" type="text" name="name" />
        </div>
        <div>
            <label for="publisher">Brouwerij</label>
            <input style="width: 15em;" type="text" name="brewery" />
        </div>
        <div>
            <label for="publisher">Beschrijving</label>
            <input style="width: 40em;" type="text" name="description" />
        </div>
        <div>
            <label for="publisher">Volume</label>
            <input style="width: 5em;"  type="text" name="volume" />
        </div>
        <div>
            <label for="publisher">Alcohol</label>
            <input style="width: 5em;"  type="text" name="alcohol" />
        </div>
        <div>
            <label for="publisher">Prijs</label>
            <input style="width: 5em;"  type="text" name="price" />
        </div>
        <input type="submit" value="Toevoegen" />
        <a href="{{ action('BeersController@index') }}">Annuleren</a>
    </form>
	
@stop