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

              {{$header}}

              @endunless

              </h2>
							<hr class="botm-line">
					</div>
					<div class="row">
						@foreach ($wares as $ware)
						<div class="col-md-4 col-sm-6 col-xs-12">
              				<div class="thumbnail">
                        <a href="/asortyment/produkty/{{$ware->name}}">
                				  <img src="http://placehold.it/350x222" alt="">
                        </a>
            					<div class="caption">
                            <h3 class='text-center'>{{$ware->brand->name}}</h3>
                            <hr>
                  					<h4 class="pull-right">{{round($ware->price,2)}} PLN</h4>
                  					<h4><a href="/asortyment/produkty/{{$ware->name}}">{{$ware->name}}</a></h4>
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