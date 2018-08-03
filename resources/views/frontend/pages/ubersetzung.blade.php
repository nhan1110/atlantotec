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
		<div class="col-md-6"><p><strong>Übersetzung</strong></p></div>
		<div class="col-md-6 text-right">für Terminplan:<strong> Daniela Diomede</strong></div>
	</div>
</div>
<ol class="breadcrumb">
	<li><a href="">Einstellungen</a></li>
	<li><a href="">Erweitert</a></li>
	<li class="active">Übersetzung</li>
</ol>
<div class="content-page">
	<div class="filter">
		
		<form>
			<div class="row">
				
				<div class="col-md-8">
					<div class="form-group">
						<ul class="list-inline">
							<li><label>Stammdaten:</label></li>
							<li><select class="form-control">
								<option selected="selected" value="bs">Sprache</option>
								<option value="da">Dänisch</option>
								<option value="en">Englisch</option>
								<option value="fr">Französisch</option>
								<option value="it">Italienisch</option>
								<option value="nl">Niederländisch</option>
								<option value="pt">Portugiesisch (Portugal)</option>
								<option value="sr">Serbisch</option>
								<option value="sk">Slowakisch</option>
								<option value="si">Slowenisch</option>
								<option value="es">Spanisch</option>
								<option value="ar">Spanisch (Argentinien)</option>
								<option value="cz">Tschechisch</option>
							</select></li>
						</ul>
						
					</div>
				</div>
				<div class="col-md-4 text-right">
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Auswahl</button>
					</div>
				</div>
			</div>
		</form>
		
	</div>
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>
						Praxis - Feld</th>
					<th>Deutsch (Original)</th>
					<th>Bosnisch</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="">Name der Praxis</a></td>
					<td>ATLANTOtec España SA</td>
					<td></td>
					<td>
						<button type="button" class="btn btn-xs btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td><a href="">Name der Praxis</a></td>
					<td></td>
					<td>
						
						<div align="center">
						<p><b>Willkommen bei unserer Online-Terminvereinbarung!</b></p>
						<p>Mit dieser Online-Agenda können Sie sich selbständig und einfach<br />einen Termin in unsere Agenda buchen, während 24 Stunden pro Tag.
						<p><a href="https://www.atlantotec.com/de/dauer-kosten-atlaskorrektur" target="_blank">Behandlungskosten</a></p>
						<p><a href="https://www.atlantotec.com/de/grundlagen/atlaskorrektur-kontraindikationen" target="_blank">Kontraindikationen</a></p>
						</div>
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
@endsection
	