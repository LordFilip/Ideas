@extends('layout.layout')

@section('title', 'Terms')

@section('content')
<div class="row">
     <div class="col-3">
         @include('shared.left-sidebar')
     </div>
     <div class="col-6">
<h1>Terms</h1>
<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id nihil porro quae pariatur enim omnis incidunt animi.
     Earum fugit dicta cupiditate temporibus quibusdam minus saepe recusandae officiis? Modi, itaque nemo!</div> </div>
     <div class="col-3">
              
          @include('shared.search-bar')
          @include('shared.follow-box')
        
      </div>
  </div>
@endsection
