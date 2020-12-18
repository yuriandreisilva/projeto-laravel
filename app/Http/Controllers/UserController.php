<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show(User $user)
    {
        $address = $user->address()->first();
        $post = $user->post()->get();

        return view ('infos.user',[
            'user'=>$user,
            'address'=>$address,
            'post'=>$post,
        ]);

        // //address não precisa ser parametrizado por conta do namespace


        // if($address){
        //     echo "<h1>Endereço:</h1>";
        //     echo "<p>Endereço completo: {$address->street}, {$address->number} - {$address->city}/{$address->state}";
        // }

        // // get() para pegar todos
        //
        // //$posts = DB::table('post')->get();

        // if($post){
        //     echo "<h1>Artigos:</h1>";
        //     foreach ($post as $post){
        //     echo "<p>#{$post->id},{$post->title}, {$post->subtitle}, {$post->content}</p>";
        //     }
        // }
        // Confirmar com Gui
        // dd($user);
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

