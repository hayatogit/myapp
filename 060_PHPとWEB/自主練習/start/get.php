<?php
// print_r($_POST['user']);
$user = $_POST['user'];
$id = $user['id'];
$name = $user['name'];
$pwd = $user['pwd'];

echo "<div> id: $id</div><br><div> name: $name</div><br><div> pwd: $pwd</div>";
