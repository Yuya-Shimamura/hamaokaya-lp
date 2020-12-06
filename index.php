<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>古伝餡 濱岡屋</title>
</head>
<body>
  
  <!-- ヒーローイメージ -->
<!-- <div class="bg-slider"></div> -->
  <div id="topImageFade" class="carousel slide carousel-fade top-img" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 vh-100" src="./img/Top_Daifuku_Wide.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 vh-100" src="./img/Top_Ekisha_Wide.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 vh-100" src="./img/Top_EiichiDora__Wide.jpg" alt="Second slide">
      </div>
    </div>
  </div>

  <!-- レスポンシブ ヒーローイメージ -->
  <div id="topImageFade-res" class="carousel slide carousel-fade sm-top-img" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
      <li data-target="#topImageFade" data-slide-to="0" class="active"></li>
      <li data-target="#topImageFade" data-slide-to="1"></li>
      <li data-target="#topImageFade" data-slide-to="2"></li>
    </ol> -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 vh-100" src="./img/Top_Daifuku_Narrow.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 vh-100" src="./img/Top_Ekisha_Narrow.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 vh-100" src="./img/Top_EiichiDora_Narrow.jpg" alt="Second slide">
      </div>
    </div>
  </div>
  
  <!-- メニューバー -->
    <!-- PC用メニューバー -->
    <nav class="pc-nav">
      <div class="logo ">
        <a href="#"><img src="./img/logo.png" alt=""></a>
      </div>
      <div class="nav-menu">
        <ul>
          <li><a href="#News">お知らせ</a></li>
          <li>
            <a class="open-menu"><i class="fa fa-caret-right"></i> お菓子の一覧</a>
            <ul class="menu-toggler">
              <li class="toggler-menu-first"><a href="#Ordinary">通年のお菓子</a></li>
              <li><a href="#Spring">春のお菓子</a></li>
              <li><a href="#Summer">夏のお菓子</a></li>
              <li><a href="#Autumn">秋のお菓子</a></li>
              <li><a href="#Winter">年末/新春のお菓子</a></li>
              <li><a href="#Ceremony">お祝い/法要のお菓子</a></li>
            </ul>
          </li>
          <li><a href="#About">古伝餡 濱岡屋の心</a></li>
          <li><a href="#Cafe">濱岡屋カフェ</a></li>
          <li><a href="#Contact">店舗のご案内</a></li>
          <li><a href="./order-list.pdf">ご注文表</a></li>
          <li class="insta-link"><a href="https://www.instagram.com/hamaokaya_wagashi/?hl=ja"><i class="fab fa-instagram"></i><p>Instagram</p></a></li>
        </ul>
      </div>
    </nav>

    <!-- レスポンシブメニュー -->
    <nav class="nav-responsive">
      <div class="logo ">
        <a href="#"><img src="./img/logo.png" alt=""></a>
      </div>
      <!-- ハンバーガーメニュー -->
      <div class="navToggle">
        <span></span><span></span><span></span><span></span>
      </div>
      <div class="globalMenuSp">
        <ul>
          <li><a href="#News">お知らせ</a></li>
          <li class=" open-menu-res">
              <p class="color-change open-res">お菓子の一覧</p>
              <div class="angle-down"></div>
            <ul class="menu-toggler">
              <li><a href="#Ordinary">　通年のお菓子</a></li>
              <li><a href="#Spring">　春のお菓子</a></li>
              <li><a href="#Summer">　夏のお菓子</a></li>
              <li><a href="#Autumn">　秋のお菓子</a></li>
              <li><a href="#Winter">　年末/新春のお菓子</a></li>
              <li><a href="#Ceremony">　お祝い/法要のお菓子</a></li>
            </ul>
          </li>
          <li><a href="#About">古伝餡 濱岡屋の心</a></li>
          <li><a href="#Cafe">濱岡屋カフェ</a></li>
          <li><a href="#Contact">店舗のご案内</a></li>
          <li><a href="./order-list.pdf">ご注文表</a></li>
        </ul>
      </div>
    </nav>

    <div class="inner bg-gray">
      <div class="introduction">
        <p class="intro-text">
            埼玉県深谷市で創業130年余の和菓子屋<br>
            創業以来受け継いだ味の「餡」が自慢です<br>
            季節の上生菓子や、様々な和菓子を取り揃えております<br>
        </p>
        <div class="introduction-img">
          <img src="./img/Draft_AnPhoto.jpg" alt="">
        </div>
      </div>
    </div>

    <!-- お知らせ -->
  <div class="news" id="News">
    <div class="inner">
      <h2 class="section-title">お知らせ</h2>
      <div class="news-section">
        <div class="card">
          <img src="./img/insta1.jpeg" alt="">
        </div>
        <div class="card">
          <img src="./img/insta2.jpeg" alt="">
        </div>
        <div class="card">
          <img src="./img/insta3.jpeg" alt="">
        </div>
        <div class="card card-pc-none">
          <img src="./img/insta4.jpeg" alt="">
        </div>
      </div>
    </div>
  </div>

  <ul class="insta-list">
    <?php
              $count = '4'; //画像取得数
              $id = '17841404220144428'; //InstagramビジネスアカウントID
              $token = 'EAAFdlOULNeYBAGVxix9a0UlRshZCl7RhqYqNgzKi4iD33jCA35qXDSfA5J4Q9bT1jkRIGk3CRfALcN3jPzOx8MJVu3ZCycWtFOuNcxAft6cfxeXw9PSeF3eI78zru0Ti6dgCQ6QzB3PcDZCmUHesldVEPb1YPsIayaKZAaqvtaiJXcJUE284'; // アクセストークン3
    
    　　　　　　$json = file_get_contents("https://graph.facebook.com/v6.0/{$id}?fields=name%2Cmedia.limit({$count})%7Bcaption%2Cmedia_url%2Cthumbnail_url%2Cpermalink%7D&access_token={$token}");
    
    　　　　　　$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
    　　　　　　$obj = json_decode($json, true);
    
    　　　　　　$insta = [];
    
    foreach ($obj['media']['data'] as $k => $v) {
                  if ($v['thumbnail_url']) {
                      $data = [
                          'img' => $v['thumbnail_url'], // 投稿が動画だったらサムネURLを取得
                          'caption' => $v['caption'],   // キャプション
                          'link' => $v['permalink'],    // パーマリンク
                      ];
                  } else {
                      $data = [
                          'img' => $v['media_url'],
                          'caption' => $v['caption'],
                          'link' => $v['permalink'],
                      ];
                  }
                  $insta[] = $data;
              }
    
    foreach ($insta as $k => $v){
                  echo '<li><a href="'.$v['link'].'" target="_blank"><img src="'.$v['img'].'" alt="'.$v['caption'].'"></a></li>';
              }
    ?>
    </ul>
  
  <!-- お菓子の一覧 -->
  <div class="menu bg-gray">
    <div class="inner">
      <h2 class="section-title">お菓子の一覧</h2>

      <!-- 通年のお菓子 -->
      <h3 id="Ordinary" class="section-sub-title">通年のお菓子</h3>
      <div class="menu-ordinary menu-section">
          <div class="card js-modal-open" data-target="MeijiDaifuku">
            <div class="card-img">
              <img src="./img/Menu-img/MeijiDaifuku_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="EkishaMonaka" >
            <div class="card-img">
              <img src="./img/Menu-img/EkishaMonaka_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="Yokan" >
            <div class="card-img">
              <img src="./img/Menu-img/Yokan_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img" >
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="Torayaki" >
            <div class="card-img">
              <img src="./img/Menu-img/Torayaki_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="EiichiDorayaki" >
            <div class="card-img">
              <img src="./img/Menu-img/EiichiDorayaki_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="Hofuman" >
            <div class="card-img">
              <img src="./img/Menu-img/Hofuman_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="RomanPie" >
            <div class="card-img">
              <img src="./img/Menu-img/RomanPie_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="Fukkachan" >
            <div class="card-img">
              <img src="./img/Menu-img/Fukkachan_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img" >
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
      </div>

      <!-- 春のお菓子 -->
      <h3 id="Spring" class="section-sub-title">春のお菓子</h3>
      <div class="menu-spring menu-section">
          <div class="card js-modal-open" data-target="IchigoDaifuku">
            <div class="card-img">
              <img src="./img/Menu-img/IchigoDaifuku_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="Sakuramochi">
            <div class="card-img">
              <img src="./img/Menu-img/Sakuramochi_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="Kashiwamochi">
            <div class="card-img">
              <img src="./img/Menu-img/Kashiwamochi_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="Kusadango">
            <div class="card-img">
              <img src="./img/Menu-img/Kusafango_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="Konohana">
            <div class="card-img">
              <img src="./img/Menu-img/Konohana_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="Ohagi">
            <div class="card-img">
              <img src="./img/Menu-img/Ohagi_Small.jpg" alt="">
            </div>
          </div>
      </div>

      <!-- 夏のお菓子 -->      
      <h3 id="Summer" class="section-sub-title">夏のお菓子</h3>
      <div class="menu-summer menu-section">
          <div class="card js-modal-open" data-target="AnMitsu">
            <div class="card-img">
              <img src="./img/Menu-img/AnMitsu_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="MizuDaifuku">
            <div class="card-img">
              <img src="./img/Menu-img/MizuDaifuku_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="WarabiMochi">
            <div class="card-img">
              <img src="./img/Menu-img/WarabiMochi_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
      </div>

      <!-- 秋のお菓子 -->
      <h3 id="Autumn" class="section-sub-title">秋のお菓子</h3>
      <div class="menu-autumn menu-section">
          <div class="card js-modal-open" data-target="Kintsuba">
            <div class="card-img">
              <img src="./img/Menu-img/Kintsuba_Small.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="Ohagi">
            <div class="card-img">
              <img src="./img/Menu-img/Ohagi_Small.jpg" alt="">
            </div>
          </div>
      </div>

      <!-- 年末/新春のお菓子 -->
      <h3 id="Winter" class="section-sub-title">年末/新春のお菓子</h3>
      <div class="menu-winter menu-section">
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
      </div>

      <!-- お祝い/法要のお菓子 -->      
      <h3 id="Ceremony" class="section-sub-title">お祝い/法要のお菓子</h3>
      <div class="menu-ceremony menu-section">
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
          <div class="card js-modal-open" data-target="No-img">
            <div class="card-img">
              <img src="./img/no-img.jpg" alt="">
            </div>
          </div>
      </div>
    </div>
  </div>

  <!-- モーダルメニュー一覧 -->
  <div class="modal js-modal" id="MeijiDaifuku">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/MeijiDaifuku-Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="EkishaMonaka">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/EkishaMonaka_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="Yokan">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/Yokan_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="Torayaki">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/Torayaki_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="EiichiDorayaki">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/EiichiDorayaki_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="Hofuman">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/Hofuman_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="Hofuman">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/Hofuman_Small.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="Hofuman">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/Hofuman_Small.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="RomanPie">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/RomanPie_large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="Fukkachan">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/FukkaChan_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="IchigoDaifuku">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/IchigoDaifuku_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="Kashiwamochi">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/Kashiwamochi_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="Sakuramochi">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/Sakuramochi_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="Kusadango">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/Kusadango_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="Konohana">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/Konohana_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="Ohagi">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/Ohagi_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="AnMitsu">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/AnMitsu_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="MizuDaifuku">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/MizuDaifuku_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="WarabiMochi">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/WarabiMochi_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <div class="modal js-modal" id="Kintsuba">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <img class="js-modal-close" src="./img/Menu-img/Kintsuba_Large.jpg" alt="">
    </div><!--modal__inner-->
</div><!--modal-->

  <!-- 濱岡屋の心 -->
  <div class="about" id="About">
    <div class="inner">
      <div class="inner-sub">
        <h2 class="section-title">古伝餡 濱岡屋の心</h2>
        <div class="about-img">
          <div id="shopImageFade" class="carousel slide carousel-fade cafe-slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#shopImageFade" data-slide-to="0" class="active"></li>
              <li data-target="#shopImageFade" data-slide-to="1"></li>
              <li data-target="#shopImageFade" data-slide-to="2"></li>
              <li data-target="#shopImageFade" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="./img/about.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./img/Andama_at_Kouba.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./img/Kimishigure_at_Kouba.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./img/ Dango_at_Kouba.jpg" alt="Second slide">
              </div>
            </div>
          </div>
        </div>
        <div class="section-text">
          <p>
            明治創業以来130年余り、原料の持つ味を大切にした手作りの和菓子に
            こだわって参りました。<br><br>
            当店では最高級の北海小豆と数種類の砂糖を使い分け純水を使用し、
            自家製で餡を作っております。<br>
            濱岡屋がこれまで受け継いできた伝統の技と、素材本来の味を存分に
            味わっていただけるお菓子作りを続けております。<br><br>
            自家製餡と同じく力を注いでいるのが、季節を表現する上生菓子です。<br>
            その季節の美しさをお菓子で表現し、お茶席や皆様のご家庭で、
            目で楽しみじっくり味わっていただけるよう、
            丹精込めてひとつひとつ丁寧に作っております。<br><br>
            時代に合わせたお菓子作りにも取り組みつつ、
            創業以来の伝統の味をお楽しみください。
          </p>
        </div>
      </div>
      </div>
  </div>
  <!-- カフェのご案内 -->
  <div class="cafe bg-gray" id="Cafe">
    <div class="inner">
      <div class="inner-sub">
      <h2 class="section-title">濱岡屋カフェのご案内</h2>
      <div id="cafeImageFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#cafeImageFade" data-slide-to="0" class="active"></li>
          <li data-target="#cafeImageFade" data-slide-to="1"></li>
          <li data-target="#cafeImageFade" data-slide-to="2"></li>
          <li data-target="#cafeImageFade" data-slide-to="3"></li>
          <li data-target="#cafeImageFade" data-slide-to="4"></li>
          <li data-target="#cafeImageFade" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./img/Cafe_Table_01.jpg" alt="slide1">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/Cafe_JouNama_Maccha.jpg" alt="slide2">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/Cafe_JouNama_IceMaccha.jpg" alt="slide3">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/Cafe_Kakigouri.jpg" alt="slide4">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/Cafe_Kata_CloseUp.jpg" alt="slide5">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/Cafe_Table_02.jpg" alt="slide6">
          </div>
        </div>
      </div>
      <div class="section-text">
        <p>
          新店舗には、濱岡屋のお菓子をその場で召し上がっていただける
          カフェスペースを設けております。<br>
          古伝餡の餡をたっぷり使ったあんみつ、焼きたての栄一バターどら焼きなど
          作りたてならではの美味しさをご用意しております。<br><br>
          また、夏には餡はもちろん自家製のシロップを使ったかき氷や、
          古伝餡を使ったアイス最中などもございます。<br>
          美味しいお茶とご一緒にお召し上がりください。<br>
        （お品書きは季節により変わります）<br><br>

          濱岡屋カフェ（店舗の営業日に準じます）<br>
          10：00〜17：00
        </p>
      </div>
    </div>
    </div>
    </div>
    
    <!-- 店舗のご案内 -->
    <div class="contact" id="Contact">
      <div class="inner">
        <div class="inner-sub">
        <h2 class="section-title">店舗のご案内</h2>
        <div id="shopImageFade" class="carousel slide carousel-fade cafe-slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#shopImageFade" data-slide-to="0" class="active"></li>
          <li data-target="#shopImageFade" data-slide-to="1"></li>
          <li data-target="#shopImageFade" data-slide-to="2"></li>
          <li data-target="#shopImageFade" data-slide-to="3"></li>
          <li data-target="#shopImageFade" data-slide-to="4"></li>
          <li data-target="#shopImageFade" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./img/shop_out_side2.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/shop_inside3.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/shop_inside4.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/shop_out_side4.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/shop_inside5.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./img/shop_inside2.jpg" alt="Second slide">
          </div>
        </div>
      </div>
      <div class="section-text">
        <div class="text-flex">
          <p class="text-flex-title">住所</p>
          <p><a href="https://goo.gl/maps/qH3JV1Gf3UicM8QP9">〒366-0824 埼玉県深谷市<br class="pc-d-none">西島町2-18-14    <i class="fas fa-map-marker-alt"></i></a></p>
        </div>
        <div class="text-flex">
          <p class="text-flex-title">電話</p>
          <p><a href="tel:048-571-0505">048-571-0505(代表)</a></p>
        </div>
        <div class="text-flex">
          <p class="text-flex-title">FAX</p>
          <p>048-571-0530</p>
        </div>
        <div class="text-flex">
          <p class="text-flex-title">店舗営業</p>
          <p>9:00〜18:00</p>
        </div>
        <div class="text-flex">
          <p class="text-flex-title">カフェ営業</p>
          <p>10:00〜17:00</p>
        </div>
        <div class="text-flex">
          <p class="text-flex-title">休業日</p>
          <p>毎週水曜日、第３火曜日</p>
        </div>
        <div class="text-flex">
          <p class="text-flex-title">駐車場</p>
          <p>店舗前に６台完備</p>
        </div>
      </div>
      <div class="shop-image">
        <img src="./img/shop_out_side1.jpg" alt="">
      </div>
    </div>
    </div>
  </div>

  <!-- SNS PDFリンク -->
  <div class="sns bg-gray">
    <div class="inner">
      <p class="fax-text">↓FAXでご注文の方は、こちらからダウンロード</p>
    <a href="./order-list.pdf">
      <div class="btn fax-btn">
        <p>ご注文表</p>
      </div>
    </a>
  </div>
  </div>

  <div class="inner">
    <div class="sns-box">
      <div class="link-item">
        <a href="https://www.instagram.com/hamaokaya_wagashi/?hl=ja"><img class="instagram-logo" src="./img/instagram-logo.png" alt=""></a>
      </div>
      <div class="link-item">
        <a href="https://www.facebook.com/kodenanhamaokaya/"><img class="facebook-logo" src="./img/facebook-logo.png" alt=""></a>
      </div>
      <div class="link-item twitter">
        <a href="https://twitter.com/hamaokaya02?lang=ja"><img class="twitter-logo" src="./img/twitter-logo.png" alt=""></a>
      </div>
    </div>
  </div>
  
  <!-- トップに戻るボタン -->
  <div class="go-top">
    <img src="./img/arrow-circle-up.webp" alt="">
  </div>
  
  <!-- フッターロゴ -->
    <div class="inner">
      <div class="logo-text-img">
        <img src="./img/logo-text.png" alt="">
      </div>
    </div>

  <!-- フッター -->
  <footer>
    <div class="inner">
      <div class="footer-copy">
        <p class="copy-right">Copyright © 2020 HAMAOKAYA CO., LTD. All Rights Reserved</p>
      </div>
    </div>
  </footer>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="js/jquery.bgswitcher.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>