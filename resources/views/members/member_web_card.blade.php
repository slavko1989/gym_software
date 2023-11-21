@extends('gym_template/head')
@section('title','GYM SOFTWARE')
@section('links')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-3">
	@if($card && $card->user)
    <h1>Podaci o kartici teretane za korisnika: <span style="color: darkblue;">{{ $card->user->name }}</span></h1>

  
  <div class="card" style="width:400px">
    <img class="card-img-top" src="{{ asset('members_img/'.$card->profile) }}" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">{{ $card->name }}</h4>
      <p class="card-text">{{ $card->email }}</p>
      @if($card->web_card=="1")
      <p class="card-text" style="color: brown;font-weight: bolder;">{{ "WEB CARD"}}</p>
      @endif


      <p class="card-text">{{ $card->date_begin }} --- {{ $card->date_ex }}</p>

      <p class="card-text">{{ $card->categories->name }} - {{ $card->categories->price }}$</p>

      @if($card->trainers)
      <p class="card-text">{{ $card->trainers->name }} --- {{ $card->trainers->program->name }} --- {{ $card->trainers->program->price }}</p>
      @endif

      @if($card->company)
      <p class="card-text">{{ $card->company->name }}</p>
      @endif
      <p class="card-text">{{ $card->country }} / {{ $card->city }} / {{ $card->address }} </p>
      <p class="card-text">Created at: {{ $card->created_at }}</p>
      <p class="card-text">
      	@if($card->cat_id !=0 && $card->trainer_id !=0 )
        <p> Full price: <span style="color: brown;">


            <?php 
            $num1 = $card->categories->price;
            $num2 = $card->trainer->program->price;
            $full = $num1 + $num2;
            echo $full ."$";
            ?>
            </span>
           
          
         </p>

          @else

            {{ "FULL PRICE: " .  $card->categories->price }}$

         @endif

     </p>

      <a href="{{ url('members/member_web_card_pdf/'. $card->user->id) }}" class="btn btn-primary">Add to pdf</a>
    </div>
  </div>
  <br>
  @else
    <p>Nothing to show</p>
@endif
 
</div>

</body>
</html>





