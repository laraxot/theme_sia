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

        <section class="text-center" id="compagnie">
		   <div class="container">
			   <div class="row">
				   <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					   <h2>Per compagnie</h2>
					   <p class="lead">
						   L'offerta di SIA per il comparto compagnie si articola nella suite JMIL e JMIL Business Intelligence, utili alla gestione e all'analisi dei dati in forza alle compagnie.
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
					<div class="col-sm-4">
					   <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
						   <img src="http://sia_laravel.local/images/frontend_images/loghi/software-assicurazione-compagnie-sia-jmil.png" alt="logo-jmil">
						   <h4>JMIL</h4>
						   <p>
							  Suite d'avanguardia per la gestione a 360 gradi dell'impresa assicuratrice.
						   </p>
						   <a class="btn btn--primary type--uppercase" <a href="http://127.0.0.1:8080/prodotti/compagnie/jmil">
							   <span class="btn__text">
								   DETTAGLI »
							   </span>
						   </a>
					   </div>
					   <!--end feature-->
					</div>
					<div class="col-sm-4">
					   <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
						   <img src="http://sia_laravel.local/images/frontend_images/loghi/software-assicurazione-compagnie-sia-bi.png" alt="logo-jmil-bi">
						   <h4>Business Intelligence</h4>
						   <p>
							  Strumento di visualizzazione grafico per l’analisi di dati complessi di business con indicatori di performance avanzati.
						   </p>
						   <a class="btn btn--primary type--uppercase" <a href="http://127.0.0.1:8080/prodotti/compagnie/business-intelligence">
							   <span class="btn__text">
								   DETTAGLI »
							   </span>
						   </a>
					   </div>
					   <!--end feature-->
					</div>
					<div class="col-sm-4">
					   <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
						   <img src="http://sia_laravel.local/images/frontend_images/loghi/software-assicurazione-compagnie-sia-ipm.png" alt="logo-jmil">
						   <h4>IPM</h4>
						   <p>
							  Pratico Workbench per la generazione di qualsiasi prodotto assicurativo individuale e collettivo.
						   </p>
						   <a class="btn btn--primary type--uppercase" <a href="http://127.0.0.1:8080/prodotti/compagnie/ipm">
							   <span class="btn__text">
								   DETTAGLI »
							   </span>
						   </a>
					   </div>
					   <!--end feature-->
				   </div>
			   </div>
			   <!--end of row-->
		   </div>
		   <!--end of container-->
	   </section>
	   <section class="text-center" id="intermediari">
		   <div class="container">
			   <div class="row">
				   <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					   <h2>Per intermediari</h2>
					   <p class="lead">
						   Software gestionale assicurativo leader indiscusso del mercato per offerta, numero di installazioni e completezza di funzioni.
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
				   <div class="col-sm-4">
					   <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
						   <img src="http://sia_laravel.local/images/frontend_images/loghi/software-assicurazione-intermediari-sia-omnia-web-8.png" alt="logo-omnia-web-8">
						   <h4>Omnia Web8</h4>
						   <p>
							   Versione cloud che deriva da alcuni dei software di maggior successo di SIA, quali Omnia 6 e Omnia 7, rivisitati interamente.
						   </p>
						   <a class="btn btn--primary type--uppercase" <a href="http://127.0.0.1:8080/prodotti/intermediari/omnia-web-8">
							   <span class="btn__text">
								   DETTAGLI »
							   </span>
						   </a>
					   </div>
					   <!--end feature-->
				   </div>
				   <div class="col-sm-4">
					   <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
						   <img src="http://sia_laravel.local/images/frontend_images/loghi/software-assicurazione-intermediari-sia-omb.png" alt="logo-omb">
						   <h4>OMB</h4>
						   <p>
							   La soluzione applicativa per supportare i processi gestionali e le principali attività di una società di brokeraggio assicurativo.
						   </p>
						   <a class="btn btn--primary type--uppercase" <a href="http://127.0.0.1:8080/prodotti/intermediari/omb">
							   <span class="btn__text">
								   DETTAGLI »
							   </span>
						   </a>
					   </div>
					   <!--end feature-->
				   </div>
				   <div class="col-sm-4">
					   <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
						   <img src="http://sia_laravel.local/images/frontend_images/loghi/software-assicurazione-intermediari-omnia-x.png" akt="logo-omnnia x">
						   <h4>Omnia X</h4>
						   <p>
							   La soluzione mobile formato web app per intermediari, integrata ad Omnia Web 8 e con funzionalità di Home Insurance.
						   </p>
						   <a class="btn btn--primary type--uppercase" <a href="http://127.0.0.1:8080/prodotti/intermediari/omnia-x">
							   <span class="btn__text">
								   DETTAGLI »
							   </span>
						   </a>
					   </div>
					   <!--end feature-->
				   </div>
			   </div>
			   <!--end of row-->
		   </div>
		   <!--end of container-->
	   </section>
	   <section class="text-center" id="altri-prodotti">
		   <div class="container">
			   <div class="row">
				   <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
					   <h2>Altri prodotti</h2>
					   <p class="lead">
						   Software che avvalorano l'offerta di SIA provenienti dal comparto ricerca & sviluppo sempre in costante aggiornamento.
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
					<div class="col-sm-4">
					   <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
						   <img src="http://sia_laravel.local/images/frontend_images/loghi/software-assicurazione-sia-oma-coge.png" alt="logo-oma-coge">
						   <h4>OMA co.ge.</h4>
						   <p>
							   La soluzione di contabilità generale ricca di funzioni per il controllo del business che integra la gestione portafoglio.
						   </p>
						   <a class="btn btn--primary type--uppercase" <a href="http://127.0.0.1:8080/prodotti/altro/oma-coge">
							   <span class="btn__text">
								   DETTAGLI »
							   </span>
						   </a>
					   </div>
					   <!--end feature-->
				   </div>
				   <div class="col-sm-4">
					   <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
							<span class="label bg--primary">COMPAGNIE</span>
							<img src="http://sia_laravel.local/images/frontend_images/loghi/software-assicurazione-sia-terza-via.png" alt="logo-terza-via">
							<h4>Terza Via</h4>
							<p>
								Terza Via è una forma di cooperazione tra piattaforme nell’ambito dei processi assicurativi.
							</p>
							<a class="btn btn--primary type--uppercase" <a href="http://127.0.0.1:8080/prodotti/altro/terza-via">
								<span class="btn__text">
									DETTAGLI »
								</span>
							</a>
					   </div>
					   <!--end feature-->
				   </div>
				   <div class="col-sm-4">
					   <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
							<span class="label bg--primary">COMPAGNIE</span>
							<img src="http://sia_laravel.local/images/frontend_images/loghi/software-assicurazione-sia-icn.png" alt="logo-icn">
							<h4>ICN</h4>
							<p>
								Innovativa piattaforma on line, semplice e intuitiva, per la gestione delle trattative di vendita e delle collaborazioni.
							</p>
							<a class="btn btn--primary type--uppercase" <a href="http://127.0.0.1:8080/prodotti/altro/icn-intermediari-con-network">
								<span class="btn__text">
									DETTAGLI »
								</span>
							</a>
					   </div>
					   <!--end feature-->
				   </div>
			   </div>
			   <!--end of row-->
		   </div>
		   <!--end of container-->
	   </section>
    </div>
@endsection