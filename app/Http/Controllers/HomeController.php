<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\LoggedUserTrait;

class HomeController extends Controller
{
	use LoggedUserTrait;
    public function home()
    {
    	session_start();
    	if (isset($_SESSION['id'])) {
    		$id = $_SESSION['id'];
    		$data_logged_user = $this->get_data_logged_user($id);
    		return view('index', compact('data_logged_user'));
    	}
    	$data_logged_user = null;
    	return view('index', compact('data_logged_user'));
    }
}
