@extends('shares.master')
@section("main-content") 
<div class="add-bar-system">
	<div class="row">
		<div class="col-md-6"><p>System-Nr.: 14949</p></div>
		<div class="col-md-6 text-right">atlantotec-chiasso: atlantotec-chiasso <a href="#"> (Abmelden)</a> </div>
	</div>
</div>
<div class="add-bar-termine">
	<div class="row">
		<div class="col-md-6"><p><strong>Kennwort ändern</strong></p></div>
		<div class="col-md-6 text-right">für Praxis:<strong> atlantotec-fuenlabrada</strong></div>
	</div>
</div>
<ol class="breadcrumb">
	<li><a href="">Einstellungen</a></li>
	<li><a href="">Kennwort ändern</a></li>
</ol>

<div class="content-page">
	<form class="form-horizontal form-praxis">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-row">
					<div class="form-group">
						<label class="col-sm-4 control-label">Benutzername (E-Mail):</label>
						<div class="col-sm-8"><input type="text" readonly class="form-control" name="" value="atlantotec-fuenlabrada"></div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Aktuelles Kennwort:</label>
						<div class="col-sm-8"><input type="text" class="form-control" name=""></div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Neues Kennwort:</label>
						<div class="col-sm-8"><input type="text" class="form-control" name=""></div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Kennwort wiederholen:</label>
						<div class="col-sm-8"><input type="text" class="form-control" name=""></div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<h4><b>Kennwort ändern</b></h4>
			    <p>
			    	Geben Sie bitte zunächst Ihr <b>aktuelles Kennwort</b> ein.
			        <br>
			        <br> Anschließend geben Sie das gewünschte <b>neue Kennwort</b> ein und <b>wiederholen</b> dies noch einmal.
			        <br>
			        <br> Klicken Sie dann am Ende der Seite auf <b>Speichern</b>.
			    <p>
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
