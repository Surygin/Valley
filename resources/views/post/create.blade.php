@extends('main')

@section('content')



    <section class="posts">
        <div class="container">
            <div class="row my-5">
                <div class="offset-lg-2 col-lg-8 col-12 text-center">
                    <h1>Создание поста</h1>
                    <hr>
                </div>
                <!-- /.offset-lg-2 col-lg-8 col-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-12">
                    <form class="form py-5">
                        @csrf

                        <label class="mb-3" style="width: 100%;">
                            Author
                            <input type="text" name="author" class="form-control" value="{{ fake()->firstName .' '. fake()->lastName }}">
                        </label>

                        <label class="mb-3" style="width: 100%;">
                            Title
                            <input type="text" name="title" class="form-control" value="{{ fake()->text(20) }}">
                        </label>

                        <label class="mb-3" style="width: 100%;">
                            Description
                            <textarea
                                type="text"
                                name="description"
                                class="form-control"
                                rows="5"
                            >{{ fake()->text(144) }}
                            </textarea>
                        </label>
                    </form>
                    <!-- /.form form-control -->
                </div>
                <!-- /.offset-lg-2 col-lg-8 col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.posts -->

@endsection
