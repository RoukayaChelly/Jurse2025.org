@extends('layouts.main')

@section('content')
<main id="main" class="main-page">
  <section id="speakers-details" class="wow fadeIn">
    <div class="container">
      <div class="section-header">
        <h2>Speaker Details</h2>
        <p></p>
      </div>

      <div class="row">
        <div class="col-md-6">
          @if($speaker->photo && $speaker->photo->getUrl())
            <img src="{{ $speaker->photo->getUrl() }}" alt="{{ $speaker->name }}" class="img-fluid">
          @else
            <p>No photo available</p>
          @endif
        </div>

        <div class="col-md-6">
          <div class="details">
            <h2>{{ $speaker->name }}</h2>
            <div class="social">
              @if($speaker->twitter)
                <a href="{{ $speaker->twitter }}"><i class="fa fa-twitter"></i></a>
              @endif
              @if($speaker->facebook)
                <a href="{{ $speaker->facebook }}"><i class="fa fa-facebook"></i></a>
              @endif
              @if($speaker->linkedin)
                <a href="{{ $speaker->linkedin }}"><i class="fa fa-linkedin"></i></a>
              @endif
            </div>
            <p>{{ $speaker->full_description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
