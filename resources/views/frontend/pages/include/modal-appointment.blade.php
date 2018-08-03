<div class="modal fade in" id="modal-appointment" tabindex="-1" role="dialog" aria-labelledby="modal-appointment">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modal-appointment">Appointment</h4>
			</div>
			<div class="modal-body">
				<ul class="nav nav-tabs tab-menu">
                    <li class="item" data-for="#tag"><a data-toggle="tab" href="#termin" class="tag">Termin</a></li>
                    <li class="item" data-for="#woche"><a data-toggle="tab" href="#nachrichten" class="tag">Nachrichten</a></li>
                </ul>
                <div class="tab-content pt-20-xs">
                    <div id="termin" class="tab-pane fade in active">
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
											<select class="form-control" name="treater" required="">
												<option >Alle</option>
												<?php if(isset($userGroup) && $userGroup != null): ?>
													<?php foreach ($userGroup as $key => $item): ?>
														<option value="<?php echo $item->id; ?>"><?php echo $item->group_name; ?></option>
													<?php endforeach; ?>
												<?php endif; ?>
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
					<div id="nachrichten" class="tab-pane fade">
						<p><a href="#" class="sendmail"><i class="fa fa-envelope" aria-hidden="true"></i> Neue Nachricht senden</a></p>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th></th>
										<th>Datum</th>
										<th>Betreff</th>
										<th>An</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td>Datum</td>
										<td>Betreff</td>
										<td>An</td>
									</tr>
									<tr>
										<td><i class="online fa fa-check-circle" aria-hidden="true"></i></td>
										<td>24.05.2018 10:01:06</td>
										<td>Recordatorio</td>
										<td>SMS: 0034645263886</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>