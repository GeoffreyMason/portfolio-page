<?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $mailFrom = $_POST["mail"];
        $message = $_POST["message"];
        
        $mailTo = "geoxpm@hotmail.com";
        $headers = "From: ".$mailFrom;
        $txt = "Message from".$name.".\n\n".$message;
        
        mail($mailTo, "From Website", $txt, $headers);
        header(Location: contact.html);
    }
?>