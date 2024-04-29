<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '未記入';
    $email = $_POST['email'] ?? '未記入';
    $book = $_POST['book'] ?? '未記入';
    $reason = $_POST['reason'] ?? '未記入';

    try {
        $pdo = new PDO('mysql:dbname=survey;charset=utf8;host=localhost', 'root', '');
        $sql = "INSERT INTO responses (name, email, book, reason) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $book, $reason]);

        // データの書き込み後に index.php へリダイレクト
        header('Location: index.php');
        exit();
    } catch (PDOException $e) {
        die("データベースエラー: " . $e->getMessage());
    }
}
?>
