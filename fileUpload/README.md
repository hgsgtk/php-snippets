# file upload 検証

https://qiita.com/mpyw/items/939964377766a54d4682 の内容でパーミッションを明示的に変更している箇所があったので、必要なのか試す。

## Usage

```shell
$ php -v
PHP 7.2.13 (cli) (built: Dec  7 2018 10:41:23) ( NTS )

$ php -S localhost:8000
PHP 7.2.13 Development Server started at Wed May  8 11:31:40 2019
Listening on http://localhost:8000
```

## 検証
ディレクトリパーミッションは `drwxr-xr-x` (755)
```shell
-rw-r--r--@ 11_bungo_s.png
```

をアップロードすると644になる、

```shell
-rw-r--r-- 1e6700bb12a013266f64e4b276b9f3183c1951ba.png
```

777にしても同様に644になった。

## refs
- https://www.php.net/manual/ja/function.move-uploaded-file.php#85371
- https://qiita.com/mpyw/items/939964377766a54d4682
