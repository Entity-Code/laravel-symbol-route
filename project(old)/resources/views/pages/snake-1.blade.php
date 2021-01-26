@extends('layouts.home')


@section('snake-1')
        
    @foreach ($users as $key => $user)
            <h3>USER {{$loop->iteration}} ({{$loop->iteration}}/{{$loop->count}})</h3>

        {{-- modo 1 --}}
        {{-- @if ($loop -> even)         
            <li class="red">
        @else
            <li class="green">
        @endif --}}
        
        {{-- modo 2 --}}
        @php
            if ($loop -> even) {
                $classe = 'red';
            } else {
                $classe = 'green';
            }
        @endphp

        <ul class="{{ $classe }}">              
            <li>
                <span>id:</span>
                {{ $user['id'] }}
            </li>               
            <li>
                <span>lastname:</span>
                {{ $user['lastname'] }}
            </li>              
            <li>
                <span>date of birth:</span>
                {{ $user['date_of_birth'] }}
            </li>               
            <li>
                <span>document number:</span>
                {{ $user['document_number'] }}
            </li>               
            <li>
                <span>created at:</span>
                {{ $user['created_at'] }}
            </li>          
            <li>
                <span>updated at:</span>
                {{ $user['updated_at'] }}
            </li>
        </ul>
        

        
              
    @endforeach

@endsection
 