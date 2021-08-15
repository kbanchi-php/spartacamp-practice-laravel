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
      </div>
      <div class="item-form-wrapper">
        <p class="form-label">買うもの</p>
        <form action="/update/{{ $item->id }}" method="post">
          {{ csrf_field() }}
          <input type="text" name="itemName" value="{{ $item->name }}">
          <input type="submit" value="更新する">
        </form>
      </div>
      <a href="/list" class="cancel-button"></span>もどる</a>
    </div>
  </body>
</html>