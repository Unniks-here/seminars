@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="text-center" style="text-align: justify;   padding: 1rem; color: #66d214; border-radius:5px;">
            {{-- <ul class="">
                <li><a href="/submission">Abstract Submission</a></li> 
            </ul> --}}
            <a class="btn btn-warning readmore" href="{{asset('/docs/flyer_icee2k19.pdf')}}"> Flyer </a>
        </div>
    </div>
@endsection