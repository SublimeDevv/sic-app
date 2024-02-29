<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
        //Tercera forma de proteger rutas
    {
        $this->middleware(['auth']);
    }

    public function index(User $user)
    {

        $posts = $user->posts()->where('user_id', $user->id)->get();


        return view('dashboard', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
        ]);

       /* Post::create([
            'title' => $request->titulo,
            'description' => $request->descripcion,
            'image' => $request->image,
            'user_id' => auth()->user()->id,
        ]);*/

        //Otra forma

        $request->user()->posts()->create([
            'title' => $request->titulo,
            'description' => $request->descripcion,
            'image' => $request->image,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('posts.index', auth()->user()->name);
    }
}
