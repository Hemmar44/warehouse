@extends('layouts.main')

	@section('content')

		@include('layouts.nav')

		<section id="products" class="custom-padding">
				<div class="container">
					<div class="col-md-12">
							<h2 class="ser-title">

              @unless (count($wares))

              Na razie nic tu nie ma, sprawdź później.

              @else

              Sprawdź co dla ciebie przygotowaliśmy:

              @endunless

              </h2>
							<hr class="botm-line">
					</div>
					<div class="row">
						@foreach ($wares as $ware)
						<div class="col-md-4 col-sm-6 col-xs-12">
              				<div class="thumbnail">
                				<img src="http://placehold.it/350x222" alt="">
            					<div class="caption">
                  					<h4 class="pull-right">PLN {{$ware->price}}</h4>
                  					<h4><a href="#">{{$ware->name}}</a></h4>
                  						<hr>
                  						<div class='product-description'>
                  							{{$ware->description}}
                  						</div>
            					</div>
            				</div>
              			</div>
              			@endforeach
              			
  					</div>

  					{{ $wares->links() }}

  				</div>


  		</section>

	@endsection