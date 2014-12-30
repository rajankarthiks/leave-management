<?php namespace Acme\Leaves;

class ApplyLeaveCommand {

    public $user_id;

    public $leave_date;

    public $reason;

    public $status;

    function __construct($user_id,$leave_date,$reason,$status)
    {
        $this->user_id = $user_id;
        $this->leave_date = $leave_date;
        $this->reason = $reason;
        $this->status = $status;
    }
}