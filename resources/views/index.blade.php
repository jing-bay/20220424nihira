<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <h1>Todo List</h1>
    
    @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
      <li>
        {{$error}}
      </li>
      @endforeach
    </ul>
    @endif

      <form action="/todo/create" method="POST">
        @csrf
        <input type="text" name="content">
        <input type="submit" value="追加">
      </form>

      <table>
        <tr>
          <th>作成日</th>
          <th>タスク名</th>
          <th>更新</th>
          <th>削除</th>
        </tr>
        <tr>
          @foreach($items as $item)
          <form action="/todo/update" method="POST">
          @csrf
            <td>
            {{$item->updated_at}}
            </td>
            <td>
              <input type="text" name="content" value="{{$item->content}}">
            </td>
            <td>
              <input type="submit" value="更新">
            </td>
          </form>
          <form action="/todo/delete" method="POST">
            @csrf
            <td>
              <input type="submit" value="削除">
            </td>
          </form>
        </tr>
        @endforeach
      </table>



</body>

</html>
