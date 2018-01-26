@extends('layouts.app')
@section('content')
<form method="POST" action="/room/add" enctype="multipart/form-data">
	<!--content-->
	{{csrf_field()}}
	<div class="row">
		<div class="col-md-6">
			<div class="content">
				<div class="women_main">
					<div class="grids">
						<div class="panel panel-widget forms-panel">
							<div class="forms">
								<div class="form-grids widget-shadow" data-example-id="basic-forms">
									<div class="form-title">
										<h4>Room:</h4>
									</div>
									<div class="form-body">
										
										<div class="form-group">
											<label >Which Hotel?</label>
											<select class="form-control selectpicker" name="hotel" data-style="btn btn-default">
												<option disabled selected>Select Hotel</option>
												@forelse($hotels as $hotel)
												<option value="{{ $hotel->hotel_id }}">{{ $hotel->hotel_name }}</option>
												@empty
												<option disabled selected>No hotels</option>
												@endforelse
											</select>
										</div>
										<div class="form-group">
											<label >Room Name</label>
											<input type="text" class="form-control" name="room" id="roomName" placeholder="Room Name">
										</div>
										<div class="form-group">
											<label >Room Description</label>
											<input type="text" class="form-control" name="description" id="roomDescription" placeholder="Room Description">
										</div>
										<div class="form-group">
											<label >Room Retail Price</label>
											<input type="text" class="form-control" name="retail" id="roomDescription" placeholder="Room Retail Price">
										</div>
										<div class="form-group">
											<label >Room Average Price</label>
											<input type="text" class="form-control" name="average" id="roomDescription" placeholder="Room Average Price">
										</div>
										<div class="form-group">
											<label >Room's Bed Type</label>
											<input type="text" class="form-control" name="bed" id="roomBed" placeholder="Room's Bed type'">
										</div>
										<div class="form-group">
											<label >Room Type</label>
											<select class="form-control selectpicker" name="type" data-style="btn-primary">
												<option disabled selected>Select type</option>
												@forelse($types as $type)
												<option value="{{ $type->hrt_id }}">{{ $type->hotel_room_type }}</option>
												@empty
												<option>No types</option>
												@endforelse
											</select>
										</div>
										<div class="form-group">
											<!-- <div class="sky-form"> -->
											<!-- <div class="sky_form1"> -->
											<fieldset class="radioGroup">
												<legend>BreakFast?</legend>
												
												<input type="radio" value="1" name="breakfast">&nbsp;<label class="radio"><i></i>Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" value="0" name="breakfast">&nbsp;<label class="radio"><i></i>No</label>
											</fieldset>
											<div class="clearfix"></div>
											
											<!-- </div> -->
											<!-- </div> -->
										</div>
										<div class="form-group">
											<!-- <div class="sky-form"> -->
											<!-- <div class="sky_form1"> -->
											<fieldset class="radioGroup">
												<legend >Whether there is room?</legend>
												
												<input type="radio" value="1" name="room_in" checked="">&nbsp;<label class="radio"><i></i>Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="radio" value="2" name="room_in">&nbsp;<label class="radio"><i></i>No</label>
											</fieldset>
											<div class="clearfix"></div>
											
										</div>
										
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Enter</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
		<div class="col-md-6">
			
			<div class="content ">
				<div class="women_main">
					<div class="grids">
						<div class="panel panel-widget forms-panel">
							<div class="forms">
								<div class="form-grids widget-shadow" data-example-id="basic-forms">
									<div class="form-title">
										<h4>Facilities</h4>
									</div>
									<div class="form-body" id="facility_body">
										
										<div class="form-group">
											<label >Room Facility</label>
											<input required type="text" name="facilities[]" class="form-control" id="hotelFacility" placeholder="Hotel Facility">
										</div>
									</div>
									<a id="add_facility" href="#">add another</a>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="content ">
				<div class="women_main">
					<div class="grids">
						<div class="panel panel-widget forms-panel">
							<div class="forms">
								<div class="form-grids widget-shadow" data-example-id="basic-forms">
									<div class="form-title">
										<h4>Images</h4>
									</div>
									<div class="form-body" id="images_body">
										
										<div class="form-group">
											<label >Room Images</label>
											<input required name="images[]" type="file" class="form-control">
										</div>
										
									</div>
									<a href="#" id="add_image">add another</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		
		<div class="form-group">
			<button type="submit" class="btn btn-primary" style="width: 100%">Save</button>
		</div>
	</div>
</div>
<!-- end content -->
</form>
@endsection