<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Usercomment extends Controller
{
    //
    public function create(Request $req)
    {
        $id=$req->id;  
$user=DB::table('usercomment')->insert([
"Name"=>$req->Name,
"email"=>$req->Email,
"Comment"=>$req->Comment,
"blogid"=>$id
]);

if($user){
    return redirect('blogpage/'.$id);
}else{
    return redirect('/');
}


}
}
