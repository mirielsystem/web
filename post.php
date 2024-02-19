<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreelyNetwork Blog</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            min-height: 100vh;
            letter-spacing: normal;
        }

        header, footer {
           display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
            color: #fff;
        }

        .container {
            max-width: 800px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        h1, p {
            text-align: center;
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
            echo '<h1>FreelyNetwork Blog - ' . $postFileName . '</h1>';
            echo $parsedown->text($postContent);
        } else {
            echo '<h1>FreelyNetwork Blog</h1>';
            echo '<p>投稿が見つかりません。</p>';
        }
        ?>
    </div>
    
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</body>
</html>
