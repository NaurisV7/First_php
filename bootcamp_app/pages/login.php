<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="style" action="?page=authenticate&sid=<?php echo $sid; ?>" method="post">
        <label for="username"> Username:</label>
        <input type="username" id="username" name="username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
include "../bootcamp_app/pages/navigation.php";
?>