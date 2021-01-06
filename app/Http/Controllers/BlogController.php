<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\LoggedUserTrait;

class BlogController extends Controller
{
    use LoggedUserTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $data_logged_user = $this->get_data_logged_user($id);
            return view('blog', compact('data_logged_user'));
        }
        $data_logged_user = null;
        return view('blog', compact('data_logged_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        session_start();
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $data_logged_user = $this->get_data_logged_user($id);
            return view('blog-post', compact('data_logged_user'));
        }
        $data_logged_user = null;
        return view('blog-post', compact('data_logged_user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
