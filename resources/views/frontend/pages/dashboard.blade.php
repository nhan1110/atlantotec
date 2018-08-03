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
			<div class="col-md-6"><p><strong>Termine:</strong> 21.05.2018 - 25.05.2018 (KW 21)</p></div>
			<div class="col-md-6 text-right">für Terminplan:<strong> Daniela Diomede</strong></div>
		</div>
	</div>
	<div class="top-page">
		<div class="row">
			<div class="col-md-6">
				<?php $moths = [
					"1"  => "January",
					"2"  => "February",
					"3"  => "March",
					"4"  => "April",
					"5"  => "May",
					"6"  => "June",
					"7"  => "July",
					"8"  => "August",
					"9"  => "September",
					"10" => "October",
					"11" => "November",
					"12" => "December"
				]; ?>
				<ul class="list-inline menu-left">
					<li>
						<select name="months">
							<?php 
								foreach ($moths as $key => $value) {
									echo "<option value=\"".$key."\">".$value."</option>";
								}
							?>
						</select>
					</li>
					<li>
						<select name="days">
							<?php 
								for ($i = 1 ; $i <= 20 ; $i++) {
									echo "<option value=\"". (2010 + $i) ."\">". (2010 + $i) ."</option>";
								}
							?>
						</select>
					</li>
					<li><a href="javascript:;" class="button"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
					<li><a href="javascript:;" class="button"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
					<li><a href="#" class="link">Heute</a></li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="tab-menu list-inline menu-right right">
					<li class="item"><a class="link" href="javascript:;" data-toggle="modal" data-target="#modal-appointment" ><i class="fa fa-plus-square" aria-hidden="true"></i> Neuer Termin</a></li>
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
				<div class="datetimepicker-box">
					<input id="datetimepicker" type="text" >
				</div>
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
				<div class="search-bar">
					<div class="row">
						<div class="col-sm-9 col-md-4 col-lg-2"> 
							<select>
							  <option>Aktualisieren</option>
							  <optgroup label="Ausgewählte Termine">
							    <option>Auf bearbeitet setzen</option>
							    <option>Sperren</option>
							    <option>Freigeben (Entsperren) </option> 
							    <option>Löschen</option>
							  </optgroup>
							  <option disabled>-----------------------------------------------</option>
							  <optgroup label="Drucken...">
							    <option>Terminliste</option>
							    <option>Terminzettel</option>
							  </optgroup>
							  <option disabled>------------------------------------------------</option>
							  <optgroup label="Export...">
							    <option>nach Outlook/iCal exportieren</option>
							    <option>nach ExceVcsv-Datei exportieren</option>
							    <option>nach KontakteNCard exportieren </option>
							  </optgroup>
							</select>
						</div>
						<div class="col-sm-3 col-lg-2">
							<button class="btn-block mt-10-xs mt-0-sm"> Aktion ausfuhren</button>
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-center">
								<p><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i></a></p>
								<p><a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></p>
							</th>
							<th>
								<span class="left">
									<div class="checkbox">
				                        <input id="checkbox11" type="checkbox">
				                        <label for="checkbox11"></label>
			                    	</div>
			                	</span>
								<p class="text-center">Montag</p><p class="text-center">25.12.2018</p>
								<div class="after-colum">
									<p><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i></a></p>
									<p><a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></p>
								</div>
							</th>
							<th>
								<span class="left">
									<div class="checkbox">
				                        <input id="checkbox12" type="checkbox">
				                        <label for="checkbox12"></label>
			                    	</div>
			                	</span>
								<p class="text-center">Dienstag</p><p class="text-center">25.12.2018</p>
								<div class="after-colum">
									<p><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i></a></p>
									<p><a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></p>
								</div>
							</th>
							<th>
								<span class="left">
									<div class="checkbox">
				                        <input id="checkbox13" type="checkbox">
				                        <label for="checkbox13"></label>
			                    	</div>
			                	</span>
								<p class="text-center">Mittwoch</p><p class="text-center">25.12.2018</p>
								<div class="after-colum">
									<p><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i></a></p>
									<p><a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></p>
								</div>
							</th>
							<th>
								<span class="left">
									<div class="checkbox">
				                        <input id="checkbox14" type="checkbox">
				                        <label for="checkbox14"></label>
			                    	</div>
			                	</span>
								<p class="text-center">Donnerstag</p><p class="text-center">25.12.2018</p>
								<div class="after-colum">
									<p><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i></a></p>
									<p><a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></p>
								</div>
							</th>
							<th>
								<span class="left">
									<div class="checkbox">
				                        <input id="checkbox15" type="checkbox">
				                        <label for="checkbox15"></label>
			                    	</div>
			                	</span>
								<p class="text-center">Freitag</p><p class="text-center">25.12.2018</p>
								<div class="after-colum">
									<p><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i></a></p>
									<p><a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></p>
								</div>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$c = "CONTROL";
							for ($i= 7;$i < 23; $i++){ ?>
								<tr>
									<td class="first-td"><?php echo ($i) >= 10 ? ($i).":00" : "0".($i) .":00"?></td>
									<td class="one-column">
										<?php if($i%2 != 0):?>
											<span class="left">
												<div class="checkbox">
							                        <input id="checkbox<?php echo ($i+4); ?>5" type="checkbox">
							                        <label for="checkbox<?php echo ($i+4); ?>5"><a href="#" data-toggle="modal" data-target="#modal-appointment">10:00 - 11:30</a> demo 00<?php echo $i?></label>
						                    		<div class="remove-item"><i class="fa fa-remove" aria-hidden="true"></i></div>
						                    	</div>
						                	</span>
										<?php endif?>
									</td>
									<td>	
										<?php if($i%2 == 0):?>
											<?php if($c == "CONTROL")  $c = "ATLANTE"; else $c = "CONTROL"; ?>
											<div class="value-holder value-type-1">
												<span class="left <?php echo $c;?>">
													<div class="checkbox">
														<input id="checkbox<?php echo ($i+4); ?>15" type="checkbox">
														<label for="checkbox<?php echo ($i+4); ?>15"><a href="#" data-toggle="modal" data-target="#modal-appointment">10:00 - 11:30</a> <i class="online fa fa-circle" aria-hidden="true"></i> demo 00<?php echo $i?></label>
														<div class="action-item"><?php echo $c ?></div>
													</div>
												</span>
						                	</div>
										<?php endif?>												
									</td>
									<td>
										<?php if($i%3 == 0):?>
											<?php if($c == "CONTROL")  $c = "ATLANTE"; else $c = "CONTROL"; ?>
											<span class="left <?php echo $c;?>">
												<div class="checkbox">
							                        <input id="checkbox<?php echo ($i+4); ?>25" type="checkbox">
							                        <label for="checkbox<?php echo ($i+4); ?>25"><a href="#" data-toggle="modal" data-target="#modal-appointment">10:00 - 11:30</a> <i class="online fa fa-circle" aria-hidden="true"></i> demo 00<?php echo $i?></label>
						                    		<div class="action-item"><?php echo $c ?></div>
						                    	</div>
						                	</span>
										<?php endif?>
									</td>
									<td>
										<?php if($i%3 != 0):?>
											<?php if($c == "CONTROL")  $c = "ATLANTE"; else $c = "CONTROL"; ?>
											<span class="left <?php echo $c;?>">
												<div class="checkbox">
							                        <input id="checkbox<?php echo ($i+4); ?>35" type="checkbox">
							                        <label for="checkbox<?php echo ($i+4); ?>35"><a href="#" data-toggle="modal" data-target="#modal-appointment">10:00 - 11:30</a> <i class="online fa fa-circle" aria-hidden="true"></i> demo 00<?php echo $i?></label>
						                    		<div class="action-item"><?php echo $c ?></div>
						                    	</div>
						                	</span>
										<?php endif?>
									</td>
									<td>
										<?php if($i%4 != 0):?>
											<?php if($c == "CONTROL")  $c = "ATLANTE"; else $c = "CONTROL"; ?>
											<div class="value-holder value-type-2">
												<span class="left <?php echo $c;?>">
													<div class="checkbox">
														<input id="checkbox<?php echo ($i+4); ?>45" type="checkbox">
														<label for="checkbox<?php echo ($i+4); ?>45"><a href="#" data-toggle="modal" data-target="#modal-appointment">10:00 - 11:30</a> <i class="online fa fa-circle" aria-hidden="true"></i> demo 00<?php echo $i?></label>
														<div class="action-item"><?php echo $c ?></div>
													</div>
												</span>
						                	</div>
										<?php endif?>
									</td>
								</tr>	 
						<?php } ?>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-page"></div>
	<div class="modal fade in" id="modal-appointment" tabindex="-1" role="dialog" aria-labelledby="modal-appointment">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modal-appointment">Appointment</h4>
				</div>
				<div class="modal-body">
					
					<form class="form-horizontal form-appointment">
						<div class="row">
							<div class="col-md-6 group-termin">
								<div class="form-group">
									<label class="col-sm-4 control-label">Terminstatus:</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option value="0" style="background-color: rgb(255, 255, 192); ">Anfrage</option>
											<option selected="selected" value="-1" style="background-color: rgb(192, 255, 192); ">Buchung</option>
											<option value="1" style="background-color: rgb(255, 192, 192); ">Patienten-Storno</option>
											<option value="2" style="background-color: rgb(255, 192, 192); ">Absage</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Farbe:</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option value="" style="background-color: rgb(255, 255, 255); ">auto</option>
											<option value="FFFFFF" style="background-color: rgb(255, 255, 255); ">Weiß</option>
											<option selected="selected" value="F0F0F0" style="background-color: rgb(240, 240, 240); ">Grau</option>
											<option value="FFC0C0" style="background-color: rgb(255, 192, 192); ">Coral</option>
											<option value="FFE0C0" style="background-color: rgb(255, 224, 192); ">Orange</option>
											<option value="FFFFC0" style="background-color: rgb(255, 255, 192); ">Gelb</option>
											<option value="C0FFC0" style="background-color: rgb(192, 255, 192); ">Grün</option>
											<option value="C0FFFF" style="background-color: rgb(192, 255, 255); ">Blau</option>
											<option value="C0C0FF" style="background-color: rgb(192, 192, 255); ">Violet</option>
											<option value="FFC0FF" style="background-color: rgb(255, 192, 255); ">Pink</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Anrede:</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option value="0">bitte wählen</option>
											<option selected="selected" value="1">Frau</option>
											<option value="2">Herr</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Vorname:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Name:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Ort:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Telefon:</label>
									<div class="col-sm-8">
										<input type="tel" class="form-control" name="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">E-Mail:</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" name="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label pt-0-sm">E-Mail Adresse wiederholen:</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" name="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Interne Bemerkung:</label>
									<div class="col-sm-8">
										<textarea class="form-control" name="" rows="3"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label pt-0-sm">Terminerinnerung per E-Mail:</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option value="0">keine</option>
											<option value="1">1 Stunde vor Termin</option>
											<option value="2">2 Stunden vor Termin</option>
											<option value="4">4 Stunden vor Termin</option>
											<option value="8">8 Stunden vor Termin</option>
											<option value="12">12 Stunden vor Termin</option>
											<option value="24">1 Tag vor Termin</option>
											<option value="48">2 Tage vor Termin</option>
											<option selected="selected" value="72">3 Tage vor Termin</option>
											<option value="96">4 Tage vor Termin</option>
											<option value="120">5 Tage vor Termin</option>
											<option value="144">6 Tage vor Termin</option>
											<option value="168">1 Woche vor Termin</option>
											<option value="336">2 Wochen vor Termin</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label pt-0-sm">Terminerinnerung per SMS:</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option value="0">keine</option>
											<option value="1">1 Stunde vor Termin</option>
											<option value="2">2 Stunden vor Termin</option>
											<option value="4">4 Stunden vor Termin</option>
											<option value="8">8 Stunden vor Termin</option>
											<option value="12">12 Stunden vor Termin</option>
											<option value="24">1 Tag vor Termin</option>
											<option value="48">2 Tage vor Termin</option>
											<option selected="selected" value="72">3 Tage vor Termin</option>
											<option value="96">4 Tage vor Termin</option>
											<option value="120">5 Tage vor Termin</option>
											<option value="144">6 Tage vor Termin</option>
											<option value="168">1 Woche vor Termin</option>
											<option value="336">2 Wochen vor Termin</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">SMS Telefon:</label>
									<div class="col-sm-8">
										<div class="row">
											<div class="col-xs-5 pr-0-xs">
												<select class="form-control">
													<option selected="selected" value="0039">+39: Italien</option>
													<option value="0041">+41: Schweiz</option>
													<option value="00423">+423: Liechtenstein</option>
													<option value="0043">+43: Österreich</option>
													<option value="0049">+49: Deutschland</option>
												</select>
											</div>
											<div class="col-xs-7 pl-5-xs">
												<input type="tel" class="form-control" name="">
											</div>
										</div>

									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Betrag:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Status:</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option value="0" />
											<option value="1">Nicht gekommen entschuldigt</option>
											<option value="2">Nicht gekommen OHNE ENTSCHULDIGUNG</option>
											<option value="3">Keine Behandlung</option>
											<option value="4">Schon gerade</option>
											<option selected="selected" value="6">NON VENUTO - GIUSTIFICATO (Wert ist ungültig!)</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Bemerkung:</label>
									<div class="col-sm-8">
										<textarea class="form-control" name="" rows="3"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Sprache:</label>
									<div class="col-sm-8">
										<select class="form-control">
											<option value="en">Englisch</option>
											<option value="fr">Französisch</option>
											<option value="de">Deutsch</option>
											<option selected="selected" value="it">Italienisch</option>
											<option value="es">Spanisch</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6 group-terminplane">
								<div class="form-row form-subheading">
									<strong>Terminpläne</strong>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Behandler:</label>
									<div class="col-sm-8">
										<select class="form-control">

											<option value="0">Alle</option>
											<option value="1">Francesco Costanzo</option>
											<option value="2">Matteo Bianchi</option>
											<option selected="selected" value="5">Daniela Diomede</option>
											<option value="6">Davide Gramuglia</option>
											<option value="7">Vittorio Fantozzi</option>
											<option value="9">Tamara Martino</option>
											<option value="8">Davide Colombo</option>
										</select>
									</div>
								</div>
								<div class="form-row form-subheading">
									<strong>Terminmerkmale:</strong>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<p><strong>Gewünschte Behandlung:</strong></p>
									</div>
									<div class="col-sm-4">
									</div>
									<div class="col-sm-8">
										<ul class="list-unstyled">
											<li>
												<div class="radio">
													<input id="radio0" type="radio" name="a">
													<label for="radio0">Nachbehandlung (2. Termin) ca. 60 Min.</label>
												</div>
											</li>
											<li>
												<div class="radio">
													<input id="radio1" type="radio" name="a">
													<label for="radio1">Wiederholungssitzung (nach Bedarf) ca. 60 Min.</label>
												</div>
											</li>
											<li>
												<div class="radio">
													<input id="radio3" type="radio" name="a">
													<label for="radio3">Massage 60 Min.</label>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<hr class="black">
								<div class="form-group">
									<label class="col-sm-4 control-label pt-0-sm">Termindauer:
										<br><span class="des"> in Minuten</span></label>
									<div class="col-sm-8">
										<ul class="list-inline">
											<li>
												<input type="text" class="form-control control-short" name="">
											</li>
											<li class="pr-20-xs">
												<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-question-circle"></i></a>
											</li>
											<li>
												<a href="#">Erweitert</a>
											</li>
										</ul>
										<span class="help-block">(max. 60 Minuten frei)</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Uhrzeit:</label>
									<div class="col-sm-8">
										<ul class="list-inline">
											<li class="pr-45-xs">
												<input type="text" class="form-control control-short" name="">
											</li>

											<li>
												<div class="checkbox">
													<input id="ganztagig" type="checkbox">
													<label for="ganztagig">Ganztägig</label>
												</div>
											</li>
										</ul>

									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Datum:</label>
									<div class="col-sm-8">
										<ul class="list-inline">
											<li class="pr-45-xs">
												<input type="text" class="form-control control-short" name="">
											</li>

											<li>
												<div class="checkbox">
													<input id="terminserie" type="checkbox">
													<label for="terminserie">Terminserie</label>
												</div>
											</li>
										</ul>

									</div>
								</div>
								<hr class="black">
								<div class="form-group">
									<div class="col-sm-8 col-sm-offset-4">
										<ul class="list-inline">
											<li>
												<div class="checkbox">
													<input id="bearbeitet" type="checkbox">
													<label for="bearbeitet">Bearbeitet</label>
												</div>
											</li>
											<li>
												<div class="checkbox">
													<input id="manuell" type="checkbox">
													<label for="manuell">Manuell</label>
												</div>
											</li>

										</ul>
									</div>
								</div>
								<div id="group-terminserie" class="collapse">
									<div class="form-row form-subheading">
										<strong>Terminserie:</strong>
									</div>

									<ul class="list-inline">
										<li>
											<div class="radio">
												<input id="radio4" type="radio" name="c">
												<label for="radio4">Jede Woche</label>
											</div>
										</li>
										<li>
											<div class="radio">
												<input id="radio5" type="radio" name="c">
												<label for="radio5">Alle</label>
											</div>
										</li>
										<li>
											<div class="form-inline">
												<input type="text" class="form-control control-short-x" name="">
												<label> Wochen</label>
											</div>
										</li>
									</ul>

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
									<div class="form-group">
										<label class="col-sm-4 control-label">Beginn:</label>
										<div class="col-sm-8">
											<input type="text" class="form-control control-short" name="">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label">Ende:</label>
										<div class="col-sm-8">
											<div class="radio mb-10-xs">
												<input id="KeinEnde" type="radio" name="a">
												<label for="KeinEnde">Kein Ende</label>
											</div>
											<ul class="list-inline">
												<li>
													<div class="radio">
														<input id="nach" type="radio" name="a">
														<label for="nach">nach</label>
													</div>
												</li>
												<li>
													<input type="text" class="form-control control-short-x" name="">
												</li>
												<li>
													Terminen
												</li>
											</ul>
											<ul class="list-inline">
												<li>
													<div class="radio">
														<input id="am" type="radio" name="a">
														<label for="am">am</label>
													</div>
												</li>
												<li>
													<input type="text" class="form-control control-short" name="">
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
@endsection