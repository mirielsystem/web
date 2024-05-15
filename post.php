<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miriel Systems - Blog</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

       h1, h2, h3, h4, p {
            text-align: center;
            margin: 10px 0;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        hr {
            border: 1px solid #ddd;
            margin: 20px 0;
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .card {
            width: 250px;
            margin: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* カードの下部に余白を追加 */
            margin-bottom: 60px;
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <!-- header.phpをheaderタグ内に読み込む -->
    <header>
        <?php include('header.php'); ?>
    </header>
    
    <div class="container">
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
            echo '<h1>Miriel Systems -' . $postFileName . '</h1>';
            echo $parsedown->text($postContent);
        } else {
            echo '<h1>Miriel Systems Blog</h1>';
            echo '<p>投稿が見つかりません。</p>';
        }
        ?>
    </div>
    
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</body>
</html>
