@extends('shares.master')
@section("main-content") 
	<div class="add-bar-system">
		<div class="row">
			<div class="col-md-6"><p>System-Nr.: 3325</p></div>
			<div class="col-md-6 text-right">atlantotec-chiasso: atlantotec-chiasso <a href="#"> (Abmelden)</a> </div>
		</div>
	</div>
	<div class="add-bar-termine">
		<div class="row">
			<div class="col-md-6"><p><strong>Online-Terminbuchung - Allgemeine Einstellungen</strong></p></div>
			<div class="col-md-6 text-right">für Praxis<strong> atlantotec-fuenlabrada</strong></div>
		</div>
	</div>
	<ol class="breadcrumb">
		<li><a href="http://www.telberia.com/projects/atlantotec.com/dashboard">Einstellungen</a></li>
        <li><a href="http://www.telberia.com/projects/atlantotec.com/dashboard">Online-Terminbuchung</a></li>
		<li class="active">Allgemein</li> 
	</ol>
	<div class="content-page">
		<div class="row">
			<div class="col-md-12">
				<div class="tab-content">
					<div id="einstellungen" class="tab-pane fade in active">
						<div class="row">
							<div class="col-md-6" style=" margin: auto; float: none;">
									<div class="row item">
										<div class="col-md-5 text-right"><strong>freischalten:</strong></div>
										<div class="col-md-7 text-left">
											<ul class="list-inline">
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="freischalten" id="ja" value="ja">
														<label for="ja"> Ja </label>
													</div>
												</li>
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="freischalten" id="nein" value="nein">
														<label for="nein"> Nein </label>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="line-white"></div>
									<div class="row item">
										<div class="col-md-5 text-right"><strong>Authentifizierung:</strong></div>
										<div class="col-md-7 text-left">
											<ul class="list-items">
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="authentifizierung" id="Ohne-Anmeldung" value="Ohne Anmeldung">
														<label for="Ohne-Anmeldung"> Ohne Anmeldung </label>
													</div>
												</li>
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="authentifizierung" id="Mit-Kennwort" value="Mit Kennwort">
														<label for="Mit-Kennwort"> Mit Kennwort </label>
													</div>
												</li>
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="authentifizierung" id="Mit-Benutzeranmeldun" value="Mit Benutzeranmeldun">
														<label for="Mit-Benutzeranmeldun"> Mit Benutzeranmeldun </label>
													</div>
												</li>
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="authentifizierung" id="Mit-SMS-TAN" value="Mit SMS-TAN">
														<label for="Mit-SMS-TAN"> Mit SMS-TAN </label>
													</div>
												</li>
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="authentifizierung" id="Per-E-Mail" value="Per E-Mail (Double-Opt-In)">
														<label for="Per-E-Mail"> Per E-Mail (Double-Opt-In) </label>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="line-white"></div>
									<div class="row item">
										<div class="col-md-5 text-right"><strong>Arbeitstage für Termin- und Storno-Deadline:</strong></div>
										<div class="col-md-7 text-left">
											<ul class="list-inline">
												<li> 
													<div class="checkbox">
														<input id="arbeitstage0" name="arbeitstage" value="Mo" type="checkbox">
														<label for="arbeitstage0">Mo</label>
													</div>
												</li>
												<li> 
													<div class="checkbox">
														<input id="arbeitstage1" name="arbeitstage" value="Di" type="checkbox">
														<label for="arbeitstage1">Di</label>
													</div>
												</li>
												<li> 
													<div class="checkbox">
														<input id="arbeitstage2" name="arbeitstage" value="Mi" type="checkbox">
														<label for="arbeitstage2">Mi</label>
													</div>
												</li>
												<li> 
													<div class="checkbox">
														<input id="arbeitstage3" name="arbeitstage" value="Do" type="checkbox">
														<label for="arbeitstage3">Do</label>
													</div>
												</li>
												<li> 
													<div class="checkbox">
														<input id="arbeitstage4" name="arbeitstage" value="Fr" type="checkbox">
														<label for="arbeitstage4">Fr</label>
													</div>
												</li>
												<li> 
													<div class="checkbox">
														<input id="arbeitstage5" name="arbeitstage" value="Sa" type="checkbox">
														<label for="arbeitstage5">Sa</label>
													</div>
												</li>
												<li> 
													<div class="checkbox">
														<input id="arbeitstage6" name="arbeitstage" value="So" type="checkbox">
														<label for="arbeitstage6">So</label>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="line-white"></div>
									<div class="row item">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-5 text-right"><strong>Terminbuchung:</strong></div>
												<div class="col-md-7 text-left"></div>
											</div>
										</div>
										<br>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-5 text-right">möglich bis:</div>
												<div class="col-md-7 text-left">
													<ul class="list-inline">
														<li>  
															<input type="text" name="moglichbis_text" value>	 
														</li>
														<li> 
															<span>
																<select name="moglichbis_seclect">
																	<option value="Stunden">Stunden</option>
																	<option value="Stunden">Arbeitstage</option>
																</select>
															</span>
															<span> vor Termin </span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="line-white"></div>
									<div class="row item">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-5 text-right"><strong>Verschieben, Stornieren und Ändern:</strong></div>
												<div class="col-md-7 text-left">
												<ul class="list-inline">
													<li> 
														<div class="radio radio-black">
															<input type="radio" name="verschieben" id="verschieben_ja" value="ja">
															<label for="verschieben_ja"> Ja </label>
														</div>
													</li>
													<li> 
														<div class="radio radio-black">
															<input type="radio" name="verschieben" id="verschieben_nein" value="nein">
															<label for="verschieben_nein"> Nein </label>
														</div>
													</li>
												</ul>
												</div>
											</div>
										</div>
										<br>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-5 text-right">möglich bis:</div>
												<div class="col-md-7 text-left">
													<ul class="list-inline">
														<li>  
															<input type="text" name="moglichbis_text" value>	 
														</li>
														<li> 
															<span>
																<select name="moglichbis_seclect">
																	<option value="Stunden">Stunden</option>
																	<option value="Stunden">Arbeitstage</option>
																</select>
															</span>
															<span> vor Termin </span>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-12"><strong>Hinweis wenn Stornofrist abgelaufen:</strong></div>
												<div class="space-15"></div>
												<div class="col-md-12"><textarea name="hinweis" placeholder="Bitte wenden Sie sich telefonisch an uns."></textarea></div>
											</div>
										</div>
									</div>
									<div class="line-white"></div>
									<div class="row item">
										<div class="col-md-5 text-right"><strong>Max. Buchungszeitraum:</strong></div>
										<div class="col-md-7 text-left">
											<span><input type="text" name="moglichbis_text" value></span>	 
											<span>ganze Monate </span>
										</div>
									</div>
									<div class="line-white"></div>
									<div class="row item">
										<div class="col-md-5 text-right"><strong>Terminanfrage mit Bestätigung:</strong></div>
										<div class="col-md-7 text-left">
											<ul class="list-inline">
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="terminanfrage" id="terminanfrage_ja" value="ja">
														<label for="terminanfrage_ja"> Ja </label>
													</div>
												</li>
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="terminanfrage" id="terminanfrage_nein" value="nein">
														<label for="terminanfrage_nein"> Nein </label>
													</div>
												</li>
											</ul>
										</div>
										<br>
										<div class="col-md-12"><strong>Anfragehinweis:</strong></div>
										<div class="space-15"></div>
										<div class="col-md-12"><textarea placeholder="Sie erhalten in Kürze eine Terminbestätigung per E-Mail zugesendet." name="anfragehinweis"></textarea></div>
									</div>
									<div class="line-white"></div>
									<div class="row item">
										<div class="col-md-5 text-right"><strong>Bestätigungsmail:</strong></div>
										<div class="col-md-7 text-left">
											<ul class="list-items">
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="bestatigungsmail" id="Optional-senden" value="Optional senden">
														<label for="Optional-senden">Optional senden</label>
													</div>
												</li>
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="bestatigungsmail" id="Automatisch-senden" value="Automatisch senden">
														<label for="Automatisch-senden"> Automatisch senden </label>
													</div>
												</li>
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="authentifizierung" id="Nie-senden" value="Nie senden">
														<label for="Nie-senden"> Nie senden </label>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="line-white"></div>
									<div class="row item">
										<div class="col-md-5 text-right"><strong>Schaltfläche 'Weiterer Termin':</strong></div>
										<div class="col-md-7 text-left">
											<ul class="list-inline">
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="schaltflache" id="schaltflache_ja" value="ja">
														<label for="schaltflache_ja"> Ja </label>
													</div>
												</li>
												<li> 
													<div class="radio radio-black">
														<input type="radio" name="freischalten" id="schaltflache_nein" value="nein">
														<label for="schaltflache_nein"> Nein </label>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="line-white"></div>
									<div class="row item">
										<div class="col-md-5 text-right"><strong>Performance:</strong></div>
										<div class="col-md-7 text-left">
											<ul class="list-inline">
												<li> 
													<div class="checkbox">
														<input id="performance0" name="performance" value="Online-Terminbuchung asynchron aufbauen" type="checkbox">
														<label for="performance0">Online-Terminbuchung asynchron aufbauen</label>
													</div>
												</li>								 
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class ="bottom-page text-center">
					<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-floppy-o" aria-hidden="true"></i> Speichern</button>
					<button type="button" class="btn btn-primary"><i class="fa fa-times" aria-hidden="true"></i> Abbrechen</button>
				</div>
			</div>
		</div>
	</div>
@endsection
