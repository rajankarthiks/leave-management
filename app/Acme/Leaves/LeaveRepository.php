<?php namespace Acme\Leaves;

use Leave;
use User;

class LeaveRepository {

    /**
     *
     * @param \Leave $leave
     * @internal param \Acme\Leaves
     * @return mixed
     */
    public function apply(Leave $leave)
    {
        $leave->save();
    }

    public function getAll()
    {
        return Leave::with('user')->get();
    }

    public function getAllLeavesByUserId($id)
    {
        $leaves = Leave::where('user_id',$id)->get();

        return $leaves;
    }

    public function approve_leave($id)
    {
        $leave = Leave::findorFail($id);
        $user = User::find($leave->user_id);

        if( $leave->status != 'Approved' )
        {
            $leave->status = 'Approved';
            $leave->save();
            $user->leaves += 1;
            $user->save();
        }
    }

    public function reject_leave($id)
    {
        $leave = Leave::findorFail($id);
        $user = User::find($leave->user_id);

        if( $leave->status != 'Rejected' )
        {
            $leave->status = 'Rejected';
            $leave->save();
            ( $user->leaves == 0 ) ? $user->leaves = 0 : $user->leaves -= 1;
            $user->save();
        }
    }

}