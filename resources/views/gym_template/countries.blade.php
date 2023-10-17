<div class="w3-container">
    <h5>Expired in 5 days tickets</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      
      <tr>
        @foreach($expiredDate as $ex)


        <td style="color: black;font-weight: bolder;">
<img class="card-img-top" src="{{ asset('members_img/'.$ex->profile) }}" alt="Card image" style="width:70px;height:70px;border-radius:8px;">

          {{ $ex->name }}</td>
        <td>Expiration date: {{ $ex->date_ex }}</td>
        
        @endforeach
      </tr>

    </table><br>
    <button class="w3-button w3-dark-grey">View more   <i class="fa fa-arrow-right"></i></button>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Earnings by year and month</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      @foreach($incomes as $i)
      <tr>
        
        <td>{{ $i->year }} . {{ $i->month }}</td>
        <td>{{ $i->total }}$</td>
       
      </tr>
       @endforeach
        
      
    </table>
    <br>
    
  </div>
  <hr>