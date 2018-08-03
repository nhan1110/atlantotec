@extends('shares.master')
@section("main-content") 
<div class="top-page">
	<div class="entry-header">
		<h1 class="entry-header-title">Arbeitszeiten</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('dayview') }}">Dashboard</a></li>
			<li class="active">Arbeitszeiten</li>
		</ol>
	</div>
</div>
<div class="content-page">
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
					<th class="col-check-all">
						<input class="check-all" id="check-all" type="checkbox">
					</th>
					<th>Tag</th>
					<th>Uhrzeit von</th>
					<th>Uhrzeit bis</th>
					<th>Terminarten</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="value-holder value-type-1">
							<input id="check-1" type="checkbox">
						</div>
					</td>
					<td><u>Montag</u><br>ab 26.04.2018</td>
					<td>09:00</td>
					<td>12:00</td>
					<td>
						<span class="value-type-heading">60 min</span><br>
						<strong>Terminmanager:</strong> <a href="">Test</a><br>
						<strong>Online-Terminbuchung:</strong> <a href="">Test</a><br>
						<strong>TL Soap</strong> <a href="">Test</a>, <a href="">Test</a>, <a href="">Test</a>
					</td>
					<td>
						<button type="button" class="btn btn-xs btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>
						<div class="value-holder value-type-2">
							<input id="check-1" type="checkbox">
						</div>
					</td>
					<td><u>Montag</u><br>ab 26.04.2018</td>
					<td>09:00</td>
					<td>12:00</td>
					<td>
						<span class="value-type-heading">60 min</span><br>
						<strong>Terminmanager:</strong> <a href="">Test</a><br>
						<strong>Online-Terminbuchung:</strong> <a href="">Test</a><br>
						<strong>TL Soap</strong> <a href="">Test</a>, <a href="">Test</a>, <a href="">Test</a>
					</td>
					<td>
						<button type="button" class="btn btn-xs btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="bottom-page"></div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Allgemein</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal form-arbeitszeiten">
					<div class="form-row form-heading">
						<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
						<div class="row">
							<div class="col-sm-3">
								<strong>fur Terminplan:</strong>
							</div>
							<div class="col-sm-9">
								<span>Danieka Diomede</span>
							</div>
						</div>
					</div>
					<div class="form-row">
						<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
						<div class="form-group">
							<div class="col-sm-3"></div>
							<div class="col-sm-9">
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
									<li>
										<div class="checkbox">
											<input id="checkbox18" type="checkbox">
											<label for="checkbox18">Alle</label>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="form-row">
						<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
						<div class="form-group">
							<label class="col-sm-3 control-label">Uhrzeit von:</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" value="09:00">
							</div>
							<label class="col-sm-1 col-md-2 col-md-1 control-label">bis:</label>
							<div class="col-sm-3 pl-0-sm">
								<input type="text" class="form-control" value="12:00">
							</div>
						</div>
					</div>
					<div class="form-row">
						<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
						<div class="form-group">
							<label class="col-sm-3 control-label">Farbe:</label>
							<div class="col-sm-3">
								<select class="form-control">
									<option s style="background-color: #ffffff">Weiß</option>
									<option value="F0F0F0" style="background-color: #F0F0F0">Grau</option>
									<option value="FFC0C0" style="background-color: #FFC0C0">Coral</option>
									<option value="FFE0C0" style="background-color: #FFE0C0">Orange</option>
									<option value="FFFFC0" style="background-color: #FFFFC0">Gelb</option>
									<option value="C0FFC0" style="background-color: #C0FFC0">Grün</option>
									<option value="C0FFFF" style="background-color: #C0FFFF">Blau</option>
									<option value="C0C0FF" style="background-color: #C0C0FF">Violet</option>
									<option value="FFC0FF" style="background-color: #FFC0FF">Pink</option>
								</select>
							</div>

						</div>
					</div>
					<div class="form-row">
						<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
						<div class="form-group">
							<label class="col-sm-3 control-label">Hinweistext:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" value="ATLANTE">
							</div>
						</div>
					</div>
					<div class="form-row">
						<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
						<div class="form-group">
							<label class="col-sm-3 control-label">Gruppe:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" value="ATLANTE">
							</div>
						</div>
					</div>
					<div class="mb-15-xs">
						<ul class="list-unstyled">
							<li>
								<div class="radio">
									<input id="radio0" type="radio" name="a">
									<label for="radio0">Allgemeine Arbeitszeit</label>
								</div>
							</li>
							<li>
								<div class="radio">
									<input id="radio1" type="radio" name="a">
									<label for="radio1">Spezieller Gültigkeitszeitraum</label>
								</div>
							</li>
						</ul>
					</div>
					<div class="form-row form-subheading">
						<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>	
						<a data-toggle="collapse" data-target="#demo" href="javascript:;" class="" aria-expanded="true"><strong>Spezieller Gültigkeitszeitraum</strong></a>
					</div>
					<div id="demo" class="collapse in pl-10-xs">
						<div class="mb-15-xs">
							<ul class="list-unstyled">
								<li>
									<div class="radio">
										<input id="radio2" type="radio" name="b">
										<label for="radio2">Allgemeine Arbeitszeit ergänzen </label>
									</div>
								</li>
								<li>
									<div class="radio">
										<input id="radio3" type="radio" name="b">
										<label for="radio3">Allgemeine Arbeitszeit ersetzen </label>
									</div>
								</li>
							</ul>
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
									<input type="text" class="form-control control-short" name="">
									<label> Wochen</label>
								</div>
							</li>
						</ul>
					</div>
					<div class="form-row form-subheading">
						<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>	
						<a data-toggle="collapse" data-target="#demo1" href="javascript:;" class="" aria-expanded="true">Spezieller Gültigkeitszeitraum</a>
					</div>
					<div id="demo1" class="collapse in pl-10-xs">
						<div class="list-date-time">
							<ul class="list-inline">
								<li>
									<div class="form-inline">
										<label>Gültig ab:</label>
										<input type="text" class="form-control" name="">
									</div>
								</li>
								<li class="divider">
									<a href="#"><img src="{{ asset('html/images/caltrans.png') }}"></a>
								</li>
								<li>
									<div class="form-inline">
										<label>bis:</label>
										<input type="text" class="form-control" name="">
									</div>
								</li>
								<li><a href="#" class="remove-item"><small>Löschen</small></a></li>
							</ul>
							<ul class="list-inline">
								<li>
									<div class="form-inline">
										<label>Gültig ab:</label>
										<input type="text" class="form-control" name="">
									</div>
								</li>
								<li class="divider">
									<a href="#"><img src="{{ asset('html/images/caltrans.png') }}"></a>
								</li>
								<li>
									<div class="form-inline">
										<label>bis:</label>
										<input type="text" class="form-control" name="">
									</div>
								</li>
								<li><a href="#" class="remove-item"><small>Löschen</small></a></li>
							</ul>
						</div>
						<p><a href="#" class="add-more"><small>Weiteren Gültigkeitszeitraum hinzufügen</small></a></p>
					</div>
					<hr class="black">
					<div class="form-row">
						<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Terminarten<span style="color:#ff0000;">*</span></th>
										<th class="text-center">Interner Terminmanager</th>
										<th class="text-center">Online-Terminbuchung</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<label class="ta0" for="cb_ta59741796" style="font-weight: bold; ">Atlaskorrektur</label>
										</td>
										<td align="center">
											<input type="checkbox" name="cb_tai" id="cb_tai59741796" value="59741796" checked="checked" onclick="CB_Check_ZiTa()">
										</td>
										<td align="center">
											<input type="checkbox" name="cb_tae" id="cb_tae59741796" value="59741796" checked="checked" onclick="CB_Check_ZiTa()">
										</td>
									</tr>
									<tr>
										<td>
											<label class="ta0" style="font-weight: 200; " for="cb_ta59741796">Massage 60</label>
										</td>
										<td align="center">
											<input type="checkbox" name="cb_tai" id="cb_tai59741796" value="59741796"  onclick="CB_Check_ZiTa()">
										</td>
										<td align="center">
											<input type="checkbox" name="cb_tae" id="cb_tae59741796" value="59741796" onclick="CB_Check_ZiTa()">
										</td>
									</tr>
									<tr>
										<td>
											<label class="ta0" style="font-weight: 200; " for="cb_ta59741796">Nachbehandlung</label>
										</td>
										<td align="center">
											<input type="checkbox" name="cb_tai" id="cb_tai59741796" value="59741796"  onclick="CB_Check_ZiTa()">
										</td>
										<td align="center">
											<input type="checkbox" name="cb_tae" id="cb_tae59741796" value="59741796"  onclick="CB_Check_ZiTa()">
										</td>
										
									</tr>
									<tr>
										<td>
											<label class="ta0" style="font-weight: 200; " for="cb_ta59741796">Wiederholungssitzung</label>
										</td>
										<td align="center">
											<input type="checkbox" name="cb_tai" id="cb_tai59741796" value="59741796"  onclick="CB_Check_ZiTa()">
										</td>
										<td align="center">
											<input type="checkbox" name="cb_tae" id="cb_tae59741796" value="59741796"  onclick="CB_Check_ZiTa()">
										</td>
										
									</tr>
									<tr>
										<td>
											<label class="ta0" for="cb_ta59741796" style="font-weight: bold; ">WS_Atlaskorrektur</label>
										</td>
										<td align="center">
											<input type="checkbox" name="cb_tai" id="cb_tai59741796" value="59741796" onclick="CB_Check_ZiTa()">
										</td>
										<td align="center">
											<input type="checkbox" name="cb_tae" id="cb_tae59741796" value="59741796" onclick="CB_Check_ZiTa()">
										</td>	
									</tr>
								</tbody>
							</table>
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