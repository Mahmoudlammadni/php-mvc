<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greeting</title>
</head>
<body>
<?php
$m = "";
if (!empty($message)) {
    $m = $message;
} elseif (!empty($mes)) {
    $m = $mes;
}
?>

    <h1><?php echo $m; ?></h1>
    <a href="index.php">Go back</a>
</body>
</html>
