<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function getShortname()
    {
        $words = preg_split("/\s+/", $this->category);
        $initials = '';

        foreach ($words as $word) {
            $initials .= $word[0];
        }

        return $initials .' — ' .'Proj. ' .$this->number .' — ' .$this->title;
    }
}
