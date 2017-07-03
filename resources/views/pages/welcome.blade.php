@extends('main')

@section('title' , '-Homepage')

@section('content')
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Welcome To My Blog!</h1>
                        <p>This is my fist website built using the Laravel.Please check my latest posts.</p>
                        <p class="lead"><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                    </div>
                </div>
            </div><!-- end of jumbotron -->

            <div class="row">
                <div class="col-md-8">
                    <div class="post">
                        <h3>Post Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
                        <a class="btn btn-default" href="#" role="button">Read More</a>
                    </div>

                    <hr>

                    <div class="post">
                        <h3>Post Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
                        <a class="btn btn-default" href="#" role="button">Read More</a>
                    </div>

                    <hr>

                    <div class="post">
                        <h3>Post Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
                        <a class="btn btn-default" href="#" role="button">Read More</a>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <h2>Sidebar</h2>
                </div>
            </div>

 @endsection