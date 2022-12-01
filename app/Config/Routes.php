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
$routes->get('/KepalaBaakTabel/(:segment)', 'KepalaBaakTabel::detail/$1');
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
$routes->get('/CRUDAlasan/insertAlasan/(:segment)', 'CRUDAlasan::insertAlasan/$1');
$routes->get('/Previewpdf/(:segment)', 'Previewpdf::Previewpdf/$1');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c6afd06eb1835d156630653ce4d954cac6b95f26
// $routes->get('/Previewpdf/download/(:segment)', 'Previewpdf::Previewpdf/download/$1');
$routes->get('export-pdf', 'PengajuanTabel::exportPDF');
<<<<<<< HEAD
$routes->get('/Previewpdf/PreviewpdfSkm/(:segment)', 'Previewpdf::Previewpdfskm/$1');
$routes->get('/HomeStaffBaakTabel/pages/login', 'Pages::login');
=======
=======
>>>>>>> 72521062e2818ea1cb38a32a3d36d4d2afb75648
$routes->get('/Previewpdf/PreviewpdfSkm/(:segment)', 'Previewpdf::Previewpdfskm/$1');
$routes->get('/export-pdf/(:segment)','PengajuanTabel::exportPDF/$1');

<<<<<<< HEAD
=======
>>>>>>> 42dae27e812c973b7e5e443744ccdb268db99e6c
>>>>>>> 852804a217e3a279326e562aeb35e16f50e518ba
>>>>>>> 72521062e2818ea1cb38a32a3d36d4d2afb75648
>>>>>>> c6afd06eb1835d156630653ce4d954cac6b95f26
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
