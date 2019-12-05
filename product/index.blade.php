@extends('pub_theme::layouts.app')
@section('content')
<!-- CONTENT -->
     <div class="main-container">
        <section class="text-center height-50 imagebg unpad--top">
            <div class="stripes"></div>
            <div class="container pos-vertical-center">
                <div class="row" style="margin-top: 82px;">
                    <div class="col-sm-12">
                        <h6 class="type--uppercase no-margins">SIA S.p.A.</h6>
                        <h1>Panoramica prodotti</h1>
                        <p class="lead">
                            I software assicurativi forniti da SIA per compagnie, intermediari, agenzie e broker
                            <br class="hidden-xs hidden-sm" /> sono strumenti di lavoro solidi ed efficienti.
                        </p>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        @foreach(xotModel('product_cat')->get() as $cat)
        <section class="text-center" id="compagnie">
		   <div class="container">
			   <div class="row">
				   <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					   <h2>{{ $cat->title }}</h2>
					   <p class="lead">
						   {{ $cat->subtitle }}
					   </p>
				   </div>
			   </div>
			   <!--end of row-->
		   </div> 
		   <!--end of container-->
		</section>
		<section>
		   <div class="container">
			   <div class="row">
		
		@foreach($cat->products as $prod)
					<div class="col-sm-4">
					   <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
						   <img src="http://sia_laravel.local/images/frontend_images/loghi/software-assicurazione-compagnie-sia-jmil.png" alt="logo-jmil">
						   <h4>{{ $prod->title }}</h4>
						   <p>{{ $prod->subtitle }}</p>
						   <a class="btn btn--primary type--uppercase" <a href="{{ $prod->url }}">
							   <span class="btn__text"> DETTAGLI » </span>
						   </a>
					   </div>
					   <!--end feature-->
					</div>
		@endforeach
			</div>
		</div>
        @endforeach
    </div>
@endsection