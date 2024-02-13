<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreelyNetwork</title>
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
                    'img' => './images/0c75b92736939778de5256271acacca4.png',
                    'alt' => 'Rurutan7 (るるたん)',
                    'name' => 'Rurutan7 (るるたん)',
                    'role' => 'Moderator & Member'
                ],
                [
                    'img' => 'https://avatars.githubusercontent.com/u/86859447?v=4',
                    'alt' => '1STEP621',
                    'name' => '1STEP621',
                    'role' => 'Rosekey Contributor'
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
    <!-- サービス一覧 -->
    <div class="card-container">
        <?php
            $services = [
                [
                    'img' => 'https://vocaloid.social/files/2dcfde81-ec5f-40ce-afa9-4cf53cdf543c',
                    'alt' => 'Vocaloid.social',
                    'name' => 'ぼかろすきー(vocaloid.social)',
                    'description' => 'ぼかろすきーは、ボーカロイドが好きな人が集まるサーバーです！！新規登録大歓迎！',
                    'url' => 'https://vocaloid.social'
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
