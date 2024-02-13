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
        }

        h2, h3, h4, p {
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
    <?php include('header.php'); ?>
    <h1>FreelyNetwork Blog</h1>

    <!-- 投稿一覧を表示 -->
    <?php
    // 投稿一覧の取得
    $posts = glob("posts/*.md");

    if (!empty($posts)) {
        foreach ($posts as $post) {
            // ファイル名から投稿タイトルを取得
            $postTitle = basename($post, '.md');
            echo '<div class="card">';
            echo '<h2><a href="post.php?post=' . urlencode($postTitle) . '">' . $postTitle . '</a></h2>';
            echo '</div>';
        }
    } else {
        echo '<p>まだ投稿がありません。</p>';
    }
    ?>
    <?php include('footer.php'); ?>
</body>
</html>
