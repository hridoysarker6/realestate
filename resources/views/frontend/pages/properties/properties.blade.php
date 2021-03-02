@extends('frontend.layouts.app')

@section('title',$title)

@push('styles')
    
@endpush
    
@section('content')
   
    <!-- ##### Breadcumb Area Start ##### -->
    @include('frontend.include.breadcumb')
  
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    @include('frontend.include.search')
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### About Content Wrapper Start ##### -->
  @include('frontend.pages.properties.section.listing')
    <!-- ##### About Content Wrapper End ##### -->

 
@endsection

@push('script')
    
@endpush