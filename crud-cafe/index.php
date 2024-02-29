<?php

error_reporting(0);

include('template/header.php');
include('config.php');

$halaman = $_GET['halaman'];

switch ($halaman) {

    case 'beranda':
        include('beranda.php');
        break;

        //coding menu start
    case 'daftarMenu':
        include('menu/v_daftarMenu.php');
        break;
    case 'tambahMenu':
        include('menu/v_tambahMenu.php');
        break;
    case 'simpanMenu':
        include('menu/m_tambahMenu.php');
        break;
    case 'hapusMenu':
        include('menu/m_hapusMenu.php');
        break;
    case 'ubahMenu':
        include('menu/v_ubahMenu.php');
        break;
    case 'simpanUbah':
        include('menu/m_ubahMenu.php');
        break;

        //coding menu end

        //coding pesanan start

    case 'daftarPesanan':
        include('pesanan/v_daftarPesanan.php');
        break;
    case 'tambahPesanan':
        include('pesanan/v_tambahPesanan.php');
        break;
    case 'simpanPesanan':
        include('pesanan/m_tambahPesanan.php');
        break;
    case 'hapusPesanan':
        include('pesanan/m_hapusPesanan.php');
        break;
    case 'ubahPesanan':
        include('pesanan/v_ubahPesanan.php');
        break;
    case 'ubahSimpanPesan':
        include('pesanan/m_ubahPesanan.php');
        break;

        //coding pesanan end
    default:

        break;
}

include('template/footer.php');
