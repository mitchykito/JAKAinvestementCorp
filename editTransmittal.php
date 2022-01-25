<?php
if (isset($_POST['add'])) {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "jaka";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $userid = $_POST['userid']; 
        $deployed = $_POST['deployed'];
        $comment = $_POST['comment'];
        $qty = $_POST['qty'];
        $ticket = $_POST['ticket'];
        $tagid = $_POST['options'];
        $options = count($tagid);
        // sql code for inserting items in the equipment using checkbox
        // sql code para sa auto change ng status ng item kapag na select sila na ma dedeploy
        for ($i = 0; $i < $options; $i++) {
            mysqli_query($conn, "INSERT INTO transmittal_details (tag, qty, ticket, comment) VALUES ('$tagid[$i]', '$qty', '$ticket', '$comment')");
            mysqli_query($conn, "UPDATE asset SET stat = 'On Delivery' WHERE tag = '$tagid[$i]' "); 
        }
        
       header("location: transmittal.php");
    }
}
?>
