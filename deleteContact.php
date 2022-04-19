<?php
    require_once('./class/contact.php');
    $id = $_GET['id'];
    $contact = new Contact();
    $contact->deleteContactById($id);
    echo '<script>window.location="contact.php"</script>';
