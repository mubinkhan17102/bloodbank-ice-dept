@extends('master')

@section('content')
<div class="container-fluid header-img">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <div class="header">
                <h1 class="text-center">ICE Blood Bank, University of Rajshahi</h1>
            <p class="text-center">Donate Blood, Save Life.</p>
            </div>


            <h1 class="text-center">Search Donors</h1>
            <hr class="white-bar text-center">

            <form action="#" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                
                <div class="form-group center-aligned">
                    <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
                        
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>

                    </select>
                </div>
                <div class="form-group center-aligned">
                    <button type="submit" class="btn btn-lg btn-danger">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid red-background">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate Blood</h1>
            <hr class="white-bar">
            <p class="text-center pera-text">
                Blood is the most precious gift that anyone can give to another person – the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components – red cells, platelets and plasma – which can be used individually for patients with specific conditions. Encourage your friends and family to become regular blood donors. Volunteer with the blood service to reach out to members of your community, provide care to donors, and help manage blood donation sessions/drives. Find out your blood type and register as a blood donor.
            </p>
            
        </div>
    </div>
</div>
<!-- end doante section -->


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                 <h3 class="text-center red">Our Vission</h3>
                    <img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                    <p class="text-center">
                        The objective of collecting blood through voluntary blood donation are: Provide safe and quality blood and blood components collected from voluntary donors. Encourage your friends and family to become regular blood donors. Volunteer with the blood service to reach out to members of your community, provide care to donors, and help manage blood donation sessions/drives. Find out your blood type and register as a blood donor and participate in our ICE Blood Bank.
                    </p>
            </div>
        </div>
        
        <div class="col">
            <div class="card">
                      <h3 class="text-center red">Our Goal</h3>
                    <img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                    <p class="text-center">
                        The objective of collecting blood through voluntary blood donation are: Provide safe and quality blood and blood components collected from voluntary donors. Encourage your friends and family to become regular blood donors. Volunteer with the blood service to reach out to members of your community, provide care to donors, and help manage blood donation sessions/drives. Find out your blood type and register as a blood donor. 
                    </p>
            </div>
        </div>
    
        <div class="col">
            <div class="card">
                  <h3 class="text-center red">Our Mission</h3>
                    <img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                    <p class="text-center">
                        The objective of collecting blood through voluntary blood donation are: Provide safe and quality blood and blood components collected from voluntary donors. Encourage your friends and family to become regular blood donors. Volunteer with the blood service to reach out to members of your community, provide care to donors, and help manage blood donation sessions/drives. Find out your blood type and register as a blood donor.
                    </p>
                </div>
            </div>
 </div>
</div>

<!-- end aboutus section -->
@endsection