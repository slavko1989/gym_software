<!-- Top container -->

<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-left"><img src="{{ asset('gym_img/logo.jpg') }}" style="width:50px;height: 50px;border-radius: 30px;"></span>

  <span class="w3-bar-item w3-right"><a href="{{ asset('user/profile') }} ">Your profile</a>
</div></span>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    @auth
    <div class="w3-col s4">
      <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      @if(auth()->user()->role=='1')
      <span>Welcome, <strong>{{ auth()->user()->name }}</strong></span><br>
      @endif
    </div>
    @endauth
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="{{ url('gym_template/index') }}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Dashboard</a>
    <a href="{{ url('cat/create') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Categories</a>    
    <a href="{{ url('members/create') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Gym Members</a>
    <a href="{{ url('company/create') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Comapnies</a>
    <a href="{{ url('locations/create') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Locations</a>
    <a href="{{ url('trainers/create') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  Trainers</a>
    <a href="{{ url('programs/create') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Programs</a>
    <a href="{{ url('') }}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Web card members</a><br><br>
  </div>
</nav>
