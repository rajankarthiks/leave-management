<?php

use Acme\Users\UserRepository;
use Acme\Forms\RegistrationForm;
use Acme\Registration\RegisterUserCommand;
use Acme\Forms\EditUserForm;

class AdminController extends \BaseController {

    protected $repo;
	/**
	 * @var RegistrationForm
	 */
	private $registrationForm;
	/**
	 * @var EditUserForm
	 */
	private $editUserForm;

	/**
	 * @var RegisterUserCommand
	 */

	function __construct(UserRepository $repo,RegistrationForm $registrationForm,EditUserForm $editUserForm)
    {
        $this->repo = $repo;
		$this->registrationForm = $registrationForm;
		$this->editUserForm = $editUserForm;
	}

    /**
	 * Display a listing of the resource.
	 * GET /admin
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = $this->repo->getAll();

		return View::make('Admins.index')
                     ->with('users',$users);
	}

	public function createUserPage()
	{
		return View::make('Admins.createUser');
	}

	public function editUserPage($id)
	{
		$user = USer::find($id);

		return View::make('Admins.editUser')->with('user',$user);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/create
	 *
	 * @return Response
	 */
	public function createUser()
	{
		try {
			$this->registrationForm->validate(Input::all());
		}
		catch (\Laracasts\Validation\FormValidationException $exception) {
			return Redirect::back()->withInput()->withErrors($exception->getErrors());
		}

		$this->execute(RegisterUserCommand::class);

		Flash::success('USer has been Successfully created.');

		return Redirect::home();

	}

	public function editUser($id)
	{
		try {
			$this->editUserForm->validate(Input::all());
		}
		catch (\Laracasts\Validation\FormValidationException $exception) {
			return Redirect::back()->withInput()->withErrors($exception->getErrors());
		}

		$user = User::find($id);

		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->status = Input::get('status');

		$user->save();

		Flash::success('User has been Successfully edited.');

		return Redirect::home();

	}


	/**
	 * Store a newly created resource in storage.
	 * POST /admin
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function deleteUser($id)
	{
		User::destroy($id);

		Flash::success('The User has been deleted.');

		return Redirect::back();
	}

}