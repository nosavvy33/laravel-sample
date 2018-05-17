<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /*
    +---------+-------------+------+-----+---------+----------------+
| Field   | Type        | Null | Key | Default | Extra          |
+---------+-------------+------+-----+---------+----------------+
| id      | int(11)     | NO   | PRI | NULL    | auto_increment |
| title   | varchar(45) | NO   |     | NULL    |                |
| body    | text        | NO   |     | NULL    |                |
| user_id | int(11)     | NO   | MUL | NULL    |                |
+---------+-------------+------+-----+---------+----------------+
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function table(){
        $datos = User::all();
        $datos = array("datos" => $datos);
        return view('post.showTable',$datos);
    }

    public function searchTable($id){
        $posts = Post::where('user_id',$id)->get();
        $posts = array('posts' => $posts);
        return view('post.searchResults',$posts);
    }

    function getData($id){
        $posts = Post::where('user_id',$id)->get()->toArray();
        $posts = array('posts'=>$posts);
        return $posts;
    }

    public function downloadExcel($id){
        \Maatwebsite\Excel::create('Laravel Excel',function($excel){
            $arr = self::getData($id);
            $excel->setTitle('Posts');
            $excel->sheet('Excel sheet', function($sheet) use($arr){
               $sheet->fromArray($arr,null,'A1',false,false);
               // $sheet->row(1,array('data1','data2'));
            });
        })->download('xls');
    }


    public function index()
    {
        $posts = Post::all();
        /*foreach ($posts as $post) {
            echo $post->title."<br>";
            echo " - <br>".$post->users->name;
        }*/
        $posts = array("posts"=>$posts);
        return view('post.list',$posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $users = User::all();
            $users = array("users"=>$users);
            return view('post.create',$users);

            }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $post = new Post();
            $post->user_id =  $request->input('user');
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->save();
            return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        //$data = array('title'=>$post->title,'id'=>$post->id,'body'=>$post->body,'user_id'=>$post->users->name,'user_name'=>$post->users->id);
        $post = array("post"=>$post);
        return view('post.edit',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->user_id = $request->input('user_id');
        $post->id = $request->input('post_id');
        $post->body = $request->input('body');
        $post->title = $request->input('title');
        $post->save();
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('/post');
    }
}
