@extends('shares.layout')
@section('main-content')
	<div class="row text-center pt-30-xs pb-30-xs">
		<div class="col-md-8 col-md-offset-2">
			<h2>Welcome at our online booking system!</h2>
			<p class="mb-25-xs">With this online-agenda you are able to book an appointment independently and easily in our agenda, 24 hours a day.</p>
			<ul class="list-inline list-btn">
				<li><a class="btn btn-default" href="https://www.atlantotec.com/en/duration-cost-atlas-treatment" target="_blank">Costs of the treatment</a></li>
				<li><a class="btn btn-primary" href="https://www.atlantotec.com/en/fundamentals/atlas-correction-contraindications" target="_blank">Contraindications</a></li>
			</ul>
		</div>
	</div>
	<div class="step-question">
		<div id="questions">
			<div id="question-1" class="question open">
				<div class="question-title">
					<h4>1. Fragen zum Termin</h4>
					<p>Bitte treffen Sie eine Auswahl:</p>
				</div>
				<div class="question-content">
					<div class="row">
						<div class="col-sm-12">
							<p><strong>Gewünschte Behandlung</strong></p>
							<ul class="list-unstyled">
								<li>
									<div class="radio">
										<input id="radio0" type="radio" name="behandlung">
										<label for="radio0">Atlaskorrektur (1. Termin) - ca. 90 Min <span data-toggle="tooltip" data-placement="top" title="Tooltip on left"><i class="fa fa-question-circle"></i></span></label>
									</div>
								</li>
								<li>
									<div class="radio">
										<input id="radio1" type="radio" name="behandlung">
										<label for="radio1">Nachbehandlung (2. Termin) - ca. 60 Min <span data-toggle="tooltip" data-placement="top" title="Tooltip on left"><i class="fa fa-question-circle"></i></span></label>
									</div>
								</li>
								<li>
									<div class="radio">
										<input id="radio3" type="radio" name="behandlung">
										<label for="radio3">Wiederholungssitzung (nach Bedarf) - ca. 60 Min <span data-toggle="tooltip" data-placement="top" title="Tooltip on left"><i class="fa fa-question-circle"></i></span></label>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div><!--#1-->
			<div id="question-2" class="question">
				<div class="question-title">
					<h4>2. Fragen zum Termin</h4>
					<p>Bitte treffen Sie eine Auswahl:</p>
				</div>
				<div class="question-content">
					<div class="row">
						<div class="col-sm-12">
							<p><strong> Bitte SORGFÄLTIG lesen</strong></p>
							<p>Haben Sie schon die eventuellen&nbsp;<a href="https://www.atlantotec.com/de/grundlagen/atlaskorrektur-kontraindikationen" target="_blank" rel="noopener">Kontraindikationen</a>&nbsp;gelesen?</p>
							<p>Der eingegebene Name bei der Buchung soll auch der Name der zu behandelnden Person sein.</p>
							<p>Bitte beachten Sie zudem, dass Sie pro&nbsp;<b>1 Erwachsenen = 1 separate Terminbuchung</b>&nbsp;erfassen müssen. Für&nbsp;<b>2 Erwachsene</b>&nbsp;sind also&nbsp;<b>2 Terminbuchungen</b>&nbsp;notwendig! Bis 4 Kinder (max. 14 Jahre alt) können auf 1 Terminbuchung genommen werden.</p>
							<p>Die Behandlung wird jeweils beim ersten Termin&nbsp;<b>in bar</b>&nbsp;bezahlt:&nbsp;<a href="https://www.atlantotec.com/de/dauer-kosten-atlaskorrektur" target="_blank" rel="noopener">Behandlungskosten</a></p>
							<p>Informationen zur Hinfahrt wie Wegbeschreibung, Fahrplan und Übernachtungsmöglichkeiten finden Sie auf der&nbsp;<a href="https://www.atlantotec.com/de/atlastherapeuten-atlastechniker" target="_blank" rel="noopener">Kontaktseite</a>&nbsp;des von Ihnen gebuchten Atlastechnikers.</p>
							<p>Frauen sind gebeten, aus technischen Gründen,&nbsp;<b>VOLLKOMMEN</b>ungeschminkt zu erscheinen.</p>
							<p>Nach Ihrer Buchung erhalten Sie sofort eine Bestätigungs-E-Mail. Damit ist die Reservierung abgeschlossen und bei uns registriert.</p>
							<p>Bei nicht Erhalten der Bestätigungs-E-Mail haben Sie entweder Ihre E-Mail Adresse falsch angegeben, oder Sie haben die Buchung nicht bis zum Abschluss gebracht. Überprüfen Sie bitte deswegen genau Ihre E-Mail Adresse beim Ausfüllen!</p>
							<p>Wir bitten Sie, die Daten der E-Mail-Bestätigung zu speichern und sorgfältig aufzuheben.&nbsp;<b>NUR</b>&nbsp;mit dem dort angegebenen&nbsp;<b>Link</b>können Sie, bei Bedarf, Ihren Termin ändern oder absagen.</p>
							<p><b>Wir akzeptieren keine Änderung /Annullierung von Terminen per E-Mail.</b></p>
							<p><b>Doppelbuchung vermeiden!</b>: Wenn Sie bereits einen Termin gebucht haben, Ihren Termin aber auf ein anderes Datum verschieben möchten, erfassen Sie bitte&nbsp;<b>KEINE</b>&nbsp;neue Buchung, sondern verschieben den bestehenden Termin direkt über den&nbsp;<b>Link</b>&nbsp;in der Bestätigungs-E-Mail schnell und einfach.</p>
							<div class="radio">
								<input id="radio01" type="radio" name="a" checked>
								<label for="radio01">Ich habe die Informationen gelesen</label>
							</div>
						</div>
					</div>

				</div>
			</div><!--#2-->
			<div id="question-3" class="question">
				<div class="question-title">
					<h4>3. Terminauswahl</h4>
					<p>Bitte wählen Sie den für Sie passenden Termin aus.</p>
					<p><span class="text-danger">Wir bitten um pünktliches Erscheinen, maximal 15 Minuten vor dem Termin. Bei Verspätungen über 15 Minuten ist der obligate Ablauf der Behandlung nicht mehr zu gewährleisten.</span></p>
				</div>
				<div class="question-content">
					<div class="row">
						<div class="col-sm-5">
							<div class="datetimepicker-box">
								<input id="datetimepicker" type="text" >
							</div>
							<ul class="list-unstyled list-time-label">
								<li><span class="label label-1"></span> Heute</li>
								<li><span class="label label-2"></span> Freie Termine</li>
								<li><span class="label label-3"></span> Ausgewählter Tag</li>
							</ul>
						</div>
						<div class="col-sm-5">
							<p><strong>Freie Termine für Montag, 02.07.2018:</strong></p>
							<div class="radio">
								<input id="time" type="radio" name="time">
								<label for="time">08:00</label>
							</div>
							<div class="radio">
								<input id="time1" type="radio" name="time">
								<label for="time1">09:00</label>
							</div>
							<div class="radio">
								<input id="time2" type="radio" name="time">
								<label for="time2">10:00</label>
							</div>
						</div>
					</div>

				</div>
			</div><!--#3-->
			<div id="question-4" class="question">
				<div class="question-title">
					<h4>4.  Persönliche Daten</h4>
					<p>Die mit einem * gekennzeichneten Felder sind Pflicht.</p>
					
				</div>
				<div class="question-content">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-4 control-label">*Anrede:</label>
							<div class="col-sm-8 col-md-5">
								<select class="form-control">
									<option selected="selected" value="0">bitte wählen</option>
									<option value="1">Frau</option>
									<option value="2">Herr</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">*Vorname:</label>
							<div class="col-sm-8 col-md-5">
								<input type="text" class="form-control" name="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">*Name:</label>
							<div class="col-sm-8 col-md-5">
								<input type="text" class="form-control" name="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Ort:</label>
							<div class="col-sm-8 col-md-5">
								<input type="text" class="form-control" name="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">*Telefon:</label>
							<div class="col-sm-8 col-md-5">
								<input type="text" class="form-control" name="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">*E-Mail:</label>
							<div class="col-sm-8 col-md-5">
								<input type="text" class="form-control" name="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Bemerkung:</label>
							<div class="col-sm-8 col-md-5">
								<textarea class="form-control" name=""></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Terminerinnerung per E-Mail:</label>
							<div class="col-sm-8 col-md-5">
								<select class="form-control">
									<option value="0">keine</option>
									<option selected="selected" value="1">1 Stunde vor Termin</option>
									<option value="2">2 Stunden vor Termin</option>
									<option value="4">4 Stunden vor Termin</option>
									<option value="8">8 Stunden vor Termin</option>
									<option value="12">12 Stunden vor Termin</option>
									<option value="24">1 Tag vor Termin</option>
									<option value="48">2 Tage vor Termin</option>
									<option value="72">3 Tage vor Termin</option>
									<option value="96">4 Tage vor Termin</option>
									<option value="120">5 Tage vor Termin</option>
									<option value="144">6 Tage vor Termin</option>
									<option value="168">1 Woche vor Termin</option>
									<option value="336">2 Wochen vor Termin</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-4 control-label">Terminerinnerung per SMS:</label>
							<div class="col-sm-8 col-md-5">
								<select class="form-control">
									<option selected="selected" value="0">keine</option>
									<option value="1">1 Stunde vor Termin</option>
									<option value="2">2 Stunden vor Termin</option>
									<option value="4">4 Stunden vor Termin</option>
									<option value="8">8 Stunden vor Termin</option>
									<option value="12">12 Stunden vor Termin</option>
									<option value="24">1 Tag vor Termin</option>
									<option value="48">2 Tage vor Termin</option>
									<option value="72">3 Tage vor Termin</option>
									<option value="96">4 Tage vor Termin</option>
									<option value="120">5 Tage vor Termin</option>
									<option value="144">6 Tage vor Termin</option>
									<option value="168">1 Woche vor Termin</option>
									<option value="336">2 Wochen vor Termin</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							
							<div class="col-sm-8 col-sm-offset-4">
								<p>Durch Klicken auf "Weiter" akzeptiere ich die <a class="agb" href="https://www.doctena.com/doctena-terminland-de-terms-of-use/" target="_blank" rel="noopener">Allgemeinen Geschäftsbedingungen</a> und die <a class="ds_intern" href="https://tl.doctena.de/atlantotec_testsystem/policy.aspx?show=0&amp;m=20071&amp;lang=de" target="_blank" rel="noopener">Datenschutzerklärung</a>. Ich verstehe, das Doctena meine Daten zur Verwaltung von Terminen (Bestätigungen, Erinnerungen, Rückmeldungen) verwendet.</p>
								<div class="checkbox">
									<input id="bearbeitet" type="checkbox">
									<label for="bearbeitet">Ich stimme zu, dass Doctena meine medizinischen Daten verarbeitet</label>
								</div>
								<p class="pl-20-xs">Wir möchten Sie darüber informieren, dass der Arzt der Datenverantwortliche für Ihre persönlichen und medizinischen Daten ist. Doctena verarbeitet Ihre Daten nur im Auftrag des Arztes.*</p>
							</div>
						</div>
						
					</form>
				</div>
			</div><!--#4-->
			<div id="question-5" class="question">
				<div class="question-title">
					<h4>5. Prüfen & Buchen</h4>
					<p>Bitte prüfen Sie Ihre Angaben und klicken Sie dann auf 'Buchen'.</p>
				</div>
				<div class="question-content">
					<p>
						Termin:<br />
						<span style="display: inline-block;padding-left: 20px;">
							<strong>Donnerstag, 07.06.2018, 11:00 Uhr</strong>
						</span>
					</p>
					<div style="height: 20px;"></div>
					<p>
						bei:<br />
						<span style="display: inline-block;padding-left: 20px;">
							<strong>ATLANTOtec Testsystem Fuchshofer</strong><br />
							Tel.: + 49 (0)<br />
							Fax: + 49 (0)<br />
							<a href="#">AGB</a><br /><br />
							<span>Wir bitten um pünktliches Erscheinen, maximal 15 Minuten vor dem Termin. Bei Verspätungen über 15 Minuten ist der obligate Ablauf der Behandlung nicht mehr zu gewährleisten.</span>
						</span>
					</p>
					<div style="height: 20px;"></div>
					<p>Ihre Angaben:</p>
					<table class="data" cellpadding="0" cellspacing="0" border="0">
					    <tbody>
					        <tr>
					            <th>
					                <label>Anrede:</label>
					            </th>
					            <td><span>Frau</span></td>
					        </tr>
					        <tr>
					            <th>
					                <label>Vorname:</label>
					            </th>
					            <td><span>Dev</span></td>
					        </tr>
					        <tr>
					            <th>
					                <label>Name:</label>
					            </th>
					            <td><span>Web</span></td>
					        </tr>
					        <tr>
					            <th>
					                <label>Ort:</label>
					            </th>
					            <td><span>CA</span></td>
					        </tr>
					        <tr>
					            <th>
					                <label>Telefon:</label>
					            </th>
					            <td><span>0906598048</span></td>
					        </tr>
					        <tr>
					            <th>
					                <label>E-Mail:</label>
					            </th>
					            <td><span>test@gmail.com</span></td>
					        </tr>
					        <tr>
					            <th>
					                <label>Terminerinnerung per E-Mail:</label>
					            </th>
					            <td><span>1 Stunde vor Termin</span></td>
					        </tr>
					    </tbody>
					</table>
					<div style="height: 20px;"></div>
					<table class="data" border="0" cellpadding="0" cellspacing="0">
					    <tbody>
					        <tr>
					            <th>
					                <label>Gewünschte Behandlung:</label>
					            </th>
					            <td><span>Atlaskorrektur (1. Termin) ca. 90 Min.</span></td>
					        </tr>
					        <tr>
					            <th>
					                <label>Bitte SORGFÄLTIG lesen:</label>
					            </th>
					            <td><span>Ich habe die Informationen gelesen</span></td>
					        </tr>
					    </tbody>
					</table>
				</div>
			</div><!--#5-->
		</div>
	</div>
	<hr>
	<div class="row text-center pt-30-xs pb-30-xs">
		<div class="col-md-8 col-md-offset-2">
			<nav> 
				<ul class="pager flex-xs justify-content-between">
					<li><a id="control-back" href="#"><i class="fa fa-angle-left"></i> Back</a></li>
					<li><a id="control-next" href="#">Next <i class="fa fa-angle-right"></i></a></li>
				</ul>
			</nav> 
		</div>
	</div>
@endsection
@section('footer')
<script type="text/javascript">
	$(document).ready(function(){
		if($("#questions").length > 0){
			var questionsslider = $("#questions").bxSlider({
				controller : false,
				infiniteLoop: false,
				controls : false,
				pager:false,
				touchEnabled:false,
				onSlideBefore:function($slideElement,oldIndex,newIndex){
					$("#questions .question").removeClass("open");
					$slideElement.addClass("open");
				},
				onSlideAfter:function($slideElement,oldIndex,newIndex){

				},
			});
			$("#control-back").click(function(){
				questionsslider.goToPrevSlide();
				return false;
			});

			$("#control-next").click(function(){
				if(questionsslider.getCurrentSlide() < 4){
					questionsslider.goToNextSlide();
				}else{
					//location.href = "http://www.telberia.com/projects/atlantotec.com/atlastechniker";
				}
				return false;
			});
		}
	});
</script>
@endsection