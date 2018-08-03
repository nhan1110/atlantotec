@extends('shares.master')
@section("main-content") 
<div class="top-page">
	<div class="entry-header">
		<h1 class="entry-header-title">Adressen</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li class="">Einstellungen</li>
			<li class="active">Adressen</li>
		</ol>
	</div>
</div>
<div class="content-page">
	<div class="row">
	<form class="form-horizontal form-search pt-20-xs">
	<div class="col-md-1">
	</div>
	<div class="col-md-10">
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead></thead>
			<tbody>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Freischalten:</p>
					</td>
					<td class="col-md-7">
						<ul class="list-unstyled search-type">
							<li class="col-md-2">
								<div class="radio">
									<input id="type-1" type="radio" name="search-type" value="1" checked>
									<label for="type-1">Ja</label>
								</div>
							</li>
							<li class="col-md-2">
								<div class="radio">
									<input id="type-2" type="radio" value="2" name="search-type">
									<label for="type-2">Nein</label>
								</div>
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Authentifizierung:</p>
					</td>
					<td class="col-md-7">
						<ul class="list-unstyled search-type">
							<li>
								<div class="radio">
									<input id="type-6" type="radio" name="search-type-2" value="1" checked>
									<label for="type-6">Ohne Anmeldung</label>
								</div>
							</li>
							<li>
								<div class="radio">
									<input id="type-7" type="radio" value="2" name="search-type-2">
									<label for="type-7">Mit Kennwort</label>
								</div>
							</li>
							
							<li>
								<div class="radio">
									<input id="type-3" type="radio" value="3" name="search-type-2">
									<label for="type-3">Mit Benutzeranmeldung</label>
								</div>
							</li>
							<li>
								<div class="radio">
									<input id="type-4" type="radio" value="4" name="search-type-2">
									<label for="type-4">Mit SMS-TAN</label>
								</div>
							</li>
							<li>
								<div class="radio">
									<input id="type-5" type="radio" value="5" name="search-type-2">
									<label for="type-5">Per E-Mail (Double-Opt-In)</label>
								</div>
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Arbeitstage für Termin- und Storno-Deadline:</p>
					</td>
					<td class="col-md-7">
						<ul class="list-unstyled search-type">
							<li>
								<div class="col-md-1 checkbox">
									<input id="checkbox-1" type="checkbox">
									<label for="checkbox-1">Mo</label>
								</div>
							</li>
							<li>
								<div class="col-md-1 checkbox">
									<input id="checkbox-2" type="checkbox">
									<label for="checkbox-2">Di</label>
								</div>
							</li>
							
							<li>
								<div class="col-md-1 checkbox">
									<input id="checkbox-3" type="checkbox">
									<label for="checkbox-3">Mi</label>
								</div>
							</li>
							<li>
								<div class="col-md-1 checkbox">
									<input id="checkbox-4" type="checkbox">
									<label for="checkbox-4">Do</label>
								</div>
							</li>
							<li>
								<div class="col-md-1 checkbox">
									<input id="checkbox-5" type="checkbox">
									<label for="checkbox-5">Fr</label>
								</div>
							</li>
							<li>
								<div class="col-md-1 checkbox">
									<input id="checkbox-6" type="checkbox">
									<label for="checkbox-6">Sa</label>
								</div>
							</li>
							<li>
								<div class="col-md-1 checkbox">
									<input id="checkbox-7" type="checkbox">
									<label for="checkbox-7">So</label>
								</div>
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Terminbuchung möglich bis:</p>
					</td>
					<td class="col-md-7">
						<input class="col-md-2" type="text" name="text1" />
						<div class="col-md-2">
							<select name="select1">
								<option value="0">Stunden</option>
								<option value="1">Arbeitstage</option>
							</select>
						</div>
						<div class="col-md-2">
							vor Termin
						</div>
					</td>
				</tr>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Verschieben, Stornieren und Ändern:</p>
						<p class="text-right">möglich bis:</p>
					</td>
					<td class="col-md-7">
						<ul class="list-unstyled search-type">
							<li class="col-md-2">
								<div class="radio">
									<input id="type-8" type="radio" name="search-type-3" value="1" checked>
									<label for="type-8">Ja</label>
								</div>
							</li>
							<li class="col-md-2">
								<div class="radio">
									<input id="type-9" type="radio" value="2" name="search-type-3">
									<label for="type-9">Nein</label>
								</div>
							</li>
						</ul>
						<br />
						<div class="">
							<input class="col-md-2" type="text" name="text1" />
							<div class="col-md-2">
								<select name="select1">
									<option value="0">Stunden</option>
									<option value="1">Arbeitstage</option>
								</select>
							</div>
							<div class="col-md-2">
								vor Termin
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label>Anfragehinweis:</label>
						<textarea name="textarea1" id="textarea1" class="col-md-12">Sie erhalten in Kürze eine Terminbestätigung per E-Mail zugesendet.</textarea>
					</td>
				</tr>
				<tr>
					<td>
						<p class="text-right">Max. Buchungszeitraum:</p>
					</td>
					<td>
						<input class="col-md-2" type="text" name="text1" />
						<div class="col-md-3">
								ganze Monate

						</div>
						
					</td>
				</tr>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Terminanfrage mit Bestätigung:</p>
						<p class="text-right">Einstellung in alle Terminarten übernehmen?</p>
					</td>
					<td class="col-md-7">
						<ul class="list-unstyled search-type">
							<li class="col-md-2">
								<div class="radio">
									<input id="type-10" type="radio" name="search-type-4" value="1" checked>
									<label for="type-10">Ja</label>
								</div>
							</li>
							<li class="col-md-2">
								<div class="radio">
									<input id="type-11" type="radio" value="2" name="search-type-4">
									<label for="type-11">Nein</label>
								</div>
							</li>
						</ul><br />
						<ul class="list-unstyled search-type">
							<li class="col-md-2">
								<div class="radio">
									<input id="type-12" type="radio" name="search-type-5" value="1" checked>
									<label for="type-12">Ja</label>
								</div>
							</li>
							<li class="col-md-2">
								<div class="radio">
									<input id="type-13" type="radio" value="2" name="search-type-5">
									<label for="type-13">Nein</label>
								</div>
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Schaltfläche 'Weiterer Termin'</p>
					</td>
					<td class="col-md-7">
						<ul class="list-unstyled search-type">
							<li class="col-md-2">
								<div class="radio">
									<input id="type-14" type="radio" name="search-type-6" value="1" checked>
									<label for="type-14">Ja</label>
								</div>
							</li>
							<li class="col-md-2">
								<div class="radio">
									<input id="type-15" type="radio" value="2" name="search-type-6">
									<label for="type-15">Nein</label>
								</div>
							</li>
						</ul>
					</td>
				</tr>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Performance:</p>
					</td>
					<td class="col-md-7">
						<ul class="list-unstyled search-type">
							<li class="col-md-6">
								<div class="col-md-12 checkbox">
									<input id="checkbox-8" type="checkbox">
									<label for="checkbox-8">Online-Terminbuchung synchron aufbauen</label>
								</div>
							</li>
							
						</ul>
				</tr>
			</tbody>
		</table>
		</div>
		<div class="form-footer">
					<hr class="black">
					<div class="row">
						<div class="col-sm-8">
						</div>
						<div class="col-sm-2 text-right">
						<button class="btn btn-primary ml-10-xs">Abbrechen</button>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-secondary">Speichern</button>
						</div>
					</div>
				</div>
		</div>
		
			
			</form>
			<div class="col-md-1">
			</div>
			</div>
		
		
	</div>
</div>
@endsection
