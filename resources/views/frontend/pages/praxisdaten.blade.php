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
	<li class="active">Praxis</li>
</ol>

<div class="content-page">
	<form class="form-horizontal form-praxis">
		<div class="form-row">
			<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
			<div class="form-group">
				<label class="col-sm-4  control-label">Internet Adresse:</label>
				<div class="col-sm-8 ">
					<ul class="list-inline">
						<li>tl.doctena.de/</li>
						<li><input type="text" class="form-control" name=""></li>
					</ul>
				</div>
			</div>
			
		</div>
		<div class="form-row">
			<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
			
			<div class="form-group">
				<label class="col-sm-4 control-label">Name der Praxis:</label>
				<div class="col-sm-8"><input type="text" class="form-control" name=""></div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Beschreibung:</label>
				<div class="col-sm-8"><input type="text" class="form-control" name=""></div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label"></label>
				<div class="col-sm-8"><input type="text" class="form-control" name=""></div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Branche:</label>
				<div class="col-sm-8">
					<select class="form-control" name="">
						<option value="allg">Allgemein</option>
						<option selected="selected" value="doc">Medizin</option>
						<option value="wellness">Wellness</option>
						<option value="studio">Kosmetikstudios</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Standard-Adresse:</label>
				<div class="col-sm-8">
					<select class="form-control" name="">
						<option selected="selected" value="282995473">C/Hungría, 3., Fuenlabrada (Madrid)</option>
					</select>
					ESP-28943 Fuenlabrada (Madrid)<br>Homepage: https://www.atlantotec.com
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Individuelle E-Mail-Signatur:</label>
				<div class="col-sm-8">
					<ul class="list-inline">
						<li>
							<div class="radio">
								<input id="radio0" type="radio" name="a">
								<label for="radio0">Ja</label>
							</div>
						</li>
						<li>
							<div class="radio">
								<input id="radio01" type="radio" name="a">
								<label for="radio01">Nein</label>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="text-right">
			<hr class="black">
			<button type="reset" class="btn btn-primary">Speichern</button>
			<button type="reset" class="btn btn-default">Abbrechen</button>
		</div>
	</form>
</div>
<div class="bottom-page"></div>
@endsection
