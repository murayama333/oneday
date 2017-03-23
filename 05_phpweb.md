# PHPでWebアプリをつくるには

PHPを使ってWebページを作ってみましょう。PHPのプログラムでHTMLを出力するようにします。

以下の内容を記述し index.php という名前でデスクトップのitcaretフォルダに保存します。

```php
<?php
$title = "IT CARET";
$course = ["HTML", "PHP", "WordPress"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <h1><?php echo $title; ?></h1>
    <ul>
    <?php for ($i = 0; $i < 3; $i++) { ?>
      <li><?php echo strtoupper($course[$i]); ?></li>
    <?php } ?>
    </ul>
  </body>
</html>
```

## プログラムの実行

最近のPHPには簡易なWebサーバが組み込まれています。このサーバはビルトインサーバと呼ばれます。phpコマンド実行時にビルトインサーバを起動することができます。

> ApacheやCaddyのようなWebサーバを用意しなくてもWebアプリを開発できます。

Windowsの場合はコマンドプロンプト（Macの場合はターミナル）を起動して、デスクトップに移動します。

```
cd Desktop/itcaret
```

このPHPプログラムを実行するには以下のように入力します。

```
php -S localhost:8000
```

そのあとブラウザ（Chromeなど）を開いて、次のURLを入力します。

```
http://localhost:8000/index.php
```

## メモアプリを作る

もう一つPHPプログラムを作成してみましょう。

Atomなどのエディタを起動して、以下の内容を記述し note.php という名前でデスクトップの itcaret フォルダに保存します。

```php
<?php
$notes = file("notes.txt");
if (isset($_POST["note"])) {
  $note = $_POST["note"];
  array_push($notes, $note);
  file_put_contents("notes.txt", $note . PHP_EOL, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT CARET</title>
  </head>
  <body>
    <h1>IT CARET</h1>
    <form action="" method="post">
      <input type="text" name="note">
      <input type="submit" value="save">
    </form>
    <ul>
      <?php for($i = 0; $i < count($notes); $i++){ ?>
      <li><?php echo $notes[$i]; ?></li>
      <?php } ?>
    </ul>
  </body>
</html>
```

> 注意：このプログラムを動かすには、デスクトップ上にnotes.txtという空のファイルを用意しておく必要があります。

### 何をしたのか？

HTMLにPHPプログラムを組み合わせると、ユーザの入力データを処理できるようになります。言い方を変えると、このプログラムの利用者はブラウザを使ってWebサーバ上のプログラムを利用できるようになります。このようなプログラムはWebアプリケーションなどと呼ばれます。

> プログラムの利用者（ブラウザ）とPHPブログラムは別々のコンピュータに配置しても動作します。
