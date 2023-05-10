<?php
$fileName = basename($_REQUEST['file']);
file_put_contents('upload/'. $fileName, file_get_contents('php://input'));
?>