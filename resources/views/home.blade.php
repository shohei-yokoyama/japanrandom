@extends("layout.base")

@section("content")
<div class="title">
  <h2>ランダムで日本全国1724つの市区町村にJUMPするよー</h2>
</div>
<div class="info">
  <p><span class="jump">JUMP</span>ボタンを押すとランダムで<span class="strong">日本全国1724市区町村</span>のうち1つが表示されます。</p>
  <p>Twitterで共有するも良し、実際に行ってみるも良し、いろんな使い方で楽しんでください！</p>
  <p class="attention">※うまく表示されない場合は一度ページを更新してからお試しください。</p>
</div>
<div id="start">
  <p><span>↓</span>さっそくはじめる<span>↓</span></p>
  <div class="select-value">
    <p>都道府県を指定してやり直す</p>
    <select id="city-only">
      <option value="0">全国から</option>
      <option value="1">北海道</option>
      <option value="2">青森県</option>
      <option value="3">岩手県</option>
      <option value="4">宮城県</option>
      <option value="5">秋田県</option>
      <option value="6">山形県</option>
      <option value="7">福島県</option>
      <option value="8">茨城県</option>
      <option value="9">栃木県</option>
      <option value="10">群馬県</option>
      <option value="11">埼玉県</option>
      <option value="12">千葉県</option>
      <option value="13">東京都</option>
      <option value="14">神奈川県</option>
      <option value="15">新潟県</option>
      <option value="16">富山県</option>
      <option value="17">石川県</option>
      <option value="18">福井県</option>
      <option value="19">山梨県</option>
      <option value="20">長野県</option>
      <option value="21">岐阜県</option>
      <option value="22">静岡県</option>
      <option value="23">愛知県</option>
      <option value="24">三重県</option>
      <option value="25">滋賀県</option>
      <option value="26">京都府</option>
      <option value="27">大阪府</option>
      <option value="28">兵庫県</option>
      <option value="29">奈良県</option>
      <option value="30">和歌山県</option>
      <option value="31">鳥取県</option>
      <option value="32">島根県</option>
      <option value="33">岡山県</option>
      <option value="34">広島県</option>
      <option value="35">山口県</option>
      <option value="36">徳島県</option>
      <option value="37">香川県</option>
      <option value="38">愛媛県</option>
      <option value="39">高知県</option>
      <option value="40">福岡県</option>
      <option value="41">佐賀県</option>
      <option value="42">長崎県</option>
      <option value="43">熊本県</option>
      <option value="44">大分県</option>
      <option value="45">宮崎県</option>
      <option value="46">鹿児島県</option>
      <option value="47">沖縄県</option>
    </select>
  </div>
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
  <script src="{{ mix('js/index.js') }}"></script>
  @endsection