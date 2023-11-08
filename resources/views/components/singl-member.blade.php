@props(['member'])
<div class="container">
  <h2>PROFILE</h2>
  <p>{{ $member->name }}</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="{{ asset('members_img/'.$member->profile) }}" alt="Card image" style="width:100%">
    <div class="card-body">
      <ul>
        <li><p>Category <span style="color: red;font-family: monospace;font-weight: bolder;">{{ $member->categories->name }}-{{ $member->categories->price }}$</span> </p></li>
        <li><p>Date begin <span style="color: red;font-family: monospace;font-weight: bolder;">{{ $member->date_begin }} </span></p></li>
        <li><p>Date exired <span style="color: red;font-family: monospace;font-weight: bolder;">{{ $member->date_ex }} </span></p></li>
        <li><p>Location <span style="color: red;font-family: monospace;font-weight: bolder;">{{ $member->location->city }} {{ $member->location->street }}</span></p></li>
        <li><p>Status 
          @if($member->status == 1)
          <span style="color: red;">Active</span>
          @elseif($member->status == 2)
          <span style="color: brown;">NotActive</span>
          @endif
         </p></li>

         <li><p>Payment 
          @if($member->payment == 1)
          <span style="color: red;">Paid</span>
          @elseif($member->payment == 2)
          <span style="color: brown;">Not paid yet</span>
          @endif
         </p></li>

         
          @if($member->comp_id == 0)
          
          @else
          <li><p> Company <span style="color: brown;">{{ $member->company->name }}</span>
          
         </p></li>
         @endif

        <li><p>Country <span style="color: red;font-family: monospace;font-weight: bolder;">{{ $member->country }}</span></p></li>
        <li><p>City <span style="color: red;font-family: monospace;font-weight: bolder;">{{ $member->city }}</span></p></li>
        <li><p>Address <span style="color: red;font-family: monospace;font-weight: bolder;">{{ $member->address }}</span></p></li>
        @if($member->trainer_id == 0)

      
        @else
        <li><p>Trainer <span style="color: red;font-family: monospace;font-weight: bolder;">{{ $member->trainer->name }} / Program:
          {{ $member->trainer->program->name }} /
          Price: {{ $member->trainer->program->price }}$</span></p></li>
          @endif

        <li><p>Created at <span style="color: red;font-family: monospace;font-weight: bolder;">{{ $member->created_at }}</span></p></li>
        <li><p>Updated at <span style="color: red;font-family: monospace;font-weight: bolder;">{{ $member->updated_at }}</span></p></li>
@if($member->cat_id !=0 && $member->trainer_id !=0 )
        <li><p> Full price: <span style="color: brown;">


            <?php 
            $num1 = $member->categories->price;
            $num2 = $member->trainer->program->price;
            $full = $num1 + $num2;
            echo $full ."$";
            ?>
            </span>
          
         </p></li>
         @endif

      </ul>
    </div>
  </div>
  <br>
</div>