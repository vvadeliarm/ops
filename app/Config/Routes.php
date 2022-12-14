<?php

namespace Config;

use App\Controllers\PengajuanTabel;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/PengajuanTabel/(:segment)', 'PengajuanTabel::detail/$1');
<<<<<<< HEAD
$routes->get('/HomeKepalaBaakTabel/detailSetuju/(:segment)', 'HomeKepalaBaakTabel::detailSetuju/$1');
$routes->get('/HomeStaffBaakTabel/detailSetuju/(:segment)', 'HomeStaffBaakTabel::detailSetuju/$1');
=======
$routes->get('/PengajuanTabel/detailSetuju/(:segment)', 'PengajuanTabel::detailSetuju/$1');
>>>>>>> 3f766bba3446c6a790f3e05f2b938b59feed3759
$routes->get('/KepalaBaakTabel/(:segment)', 'KepalaBaakTabel::detail/$1');
$routes->get('/KepalaBaakTabel/TimeStamp/(:segment)', 'KepalaBaakTabel::TimeStamp/$1');
$routes->get('/KepalaBaakTabel/timestamp/(:segment)', 'KepalaBaakTabel::timestamp/$1');
$routes->get('/KepalaBaakTabel/timestamp2/(:segment)', 'KepalaBaakTabel::timestamp2/$1');
$routes->get('/HomeStaffBaakTabel/detail/(:segment)', 'HomeStaffBaakTabel::detail/$1');
$routes->get('/TolakKbaakTabel/(:segment)', 'TolakKbaakTabel::detail/$1');
$routes->get('/TerimaKbaakTabel/(:segment)', 'TerimaKbaakTabel::detail/$1');
$routes->get('/pages/pengajuanSKM/(:segment)', 'MahasiswaTabel::pengajuanSKM/$1');
$routes->get('/PerbaikanTabel/(:segment)', 'PerbaikanTabel::perbaikiSKM/$1');
$routes->get('/CRUDPengajuan/updatePengajuan/(:segment)', 'CRUDPengajuan::updatePengajuan/$1');
$routes->get('/KepalaBaakTabel/updateTTD/(:segment)', '/KepalaBaakTabel::updateTTD/$1');
$routes->get('/CRUDPengajuan/teruskanPengajuanStaff/(:segment)', 'CRUDPengajuan::teruskanPengajuanStaff/$1');
$routes->get('/CRUDPengajuan/tangguhkanPengajuanStaff/(:segment)', 'CRUDPengajuan::tangguhkanPengajuanStaff/$1');
$routes->get('/CRUDPengajuan/tolakPengajuanStaff/(:segment)', 'CRUDPengajuan::tolakPengajuanStaff/$1');
$routes->get('/CRUDStatus/updateStatusSkm/(:segment)', 'CRUDStatus::updateStatusSkm/$1');
$routes->get('/CRUDStatus/terimaStatusSkm/(:segment)', 'CRUDStatus::terimaStatusSkm/$1');
$routes->get('/CRUDAlasan/insertAlasan/(:segment)', 'CRUDAlasan::insertAlasan/$1');
$routes->get('/Previewpdf/(:segment)', 'Previewpdf::Previewpdf/$1');

//$routes->get('/Previewpdf/download/(:segment)', 'Previewpdf::Previewpdf/download/$1');


$routes->get('/Previewpdf/PreviewpdfSkm/(:segment)', 'Previewpdf::Previewpdfskm/$1');
$routes->get('/HomeStaffBaakTabel/pages/login', 'Pages::login');


// $routes->get('/Previewpdf/download/(:segment)', 'Previewpdf::Previewpdf/download/$1');


$routes->get('/Previewpdf/PreviewpdfSkm/(:segment)', 'Previewpdf::Previewpdfskm/$1');
$routes->get('/export-pdf/(:segment)', 'PengajuanTabel::exportPDF/$1');
$routes->get('/view-pdf/(:segment)', 'PengajuanTabel::viewPDF/$1');

$routes->get('/Previewpdf/download/(:segment)', 'Previewpdf::Previewpdf/download/$1');

$routes->get('/Previewpdf/PreviewpdfSkm/(:segment)', 'Previewpdf::Previewpdfskm/$1');
$routes->get('/HomeStaffBaakTabel/pages/login', 'Pages::login');
$routes->get('/Previewpdf/PreviewpdfSkm/(:segment)', 'Previewpdf::Previewpdfskm/$1');

setlocale(LC_TIME, 'IND');



$routes->get('/export-pdf/(:segment)', 'PengajuanTabel::exportPDF/$1');
<<<<<<< HEAD
setlocale(LC_TIME, 'IND');

=======
<<<<<<< HEAD
$routes->get('/view-pdf/(:segment)', 'PengajuanTabel::viewPDF/$1');

setlocale(LC_TIME, "IND");
=======
<<<<<<< HEAD
setlocale(LC_TIME, 'IND');
=======
>>>>>>> 850039ccdad7d6389bd9f2df2d437ca551c6f721
>>>>>>> 64635772f322f09927b56665dd5f7929f870ff24
>>>>>>> eef24c722d94d3abf02748f56f93cd100e14439d
>>>>>>> 1fe74d4e0eba607d2f21a006b8b32622d9c884c0
>>>>>>> 3f766bba3446c6a790f3e05f2b938b59feed3759
>>>>>>> 02ba513aca2277dc70c5ed2365b5fb7038bf5ae3
/*
 * --------------------------------------------------------------------
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
