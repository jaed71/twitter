@extends('layout.layout')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
               @include('shared.left-sidebar')
            </div>
            <div class="col-6">

                @include('shared.success-message')
              
               

                    <div class="mt-3">

                        @include('shared.tweet-card')

                    </div>
             

                

            </div>
            <div class="col-3">
                @include('shared.search-bar')
                @include('shared.follow-box')
                
            </div>
        </div>
    </div>
@endsection
