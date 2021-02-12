
<title>To Do list</title>
<link rel="stylesheet" href="style.css">

<h3>To Do list</h3>

<form action="" method="post" class="new-task">
      <textarea name="task" required></textarea>
      <button type="submit">Izveidot</button>
</form>
    <div class="task-list">
    <?php $todo->get(); ?>
</div>