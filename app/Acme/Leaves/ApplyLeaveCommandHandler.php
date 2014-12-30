<?php namespace Acme\Leaves;

use Laracasts\Commander\CommandHandler;
use Acme\Leaves\LeaveRepository;
use Leave;

class ApplyLeaveCommandHandler implements CommandHandler {

    /**
     * @var \Leave
     */
    private $leaveRepo;

    function __construct(LeaveRepository $leaveRepo)
    {
        $this->leaveRepo = $leaveRepo;
    }

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $leave = Leave::apply(
            $command->user_id,$command->leave_date, $command->reason, $command->status
        );

        $this->leaveRepo->apply($leave);

        return $leave;
    }

}