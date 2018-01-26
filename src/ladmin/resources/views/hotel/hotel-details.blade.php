@extends('layouts.app')

@section('content')
<!--content-->
	<div class="content">
		<div class="women_main">
			<div class="grids">
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>Hotel Details </h4>
								</div>
								<div class="form-body">
									<form>
										<div class="form-group">
											<label >Which Hotel?</label> 
											<select class="form-control selectpicker get_ajax_data_select" name="details" id="details" data-style="btn-primary">
											      <option disabled selected>Select Hotel</option>
											      @forelse($hotels as $hotel)
											      <option value="{{ $hotel->hotel_id }}">{{ $hotel->hotel_name }}</option>
											      @empty
											      <option disabled selected>No hotels</option>
											      @endforelse
											</select>
										</div>
										<div class="form-group">
											<label >Hotel Address</label>
											<input required name="address" type="text" class="form-control" id="hotelAddress" placeholder="Hotel Address">
										</div>
										<div class="form-group">
											<label>Hotel Postal Code</label>
											<input required name="postal" type="text" class="form-control" id="hotelPostalCode" placeholder="Hotel Postal Code">
										</div>
										
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Save</button>
										</div>
									</form> 
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>

	<!-- end content -->
@endsection