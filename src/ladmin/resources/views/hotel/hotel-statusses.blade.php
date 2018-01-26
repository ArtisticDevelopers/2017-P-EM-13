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
									<h4>Hotel Status: </h4>
								</div>
								<div class="form-body">
									<form>
										<div class="form-group">
											<label >Which Hotel Detail?</label> 
											<select class="form-control selectpicker" data-style="btn-primary">
											      <option>Mustard</option>
											      <option>Ketchup</option>
											      <option>Relish</option>
											</select>
										</div>
										<div class="form-group">
											<!-- <div class="sky-form"> -->
												<!-- <div class="sky_form1"> -->
													<label >Hotel Active?</label> 
													<ul>
														<li><label class="radio left"><input type="radio" name="radio" checked=""><i></i>Yes</label></li>
														<li><label class="radio"><input type="radio" name="radio"><i></i>No</label></li>
														<div class="clearfix"></div>
													</ul>
												<!-- </div> -->
											<!-- </div> -->
										</div>
										<div class="form-group">
											<!-- <div class="sky-form"> -->
												<!-- <div class="sky_form1"> -->
													<label >Hotel Deleted?</label> 
													<ul>
														<li><label class="radio left"><input type="radio" name="radio" checked=""><i></i>Yes</label></li>
														<li><label class="radio"><input type="radio" name="radio"><i></i>No</label></li>
														<div class="clearfix"></div>
													</ul>
												<!-- </div> -->
											<!-- </div> -->
										</div>
										<div class="form-group">
											<!-- <div class="sky-form"> -->
												<!-- <div class="sky_form1"> -->
													<label >Hotel Recommended?</label> 
													<ul>
														<li><label class="radio left"><input type="radio" name="radio" checked=""><i></i>Yes</label></li>
														<li><label class="radio"><input type="radio" name="radio"><i></i>No</label></li>
														<div class="clearfix"></div>
													</ul>
												<!-- </div> -->
											<!-- </div> -->
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