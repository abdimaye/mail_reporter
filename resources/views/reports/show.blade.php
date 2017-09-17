@extends('layouts.app')

@section('content')
<div class="container">

</div>

<div class="container">
    <div class="row">

    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#original-message" data-toggle="tab">Original Message</a></li>
                <li><a href="#parsed-message" data-toggle="tab">Parsed Message</a></li>
            </ul>
            <br>
            <span>From: {{ $report->from }}</span>
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $report->subject }}
                    <span class="pull-right">{{ $report->created_at }}</span>
                </div>
                <div class="panel-body tab-content" >
                    <div role="tabpanel" class="tab-pane active" id="original-message">
                        <article>
                            <div class="body">{!! html_entity_decode($report->html) !!}</div>
                        </article>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="parsed-message" >
                        <article>
                            @if ($fields)

                            @foreach($fields as $field) 
                                <label>{{$field['label']}}</label>
                                <p>{!! html_entity_decode($field['value']) !!} </p>
                                <!-- <br> -->
                            @endforeach

                            @else

                                <span>structured message not available. </span>

                            @endif
                        </article>
                    </div>
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
