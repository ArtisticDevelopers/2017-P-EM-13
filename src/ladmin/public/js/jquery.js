$(document).ready(function()
{
	$("#add_surrounding").click(function(e)
	{
		e.preventDefault();
		var field = '<div class="form-group"> <label >Surrounding</label><input required name="surroundings[]" type="text" class="form-control" id="hotelSurrounding" placeholder="Hotel Surrounding"><a href="#" class="delete_surrounding">remove</a></div>';
		$("#surrounding_body").append(field);
	});

	$("body").on('click', ".delete_surrounding", function(e)
	{
		e.preventDefault();
		$(this).parent().remove();
	});

	$("#add_facility").click(function(e)
	{
		e.preventDefault();
		var field = '<div class="form-group"><label >Facility</label><input required type="text" name="facilities[]" class="form-control" id="hotelFacility" placeholder="Hotel Facility"><a href="#" class="delete_surrounding">remove</a></div> '
		$("#facility_body").append(field);
	});

	$("body").on('click', ".delete_facility", function(e)
	{
		e.preventDefault();
		$(this).parent().remove();
	});

	$("#add_image").click(function(e)
	{
		e.preventDefault();
		var field = '<div class="form-group"><label >Images</label><input required name="images[]" type="file" class="form-control" ><a href="#" class="delete_image">remove</a></div>';
		$("#images_body").append(field);
	});

	$("body").on('click', ".delete_image", function(e)
	{
		e.preventDefault();
		$(this).parent().remove();
	});

	$(".get_ajax_data_select").change(function()
	{
		var id = $(this).val();
		var type = $(this).attr('name');
		var url = "/hotel/ajax/"+id+"/"+type;
		//var data = pull_data(url);
		$.ajax(
	{
		url: url,
		dataType: "JSON",
		method: "GET",
		success: function(data)
		{
			if(type == "details")
		{
			//alert(data);
			$("#hotelAddress").val(data.address);
			$("#hotelPostalCode").val(data.post_code);
		}
			//_data = data;
		}
	});
		
		//alert(data);
	});

});

function pull_data(url)
{
	//var _data;
	return $.ajax(
	{
		url: url,
		dataType: "JSON",
		method: "GET",
		success: function(data)
		{
			console.log(data);
			//_data = data;
		}
	});
}