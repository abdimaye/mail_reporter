@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Email Reports</div>

                <div class="panel-body">
                    @foreach ($reports as $report)
                        <article>
                            <h4>
                                <a href="{{ $report->path() }}">
                                    {{ $report->subject }}
                                </a> 
                            </h4>
                            <div class="body">{!! html_entity_decode($report->html) !!}</div>
                        </article>

                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
