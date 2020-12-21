@extends("layout.base")

@section("content")
<div class="title">
  <h2>選んだ食べ物から47都道府県にJUMPするよー</h2>
</div>
<div class="info">
  <p><span class="jump">JUMP</span>ボタンを押すとランダムで<span class="strong">選んだ食べ物がおいしい日本全国47都道府県</span>のうち1つが表示されます。</p>
  <p>Twitterで共有するも良し、実際に行ってみるも良し、いろんな使い方で楽しんでください！</p>
  <p class="attention">※うまく表示されない場合は一度ページを更新してからお試しください。</p>
</div>
<div id="start">
  <p><span>↓</span>さっそくはじめる<span>↓</span></p>
</div>
<div class="food">
  <p>食べたいものを一つ選んでからボタンを押してください。</p>
  <ul class="select-food">
    <li class="meat">
      <input type="radio" name="food" value="meat" id="meat" checked>
      <label for="meat">
        <p>肉</p>
        <img src="{{ asset('img/food_niku_katamari_abura.png') }}" alt="">
      </label>
    </li>
    <li class="fish">
      <input type="radio" name="food" id="fish" value="fish">
      <label for="fish">
        <p>魚</p>
        <img src="{{ asset('img/food_sashimi.png') }}" alt="">
      </label>
    </li>
    <li class="vege">
      <input type="radio" name="food" id="vege" value="vege">
      <label for="vege">
        <p>野菜</p>
        <img src="{{ asset('img/vegetable.png') }}" alt="">
      </label>
    </li>
    <li class="fruit">
      <input type="radio" name="food" id="fruit" value="fruit">
      <label for="fruit">
        <p>フルーツ</p>
        <img src="{{ asset('img/cut_fruit_moriawase.png') }}" alt="">
      </label>
    </li>
  </ul>
</div>
<div class="content food-view">
  <p class="city-name" name="city_name"></p>
  <div class="share">
    <div>
    <a href="https://px.a8.net/svt/ejp?a8mat=3BSP80+30YESQ+3ZO8+BW8O2&a8ejpredirect=https%3A%2F%2Fwww.sakuratravel.jp%2F%3Futm_source%3DA8%26utm_medium%3Daffiliate" rel="nofollow" target="_blank"><i class="fas fa-plane"></i>行ってみる</a>    
    </div>
    <div>
      <a href="//af.moshimo.com/af/c/click?a_id=2344756&p_id=3172&pc_id=7409&pl_id=41472&guid=ON" rel="nofollow" target="_blank"><i class="fas fa-shopping-basket"></i>ふるさと納税</a><img src="//i.moshimo.com/af/i/impression?a_id=2344756&p_id=3172&pc_id=7409&pl_id=41472" width="1" height="1" style="border:none;">
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
      リセット
  </button>
</div>
<div class="fans">
  <h1>こんな人におすすめ！</h1>
  <div class="img-block1">

    <div class="img1">
      <img src="{{ asset('img/oishii6_woman.png') }}" alt="おいしいもの食べたい！">
      <p>おいしいもの食べたい！</p>
    </div>
    <div class="img1">
      <img src="{{ asset('img/sweets_momoji_manju.png') }}" alt="地域の名産品を食べたい">
      <p>地域の名産品を食べたい</p>
    </div>
  </div>
  <div class="img-block2">
    <div class="img1">
      <img src="{{ asset('img/syokuji_takoyaki_man.png') }}" alt="食の日本全国制覇したい！">
      <p>食の日本全国制覇したい！</p>
    </div>
    <div class="img1">
      <img src="{{ asset('img/airplane_kinaisyoku_first_class.png') }}" alt="たまには贅沢したい">
      <p>たまには贅沢したい</p>
    </div>
  </div>
  <div class="img-block3">
    <div class="img1">
      <img src="{{ asset('img/syokuji_baby_kitanai.png') }}" alt="とにかく食べたい！">
      <p>とにかく食べたい！</p>
    </div>
    <div class="img1">
      <img src="{{ asset('img/syokuji_hamburger_girl.png') }}" alt="リフレッシュしたい！">
      <p>リフレッシュしたい！</p>
    </div>
  </div>
</div>
  @endsection
  @section("js")
  <script src="{{ mix('js/food.js') }}"></script>
  @endsection