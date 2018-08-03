@extends('shares.master')
@section("main-content") 
<div class="top-page">
	<div class="entry-header">
		<h1 class="entry-header-title">Praxisdaten</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li class="">Erweitert</li>
			<li class="active">Praxis</li>
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
			<thead>
				
			</thead>
			<tbody>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Internet Adresse:</p>
					</td>
					<td class="col-md-7">
						<span>tl.doctena.de/</span><input type="text" class="col-md-6" />
					</td>
				</tr>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Name der Praxis	:</p>
					</td>
					<td class="col-md-7">
						<input value="ATLANTOtec España SA" type="text" class="col-md-10" />
					</td>
				</tr>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Beschreibung:</p>
					</td>
					<td class="col-md-7">
						<input type="text" class="col-md-10" />
						<input type="text" class="col-md-10" />
					</td>
				</tr>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Branche:</p>
						
					</td>
					<td class="col-md-7">
						
						<div class="">
							<div class="col-md-8">
								<select name="select1">
									<option value="allg">Allgemein</option>
									<option selected="selected" value="doc">Medizin</option>
									<option value="wellness">Wellness</option>
									<option value="studio">Kosmetikstudios</option>
								</select>
								
							</div>
							
						</div>
					</td>
				</tr>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Standard-Adresse:</p>
						
					</td>
					<td class="col-md-7">
						
						<div class="">
							<div class="col-md-8">
								<select name="select1">
									<option value="1">C/Hungría, 3., Fuenlabrada (Madrid)</option>
									
								</select>
								<p>ESP-28943 Fuenlabrada (Madrid)<br />
									Homepage: https://www.atlantotec.com</p>
							</div>
							
						</div>
					</td>
				</tr>
				<tr>
					<td class="col-md-5">
						<p class="text-right">Individuelle E-Mail-Signatur:</p>
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
<div class="bottom-page"></div>
@endsection	
