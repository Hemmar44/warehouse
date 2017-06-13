@extends('layouts.main')

	@section('content')

		@include('layouts.nav')

		<section id="products" class="custom-padding">
				<div class="container">
					<div class="col-md-12">
							@if (isset($message))
							<h2 class="pull-right alert alert-success">
								{{$message}}
							</h2>
							@endif
							<h2 class="ser-title">

              				{{$brand->name}}

              				</h2>
							<hr class="botm-line">
					</div>
					<div class="row brands">
						
						<div class="col-md-4 col-sm-6 col-xs-12">
              				<div class="thumbnail">
								<img src="http://placehold.it/350x222" alt="">
                			</div>
                		</div>
                		<div class="col-md-8 col-sm-6 col-xs-12">

            				<div class="caption">
                            <h3 class='text-center'></h3>
                            <hr>
                  					
                  				<h4>{{$brand->name}}</h4>
                  			<hr>
                  				<div>
                  					{{$brand->description}}
                  				</div>
            				</div>
            			</div>
            		</div>
            		<h3>Produkty tej marki dostępne w ofercie</h3>
            		<hr>

            		<div class="row text-center">
            				
        				@foreach ($brand->wares as $product)

        				<div class="col-md-2 col-sm-2 col-xs-3">
        					<a href='/asortyment/produkty/{{$product->name}}'>{{$product->name}}</a>
        				</div>

        				@endforeach
        			</div>
            		
				</div>


  		</section>

	@endsection