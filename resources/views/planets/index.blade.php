<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>惑星一覧</title>
</head>

<body>
    <h1>惑星一覧</h1>

    <table class="table">
        <table border>
            <tr>
                <th>名前</th>
                <th>名前(英語)</th>
                <th>半径</th>
                <th>重量</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>

            @foreach ($planets as $planet)
                <tr>
                    <td>{{ $planet->name }}</td>
                    <td>{{ $planet->en_name }}</td>
                    <td>{{ $planet->radius }}</td>
                    <td>{{ $planet->weight }}</td>
                    <td><a href="/planets/{{ $planet->id }}">詳細</a></td>
                    <td><a href="/planets/{{ $planet->id }}/edit">編集</a></td>
                    <td>
                        <form action="/planets/{{ $planet->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <button onclick="location.href='/planets/create'">登録する</button>
</body>

</html>
