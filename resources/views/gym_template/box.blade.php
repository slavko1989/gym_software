<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">

     <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><img src="{{ asset('gym_img/1.jpg') }}" style="width: 70px;height: 70px;"></div>
        <div class="w3-right">
          <h3>{{ $member }}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Members</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><img src="{{ asset('gym_img/2.jpg') }}" style="width: 70px;height: 70px;"></div>
        <div class="w3-right">
          <h3>{{ $trainers }}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Our Trainers</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><img src="{{ asset('gym_img/3.jpg') }}" style="width: 70px;height: 70px;"></div>
        <div class="w3-right">
          <h3>{{ $prg }}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Our programs</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><img src="{{ asset('gym_img/g.jpeg') }}" style="width: 70px;height: 70px;"></div>
        <div class="w3-right">
          <h3>{{ $locations }}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Our locations</h4>
      </div>
    </div>
    
  </div>
@yield('feeds')