@extends('frontend.layouts.app')

@section('title',$title)

@push('styles')
    
@endpush
    
@section('content')
   
    <!-- ##### Breadcumb Area Start ##### -->
    @include('frontend.include.breadcumb')
  
    <!-- ##### Breadcumb Area End ##### -->

    @include('frontend.pages.contact.section.form')
@endsection

@push('script')
      <!-- Google Maps -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
      <script src="asset/frontend/js/map-active.js"></script>
@endpush