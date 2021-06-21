@extends('layouts.admin.layout')
@section('content')

<!-- component -->
<div class=" flex flex-row flex-wrap p-3">
    <div class="">
  <!-- Profile Card -->
  <div class="rounded-lg shadow-lg bg-gray-600 w-full flex flex-row flex-wrap p-3 antialiased">
    <div class="md:w-1/3 w-full">
      <img class="rounded-lg shadow-lg h-48 w-96 antialiased" src="/images/users/1.jpg">  
    </div>
    <div class="md:w-2/3 w-full px-3 text-white">
      <p class="  text-3xl ">User Name</p>
      <p class="">user@email.com</p>
      <p class="">0123456789</p>
      <p>Blood Group</p>
      <p>Address</p>

      
    </div>
  </div>
  <!-- End Profile Card -->
    </div>
  </div>


@endsection