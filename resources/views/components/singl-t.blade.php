@props(['t'])
<div class="container">
  <h2>PROFILE</h2>
  <p>{{ $t->name }}</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="{{ asset('trainers_img/'.$t->profile) }}" alt="Card image" style="width:100%">
    <div class="card-body">
      <ul>
        <li><p>Address <span style="color: red;font-family: monospace;font-weight: bolder;">{{ $t->address }}</p></li>
    

        <li><p>City<span style="color: red;font-family: monospace;font-weight: bolder;">{{ $t->city }}</span></p></li>
        <li><p>Country<span style="color: red;font-family: monospace;font-weight: bolder;">{{ $t->country }}</span></p></li>

      </ul>
    </div>
  </div>
  <br>
</div>
