@extends('layouts.master')

@section('content')
<div class="first-section sub-baner">
@include('partials.main-menu-header')
    <div class="container">
      <div class="row banner-text">
        <div class="col-sm-12 text-center">
          <h1>Company Overview</h1>
          <h3>With Our Remarkable Services & Solution, We Help To Flourish Your Business</h3>
        </div>
      </div>
      
    </div>
</div>
@include('partials.about-company-section')
@include('partials.about-pillar-section')
@stop