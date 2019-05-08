<?php
declare(strict_types=1);

// https://qiita.com/mpyw/items/939964377766a54d4682 をそのまま

header('Content-Type: text/plain; charset=utf-8');

try {

	// 未定義である・複数ファイルである・$_FILES Corruption 攻撃を受けた
	// どれかに該当していれば不正なパラメータとして処理する
	if (!isset($_FILES['upfile']['error']) || !is_int($_FILES['upfile']['error'])) {
		throw new RuntimeException('パラメータが不正です');
	}

	// $_FILES['upfile']['error'] の値を確認
	switch ($_FILES['upfile']['error']) {
		case UPLOAD_ERR_OK: // OK
			break;
		case UPLOAD_ERR_NO_FILE:   // ファイル未選択
			throw new RuntimeException('ファイルが選択されていません');
		case UPLOAD_ERR_INI_SIZE:  // php.ini定義の最大サイズ超過
		case UPLOAD_ERR_FORM_SIZE: // フォーム定義の最大サイズ超過 (設定した場合のみ)
			throw new RuntimeException('ファイルサイズが大きすぎます');
		default:
			throw new RuntimeException('その他のエラーが発生しました');
	}

	// ここで定義するサイズ上限のオーバーチェック
	// (必要がある場合のみ)
	if ($_FILES['upfile']['size'] > 1000000) {
		throw new RuntimeException('ファイルサイズが大きすぎます');
	}

	// $_FILES['upfile']['mime']の値はブラウザ側で偽装可能なので
	// MIMEタイプに対応する拡張子を自前で取得する
	if (!$ext = array_search(
		mime_content_type($_FILES['upfile']['tmp_name']),
		array(
			'gif' => 'image/gif',
			'jpg' => 'image/jpeg',
			'png' => 'image/png',
		),
		true
	)) {
		throw new RuntimeException('ファイル形式が不正です');
	}

	// ファイルデータからSHA-1ハッシュを取ってファイル名を決定し，保存する
	if (!move_uploaded_file(
		$_FILES['upfile']['tmp_name'],
		$path = sprintf('./uploads/%s.%s',
			sha1_file($_FILES['upfile']['tmp_name']),
			$ext
		)
	)) {
		throw new RuntimeException('ファイル保存時にエラーが発生しました');
	}

	// ファイルのパーミッションを確実に0644に設定する
	chmod($path, 0644);

	echo 'ファイルは正常にアップロードされました';

} catch (RuntimeException $e) {

	echo $e->getMessage();

}
