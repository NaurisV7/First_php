<?php
include "../bootcamp_app/pages/navigation.php";
include "../components/head.php";
?>
<title>Uzdevumu saraksts - login</title>

<form class="style" action="?page=authenticate&sid=<?php echo $sid; ?>" method="post">
    <label for="username"> Username:</label>
    <input type="username" id="username" name="username">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <button type="submit">Submit</button>
</form>

