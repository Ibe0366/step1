<?php
    session_start();
    $_SESSION["ip"] = $_SERVER["REMOTE_ADDR"];
    

    if ( !empty($_COOKIE["asukaru_ankate"]) ) {
      $message = "<script>alert('すでにアンケートには回答されています。もう一度回答を行いますか？？回答しない場合は一度OKボタンを押してからブラウザを閉じてください。回答を継続する場合にはOKボタンを押して回答をしてください。');</script>";
    } 

?>
<!Doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>ASUKARU アンケート</title>
    <style>
      /* http://meyerweb.com/eric/tools/css/reset/ 
      v2.0 | 20110126
      License: none (public domain)
      */
      html, body, div, span, applet, object, iframe,
      h1, h2, h3, h4, h5, h6, p, blockquote, pre,
      a, abbr, acronym, address, big, cite, code,
      del, dfn, em, img, ins, kbd, q, s, samp,
      small, strike, strong, sub, sup, tt, var,
      b, u, i, center,
      dl, dt, dd, ol, ul, li,
      fieldset, form, label, legend,
      table, caption, tbody, tfoot, thead, tr, th, td,
      article, aside, canvas, details, embed, 
      figure, figcaption, footer, header, hgroup, 
      menu, nav, output, ruby, section, summary,
      time, mark, audio, video {
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline;
      }
      /* HTML5 display-role reset for older browsers */
      article, aside, details, figcaption, figure, 
      footer, header, hgroup, menu, nav, section {
      display: block;
      }
      body {
      line-height: 1;
      }
      ol, ul {
      list-style: none;
      }
      blockquote, q {
      quotes: none;
      }
      blockquote:before, blockquote:after,
      q:before, q:after {
      content: '';
      content: none;
      }
      table {
      border-collapse: collapse;
      border-spacing: 0;
      }

      /**/
      body{
       background-color: #E6E6E6;
      }


      p{
        font-size: 13px;
        line-height: 20px;
      }
      h1{
        text-align: center;
        font-weight: bold;
      }
      span{
        border-bottom: 2px dotted red;
      }

      #wrapp{
       background-color: #fff;
       width: 80%;
       margin : 8% auto ;
       padding: 20px;
       box-shadow: 10px 10px 10px rgba(0,0,0,0.4);
       line-height: 18px;
      }
      .clear{
       clear:both;
      }
    </style>
  </head>
  <body>
    <?php echo $message; ?>
    <div id="wrapp">
      <h1>WEB アンケート</h1>
      <br>
      <p>いつもお世話になっております。今月より神埼商工会青年部へ入部させていただきました<span> ASUKARUの遠藤昌平 </span>といいます。</p>
      <p>田道ヶ里にてAIやWEBシステム、業務システムなどの開発・保守・運営を行っております。</p>
      <p>先日、青年部の部員の中の数名の方から、WEBシステムやホームページの運用、IOT、ICT、データーの解析や広告などについていくつかのご質問などをいただきました。</p>
      <p>そこでこの度、<span>WEBシステムや、現時点でのWEB開発の現場などについての解説する場</span>を設けさせていただく運びとなりました。</p>
      <p>つきましては、普段から皆さまが疑問に思っていることやサイト運営などについてのご意見になるべく広く回答できるよう<span>私の方でテーマをいくつか設定して解説を行いたい</span>と思っております。</p>
      <p>そこで、皆さま大変お忙しい中恐縮ではございますが、以下のアンケートにご回答をいただけますと幸いです。</p>
      <p>何卒宜しくお願い致します。</p>
      <p>なお、いただきましたデーターは上記のテーマ設定に関するものでのみ使用をさせていただきます。回答結果と個人が結び付くこと、特定個人を推知することはありません。テーマを設定後は速やかに適切にアンケート結果は破棄いたします。</p>
      <br>
      <p style="font-size: 15px; color: red;">
        回答は、10月19日までにお願い致します。
      </p>
      <hr>
      <div class="ask_form">
        <form action="ress.php" method="POST">
          <!-- 興味の有無  -->
          <P>全て任意回答項目</P>
          <p><strong>１・　システムやホームページの運用、IOT、ICT、データーの解析や広告についてご興味はありますか。</strong></p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="ある">
            <label class="form-check-label" for="exampleRadios1">
              <p>ある</p>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="ない">
            <label class="form-check-label" for="exampleRadios2">
              <p>ない</p>
            </label>
          </div>
          <br>
          <!-- どのようなシステムに興味があるのか -->
          <p><strong>２・　どのようなシステムにご興味がありますか。(複数回答　可)</strong></p>
          <table>
            <tr>
              <td>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox1" value="自社内システム">
                  <label class="form-check-label" for="inlineCheckbox1"><p>自社内システム</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox2" value="社外システム（サービス提供）">
                  <label class="form-check-label" for="inlineCheckbox2"><p>社外システム（サービス提供）</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox3" value="WEBサイト制作">
                  <label class="form-check-label" for="inlineCheckbox3"><p>WEBサイト制作</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox4" value="３D">
                  <label class="form-check-label" for="inlineCheckbox4"><p>３D</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox5" value="機会学習">
                  <label class="form-check-label" for="inlineCheckbox5"><p>機会学習</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox6" value="DeepLearning">
                  <label class="form-check-label" for="inlineCheckbox6"><p>DeepLearning(深層学習)</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox7" value="IOT、ICT">
                  <label class="form-check-label" for="inlineCheckbox7"><p>IOT、ICT（システム制御を含む）</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox8" value="データー解析">
                  <label class="form-check-label" for="inlineCheckbox8"><p>データー解析（重回帰分析やロジスティクス解析などを用いた統計解析）</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox9" value="WEB解析（ホームページの解析）">
                  <label class="form-check-label" for="inlineCheckbox9"><p>WEB解析（ホームページの解析/運用データーの解析）</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox11" value="ゲーム開発">
                  <label class="form-check-label" for="inlineCheckbox11"><p>ゲーム開発</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                 <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox12" value="IOSアプリ、Androidアプリ">
                  <label class="form-check-label" for="inlineCheckbox12"><p>IOSアプリ、Androidアプリ</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                 <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox13" value="セキュリティ">
                  <label class="form-check-label" for="inlineCheckbox13"><p>セキュリティ</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                 <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox14" value="事業戦略・企業戦略とホームページ">
                  <label class="form-check-label" for="inlineCheckbox14"><p>事業戦略・企業戦略とホームページ</p></label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                 <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="system[]" id="inlineCheckbox13" value="とにかく全部">
                  <label class="form-check-label" for="inlineCheckbox13"><p style="color: red;">とにかく全部（自分のところのお客様が何を求めているのかを知りたい）</p></label>
                </div>
              </td>
            </tr>
          </table>
          <br>

          <!-- 開発意欲について -->
          <p><strong>３・　システムの導入について</strong></p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="operations" id="Radios1" value="積極的に考えている">
            <label class="form-check-label" for="Radios1">
              <p>積極的に考えている</p>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="operations" id="Radios2" value="悩み中">
            <label class="form-check-label" for="Radios2">
              <p>悩み中</p>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="operations" id="Radios3" value="全くもって考えていない">
            <label class="form-check-label" for="Radios3">
              <p>全くもって考えていない</p>
            </label>
          </div>
          <br>
          <!-- その他ご意見 -->
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><p><strong>その他ご意見がありましたらご自由に記載してください。</strong></p></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="other"></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="button">送信する</button>        
        </form>
      </div><!-- // ask_form  -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
