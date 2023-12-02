  <div class="w3-container">
    <h5>Recent Users</h5>
    <ul class="w3-ul w3-card-4 w3-white">

      @foreach($latest as $l)
      <li class="w3-padding-16">
        <img src="{{ asset('members_img/'.$l->profile) }}" class="w3-margin-right" style="width:55px;border: 5px solid black;">
        <span class="w3-xlarge"><a 
        style="font-family: fantasy;
       color: yellowgreen;
       text-decoration: none;
       text-shadow: 2px 2px #ff0000;" 
       href="{{ url('members/singl/'.$l->id) }}">{{ $l->name }}</a>
     </span><br>
      </li>
     
      @endforeach



   
    

    </ul>

  </div>

  <hr>
 