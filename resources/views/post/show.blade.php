@extends('main')

@section('content')



    <section class="posts">
        <div class="container">
            <div class="row my-5">
                <div class="offset-lg-2 col-lg-8 col-12 text-center">
                    <h1>{{ $post->title }}</h1>
                </div>
                <!-- /.offset-lg-2 col-lg-8 col-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-12 text-center">
                    {{ $post->content }}
                </div>
                <!-- /.offset-lg-2 col-lg-8 col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.posts -->

@endsection
