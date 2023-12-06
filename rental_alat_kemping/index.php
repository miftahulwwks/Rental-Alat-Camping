<?php 
include "header.php";

$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
switch ($queries['page']) {
	case 'mbr':
		# code...
		include 'mbr/mbr_index.php';
		break;
	case 'mbr_add':
		# code...
		include 'mbr/create.php';
		break;
	case 'mbr_add_save':
		# code...
		include 'mbr/create_save.php';
		break;
	case 'mbr_upd':
		# code...
		include 'mbr/update.php';
		break;
	case 'mbr_upd_save':
		# code...
		include 'mbr/update_save.php';
		break;
	case 'mbr_del':
		# code...
		include 'mbr/delete.php';
		break;
	case 'brg':
		# code...
		include 'brg/brg_index.php';
		break;
	case 'brg_add':
		# code...
		include 'brg/create.php';
		break;
	case 'brg_add_save':
		# code...
		include 'brg/create_save.php';
		break;
	case 'brg_upd':
		# code...
		include 'brg/update.php';
		break;
	case 'brg_upd_save':
		# code...
		include 'brg/update_save.php';
		break;
	case 'brg_del':
		# code...
		include 'brg/delete.php';
		break;
	case 'pjm':
		# code...
		include 'pjm/pjm_index.php';
		break;
	case 'pjm_add':
		# code...
		include 'pjm/create.php';
		break;
	case 'pjm_add_save':
		# code...
		include 'pjm/create_save.php';
		break;
	case 'pjm_upd':
		# code...
		include 'pjm/update.php';
		break;
	case 'pjm_upd_save':
		# code...
		include 'pjm/update_save.php';
		break;
	case 'pjm_del':
		# code...
		include 'pjm/delete.php';
	case 'peminjaman_detail':
		# code...
		include 'peminjaman_detail/peminjaman_detail_index.php';
		break;
	case 'peminjaman_detail_add':
		# code...
		include 'peminjaman_detail/create.php';
		break;
	case 'peminjaman_detail_add_save':
		# code...
		include 'peminjaman_detail/create_save.php';
		break;
	case 'peminjaman_detail_upd':
		# code...
		include 'peminjaman_detail/update.php';
		break;
	case 'peminjaman_detail_upd_save':
		# code...
		include 'peminjaman_detail/update_save.php';
		break;
	case 'peminjaman_detail_del':
		# code...
		include 'peminjaman_detail/delete.php';
	default:
		# code...
		include 'home.php';
		break;
}

include "footer.php";
 ?>