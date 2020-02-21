<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lisa uus artikkel</title>
</head>
<body>
    <form action="/save" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" id="title">
        </div>

        <div>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
        </div>

        <button>Salvesta</button>
        
    </form>
</body>
</html>