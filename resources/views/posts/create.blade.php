@extends('main')

@section('title','- Create new post')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}		

@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>

			{!! Form::open(array('route' => 'posts.store','data-parsley-validate'=>'')) !!}
				{{ Form::label('title','Title') }}
				{{ Form::text('title',null,array('class'=>'form-control', 'requried'=>'', 'maxlength'=>'190')) }}

				{{ Form::label('slug', 'Url') }}
				{{ Form::text('slug', null, array('class'=>'form-control', 'requried'=>'', 'maxlength'=>'190', 'minlength'=>'5')) }}

				{{ Form::label('content','Post Body') }}
				{{ Form::textarea('content',null,array('class'=>'form-control', 'requried'=>'')) }}

				{{ Form::submit('Create Post', array('class'=>'btn btn-success btn-lg btn-block' , 'style'=>'margin-top:20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>
@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection