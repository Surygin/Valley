<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
    <section>
        @foreach($profiles as $profile)
            <p>{{ $profile->name }}</p>
        @endforeach
        <hr>

        @foreach($categories as $category)
            <p>{{ $category->title }}</p>
        @endforeach
        <hr>

        @foreach($tags as $tag)
            <p>{{ $tag->title }}</p>
        @endforeach
        <hr>

        @foreach($posts as $post)
            <p><b>{{ $post->title }}</b></p>
            <p>{{ $post->content }}</p>
        @endforeach
        <hr>

        @foreach($roles as $role)
            <p>{{ $role->title }}</p>
        @endforeach
        <hr>

        @foreach($messages as $message)
            <p>{{ $message->author }}</p>
            <p>{{ $message->content }}</p>
        @endforeach
        <hr>

        @foreach($images as $image)
            <p>{{ $image->img_path }}</p>
        @endforeach
        <hr>

        @foreach($chats as $chat)
            <p><b>{{ $chat->author }}</b></p>
            <p>{{ $chat->content }}</p>
        @endforeach
    </section>
</body>
</html>
