<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $noticias = Noticia::all();
        
        return view('home',['noticias'=>$noticias]);
    }
    public function create()
    {
        return view('noticias.create');
    }
    public function store(Request $request){
        Noticia::create($request->all());
        return redirect() ->route('home.index');
    }
    public function edit($id)
    {
        $noticias = Noticia::where('id', $id)->first();
        if(!empty($noticias)){
        return view('noticias.edit',['noticias'=>$noticias]);
        }else{
            return redirect()->route('home.index');
        }
    }
    public function update(Request $request, $id)
    {
        
        $data=[
            'name'=> $request->name,
            'number'=> $request->number,
            'obs'=> $request->obs,

        ];
        Noticia::where('id', $id)->update($data);
        return redirect() ->route('home.index');
    }   
    public function destroy($id)
    {
        Noticia::where('id', $id)->delete();
        return redirect() ->route('home.index');
    }
}
