@extends('layouts.home')
{{-- TODO TODAY
REPO: laravel-symbol-route (aggiungere progetto alla repo di ieri)
GOAL: basandosi sull'array pagamenti in allegato, creare 2 rotte:
- pagamenti: in cui verranno listati tutti i pagamenti stampati con due colori diversi un colore per riga (come visto a lezione verde/rosso)
- pagamentipending: in cui verranno listati con la stessa grafica precedente i soli pagamenti pending
NOTE: come sempre generare progetto nuovo con scafolding base (include/yield/extends + css + js); basta lanciare la create-project nella stessa cartella della repo di ieri --}}

@section('pagamenti')

    <div class="content">
        <ul>
            @foreach ($pagamenti as $pagamento)

                {{-- @if ($loop -> even)
                    <li class="green">
                @else
                    <li class="red">
                @endif --}}

                @php
                    if ($loop -> even) {
                        $color = "red";
                    } else {
                        $color = "green";
                    }
                @endphp

                <li class="{{$color}}">
                    {{$pagamento['price']}}
                </li>


            @endforeach
        </ul>
        
    </div>

@endsection