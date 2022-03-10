@extends('master')
@section('content')
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
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
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Registration</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>
					<hr class="red-bar">

					
          <!-- Error Messages -->
		  	@if (Session::has('error'))
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					{{Session::get('error')}}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endif
			<!-- End of error message -->

				<form class="form-group" action="signup" method="post" novalidate="">
					@csrf
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname"
						value="{{Session::has('name')?Session::get('name'):''}}"
						placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
                      

					</div><!--full name-->

					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
                <option value="A+" 
					@if (Session::has('blood_group'))
						{{Session::get('blood_group')=="A+"?" selected":""}}
					@endif
				>A+</option>
                <option value="A-"
					@if (Session::has('blood_group'))
						{{Session::get('blood_group')=="A-"?" selected":""}}
					@endif
				>A-</option>
                <option value="B+"
					@if (Session::has('blood_group'))
						{{Session::get('blood_group')=="B+"?" selected":""}}
					@endif
				>B+</option>
                <option value="B-"
					@if (Session::has('blood_group'))
						{{Session::get('blood_group')=="B-"?" selected":""}}
					@endif
				>B-</option>
                <option value="O+"
					@if (Session::has('blood_group'))
						{{Session::get('blood_group')=="O+"?" selected":""}}
					@endif
				>O+</option>
                <option value="O-"
					@if (Session::has('blood_group'))
						{{Session::get('blood_group')=="O-"?" selected":""}}
					@endif
				>O+</option>
                <option value="AB+"
					@if (Session::has('blood_group'))
						{{Session::get('blood_group')=="AB+"?" selected":""}}
					@endif
				>AB+</option>
                <option value="AB-"
					@if (Session::has('blood_group'))
						{{Session::get('blood_group')=="AB-"?" selected":""}}
					@endif
				>AB-</option>
              </select>
             
            </div><!--End form-group-->
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:5px;" checked>Male
				              		<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;margin-right:5px;">Female
				              		
				    </div><!--gender-->
				    <div class="form-inline">
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="date" style="margin-bottom:10px;" required>
                <option value="">---Date---</option>
				@for ($i = 1; $i <=31; $i++)
					<option value="{{$i}}" 
						@if (Session::has('day'))
							{{Session::get('day')==$i?" selected":""}}
						@endif
					>
						@if ($i<10)
							0{{$i}}
						@else
							{{$i}}
						@endif
					</option>
				@endfor
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
                <option value="01" 
				@if (Session::has('month'))
					{{Session::get('month')=="01"?" selected":""}}
				@endif
				>January</option>
				<option value="02" 
				@if (Session::has('month'))
				{{Session::get('month')=="02"?" selected":""}}
			@endif
				>February</option>
				<option value="03" 
				@if (Session::has('month'))
				{{Session::get('month')=="03"?" selected":""}}
			@endif
				>March</option>
				<option value="04" 
				@if (Session::has('month'))
					{{Session::get('month')=="04"?" selected":""}}
				@endif
				>April</option>
				<option value="05" 
				@if (Session::has('month'))
					{{Session::get('month')=="05"?" selected":""}}
				@endif
				>May</option>
				<option value="06" 
				@if (Session::has('month'))
					{{Session::get('month')=="06"?" selected":""}}
				@endif
				>June</option>
				<option value="07" 
				@if (Session::has('month'))
					{{Session::get('month')=="07"?" selected":""}}
				@endif
				>July</option>
				<option value="08" 
				@if (Session::has('month'))
					{{Session::get('month')=="08"?" selected":""}}
				@endif>August</option>
				<option value="09" 
				@if (Session::has('month'))
					{{Session::get('month')=="09"?" selected":""}}
				@endif
				>September</option>
				<option value="10" 
				@if (Session::has('month'))
					{{Session::get('month')=="10"?" selected":""}}
				@endif
				>October</option>
				<option value="11" 
				@if (Session::has('month'))
					{{Session::get('month')=="11"?" selected":""}}
				@endif
				>November</option>
				<option value="12" 
				@if (Session::has('month'))
					{{Session::get('month')=="12"?" selected":""}}
				@endif
				>December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
                @for ($i = 1957; $i <=2008; $i++)
					<option value="{{$i}}" 
						@if (Session::has('year'))
							{{Session::get('year')==$i?" selected":""}}
						@endif
					>
						{{$i}}
					</option>
				@endfor
				
              </select>
            </div><!--End form-group-->
            
				    <div class="form-group">
						<label for="fullname">Session</label>
						 <select class="form-control demo-default" id="session" name="session" required>
						<option value="">---Select Your Session---</option>
						@for ($i = 2015; $i <=2022; $i++)
						<option value="{{$i."-".$i+1}}" 
							@if (Session::has('session'))
								{{Session::get('session')==($i."-".$i+1)?" selected":""}}
							@endif
						>
							{{$i."-".$i+1}}
							</option>
						@endfor						
					</select>
              
					</div>
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" 
			  value="{{Session::has('contact_no')?Session::get('contact_no'):""}}"
			  placeholder="01********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
             
            </div><!--End form-group-->		
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern="{6,}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern="{6,}">
             
            </div><!--End form-group-->
            
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Sumbit</button>
					</div>
				</form>
		</div>
	</div>
</div>
@endsection