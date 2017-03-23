# PHPのインストール（Windows）

Windowsは標準でPHPがインストールされていません。そのため、PHPをダウンロードしてインストールする必要があります。

## インストール前の確認

事前にPHPがインストールされていないことを確認しておきましょう。

キーボードからWindowsボタン+ xボタンで表示されるメニューからコマンドプロンプトを起動できます。

コマンドプロンプトにはキーボードから入力できますので、次のコマンドを入力してください。


    php -v


PHPがインストールされていない場合は次のようなメッセージが表示されます。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win1.png" width="500px">

> もしPHPが既にインストールされているなら以下の作業は不要です。

<div style="page-break-before: always;"></div>

## PHPのインストール

PHPをダウンロードするためにブラウザで以下のURLにアクセスします。

http://windows.php.net/download/

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win2.png" width="500px">

上記のページの「VC14 x64 Thread Safe」の「Zip」リンクをクリックするとダウンロードが開始します。

> 32bit OSの場合はVC14 x86 Thread Safeとなります。

<div style="page-break-before: always;"></div>

ダウンロードが終わったらZIPファイルを解凍してください。

![](https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win3.png)

解凍したフォルダ名を以下のように変更します。

* 変更前：php-7.1.2-Win32-VC14-x64
* 変更後：php

![](https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win22.png)

名前を変更したphpフォルダをC:¥直下に移動します。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win4.png" width="500px">

C:¥phpというフォルダができあがればOKです。

<div style="page-break-before: always;"></div>

### php.iniファイルのコピー

C:¥phpフォルダにはphp.ini-developmentという名前のファイルがあります。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win31.png" width="500px">

ファイルをコピーした後、ファイル名を変更して-development部分を削除してください

C:¥phpフォルダにphp.iniファイルが配置されればOKです。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win32.png" width="500px">

> C:¥Windowsフォルダにコピーする際に、権限確認のダイアログが表示された場合はOKを選択してください。

<div style="page-break-before: always;"></div>

## 環境変数の設定

続いてコマンドプロンプトからPHPコマンドを利用できるようにします。コマンドプロンプトからPHPコマンドを利用するには環境変数Pathを設定する必要があります。

環境変数Pathを設定するには、次のようにエクスプローラ画面で「PC」を右クリックしてプロパティを開きます。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win5.png" width="500px">

プロパティを選択すると次のような画面が起動するので、サイドバーの「システムの詳細設定」を選択します。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win6.png" width="500px">


表示されたシステムのプロパティ画面で環境変数ボタンをクリックします。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win7.png" width="300px">

環境変数画面が表示されるので、「ユーザー環境変数」欄の新規ボタンをクリックします。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win20.png" width="350px">

> 既にPathを登録済みの場合はPathを選択して編集ボタンをクリックしてください

ユーザー変数の設定画面で以下のように登録します。（変数名にPath、変数値にC:¥phpと入力します）

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win21.png" width="500px">

> 既にPathを登録済みの場合は、Pathを選択し編集ボタンをクリックして、編集画面に進みます。編集画面で、新規ボタンをクリックして、C:¥phpと記述します。

以上で環境変数の設定は完了です。

> コマンドプロンプトを開いている場合、環境変数の設定を反映するために、コマンドプロンプトを閉じるようにしてください。

<div style="page-break-before: always;"></div>

## インストールの確認

コマンドプロンプトを開いて、以下のコマンドを入力してください。


    php -v


以下のように表示されればOKです。

<img src="https://s3-ap-northeast-1.amazonaws.com/itcaret/op/install_win14.png" width="500px">
