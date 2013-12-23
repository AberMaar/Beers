<?php

class BeersController extends BaseController {

    public function index() {

        $beers = Beer::all();

        return View::make('index', compact('beers'));
    }

    public function add() {

        return View::make('add');
    }

    public function execAdd() {

	    $validator = Validator::make(Input::all(), Beer::$rules);
	
	    if ($validator->passes()) {
		    $beer = new Beer;
		    $beer->name = Input::get('name');
		    $beer->brewery = Input::get('brewery');
		    $beer->description = Input::get('description');
		    $beer->volume = Input::get('volume');
		    $beer->alcohol = Input::get('alcohol');
		    $beer->price = Input::get('price');
		    $beer->save();

		    return Redirect::action('BeersController@index');
	    }
		
		return Redirect::to('/new')->withErrors($validator);

    }

    public function edit(Beer $beer) {
 
        return View::make('edit', compact('beer'));
    }

    public function execEdit() {

	    $beer = Beer::findOrFail(Input::get('id'));
	    $beer->name = Input::get('name');
	    $beer->brewery = Input::get('brewery');
	    $beer->description = Input::get('description');
	    $beer->volume = Input::get('volume');
	    $beer->alcohol = Input::get('alcohol');
	    $beer->price = Input::get('price');
	    $beer->save();

	    return Redirect::action('BeersController@index');
    }

    public function execDelete() {

	    $id = Input::get('beer');
	    $beer = Beer::findOrFail($id);
	    $beer->delete();

	    return Redirect::action('BeersController@index');
    }

}