# 付録）PHPで作業を自動化する

さて、PHPの活躍する分野はWebアプリケーションの開発だけではありません。PHPのようなプログラミング言語をマスターすると、日々のルーチンワークを自動化することができます。

たとえばファイルやフォルダを作成するプログラムを作成できます。

次のプログラムをmy.phpという名前で保存してみましょう。

```php
<?php
$fileName = "notes.txt";
$year = "2018";
$months = ["01", "02", "03"];
mkdir($year);
for ($i = 0; $i < count($months); $i++) {
  mkdir($year . "/" . $months[$i]);
  copy($fileName, $year . "/" . $months[$i] . "/" . $fileName);
}
```

## プログラムの実行

このPHPプログラムはコンソール上で実行します。

Windowsの場合はコマンドプロンプト（Macの場合はターミナル）を起動して、デスクトップに移動します。

```
cd Desktop/itcaret
```

PHPプログラムを実行するには以下のように入力します。

```
php my.php
```

## PHPの便利な関数

以降はPHPに用意されているファイル操作関数の一覧です。これらの関数を組み合わせれば役に立つプログラムを作成できます。

> Excelには合計を求めるsum関数や平均を求めるaverage関数があります。PHPにも同じように便利な関数が用意されています。

### Step1 画面に文字を出力する

```php
<?php
echo "Hello World";
```

#### ファイルに文字を出力する

```php
<?php
file_put_contents("sample.txt", "Hello World");
```

### Step2 フォルダの内容を表示する

```php
<?php
$files = scandir(".");
print_r($files);
```

### Step3 フォルダを移動する

```php
<?php
chdir("..");
$files = scandir(".");
print_r($files);
```

### Step4 ファイルの内容を表示する

フォルダにsample.txtがある場合

```php
<?php
$data = file_get_contents('sample.txt');
echo $data;
```

### Step5 フォルダを作成する

```php
<?php
mkdir("premium");
```

#### フォルダを削除する

```php
<?php
rmdir("premium");
```

### Step6 ファイルを作成する

```php
<?php
file_put_contents("sample.txt", "Hello World");
```

#### ファイルを削除する

```php
<?php
unlink("sample.txt");
```

### Step7 ファイルをコピーする

```php
<?php
copy("sample.txt", "sample2.txt");
```

#### ファイルを移動する

```php
<?php
rename("sample2.txt", "sample3.txt");
```
