<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function getName()
    {
        return $this->fullname;
    }
}
