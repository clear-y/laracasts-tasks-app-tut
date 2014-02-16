{{ Form::open(['url' => '/tasks', 'class' => 'form']) }}
    <h3>Add a task</h3>
    <div class="form">
        <div class="form-group">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('assign', 'Assign to:') }}
            {{ Form::select('assign', $users, null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Add task', ['class' => 'btn btn-primary btn-block']) }}
        </div>
    </div>
{{ Form::close() }}