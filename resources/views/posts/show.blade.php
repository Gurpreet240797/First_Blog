@extends('main')

@section('title', '- View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h2>{{ $post->title }}</h2>
				<hr>
			<p class="lead">{{ $post->content }}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created at:</dt>
					<dd>{{ $post->created_at }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Updated at:</dt>
					<dd>{{ $post->updated_at }}</dd>
				</dl>

				<div class="row">
					<div class="col-sm-6">
						{{ Html::linkRoute('posts.edit' , 'Edit' , array($post->id) , array('class'=>'btn btn-primary btn-block')) }}
					</div>

					<div class="col-sm-6">
						{{ Html::linkRoute('posts.destroy' , 'Delete' , array($post->id) , array('class'=>'btn btn-danger btn-block')) }}
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection