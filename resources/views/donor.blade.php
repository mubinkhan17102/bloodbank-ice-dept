@extends('master')
@section('content')
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donors</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>

    

<div class="container" style="padding: 60px 0;">
	<div class="row data">
		
		<table class="table">
			<thead style=" background-color : #e74c3c;color:aliceblues">
			  <tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
				<th scope="col">Blood Group</th>
				<th scope="col">Gender</th>
				<th scope="col">Phone</th>
				<th scope="col">Session</th>
				<th scope="col">Birth Day</th>
				<th scope="col">Last Donate</th>
				<th scope="col">Total Donate</th>
			  </tr>
			</thead>
			<tbody>
			@if (sizeof($donors)!=0)
				@foreach($donors as $donor)
					<tr>
						<th scope="row">1</th>
						<td>{{$donor->name}}</td>
						<td>{{$donor->blood_group}}</td>
						<td>{{$donor->gender}}</td>
						<td>{{$donor->phone}}</td>
						<td>{{$donor->session}}</td>
						<td>{{$donor->birth_day}}</td>
						<td>{{$donor->last_donate}}</td>
						<td>{{$donor->total_donate}}</td>
					</tr>
				@endforeach
			@else
			<div class="container-fluid">
				<div class="alert alert-info" role="alert">
					No donor exist for this blood group.
				</div>
			</div>
			@endif
			</tbody>
		  </table>
	</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
@endsection