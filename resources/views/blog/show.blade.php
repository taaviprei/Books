<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Pealkiri</td>
                <td>Sisu</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>