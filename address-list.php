<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=contacts-list', 'test-user', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}

catch (ExceptionType $e) {
    $output2 = "Unable to connect ot the database server.";
    exit();
}

try {
     $sql = 'SELECT * FROM contacts';
     $result = $pdo->query($sql);
}

catch (PDOException $e) {
     $error = 'Error fetching results: ' . $e->getMessage();
     exit();
}

while ($row = $result->fetch()) {
     $contactIds[]     = $row['contactId'];
     $contactNames[]   = $row['contactName'];
     $contactNumbers[] = $row['contactPhone'];
}

foreach ($contactIds as $contactId): ?>
    <tr>
        <td>
            <?=htmlspecialchars($contactNames[$contactId-1], ENT_QUOTES, 'UTF-8'); ?>
        </td>
        <td>                    <span class="small float-right"><a href="edit.php?id=<?=$contactId?>">Edit</a><a> |</a>
                        <a href="delete.php?id=<?=$contactId?>">  Delete</a></span>
            <?=htmlspecialchars($contactNumbers[$contactId-1],ENT_QUOTES,'UTF-8');?>
        </td>

    </tr>
    <?php endforeach;?>
