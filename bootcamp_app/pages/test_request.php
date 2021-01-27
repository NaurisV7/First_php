<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "../components/head.php";
include "../bootcamp_app/pages/navigation.php";
?>


<form id="test-request" action="<?php get_url("?page=request") ?>" method="post" >
    <input type="text" name="todos">
    <select name="action">
        <option value="get">Dabūt datus</option>
        <option value="update">Nosūtīt datus</option>
    </select>

    <button class="">Nosūtīt</button>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="functions.js"></script>


<script>
    document.getElementById('test-request').addEventListener('submit', function(e) {
        e.preventDefault();
        let form = this;

        $.ajax({
            method: 'post',
            url: āction,
            data: JSON_stringify(task_list)
        }).done(function (msg){
            console.log(msg);
        });
    });
</script>