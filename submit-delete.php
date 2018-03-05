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
    $sql = "DELETE FROM contacts WHERE contactId='".$_POST["contactId"]."'";
    $pdo->query($sql);
}

    catch (PDOException $e) {
     $error = 'Error fetching results: ' . $e->getMessage();
     exit();
}

?>
