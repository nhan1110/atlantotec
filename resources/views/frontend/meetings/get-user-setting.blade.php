<div class="row">
	<div class="col-md-6">
		<input datetime type="hidden" class="datetime" value="<?php echo @$request['today']; ?>" name="date" autocomplete="off">
	</div>
	<div class="col-md-6">
		<div class="form-row form-subheading">
			<strong>Terminpläne:</strong>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Ärzte:</label>
			<div class="col-sm-8">
				<select class="form-control" disabled>
					<option value="">Alle</option>
					<?php if(isset($userGroup) && $userGroup != null): ?>
						<?php foreach ($userGroup as $key => $item): ?>
							<option value="<?php echo $item->id; ?>" <?php echo $item->id == $user_id ? 'selected' : ''; ?>><?php echo $item->first_name.' '.$item->last_name; ?></option>
						<?php endforeach; ?>
					<?php endif; ?>
				</select>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<table class="table table-bordered table-day">
			<thead>
				<tr>
					<th class="text-center">
						<p><a href="#"><i class="fa fa-check-circle-o" aria-hidden="true"></i></a></p>
						<p><a href="#"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a></p>
					</th>
					<th>
						<div class="checkbox">
							<input id="appointment-modal-all" type="checkbox">
							<label for="appointment-modal-all"></label>
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
				</tr>
			</thead>
			<tbody>
				<?php if(isset($setting) && $setting != null): ?>
					<?php foreach ($setting as $key => $item): ?>
					    <tr class="status-atlas">
					        <td><?php echo date('H:i',strtotime($item->time_from)); ?></td>
					        <td>
					            <div class="checkbox">
					                <input id="appointment-modal-<?php echo $key; ?>" type="checkbox" name="setting_id[]" value="<?php echo $item->id; ?>">
					                <label for="appointment-modal-<?php echo $key; ?>"></label>
					            </div>
					        </td>
					        <td></td>
					        <td><i class="online fa fa-circle" aria-hidden="true"></i></td>
					        <td><i class="fa fa-globe" aria-hidden="true"></i></td>
					        <td>
					        	<?php echo date('H:i',strtotime($item['time_from'])); ?> - <?php echo date('H:i',strtotime($item['time_to'])); ?>
					            <a href="" class="pull-right"><i class="fa fa-clone" aria-hidden="true"></i></a>
					        </td>
					        <td>ATLAS</td>
					        <td><strong><?php echo @$request['name']; ?></strong><br>Telefon: <?php echo @$request['phone']; ?></td>
					        <td><?php echo @$request['note']; ?></td>
					    </tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>