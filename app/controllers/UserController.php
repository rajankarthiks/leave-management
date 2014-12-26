<?php

use Acme\Forms\RegistrationForm;
use Acme\Forms\SignInForm;
use Acme\Registration\RegisterUserCommand;

class UserController extends BaseController {

    /**
     * @var Acme\Forms\RegistrationForm
     */
    private $registrationForm;
    /**
     * @var Acme\Forms\SignInForm
     */
    private $signInForm;

    function __construct(RegistrationForm $registrationForm, SignInForm $signInForm)
    {
        $this->registrationForm = $registrationForm;
        $this->signInForm = $signInForm;
    }

    public function home()
    {
        if ( Auth::check() )
        {
            if ( Auth::user()->hasRole('administrator') )
            {
                return Redirect::route('admin.index');
            }

            return Redirect::route('dashboard');
        }
        return View::make('users.index');
    }

    public function post_register()
    {
        try {
            $this->registrationForm->validate(Input::all());
        }
        catch (\Laracasts\Validation\FormValidationException $exception) {
            return Redirect::back()->withInput()->withErrors($exception->getErrors());
        }

        $user = $this->execute(RegisterUserCommand::class);

        Auth::login($user);

        Flash::success('You Have been Successfully Registered');

        return Redirect::home();
    }

    public function post_login()
    {
        $input = Input::only('email', 'password');

        $this->signInForm->validate($input);

        if ( ! Auth::attempt($input))
        {
            Flash::error('We were unable to sign you in. Please check your credentials and try again!');

            return Redirect::back()->withInput();
        }

        Flash::success('Welcome back! You are Now Logged In!');

        if ( Auth::user()->hasRole('administrator') )
        {
            return Redirect::route('admin.index');
        }

        return Redirect::route('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        Flash::success('You have now been logged out.');

        return Redirect::home();
    }

    public function dashboard()
    {
        $user = Auth::user();

        $user->assignRole(1);

        return View::make('users.dashboard');
    }

}
