@extends('layout')

@section('content')
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

      

                <div>
                    <h3>
                        {{$card['name']}}
                       
                    </h3>
                    <ul>
                            <li>
                                Descrição: {{$card['desc']}}
                            </li>
                            <li>
                                Quantidade: {{$card['qtd']}}
                            </li>
                        </ul>
                </div>

             
            </div>
@endsection