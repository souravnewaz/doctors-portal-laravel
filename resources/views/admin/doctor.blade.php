@extends('layouts.admin.layout')
@section('content')

<!-- component -->
<div class=" flex flex-row flex-wrap p-3">
    <div class="">
  <!-- Profile Card -->
  <div class="rounded-lg shadow-lg bg-gray-600 w-full flex flex-row flex-wrap p-3 antialiased">
    <div class="md:w-1/3 w-full">
      <img class="rounded-lg shadow-lg antialiased" src="/images/doctors/1.jpg">  
    </div>
    <div class="md:w-2/3 w-full px-3 text-white">
      <p class="  text-3xl ">Doctor Name</p>
      <p class="">Hematologist, Bangladesh Hospital</p>
      <p class="">doctor@email.com</p>
      <p class="">0123456789</p>

      
    </div>
  </div>
  <!-- End Profile Card -->
    </div>
  </div>


@endsection