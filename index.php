<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreelyNetwork</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
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
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h2>FreelyNetwork</h2>
    <hr />
    <h3>Menu</h3>
    <p><a href="index.html">ホーム</a></p>
    <hr />
    <h4>Home/ホーム</h4>
    <p>FreelyNetworkのサービスへようこそ</p>
    <p>&nbsp;</p>
    <h3>メンバー一覧</h3>

    <!-- メンバーカード -->
    <div class="card-container">
        <?php
            $members = [
                [
                    'img' => 'https://avatars.githubusercontent.com/u/146170742?v=4',
                    'alt' => 'ありす(16439s)',
                    'name' => 'ありす(16439s)',
                    'role' => 'Founder & MAIN Developer',
                    'email' => 'contact@16439s.jp'
                ],
                [
                    'img' => 'https://avatars.githubusercontent.com/u/106049626?v=4',
                    'alt' => 'MilkChan(みるくちゃん)',
                    'name' => 'MilkChan(みるくちゃん)',
                    'role' => 'Founder & Tester'
                ],
                [
                    'img' => 'https://cdn.discordapp.com/avatars/498226824162181120/9350db1f0bdc3f49b9d49bb99d63b81e.png?size=1024',
                    'alt' => 'Rurutan7 (るるたん)',
                    'name' => 'Rurutan7 (るるたん)',
                    'role' => 'Moderator & Member'
                ]
            ];

            foreach ($members as $member) {
                echo '<div class="card">';
                echo '<img src="' . $member['img'] . '" alt="' . $member['alt'] . '">';
                echo '<h4>' . $member['name'] . '</h4>';
                echo '<p>' . $member['role'] . '</p>';
                if (isset($member['email'])) {
                    echo '<p>メールアドレス: ' . $member['email'] . '</p>';
                }
                echo '</div>';
            }
        ?>
    </div>
    <p>&nbsp;</p>
    <h3>サービス一覧</h3>
    <div class="card">
        <a href="https://rosekey.sbs" target="_blank">
            <img src="https://rosekey.sbs/files/18c4f01a-c1c4-4296-91df-098f1d05441d" alt="Rosekey">
            <h4>Rosekey</h4>
            <p>RosekeyはCherryPickをベースとしているサーバーです。</p>
            <p>新規登録大歓迎！</p>
        </a>
    </div>
    <hr />
    <p style="text-align: center; margin-bottom: 20px;">Copyright © 2024 @FreelyNetwork All Rights Reserved.</p>
</body>
</html>
