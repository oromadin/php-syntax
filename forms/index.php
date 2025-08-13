<html>
<head>
    <title>form experience</title>
</head>
<body>
    <form method='post'>
        <input type='text' name='fname' />
        <input type='text' name='sname' />
        <input type='submit' value='Push in db' />
    </form>
</body>
</html>

<?php

phpinfo();

if (empty($_POST)) {
    echo 'Enter data';
}

$user = 'neondb_owner';
$pass = 'zqtKcY8r9VAJ';
$sql = "INSERT INTO user_name (first_name, second_name) VALUES ($_POST[fname], $_POST[sname])";

$db = new PDO('postgresql:host=ep-winter-dust-a5aq33t5-pooler.us-east-2.aws.neon.tech;dbname=neondb?sslmode=require', $user, $pass);
$items = $db->query($sql)->fetchAll();

var_dump($items);
