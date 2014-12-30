<?php

class Leave extends \Eloquent {

	protected $fillable = ['leave_date','reason','status','user_id'];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public static function apply($user_id, $leave_date, $reason, $status)
    {
        $leave = new static(compact('user_id', 'leave_date', 'reason', 'status'));

        return $leave;
    }

}