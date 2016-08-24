
<fieldset>
    <div class="form-group">
        {{ Form::label('date', 'Date') }}
        {{ Form::date('date') }}
    
        {{ Form::label('time', 'Time') }}
        {{ Form::time('time') }}
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group label-floating">
                {{ Form::label('room', 'Room', ['class' => 'control-label']) }}
                {{ Form::text('room', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group label-floating">
                {{ Form::label('theme', 'Theme', ['class' => 'control-label']) }}
                {{ Form::text('theme', null, ['class' => 'form-control']) }}
            </div>
        </div>
    </div>
    
    <div class="form-group">
        {{ Form::label('opening', 'Opening Remarks', ['class' => 'control-label']) }}
        {{ Form::select('opening', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
    </div>
    
    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('welcome', 'Welcome Guests', ['class' => 'control-label']) }}
            {{ Form::select('welcome', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('tme', 'Toastmaster of the Evening', ['class' => 'control-label']) }}
            {{ Form::select('tme', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        </div>
    </div>
    
    <div class="form-group">
        {{ Form::label('speaker1', '1st Speech', ['class' => 'control-label']) }}
        {{ Form::select('speaker1', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control col-md-4']) }}
        {{ Form::select('project1_type', $projects, null, ['placeholder' => 'Choose a project...', 'class' => 'form-control col-md-4']) }}
        {{ Form::text('project1_title', null, ['placeholder' => 'Title', 'class' => 'form-control col-md-4']) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('speaker2', '2nd Speech', ['class' => 'control-label']) }}
        {{ Form::select('speaker2', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        {{ Form::select('project2_type', $projects, null, ['placeholder' => 'Choose a project...', 'class' => 'form-control']) }}
        {{ Form::text('project2_title', null, ['placeholder' => 'Title', 'class' => 'form-control']) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('speaker3', '3rd Speech') }}
        {{ Form::select('speaker3', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        {{ Form::select('project3_type', $projects, null, ['placeholder' => 'Choose a project...', 'class' => 'form-control']) }}
        {{ Form::text('project3_title', null, ['placeholder' => 'Title', 'class' => 'form-control']) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('speaker4', '4th Speech') }}
        {{ Form::select('speaker4', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        {{ Form::select('project4_type', $projects, null, ['placeholder' => 'Choose a project...', 'class' => 'form-control']) }}
        {{ Form::text('project4_title', null, ['placeholder' => 'Title', 'class' => 'form-control']) }}
    </div>
    
    <div class="form-group">
        {{ Form::label('tablemaster', 'Table Topic Master', ['class' => 'control-label']) }}
        {{ Form::select('tablemaster', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
    </div>
    
    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('evaluator1', '1st Evaluator', ['class' => 'control-label']) }}
            {{ Form::select('evaluator1', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('evaluator2', '2nd Evaluator', ['class' => 'control-label']) }}
            {{ Form::select('evaluator2', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('evaluator3', '3rd Evaluator', ['class' => 'control-label']) }}
            {{ Form::select('evaluator3', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('evaluator4', '4th Evaluator', ['class' => 'control-label']) }}
            {{ Form::select('evaluator4', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        </div>
    </div>    
    
    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('timer', 'Timer\'s Report', ['class' => 'control-label']) }}
            {{ Form::select('timer', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        </div>
        <div class="form-group col-md-6">
            {{ Form::label('ahcounter', 'Ah-counter\'s Report', ['class' => 'control-label']) }}
            {{ Form::select('ahcounter', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('grammarian', 'Grammarian\'s Report', ['class' => 'control-label']) }}
            {{ Form::select('grammarian', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        </div>
        
        <div class="form-group col-md-6">
            {{ Form::label('general', 'General Evaluator\'s Report', ['class' => 'control-label']) }}
            {{ Form::select('general', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
        </div>
    </div>
    
    <div class="form-group">
        {{ Form::label('closing', 'Closing Remarks', ['class' => 'control-label']) }}
        {{ Form::select('closing', $members, null, ['placeholder' => 'Choose a member...', 'class' => 'form-control']) }}
    </div>
    
    {{ Form::submit('Update Coming Meeting Details', ['name' => 'update', 'class' => 'btn btn-primary']) }}
    {{ Form::submit('Close and Generate Printed Agenda', ['name' => 'close', 'class' => 'btn btn-warning']) }}
</fieldset>
