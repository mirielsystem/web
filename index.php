<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miriel System</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-Ctm0c9Ag7M5aUk5IQz3JUbMya/JM+1k4AsbVkZmlBnj2MBybIrF3iDF9Z7eQcbv3" crossorigin="anonymous">
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
    <h4>Home/ホーム</h4>
    <h3 style="text-align: center;"><a href="http://freelynetwork.jp/post.php?post=Email-Address-Abuse-Notice"><span style="color: #e03e2d; background-color: #f8cac6;">&lt;重要&gt; FreelyNetworkのメールアドレスからのいたずらのお問い合わせフォーム荒らしについて。</span></a></h3>
    <p>Miriel Systems へようこそ</p>
    <p>&nbsp;</p>
    <h3>メンバー一覧</h3>

    <!-- メンバーカード -->
    <div class="card-container">
        <?php
            $members = [
                [
                    'img' => 'https://avatars.githubusercontent.com/u/168396067?v=4',
                    'alt' => 'Miriel',
                    'name' => 'Miriel (mirielnet)',
                    'role' => 'President / Head / Lead Developer',
                ],
                [
                    'img' => 'https://avatars.githubusercontent.com/u/106049626?v=4',
                    'alt' => 'MilkChan(みるくちゃん)',
                    'name' => 'MilkChan(みるくちゃん)',
                    'role' => 'Founder & Tester'
                ],
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
    <!-- サービス一覧 -->
    <div class="card-container">
        <?php
            $services = [
                [
                    'img' => 'https://freelynetwork.jp/files/4bbbecc6-a832-43f7-acca-c795c38d0df3',
                    'alt' => 'freelynetwork.jp',
                    'name' => 'ぼかろすきー V2(OLD SERVER)',
                    'description' => 'ぼかろすきーは、ボーカロイドが好きな人が集まるサーバーです！！新規登録大歓迎！',
                    'url' => 'https://freelynetwork.jp'
                ]
            ];

            foreach ($services as $service) {
                echo '<div class="card">';
                echo '<a href="' . $service['url'] . '" target="_blank">';
                echo '<img src="' . $service['img'] . '" alt="' . $service['alt'] . '">';
                echo '<h4>' . $service['name'] . '</h4>';
                echo '<p>' . $service['description'] . '</p>';
                echo '</a>';
                echo '</div>';
            }
        ?>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
