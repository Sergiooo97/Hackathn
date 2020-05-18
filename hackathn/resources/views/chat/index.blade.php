@extends('layouts.app')
@section('title','Chat')
@section('content')


<div style="padding:1em;" class="content d-flex flex-row justify-content-center alig-items-center">
  <div style="width: 80%;" class="card ">
    <div class="card-header">
    <h4 class="card-title ">Chat Grupal</h4>
    </div>
<!----------------------------inicio card body------------------------------------------>
    <div class="card-body scroll-chat-list ">
      @livewire("chat-list")

     <!-------------------------fin card body------------------------------------------>
  </div>
  <div class="card-footer ">
    @livewire("chat-form")

    <!-------------------------fin card body------------------------------------------>
</div>

</div>

    </div>
      <!----Mensaje alerto --------->
      <div  class="alert alert-success collapse" role="alert">
        <h4 class="alert-heading">Well done!</h4>         
      </div>

@endsection
    
