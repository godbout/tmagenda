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
        'speaker2',
        'speaker3',
        'speaker4',
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
