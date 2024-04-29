<!DOCTYPE html>
<html>
<head>
    <title>アンケート結果</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f9;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {background-color: #f5f5f5;}
        .button-link {
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
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>アンケート結果一覧</h1>
    <table>
        <tr>
            <th>名前</th>
            <th>Email</th>
            <th>好きな本</th>
            <th>理由</th>
        </tr>
        <?php
        try {
            $pdo = new PDO('mysql:dbname=uuddlrlrba_survey;charset=utf8;host=mysql57.uuddlrlrba.sakura.ne.jp', 'uuddlrlrba', 'yoshio1229');
            //$pdo = new PDO('mysql:dbname=survey;charset=utf8;host=localhost', 'root', '');            
            $sql = "SELECT name, email, book, reason FROM responses ORDER BY created_at DESC";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($users as $user) {
                echo "<tr><td>{$user['name']}</td><td>{$user['email']}</td><td>{$user['book']}</td><td>{$user['reason']}</td></tr>";
            }
        } catch (PDOException $e) {
            die("データベースエラー: " . $e->getMessage());
        }
        ?>
    </table>
    <a href="index.php" class="button-link">アンケート入力に戻る</a>
</body>
</html>
