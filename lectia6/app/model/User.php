<?php

namespace App\Model;

class User
{
    protected $name, $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getInfo(){
        return $this->name . " " . $this->email;
    }
}
