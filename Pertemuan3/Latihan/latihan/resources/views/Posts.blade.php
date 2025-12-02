<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman daftar posts</title>
</head>
<body>
    <h1>Daftar posts</h1>

    @foreach ($posts as $post)
        <article>
            <h2><a href="/posts/{{$post->slug }}">{{$post->title}}</a></h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
</body>
</html>