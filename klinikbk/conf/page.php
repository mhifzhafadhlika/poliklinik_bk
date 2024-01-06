<?php
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        switch ($page) {
            case 'data_obat';
                include "pages/obat/data_obat.php";
                break;
            case 'tambah_obat';
                include "pages/obat/tambah_obat";
                break;
            case 'ubah_obat';
                include "pages/obat/ubah_obat";
                break;
        }
    }else {
        include "pages/home.php";
    }
?>