@extends('main')

@section('title' , '-Homepage')

@section('content')
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Welcome To My Blog!</h1>
                        <p>This is my fist website built using the Laravel.Please check my latest posts.</p>
                        {{ Html::linkRoute('posts.index' ,'Popular Posts' , [] , ['class'=>'btn btn-primary']) }}
                    </div>
                </div>
            </div><!-- end of jumbotron -->

            <div class="row">                
                <div class="col-md-8">
                    @foreach($posts as $post)
                        <div class="post">
                            <h3>{{ $post->title }}</h3>
                            <p>{{ substr($post->content,0,300) }}{{ strlen($post->content)>300 ? "..." : ""}}</p>
                            <a class="btn btn-default" href="#" role="button">Read More</a>
                        </div>

                        <hr>
                    @endforeach
                <br>
                <br>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <h2>Sidebar</h2>
                </div>
            </div>

 @endsection