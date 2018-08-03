@extends('shares.master')
@section("main-content") 
<?php 
	$months = [
		"1"  => "January",
		"2"  => "February",
		"3"  => "March",
		"4"  => "April",
		"5"  => "May",
		"6"  => "June",
		"7"  => "July",
		"8"  => "August",
		"9"  => "September",
		"10" => "October",
		"11" => "November",
		"12" => "December"
	]; 
	$weeks = [
		"1"  => "Mo",
		"2"  => "Tu",
		"3"  => "We",
		"4"  => "Th",
		"5"  => "Fr",
		"6"  => "St",
		"7"  => "Su"
	]; 
?>
<div class="add-bar-system">
	<div class="row">
		<div class="col-md-6"><p>System-Nr.: 3325</p></div>
		<div class="col-md-6 text-right">atlantotec-chiasso: atlantotec-chiasso <a href="#"> (Abmelden)</a> </div>
	</div>
</div>
<div class="add-bar-termine">
	<div class="row">
		<div class="col-md-6"><p><strong>Termine:</strong> <?php echo $weeks[date('w')].', '.date('d.m.Y').' (KW '.date('W').')'; ?></p></div>
		<div class="col-md-6 text-right">für Terminplan:<strong> Daniela Diomede</strong></div> 
	</div>
</div>
<div ng-app="PageApp" ng-controller="PageController">
	<div class="top-page">
		<div class="row">
			<div class="col-md-6">
				<ul class="list-inline menu-left">
					<li>
						<select name="months">
							<?php 
								foreach ($months as $key => $value) {
									if ($key == date('m'))
										echo "<option value=\"".$key."\" selected>".$value."</option>";
									else
										echo "<option value=\"".$key."\">".$value."</option>";
								}
							?>
						</select>
					</li>
					<li>
						<select name="days">
							<?php 
								for ($i = (date('Y')-8) ; $i <= (date('Y')+4) ; $i++) {
									if ($i == date('Y'))
										echo "<option value=\"". $i ."\" selected>". $i ."</option>";
									else
										echo "<option value=\"". $i ."\">". $i ."</option>";
								}
							?>
						</select>
					</li>
					<li><a href="javascript:;" class="button"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
					<li><a href="javascript:;" class="button"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
					<li><a href="#" class="link">Heute</a></li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="tab-menu list-inline menu-right right">
					<li class="item"><a class="link" href="#" data-toggle="modal" data-target="#modal-appointment"><i class="fa fa-plus-square" aria-hidden="true"></i> Neuer Termin</a></li>
					<li class="item"><a class="icon" href="#"><i class="fa fa-print" aria-hidden="true"></i></a></li>
					<li class="item seperator hidden-sm hidden-md hidden-lg"></li>
					<li class="item" data-for="#tag"><a class="tag" href="{{ route('dayview') }}"><i class="fa fa-file-sound-o" aria-hidden="true"></i> Tag</a></li>
					<li class="item" data-for="#woche"><a class="tag" href="{{ route('weekview') }}" href="javascript:;"><i class="fa fa-file-sound-o" aria-hidden="true"></i> Woche</a></li>
					<li class="item" data-for="#suche"><a class="tag" href="{{ route('terminsuche') }}"><i class="fa fa-file-sound-o" aria-hidden="true"></i> Suche</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="content-page">
		<div class="row">
			<div class="col-md-3 left-colum" id="sidebar-page">
				<div class="datetimepicker-box">
					<input id="datetimepicker" type="text" >
				</div>
				<div class="row">
					<div class="col-md-12">
						<ul class="list-item list-category">
							<li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i>Freie Termine</a></li>
							<li><a href="#"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>Legende</a></li>
							<li>
								<a><i class="fa fa-minus-square-o" aria-hidden="true"></i>Behande</a>
								<ul>
									<?php for( $i =0 ;$i < 5 ; $i++):?>
										<li> 
											<div class="checkbox checkbox-circle">
												<input id="checkbox<?php echo $i;?>" type="checkbox">
												<label for="checkbox<?php echo $i;?>">
													item 00<?php echo $i;?>
												</label>
											</div>
										</li>
									<?php endfor;?> 
								</ul>
							</li>
							<li>
								<a><i class="fa fa-minus-square-o" aria-hidden="true"></i>Externe terminplane</a>
								<ul>
									<li> 
										<div class="checkbox checkbox-circle">
											<input id="checkbox7" type="checkbox">
											<label for="checkbox7">
												item 007
											</label>
										</div>
									</li>
									<li> 
										<div class="checkbox checkbox-circle">
											<input id="checkbox8" type="checkbox">
											<label for="checkbox8">
												item 008
											</label>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>	 
				</div>
			</div>
			<div class="col-md-9 right-colum"> 
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
					<table class="table table-bordered table-day">
						<thead>
							<tr>
								<th class="text-center">
									<p><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i></a></p>
									<p><a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></p>
								</th>
								<th>
									<div class="checkbox">
										<input id="checkbox11" type="checkbox">
										<label for="checkbox11"></label>
									</div>
								</th>
								<th>
									<i class="fa fa-plus-circle" aria-hidden="true"></i>
								</th>
								<th>
									<i class="fa fa-circle" aria-hidden="true"></i>
								</th>
								<th>
									<i class="fa fa-globe" aria-hidden="true"></i>
								</th>
								<th>Termin </th>
								<th>Kürzel </th>
								<th>Name</th>
								<th>Bemerkung</th>
								<th>Aktion</th>
							</tr>
						</thead>
						<tbody>
							<?php if(isset($meetings) && $meetings != null): ?>
								<?php foreach ($meetings as $key => $item): ?>
									<tr class="status-atlas">
										<td><?php echo date('H:i',strtotime($item->time_from)); ?></td>
										<td>
											<div class="checkbox">
								                <input id="metting-item-<?php echo $key; ?>" type="checkbox" name="setting_id[]" value="<?php echo $item->id; ?>">
								                <label for="metting-item-<?php echo $key; ?>"></label>
								            </div>
										</td>
										<td>	
										</td>
										<td>	
											<div class="form-group">
												<i class="online fa fa-circle" aria-hidden="true"></i>
											</div>
										</td>
										<td>
											<i class="fa fa-globe" aria-hidden="true"></i>
										</td>
										<td>
											<a href="#" data-toggle="modal" data-target="#modal-appointment"><?php echo date('H:i',strtotime($item->time_from)); ?> - <?php echo date('H:i',strtotime($item->time_to)); ?></a>
											<a href="#" class="pull-right"><i class="fa fa-clone" aria-hidden="true"></i></a>
										</td>
										<td>ATLAS</td>
										<td><strong><?php echo @$item->first_name.' '.@$item->last_name; ?></strong><br>Telefon: <?php echo @$item->phone; ?></td>
										<td><?php echo @$item->note; ?></td>
										<td>
											<button type="button" class="btn btn-xs btn-primary btn-lg" data-toggle="modal" data-target="#modal-appointment" data-id="">
												<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
											</button>
										</td>
									</tr>
								<?php endforeach; ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom-page"></div>
	@include('frontend.meetings.include.modal-appointment')
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
		$scope.settings        = <?php echo json_encode(@$SettingWorkings);?>;
		$scope.times           = [];
		$scope.weekdays        = [];
		$scope.setting         = {};
		$scope.weekday         = null;
		$scope.weekdaysDefault = {
			"1":"Montag",
			"2":"Dienstag",
			"3":"Mittwoch",
			"4":"Donnerstag",
			"5":"Freitag",
			"6":"Samstag",
			"7":"Sonntag",
		};
		$scope.time_from      = 0;
		$scope.time_to        = 0;
		$scope.time_from_to   = [];
		$scope.isTodayWoking  = false;
		$scope.ListTodayWoking = [];
		var day = new Date();
		$scope.weekday = day.getDay() + 1;
	    $scope.moth    = day.getMonth() + 1;
		console.log($scope.weekday);
		var argweekdays = [];
		var from_to = [] ;
		$scope.formatTime = function(string){
			return string.substr(0, 5);
		}
		for(var key in $scope.settings){
			$scope.setting = ( $scope.settings[key]);
			try {
				if(typeof $scope.setting.weekdays == "string"){
					argweekdays = JSON.parse($scope.setting.weekdays);
				}
			} catch (error) {
				
			}
			$scope.weekdays = $scope.weekdays.concat(argweekdays);
			if(argweekdays.indexOf($scope.weekday) > -1 || argweekdays.indexOf(($scope.weekday +'')) > -1 ){
				if(key == 0){
					$scope.time_from  = $scope.setting.time_from;
					$scope.time_to    = $scope.setting.time_to ;
				}else{
					if($scope.time_from > $scope.setting.time_from){
						$scope.time_from = $scope.setting.time_from;
					}
					if($scope.time_to < $scope.setting.time_to){
						$scope.time_to =  $scope.setting.time_to;
					}
				}
				var argTimeFrom = $scope.formatTime($scope.setting.time_from).split(":").map(Number);
				var argTimeTo = $scope.formatTime($scope.setting.time_to).split(":").map(Number);
				$scope.time_from_to.push(
					{
						from : argTimeFrom[0],
						from_n :  argTimeFrom[1] ,
						to : argTimeTo[0],
						to_n : argTimeTo[1],
					}
				);
				//var argTime = formatTime($scope.setting.time_to).split(":").map(Number);
			}
		}
		if($scope.weekdays.indexOf($scope.weekday) > -1 || $scope.weekdays.indexOf(($scope.weekday +'')) > -1 ){
			$scope.isTodayWoking = true;
			$scope.time_from_to.sort(function compare(a,b) {
				if (a.from < b.from)
					return -1;
				if (a.from > b.from)
					return 1; 
				return 0;
			});
			
			for (var key in $scope.time_from_to){
				for(var i = $scope.time_from_to[key].from ; i <  $scope.time_from_to[key].to; i++)
				{
					$scope.ListTodayWoking.push( {
						time : i + ':00',
						form_to : i + ':00 - ' + (i + 1) + ':00',
						form : i,
						to : (i+1)
					});
				}
			}
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
						inline:true,
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
</script>
@endpush