<?php

if ($_GET['url']) {
    $random = rand();

    $file_url = "/var/www/html/pdfs/output$random.pdf";

    $command = "wkhtmltopdf " . $_GET['url'] . " $file_url";
    exec($command);

    //if (file_exists($file_url)) {
        //File Download magic
        header('Content-Type: application/octet-stream');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
        readfile($file_url);
        unlink($file_url);
    //} else {
        //echo "hubo un error! :(";
    //}

}

?>
