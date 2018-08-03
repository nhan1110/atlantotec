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
			<div class="col-md-6"><p><strong>Terminsuche</strong></p></div>
			<div class="col-md-6 text-right">für Terminplan:<strong> Daniela Diomede</strong></div>
		</div>
	</div>
	<ol class="breadcrumb">
		<li><a href="http://www.telberia.com/projects/atlantotec.com/dashboard">Termin</a></li>
		<li class="active">Suche</li>
	</ol>
	<div class="top-page">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<ul class="tab-menu list-inline menu-right right">
					<li class="item"><a class="link" href="javascript:;" data-toggle="modal" data-target="#modal-appointment"><i class="fa fa-plus-square" aria-hidden="true"></i> Neuer Termin</a></li>
					<li class="item"><a class="icon" href="javascript:;"><i class="fa fa-print" aria-hidden="true"></i></a></li>
					<li class="item seperator hidden-sm hidden-md hidden-lg"></li>
					<li class="item" data-for="#tag"><a class="tag" href="{{ route('dayview') }}"><i class="fa fa-file-sound-o" aria-hidden="true"></i> Tag</a></li>
					<li class="item" data-for="#woche"><a class="tag" href="{{ route('weekview') }}" href="javascript:;"><i class="fa fa-file-sound-o" aria-hidden="true"></i> Woche</a></li>
					<li class="item" data-for="#suche"><a class="tag" href="{{ route('terminsuche') }}"><i class="fa fa-file-sound-o" aria-hidden="true"></i> Suche</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="content-page">
		<div class="row">
			<div class="col-md-3 left-colum">
				
				<div class="row">
					<div class="col-md-12">
						<ul class="list-item list-category">
							<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i>Freie Termine</a></li>
							<li><a href="#"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>Legende</a></li>
							<li>
								<a><i class="fa fa-minus-square-o" aria-hidden="true"></i>Behande</a>
								<ul>
									<?php for( $i =0 ;$i < 5 ; $i++):?>
										<li> 
											<div class="checkbox checkbox-circle">
						                        <input id="checkbox<?php echo $i;?>" type="checkbox">
						                        <label for="checkbox<?php echo $i;?>">
						                            item 00<?php echo $i;?>
						                        </label>
						                    </div>
						                </li>
									<?php endfor;?> 
								</ul>
							</li>
							<li>
								<a><i class="fa fa-minus-square-o" aria-hidden="true"></i>Externe terminplane</a>
								<ul>
									<li> 
										<div class="checkbox checkbox-circle">
					                        <input id="checkbox7" type="checkbox">
					                        <label for="checkbox7">
					                            item 007
					                        </label>
					                    </div>
					                </li>
									<li> 
										<div class="checkbox checkbox-circle">
					                        <input id="checkbox8" type="checkbox">
					                        <label for="checkbox8">
					                            item 008
					                        </label>
					                    </div>
					                </li>
								</ul>
							</li>
						</ul>
					</div>	 
				</div>
			</div>
			<div class="col-md-9 right-colum"> 
				<form class="form-horizontal form-search pt-20-xs">
					<div class="form-body">
						<ul class="list-unstyled search-type">
							<li>
								<div class="radio">
									<input id="type-1" type="radio" name="search-type" value="1" checked>
									<label for="type-1">Suche nach Name, Datum, …</label>
								</div>
							</li>
							<li>
								<div class="radio">
									<input id="type-2" type="radio" value="2" name="search-type">
									<label for="type-2">Neue Internet-Termine anzeigen</label>
								</div>
							</li>
							<li>
								<div class="radio">
									<input id="type-3" type="radio" value="3" name="search-type">
									<label for="type-3">Erweiterte Suche</label>
								</div>
							</li>
						</ul>
						<hr class="black">
						<div id="search-group-1" class="search-group collapse in">
							<div class="form-group">
								<label class="col-sm-4 control-label">Datum von:</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="">
								</div>
								<label class="col-sm-2 control-label"><a href="#"><img src="http://www.telberia.com/projects/atlantotec.com/html/images/caltrans.png"></a> bis:</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Vorname:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-sm-2 pl-0-sm">
									<div class="checkbox">
										<input id="bearbeitet" type="checkbox">
										<label for="bearbeitet">ist leer</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Name:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-sm-2 pl-0-sm">
									<div class="checkbox">
										<input id="bearbeitet" type="checkbox">
										<label for="bearbeitet">ist leer</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Telefon:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-sm-2 pl-0-sm">
									<div class="checkbox">
										<input id="bearbeitet" type="checkbox">
										<label for="bearbeitet">ist leer</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">E-Mail:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-sm-2 pl-0-sm">
									<div class="checkbox">
										<input id="bearbeitet" type="checkbox">
										<label for="bearbeitet">ist leer</label>
									</div>
								</div>
							</div>
						</div>
						<div id="search-group-3" class="search-group collapse">
							<div class="form-group">
								<label class="col-sm-4 control-label">Zeitbezug:</label>
								<div class="col-sm-8">
									<ul class="list-unstyled">
										<li>
											<div class="radio">
												<input id="radio02" type="radio" name="ab">
												<label for="radio02">Datum des Termins</label>
											</div>
										</li>
										<li>
											<div class="radio">
												<input id="radio12" type="radio" name="ab">
												<label for="radio12">Datum der Terminerfassung</label>
											</div>
										</li>
										<li>
											<div class="radio">
												<input id="radio32" type="radio" name="ab">
												<label for="radio32">zeitlich nicht festgelegte Termine</label>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Datum von:</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="">
								</div>
								<label class="col-sm-2 control-label"><a href="#"><img src="http://www.telberia.com/projects/atlantotec.com/html/images/caltrans.png"></a> bis:</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-sm-8 col-sm-offset-4">
									<ul class="list-inline">
									<li>
										<div class="checkbox">
											<input id="checkbox11" type="checkbox">
											<label for="checkbox11">Mo</label>
										</div>
									</li>
									<li>
										<div class="checkbox">
											<input id="checkbox12" type="checkbox">
											<label for="checkbox12">Di</label>
										</div>
									</li>
									<li>
										<div class="checkbox">
											<input id="checkbox13" type="checkbox">
											<label for="checkbox13">Mi</label>
										</div>
									</li>
									<li>
										<div class="checkbox">
											<input id="checkbox14" type="checkbox">
											<label for="checkbox14">Do</label>
										</div>
									</li>
									<li>
										<div class="checkbox">
											<input id="checkbox15" type="checkbox">
											<label for="checkbox15">Fr</label>
										</div>
									</li>
									<li>
										<div class="checkbox">
											<input id="checkbox16" type="checkbox">
											<label for="checkbox16">Sa</label>
										</div>
									</li>
									<li>
										<div class="checkbox">
											<input id="checkbox17" type="checkbox">
											<label for="checkbox17">So</label>
										</div>
									</li>
									
								</ul>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Uhrzeit von:</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="">
								</div>
								<label class="col-sm-2 control-label"><a href="#"><img src="http://www.telberia.com/projects/atlantotec.com/html/images/caltrans.png"></a> bis:</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Termindauer von:</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="">
								</div>
								<label class="col-sm-2 control-label"><a href="#"><img src="http://www.telberia.com/projects/atlantotec.com/html/images/caltrans.png"></a> bis:</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-sm-8 col-sm-offset-4">
									<div class="checkbox">
										<input id="checkbox11" type="checkbox">
										<label for="checkbox112">Nur neue Internet-Termine (Noch nicht Bearbeitet)</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Angelegt von:</label>
								<div class="col-sm-6">
									
									<select class="form-control">
										
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Adresse:</label>
								<div class="col-sm-6">
									
									<select class="form-control">
										
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Terminstatus:</label>
								<div class="col-sm-4">
									<div class="checkbox">
										<input id="checkboxc4" type="checkbox">
										<label for="checkboxc4">Anfrage</label>
									</div>
									<div class="checkbox">
										<input id="checkboxc5" type="checkbox">
										<label for="checkboxc5">Buchung</label>
									</div>
									<div class="checkbox">
										<input id="checkboxc6" type="checkbox">
										<label for="checkboxc6">Gelöscht</label>
									</div>
									<div class="checkbox">
										<input id="checkboxc7" type="checkbox">
										<label for="checkboxc7">Ganztägig</label>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="checkbox">
										<input id="checkboxc8" type="checkbox">
										<label for="checkboxc8">Patienten-Storno</label>
									</div>	
									<div class="checkbox">
										<input id="checkboxc81" type="checkbox">
										<label for="checkboxc81">Absage</label>
									</div>	
									<div class="checkbox">
										<input id="checkboxc82" type="checkbox">
										<label for="checkboxc82">Intern verschoben</label>
									</div>	
									<div class="checkbox">
										<input id="checkboxc83" type="checkbox">
										<label for="checkboxc83">Extern verschoben</label>
									</div>	
									
									<div class="checkbox">
										<input id="checkboxc84" type="checkbox">
										<label for="checkboxc84">nur manuell</label>
									</div>	
									<div class="checkbox">
										<input id="checkboxc85" type="checkbox">
										<label for="checkboxc85">Nicht ganztägig</label>
									</div>										
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Terminmerkmale:</label>
								<div class="col-sm-6">
									keine Einschränkung<br>
									<a href="">Einschränken</a>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Vorname:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-sm-2 pl-0-sm">
									<div class="checkbox">
										<input id="bearbeitet" type="checkbox">
										<label for="bearbeitet">ist leer</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Name:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-sm-2 pl-0-sm">
									<div class="checkbox">
										<input id="bearbeitet" type="checkbox">
										<label for="bearbeitet">ist leer</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Telefon:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-sm-2 pl-0-sm">
									<div class="checkbox">
										<input id="bearbeitet" type="checkbox">
										<label for="bearbeitet">ist leer</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">E-Mail:</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-sm-2 pl-0-sm">
									<div class="checkbox">
										<input id="bearbeitet" type="checkbox">
										<label for="bearbeitet">ist leer</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-footer">
						<hr class="black">
						<div class="row">
							<div class="col-sm-8">
								<a href=""><i class="fa fa-cog" aria-hidden="true"></i> Einstellungen</a>
								<button class="btn btn-default ml-10-xs"><i class="fa fa-download" aria-hidden="true"></i> Export</button>
							</div>
							<div class="col-sm-4 text-right">
								<button type="submit" class="btn btn-primary">Suchen</button>
							</div>
						</div>
					</div>
				</form>
				
			</div>
		</div>
	</div>
	<div class="bottom-page"></div>
@endsection