<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function getNameWithTitle()
    {
        return (empty($this->title) === true ? $this->fullname : $member->fullname .', ' .$this->title);
    }
}
