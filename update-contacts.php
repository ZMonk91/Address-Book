<?php
 header("Location: index.php"); 
   try {
    $pdo = new PDO('mysql:host=localhost;dbname=contacts-list', 'test-user', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
   }
    catch (ExceptionType $e) {
    $output = "Unable to connect to the database server.";
    exit();
}
    try {
    $counterCheck = "ALTER TABLE contacts AUTO_INCREMENT=1";
    $pdo->query($counterCheck);
    $sql = "INSERT INTO contacts (contactName, contactPhone)
VALUES ('".$_POST["contactName"]."','".$_POST["contactPhone"]."')";
        if ($pdo->query($sql)) {
           echo "<script type= 'text/javascript'>alert('Sucessfully Updated Contact');</script>";
}
       else{
           echo "<script type= 'text/javascript'>alert('Contact update was unsuccessfull');</script>";
}
}

    catch (PDOException $e) {
     $error = 'Error fetching results: ' . $e->getMessage();
     exit();
}

?>
