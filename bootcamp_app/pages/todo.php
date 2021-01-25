<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Static Template</title>
<link rel="stylesheet" href="style.css" />

<?php include "../bootcamp_app/pages/navigation.php"; ?>

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

<script src="script.js"></script>