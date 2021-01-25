<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>


<form action="<?php get_url("?page=request") ?>" method="get" >
    <input type="text" name="todos">
    <select name="action">
        <option value="get">Dabūt datus</option>
        <option value="update">Nosūtīt datus</option>
    </select>

    <button>Nosūtīt</button>
</form>