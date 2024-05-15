<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Miriel Systems</title>
    <style>
        @font-face {
            font-family: 'CustomFont';
            src: url('assets/font.ttf') format('truetype');
            font-display: swap;
        }
        body {
            font-family: CustomFont, sans-serif;
            margin: 0;
            padding: 0;
            cursor: url('images/cursor.jpg'), auto;
            color: #333;
            background-color: #fff;
        }
        .dark-mode {
            color: #ccc;
            background-color: #333;
        }
        .site-title {
            margin: 0;
        }
        .menu {
            margin-right: 20px;
        }
        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .menu ul li {
            display: inline;
            margin-right: 10px;
        }
        .menu ul li a {
            text-decoration: none;
            color: #666;
        }
        .menu ul li a:hover, .menu ul li a.dark-mode {
            color: #fff;
        }
        #about, #accounts, #link {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        th.dark-mode, td.dark-mode {
            background-color: #444;
            border-color: #666;
        }
        .link-image {
            width: 300px;
            height: auto;
            margin: 10px;
            border: 1px solid #ccc;
        }
        #theme-toggle {
                padding: 8px 16px;
                font-size: 16px;
                color: #fff;
                background-color: #555;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            #theme-toggle:hover {
                background-color: #666;
            }
            
            /* ダークモード時のボタンスタイル */
            .dark-mode #theme-toggle {
                background-color: #444;
                color: #ddd;
            }
            
            .dark-mode #theme-toggle:hover {
                background-color: #555;
            }
        @media screen and (max-width: 600px) {
            .menu {
                margin: 0;
            }
            .menu ul {
                display: flex;
                justify-content: center;
            }
            .menu ul li {
                display: block;
                margin: 5px 0;
            }
            table {
                width: auto;
            }
        }
    </style>
</head>
<script>
        document.addEventListener('DOMContentLoaded', () => {
            const prefersDark = localStorage.getItem('theme') === 'dark';
            if (prefersDark) {
                document.body.classList.add('dark-mode');
            }
        });
</script>
<body>
    <?php include 'header.php'; ?>

    <?php
// Markdownファイルが保存されているディレクトリ
$dir = "./post";

// パラメータから表示する記事を決定
$post = isset($_GET['post']) ? $_GET['post'] : '';

if (!empty($post)) {
    // 指定された.mdファイルのパス
    $postFilePath = $dir . "/" . $post;

    if (file_exists($postFilePath)) {
        // Parsedownクラスを読み込む
        require_once './source/parsedown-1.7.4/Parsedown.php';
        $parsedown = new Parsedown();

        // ファイルを読み込み
        $content = file_get_contents($postFilePath);

        // 記事のタイトルと著者を取得
        preg_match('/^# (.+)/m', $content, $titleMatches);
        preg_match('/^## Author: (.+)/m', $content, $authorMatches);
        $title = !empty($titleMatches) ? $titleMatches[1] : '';
        $author = !empty($authorMatches) ? $authorMatches[1] : '';

        echo '<div id="blog">';
        if (!empty($title)) {
            echo '<h2>' . $title . '</h2>';
        }
        if (!empty($author)) {
            echo '<p>作者: ' . $author . '</p>';
        }
        echo '<div>' . $parsedown->text(preg_replace('/^# .+\n\n## Author: .+\n/m', '', $content)) . '</div>';
        echo '</div>';
    } else {
        echo '<p>記事が見つかりません。</p>';
    }
} else {
    // ディレクトリ内の.mdファイルを取得
    $mdFiles = glob($dir . "/*.md");

    if (count($mdFiles) === 0) {
        echo '<div id="blog">';
        echo '<h2>Blog</h2>';
        echo '<p>記事が見つかりませんでした。</p>';
        echo '</div>';
    } else {
        echo '<div id="blog">';
        echo '<h2>Blog</h2>';
        echo '<ul>';
        foreach ($mdFiles as $mdFile) {
            $content = file_get_contents($mdFile);
            preg_match('/^# (.+)/m', $content, $titleMatches);
            preg_match('/^## Author: (.+)/m', $content, $authorMatches);
            if (!empty($titleMatches) && !empty($authorMatches)) {
                $title = $titleMatches[1];
                $author = $authorMatches[1];
                echo '<li>';
                echo '<a href="blog.php?post=' . basename($mdFile) . '">' . $title . '</a> by ' . $author . '<br>';
                echo '</li>';
            }
        }
        echo '</ul>';
        echo '</div>';
    }
}
?>
<?php include('footer.php'); ?>
</body>
</html>
