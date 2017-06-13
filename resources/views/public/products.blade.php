@extends('layouts.main')

  @section('content')

    @include('layouts.nav')

    <section id="products" class="custom-padding">
        <div class="container">
          @foreach ($brands as $brand)
          <div class="col-md-12">
              @if (isset($message))
              <h2 class="pull-right alert alert-success">
                {{$message}}
              </h2>
              @endif
              
              <h3 class="ser-title">
                  <a href="/asortyment/marki/{{$brand->name}}">
                      {{$brand->name}}
                  </a>
              </h3>
              <hr class="botm-line">
          </div>
          <div class="row brands">
            
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="thumbnail">
                    <img src="http://placehold.it/350x222" alt="">
                </div>
            </div>
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="caption brand-caption">
                    <div class='brand-name'>
                        <h3 class='text-center'><a href="/asortyment/marki/{{$brand->name}}"> {{$brand->name}}</a></h3>
                    </div>
                    <hr>
                    <div class='brand-description'>
                        {{$brand->description}}
                    </div>
                </div>
            </div>
          </div>
              @endforeach
        </div>


      </section>

  @endsection