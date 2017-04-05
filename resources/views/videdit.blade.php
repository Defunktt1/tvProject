@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">
                <i class="fa fa-pencil"></i> Edit {{ $video->video_name }}
            </h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    @include('layouts.errors')

    <div class="row">
        <div class="col-lg-12">
            {!! Form::model($video, ['method' => 'PATCH', 'action' => ['VideoController@update', $video->id]]) !!}
            <div class="form-group input-group">
                {!! Form::text('video_name', null, ['class' => 'form-control']) !!}
                <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="fa fa-pencil"></i> Edit video
                        </button>
                    </span>
            </div>
            {{ Form::close() }}
        </div>
    </div>

@endsection