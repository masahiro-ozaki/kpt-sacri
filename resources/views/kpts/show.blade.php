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

.scroll{
    overflow-y:scroll;
}
    

</style>

@extends('layouts.app')

@section('content')
    
 <div class="row">
    <!--grid-->
    <div class="col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

<h1 class='contents'>{{ $kpt->dates }}&nbsp;&nbsp;&nbsp; Contents&nbsp;</h1>
           
        <div class='box16'>
            
            <h3><b>Keep</b></h3>
            <div class='panel panel-info scroll' style="height: 10vh;">
                <p>{!! nl2br($kpt->keep) !!}</p>
            </div>
            
            <h3><b>Problem</b></h3>
            <div class='panel panel-info scroll' style="height: 10vh;">
                <p>{!! nl2br($kpt->problem) !!}</p>
            </div>
            
            <h3><b>Try</b></h3>
            <div class='panel panel-info scroll' style="height: 10vh;">
                <p>{!! nl2br($kpt->Try) !!}</p>
            </div>
            
            <h3><b>MVP</b></h3>
            <div class='panel panel-info' style="height: 5vh;">
                <h4>{!! nl2br($kpt->MVP) !!}</h4>
            </div>
            
            <h3><b>Reason</b></h3>
            <div class='panel panel-info scroll' style="height: 5vh;">
                <p>{!! nl2br($kpt->reason) !!}</p>
            </div>
            
            <h3><b>Want</b></h3>
            <div class='panel panel-info scroll' style="height: 5vh;">
                <p>{!! nl2br($kpt->want) !!}</p>
            </div>
        </div>
<div class='btn-toolbar'>
    
    <!--先にゴミ箱を右に寄せる-->
        {!! link_to_route('kpts.edit', ' Edit', ['id' => $kpt->id], ['class' => 'btn btn-info btn-lg glyphicon glyphicon-apple']) !!}
        
        {!! Form::model($kpt, ['route' => ['kpts.destroy', $kpt->id], 'method' => 'delete'])!!}
            {!! Form::button('<span class="glyphicon glyphicon-trash"></span>', array('class'=>'btn btn-default btn-lg pull-right', 'type'=>'submit')) !!}
        {!! Form::close() !!}
    
<!--コピペ用-->
<br>
<h3 class='contents'>Copy&Paste</h3>
<div class='panel panel-info'>
        <h3><b>Keep</b></h3>
            <br> {!! nl2br($kpt->keep) !!} <br>
        <h3><b>Problem</b></h3>
            <br> {!! nl2br($kpt->problem) !!} <br>
        <h3><b>Try</b></h3>
            <br> {!! nl2br($kpt->Try) !!} <br>
        <h3><b>MVP</b></h3>
            <br> {!! nl2br($kpt->MVP) !!} <br>
        <h3><b>Reason</b></h3>
            <br> {!! nl2br($kpt->reason) !!} <br>
        <h3><b>Want</b></h3>
            <br> {!! nl2br($kpt->want) !!} <br>
</div>
</div>
</div>
    
@endsection