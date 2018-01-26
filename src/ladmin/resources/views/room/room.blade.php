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
									<h4>Room:</h4>
								</div>
								<div class="form-body">
									<form>
										<div class="form-group">
											<label >Which Hotel?</label> 
											<select class="form-control selectpicker" data-style="btn btn-default">
											      <option>Mustard</option>
											      <option>Ketchup</option>
											      <option>Relish</option>
											</select>
										</div>
										<div class="form-group">
											<label >Room Name</label>
											<input type="text" class="form-control" id="roomName" placeholder="Room Name">
										</div>
										<div class="form-group"> 
											<label >Room Description</label> 
											<input type="text" class="form-control" id="roomDescription" placeholder="Room Description"> 
										</div> 
										<div class="form-group"> 
											<label >Room Retail Price</label> 
											<input type="text" class="form-control" id="roomDescription" placeholder="Room Retail Price"> 
										</div>
										<div class="form-group"> 
											<label >Room Average Price</label> 
											<input type="text" class="form-control" id="roomDescription" placeholder="Room Average Price"> 
										</div>
										<div class="form-group"> 
											<label >Room Bed Type</label> 
											<input type="text" class="form-control" id="roomBedType" placeholder="Room Bed Type"> 
										</div>
										<div class="form-group">
											<!-- <div class="sky-form"> -->
												<!-- <div class="sky_form1"> -->
													<label >BreakFast?</label> 
													<ul>
														<fieldset>
														<li><label class="radio left"><input type="radio" name="radio" checked=""><i></i>Yes</label></li>
														<li><label class="radio"><input type="radio" name="radio"><i></i>No</label></li>
														</fieldset>
														<div class="clearfix"></div>
													</ul>
												<!-- </div> -->
											<!-- </div> -->
										</div>
										<div class="form-group">
											<!-- <div class="sky-form"> -->
												<!-- <div class="sky_form1"> -->
													<label >Room In?</label> 
													<ul>
														<fieldset>
														<li><label class="radio left"><input type="radio" name="radio" checked=""><i></i>Yes</label></li>
														<li><label class="radio"><input type="radio" name="radio"><i></i>No</label></li>
														</fieldset>
														<div class="clearfix"></div>
													</ul>
												<!-- </div> -->
											<!-- </div> -->
										</div>

										<div class="form-group">
											<label >Room Type</label> 
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