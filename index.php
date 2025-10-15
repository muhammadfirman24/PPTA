<?php
include 'layout/header.php';
include 'layout/nav.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'beranda':
        include 'dashboard.php';
        break;
    case 'profil':
        include 'profil.php';
        break;
    case 'sejarah':
        include 'section/profil-sejarah.php';
        break;
    case 'struktur':
        include 'section/profil-struktur.php';
        break;
    case 'visimisi':
        include 'section/profil-visimisi.php';
        break;
     case 'mi':
        include "pages/mi.php";
        break;
    case 'mts':
        include "pages/mts.php";
        break;
    case 'paud':
        include "pages/paud.php";
        break;
    case 'mtq':
        include "pages/mtq.php";
        break;
    case 'berita':
        include 'berita.php';
        break;
    case 'kontak':
        include 'kontak.php';
        break;
    case 'home':
    default:
        include 'dashboard.php';
        break;
}

include 'layout/footer.php';
?>
