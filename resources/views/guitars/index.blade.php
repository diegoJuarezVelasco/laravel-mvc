@extends('layout')
@section('content')
    <div>
        <div class="">
            @if(count($guitars) > 0)
                @foreach ($guitars as $guitar)
                    <div>
                        <h3>
                            <a href="{{route('guitars.show', ['guitar' => $guitar['id']])}}">{{$guitar['name']}}</a>
                        </h3>
                            <ul>
                                <li>
                                    Made by: {{ $guitar['brand'] }}
                                </li>
                                <li>
                                    <a href="{{route('guitars.edit', ['guitar' => $guitar['id']])}}">Edit Guitar</a>
                                </li>
                            </ul>
                    </div>
                @endforeach
            @else
                    <h2>There are no guitars to display</h2>
            @endif
        </div>
            <div>
                <a href="{{route('guitars.create')}}">Add new guitar</a>
            </div>
    @endsection
