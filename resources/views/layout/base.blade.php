<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <link href="{{ mix('css/style.css') }}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('img/5113.png') }}" type="image/x-icon">
  <title>日本全国いったったー</title>
  <meta name="description" content="ボタンを押すとランダムで日本全国1724市区町村のうち1つが表示されます。Twitterで共有するも良し、実際に行ってみるも良し、いろんな使い方で楽しんでください！">
</head>
<body>
  <nav class="navbar navbar-light fixed-top" style="background-color: #e3f2fd;">
    <a class="navlink" href="{{ route('home') }}">日本全国いったったー</a>
  </nav>
  <div class="body">
    @yield("content")
  </div>
  <footer class="footer">
      <p>©️日本全国いったったー　/　</p>
      <a href="{{ route('service') }}">利用規約</a>
  </footer>
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/index.js') }}"></script>
  
</body>
</html>