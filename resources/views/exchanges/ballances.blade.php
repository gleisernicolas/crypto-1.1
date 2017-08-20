@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Exchange</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'exchanges.store','method' => 'post', 'class' => 'form-horizontal']) !!}

                        {{ csrf_field() }}

                        <div class="form-group">
                            {!! Form::label('name', 'Exchange Name',['class' => 'control-label col-md-4']) !!}
                            <div class="col-md-6">
                                {!! Form::select('name',['Cryptopia' => 'Cryptopia','Bittrex' => 'Bittrex', 'placeholder'=> 'Exchange Name', 'required' =>'', 'class' => 'form-control']) !!}

                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('api_key', 'Exchange API KEY',['class' => 'control-label col-md-4']) !!}
                            <div class="col-md-6">
                                {!! Form::text('api_key','',['placeholder'=> 'API KEY',  'required' =>'', 'class' => 'form-control']) !!}

                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('api_secret', 'Exchange API SECRET',['class' => 'control-label col-md-4']) !!}

                            <div class="col-md-6">
                                {!! Form::text('api_secret','',['placeholder'=> 'Exchange Name',  'required' =>'', 'class' => 'form-control']) !!}

                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Create Exchange',[ 'class' => 'form-control btn btn-success btn-md', ]) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
