@extends('shares.master')
@section("main-content") 
<div class="top-page">
	<div class="row">
		<div class="col-md-12">
			<ul class="tab-menu list-inline menu-right pull-left" style="bottom: -15px;">
				<li class="item"><a class="tag" data-toggle="tab" href="#allgemein">Allgemein</a></li>
				<li class="item"><a class="tag" data-toggle="tab" href="#erweitert">Erweitert</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="content-page">
	<div class="row">
		<div class="col-md-12"> 
			<div class="tab-content" style="padding: 20px 0;">
				<div id="allgemein" class="tab-pane fade in active">
				   	<div class="row">
				   		<div class="col-md-3"></div>
				   		<div class="col-md-9">
				   			<strong>für Terminplan:	Daniela Diomede</strong>
				   		</div>
				   	</div>
				   	<hr class="black">
				   	<div class="row">
				   		<div class="col-md-3"></div>
				   		<div class="col-md-9">
				   			<div class="row form-group">
				   				<div class="col-md-2">
				   					<p class="md-text-right"><strong>Wochentage:</strong></p>
				   				</div>
				   				<div class="col-md-6">
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
							<div class="row form-group">
								<div class="col-md-4">
									<div class="row">
						   				<div class="col-md-6">
						   					<p class="md-text-right"><strong>Uhrzeit von :</strong></p>
						   				</div>
						   				<div class="col-md-6">
						   					<input type="text" class="form-control" name="">
						   				</div>
						   			</div>
								</div>
								<div class="col-md-4">
									<div class="row">
						   				<div class="col-md-6">
						   					<p class="md-text-right"><strong>bis:</strong></p>
						   				</div>
						   				<div class="col-md-6">
						   					<input type="text" class="form-control" name="">
						   				</div>
						   			</div>
								</div>
							</div>
							<div class="row form-group">
				   				<div class="col-md-2">
				   					<p class="md-text-right"><strong>Farbe:</strong></p>
				   				</div>
				   				<div class="col-md-6">
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
				   			<div class="row form-group">
				   				<div class="col-md-2">
				   					<p class="md-text-right"><strong>Hinweistext:</strong></p>
				   				</div>
				   				<div class="col-md-6">
				   					<input type="text" class="form-control" name="">
				   				</div>
				   			</div>
				   			<div class="row form-group">
				   				<div class="col-md-2">
				   					<p class="md-text-right"><strong>Gruppe:</strong></p>
				   				</div>
				   				<div class="col-md-6">
				   					<input type="text" class="form-control" name="">
				   				</div>
				   			</div>
				   		</div>
				   	</div>
				   	<ul>
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
					<hr class="black">
					<p><a data-toggle="collapse" data-target="#demo" href="javascript:;" class="collapsed" aria-expanded="true">Spezieller Gültigkeitszeitraum</a></p>
					<div id="demo" class="collapse in">
					    <ul>
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
									<input type="text" class="form-control" name="">
									<label> Wochen</label>
								</div>
						    </li>
						</ul>
						<hr class="black">
						<p><a data-toggle="collapse" data-target="#demo1" href="javascript:;" class="collapsed" aria-expanded="true">Spezieller Gültigkeitszeitraum</a></p>
						<div id="demo1" class="collapse in">
							<ul class="list-inline">
							    <li>
							        <div class="form-inline">
							        	<label>Gültig ab:</label>
										<input type="text" class="form-control" name="">
									</div>
							    </li>
							    <li>
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
							    <li>
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
							<p><a href="#" class="add-more"><small>Weiteren Gültigkeitszeitraum hinzufügen</small></a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="table-responsive">
								<table cellpadding="0" cellspacing="0" border="0" class="table">
								    <thead>
								    	<th>Terminarten<span style="color:#ff0000;">*</span></th>
							            <th class="text-center">Interner Terminmanager</th>
							            <th class="text-center">Online-Terminbuchung</th>
							            <th class="text-center">TLSoap</th>
								    </thead>
								    <tbody>
								    	<?php for($i = 0; $i < 4; $i++): ?>
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
									            <td align="center">
									                <input type="checkbox" name="cb_taz178560802" id="cb_taz59741796_178560802" value="59741796" onclick="CB_Check_ZiTa()">
									            </td>
									        </tr>
									    <?php endfor; ?>
								    </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div id="erweitert" class="tab-pane fade">
				    <div class="row">
				    	<div class="col-md-2">
				    		<p class="md-text-right"><strong>Cluster:</strong></p>
				    	</div>
				    	<div class="col-md-6">
				    		<div class="checkbox">
		                        <input id="checkbox111" type="checkbox">
		                        <label for="checkbox111">Neue Termine immer an vorhandene Termine anhängen</label>
	                    	</div>
	                    	<ul>
							    <li>
							        <div class="radio">
							            <input id="radio211" type="radio" name="d">
							            <label for="radio211">Kein Starttermin </label>
							        </div>
							    </li>
							    <li>
							        <div class="radio">
							            <input id="radio311" type="radio" name="d">
							            <label for="radio311">Starttermin: <input type="" name="">  Uhr</label>
							        </div>
							    </li>
							    <li>
							        <div class="radio">
							            <input id="radio411" type="radio" name="d">
							            <label for="radio411">Freier Starttermin </label>
							        </div>
							    </li>
							</ul>
				    	</div>
				    </div>
				    <hr class="black">
				    <div class="row form-group">
				    	<div class="col-md-2">
				    		<p class="md-text-right"><strong>Anteil an Prioritäts- Terminen:</strong></p>
				    	</div>
				    	<div class="col-md-6">
				    		<div class="form-inline">
								<input type="number" class="form-control" name="">
								<label> in Prozent (%)</label>
							</div>
				    	</div>
				    </div>
				    <div class="row form-group">
				    	<div class="col-md-2">
				    		<p class="md-text-right"><strong>Arbeitszeitende:</strong></p>
				    	</div>
				    	<div class="col-md-6">
				    		<div class="form-inline">
								<select class="form-control" style="min-width: 350px;">
								    <option value="0">Automatisch</option>
								    <option value="1">Zeitüberschreitung zulassen</option>
								    <option value="2">Exakt einhalten</option>
								</select>
							</div>
				    	</div>
				    </div>
				    <div class="row form-group">
				    	<div class="col-md-2">
				    		<p class="md-text-right"><strong>Adresse:</strong></p>
				    	</div>
				    	<div class="col-md-6">
				    		<div class="form-inline">
								<select class="form-control" style="min-width: 350px;">
								    <option selected="selected" value="59741089">Via Giuseppe Motta 22, Chiasso (TI)</option>
								</select>
							</div>
							<div style="height: 10px;"></div>
							<p>
								Via Giuseppe Motta 22<br/>
								CH-6830 Chiasso (TI)<br/>
								Tel.: 0041 91 608 30 30
							</p>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bottom-page">	
</div>
@endsection