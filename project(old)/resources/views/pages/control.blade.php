@extends('layouts.home')


@section('content')
        <h2>CONTROL (if elseif else)</h2>
        @if (count($users) == 1)
            <h3>One user</h3>
        @elseif (count($users) > 1)
            <h3>Multiple users: {{ count($users) }}</h3>
        @else
            <h3>No user</h3> 
        @endif

        {{-- LOOPS --}}
        <h2>CONTROL (for-foreach)</h2>
        @for ($i = 0; $i < 10; $i++)
            <p>(for)This is {{$i+1}}-ish iteration</p>
        @endfor


        @foreach ($users as $key => $user)
            <p>
                (foreach){{ $key }} - {{ $user['name'] }} {{ $user['lastname'] }}
            </p>
        @endforeach

        
        {{-- UGUALE AL FOREACH MA CON UN CASO DI DEFAULT (@empty) nel caso sia vuoto --}}
        @forelse ($users as $key => $user)
            <p>
                @if ($loop -> first)
                    FIRST
                @endif
                @if ($loop -> last)
                    LAST
                @endif

                (forelse){{ $key }} - {{ $user['name'] }} {{ $user['lastname'] }}
            </p>
        @empty
            {{-- SE L'ARRAY è VUOTO, ALLORA ESEGUIRà QUESTO --}}
            <p>NO USERS!</p> 
        @endforelse


        @php
            $x = 0;
        @endphp

        @while ($x < 10)
            (while) {{ $x + 1 }}
            @php
                $x++;
            @endphp
        @endwhile

        @php
            
        @endphp


@endsection
 