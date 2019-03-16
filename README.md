# tweet
コマンドラインからツイートします。

## 使用例
```
$ echo "This is tweet command test. " | tweet
```
を実行して https://twitter.com/ を確認！

## インストール
1. /usr/local/src などにダウンロードします。
```
# cd /usr/local/src
# git clone https://github.com/Hato6502/tweet
```

1. Composer で依存パッケージをインストールします。
```
# cd tweet
# composer install
```

1. Twitter API の設定をします。
```
# mv config.php.example config.php
# nano config.php
```

1. コマンドのシンボリックシンクを張ります。
```
# cd /usr/local/bin
# ln -s /usr/local/src/tweet/tweet
```

## 注意
ツイートの文字数制限などによってエラーが表示されることがあります。
