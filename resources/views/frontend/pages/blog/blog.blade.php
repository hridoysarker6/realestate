@extends('frontend.layouts.app')

@section('title',$title)

@push('styles')
    
@endpush
    
@section('content')
   
    <!-- ##### Breadcumb Area Start ##### -->
    @include('frontend.include.breadcumb')
  
    <!-- ##### Breadcumb Area End ##### -->

    @include('frontend.pages.blog.section.post')
@endsection

@push('script')
    
@endpush