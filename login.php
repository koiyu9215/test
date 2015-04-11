<?php
/*-----------------------------------------------------------------------------
  概要      :login.php
  　　      :ID,パスワードを入力
  作成      :小池悠太
  日付      :2014年09月04日
  更新      :2014年12月20日
-----------------------------------------------------------------------------*/
//  HTTPヘッダーで文字コードを指定
  header("Content-Type:text/html; charset=UTF-8");
//処理部
  //セッション使用
    session_start();
  //エラーメッセージ
    if (isset($_SESSION["msg"])) {
      //セッション内にmsgの変数がある
      //auth.phpからの戻り
      $msg=$_SESSION["msg"];
    }else{
      $msg="";
    }

  //クッキーにIDがあれば取得
    if (isset($_COOKIE["id"])) {
      $id=$_COOKIE["id"];
    }else{
      $id="";
    }
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- スマホ用の指定 -->
      <!-- ビューポート設定：デバイスの幅に依存 -->
        <meta name="viewport" content="width=device-width, user-scale=yes, initial-scale=1.0, maximum-scale=5.0" />
      <!-- 自動電話番号変換機能をオフに -->
        <meta name="format-detection" content="telephone=no" />
      <!-- 画面固定 -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
      <!-- iPhone用ブックマークアイコンの指定 57*57 -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png" />
      <!-- ファビコン指定 16*16 -->
        <link rel="shortcut icon" href="/favicon.ico">
        <meta name="description" content="" /> 
        <meta name="keywords" content="" /> 
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="content-script-type" content="text/javascript" />
        <meta http-equiv="content-style-type" content="text/css" />
    <!--  css記述  -->
      <link rel="stylesheet" href="./css/login.css" type="text/css" media="all" />
    <title>login</title>
  </head>
  <body>
    <div id="wrapper">
      <h1 class="text-center">MASC</h1>
    	<form action="auth.php" method="post">
        <table>
          <tr>
            <td><img src="image/person.png" height="20" width="20"></td>
            <td><input type="text" name="id" placeholder="学籍番号" value="<?php print $id ?>"></td>
          </tr>
          <tr>
            <td><img src="image/key.png" height="20" width="20"></td>
            <td><input type="password" name="pw" placeholder="パスワード" value=""></td>
          </tr>
        </table>
    		<input type="submit" name="auth" value="ログイン" />
    	</form>
    </div>
  </body>
</html>
