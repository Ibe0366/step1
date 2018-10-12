<?php
  session_start();
  // session
  $ip = $_SESSION["ip"];
  function f($a){
    // escape
    $ress = htmlspecialchars($a, ENT_QUOTES, "utf-8");
    return $ress;
  }

    // escape 設定確認
    if ( !empty($_POST["exampleRadios"]) ) {
      $exampleRadios = f( $_POST["exampleRadios"] );
    } else {
      $exampleRadios = "None";
    }
    
    if ( !empty($_POST["system"]) ) {
          $systemArray = [];
          foreach ($_POST["system"] as $value) {
              array_push($systemArray, f($value));
          }
        // 文字列変換
        $system = implode(',', $systemArray);
    } else {
      $system = "None";
    }

    if ( !empty($_POST["operations"]) ){
      $operations = f($_POST["operations"]);
    } else {
      $operations = "None";
    }

    if ( !empty($_POST["other"]) ) {
          $other = f($_POST["other"]);
    } else {
      $other = "None";
    }

    $date = date("Y/m/d H:i:s");

    // sendmail
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $to      = 'asukaru2014@icloud.com';
    $subject = 'アンケートに回答がありました。';
    $message = '回答結果をチェック';
    $headers = 'From: from@hoge.co.jp' . "\r\n";

    mb_send_mail($to, $subject, $message, $headers);

    // データーの吐き出し
    $file_handler = fopen("result.csv", "a");
    $array = array($date, $ip, $exampleRadios, $system, $operations, $other);
    fputcsv($file_handler, $array);

    // 次回回答のためのクッキーを設置
     setcookie("asukaru_ankate", "asukaru_ankate_ress_for_kanzaki", time()+60*60*24*7*4);
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
    <div id="wrapp">
      <p>回答ありがとうございました。</p>
      <p>回答はセンターの方へ送っております。</p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
