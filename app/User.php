<?php

namespace App;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}