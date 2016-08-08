<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function getNameWithTitle()
    {
        return $this->fullname;
    }
}
