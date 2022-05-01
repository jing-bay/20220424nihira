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
    <div class="card">
        <div class="title"><h1>Todo List</h1></div>
        @if (count($errors) > 0)
        <ul>
          @foreach ($errors->all() as $error)
          <li>
            {{$error}}
          </li>
          @endforeach
        </ul>
        @endif

      <form action="/todo/create"  class="addtodo" method="POST">
        @csrf
        <input type="text" class="addtodo_content" name="content">
        <input type="submit" class="addbtn" value="追加">
      </form>

      <table class="todolists">
        <tr class="todolists_ttl">
          <th>更新日</th>
          <th>タスク名</th>
          <th>更新</th>
          <th>削除</th>
        </tr>
        <tr>
          @foreach($items as $item)
          <form action="/todo/update" method="POST">
          @csrf
            <td>
              <input type="hidden" name="id" value="{{$item->id}}">
              {{$item->updated_at}}
            </td>
            <td>
              <input type="text" class="todolists_content" name="content" value="{{$item->content}}">
            </td>
            <td>
              <input type="submit" class="updatebtn" value="更新">
            </td>
          </form>
          <form action="/todo/delete"  method="POST">
            @csrf
            <td>
              <input type="hidden" name="id" value="{{$item->id}}">
              <input type="submit" class="deletebtn" value="削除">
            </td>
          </form>
        </tr>
        @endforeach
      </table>
    </div>




</body>

</html>
