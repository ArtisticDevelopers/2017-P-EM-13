@extends('layouts.app')
@section('content')
<!--content-->
<form id="add_hotel" method="POST" action="/hotel/add" enctype="multipart/form-data">
	{{csrf_field()}}
	<div class="row">
		<div class="col-md-6">
			<div class="content ">
				<div class="women_main">
					<div class="grids">
						<div class="panel panel-widget forms-panel">
							<div class="forms">
								<div class="form-grids widget-shadow" data-example-id="basic-forms">
									<div class="form-title">
										<h4>Hotel</h4>
									</div>
									<div class="form-body">
									
										<div class="form-group">
											<label >Hotel Name</label>
											<input required name="hotel" type="text" class="form-control" id="hotelName" placeholder="Hotel Name">
										</div>
										<div class="form-group">
											<label >Hotel Description</label>
											<textarea required name="description" class="form-control" id="hotelDescription"></textarea>
										</div>
										<div class="form-group">
											<label >Hotel Type</label>
											<select required class="form-control selectpicker" data-style="btn btn-default" name="type">
												<option disabled selected>Please select option</option>
												@forelse($types as $type)
												<option value="{{ $type->ht_id }}">{{$type->hotel_type}}</option>
												@empty
												<option disabled selected>No types</option>
												@endforelse
											</select>
										</div>
										<div class="form-group">
											<label >Hotel Location</label>
											<select required class="form-control selectpicker" name="location" data-style="btn-primary">
												<option disabled selected>Please select option</option>
												@forelse($locations as $location)
												<option value="{{ $location->hl_id }}">{{$location->hotel_location}}</option>
												@empty
												<option disabled selected>No locations</option>
												@endforelse
											</select>
										</div>
										
									</div>
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
											<label >Hotel Images</label>
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
		<div class="col-md-6">
			<div class="content ">
				<div class="women_main">
					<div class="grids">
						<div class="panel panel-widget forms-panel">
							<div class="forms">
								<div class="form-grids widget-shadow" data-example-id="basic-forms">
									<div class="form-title">
										<h4>Details</h4>
									</div>
									<div class="form-body">
										
										<div class="form-group">
											<label >Hotel Address</label>
											<input required name="address" type="text" class="form-control" id="hotelAddress" placeholder="Hotel Address">
										</div>
										<div class="form-group">
											<label>Hotel Postal Code</label>
											<input required name="postal" type="text" class="form-control" id="hotelPostalCode" placeholder="Hotel Postal Code">
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
										<h4>Surroundings</h4>
									</div>
									<div class="form-body" id="surrounding_body">
										
										<div class="form-group">
											<label >Hotel Surrounding</label>
											<input required name="surroundings[]" type="text" class="form-control" id="hotelSurrounding" placeholder="Hotel Surrounding">
										</div>
									</div>
									<a id="add_surrounding" href="#">add another</a>
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
										<h4>Facilities</h4>
									</div>
									<div class="form-body" id="facility_body">
										
										<div class="form-group"> 
											<label >Hotel Facility</label> 
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
		</div>
	</div>
	<div class="col-md-12">
		
	<div class="form-group">
		<button type="submit" class="btn btn-primary" style="width: 100%">Save</button>
	</div>
	</div>
</form>
<!-- end content -->
@endsection