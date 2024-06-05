<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    //

    public function showproduct()
    {
        $productvalue = DB::table('producttable')->select()->get();

        $check = session()->has('adminuser');

        if ($check) {
            return view('./admin/admin', ['data' => $productvalue]);
        } else {
            return redirect('./admin/');
        }
        // return view('./admin/admin', );
    }




public function Home(){
    $productvalue = DB::table('producttable')->select()->get();
    return view('welcome', ['data' => $productvalue]);
}





    public function Deleteblog($id)
    {
        $user = DB::table('producttable')->where('id', $id)->delete();

        if ($user) {
            echo " <script>alert('Blog Delete ')

        </script>";

            return redirect('./admin/Dashborad');

        } else {
            echo "<script>alert('failed to Delete blog')

        </script>";
            return redirect('./admin/Dashborad');
        }
    }

    public function editblogs($id)
    {
        $productvalue = DB::table('producttable')->where('id', $id)->get();

        return view('./admin/blogedit', ['blogdata' => $productvalue]);

    }

    public function updates(Request $req)
    {

        $id = $req->id;
        $formedit = DB::table('producttable')->where('id', $id)->update([
            'Tittle' => $req->Tittle,
            'Description' => $req->Description,
        ]);

        if ($formedit) {
            return redirect('./admin/Dashborad');
        } else {
            return redirect('./admin/Dashborad');
        }
    }

    public function addproducts(Request $req)
    {

        $user = DB::table('producttable')->insert([

            'Tittle' => $req->Tittle,
            'Description' => $req->Description,

        ]);

        if ($user) {
            echo " <script>alert('data add')
            window.location.href='./admin/Dashborad'
            </script>";
        } else {
            echo "<script>alert('failed to add data')
            window.location.href='./admin/admin.php'
            </script>";
        }
    }






    public function blogpage($id){
        $blogdata = DB::table('producttable')->where('id', $id)->get();

$user=DB::table('usercomment')->where('blogid', $id)->get();

if($user){
    return view('blogpage',['blogs'=>$blogdata, 'userdat'=>$user] );
}else{
    return view('blogpage',['blogs'=>$blogdata]);
}


        
    }
}
