@extends('layout')
@section('content')
    <div class="form-container">
        <form method="POST" action="{{ route('guitars.store') }}">
            @csrf
            <div class="field">
                <label for="guitar-name" class="label">Guitar name</label>
                <input type="text" class="input" id="guitar-name" name="guitar-name" value="{{old('guitar-name')}}">
                @error('guitar-name')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="field">
                <label for="brand" class="label">Brand</label>
                <input type="text" class="input" id="brand" name="brand" value="{{old('brand')}}">
                @error('brand')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="field">
                <label class="label" for="year">year made</label>
                <input type="text" class="input" id="year" , name="year" value="{{old('year')}}">
                @error('year')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="button-submit">Submit</button>
        </form>
    </div>
@endsection
