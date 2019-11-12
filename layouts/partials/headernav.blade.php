<!-- HEAD -->
<div class="nav-container ">
	<div class="bar bar--sm visible-xs">
		<div class="container">
			<div class="row">
				<div class="col-xs-3 col-sm-2">
					<a href="/">
						<img class="logo logo-dark" alt="logo" src="{{ Theme::asset('pub_theme::images/logo-dark.png') }}"/>
						<img class="logo logo-light" alt="logo" src="{{ Theme::asset('pub_theme::images/logo-light.png') }}"/>
					</a>
				</div>
				<div class="col-xs-9 col-sm-10 text-right">
					<a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm">
						<i class="icon icon--sm stack-interface stack-menu"></i>
					</a>
				</div>
			</div>
			<!--end of row-->
		</div>
		<!--end of container-->
	</div>
	<!--end bar-->
	<nav id="menu2" class="bar bar-2 hidden-xs bar--transparent bar--absolute">
		<div class="container">
			<div class="row">
				<div class="col-md-2 text-center text-left-sm hidden-xs col-md-push-5">
					<div class="bar__module">
							<a href="/">
							<img class="logo logo-dark" alt="logo" src="{{ Theme::asset('pub_theme::images/logo-dark.png') }}"/>
							<img class="logo logo-light" alt="logo" src="{{ Theme::asset('pub_theme::images/logo-light.png') }}"/>
						</a>
					</div>
					<!--end module-->
				</div>
				<div class="col-md-5 col-md-pull-2">
					<div class="bar__module">
						<ul class="menu-horizontal text-left">
							<li class="dropdown">
							<a href="/">Home</a>
							</li>
							<li class="dropdown">
  							<a href="{{ url('chi-siamo') }}">Chi siamo</a>
							</li>
							<li class="dropdown">
								<span class="dropdown__trigger">Prodotti</span>
								<div class="dropdown__container">
									<div class="container">
										<div class="row">
											<div class="dropdown__content dropdown__content--lg col-md-8">
												<div class="pos-absolute col-md-5 imagebg hidden-sm hidden-xs" data-overlay="4">
													<div class="background-image-holder">
														<img alt="background" src="{{ Theme::asset('pub_theme::images/blog-6.jpg') }}" />
													</div>
													<div class="container pos-vertical-center">
														<div class="row">
															<div class="col-md-10 col-md-offset-1">
																<img alt="Logo" src="{{ Theme::asset('pub_theme::images/logo-light.png') }}"class="image--xxs" />
																<span class="h3 color--white">Le nostre soluzioni software.</span>
																<a href="{{ url('panoramica-prodotti') }}" class="btn btn--primary type--uppercase">
																	<span class="btn__text">
																		VEDI LA PANORAMICA »
																	</span>
																</a>
															</div>
														</div>
														<!--end of row-->
													</div>
												</div>
												<div class="col-md-6 col-md-offset-6">
													<div class="row">
														<div class="col-sm-6">
															<h5>Per intermediari</h5>
															<ul class="menu-vertical">
																<li>
																	<a href="{{ url('prodotti/intermediari/omnia-web-8') }}">
																		Omnia Web 8
																	</a>
																</li>
																<li>
																	<a href="{{ url('prodotti/intermediari/omb') }}">
																		OMB
																	</a>
																</li>
																<li>
																	<a href="{{ url('prodotti/intermediari/omnia-x') }}">
																		Omnia X
																	</a>
																</li>
															</ul>
														</div>
														<div class="col-sm-6">
															<h5>Per compagnie</h5>
																<ul class="menu-vertical">
																	<li>
																		<a href="{{ url('prodotti/compagnie/jmil') }}">
																			JMIL
																		</a>
																	</li>
																	<li>
																		<a href="{{ url('prodotti/compagnie/business-intelligence') }}">
																		 Business Intelligence
																		</a>
																	</li>
																	<li>
																	 <a href="{{ url('prodotti/compagnie/ipm') }}">
																		 IPM
																	</a>
																</li>
															</ul>
													</div>
													</div>
													<!--end of row-->
													<div class="row m-t-md">
														<div class="col-sm-6">
															<h5>Altri prodotti</h5>
															<ul class="menu-vertical">
																<li>
																	<a href="{{ url('prodotti/altro/terza-via') }}">
																		Terza Via
																	</a>
																</li>
																<li>
																	<a href="{{ url('prodotti/altro/oma-coge') }}">
																		OMA co.ge.
																	</a>
																</li>
																<li>
																	<a href="{{ url('prodotti/altro/icn-intermediari-con-network') }}">
																		ICN
																	</a>
																</li>
															</ul>
														</div>
													</div>
													<!--end of row-->
												</div>
											</div>
											<!--end dropdown content-->
										</div>
										<!--end row-->
									</div>
									<!--end container-->
								</div>
								<!--end dropdown container-->
							</li>
							<li class="dropdown">
								<span class="dropdown__trigger">Servizi</span>
								<div class="dropdown__container">
									<div class="container">
										<div class="row">
											<div class="dropdown__content col-md-2 col-sm-4">
												<ul class="menu-vertical">
													<li>
														<a href="{{ url('servizi/data-center') }}">Data Center</a>
													</li>
													<li>
														<a href="{{ url('servizi/diagnostic-center') }}">Diagnostic Center</a>
													</li>
													<li>
														<a href="http://www.associazioneshare.it/" target="_blank" rel="noopener">SHARE Partner ↗</a>
													</li>
													<li>
														<a href="https://elearning.siaspa.com/" target="_blank" rel="noopener">Learning Center ↗</a>
													</li>
													<li>
														<a href="http://sia82.siaspa.com/index.ic" target="_blank" rel="noopener">Terze parti ↗</a>
													</li>
												</ul>
											</div>
											<!--end dropdown content-->
										</div>
										<!--end row-->
									</div>
								</div>
								<!--end dropdown container-->
							</li>
							<li class="dropdown">
								<a href="news">News</a>
							</li>
						</ul>
					</div>
					<!--end module-->
				</div>
				<div class="col-md-5 text-right text-left-xs text-left-sm">
					<div class="bar__module">
						<a class="btn btn--sm type--uppercase" href="tel:0424216111">
							<span class="btn__text">
								+39 0424 216111
							</span>
						</a>
						<a class="btn btn--sm btn--primary type--uppercase" href="{{ url('contatti') }}">
							<span class="btn__text">
								CONTATTACI
							</span>
						</a>
					</div>
					<!--end module-->
				</div>
			</div>
			<!--end of row-->
		</div>
		<!--end of container-->
	</nav>
	<!--end bar-->
</div>
<a id="start"></a>
