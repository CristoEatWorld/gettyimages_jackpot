<?php

class PreferenciasController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the nerds
		$preferencias = Preferencia::all();

		// load the view and pass the nerds
		return View::make('preferencias.index')
			->with('preferencias', $preferencias);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function damepreferencia()
	{
		// get the nerd
		$preferencias = Preferencia::all();
		return json_encode($preferencias);
		// show the view and pass the nerd to it
		/*return View::make('preferencias.show')
			->with('preferencia', $preferencia);*/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('preferencias.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Preferencia::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$destinationPath = 'noentre';
	    $filenameUno        = '';
	    $filenameDos        = '';

	    $preferencia = new Preferencia;
	    $preferencia->debugapp       		= Input::get('debugapp');

	    if (Input::hasFile('imageuno')) {
	        $file            = Input::file('imageuno');
	        $destinationPath = public_path().'/img/';
	        $filenameUno     = str_random(6) . '_' . $file->getClientOriginalName();
	        $uploadSuccess   = $file->move($destinationPath, $filenameUno);
	        $preferencia->premiounonombre      	= '/img/' . $filenameUno;
	    }

	    if (Input::hasFile('imagedos')) {
	        $file2           = Input::file('imagedos');
	        $destinationPath = public_path().'/img/';
	        $filenameDos     = str_random(6) . '_' . $file2->getClientOriginalName();
	        $uploadSuccess   = $file2->move($destinationPath, $filenameDos);
	        $preferencia->premiodosnombre = '/img/' . $filenameDos;
	    }

	    if (Input::hasFile('imagetres')) {
	        $file3           	= Input::file('imagetres');
	        $destinationPath 	= public_path().'/img/';
	        $filenameTres     	= str_random(6) . '_' . $file3->getClientOriginalName();
	        $uploadSuccess   	= $file3->move($destinationPath, $filenameTres);
	        $preferencia->premiotresnombre = '/img/' . $filenameTres;
	    }

	    if (Input::hasFile('imagecuatro')) {
	        $file4           	= Input::file('imagecuatro');
	        $destinationPath 	= public_path().'/img/';
	        $filenameCuatro     = str_random(6) . '_' . $file2->getClientOriginalName();
	        $uploadSuccess   	= $file4->move($destinationPath, $filenameCuatro);
	        $preferencia->premicuatronombre = '/img/' . $filenameCuatro;
	    }

	    if (Input::hasFile('imagecinco')) {
	        $file5           	= Input::file('imagecinco');
	        $destinationPath 	= public_path().'/img/';
	        $filenameCinco     	= str_random(6) . '_' . $file2->getClientOriginalName();
	        $uploadSuccess   	= $file5->move($destinationPath, $filenameCinco);
	        $preferencia->premiocinconombre = '/img/' . $filenameCinco;
	    }	    
	    	
		$preferencia->premiounotexto 		= Input::get('premiounotexto');		
		$preferencia->premiodostexto 		= Input::get('premiodostexto');
		$preferencia->premiotrestexto 		= Input::get('premiotrestexto');
		$preferencia->premiocuatrotexto 	= Input::get('premiocuatrotexto');
		$preferencia->premiocincotexto 		= Input::get('premiocincotexto');
		$preferencia->premiounocant			= Input::get('premiounocant');
		$preferencia->premiodoscant			= Input::get('premiodoscant');
		$preferencia->premiotrescant		= Input::get('premiotrescant');
		$preferencia->premiocuatrocant		= Input::get('premiocuatrocant');
		$preferencia->premiocincocant		= Input::get('premiocincocant');

		$preferencia->participantecant 		= Input::get('participantecant');
		$preferencia->duracionevento 		= Input::get('duracionevento');
		$preferencia->save();

		//Preferencia::create(Input::except('_token'));

		return Redirect::to('preferencias');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the nerd
		$preferencia = Preferencia::find($id);

		// show the view and pass the nerd to it
		return View::make('preferencias.show')
			->with('preferencia', $preferencia);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the nerd
		$preferencia = Preferencia::find($id);

		// show the edit form and pass the nerd
		return View::make('preferencias.edit')
			->with('preferencia', $preferencia);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$preferencia = Preferencia::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Preferencia::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$destinationPath = 'noentre';
	    $filenameUno        = '';
	    $filenameDos        = '';

	    $preferencia = Preferencia::find($id);

	    $preferencia->debugapp       		= Input::get('debugapp');

	    if (Input::hasFile('imageuno')) {
	        $file            = Input::file('imageuno');
	        $destinationPath = public_path().'/img/';
	        $filenameUno     = str_random(6) . '_' . $file->getClientOriginalName();
	        $uploadSuccess   = $file->move($destinationPath, $filenameUno);
	        $preferencia->premiounonombre      	= '/img/' . $filenameUno;
	    }

	    if (Input::hasFile('imagedos')) {
	        $file2           = Input::file('imagedos');
	        $destinationPath = public_path().'/img/';
	        $filenameDos     = str_random(6) . '_' . $file2->getClientOriginalName();
	        $uploadSuccess   = $file2->move($destinationPath, $filenameDos);
	        $preferencia->premiodosnombre = '/img/' . $filenameDos;
	    }

	    if (Input::hasFile('imagetres')) {
	        $file3           	= Input::file('imagetres');
	        $destinationPath 	= public_path().'/img/';
	        $filenameTres     	= str_random(6) . '_' . $file3->getClientOriginalName();
	        $uploadSuccess   	= $file3->move($destinationPath, $filenameTres);
	        $preferencia->premiotresnombre = '/img/' . $filenameTres;
	    }

	    if (Input::hasFile('imagecuatro')) {
	        $file4           	= Input::file('imagecuatro');
	        $destinationPath 	= public_path().'/img/';
	        $filenameCuatro     = str_random(6) . '_' . $file2->getClientOriginalName();
	        $uploadSuccess   	= $file4->move($destinationPath, $filenameCuatro);
	        $preferencia->premicuatronombre = '/img/' . $filenameCuatro;
	    }

	    if (Input::hasFile('imagecinco')) {
	        $file5           	= Input::file('imagecinco');
	        $destinationPath 	= public_path().'/img/';
	        $filenameCinco     	= str_random(6) . '_' . $file2->getClientOriginalName();
	        $uploadSuccess   	= $file5->move($destinationPath, $filenameCinco);
	        $preferencia->premiocinconombre = '/img/' . $filenameCinco;
	    }	    
	    	
		$preferencia->premiounotexto 		= Input::get('premiounotexto');		
		$preferencia->premiodostexto 		= Input::get('premiodostexto');
		$preferencia->premiotrestexto 		= Input::get('premiotrestexto');
		$preferencia->premiocuatrotexto 	= Input::get('premiocuatrotexto');
		$preferencia->premiocincotexto 		= Input::get('premiocincotexto');
		$preferencia->premiounocant			= Input::get('premiounocant');
		$preferencia->premiodoscant			= Input::get('premiodoscant');
		$preferencia->premiotrescant		= Input::get('premiotrescant');
		$preferencia->premiocuatrocant		= Input::get('premiocuatrocant');
		$preferencia->premiocincocant		= Input::get('premiocincocant');
		
		$preferencia->participantecant 		= Input::get('participantecant');
		$preferencia->duracionevento 		= Input::get('duracionevento');
		$preferencia->save();

		return Redirect::to('preferencias');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$preferencia = Preferencia::find($id);
		$preferencia->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the preferencia!');
		return Redirect::to('preferencias');
	}


}
