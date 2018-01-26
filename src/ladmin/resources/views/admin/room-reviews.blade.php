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
									<h4>Hotel:</h4>
								</div>
								<div class="form-body">
									<form>
										<div class="form-group">
											<label >Hotel Name</label>
											<input type="text" class="form-control" id="hotelName" placeholder="Hotel Name">
										</div>
										<div class="form-group"> 
											<label >Hotel Description</label> 
											<input type="text" class="form-control" id="hotelDescription" placeholder="Hotel Description"> 
										</div> 
										<div class="form-group">
											<label >Hotel Type</label> 
											<select class="form-control selectpicker" data-style="btn btn-default">
											      <option>Mustard</option>
											      <option>Ketchup</option>
											      <option>Relish</option>
											</select>
										</div>
										<div class="form-group">
											<label >Hotel Location</label> 
											<select class="form-control selectpicker" data-style="btn-primary">
											      <option>Mustard</option>
											      <option>Ketchup</option>
											      <option>Relish</option>
											</select>
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