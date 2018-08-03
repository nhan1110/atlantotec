<div class="modal fade in" id="modal-appointment" tabindex="-1" role="dialog" aria-labelledby="modal-appointment">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="modal-appointment">Neuen Termin vereinbaren</h4>
			</div>
			<form class="form-horizontal form-appointment" method="post">
				<div class="alert alert-danger" role="alert" style="display: none;"></div>
				<div class="modal-body">
					<div id="meeting-box" class="active meeting-adndew-box">
						<div class="row">
							<div class="col-md-6 group-termin">
								<div class="form-group">
									<label class="col-sm-4 control-label">Anrede:</label>
									<div class="col-sm-8">
										<select class="form-control" name="gender" required>
											<option value="">bitte wählen</option>
											<option value="1">Frau</option>
											<option value="2">Herr</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Vorname:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="first_name" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Name:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="last_name" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Ort:</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="place" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Telefon:</label>
									<div class="col-sm-8">
										<input type="tel" class="form-control" name="phone" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">E-Mail:</label>
									<div class="col-sm-8">
										<input type="email" class="form-control" name="email" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Bemerkung:</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="3" name="note"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Interne Bemerkung:</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="3" name="internal_remark"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label pt-0-sm">Terminerinnerung per E-Mail:</label>
									<div class="col-sm-8">
										<select name="email_remind" class="form-control">
											<option value="0">keine</option>
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
									<label class="col-sm-4 control-label pt-0-sm">Terminerinnerung per SMS:</label>
									<div class="col-sm-8">
										<select class="form-control" name="sms_remind">
											<option value="0">keine</option>
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
									<label class="col-sm-4 control-label">SMS Telefon:</label>
									<div class="col-sm-8">
										<div class="row">
											<div class="col-xs-5 pr-0-xs">
												<select class="form-control" name="sms_phone">
													<option selected="selected" value="0039">+39: Italien</option>
													<option value="0041">+41: Schweiz</option>
													<option value="00423">+423: Liechtenstein</option>
													<option value="0043">+43: Österreich</option>
													<option value="0049">+49: Deutschland</option>
												</select>
											</div>
											<div class="col-xs-7 pl-5-xs">
												<input type="tel" class="form-control" name="tel">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Betrag:</label>
									<div class="col-sm-8">
										<input type="number" class="form-control" name="amount">
									</div>
								</div>
							</div>
							<div class="col-md-6 group-terminplane">
								<div class="form-row form-subheading">
									<strong>Terminpläne</strong>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">Ärzte:</label>
									<div class="col-sm-8">
										<select class="form-control" required name="doctor_id">
											<option value="">Alle</option>
											<?php if(isset($userGroup) && $userGroup != null): ?>
												<?php foreach ($userGroup as $key => $item): ?>
													<option value="<?php echo $item->id; ?>"><?php echo $item->first_name.' '.$item->last_name; ?></option>
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
									<div class="col-sm-12">
										<ul class="list-unstyled">
											<li>
												<div class="radio">
													<input id="radio0" type="radio" name="desired_treatment" value="0" required>
													<label for="radio0">Nachbehandlung (2. Termin) ca. 60 Min.</label>
												</div>
											</li>
											<li>
												<div class="radio">
													<input id="radio1" type="radio" name="desired_treatment" value="1">
													<label for="radio1">Wiederholungssitzung (nach Bedarf) ca. 60 Min.</label>
												</div>
											</li>
											<li>
												<div class="radio">
													<input id="radio3" type="radio" name="desired_treatment" value="2">
													<label for="radio3">Massage 60 Min.</label>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="meeting-seting-box" class="meeting-adndew-box" style="display: none;">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-back" style="display: none;"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Zurück</button>
					<button type="button" class="btn btn-default btn-close" data-dismiss="modal">Close <i class="fa fa-window-close-o" aria-hidden="true"></i></button>
					<button type="submit" class="btn btn-primary btn-next-step">Weiter <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var step = 1;
		$('#modal-appointment').on('hidden.bs.modal', function () {
			step = 1;
		   	$('#modal-appointment #meeting-seting-box').html('').hide();
		   	$('#modal-appointment #meeting-box').show();
		   	$('#modal-appointment .btn-close').show();
			$('#modal-appointment .btn-back').hide();
		});

		$('#modal-appointment form').submit(function(){
			var current = $(this);
			if(step == 1){
				var user_id = $(this).find('select[name="doctor_id"]').val();
				$(".custom-loading").show();
				var today = new Date().toJSON().slice(0,10).replace(/-/g,'-');
				var data_ajax = {
					'user_id':user_id,
					'name'  : current.find('input[name="first_name"]').val() + ' ' + current.find('input[name="last_name"]').val(),
					'phone' : current.find('input[name="phone"]').val(),
					'note'  : current.find('textarea[name="note"]').val(),
					'today' : today,
					'_token':'{{ csrf_token() }}'
				};
	            $.ajax({
	                url: '{{ route("meetings.getsettinguser") }}',
	                type: "POST",
	                dataType: "json",
	                data: data_ajax,
	                success: function (data) {
	                    console.log(data);
	                    if (data["status"] == "success") {
	                    	$('#modal-appointment #meeting-box').hide();
	                        $('#modal-appointment #meeting-seting-box').html(data["responsive"]).show();
	                    	$('#modal-appointment #meeting-seting-box .datetime').datetimepicker({
								format: 'Y-m-d',
								formatDate: 'Y-m-d',
								timepicker: false,
								inline:true,
								minDate : new Date()
							});
							$('#modal-appointment .btn-close').hide();
							$('#modal-appointment .btn-back').show();
							step++;
	                    }
	                },
	                complete: function(){
	                    $(".custom-loading").hide();
	                },
	                error: function (data) {
	                    console.log(data['responseText']);
	                }
	            });
	        }
			else{
				$(".custom-loading").show();
				var data = current.serialize();
				current.find('.alert-danger').html('').hide();
	            $.ajax({
	                url: '{{ route("meetings.savemeeting") }}',
	                type: "POST",
	                dataType: "json",
	                data: data,
	                success: function (data) {
	                    console.log(data);
	                    if (data["status"] == "success") {
	                        location.reload();
	                    }
	                    else if(data["status"] == "fail"){
	                    	current.find('.alert-danger').html(data['message']).show();
	                    }
	                },
	                complete: function(){
	                    $(".custom-loading").hide();
	                },
	                error: function (data) {
	                    console.log(data['responseText']);
	                }
	            });
			}
            return false;
		});

		$(document).on('change','input[name="date"]',function(){
			var current = $('#modal-appointment form');
			var user_id = current.find('select[name="doctor_id"]').val();
			var today 	= $(this).val();
			var data_ajax = {
				'user_id':user_id,
				'name'  : current.find('input[name="first_name"]').val() + ' ' + current.find('input[name="last_name"]').val(),
				'phone' : current.find('input[name="phone"]').val(),
				'note'  : current.find('textarea[name="note"]').val(),
				'today' : today,
				'_token':'{{ csrf_token() }}'
			};
			$(".custom-loading").show();
            $.ajax({
                url: '{{ route("meetings.getsettinguser") }}',
                type: "POST",
                dataType: "json",
                data: data_ajax,
                success: function (data) {
                    console.log(data);
                    if (data["status"] == "success") {
                        $('#modal-appointment #meeting-seting-box').html(data["responsive"]);
                    	$('#modal-appointment #meeting-seting-box .datetime').datetimepicker({
							format: 'Y-m-d',
							formatDate: 'Y-m-d',
							timepicker: false,
							inline:true,
							minDate : new Date()
						});
                    }
                },
                complete: function(){
                    $(".custom-loading").hide();
                },
                error: function (data) {
                    console.log(data['responseText']);
                }
            });
		});

		$(document).on('click','#modal-appointment .btn-back',function(){
			step = 1;
		   	$('#modal-appointment #meeting-seting-box').html('').hide();
		   	$('#modal-appointment #meeting-box').show();
		   	$('#modal-appointment .btn-close').show();
			$('#modal-appointment .btn-back').hide();
			return false;
		});
	});
</script>