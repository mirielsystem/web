<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>特定商取引法に基づく表記</title>
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

<h1>特定商取引法に基づく表記</h1>

<dl>
  <dt>事業者の名称</dt>
  <dd>Sawayama Tenga（サワヤマ テンガ）</dd>

  <dt>代表者名</dt>
  <dd>Sawayama Tenga（サワヤマ テンガ）</dd>

  <dt>所在地</dt>
  <dd>請求があったら延滞なく開示します。</dd>

  <dt>連絡先</dt>
  <dd>
    電話番号：090-6381-6601 (代表者携帯)<br>
    メールアドレス：contact@freelynetwork.jp
  </dd>
</dl>

<p>※所在地については、特定事業者に関する情報公表制度に基づき、請求があった場合に開示します。</p>

<?php include('footer.php'); ?>
</body>
</html>
