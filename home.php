<h3 style="margin-top: .5em;"> Create a new contact </h3>

<form action="update-contacts.php" method="post">
    <div class="form-group">
        <label for="contactName">New Contact's Name</label>
        <input type="text" class="form-control" id="contactName" name="contactName" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="contactPhone">Phone Number</label>
        <input type="text" class="form-control" name="contactPhone" id="contactPhone" placeholder="Enter number" aria-describedby="numberHelp">
        <small id="numberHelp" class="form-text text-muted">We'll never share your contacts information with anyone else.</small>
    </div>
    <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
</form>

<div style="margin-bottom: 25em;"></div>
