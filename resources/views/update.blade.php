@extends('master')

@section('content')
<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>

@php
	$month = array(
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July ',
    'August',
    'September',
    'October',
    'November',
    'December',
);
@endphp
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	
					@if (Session::has('error'))
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							{{Session::get('error')}}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
					@endif

						<form action="/updateuser" method="post" class="form-group form-container" >
							@csrf
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" required name="name" class="form-control" 
								value="{{Session::has('user_name')?Session::get('user_name'):""}}">
							</div>
							<div class="form-group">
					              <label for="name">Blood Group</label><br>
					              <select class="form-control demo-default" required id="blood_group" name="blood_group" required>
					                <option value="A+" 
										@if (Session::has('use_blood_group'))
											{{Session::get('user_blood_group')=="A+"?" selected":""}}
										@endif
										>A+</option>
										<option value="A-"
											@if (Session::has('user_blood_group'))
												{{Session::get('user_blood_group')=="A-"?" selected":""}}
											@endif
										>A-</option>
										<option value="B+"
											@if (Session::has('user_blood_group'))
												{{Session::get('user_blood_group')=="B+"?" selected":""}}
											@endif
										>B+</option>
										<option value="B-"
											@if (Session::has('user_blood_group'))
												{{Session::get('user_blood_group')=="B-"?" selected":""}}
											@endif
										>B-</option>
										<option value="O+"
											@if (Session::has('user_blood_group'))
												{{Session::get('user_blood_group')=="O+"?" selected":""}}
											@endif
										>O+</option>
										<option value="O-"
											@if (Session::has('user_blood_group'))
												{{Session::get('user_blood_group')=="O-"?" selected":""}}
											@endif
										>O+</option>
										<option value="AB+"
											@if (Session::has('user_blood_group'))
												{{Session::get('user_blood_group')=="AB+"?" selected":""}}
											@endif
										>AB+</option>
										<option value="AB-"
											@if (Session::has('user_blood_group'))
												{{Session::get('user_blood_group')=="AB-"?" selected":""}}
											@endif
									>AB-</option>
					              </select>
					        </div><!--End form-group-->
							
							<div class="form-group">
									<label for="fullname">Session</label>
									<select class="form-control demo-default" id="session" name="session" required>
										@for ($i = 2015; $i <=2022; $i++)
										<option value="{{$i."-".$i+1}}" 
											@if (Session::has('user_session'))
												{{Session::get('user_session')==($i."-".$i+1)?" selected":""}}
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
								value="{{Session::has('user_phone')?Session::get('user_phone'):''}}" 
								class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
								</div><!--End form-group-->
							
							
								<div class="form-group">
									<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update">Update</button>
							</div>
						</form>
					</div>
				</div>
				<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->
					@if (Session::has('update'))
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							{{Session::get('update')}}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
					@endif	

						<form action="updatepass" method="post" class="form-group form-container" >
							@csrf
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->
					@if (Session::has('update'))
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							{{Session::get('update')}}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
					@endif	

						<form action="lastdonate" method="post" class="form-group form-container" >
							@csrf
							<select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
								<option value="">---Day---</option>
								@for ($i = 1; $i <=31; $i++)
									<option value="{{$i<10?"0".$i:$i}}">
										@if ($i<10)
											0{{$i}}
										@else
											{{$i}}
										@endif
									</option>
								@endfor
							  </select>

							  <select class="form-control demo-default" id="date" name="month" style="margin-bottom:10px;" required>
								<option value="">---Month---</option>
								@for ($i = 1; $i <=12; $i++)
									<option value="{{($i<10)?("0".$i):$i}}">
										{{$month[$i-1]}}
									</option>
								@endfor
							  </select>

							  <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
								<option value="">---Year---</option>
								@for ($i = 1995; $i <=date('Y'); $i++)
									<option value="{{$i}}" >
										{{$i}}
									</option>
								@endfor
								
							  </select>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Last Donate</button>
							</div>
						</form>
					</div>
				</div>


				<div class="card col-md-6 offset-md-3">
					
					<!-- Display Message -->
					@if (Session::has('error'))
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							{{Session::get('error')}}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
					@endif	

					<div class="panel panel-default" style="padding: 20px;">
						<form action="/delete" method="post" class="form-group form-container" >
							@csrf
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
@endsection