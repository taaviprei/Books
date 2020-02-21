<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <h1>Tere tulemast!</h1>

    <a href="http:/new">Lisa uus artikkel</a>

    <table>
        <thead>
            <tr>
                <td>Pealkiri</td>
                <td>Kuupäev</td>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>