
<?php 
include "../components/head.php";
include "../bootcamp_app/pages/navigation.php";
?>

<h1>Todo page</h1>
<div>
    <form action="" class="new-task">
    <textarea name="task" required></textarea>
    <button type="submit">Submit</button>
    </form>
</div>
<div class="task-list">
    <div class="template">
    <pre></pre>
    <a href="#" class="option">opt</a>
    <a href="#" class="save">Save</a>
    <div class="options">
        <a href="#" class="edit">edit</a>
        <a href="#" class="remove">remove</a>
    </div>
    </div>
</div>
<script>let action = "<?php get_url("?page=request") ?>";</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>