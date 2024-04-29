<!DOCTYPE html>
<html>
<head>
    <title>アンケートフォーム</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f9;
            color: #333;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 8px;
            margin: 6px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
        }
        input[type="submit"], a.button-link {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            display: inline-block;
        }
        a.button-link {
            text-align: center;
            vertical-align: middle;
            line-height: normal; /* adjust this as per padding to center the text vertically */
        }
    </style>
</head>
<body>
    <h1>アンケート入力</h1>
    <form action="write.php" method="post">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="book">好きな本:</label>
        <input type="text" id="book" name="book" required>

        <label for="reason">理由:</label>
        <textarea id="reason" name="reason" required></textarea>

        <input type="submit" value="送信">
    </form>
    <a href="read.php" class="button-link">アンケート結果を見る</a>
</body>
</html>
