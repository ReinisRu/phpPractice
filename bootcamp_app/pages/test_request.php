<?php include "../bootcamp_app/components/head.php"; ?>
<title>Test request</title>

<?php include "../bootcamp_app/components/navigation.php"; ?>

<form id="test-request" action="<?php get_url("?page=request") ?>" method="post" >
    <input type="text" name="todos">
    <select name="action">
        <option value="get">Receive data from file</option>
        <option value="update">Send data to file</option>
    </select>

    <button>Do it!</button>
</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="functions.js"></script>

<script>
 document.getElementById('test-request').addEventListener('submit', function(e) {
    e.preventDefault();
    let form = this;
    
    $.ajax({
        method: form.getAttribute('method'),
        url: form.getAttribute('action'),
        data: $(form).serialize()
    }).done(function(msg){
        console.log(msg);
    });
 });
</script>