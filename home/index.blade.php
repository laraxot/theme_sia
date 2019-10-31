<!DOCTYPE html>
<html lang="it" prefix="og: http://ogp.me/ns#">

   @include('pub_theme::layouts.partials.htmlheader')

<body>

    <!-- HEAD -->
    @include('pub_theme::layouts.partials.headernav')
    <!-- CONTENT -->
    <div class="main-container home">
        <section class="text-center height-80 imagebg unpad--top">
            <div class="stripes"></div>
            <div class="container pos-vertical-center">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="typed-headline">
                            <h6 class="type--uppercase no-margins">SIA S.p.A.</h6>
                            <span class="h1 inline-block">Soluzioni software per </span>
                            <em><span class="h1 inline-block typed-text typed-text--cursor m-l-sm" data-typed-strings="compagnie,agenzie,broker,agenti,network"></span></em>
                        </div>
                        <p class="lead">
                            Soluzioni modulari per gestire in modo integrato
                            <br class="hidden-xs hidden-sm" /> il business dell'impresa assicurativa.
                        </p>
                        <a class="btn btn--primary type--uppercase" href="panoramica-prodotti">
                            <span class="btn__text">
                                SCOPRI I NOSTRI PRODOTTI »
                            </span>
                        </a>
                        <span class="block type--fine-print">oppure
                            <a href="{{ url('contatti') }}">contattaci subito ↗</a>
                        </span>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="text-center cta cta-4 space--xxs border--bottom ">

              <?php 
              	//include("include/last-news.php");
              ?>
              @include('pub_theme::layouts.partials.last-news')
        </section>
        <section class="text-center">
            <div class="tabs-container" data-content-align="left">
                <ul class="tabs tabs--spaced">
                    <li class="active">
                        <div class="tab__title text-center">
                            <i class="icon icon--sm block icon-Chrysler-Building"></i>
                            <span class="h5">Compagnie</span>
                        </div>
                        <div class="tab__content">
                            <div class="container switchable switchable--switch">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img alt="Image" src="{{ Theme::asset('pub_theme::images/compagnie.png')}}" />
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mt--1">
                                            <h2>Una ricca proposta di prodotti e servizi all-in-one</h2>
                                            <p class="lead">
                                                SIA S.p.A. ha sviluppato un approfondito know-how nella filiera produttiva del mondo assicurativo operando a 360 gradi con installazioni in Italia, Europa e centro America.
                                            </p>
                                            <hr class="short" />
                                            <a class="btn btn--primary type--uppercase" href="{{ url('panoramica-prodotti#compagnie') }}">
                                                <span class="btn__text">
                                                    PRODOTTI PER COMPAGNIE »
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of container-->
                        </div>
                    </li>
                    <li>
                        <div class="tab__title text-center">
                            <i class="icon icon--sm block icon-Management"></i>
                            <span class="h5">Agenzie</span>
                        </div>
                        <div class="tab__content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img alt="Image" src="{{ Theme::asset('pub_theme::images/agenzie.png') }}" />
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mt--1">
                                            <h2>Per il potenziamento del business di agenzia</h2>
                                            <p class="lead">
                                              Soluzioni gestionali, servizi consulenziali e di outsourcing per agenzie di assicurazioni mono e plurimandatarie, subagenti e produttori, intermediari con network.
                                            </p>
                                            <hr class="short" />
                                            <a class="btn btn--primary type--uppercase" href="{{ url('panoramica-prodotti#intermediari') }}">
                                                <span class="btn__text">
                                                    PRODOTTI PER AGENZIE »
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of container-->
                        </div>
                    </li>
                    <li>
                        <div class="tab__title text-center">
                            <i class="icon icon--sm block icon-Business-Man"></i>
                            <span class="h5">Broker</span>
                        </div>
                        <div class="tab__content">
                            <div class="container switchable switchable--switch">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img alt="Image" src="{{ Theme::asset('pub_theme::images/broker.png') }}" />
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mt--1">
                                            <h2>Soluzioni disegnate per la gestione del broker</h2>
                                            <p class="lead">
                                                Software gestionali e servizi all'avanguardia per le società di brokeraggio assicurativo e broker wholesale.
                                            </p>
                                            <hr class="short" />
                                            <a class="btn btn--primary type--uppercase" href="{{ url('panoramica-prodotti.php#intermediari') }}">
                                                <span class="btn__text">
                                                    PRODOTTI PER BROKER »
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of container-->
                        </div>
                    </li>
                    <li>
                        <div class="tab__title text-center">
                            <i class="icon icon--sm block icon-Cube-Molecule2"></i>
                            <span class="h5">Network</span>
                        </div>
                        <div class="tab__content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img alt="Image" src="{{ Theme::asset('pub_theme::images/network.png') }}" />
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mt--1">
                                            <h2>Un unico hub per la cooperazione fra agenti</h2>
                                            <p class="lead">
                                              Quotazione, gestione delle trattative, sistema di recruitment, agenzie di sottoscrizione, collaborazione tra intermediari.
                                            </p>
                                            <hr class="short" />
                                            <a class="btn btn--primary type--uppercase" href="panoramica-prodotti.php#altri-prodotti">
                                                <span class="btn__text">
                                                    PRODOTTI PER NETWORK »
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of container-->
                        </div>
                    </li>
                </ul>
            </div>
            <!--end of tabs container-->
        </section>
        <section class="features-small-14 text-center space--xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="text-block">
                                    <i class="icon color--dark icon-Business-Mens"></i>
                                    <h4>12.000 intermediari</h4>
                                </div>
                                <!--end feature-->
                            </div>
                            <div class="col-sm-4">
                                <div class="text-block">
                                    <i class="icon color--dark icon-Affiliate"></i>
                                    <h4>19.000 utenti</h4>
                                </div>
                                <!--end feature-->
                            </div>
                            <div class="col-sm-4">
                                <div class="text-block">
                                    <i class="icon color--dark icon-Arrow-Inside"></i>
                                    <h4>26.000 accessi</h4>
                                </div>
                                <!--end feature-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section>
            <div class="container">
                <div class="row fix">
                    <div class="col-sm-4">
                        <div class="feature feature-2 boxed boxed--border">
                            <i class="icon icon-Medal-2 color--primary"></i>
                            <div class="feature__body">
                                <h5>Esperienza</h5>
                                <p>
                                    Comprovata conoscenza del settore SIA si impone come leader nel comparto agenzie.
                                </p>
                            </div>
                        </div>
                        <!--end feature-->
                    </div>
                    <div class="col-sm-4">
                        <div class="feature feature-2 boxed boxed--border">
                            <i class="icon icon-Clock-Forward color--primary"></i>
                            <div class="feature__body">
                                <h5>Velocità di esecuzione</h5>
                                <p>
                                    Con oltre 120 professionisti d'esperienza pluriennale offre soluzioni in tempi rapidi.
                                </p>
                            </div>
                        </div>
                        <!--end feature-->
                    </div>
                    <div class="col-sm-4">
                        <div class="feature feature-2 boxed boxed--border">
                            <i class="icon icon-Duplicate-Window color--primary"></i>
                            <div class="feature__body">
                                <h5>Soluzioni tailor-made</h5>
                                <p>
                                    Ogni cliente può contare su un team dedito a soluzioni specifiche per ogni esigenza.
                                </p>
                            </div>
                        </div>
                        <!--end feature-->
                    </div>
                    <div class="col-sm-4">
                        <div class="feature feature-2 boxed boxed--border">
                            <i class="icon icon-Coding color--primary"></i>
                            <div class="feature__body">
                                <h5>Innovazione</h5>
                                <p>
                                    SIA annovera un comparto ricerca & sviluppo florido ed in costante aggiornamento.
                                </p>
                            </div>
                        </div>
                        <!--end feature-->
                    </div>
                    <div class="col-sm-4">
                        <div class="feature feature-2 boxed boxed--border">
                            <i class="icon icon-Cloud-Secure color--primary"></i>
                            <div class="feature__body">
                                <h5>Sicurezza</h5>
                                <p>
                                    Il nostro Data Center è solido e garantisce la sicurezza dei dati a 1.600+ clienti.
                                </p>
                            </div>
                        </div>
                        <!--end feature-->
                    </div>
                    <div class="col-sm-4">
                        <div class="feature feature-2 boxed boxed--border">
                            <i class="icon icon-Life-Jacket color--primary"></i>
                            <div class="feature__body">
                                <h5>Assistenza</h5>
                                <p>
                                    Un servizio di assistenza eccelso in grado di interfacciarsi con i clienti in ogni momento.
                                </p>
                            </div>
                        </div>
                        <!--end feature-->
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="testimonials-1 space--xs ">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="cta cta-1 cta--horizontal boxed boxed--border text-center-xs">
							<div class="col-md-7 col-md-offset-1">
								<p class="lead">
									Scelti da oltre 1.600 clienti in Italia e nel mondo.
								</p>
							</div>
							<div class="col-md-4 text-center">
								<a class="btn btn--primary type--uppercase" href="{{ url('panoramica-prodotti') }}">
									<span class="btn__text">
										SCOPRI I PRODOTTI »
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!--end of row-->
			</div>
            <!--end of container-->
        </section>
        <section class="text-center space--md" style="padding-top: 11.14285714em;">
            <div class="stripes--lightgrey"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-6">
                        <div class="cta">
                            <h2>Vuoi la consulenza di un esperto su un nostro prodotto o servizio?</h2>
                            <p class="lead">
                                Offriamo soluzioni tailor-made e assistenza continua per rispondere alle esigenze di ogni cliente.
                            </p>
                            <a class="btn btn--primary type--uppercase" href="{{ url('contatti') }}">
                                <span class="btn__text">
                                    Contatta il team commerciale
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
    </div>

    <!-- FOOTER -->

    @include('pub_theme::layouts.partials.footer')
    @include('pub_theme::layouts.partials.scripts')
    
</body>

</html>
