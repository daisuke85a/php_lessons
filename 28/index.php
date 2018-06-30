<?php
$username = '';
if($_SERVER['REAUEST_METHOD'] === 'POST' ) {
    echo "post";
    $username = $_POST['username'];
    $err = false;
    if (strlen($username) > 8){
        $err = true;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Check username</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="user name" value="<?php echo 
        htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="submit" value="Check!">
        <?php if ($err) { echo "Too long!"; } ?>
    </form>
</body>
</html>
