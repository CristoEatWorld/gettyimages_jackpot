<?php

class PersonasController extends \BaseController {

	/**
	 * Display a listing of personas
	 *
	 * @return Response
	 */
	public function index()
	{
		$personas = Persona::all();

		return View::make('personas.index')
			->with('personas', $personas);
	}

	/**
	 * Show the form for creating a new persona
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('personas.create');
	}

	/**
	 * Store a newly created persona in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Persona::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Persona::create($data);

		return Redirect::to('personas');
	}

	/**
	 * Display the specified persona.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$persona = Persona::findOrFail($id);

		return View::make('personas.show')
			->with('persona', $persona);
	}

	/**
	 * Show the form for editing the specified persona.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$persona = Persona::find($id);

		return View::make('personas.edit')
			->with('persona', $persona);
	}

	/**
	 * Update the specified persona in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$persona = Persona::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Persona::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$persona->update($data);

		return Redirect::route('personas');
	}

	/**
	 * Remove the specified persona from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Persona::destroy($id);

		return Redirect::route('personas');
	}

}
