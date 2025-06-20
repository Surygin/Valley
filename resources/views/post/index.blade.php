@extends('main')

@section('content')



    <section class="posts">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('posts.create') }}" class="btn btn-info">add Post</a>
                    <hr>
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
            <div class="row my-5">

                @foreach($posts as $post)
                    <div class="col-lg-3 col-12">
                        <div class="card">
                            <img src="{{ $post->img_path }}" class="card-img-top" alt="{{ $post->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->description }}</p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-3 col-12 -->
                @endforeach

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.posts -->

@endsection
