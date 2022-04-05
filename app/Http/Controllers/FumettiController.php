<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class FumettiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comic.index', compact('comics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'thumb' => 'required|url',
                'title' => 'required|min:5',
                'description' => 'required',
                'price' => 'required|numeric|min:0',
                'series' => 'required|min:5',
                //'sale_date' => '',
                'type' => 'required|min:5'
            
            ]
        );

        
        
        $data = $request->all();

        
        $comic = new Comic();
        /*$comic->thumb = $data['thumb'];
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];*/

        $comic->fill($data);

        $comic->save();

        return redirect()->route('comic.index', ['comic' => $comic->id])->with('status', 'comic added');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic) //dependence injection
    {
        //$comic = Comic::find($id);

        //if ($comic) {

            return view('comic.show', compact('comic'));

       // } else {
       //     abort(404);
       // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //questa funzione è molto simile allo "show" -- in questo caso non usiamo dependence injection
    {
        $comic = Comic::find($id);

        if ($comic) {
            return view('comic.edit', compact('comic'));
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        
        $comic->thumb = $data['thumb'];
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        $comic->save();

        return redirect()->route('comic.show', ['comic' => $comic->id])->with('status', 'comic updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comic.index')->with('status', 'comic deleted');

    }
}
