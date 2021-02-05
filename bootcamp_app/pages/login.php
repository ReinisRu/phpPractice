<?php include "../bootcamp_app/components/head.php"; ?>
<title>Login</title>

<form action="<?php get_url('?page=authenticate&sid=' . $sid)?>" method="post">
    <label>Lietotājs</label>
    <input type="text" name="username">
    <label>Parole</label>
    <input type="password" name="password">

    <button type="submit">Ieiet</button>
</form>
