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
				<table class="table table-bordered table-day">
				<thead>
					<tr>
						<th class="text-center">
							<p><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i></a></p>
							<p><a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></p>
						</th>
						<th>
							<div class="checkbox">
								<input id="checkbox11" type="checkbox">
								<label for="checkbox11"></label>
							</div>
						</th>
						<th>
							<i class="fa fa-plus-circle" aria-hidden="true"></i>
						</th>
						<th>
							<i class="fa fa-circle" aria-hidden="true"></i>
						</th>
						<th>
							<i class="fa fa-globe" aria-hidden="true"></i>
						</th>
						<th>
							Termin	
						</th>
						<th>
							Kürzel
						</th>
						<th>
							Name
						</th>
						<th>
							Bemerkung
						</th>
						<th>
							
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="status-atlas">
						<td>
							11:00
						</td>
						<td>
							<div class="checkbox">
								<input id="checkbox12" type="checkbox">
								<label for="checkbox12"></label>
							</div>
						</td>
						<td>
							
						</td>
						<td>
							
							<div class="form-group">
								<i class="online fa fa-circle" aria-hidden="true"></i>
					            <input type="checkbox" name="fancy-checkbox-default" id="fancy-checkbox-default" autocomplete="off" checked/>
					            <div class="btn-group">
					                <label for="fancy-checkbox-default" class="btn status btn-default">
					                    <span class="glyphicon glyphicon-ok"></span>
					                    <span> </span>
					                </label>  
					            </div>
					        </div>
						</td>
						<td>
							<i class="fa fa-globe" aria-hidden="true"></i>
						</td>
						<td>
							<a href="#" data-toggle="modal" data-target="#modal-appointment">10:00 - 11:30</a><img src="">
							<a href="" class="pull-right"><i class="fa fa-clone" aria-hidden="true"></i></a>
						</td>
						<td>
							ATLAS
						</td>
						<td>
							<strong>garcia lopez , ana isabel</strong><br>Telefon: 676036057
						</td>
						<td>
							ATLAS
						</td>
						<td>
							<button type="button" class="btn btn-xs btn-primary btn-lg" data-toggle="modal" data-target="#modal-appointment">
							  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							</button>
						</td>
					</tr>
					<tr class="status-60min">
						<td>
							11:00
						</td>
						<td>
							<div class="checkbox">
								<input id="checkbox12" type="checkbox">
								<label for="checkbox12"></label>
							</div>
						</td>
						<td>
							
						</td>
						<td>
							
							<div class="form-group">
								<i class="online fa fa-circle" aria-hidden="true"></i>
					            <input type="checkbox" name="fancy-checkbox-default-1" id="fancy-checkbox-default-1" autocomplete="off" />
					            <div class="btn-group">
					                <label for="fancy-checkbox-default-1" class="btn status btn-default">
					                    <span class="glyphicon glyphicon-ok"></span>
					                    <span> </span>
					                </label>
					            </div>
					        </div>
						</td>
						<td>
							<i class="fa fa-globe" aria-hidden="true"></i>
						</td>
						<td>
							<a href="#" data-toggle="modal" data-target="#modal-appointment">10:00 - 11:30</a><img src="">
							<a href="" class="pull-right"><i class="fa fa-clone" aria-hidden="true"></i></a>
						</td>
						<td>
							NB
						</td>
						<td>
							<strong>roman , ana</strong><br>
							Telefon: 685975420<br>
							Interne Bemerkung: intentar adelantar
						</td>
						<td>
							60 MIN
						</td>
						<td>
							<button type="button" class="btn btn-xs btn-primary btn-lg" data-toggle="modal" data-target="#modal-appointment">
							  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<div class="bottom-page"></div>
@include('frontend.pages.include.modal-appointment')
@endsection
