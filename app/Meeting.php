<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = [
        'date',
        'time',
        'room',
        'theme',
        'opening',
        'welcome',
        'tme',
        'speaker1',
        'project1_type',
        'project1_title',
        'speaker2',
        'project2_type',
        'project2_title',
        'speaker3',
        'project3_type',
        'project3_title',
        'speaker4',
        'project4_type',
        'project4_title',
        'tablemaster',
        'evaluator1',
        'evaluator2',
        'evaluator3',
        'evaluator4',
        'timer',
        'ahcounter',
        'grammarian',
        'general',
        'closing',
        'coming',
    ];
}
