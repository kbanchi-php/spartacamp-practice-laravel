<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <header>
      <a href="/" class="header-logo">LIST APP</a>
    </header>
    <div class="container">
      <div class="container-header">
        <h1>{{ $message }}</h1>
        <a href="/new" class="new-button">+ 新規登録</a>
      </div>
      <div class="index-table-wrapper">
        <div class="table-head">
          <span class="id-column">ID</span>
          <span>買うもの</span>
        </div>
        <ul class="table-body">
          @foreach ($items as $item)
            <li>
              <div class="item-data">
                <span class="id-column">{{ $item->id }}</span>
                <span class="name-column">{{ $item->name }}</span>
              </div>
              <div class="item-menu">
                <form action="/delete/{{ $item->id }}" method="post">
                  {{ csrf_field() }}
                  <input type="submit" value="削除">
                </form>
                <a href="/edit/{{ $item->id }}">編集</a>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </body>
</html>