@extends('pub_theme::layouts.app')
@section('content')
<!-- CONTENT -->
    <div class="main-container">
        <section class="height-80 imagebg switchable unpad--top">
            <div class="stripes"></div>
            <div class="container pos-vertical-center">
                <div class="row" style="margin-top: 82px;">
                    <div class="col-md-5 col-sm-7">
                        <div class="switchable__text">
                          	<a href="http://127.0.0.1:8080/panoramica-prodotti"><span class="h6 inline-block">Prodotti</span></a> <span class="h6 inline-block">»</span> 	<a href="http://127.0.0.1:8080/panoramica-prodotti.php#compagnie"><span class="h6 inline-block">Compagnie</span></a>
                            <h1>{{ $row->title }}</h1>
                            <p class="lead">
                            {{ $row->subtitle }}
                            </p>
                            <a class="btn btn--primary type--uppercase inner-link" href="#demo">
                                <span class="btn__text">
                                    Richiedi una demo »
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-xs-12">
                        <div class="video-cover border--round box-shadow-wide">
                            <div class="background-image-holder">
                                <img alt="image" src="http://sia_laravel.local/images/frontend_images/jmil/jmil.png" />
                            </div>
                            <div class="video-play-icon"></div>
                            <iframe data-src="https://www.youtube.com/embed/CWRethKWMHk?autoplay=1;rel=0;showinfo=0" allowfullscreen="allowfullscreen" allow="autoplay;encrypted-media"></iframe>
                        </div>
                        <!--end video cover-->
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="switchable">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7">
                        <h2>L'offerta di moduli e servizi orientati ai diversi settori delle Compagnie di assicurazioni</h2>
                        <p class="lead">
                            JMIL, nelle due versioni danni e vita, è la nuova generazione del prodotto software di SIA.
                        </p>
                        <p class="lead">
                             L’infrastruttura IT di una compagnia può rappresentare un vantaggio competitivo di fronte alla concorrenza, se accompagnata
                             da procedure che si dimostrino coerenti con la strategia aziendale e in piena congruenza con i suoi obiettivi di business e di politica commerciale.
                        </p>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center">
                        <i class="icon icon-Speach-BubbleAsking color--primary m-b-md"></i>
                        <div class="testimonial testimonial-2 text-left">
                            <div class="testimonial__body boxed boxed--border bg--secondary">
                                <p>
									            SIA ha l’esperienza richiesta per la gestione di questo tipo di progetti,
                              riuscendo a mettere a disposizione le migliori scelte procedurali in pieno accordo con le direttive dei clienti
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="text-center cta cta-4 space--xxs ">
                <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span class="label label--inline bg--primary">NEWS</span>
                <span>SIA vi aspetta alle Assemblee Territoriali Uniqa!
                    <a href="http://127.0.0.1:8080/news/assemblee-territoriali-uniqa">Leggi tutto »</a></span>
            </div>
        </div>
        <!--end of row-->
    </div>
      </section>
		<section class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2>Una ricca offerta di moduli e servizi orientati ai diversi settori delle Compagnie di assicurazioni</h2>
                        <p class="lead">
                          La <strong>robustezza e la modernità</strong> di un sistema gestito da un team con ampio know-how assicurativo ed esperienza internazionale. JMIL, nelle due versioni danni e vita, è la <strong>nuova generazione</strong> del prodotto software di SIA, rivolto alle compagnie di assicurazioni per il supporto completo e integrato al business d'impresa.
                        </p>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="switchable">
            <div class="stripes--lightgrey height-full"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="tabs-container text-center" data-content-align="left">
							<ul class="tabs">
								<li class="active">
									<div class="tab__title text-center">
										<i class="icon icon--sm block icon-Umbrella-2"></i>
										<span class="h5">Direzione tecnica</span>
									</div>
									<div class="tab__content">
										<p class="lead">
											Il modulo di <strong>gestione portafoglio</strong> governa i rami assicurativi vita (caso vita e morte, prodotti misti vita e danni) e non vita (RE in genere, Auto -RC e CVT-, Marine, Cauzioni, Tutela legale).
										</p>
										<p class="lead">
											Cuore del sistema è il gestore dei prodotti assicurativi, che con il suo motore di regole implementa il <strong>calcolo delle tariffe</strong> (per quotazioni, preventivi, emissioni, rinnovi, ecc.), guida e sorveglia il processo di emissione e gestisce la stampa dei rispettivi documenti (anche nella versione dematerializzata del documento e con la firma elettronica).
										</p>
										<p class="lead">
											Il sistema è in grado di gestire polizze individuali e collettive, libro matricola e flotta. Il suo front-end è disponibile via web alla Direzione della compagnia e ai suoi intermediari per la vendita dei prodotti e per lo svolgimento di tutte le operazioni giornaliere, anche in mobilità. Il sistema dispone inoltre di un’ampia gamma di servizi web per l’<strong>integrazione di sistemi terzi</strong> (ad esempio per canali bancari, finanziarie, aggregatori o altro tipo di partner). Il modulo front-end supporta anche la vendita diretta via internet.
										</p>
										<p class="lead">
											Che si tratti di <strong>polizze retail, convenzionate o corporate</strong>, ogni tipologia di business trova un adeguato supporto. La gestione di rischi complessi, che richiedono assunzioni di rischi Taylor Made, trovano supporto nel Portale Richieste per la gestione delle trattative; nel portale è possibile seguire tutto il flusso operativo fino alla definizione dell'offerta conclusiva e l'eventuale trasformazione in polizza.
										</p>
										<p class="lead">
											Non per ultimo evidenziamo il supporto dato dal sistema al processo di dematerializzazione in tutti i suoi ambiti.
										</p>
										<p class="lead">
											Il modulo per la <strong>gestione dei sinistri</strong> amministra l'apertura, trattazione e liquidazione di sinistri Auto, RE in genere e la gestione delle prestazioni vita.
										</p>
										<p class="lead">
											Singoli sinistri possono essere collegati a eventi comuni, ogni controparte del sinistro ha una <strong>gestione individuale</strong> dentro al sinistro, la gestione degli incarichi può essere automatica e può vincolare eventualmente la trattazione del sinistro, i pagamenti vengono controllati e autorizzati secondo i livelli di responsabilità assegnati con aggiornamento continuo delle riserve.
										</p>
										<p class="lead">
											Il sistema sinistri implementa il Cruscotto Attività; un <strong>supporto gestionale</strong>, che indica il numero di task aperti per ogni singola fase del processo, mettendoli in evidenza secondo il tempo rimasto per il loro svolgimento. Il flusso del processo (workflow) è liberamente configurabile.
										</p>
									</div>
								</li>
								<li>
									<div class="tab__title text-center">
										<i class="icon icon--sm block icon-Management"></i>
										<span class="h5">Direzione commerciale</span>
									</div>
									<div class="tab__content">
										<p class="lead">
											Per l'area commerciale il sistema offre diverse funzionalità che facilitano e rendono <strong>più produttivo il lavoro</strong>; un esempio è rappresentato dal supporto per la generazione di conoscenza e competenza sulla propria offerta all'interno e all'esterno della compagnia.
										</p>
										<p class="lead">
											I nostri corsi di <strong>e-learning</strong> rappresentano un valido sostegno per la formazione e la propagazione del know-how; un sostegno non gravoso a supporto della proposta commerciale e della ricchezza funzionale del sistema. I corsi trasmettono allo stesso tempo qualità e coinvolgimento nel servizio della compagnia e aiutano ad aumentare la percezione del valore e della bontà dell'offerta nella rete, promuovendo successo nelle azioni di vendita.
										</p>
										<p class="lead">
											La nostra proposta offre inoltre supporto alla varietà di intermediari e canali di vendita, sia attraverso i mezzi propri del sistema centrale, come il <strong>front-end e i servizi web</strong>, sia attraverso altri applicativi ad-hoc di SIA.
										</p>
										<p class="lead">
											Nel CRM del sistema sono gestiti sia gli intermediari diretti, sia i collaboratori degli intermediari. Il <strong>sistema di profilazione</strong> utenti controlla l'assegnazione dei diritti a ogni singola figura o gruppo.
										</p>
										<p class="lead">
											Il sistema permette la preparazione veloce di quotazioni. Le funzionalità di <strong>cross-selling</strong> acconsentono sia la preparazione batch di preventivi (vendite veloci) che di polizze (tentata vendita).
										</p>
										<p class="lead">
											Il supporto già presente nel sistema può essere ulteriormente potenziato, mediante l'aggiunta di applicativi complementari come la gestione del <strong>budget di vendite</strong> -con l'esposizione su web del budget concordato e raggiunto con il canale di vendita e la gestione delle gerenze e del back office della rete vendita (<a href="http://127.0.0.1:8080/prodotti/intermediari/omnia-web-8">Omnia Web 8</a>).
										</p>
									</div>
								</li>
								<li>
									<div class="tab__title text-center">
										<i class="icon icon--sm block icon-Cash-register2"></i>
										<span class="h5">Direzione amministrativa</span>
									</div>
									<div class="tab__content">
										<p class="lead">
											Per la direzione amministrativa evidenziamo tre moduli di particolare interesse: la contabilità tecnica, quella generale e quella analitica.
										</p>
										<p class="lead">
											Il modulo di <strong>contabilità tecnica</strong> premi offre il supporto per la gestione economica e finanziaria dei canali di vendita; congiuntamente alla contabilità tecnica sinistri, questo modulo amministra la tenuta dei registri contabili e dei libri obbligatori per premi, sinistri e riserve (premi e sinistri).
										</p>
										<p class="lead">
											Il modulo di gestione della <strong>contabilità generale e fiscale</strong>, alimentabile dai sistemi tecnici, permette il caricamento manuale o meccanico delle registrazioni, realizza le chiusure e il bilancio e supporta la riclassificazione del bilancio in un'altra struttura di piano dei conti, ad esempio per la produzione di un bilancio consolidato o CEE.
										</p>
										<p class="lead">
											Il modulo di <strong>contabilità analitica</strong>, rileva i fatti di gestione interna mediante la riclassificazione dei dati della contabilità generale e offre un importante sostegno alla gestione aziendale e del budget.
										</p>
									</div>
								</li>
								<li>
									<div class="tab__title text-center">
										<i class="icon icon--sm block icon-Settings-Window"></i>
										<span class="h5">Direzione Operations & IT</span>
									</div>
									<div class="tab__content">
										<p class="lead">
											Per l'erogazione delle operations, il sistema conta su una <strong>grande diversità di strumenti</strong>, oltre a quelle legate nel senso più stretto alla gestione del portafoglio e dei sinistri, ad esempio il Cruscotto Attività  permette di gestire gli impegni delle diverse aree aziendali, nel rispetto dei tempi prefissati per ogni singolo task e processo.
										</p>
										<p class="lead">
											Altri esempio sono rappresentati dall'integrazione dell'office automation  per la preparazione di lettere o documenti <strong>(documentazione digitale e/o cartacea)</strong>, ma anche per l'invio di email, fax o SMS, oppure l’ estrazione di dati direttamente su Excel. Con l'aiuto di questi meccanismi il sistema rende possibile la generazione di report personalizzabili sulle esigenze del Cliente e programmabili, con inoltro periodico e automatico ai responsabili censiti.
										</p>
										<p class="lead">
											Il sistema gestisce i flussi dati richiesti per l'anagrafe tributaria, gli avvisi di scadenza, l'<strong>antiriciclaggio</strong>, le banche dati ANIA e mette a disposizione il supporto Home Insurance previsto dalla normativa.
										</p>
										<p class="lead">
											Come supporto all'area IT possiamo nominare la Gestione del piano di codifica aziendale per la <strong>reportistica e il data mining</strong>, l’esecuzione di test automatici su prodotti e gestionale (test personalizzati), la generazione parametrica di estrazione dati (eseguibile on-demand o automaticamente con la periodicità impostata).
										</p>
										<p class="lead">
											Da menzionare in particolar modo la fornitura di consulenza per l'<strong>analisi di nuove richieste</strong> implementative e sviluppi funzionali, il disegno della soluzione e lo studio dell'impatto nell’infrastruttura esistente.
										</p>
										<p class="lead">
											La nostra <strong>offerta di Outsourcing</strong> copre sia la parte sistemistica sia quella operativa, aiutando in questo modo i nostri clienti al miglioramento della propria efficienza, liberando risorse da destinare al core business dell'azienda. Questa proposta risulta inoltre ideale per compagnie start up, compagnie in Libera Prestazione di Servizio (LPS), compagnie in regime di stabilimento o per altre attività specifiche come la introduzione di nuove linee di business in realtà esistenti.
										</p>
									</div>
								</li>
								<li>
									<div class="tab__title text-center">
										<i class="icon icon--sm block icon-Life-Safer"></i>
										<span class="h5">Risk Management</span>
									</div>
									<div class="tab__content">
										<p class="lead">
											Mai come in questi giorni il risk management ha <strong>guadagnato molta importanza</strong> e ha catalizzato tanta attenzione. L'applicazione del nuovo regime di Solvency II richiede da parte delle compagnie un grande sforzo per l’identificazione dei propri rischi e per fornirsi di strumenti di valutazione prospettica, in modo di ponderare i rischi e gestirli adeguatamente.
										</p>
										<p class="lead">
											In questo contesto la riassicurazione gioca un ruolo di primaria importanza come metodo di riduzione della propria esposizione economica.
										</p>
										<p class="lead">
											Il nostro modulo di <strong>Diagnostico riassicurativo</strong> permette alla compagnia la generazione di profili di rischio, importanti sia per lo studio del proprio portafoglio, sia per la trattativa con i riassicuratori.
										</p>
										<p class="lead">
											Mediante analisi d’impatto as-if, il Diagnostico fornisce informazioni sull'andamento dell'azienda, dovuto a possibili <strong>evoluzioni nel portafoglio</strong> polizze, nei sinistri o nella situazione riassicurativa. Questo supporto ha lo scopo primario di aiutare la compagnia nella corretta definizione delle esigenze di copertura riassicurativa, ma si estende ugualmente a molti altri ambiti.
										</p>
										<p class="lead">
											Il modulo per la <strong>gestione della riassicurazione</strong> passiva amministra la cessione automatica di parte dei rischi assunti con i contratti di assicurazione diretta. Il sistema censisce le anagrafiche dei riassicuratori, l'anagrafica dei trattati di riassicurazione, gestisce la cessione parametrica ai trattati e singoli riassicuratori, prepara i borderaux ai riassicuratori e invia i dati alla contabilità generale.
										</p>
									</div>
								</li>
							</ul>
						</div>
						<!--end of tabs container-->
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section>
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="feature">
                            <i class="icon icon-Yes color--primary"></i>
                            <h4>Solidità software</h4>
                            <p>
                                La nuova generazione del prodotto software di SIA: robustezza e modernità di un sistema gestito da un team con ampio know-how assicurativo ed esperienza internazionale.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature">
                            <i class="icon icon-Ribbon-2 color--primary"></i>
                            <h4>Esperienza</h4>
                            <p>
                                Il team di esperti di SIA ha l’esperienza richiesta per la gestione di questi progetti, riuscendo a mettere a disposizione le migliori scelte procedurali in accordo con i clienti.
                            </p>
                        </div>
                    </div>
					<div class="col-sm-4">
                        <div class="feature">
                            <i class="icon icon-Server color--primary"></i>
                            <h4>Tecnologia</h4>
                            <p>
                                È un enorme vantaggio competitivo se accompagnata da procedure che si dimostrino coerenti con la strategia aziendale congrui agli obiettivi di business e commerciali.
                            </p>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
		<section class="bg--primary unpad cta cta-2 text-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2>Solidità ed esperienza al servizio delle compagnie</h2>
					</div>
				</div>
				<!--end of row-->
			</div>
			<!--end of container-->
		</section>
        <section class="text-center space--xs" id="demo">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-6">
                        <div class="cta">
                            <h2>Vuoi una dimostrazione?</h2>
                            <p class="lead">Parlaci di te compilando il form qui sotto, verrai ricontattato dai nostri consulenti quanto prima.</p>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section>
    			<div class="container">
    				<div class="row">
    					<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    						<div class="row">
    							<div class="boxed boxed--border">
    								<form class="text-left form-email" data-success="Grazie per averci scritto, verrai ricontattato quanto prima." data-error="Compila tutti i campi.">
    									<div class="col-sm-6">
    										<span>Nome:</span>
    										<input type="text" name="name" class="validate-required" />
    									</div>
    									<div class="col-sm-6">
    										<span>Cognome:</span>
    										<input type="text" name="cognome" class="validate-required" />
    									</div>
                      <div class="col-sm-12">
    										<span>Società:</span>
    										<input type="text" name="company" class="validate-required" />
    									</div>
    									<div class="col-sm-6">
    										<span>Email:</span>
    										<input type="email" name="email" class="validate-required validate-email" />
    									</div>
    									<div class="col-sm-6">
    										<span>Telefono:</span>
    										<input type="tel" name="phone" class="validate-required" />
    									</div>
    									<div class="col-sm-6">
    										<span>Sono:</span>
    										<div class="input-select">
    											<select class="validate-required" id="sono" name="sono">
    												<option value="compagnia" selected="">Una compagnia</option>
    												<option value="broker">Un broker</option>
    												<option value="agente">Un agente</option>
    												<option value="altro">Altro</option>
    											</select>
    										</div>
    									</div>
    									<div class="col-sm-6">
    										<span>Prodotto:</span>
    										<div class="input-select">
    											<select class="validate-required" name="prodotto">
    												<option value="jmil" selected="">JMIL</option>
    												<option value="omb">OMB</option>
    												<option value="omniax">Omnia X</option>
    												<option value="omniaweb8">Omnia Web 8</option>
    												<option value="businessintelligence">Business Intelligence</option>
    												<option value="ipm">IPM</option>
    												<option value="terzavia">Terza Via</option>
    												<option value="omacoge">Oma co.ge.</option>
    												<option value="icn">ICN</option>
    											</select>
    										</div>
    									</div>
    									<div class="col-sm-12">
    										<label>Messaggio:</label>
    										<textarea rows="4" name="Message" class="validate-required"></textarea>
    									</div>
                      <div class="col-xs-12">
                        <div class="input-checkbox">
                        <input type="checkbox" name="agree" id="input-assigned-0" class="validate-required">
                            <label for="input-assigned-0"></label>
                              </div>
                                <span>Dichiaro di aver letto ed accettato la <a href="https://www.siaworld.com/privacy-policy">Privacy Policy </a></span>
                               </div>
    									<div class="col-sm-12 boxed">
    										<button type="submit" class="btn btn--primary type--uppercase">INVIA RICHIESTA »</button>
    									</div>
    								</form>
    							</div>
    						</div>
    						<!--end of row-->
    					</div>
    				</div>
    				<!--end of row-->
    			</div>
    			<!--end of container-->
    		</section>
    </div>
@endsection