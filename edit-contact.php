<?php 
$id = $_GET['id'];
$name = $_GET['name'];
$number = $_GET['Number'];
?>


<h3 style="margin-top: .5em;"> Editing <?=htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></h3>

<form action="submit-edit.php" method="post">
    <div class="form-group">
        <input type="hidden" name="contactId" value="<?=$id?>"/>
        <label for="contactName">Edit Name:</label>
        <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Enter name" value="<?=htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
    </div>
    <div class="form-group">
        <label for="contactPhone">Phone Number</label>
        <input type="text" class="form-control" name="contactPhone" id="contactPhone" placeholder="Enter number" aria-describedby="numberHelp" value="<?=htmlspecialchars($number, ENT_QUOTES, 'UTF-8'); ?>">
    </div>
    <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
</form>

<div style="margin-bottom: 25em;"></div>
