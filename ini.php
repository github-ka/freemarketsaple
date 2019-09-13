<?php
//================================
// ログ
//================================
//ログの取得
ini_set('log_errors', 'on');
//ログの出力ファイルを指定
ini_set('error_log', './log/php_error.log');


//================================
// セッション準備・セッション有効期限を延ばす
//================================
//セッションファイル保存場所指定
ini_set('session.save_path', './log/sessionfile');
//セッション有効期限指定 60秒60分24時間30日←３０日分の秒数(削除は100分の1の確率で行われる)
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 30);
//クッキーの有効期限・デフォルトはブラウザ閉じると切れる
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 30);

//sessionスタート関数
session_start();
//現在のセッションIDを新しく生成したものと置き換える（なりすましのセキュリティ対策）
session_regenerate_id();
