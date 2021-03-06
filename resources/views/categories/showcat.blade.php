@extends('app')
@section('content')
	<div class="row">
	    <div class="col-lg-12">
	        <h3 class="page-header">
	        	<i class="fa fa-list"></i> All Categories
	        	<a href="{{ route('category.create') }}" class="btn btn-success btn-sm m-l-20"><i class="fa fa-plus"></i> Add new category</a>
	        </h3>
	    </div>
	    <!-- /.col-lg-12 -->
	</div>
	<div class="row">
		<div class="col-lg-12">
	        <div class="panel panel-default panel-categories">
	            <div class="panel-heading">
	                Manage the categories below:
	            </div>
	            <!-- .panel-heading -->
	            <div class="panel-body">
	                <ul class="list-group ov-h">
	                	@foreach($categories as $key => $category)
	                		<li class="list-group-item" title="{{ $category->category_name }}">
						        {{ str_limit($category->category_name, 75) }}

						        <div class="action-buttons">
						            <a class="btn btn-sm btn-default pull-left m-r-5" href="{{ URL::to('dashboard/category/' . $category->id . '/edit') }}">Edit</a>
										{!! Form::Open(['method' => 'DELETE', 'url' => 'dashboard/category/' . $category->id, 'class' => 'pull-left']) !!}
										<button type="submit" class="btn btn-sm btn-danger">Delete</button>
										{!! Form::Close() !!}
						        </div>
						    </li>
					    @endforeach
					</ul>
	            </div>
	            <!-- .panel-body -->
	        </div>
	        <!-- /.panel -->
	    </div>
	</div>

@endsection