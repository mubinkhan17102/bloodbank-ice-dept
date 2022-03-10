@extends('master')

@section('content')
<style>
	.size{
		padding: 80px 0px;
	}
	img{
		width: 300px;
		height: 300px;
	}
	h2{
		color: #e74c3c;
	}
	.white{
		background-color: white;
	}
	p{
		font-size: 18px;
	}
	.right{
		float: right;
	}
	h1{
		color: white;
	}
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}

</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">About Us</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container-fluid size">
	
	<div class="container">
		<div class="row">
		<div class="col-md-6"><img src="img/binoculars.png" alt="Our Vission" class="rounded float-left img-fluid"></div>
		<div class="col-md-6">
			<h2 class="text-center">Our Vission</h2>
			<hr class="red-bar">
			<p>
				The objective of collecting blood through voluntary blood donation are: Provide safe and quality blood and blood components collected from voluntary donors. 
			</p>
			<p>
				Encourage your friends and family to become regular blood donors. Volunteer with the blood service to reach out to members of your community, provide care to donors, and help manage blood donation sessions/drives. Find out your blood type and register as a blood donor.
			</p>
		</div>
	</div>
	</div>
</div>

<div class="container-fluid white size">
	<div class="container ">
	<div class="container">
		<div class="row ">
		<div class="col-md-6">
			<h2 class="text-center">Our Goal</h2>
			<hr class="red-bar">
			<p>
				The objective of collecting blood through voluntary blood donation are: Provide safe and quality blood and blood components collected from voluntary donors. 
			</p>
			<p>
				Encourage your friends and family to become regular blood donors. Volunteer with the blood service to reach out to members of your community, provide care to donors, and help manage blood donation sessions/drives. Find out your blood type and register as a blood donor and participate in our ICE Blood Bank.
			</p>
		</div>
		<div ><img src="img/target.png" alt="Our Vission" class="rounded img-fluid float-right"></div>
	</div>
	</div>		
</div>
</div>
	

	<div class="container-fluid size">
		<div class="container">
		<div class="row">
		<div class="col-md-6"><img src="img/goal.png" alt="Our Vission" class="rounded float-left img-fluid"></div>
		<div class="col-md-6">
			<h2 class="text-center">Our Mission</h2>
			<hr class="red-bar">
			<p>
				The objective of collecting blood through voluntary blood donation are: Provide safe and quality blood and blood components collected from voluntary donors. 
			</p>
			<p>
				Encourage your friends and family to become regular blood donors. Volunteer with the blood service to reach out to members of your community, provide care to donors, and help manage blood donation sessions/drives. Find out your blood type and register as a blood donor.
			</p>
		</div>
	</div>
	</div>
	</div>
@endsection