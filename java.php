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
            <span><a href="index.html"><h1>二グのテンプレ屋さん</h1></a></span>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a class="html" href="html.html">HTML</a></li>
                <li><a class="css" href="css.html">CSS</a></li>
                <li><a class="js" href="js.html">Javascript</a></li>
            </ul>
        </nav>
        <div class="signature">
            <span><a href="">こんなのも制作してます！</a></span>
        </div>
    <div class="openbtn"><span></span><span></span><span></span></div>
        <nav id="g-nav">
            <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
                <ul>
                    <li><a class="html" href="html.html">HTML</a></li>
                    <li><a class="css" href="css.html">CSS</a></li>
                    <li><a class="js" href="js.html">Javascript</a></li>
                </ul>
            </div>
        </nav>
    </header>
<main>
<div id="particles-js"></div>
<div id="wrapper">
  <h2>PHPの関数の一覧と概要</h2>
  <p class="mainp">PHPで使用される主な関数をカテゴリ別に整理した一覧です。基本的な関数から、データベース操作、ファイル操作、セキュリティ、エラー処理など、多岐にわたる関数を網羅しています。それぞれの関数の役割と用途が簡潔にまとめられており、初心者から中級者まで幅広いレベルの開発者に役立つ資料です。</p>  
<h1>基本関数</h1>
<table>
<tr>
  <td>print</td>
  <td>テキストを出力。</td>
</tr>
<tr>
  <td>echo</td>
  <td>テキストを出力。</td>
</tr>
<tr>
  <td>var_dump</td>
  <td>変数の型と値を出力。</td>
</tr>
<tr>
  <td>print_r</td>
  <td> 配列の内容を出力。</td>
</tr>
<tr>
<td>print_r</td>
<td> 配列の内容を出力。</td>
</tr>
<tr>
<td>var_export</td>
<td> 変数の内容を出力。</td>
</tr>
<tr>
<td>var_export</td>
<td> 変数の内容を出力。</td>
</tr>
<tr>
<td>var_export</td>
<td> 変数の内容を出力。</td>
</tr>
</table>
<h1>データ型</h1>
<table>
<tr>
  <td>string</td>
  <td>文字列。</td>
</tr>
<tr>
  <td>int</td>
  <td>整数。</td>
</tr>
<tr>
  <td>float</td>
  <td>浮動小数点数。</td>
</tr>
<tr>
  <td>bool</td>
  <td>論理値。</td>
</tr>
<tr>
  <td>array</td>
  <td>配列。</td>
</tr>
<tr>
  <td>object</td>
  <td>オブジェクト。</td>
</tr>
<tr>
  <td>null</td>
  <td>null。</td>
</tr>
<tr>
  <td>resource</td>
  <td>リソース。</td>
</tr>
<tr>
  <td>callable</td>
  <td>コールバック関数。</td>
</tr>
</table>
<h1>データベース関数</h1>
<table>
<tr>
  <td>mysqli_connect</td>
  <td>データベース接続を確立。</td>
</tr>
<tr>
  <td>mysqli_query</td>
  <td>データベースクエリを実行。</td>
</tr>
<tr>
  <td>mysqli_fetch_assoc</td>
  <td>結果セットから次の行を取得。</td>
</tr>
<tr>
  <td>mysqli_close</td>
  <td> データベース接続を閉じる。</td>
</tr>
<tr>
  <td>mysqli_error</td>
  <td>直近のエラーメッセージを取得。</td>
</tr>
<tr>
  <td>mysqli_num_rows</td>
  <td>結果セットの行数を取得。</td>
</tr>
<tr>
  <td>mysqli_fetch_array</td>
  <td>結果セットから次の行を取得。</td>
</tr>
<tr>
  <td>mysqli_fetch_object</td>
  <td>結果セットから次の行を取得。</td>
</tr>
<tr>
  <td>mysqli_fetch_row</td>
  <td>結果セットから次の行を取得。</td>
</tr>
<tr>
  <td>mysqli_free_result</td>
  <td>結果セットを解放。</td>
</tr>
<tr>
  <td>mysqli_real_escape_string</td>
  <td>SQLインジェクション対策のための文字列をエスケープ。</td>
</tr>
<tr>
  <td>mysqli_select_db</td>
  <td>データベースを選択。</td>
</tr>
</table>
<h1>ファイル操作関数</h1>
<table>
<tr>
  <td>ul</td>
  <td>順序なしリスト。</td>
</tr>
<tr>
  <td>ol</td>
  <td>順序ありリスト。</td>
</tr>
<tr>
  <td>li</td>
  <td>リスト項目。</td>
</tr>
</table>
<h1>リンクとメディア</h1>
<table>
<tr>
  <td>a</td>
  <td>ハイパーリンクを定義。</td>
</tr>
<tr>
  <td>img</td>
  <td>画像を挿入。</td>
</tr>
<tr>
  <td>video</td>
  <td>動画を埋め込み。</td>
</tr>
<tr>
  <td>audio</td>
  <td>音声を埋め込み。</td>
</tr>
<tr>
  <td>source</td>
  <td>メディアのソースを指定。</td>
</tr>
<tr>
  <td>iframe</td>
  <td>別ページを埋め込み。</td>
</tr>
</table>
<h1>テーブル</h1>
<table>
<tr>
  <td>tr</td>
  <td>行を定義</td>
</tr>
<tr>
  <td>th</td>
  <td>見出しセル。</td>
</tr>
<tr>
  <td>td</td>
  <td>通常のセル。</td>
</tr>
<tr>
  <td>thead</td>
  <td>表のヘッダー部分。</td>
</tr>
<tr>
  <td>tbody</td>
  <td>表の本体部分。</td>
</tr>
<tr>
  <td>tfoot</td>
  <td> 表のフッター部分。</td>
</tr>
<tr>
  <td>caption</td>
  <td>表のタイトル。</td>
</tr>
</table>
<h1>フォーム</h1>
<table>
<tr>
  <td>form</td>
  <td>フォームを定義。</td>
</tr>
<tr>
  <td>input</td>
  <td>入力フィールド（テキスト、パスワード、チェックボックスなど）。</td>
</tr>
<tr>
  <td>textarea</td>
  <td>複数行の入力フィールド。</td>
</tr>
<tr>
  <td>button</td>
  <td> ボタンを定義。</td>
</tr>
<tr>
  <td>select</td>
  <td>ドロップダウンメニュー。</td>
</tr>
<tr>
  <td>option</td>
  <td>ドロップダウンメニューの項目。</td>
</tr>
<tr>
  <td>label</td>
  <td>フォーム要素のラベル。</td>
</tr>
<tr>
  <td>fieldset</td>
  <td>フォーム要素をグループ化。</td>
</tr>
<tr>
  <td>legend</td>
  <td> グループのタイトル。</td>
</tr>
</table>
<h1>その他</h1>
<table>
<tr>
  <td>script</td>
  <td>JavaScriptコードを埋め込み。</td>
</tr>
<tr>
  <td>noscript</td>
  <td> JavaScriptが無効な場合に表示される内容。</td>
</tr>
<tr>
  <td>canvas</td>
  <td>描画領域を定義（JavaScriptで使用）。</td>
</tr>
<tr>
  <td>svg</td>
  <td> ベクター画像を描画。</td>
</tr>
</table>
<!--/wrapper--></div>
</main>
<footer>
    <div class="footer-links">
      <div>
        <a href="html.html">HTML</a>
        <a href="css.html">CSS</a>
        <a href="js.html">Javascript</a>
      </div>
      <div>
        <a href="#">その他のポートフォリオはこちらから</a>
        <a href="#">リンク一覧</a>
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