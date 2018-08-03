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
<div ng-app="PageApp" ng-controller="PageController">
	<div class="content-page">
		<div class="search-bar">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-2">
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
				<div class="col-sm-4 col-md-4 col-lg-2">
					<button class="btn-block mt-10-xs mt-0-sm"> Aktion ausfuhren</button>
				</div>
				<div class="col-sm-4 col-md-4 col-lg-8 text-right">
					<a href="javascrip:;" ng-click="addNewSetting();"><i class="fa fa-plus-square" aria-hidden="true"></i> Neue Arbeitszeit hinzufügen</a>
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
					<tr ng-repeat="item in settings track by $index">
						<td>
							<div class="value-holder value-type-1">
								<input id="check-1" type="checkbox">
							</div>
						</td>
						<td><%% Tag(item.weekdays) %%></td>
						<td><%% formatTime(item.time_from) %%></td>
						<td><%% formatTime(item.time_to) %%></td>
						<td ng-bind-html="AppointmentTypes(item.appointment_types)| trustedhtml">
						</td>
						<td>
							<a ng-click="RemoveSetting($index,item)" class="btn btn-xs btn-primary btn-lg"> <i class="fa fa-trash-o" aria-hidden="true"></i></a>
							<a ng-click="EditSetting(item,$index)" class="btn btn-xs btn-primary btn-lg"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
					<h4 class="modal-title" id="myModalLabel">Neue Arbeitszeit hinzufügen</h4>
				</div>
				<form class="form-horizontal form-arbeitszeiten" ng-submit="SaveSetting();">
					<div class="modal-body">
						<ul class="nav nav-tabs tab-menu">
							<li class="active tag" data-for="#allgemein"><a data-toggle="tab" href="#allgemein" aria-expanded="true">Allgemein</a></li>
							<li class="tag" data-for="#erweitert"><a data-toggle="tab" href="#erweitert" aria-expanded="false">Erweitert</a></li>
						</ul>	
						<div class="tab-content pt-20-xs">	
							<div id="allgemein" class="tab-pane fade active in">			 
								<div class="form-row form-heading">
									<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
									<div class="row">
										<div class="col-sm-3">
											<strong>fur Terminplan:</strong>
										</div>
										<div class="col-sm-9">
										<select name="for_schedule" ng-model="setting.for_schedule" id="for_schedule" class="form-control" convert-to-number>
											<option value="0">Max Müller</option>
											<option value="1">Jens Mustermann</option>
											<option value="2">Harald Tester</option>
										</select>
										</div>
									</div>
								</div>
								<div class="form-row">
									<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
									<div class="form-group">
										<label class="col-sm-3 control-label">Wochentage:</label>
										<div class="col-sm-9">
											<ul class="list-inline">
												<li ng-repeat="(key,value) in days">
													<div class="checkbox">
														<input value="<%% value %%>" ng-checked="CheckIsChecked(key)" ng-click="weekdaysChange($event,key)" class="weekdays" id="checkbox-<%% key %%>" type="checkbox" name="weekdays[]">
														<label for="checkbox-<%% key %%>"><%% value %%></label>
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
											<input type="text" ng-model="setting.time_from" class="form-control" name="time_from" value="" hours autocomplete="off">
										</div>
										<label class="col-sm-1 col-md-2 col-md-1 control-label">bis:</label>
										<div class="col-sm-3 pl-0-sm">
											<input type="text" ng-model="setting.time_to"class="form-control" name="time_to" value="" hours autocomplete="off">
										</div>
									</div>
								</div>
								<div class="form-row">
									<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
									<div class="form-group">
										<label class="col-sm-3 control-label">Farbe:</label>
										<div class="col-sm-3">
											<select name="color" ng-model="setting.color" class="form-control">
												<option value="#ffffff" style="background-color: #ffffff">Weiß</option>
												<option value="#F0F0F0" style="background-color: #F0F0F0">Grau</option>
												<option value="#FFC0C0" style="background-color: #FFC0C0">Coral</option>
												<option value="#FFE0C0" style="background-color: #FFE0C0">Orange</option>
												<option value="#FFFFC0" style="background-color: #FFFFC0">Gelb</option>
												<option value="#C0FFC0" style="background-color: #C0FFC0">Grün</option>
												<option value="#C0FFFF" style="background-color: #C0FFFF">Blau</option>
												<option value="#C0C0FF" style="background-color: #C0C0FF">Violet</option>
												<option value="#FFC0FF" style="background-color: #FFC0FF">Pink</option>
											</select>
										</div>

									</div>
								</div>
								<div class="form-row">
									<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
									<div class="form-group">
										<label class="col-sm-3 control-label">Hinweistext:</label>
										<div class="col-sm-6">
											<input type="text" ng-model="setting.information" class="form-control" name="information" value="">
										</div>
									</div>
								</div>
								<div class="form-row">
									<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>
									<div class="form-group">
										<label class="col-sm-3 control-label">Gruppe:</label>
										<div class="col-sm-6">
											<input type="text" ng-model="setting.group" class="form-control" name="group" value="ATLANTE">
										</div>
									</div>
								</div>
								<div class="mb-15-xs">
									<ul class="list-unstyled">
										<li>
											<div class="radio">
												<input id="radio0" ng-model="setting.general_working" value="0" type="radio" name="general_working" convert-to-number>
												<label for="radio0">Allgemeine Arbeitszeit</label>
											</div>
										</li>
										<li>
											<div class="radio">
												<input id="radio1" ng-model="setting.general_working" value="1" type="radio" name="general_working" convert-to-number>
												<label for="radio1">Spezieller Gültigkeitszeitraum</label>
											</div>
										</li>
									</ul>
								</div>
								<div ng-if="setting.general_working == 1">
									<div class="form-row form-subheading">
										<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>	
										<a data-toggle="collapse" data-target="#demo" href="javascript:;" class="" aria-expanded="true"><strong>Spezieller Gültigkeitszeitraum</strong></a>
									</div>
									<div id="demo" class="collapse in pl-10-xs">
										<div class="mb-15-xs">
											<ul class="list-unstyled">
												<li>
													<div class="radio">
														<input ng-model="setting.add_replace" id="radio2" value="0" type="radio" name="add_replace" convert-to-number>
														<label for="radio2">Allgemeine Arbeitszeit ergänzen </label>
													</div>
												</li>
												<li>
													<div class="radio">
														<input ng-model="setting.add_replace" id="radio3" value="1" type="radio" name="add_replace" convert-to-number>
														<label for="radio3">Allgemeine Arbeitszeit ersetzen </label>
													</div>
												</li>
											</ul>
										</div>
										<div class="row">
											<div class="col-md-2">
												<div class="radio">
													<input ng-model="setting.week_working" value="0" id="radio4" type="radio" name="week_working" convert-to-number>
													<label for="radio4">Jede Woche</label>
												</div>
											</div>
											<div class="col-md-4">
												<div class="row">
													<div class="col-md-3">
														<div class="radio">
															<input id="radio5" ng-model="setting.week_working" value="1" type="radio" name="week_working" convert-to-number>
															<label for="radio5">Alle</label>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-inline">
															<input type="text" ng-disabled="setting.week_working != 1" ng-model="setting.wochen" class="form-control control-short" name="wochen">
															<label> Wochen</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-2">
														<div class="radio">
															<input id="radio6" ng-model="setting.week_working" type="radio" value="2" name="week_working" convert-to-number>
															<label for="radio6">Am </label>
														</div>
													</div>
													<div class="col-md-10">
														<ul class="list-inline">
															<li ng-repeat="item in [1,2,3,4,5]">
																<div class="checkbox">
																	<input ng-disabled="setting.week_working != 2" ng-checked="custominfoByAm(item)" ng-click="changeInfoWeekWoking($event,item)" name="week_working_custom_info[]" id="week_working_custom_info<%% item %%>" type="checkbox">
																	<label for="week_working_custom_info<%% item %%>"><%% item %%>.</label>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									<div class="form-row form-subheading">
										<a class="tooltip-right" href="#" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left"><i class="fa fa-question-circle"></i></a>	
										<a data-toggle="collapse" data-target="#demo1" href="javascript:;" class="" aria-expanded="true">Spezieller Gültigkeitszeitraum</a>
									</div>
									<div id="demo1" class="collapse in pl-10-xs">
										<div class="list-date-time">
											<ul class="list-inline" ng-repeat="(key,item) in setting.valid_froms track by $index">
												<li>
													<div class="form-inline">
														<label>Gültig ab:</label>
														<input datetime type="text" ng-model="setting.valid_froms[key].from" class="form-control" name="valid_froms[from][]" autocomplete="off">
													</div>
												</li>
												<li class="divider">
													<a href="javascript:;"><img src="{{ asset('html/images/caltrans.png') }}"></a>
												</li>
												<li>
													<div class="form-inline">
														<label>bis:</label>
														<input datetime type="text"ng-model="setting.valid_froms[key].to"  class="form-control" name="valid_froms[to][]" autocomplete="off">
													</div>
												</li>
												<li><a href="javascript:;" ng-click="RemoveValidFrom(key)" class="remove-item"><small>Löschen</small></a></li>
											</ul> 
										</div>
										<p><a href="javascript:;" ng-click="AddValidFrom()"class="add-more"><small>Weiteren Gültigkeitszeitraum hinzufügen</small></a></p>
									</div>
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
													<th class="text-center">tlsoap</th>
												</tr>
											</thead>
											<tbody>
												<tr ng-repeat="(key,appointment_type) in setting.appointment_types">
													<td>
														<label class="ta<%% $index %%>"><%% key %%></label>
													</td>
													<td align="center">
														<input type="checkbox" ng-model="appointment_type.interner_terminmanager" name="<%% $index + 'interner_terminmanager' %%>" id="<%% $index + 'interner_terminmanager' %%>" value="<%%appointment_type.interner_terminmanager%%>" ng-true-value="'1'" ng-false-value="'0'">
													</td>
													<td align="center">
														<input type="checkbox" ng-model="appointment_type.online_terminbuchung" name="<%% $index + 'online_terminbuchung' %%>" id="<%% $index + 'online_terminbuchung' %%>" value="<%% appointment_type.online_terminbuchung%%>" ng-true-value="'1'" ng-false-value="'0'">
													</td>
													<td align="center">
														<input type="checkbox" ng-model="appointment_type.tlsoap" name="<%% $index + 'tlsoap' %%>" id="<%% $index + 'tlsoap' %%>" value="<%%appointment_type.tlsoap%%>" ng-true-value="'1'" ng-false-value="'0'"> 
													</td> 
												</tr>
											</tbody>

										</table>
									</div>
								</div>	
							</div>	
							<div id="erweitert" class="tab-pane fade in">
								<div class="form-row form-heading">
									<div class="row">
										<label class="col-sm-3 control-label">Wochentage:</label>
										<div class="col-sm-9">
											<div class="checkbox">
												<input value="1" ng-model="setting.wochentage" id="checkbox-wochentage" type="checkbox" name="wochentage" value="1" ng-false-value="'0'" ng-true-value="'1'" convert-to-number>
												<label for="checkbox-wochentage">Neue Termine immer an vorhandene Termine anhängen</label>
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group">
										<div class="col-sm-3 control-label">Anteil an Prioritäts- Terminen:</div>
										<div class="col-sm-9">
											<div class="row">
												<div class="col-sm-2">
													<input type="text" ng-model="setting.share_of_priority" class="form-control" name="share_of_priority" value="" autocomplete="off">
												</div>
												<div class="col-sm-10 control-label text-left">in Prozent (%)</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group">
										<label class="col-sm-3 control-label">Arbeitszeitende:</label>
										<div class="col-sm-9">
											<select ng-model="setting.arbeitszeitende" class="form-control" name="arbeitszeitende" convert-to-number>
												<option value="0">Automatisch</option>
												<option value="1">Zeitüberschreitung zulassen</option>
												<option value="2">Exakt einhalten</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group">
										<div class="col-sm-3 control-label">Adresse:</div>
										<div class="col-sm-9">
											<input type="text" ng-model="setting.adresse" class="form-control" name="adresse" value="" autocomplete="off">
										</div>
									</div>
								</div>	
								<div class="form-row">
									<div class="form-group">
										<div class="col-sm-3 control-label"></div>
										<div class="col-sm-9">
											<p style="color:#ccc">Tel.: + 49 (0)</p>
											<p style="color:#ccc">Fax: + 49 (0)</p>
										</div>
									</div>
								</div>							
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default"ng-click="UndoSetting()">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
@push('js-add')
<script src="{{asset('html/js/angular.min.js')}}"></script>
<script>
	String.prototype.replaceAll = function(search, replacement) {
		var target = this;
		return target.replace(new RegExp(search, 'g'), replacement);
	};
	var App = angular.module('PageApp',[],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%%');
        $interpolateProvider.endSymbol('%%>');
    });
	App.controller("PageController", function($scope, $http,$compile) {
		var $ = jQuery;
		$scope.days = {
			"1" : "Mo",
			"2" : "Di",
			"3" : "Mi",
			"4" : "Do",
			"5" : "Fr",
			"6" : "Sa",
			"7" : "So",
			"8" : "All"
		};
		$scope.for_schedules = [
			"Max Müller",
			"Jens Mustermann",
			"Harald Tester"
		];
		$scope.key = 0;
		$scope.valid_from = {from : null , to : null};
		// preserve newlines, etc - use valid JSON
		<?php
			$code = json_encode($SettingWorkings->toArray());
		?>
		var json = <?php echo $code; ?>;
		// remove non-printable and other non-valid JSON chars 
		$scope.settings = json;
		$scope.oldSetting = {};
		$scope.newSetting = function(){
			return {
				id           : 0,
				for_schedule : 0,
				weekdays     : [],
				time_from    : null,
				time_to      : null,
				color        : "#ffffff",
				information  : "",
				group        : "",
				general_working : 0,
				add_replace  : 0,
				week_working  : 0,
				week_working_custom_info : "",
				valid_froms : [
					{from : null , to : null}
				],
				appointment_types : {
					Atlaskorrektur : {
						"interner_terminmanager": '0',
						"online_terminbuchung": '0',
						"tlsoap" : '0'
					},
					Massage : {
						"interner_terminmanager": '0',
						"online_terminbuchung": '0',
						"tlsoap" : '0'
					},
					Nachkontrolle:{
						"interner_terminmanager": '0',
						"online_terminbuchung": '0',
						"tlsoap" :'0'
					},
					Wiederholungssitzung : {
						"interner_terminmanager": '0',
						"online_terminbuchung": '0',
						"tlsoap" : '0'
					},
					WS_Atlaskorrektur: {
						"interner_terminmanager": '0',
						"online_terminbuchung": '0',
						"tlsoap" : '0'
					}
				},
				wochen : '',
				wochentage : 0,
				share_of_priority : '',
				arbeitszeitende : 0,
				adresse : ''
			};
		}
		$scope.$watch("setting",function(newValue,oldValue){
			try {
				if(typeof $scope.setting.weekdays == "string")
					$scope.setting.weekdays = JSON.parse($scope.setting.weekdays);
			} catch (error) {
				
			}
			try {
				if(typeof $scope.setting.valid_froms == "string")
					$scope.setting.valid_froms = JSON.parse($scope.setting.valid_froms);
			} catch (error) {
				
			}
			try {
				if(typeof $scope.setting.appointment_types == "string")
					$scope.setting.appointment_types = JSON.parse($scope.setting.appointment_types);
			} catch (error) {
				
			}
			if($scope.setting.week_working == 2){
				try {
					if(typeof $scope.setting.week_working_custom_info == "string")
						$scope.setting.week_working_custom_info = JSON.parse($scope.setting.week_working_custom_info);
					
				} catch (error) {
					
				}
			}
			if($scope.setting.week_working == 1 || $scope.setting.week_working == '1'){
				$scope.setting.wochen = $scope.setting.week_working_custom_info;
			}
			setTimeout(function(){ 
				$scope.$apply();
			}, 300);

		});
		$scope.$watch("setting.week_working",function(newValue,oldValue){
			if(newValue == 2){
				$scope.setting.wochen = "";
			}
			else{
				$scope.setting.week_working_custom_info = "";
			}
		});
		$scope.$watch("setting.wochen",function(newValue,oldValue){
			if($scope.setting.week_working == 1){
				$scope.setting.week_working_custom_info = $scope.setting.wochen;
			}
		});
		$scope.setting = $scope.newSetting();
		$scope.addNewSetting = function(){
			$scope.setting = $scope.newSetting();
			$("#myModal").modal();
		}
		$scope.EditSetting = function($setting,$key){
			$setting.time_from = $scope.formatTime($setting.time_from);
			$setting.time_to = $scope.formatTime($setting.time_to);
			$scope.setting = $setting;
			$scope.key     = $key;
			$scope.oldSetting = angular.copy($scope.setting);
			$("#myModal").modal();
		}
		$scope.UndoSetting = function(){
			if($scope.settings[$scope.key].id == $scope.oldSetting.id){
				$scope.settings[$scope.key] = $scope.oldSetting;
			}
			$("#myModal").modal("hide");
		}
		$scope.AddValidFrom = function(){
			if($scope.setting.valid_froms === null) $scope.setting.valid_froms = [];
			$scope.setting.valid_froms.push({from : null , to : null});
			return false;
		}
		$scope.RemoveValidFrom = function(index){
			$scope.setting.valid_froms.splice(index, 1);
			return false;
		}
		$scope.weekdaysChange = function($event,value){
			var checked = ($event.target.checked);
			if(!checked) {
				var index = $scope.setting.weekdays.indexOf('8');
				if (index !== -1)
					$scope.setting.weekdays.splice(index,1);
			}
			if(value == 8){
				if(checked)
					$scope.setting.weekdays = ['1','2','3','4','5','6','7','8'];
				else 
					$scope.setting.weekdays = [];
				return false;
			}else{
				if(checked)
					$scope.setting.weekdays.push(value);
				else {
					var index = $scope.setting.weekdays.indexOf(value);
					if (index !== -1)
					$scope.setting.weekdays.splice(index, 1);
				}
				if($scope.setting.weekdays.length > 6 ){
					$scope.setting.weekdays.push('8');
				}else{
					var index = $scope.setting.weekdays.indexOf('8');
					if (index !== -1) $scope.setting.weekdays = $scope.setting.weekdays.splice(index, 1);
				}	
			}
			return false;
		}
		$scope.CheckIsChecked = function($value){
			return ($scope.setting.weekdays.indexOf($value) > -1);
		}
		$scope.changeInfoWeekWoking = function($event,value){
			if(typeof $scope.setting.week_working_custom_info != 'object') $scope.setting.week_working_custom_info = [];
			if($scope.setting.week_working == 2){
				var checked = ($event.target.checked);
				if(checked){
					$scope.setting.week_working_custom_info.push(value);
				}else{
					var index = $scope.setting.weekdays.indexOf(value);
					if (index !== -1) $scope.setting.week_working_custom_info = $scope.setting.week_working_custom_info.splice(index, 1);
				} 
			}
		}
		$scope.custominfoByAm = function($value){
			if($scope.setting.week_working == 2){
				try {
					return ($scope.setting.week_working_custom_info.indexOf(('' + $value)) > -1) || ($scope.setting.week_working_custom_info.indexOf($value) > -1);
				} catch (error) {
				}
			}
			return false;
		}
		$scope.custominfoByAlleValue = function(){
			if($scope.setting.week_working == 1){
				return $scope.setting.week_working_custom_info;
			}
			else 
				return "";
		}
		$scope.formatTime = function(string){
			return string.substr(0, 5);
		}
		$scope.SaveSetting = function(){
			$scope.setting._token = '{{ csrf_token() }}';
			$.ajax({
				type:"post",
				url : '{{route("settings.store")}}',
				data : $scope.setting,
				dataType : "json",
				success : function(data){
					if($scope.setting.id == 0 ){
						$scope.settings.push(data);
						setTimeout(function(){ 
							$scope.$apply();
						}, 300);
					}
					$("#myModal").modal("hide");
				}
			})
			return false;
		}
		$scope.Tag = function(weekdays){
			var max = 0;
			var min = 0;
			try {
				if(typeof weekdays == "string")
					weekdays = JSON.parse(weekdays);
			} catch (error) {
				
			}
			$.each(weekdays,function($key,$value){
				if($key == 0){
					max = $value;
					min = $value;
				}else{
					if($value != 8){
						if(max < $value) max = $value;
						if(min > $value) min = $value;
					}
				}
			});
			if(min == max){
				return  $scope.days[min];
			}
			return (typeof $scope.days[min] == 'undefined' ? '' : ($scope.days[min] + ' - ')) + (typeof $scope.days[max] == 'undefined' ? '' : ($scope.days[max]));
			
		}
		$scope.AppointmentTypes = function(appointment_types){
			try {
				appointment_types = JSON.parse(appointment_types);
			} catch (error) {			
			}
			var s1 = [];
			var s2 = [];
			var s3 = [];
			var string = "";
			var arg;
			$.each (appointment_types,function($key,$value){
				$.each($value,function($key1,$value1){
					if( $value1 == 1 ){
						if($key1 == "interner_terminmanager") s1.push('<a href="">'+$key+'</a>');
						if($key1 == "online_terminbuchung") s2.push('<a href="">'+$key+'</a>');
						if($key1 == "tlsoap") s3.push('<a href="">'+$key+'</a>');
					}
				});
			});
			var argstring = [];
			if(s1.length > 0){
				argstring.push('<b>Interner Terminmanager</b>: ' + s1.join(', '));
			}
			if(s2.length > 0){
				argstring.push('<b>Online-Terminbuchung</b>: ' + s2.join(', '));
			}
			if(s3.length > 0){
				argstring.push('<b>tlsoap</b>: ' + s3.join(', '));
			}
			string = argstring.join('<br>');
			return string;
		}
		$scope.RemoveSetting = function(index,setting){
			var check = confirm("Are you sure you want to delete this item?!");
			if(check){
				setting._token = '{{ csrf_token() }}';
				$.ajax({
					type:"post",
					url : '{{route("settings.destroy")}}',
					data : setting,
					dataType : "json",
					success : function(data){
						$scope.settings.splice(index, 1);
						setTimeout(function(){ 
							$scope.$apply();
						}, 300);
					}
				});
			}
			return false;
		}
	});
	App.directive('datetime', function() {
		return {
			// A = attribute, E = Element, C = Class and M = HTML Comment
			restrict: 'A',
			//The link function is responsible for registering DOM listeners as well as updating the DOM.
			link: function(scope, element, attrs) {
				try {
					element.datetimepicker('destroy');
				} catch (e) {}
				setTimeout(function() {
					element.datetimepicker({
						format: 'd/m/Y',
						formatDate: 'd/m/Y',
						timepicker: false,
						minDate : new Date()
					});
				}, 20);
			}
		}
	});
	App.directive('hours', function() {
		return {
			// A = attribute, E = Element, C = Class and M = HTML Comment
			restrict: 'A',
			//The link function is responsible for registering DOM listeners as well as updating the DOM.
			link: function(scope, element, attrs) {
				try {
					element.datetimepicker('destroy');
				} catch (e) {}
				setTimeout(function() {
					element.datetimepicker({
						datepicker: false,
						format: 'H:i',
						formatDate: 'H:i',
						step : 5,
						minTime : '8:00',
						maxTime : '18:05'
						
					});
				}, 20);
			}
		}
	});
	App.filter('trustedhtml', 
		function($sce) { 
			return $sce.trustAsHtml; 
		}
	);
	App.directive('convertToNumber', function() {
		return {
			require: 'ngModel',
			link: function(scope, element, attrs, ngModel) {
			ngModel.$parsers.push(function(val) {
				return val != null ? parseInt(val, 10) : null;
			});
			ngModel.$formatters.push(function(val) {
				return val != null ? '' + val : null;
			});
			}
		};
	});
</script>
@endpush