<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel基礎課題</title>
</head>
<body>
  <h1>投稿一覧</h1>
  <table>
    <tr>
        <th width="240px">タイトル</th>
        <th>本文</th>
    </tr>
    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->post_title }}</td>
            <td>{{ $post->post_content }}</td>
        </tr>
    @endforeach
  </table>
</body>
</html>
