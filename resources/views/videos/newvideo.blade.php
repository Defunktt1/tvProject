@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">
                <i class="fa fa-cloud-upload"></i> Add new video
            </h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    @include('layouts.errors')

    <div class="row">
        {!! Form::open(['method' => 'POST', 'url' => '/dashboard/video', 'files' => true]) !!}
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Video title
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <p class="help-block">Add the video title in the textbox below:</p>
                                <input required="required" type="text" name="video_name" class="form-control"
                                       placeholder="Video title" value="{{ old('video_name') }}">
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Video description
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea required="required" name="description" class="form-control"
                                          placeholder="Enter description here...">{{ old('description') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Video image
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="help-block" for="logo_url">Logo image</label>
                                @include('widgets.file-input-preview', [
                                        'is_required' => true,
                                        'name' => 'logo_url'
                                    ]
                                )
                            </div>
                            <div class="form-group">
                                <label class="help-block" for="background_url">Background image</label>
                                @include('widgets.file-input-preview', [
                                        'is_required' => true,
                                        'name' => 'background_url'
                                    ]
                                )
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>


        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Video file
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('widgets.file-input', [
                                    'name' => 'video_url[]',
                                    'help_block' => 'You can upload some video files',
                                    'multiply' => true,
                                    'is_required' => true,
                                ]
                            )
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Select category
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select name="category" class="form-control">
                                    @foreach ($categories_list as $category_id => $category_name)
                                        <option
                                                @if(old('category') == $category_id) selected="selected" @endif
                                        value="{{ $category_id }}">
                                            {{ $category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        @if($category_count)
            <div class="col-lg-12" style="margin-bottom: 50px;">
                <button class="btn btn-success pull-right" type="submit">Add new video</button>
            </div>
        @else
            <p>First you should create a new category</p>
        @endif

        {!! Form::close() !!}
    </div>

@endsection
