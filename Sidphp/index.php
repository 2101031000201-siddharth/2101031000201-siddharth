<?php
if($_GET["name"] || $_GET["age"] )
{
    echo "welcome" . $_GET['name'] . "<br>";
    echo "you are" . $_GET['age'] . "old.";
    exit();
}
?>

<html>
    <body>
        <form ation="<?ph $_PHP_SELF ?>" methods="GET">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" />
</form>