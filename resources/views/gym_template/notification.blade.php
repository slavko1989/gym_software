@auth
@extends('gym_template/head')
@section('title','GYM SOFTWARE')
@section('links')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
@include('gym_template/sidebar')
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
</header>  </header>

  <div class="w3-row-padding w3-margin-bottom">
  </div>

@section('gym_template/feeds')
@endsection
  <div class="w3-panel" >
    <div class="w3-row-padding" style="margin:0 -16px;">
      <div class="w3-twothird" >
        




<p>Total notofications: {{ $totalNotifications }}</p>
@if(auth()->user()->role=="1")
    @forelse($notifications as $notification)

 @php
        $data = json_decode($notification->data);
    @endphp
        <div class="alert {{ $notification->read_at ? 'alert-read' : 'alert-success' }}" role="alert">
            <p>{{ $notification->created_at }}</p>
            <p lass="notification-text">

                
               
                    {{  
                        $data->message ?? 'no mess'

                    }}
                   
            
                @if($notification->read_at)
                    <p style="color: black;font-weight: bolder;">{{ 'you read this' }}</p>
                @else
                <a href="{{ url('gym_template/notification/' . $notification->id)  }}" class="float-right mark-as-read">
                    Mark as read
                </a>
                
                @endif
            </p>
        </div>
    @empty
        There are no new notifications
    @endforelse
@endif

<style>
    .alert-read {
    background-color: gray;
}
.alert-read .notification-text {
        color: #777;
    }
</style>
            
        
         

      </div>
    </div>
  </div>
  <hr>
  



@include('gym_template/footer')
@else
{{ "go away" }}
@endauth






   

   
