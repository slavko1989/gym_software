<div class="w3-container">
    <h5>Expired in 5 days tickets</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <tr>
            @foreach ($expiredDate as $member)
                @php
                    $expirationDate = Carbon\Carbon::parse($member->date_ex);
                    $today = Carbon\Carbon::now();
                    $fiveDaysFromNow = $today->addDays(5);
                @endphp

                <td>
                    @if ($expirationDate->equalTo($today)) 
                        <p style="color: black; font-weight: bolder;">Članarina je istekla za člana</p>
                        <img class="card-img-top" src="{{ asset('members_img/'.$member->profile) }}" alt="Card image" style="width:70px;height:70px;border-radius:8px;">
                        {{ $member->name }} {{ $member->date_ex }}
                    @elseif ($expirationDate->lessThanOrEqualTo($fiveDaysFromNow))
                        <p>Članarina ističe za člana za pet dana</p>
                        <img class="card-img-top" src="{{ asset('members_img/'.$member->profile) }}" alt="Card image" style="width:70px;height:70px;border-radius:8px;">
                        {{ $member->name }}
                        <br>Expiration date: {{ $expirationDate->format('Y-m-d') }}
                    @endif
                </td>
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