@extends('layouts.main')

	@section('content')

		@include('layouts.nav')

		<section id="products" class="custom-padding">
				<div class="container">
					<div class="col-md-12">
							@if ($message)
							<h2 class="pull-right alert alert-success">
								{{$message}}
							</h2>
							@endif
							<h2 class="ser-title">

              				{{$ware->name}}

              				</h2>
							<hr class="botm-line">
					</div>
					<div class="row">
						
						<div class="col-md-4 col-sm-6 col-xs-12">
              				<div class="thumbnail">
								<img src="http://placehold.it/350x222" alt="">
                			</div>
                		</div>
                		<div class="col-md-8 col-sm-6 col-xs-12">

            				<div class="caption">
                            <h3 class='text-center'>{{$ware->brand->name}}</h3>
                            <hr>
                  					<h4 class="pull-right">Cena {{round($ware->price,2)}} PLN</h4>
                  					<h4>{{$ware->name}}</h4>
                  						<hr>
                  						<div>
                  							{{$ware->description}}
                  						</div>
            				</div>
            			</div>
            		</div>
				</div>


  		</section>

	@endsection