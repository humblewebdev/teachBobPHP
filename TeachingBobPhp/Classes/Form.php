<?php
require "Person.php";

if (!empty($_GET)) {

    $Person = new Person($_GET['age'], $_GET['sex'], $_GET['race'], $_GET['first'], $_GET['last']);

    $thank_you =  "Thanks " . $Person->getfirstName();

}
?>
<html>
    <body>
    <?php
        if(isset($thank_you) && !empty($thank_you)) {
            echo $thank_you;
        }
    ?>
    <form method="get">
        <input type="number" name="age">
        <input type="text" name="sex">
        <input type="text" name="race" placeholder="race">
        <input type="text" name="first" placeholder="First Name">
        <input type="text" name="last" placholder="Last Name">
        <input type="submit">
    </form>
</body>
</html>
