@extends("layout.base")

@section("content")
<div class="title">
  <h2>ランダムで日本全国1724つの市区町村にJUMPするよー</h2>
</div>
<div class="info">
  <p><span class="jump">JUMP</span>ボタンを押すとランダムで<span class="strong">日本全国1724市区町村</span>のうち1つが表示されます。</p>
  <p>Twitterで共有するも良し、実際に行ってみるも良し、いろんな使い方で楽しんでください！</p>
</div>
<div id="start">
  <p><span>↓</span>さっそくはじめる<span>↓</span></p>
</div>
<div class="content">
  <p class="city-name" name="city_name"></p>
  <div class="share">
    <div>
      <a href="">行ってみる</a>    
    </div>
    <div>
      <a href="/tweet">Twitter</a>
    </div>
  </div>
</div>
<div id="btn" class="btn-push">
  <p>ログイン不要</p>
  <button class="btn btn-outline-primary">JUMP</button>
</div>
<div id="onemore" class="btn-push pushed">
  <button class="btn btn-outline-primary">もう一回</button>
</div>
<div class="fans">
  <h1>こんな人におすすめ！</h1>
  <div class="img-block1">

    <div class="img1">
      <img src="{{ asset('img/kaisya_komaru_man.png') }}" alt="次の旅行どこ行こう？">
      <p>次の旅行どこ行こう？</p>
    </div>
    <div class="img1">
      <img src="{{ asset('img/angry_fukureru_girl.png') }}" alt="メジャーなとこはもう飽きた">
      <p>メジャーなとこはもう飽きた</p>
    </div>
  </div>
  <div class="img-block2">
    <div class="img1">
      <img src="{{ asset('img/pose_udemakuri_woman.png') }}" alt="日本全国制覇したい！">
      <p>日本全国制覇したい！</p>
    </div>
    <div class="img1">
      <img src="{{ asset('img/music_ginyuu_shijin.png') }}" alt="一人旅したい">
      <p>一人旅したい</p>
    </div>
  </div>
  <div class="img-block3">
    <div class="img1">
      <img src="{{ asset('img/ofuro_sauna_gaikiyoku.png') }}" alt="日常から開放されたい">
      <p>日常から開放されたい</p>
    </div>
    <div class="img1">
      <img src="{{ asset('img/yaruki_moetsuki_businessman.png') }}" alt="仕事疲れた。。">
      <p>仕事疲れた。。</p>
    </div>
  </div>
</div>
  @endsection