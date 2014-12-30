<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class ApplyLeaveForm extends FormValidator {

    protected $rules = [
        'reason' => 'required',
        'leave_date'    => 'required'
    ];

}