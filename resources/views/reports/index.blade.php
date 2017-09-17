@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($reports as $report)
            <span>From: {{ $report->from }}</span>
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <a href="{{ $report->path() }}"> {{ $report->subject }} </a>        
                    <span class="pull-right">{{ $report->created_at }}</span>
                </div>

                <div class="panel-body">
                    <article>
                        <div class="body">{!! html_entity_decode($report->html) !!}</div>
                    </article>                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
