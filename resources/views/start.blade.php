<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
    
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
        <div class="row">
            <h1>Survey</h1>
            <hr>
        </div>
        <div class="row">
            <p class="lead">Please complete the following form to allow a study coordinator from Queen's University to contact you about participation in research studies. You are under no obligation to participate in any studies and you may withdraw at any time.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::label('name', "Contact Person Full Name:", ['class' => 'col-md-3 control-label']) !!}
                    <div class="col-md-9">
                    {!! Form::text('name', null, ['class' => 'form-control', 'required' => '']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('email', "Email Address:", ['class' => 'col-md-3 control-label']) !!}
                    <div class="col-md-9">
                    {!! Form::text('email', null, ['class' => 'form-control', 'required' => '']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('phone', "Phone Number(s):", ['class' => 'col-md-3 control-label']) !!}
                    <div class="col-md-9">
                    {!! Form::text('phone', null, ['class' => 'form-control', 'required' => '']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('date', "Please specify best day and/or time to reach you:", ['class' => 'col-md-3 control-label']) !!}
                    <div class="col-md-9">
                    {!! Form::text('date', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('clinician', "Enter the name of the clinician who invited you to participate:", ['class' => 'col-md-3 control-label']) !!}
                    <div class="col-md-9">
                    {!! Form::text('clinician', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('comments', "Comments:", ['class' => 'col-md-3 control-label']) !!}
                    <div class="col-md-9">
                    {!! Form::textarea('comments', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <button type="submit" class="btn btn-block btn-primary form-control">Submit</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        </div>
    </body>
</html>
