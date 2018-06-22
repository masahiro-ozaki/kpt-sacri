@extends('layouts.app')

@section('content')

   

    <div class="row">
    <!--grid-->
    <div class="col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    
    <h1><span style="font : normal 30pt 'Monotype Corsiva'">{{ $kpt->dates }} Edit</span></h1>    
    
    {!! Form::model($kpt, ['route' => ['kpts.update', $kpt->id], 'method' => 'put']) !!}
        
        <div class="form-group">
        {!! Form::label('dates', 'Date:') !!}
        {!! Form::date('dates', \Carbon\Carbon::now()) !!}
        </div>
        
        
        <div class="form-group">
        {!! Form::label('keep', 'Keep:') !!}
        {!! Form::textarea('keep', null, ['class' => 'form-control' , 'rows'=>'3']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('problem', 'Problem:') !!}
        {!! Form::textarea('problem', null, ['class' => 'form-control' , 'rows'=>'3']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('Try', 'Try:') !!}
        {!! Form::textarea('Try', null, ['class' => 'form-control' , 'rows'=>'3']) !!}
        </div>
        
        <div class="form-group">
         {{ Form::label('MVP','MVP',array('class'=>'control-label')) }}
             <div class="controls">
             {{ Form::select('MVP',array(''=>'選択してください','Eriko'=>'Eriko','JET'=>'Jet','Nanashim'=>'Nana','Taisei'=>'Taisei','Yuka'=>'Yuka','Yuki'=>'Yuki')) }}
             </div>
        </div>
        
        <div class="form-group">
        {!! Form::label('reason', 'Reason:') !!}
        {!! Form::textarea('reason', null, ['class' => 'form-control' , 'rows'=>'1']) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('want', 'Want:') !!}
        {!! Form::textarea('want', null, ['class' => 'form-control' , 'rows'=>'1']) !!}
        </div>

        <!--button-->
        {{ Form::button('<span class="glyphicon glyphicon-refresh"> 更新</span>', array('class'=>'btn btn-info', 'type'=>'submit')) }}

    {!! Form::close() !!}
    
    </div>
    </div>

@endsection