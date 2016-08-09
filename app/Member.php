<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function getNameWithTitle()
    {
        return (empty($this->title) === true ? $this->fullname : $this->fullname .', ' .$this->title);
    }
}
