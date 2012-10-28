jQuery ZipCode
======================
郵便番号から住所入力を補助するjQueryプラグイン

デモ
------
<a href="http://dev.creatorish.com/demo/zipcode/" target="_blank">http://dev.creatorish.com/demo/zipcode/</a>

動作環境
------

PHP5.0以上

使い方
------
郵便番号と住所を入力するinputを用意します。郵便番号は７桁なので、maxlengthを７としています。

    <input id="zip" type="text" name="zip" value="" maxlength="7" />
    <input id="address" type="text" name="address" value="" />

続いて/bodyタグの前に以下のように記述します。

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="zipcode.js"></script>
    <script type="text/javascript">
        $("#zip").zipform({
            target: "#address"
        });
    </script>

### オプション ###

zipformの第一引数には以下のようなオプションを設定することができます。

+    target: null : 住所の取得に成功したときに、住所を入力する先を指定します。  
指定にはjQueryのセレクタを使用します。（例： "#address"）
+    php: "zipcode.php" : zipcode.phpのパスです。場所を変更した場合は、変更先のパスを指定します。
+    loader: "ajax-loader.gif" : 住所検索中に表示する読み込みイメージのパスです。
+    success: function(data){} : 住所検索成功時に実行する処理です。第一引数で住所（文字列）が取得できます。
+    error: function(message){} : 住所検索に失敗したときに実行する処理です。該当する番号が見つからなかったときや、zipcode.phpが見つからなかったときなどに発生します。
+    trigger: null : zipformでは７桁入力完了時に自動的に住所を検索しますが、これをボタンクリックにしたいときに使用します。  
jQueryのセレクタを使ってクリックイベントを付加したい要素を指定してください。（例： "#address-search-btn"）

住所情報について
------

JP提供のKEN_ALL.csvを使っています。  
<a href"http://www.post.japanpost.jp/zipcode/download.html" target="_blank">http://www.post.japanpost.jp/zipcode/download.html</a>

ライセンス
--------
[MIT]: http://www.opensource.org/licenses/mit-license.php
Copyright &copy; 2012 creatorish.com
Distributed under the [MIT License][mit].

作者
--------
creatorish yuu  
Weblog: <http://creatorish.com>  
Facebook: <http://facebook.com/creatorish>  
Twitter: <http://twitter.jp/creatorish>