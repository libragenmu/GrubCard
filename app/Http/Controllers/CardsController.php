<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Http\Requests\CardFormRequest;

class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private static function getData(){

        return[
            ['id'=>1,'name'=>'Cartão Corp. Gabriel', 'desc'=>'Cartão pra Companhia X', 'qtd'=>10],
            ['id'=>2,'name'=>'Cartão Corp. Matheus', 'desc'=>'Cartão pra Companhia Y', 'qtd'=>11],
            ['id'=>3,'name'=>'Cartão Corp. Lago', 'desc'=>'Cartão pra Companhia Z', 'qtd'=>12],
            ['id'=>4,'name'=>'Cartão Corp. Golds', 'desc'=>'Cartão pra Companhia W', 'qtd'=>13],




        ];
    }

    public function index()
    {
        //GET
        return view('cards.index', [
            'cards' => Card::all(),
            'userInput'=>'<script>alert("hello")</script>'


        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //GET

        return view('cards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CardFormRequest $request)
    { 
        $data = $request->validated();

        //POST
        $card = new Card();
        $card->name = $data['card-name'];
        $card->desc = $data['desc'];
        $card->qtd = $data['qtd'];

        $card->save();

        return redirect()->route('cards.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //GET
        
       
        return view('cards.show', [

            'card' => $card
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //GET
        return view('cards.edit', [

            'card' => $card
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CardFormRequest $request, Card $card)
    {
        //POST, PUT, PATCH

        $data = $request->validated();
        
        //POST
        $card->name = $data['card-name'];
        $card->desc = $data['desc'];
        $card->qtd = $data['qtd'];

        $card->save();

        return redirect()->route('cards.show', $card->id);    
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
