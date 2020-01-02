<?php
$user=htmlspecialchars($_POST('user'));
$pass=htmlspecialchars($_POST('pass'));

$sql='SELECT img FROM users WHERE userCode=$user';
$key=$row['img'];
$sql='SELECT codes.code1,codes.code2,user.img FROM codes INNER JOIN user ON decode(codes.code1,$key)=$user   WHERE decode(codes.code2,$key)=$pass';