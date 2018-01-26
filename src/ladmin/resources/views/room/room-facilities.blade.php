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
									<h4>Room Facilities: </h4>
								</div>
								<div class="form-body">
									<form>
										<div class="form-group">
											<label >Which Room?</label> 
											<select class="form-control selectpicker" data-style="btn-primary">
											      <option>Mustard</option>
											      <option>Ketchup</option>
											      <option>Relish</option>
											</select>
										</div>
										
										<div class="form-group"> 
											<label >Room Facility</label> 
											<input type="text" class="form-control" id="roomFacility" placeholder="Room Facility"> 
										</div> 
										
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Enter</button>
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