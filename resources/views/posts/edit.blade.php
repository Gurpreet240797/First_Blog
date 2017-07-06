@extends('main')

@section('title', '- Edit Post')

@section('content')

	<div class="row">
		{!! Form::model($post,['route'=>['posts.update', $post->id], 'method'=>'PUT'] ) !!}
			<div class="col-md-8">
				{{ Form::label('title','Title') }}
				{{ Form::text('title',null,["class"=>'form-control input-lg']) }}

				{{ Form::label('slug','Url') }}
				{{ Form::text('slug',null,["class"=>'form-control']) }}
				
				{{ Form::label('content','Content') }}
				{{ Form::textarea('content',null,["class"=>'form-control']) }}
			</div>

			<div class="col-md-4">
				<div class="well">
					<dl class="dl-horizontal">
						<dt>Created at:</dt>
						<dd>{{ date('M j ,Y h:ia', strtotime($post->created_at)) }}</dd>
					</dl>

					<dl class="dl-horizontal">
						<dt>Updated at:</dt>
						<dd>{{ date('M j ,Y h:ia', strtotime($post->updated_at)) }}</dd>
					</dl>

					<div class="row">
						<div class="col-sm-6">
							{{ Form::submit('Save Changes' , ['class'=>'btn btn-block btn-success']) }}
						</div>
						<div class="col-sm-6">
							{{ Html::linkRoute('posts.show' , 'Cancel' , array($post->id) , array('class'=>'btn btn-danger btn-block')) }}
						</div>
					</div>
				</div>
			</div>
		{!! Form::close() !!}	
	</div>



@endsection