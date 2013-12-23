@extends('layout')

@section('content')

	<h1>Bieren</h1>
	<a href="{{ action('BeersController@add') }}" class="button">Nieuwe Bier</a>

	@if ($beers->isEmpty())
		<p>Geen bieren gevonden.</p>
	@else
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Brouwerij</th>
                    <th>Beschrijving</th>
                    <th style="text-align: center;">Volume</th>
                    <th style="text-align: center;">Alcohol</th>
                    <th style="text-align: center;">Prijs</th>
                    <th style="text-align: center;">Aanpassen</th>
                    <th style="text-align: center;">Verwijderen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($beers as $beer)
                <tr>
                    <td>{{{ $beer->name }}}</td>
                    <td>{{{ $beer->brewery }}}</td>
					<td>{{{ $beer->description }}}</td>
					<td style="text-align: center;">{{ $beer->volume }}L</td>
					<td style="text-align: center;">{{ $beer->alcohol }}%</td>
					<td style="text-align: center;">&euro;&nbsp;{{ $beer->price }}</td>
                    <td style="text-align: center;"><a href="{{ action('BeersController@edit', $beer->id) }}" class="btn btn-default">Aanpassen</a></td>
					<td style="text-align: center;">
						<form action="{{ action('BeersController@execDelete') }}" method="post" role="form">
        				<input type="hidden" name="beer" value="{{ $beer->id }}" />
						<input type="submit" value="Verwijderen" />
    					</form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop