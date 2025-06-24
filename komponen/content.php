<?php
    $file_content= "komponen/content-$menu.html";

    if(file_exists($file_content))
    {
        include $file_content;
    }
    else
    {
        echo "<main class='container my-5'><div class='alert alert-warning'>Halaman tidak ditemukan.</div></main>";
    }
?>