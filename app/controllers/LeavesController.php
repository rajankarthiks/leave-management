<?php

use Acme\Forms\ApplyLeaveForm;
use Acme\Leaves\ApplyLeaveCommand;
use Acme\Leaves\LeaveRepository;

class LeavesController extends \BaseController {

    /**
     * @var Acme\Leaves\LeaveRepository
     */
    private $leaveRepo;

    public function __construct(ApplyLeaveForm $applyLeaveForm, LeaveRepository $leaveRepo)
    {
        $this->applyLeaveForm = $applyLeaveForm;
        $this->leaveRepo = $leaveRepo;
    }

    public function apply()
    {
        if ( Auth::user()->leaves < 8 )
        {
            try
            {
                $this->applyLeaveForm->validate(Input::all());
            }
            catch (\Laracasts\Validation\FormValidationException $exception)
            {
                return Redirect::back()->withInput()->withErrors($exception->getErrors());
            }

            $formData = array_add(Input::get(),'user_id',Auth::user()->id);

            $input = array_add($formData,'status','Pending');

            $this->execute(ApplyLeaveCommand::class,$input);

            Flash::success('Your Request Has Been Successfully Submitted!!!');
        }
        else {
            Flash::error('You can only take leave for 7 days!!!');
        }
        return Redirect::back();
    }

    public function approve_leave($id)
    {
        $this->leaveRepo->approve_leave($id);

        Flash::success('The Request has been processed Successfully!!');

        return Redirect::back();
    }

    public function reject_leave($id)
    {
        $this->leaveRepo->reject_leave($id);

        Flash::success('The Request has been processed Successfully!!');

        return Redirect::back();
    }


}