<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreelyNetwork Blog</title>
</head>
<body>
    <?php
    // パラメータから投稿ファイル名を取得
    $postFileName = isset($_GET['post']) ? $_GET['post'] : '';
    $postPath = "posts/" . $postFileName . ".md";

    if (!empty($postFileName) && file_exists($postPath)) {
        // MarkdownファイルをHTMLに変換して表示
        require_once './source/parsedown-1.7.4/Parsedown.php';
        $parsedown = new Parsedown();
        $postContent = file_get_contents($postPath);
        // ページタイトルを設定
        echo '<h1>FreelyNetwork Blog - ' . $postFileName . '</h1>';
        echo $parsedown->text($postContent);
    } else {
        echo '<h1>FreelyNetwork Blog</h1>';
        echo '<p>投稿が見つかりません。</p>';
    }
    ?>
</body>
</html>
