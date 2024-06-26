<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use PHPUnit\Framework\Attributes\PostCondition;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Comics::all());
        return view('comics.index', ['comics' => Comic::orderByDesc('id')->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        //dd($request->all());
        //$data = $request->all();
        //validare i dati
        $val_data = $request->validated();



        //dd($val_data);


        Comic::create($val_data);


        // pattern post->redirect->GET    PER NON CONSENTIRE ALL'UTENTE DI REINVIARE IL FORM PIù VOLTE!
        return to_route('comics.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //dd('comics');
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //dd($request->all());
        $comic->update($request->all());

        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }
}
