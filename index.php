<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/kirikae.css">
    <link rel="stylesheet" href="css/particles.css">
    <title>HTML&CSS講座</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <span><a href="index.php"><h1>二グのテンプレ屋さん</h1></a></span>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a class="html" href="html.php">HTML</a></li>
                <li><a class="css" href="css.php">CSS</a></li>
                <li><a class="js" href="js.php">Javascript</a></li>
            </ul>
        </nav>
        <div class="signature">
            <span><a href="https://nigxam.com">こんなのも制作してます！</a></span>
        </div>
    <div class="openbtn"><span></span><span></span><span></span></div>
        <nav id="g-nav">
            <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
                <ul>
                    <li><a class="html" href="html.php">HTML</a></li>
                    <li><a class="css" href="css.php">CSS</a></li>
                    <li><a class="js" href="js.php">Javascript</a></li>
                </ul>
            </div>
        </nav>
    </header>
<main>
    <div id="particles-js"></div>
    <div id="wrapper">
    <h2>テンプレートを使いこなそう！</h2>
<section id="concept" class="fadeUpTrigger">
    <h1>Concept</h1>
<div class="concept-area">
<div  class="mainimg" >
    <img src="images/main.png" alt="プログラム紹介写真">
</div>
    <ul class="mainul">
        <li>コーディングスキルが身につく</li>
        <li>個性を大切に！</li>
        <li>考える力を伸ばす！</li>
        <li>苦手意識を克服！</li>
        <li>言語を使いこなせる！</li>
        <li>就活を有利に！</li>
    </ul>
</div>
</section>
    <section class="service-section">
        <div class="services-container fadeUpTrigger">
            <div class="service-card">
                <h3>WEB制作</h3>
                <p>ホームページや<br>コーポレートサイト・LPなど企業価値向上に貢献する<br>WEBサイトを制作します。</p>
            </div>
            <div class="service-card">
                <h3>必要なテンプレートを<br>使用できる！</h3>
                <p>初歩的なものから<br>実用的なものまで <br>幅広く扱うことができます！<br>使い方を広げよう！</p>
            </div>
            <div class="service-card">
                <h3>コーディングスキルが<br>上達する！</h3>
                <p>活用しながらも自分で組み換えば<br>オリジナルのまとまった<br>ホームページを<br>作成することができます</p>
            </div>
        </div>
    </section>
    <p class="mainp">HTML & CSSテンプレートを活用することで、効率的かつ効果的にウェブ制作を進めることができます。テンプレートは、プロフェッショナルなデザインが施されており、初めから美しいレイアウトや配色が用意されているため、開発時間を大幅に短縮できます。また、多くのテンプレートがレスポンシブ対応やSEO対策を考慮して設計されているため、質の高いウェブサイトを簡単に構築することが可能です。
        テンプレートは初心者にとっても学習素材として最適で、他の開発者がどのようにコードを書いているかを学びながらスキルアップできます。さらに、BootstrapやTailwind CSSなどのフレームワークが組み込まれているものも多く、拡張性が高い点も魅力です。
        無料テンプレートや手頃な価格の有料テンプレートも数多く存在し、コストを抑えつつプロフェッショナルなデザインを採用できます。また、カスタマイズ性に優れているため、自分のプロジェクトに合わせて配色や構成を調整し、独自のウェブサイトを作ることも可能です。
        テンプレートを使えば、クライアントへのデモ作成も素早く行え、完成形を具体的にイメージさせることでスムーズなプロジェクト進行が期待できます。テンプレートはウェブ制作の強力なサポートツールとして、初心者から上級者まで幅広く活用できる便利な存在です。</p>
    <!--/wrapper--></div>
<!-- PHPで作成したアナログ時計 -->
<section class="clock-container">
                <h2 class="clock-title">現在時刻</h2>
                <?php
                // タイムゾーンを東京に設定
                $now = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
                
                // 時、分、秒を取得
                $hour = intval($now->format('G'));
                $minute = intval($now->format('i'));
                $second = intval($now->format('s'));

                // 時計の針の角度を計算
                // 時針: 30度ずつ移動（1時間 = 30度）+ 分による微調整
                $hourAngle = ($hour % 12) * 30 + ($minute / 60) * 30;
                // 分針: 6度ずつ移動（1分 = 6度）
                $minuteAngle = $minute * 6;
                // 秒針: 6度ずつ移動（1秒 = 6度）
                $secondAngle = $second * 6;
                ?>
                
                <!-- SVGで時計を描画 -->
                <svg class="clock-svg" width="200" height="200" viewBox="0 0 100 100">
                    <!-- 時計の外枠 -->
                    <circle cx="50" cy="50" r="45" fill="white" stroke="#2c3e50" stroke-width="2"/>
                    
                    <!-- 時間の目盛りを描画 -->
                    <?php for($i = 0; $i < 12; $i++):
                        // 30度ずつ回転（360度 ÷ 12 = 30度）
                        $angle = $i * 30;
                        // 角度をラジアンに変換（-90度して12時の位置を調整）
                        $rad = deg2rad($angle - 90);
                        // 目盛りの開始位置と終了位置を計算
                        $x1 = 50 + 40 * cos($rad);
                        $y1 = 50 + 40 * sin($rad);
                        $x2 = 50 + 45 * cos($rad);
                        $y2 = 50 + 45 * sin($rad);
                    ?>
                    <line class="clock-mark" 
                          x1="<?= $x1 ?>" y1="<?= $y1 ?>" 
                          x2="<?= $x2 ?>" y2="<?= $y2 ?>" />
                    <?php endfor; ?>

                    <!-- 時針を描画 -->
                    <?php
                    $hourRad = deg2rad($hourAngle - 90);
                    $hourX = 50 + 25 * cos($hourRad);
                    $hourY = 50 + 25 * sin($hourRad);
                    ?>
                    <line class="hour-hand" 
                          x1="50" y1="50" 
                          x2="<?= $hourX ?>" y2="<?= $hourY ?>" />

                    <!-- 分針を描画 -->
                    <?php
                    $minRad = deg2rad($minuteAngle - 90);
                    $minX = 50 + 35 * cos($minRad);
                    $minY = 50 + 35 * sin($minRad);
                    ?>
                    <line class="minute-hand" 
                          x1="50" y1="50" 
                          x2="<?= $minX ?>" y2="<?= $minY ?>" />

                    <!-- 秒針を描画 -->
                    <?php
                    $secRad = deg2rad($secondAngle - 90);
                    $secX = 50 + 40 * cos($secRad);
                    $secY = 50 + 40 * sin($secRad);
                    ?>
                    <line class="second-hand" 
                          x1="50" y1="50" 
                          x2="<?= $secX ?>" y2="<?= $secY ?>" />

                    <!-- 時計の中心点 -->
                    <circle class="clock-center" cx="50" cy="50" r="2"/>
                </svg>
                <p class="clock-note">※ページを更新すると現在時刻に更新をする</p>
            </section>
        </div>
    </main>
<footer>
    <div class="footer-links">
      <div>
        <a href="html.php">HTML</a>
        <a href="css.php">CSS</a>
        <a href="js.php">Javascript</a>
      </div>
      <div>
        <a href="https://github.com/NigxamdeuS">その他のポートフォリオはこちらから</a>
        <a href="https://lit.link/nigxam">リンク一覧</a>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="social-icons">
        <a href="https://www.instagram.com/nigxam/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
          </svg><i class="fab fa-instagram"></i></a>
        <a href="https://x.com/Nigxam_seibu"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
          </svg><i class="fab fa-twitter"></i></a>
      </div>
      <p>© Nigxam.HTML_kouza</p>
    </div>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<!--自作のJS-->
<script src="js/fadeUpTrigger.js"></script>
<script src="js/particles.js"></script>
<script src="js/kirikae.js"></script>
<script>
    (function(d) {
      var config = {
        kitId: 'hbo2nve',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
</html>