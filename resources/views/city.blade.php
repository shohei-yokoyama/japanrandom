@extends("layout.base")

@section("content")
<div class="title">
  <h2>ランダムで日本全国47都道府県にJUMPするよー</h2>
</div>
<div class="info">
  <p><span class="jump">JUMP</span>ボタンを押すとランダムで<span class="strong">日本全国47都道府県</span>のうち1つが表示されます。</p>
  <p>Twitterで共有するも良し、実際に行ってみるも良し、いろんな使い方で楽しんでください！</p>
  <p class="attention">※うまく表示されない場合は一度ページを更新してからお試しください。</p>
</div>
<div id="start">
  <p><span>↓</span>さっそくはじめる<span>↓</span></p>
</div>
<div class="content">
  <p class="city-name" name="city_name"></p>
  <div class="share">
    <div>
    <a href="https://px.a8.net/svt/ejp?a8mat=3BSP80+30YESQ+3ZO8+BW8O2&a8ejpredirect=https%3A%2F%2Fwww.sakuratravel.jp%2F%3Futm_source%3DA8%26utm_medium%3Daffiliate" rel="nofollow" target="_blank"><i class="fas fa-plane"></i>行ってみる</a>    
    </div>
    <div>
    <a href="//af.moshimo.com/af/c/click?a_id=2344754&p_id=54&pc_id=54&pl_id=616&url=https%3A%2F%2Fevent.rakuten.co.jp%2Ffurusato%2F%3Fl-id%3Dtop_normal_menu_scene66" rel="nofollow" target="_blank"><i class="fas fa-shopping-basket"></i>ふるさと納税</a><img src="//i.moshimo.com/af/i/impression?a_id=2344754&p_id=54&pc_id=54&pl_id=616" width="1" height="1" style="border:none;">
    </div>
    <div>
      <a id="tweet" target="_blank"><i class="fab fa-twitter"></i>Twitterに投稿</a>
    </div>
  </div>
</div>
<div id="btn" class="btn-push">
  <p>ログイン不要</p>
  <button class="btn btn-outline-primary">JUMP</button>
</div>
<div id="onemore" class="btn-push pushed">
  <button class="btn btn-outline-primary">
    <!-- <a href="{{ route('top') }}"> -->
      リセット
    <!-- </a> -->
  </button>
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
  @section("js")
  <script src="{{ mix('js/sub.js') }}"></script>
  @endsection