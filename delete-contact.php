<?php 
$id = $_GET['id'];
$name = $_GET['name'];
?>


<h3 style="margin-top: .5em;"> Deleting <?=htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></h3>

<form action="submit-delete.php" method="post">
    <div class="form-group">
        <input type="hidden" name="contactId" value="<?=$id?>"/>
        <label for="submit-button">Are you sure you want to delete this contact? </label>
    </div>
    <button type="submit" id="submit-button" class="btn btn-danger" style="">DELETE</button>
</form>

<div style="margin-bottom: 25em;"></div>
