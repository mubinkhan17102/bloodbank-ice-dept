@extends('master')

@section('content')
<style>
	h1,h3{
		display: inline-block;
		padding: 10px;
	}
</style>

			<div class="container" style="padding: 60px 0;">
			<div class="row">
				<div class="col-md-12 col-md-push-1">
					<div class="panel panel-default" style="padding: 20px;">
						<div class="panel-body">
							
								<div class="alert alert-danger alert-dismissable" style="font-size: 18px; display: none;">
    						
    								<strong>Warning!</strong> Are you sure you donated blood? if you press yes, you will be able to denote blood again after 3 months.
    							
    							<div class="buttons" style="padding: 20px 10px;">
    								<input type="text" value="" hidden="true" name="today">
    								<button class="btn btn-primary" id="yes" name="yes" type="submit">Yes</button>
    								<button class="btn btn-info" id="no" name="no">No</button>
    							</div>
  							</div>
							<div class="heading text-center">
								<h3>Welcome </h3> 
                                <h1>
                                    @if (Session::has('user_name'))
                                        {{Session::get('user_name')}}
                                    @endif
                                </h1>
							</div>
							<p class="text-center">Here you can mennage your account update your profile</p>
							<button style="margin-top: 20px;" name="date" id="save_the_life" class="btn btn-lg btn-danger center-aligned ">Save Life</button>
							<div class="test-success text-center" id="data" style="margin-top: 20px;"><!-- Display Message here--></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection