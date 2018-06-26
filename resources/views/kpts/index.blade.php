@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

            <h1><span style="font : normal 30pt 'Monotype Corsiva'">KPT-form</span></h1>
        
            @if (count($kpts) > 0)
            <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>dates</th>
                            <th>updated at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kpts as $kpt)
                            <tr>
                                <td>{!! link_to_route('kpts.show', $kpt->id, ['id' => $kpt->id]) !!}</td>
                                <td>{!! link_to_route('kpts.show', $kpt->dates, ['id' => $kpt->id]) !!}</td>
                                <td>{!! $kpt->updated_at !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
            
            
            @endif
    
            {!! link_to_route('kpts.create', ' 新規KPTの入力', null, ['class' => 'btn btn-primary glyphicon glyphicon-pencil']) !!}
    
        </div>
    </div>

@endsection