<?php
        include("komponen/header.html");
        include("komponen/navigasi.html");

        //include("content.html");
        $menu="beranda";

        if(isset($_GET["menu"]))
        {
                $menu=$_GET["menu"];
        }
        else{$menu="beranda";}

        include("komponen/content-$menu.html");
        include("komponen/footer.html");
?>