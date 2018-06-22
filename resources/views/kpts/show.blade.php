<style>
.contents {
    font-family: 'Monotype Corsiva';
    font-size: 50px;
    text-shadow: 3px 3px 3px #79EAE6;
    }
    
.box16{
    padding: 0.5em 1em;
    margin: 2em 0;
    background: -webkit-repeating-linear-gradient(-45deg, #f0f8ff, #f0f8ff 3px,#e9f4ff 3px, #e9f4ff 7px);
    background: repeating-linear-gradient(-45deg, #f0f8ff, #f0f8ff 3px,#e9f4ff 3px, #e9f4ff 7px);
}
.box16 p {
    margin: 0; 
    padding: 0;
}

.panel{
    overflow-y:scroll;
}
    

</style>

@extends('layouts.app')

@section('content')
    
    

<h1 class='contents'>{{ $kpt->dates }}&nbsp;&nbsp;&nbsp; Contents&nbsp;</h1>
           
        <div class='box16'>
            
            <h3><b>Keep</b></h3>
            <div class='panel panel-info' style="height: 20vh;">
                <h4>{!! nl2br($kpt->keep) !!}</h4>
            </div>
            
            <h3><b>Problem</b></h3>
            <div class='panel panel-info' style="height: 20vh;">
                <h4>{!! nl2br($kpt->problem) !!}</h4>
            </div>
            
            <h3><b>Try</b></h3>
            <div class='panel panel-info' style="height: 20vh;">
                <h4>{!! nl2br($kpt->try) !!}</h4>
            </div>
            
            <h3><b>MVP</b></h3>
            <div class='panel panel-info' style="height: 20vh;">
                <h4>{!! nl2br($kpt->MVP) !!}</h4>
            </div>
            
            <h3><b>Reason</b></h3>
            <div class='panel panel-info' style="height: 20vh;">
                <h4>{!! nl2br($kpt->reason) !!}</h4>
            </div>
            
            <h3><b>Want</b></h3>
            <div class='panel panel-info' style="height: 20vh;">
                <h4>{!! nl2br($kpt->want) !!}</h4>
            </div>
        </div>
<div class='btn-toolbar'>
    
    <!--先にゴミ箱を右に寄せる-->

        {!! Form::model($kpt, ['route' => ['kpts.destroy', $kpt->id], 'method' => 'delete'])!!}
            {{ Form::button('<span class="glyphicon glyphicon-trash"></span>', array('class'=>'btn btn-default btn-lg pull-right', 'type'=>'submit')) }}
        {!! Form::close() !!}
    
        {!! link_to_route('kpts.edit', ' Edit', ['id' => $kpt->id], ['class' => 'btn btn-info btn-lg glyphicon glyphicon-apple']) !!}
</div>
<!--コピペ用-->
<br>
<h3>Copy&Paste</h3>
<div class='panel panel-info'>
        <h3><b>Keep</b></h3><p> {!! nl2br($kpt->keep) !!}</p>
        <h3><b>Problem</b></h3><p> {!! nl2br($kpt->problem) !!}</p>
        <h3><b>Try</b></h3><p>{!! nl2br($kpt->Try) !!}</p>
        <h3><b>MVP</b></h3><p>{!! nl2br($kpt->MVP) !!}</p>
        <h3><b>Reason</b></h3><p>{!! nl2br($kpt->reason) !!}</p>
        <h3><b>Want</b></h3><p>{!! nl2br($kpt->want) !!}</p>
</div>

    
@endsection