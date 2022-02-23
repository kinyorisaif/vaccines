<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('a') }}
            {{ Form::text('a', $vac->a, ['class' => 'form-control' . ($errors->has('a') ? ' is-invalid' : ''), 'placeholder' => 'A']) }}
            {!! $errors->first('a', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('b') }}
            {{ Form::text('b', $vac->b, ['class' => 'form-control' . ($errors->has('b') ? ' is-invalid' : ''), 'placeholder' => 'B']) }}
            {!! $errors->first('b', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('c') }}
            {{ Form::text('c', $vac->c, ['class' => 'form-control' . ($errors->has('c') ? ' is-invalid' : ''), 'placeholder' => 'C']) }}
            {!! $errors->first('c', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('d') }}
            {{ Form::text('d', $vac->d, ['class' => 'form-control' . ($errors->has('d') ? ' is-invalid' : ''), 'placeholder' => 'D']) }}
            {!! $errors->first('d', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>