<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreelyNetwork</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-Ctm0c9Ag7M5aUk5IQz3JUbMya/JM+1k4AsbVkZmlBnj2MBybIrF3iDF9Z7eQcbv3" crossorigin="anonymous">
    <style>
        /* Your existing CSS styles here */

        /* New header styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
            color: #fff;
        }

        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 20px;
        }

        .menu-toggle svg {
            width: 24px;
            height: 24px;
            fill: #fff;
            transition: transform 0.3s ease;
        }

        .menu-toggle.open svg {
            transform: rotate(90deg);
        }

        .menu-links {
            display: flex;
        }

        .menu-links a {
            margin-left: 20px;
            color: #fff;
            text-decoration: none;
        }

        .menu-links a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .menu-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 50px;
                left: 0;
                width: 100%;
                background-color: #333;
                padding: 10px 20px;
            }

            .menu-links a {
                margin: 10px 0;
            }

            .menu-toggle {
                display: block;
            }

            .menu-toggle.open ~ .menu-links {
                display: flex;
            }
        }
    </style>
</head>
<body>
    <!-- New header -->
    <header class="header">
        <div class="logo">FreelyNetwork</div>
        <div class="menu-toggle" onclick="toggleMenu()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0z"/>
                <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/>
            </svg>
        </div>
        <nav class="menu-links">
        <p><a href="/">ホーム</a></p>
        <p><a href="/blog.php">ブログ</a></p>
        <p><a href="/raw.php">特定商取引法に基づく表記</a></p>
        </nav>
    </header>

    <!-- Rest of your content -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // JavaScript/jQuery for toggling the menu
        function toggleMenu() {
            $('.menu-toggle').toggleClass('open');
        }
    </script>
</body>
</html>
