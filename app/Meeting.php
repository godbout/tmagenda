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
        'project1_details',
        'speaker2',
        'project2_details',
        'speaker3',
        'project3_details',
        'speaker4',
        'project4_details',
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
