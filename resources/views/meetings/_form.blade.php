{{ Form::label('date', 'Date') }}
{{ Form::date('date') }}

{{ Form::label('time', 'Time') }}
{{ Form::time('time') }}

{{ Form::label('room', 'Room') }}
{{ Form::text('room') }}

{{ Form::label('theme', 'Theme') }}
{{ Form::text('theme') }}

{{ Form::label('opening', 'Opening Remarks') }}
{{ Form::select('opening', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::label('welcome', 'Welcome Guests') }}
{{ Form::select('welcome', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::label('tme', 'Toastmaster of the Evening') }}
{{ Form::select('tme', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::label('speaker1', '1st Speech') }}
{{ Form::select('speaker1', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::label('speaker2', '2nd Speech') }}
{{ Form::select('speaker2', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::label('speaker3', '3nd Speech') }}
{{ Form::select('speaker3', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::label('speaker4', '4nd Speech') }}
{{ Form::select('speaker4', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::label('tablemaster', 'Table Topic Master') }}
{{ Form::select('tablemaster', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::label('timer', 'Timer\'s Report') }}
{{ Form::select('tiner', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::label('ahcounter', 'Ah-counter\'s Report') }}
{{ Form::select('ahcounter', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::label('grammarian', 'Grammarian\'s Report') }}
{{ Form::select('grammarian', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::label('general', 'General Evaluator\'s Report') }}
{{ Form::select('general', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::label('closing', 'Closing Remarks') }}
{{ Form::select('closing', $members, null, ['placeholder' => 'Choose a member...']) }}

{{ Form::submit('Update Coming Meeting Details') }}