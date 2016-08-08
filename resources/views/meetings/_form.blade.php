<div>
    {{ Form::label('date', 'Date') }}
    {{ Form::date('date') }}

    {{ Form::label('time', 'Time') }}
    {{ Form::time('time') }}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {{ Form::text('room', null, ['class' => 'mdl-textfield__input']) }}
    {{ Form::label('room', 'Room', ['class' => 'mdl-textfield__label']) }}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {{ Form::label('theme', 'Theme', ['class' => 'mdl-textfield__label']) }}
    {{ Form::text('theme', null, ['class' => 'mdl-textfield__input']) }}
</div>

<div>
    {{ Form::label('opening', 'Opening Remarks') }}
    {{ Form::select('opening', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('welcome', 'Welcome Guests') }}
    {{ Form::select('welcome', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('tme', 'Toastmaster of the Evening') }}
    {{ Form::select('tme', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('speaker1', '1st Speech') }}
    {{ Form::select('speaker1', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>


<div>
    {{ Form::label('speaker2', '2nd Speech') }}
    {{ Form::select('speaker2', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('speaker3', '3rd Speech') }}
    {{ Form::select('speaker3', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('speaker4', '4th Speech') }}
    {{ Form::select('speaker4', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('tablemaster', 'Table Topic Master') }}
    {{ Form::select('tablemaster', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('evaluator1', '1st Evaluator') }}
    {{ Form::select('evaluator1', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>


<div>
    {{ Form::label('evaluator2', '2nd Evaluator') }}
    {{ Form::select('evaluator2', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('evaluator3', '3rd Evaluator') }}
    {{ Form::select('evaluator3', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('evaluator4', '4th Evaluator') }}
    {{ Form::select('evaluator4', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('timer', 'Timer\'s Report') }}
    {{ Form::select('timer', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('ahcounter', 'Ah-counter\'s Report') }}
    {{ Form::select('ahcounter', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('grammarian', 'Grammarian\'s Report') }}
    {{ Form::select('grammarian', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('general', 'General Evaluator\'s Report') }}
    {{ Form::select('general', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

<div>
    {{ Form::label('closing', 'Closing Remarks') }}
    {{ Form::select('closing', $members, null, ['placeholder' => 'Choose a member...']) }}
</div>

{{ Form::submit('Update Coming Meeting Details', ['name' => 'update', 'class' => 'mdl-button mdl-js-button mdl-button--raised']) }}
{{ Form::submit('Close and Generate Printed Agenda', ['name' => 'close', 'class' => 'mdl-button mdl-js-button mdl-button--raised']) }}

