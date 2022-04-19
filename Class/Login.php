<?php

namespace Class;

use Class\Exceptions\UserIsBanException;
use Class\Exceptions\UserNoteVerifiedException;

class Login {

    public function __construct(protected User $user)
    {
        
    }

    public function Login(): bool {
        if(!$this->user->isVerified()){
            // throw new UserNoteVerifiedException();
throw UserException::NotVerified();
        }

        // if($this->user->isBan()){
        //     throw new UserIsBanException();
        // }
return true;
    }
}