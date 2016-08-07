<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $dates = [
        'date',
    ];
    
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
    ];
}
