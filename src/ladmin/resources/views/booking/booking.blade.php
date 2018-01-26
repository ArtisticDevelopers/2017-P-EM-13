@extends('layouts.app')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="/bookings" class="btn btn-primary">ALL</a>&nbsp;&nbsp;
			<a href="/bookings/new" class="btn btn-primary">NEW</a>&nbsp;&nbsp;
			<a href="/bookings/unpaid" class="btn btn-primary">UNPAID</a>&nbsp;&nbsp;
			<a href="/bookings/confirmed" class="btn btn-primary">CONFIRMED</a>&nbsp;&nbsp;
			<a href="/bookings/deleted" class="btn btn-primary">DELETED</a>
		</div>
		<br />
		<br />
		<div class="col-md-12">
			<h3>Showing: {{ strtoupper($filter) }} bookings (total: {{ $_bookings->total() }} )</h3>
			<table class="table-responsive table-condensed table-hover table-striped">
				<thead>
					<tr>
						<th>CODE</th>
						<th>CUSTOMER</th>
						<th>HOTEL</th>
						<th>ROOM</th>
						<th>TOTAL</th>
						<th></th>
					</tr>
				</thead>
				@forelse($bookings as $b)
				<tr>
					<td>{{ $b['booking_code'] }}</td>
					<td>{{ $b['name'] }}</td>
					<td>{{ $b['hotel'] }}</td>
					<td>{{ $b['room'] }}</td>
					<td>$ {{ number_format($b['total'],2) }}</td>
					<td>
						




						@if($b['is_active'] == 0)
						<a href="/bookings/action/delete/{{$b['booking_id']}}/1" class="btn btn-sm btn-primary">undelete</a>
						@else
						<a href="/bookings/action/delete/{{$b['booking_id']}}/0" class="btn btn-sm btn-primary">delete</a>
						@endif
						&nbsp;

						@if($b['is_confirmed'] == 0)
						<a href="/bookings/action/confirm/{{$b['booking_id']}}/1" class="btn btn-sm btn-primary">confirm</a>
						@else
						<a href="/bookings/action/confirm/{{$b['booking_id']}}/0" class="btn btn-sm btn-primary">not-confirm</a>
						@endif

						&nbsp;

						@if($b['is_paid'] == 0)
						<a href="/bookings/action/paid/{{$b['booking_id']}}/1" class="btn btn-sm btn-primary">paid</a>
						@else
						<a href="/bookings/action/paid/{{$b['booking_id']}}/0" class="btn btn-sm btn-primary">not-paid</a>
						@endif




















					</td>
				</tr>
				@empty
				<tr><td>Sorry, no bookings in records</td></tr>
				@endforelse
			</table>
		</div>
		<div class="col-md-6 col-offset-md-3">{{ $_bookings->links() }}</div>
	</div>
</div>
@endsection