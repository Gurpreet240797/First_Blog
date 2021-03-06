@extends('main')

@section('title', '- View Post')

@section('stylesheets')
	{{ Html::style('css/styles.css') }}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h2>{{ $post->title }}</h2>
				<hr>
			<p class="lead">{{ $post->content }}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-vertical">
					<dt>Url:</dt>
					<dd><a href="{{ route('blog.single',$post->slug) }}">{{ route('blog.single',$post->slug) }}</a></dd>
				</dl>

				<dl class="dl-vertical">
					<dt>Created at:</dt>
					<dd>{{ $post->created_at }}</dd>
				</dl>

				<dl class="dl-vertical">
					<dt>Updated at:</dt>
					<dd>{{ $post->updated_at }}</dd>
				</dl>

				<div class="row">
					<div class="col-sm-6">
						{{ Html::linkRoute('posts.edit' , 'Edit' , array($post->id) , array('class'=>'btn btn-primary btn-block')) }}
					</div>

					<div class="col-sm-6">
						{!! Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE']) !!}
								{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}
						{!! Form::close() !!}
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						{{ Html::linkRoute('posts.index' , 'See All Posts' , [] , ['class'=>'btn btn-default btn-block btn-h1-spacing']) }}
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection