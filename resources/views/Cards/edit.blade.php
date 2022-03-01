@extends('layout')

@section('content')
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">


            <form class="form bg-white p-6 border-1" method="POST" action="{{route('cards.update', ['card' => $card->id])}}">
                @csrf
                @method('PUT')
                <div>
                    <label class="text-sm" for="card-name" >Nome do Cartão</label>
                    <input class="text-lg border-1" type="text" id="card-name" value="{{$card->name}}" name="card-name">
                    @error('card-name')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label class="text-sm" for="desc" >Descrição</label>
                    <input class="text-lg border-1" type="text" id="desc" value="{{$card->desc}}" name="desc">
                    @error('desc')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <label class="text-sm" for="qtd" >Quantidade</label>
                    <input class="text-lg border-1" type="text" id="qtd" value="{{$card->qtd}}" name="qtd">
                    @error('qtd')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <button class="border-1" type="submit">Enviar</button>

                </div>

            </form>

             
            </div>
@endsection