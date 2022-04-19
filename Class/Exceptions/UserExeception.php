<?php

namespace Class\Exceptions;


class UserException extends \Exception {

    public static function NotVerified(): static {
return new static('user not verified'); 
    }
}