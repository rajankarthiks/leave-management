<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class EditUserForm extends FormValidator {

    protected $rules = [
        'username' => 'required',
        'email'    => 'required',
        'status' => 'required'
    ];

}