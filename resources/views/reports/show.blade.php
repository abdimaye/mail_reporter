@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <a href="#"> {{ $report->subject }} </a> posted:
                {{ $report->title }}</div>
                <div class="panel-body">
                    <article>
                        <div class="body">{{ $report->html }}</div>
                    </article>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        Reply?
        {{-- 
            @foreach ($report->replies as $reply)
                @include('reports.reply')
            @endforeach
        --}}
        </div>
    </div>
</div>
@endsection
