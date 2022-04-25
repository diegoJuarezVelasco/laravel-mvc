@extends('layout')
@section('content')
    <div>
        <div class="">
                    <div>
                        <h3>
                            {{ $guitar['name'] }}
                            <ul>
                                <li>
                                    Made by: {{ $guitar['brand'] }}
                                </li>
                                <li>
                                    Year Made: {{ $guitar['year_made'] }}
                                </li>
                            </ul>
                        </h3>
                    </div>

        </div>
@endsection
