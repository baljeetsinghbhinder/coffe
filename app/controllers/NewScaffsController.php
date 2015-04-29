<?php

class NewScaffsController extends \BaseController {

	/**
	 * Display a listing of newscaffs
	 *
	 * @return Response
	 */
	public function index()
	{
		$newscaffs = NewScaff::all();

		return View::make('newscaffs.index', compact('newscaffs'));
	}

	/**
	 * Show the form for creating a new newscaff
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('newscaffs.create');
	}

	/**
	 * Store a newly created newscaff in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Newscaff::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Newscaff::create($data);

		return Redirect::route('newscaffs.index');
	}

	/**
	 * Display the specified newscaff.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$newscaff = Newscaff::findOrFail($id);

		return View::make('newscaffs.show', compact('newscaff'));
	}

	/**
	 * Show the form for editing the specified newscaff.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$newscaff = Newscaff::find($id);

		return View::make('newscaffs.edit', compact('newscaff'));
	}

	/**
	 * Update the specified newscaff in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$newscaff = Newscaff::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Newscaff::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$newscaff->update($data);

		return Redirect::route('newscaffs.index');
	}

	/**
	 * Remove the specified newscaff from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Newscaff::destroy($id);

		return Redirect::route('newscaffs.index');
	}

}
