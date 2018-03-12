<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<a href='Frontend.html'>atgal</a>

<?php
$ar = [$_POST['vardas'], $_POST['pavarde'], $_POST['pat']];
file_put_contents('tekstas.txt', implode(',', $ar) . "\n", FILE_APPEND);
?>

</body>
</html>