<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>惑星情報詳細</title>
</head>

<body>
    <p><b>名前:{{ $planet->name }}</b></p>
    <p><b>名前(英語):{{ $planet->en_name }}</b></p>
    <p><b>半径:{{ $planet->radius }}</b></p>
    <p><b>重量{{ $planet->weight }}</b></p>

    <a href="/planets">戻る</a>
</body>

</html>
