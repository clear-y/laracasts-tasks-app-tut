<?php

class Task extends Eloquent {   
    
    protected $guarded = ['id'];

	public function user()
    {
        return $this->belongsTo('User');
    }

    public static function find($id, $username = null)
    {
        $task = static::with('user')->find($id);

        if ($task) {
            if($username and $task->user->username !== $username) {
                throw new Illuminate\Database\Eloquent\ModelNotFoundException;
            }
            return $task;
        } else {
            throw new Illuminate\Database\Eloquent\ModelNotFoundException;
        }
    }

    public static function byUsername($username)
    {
        return User::byUsername($username)->tasks;
    }
}