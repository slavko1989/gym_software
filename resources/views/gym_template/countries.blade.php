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
    
  </div>
  <hr>

  <div class="w3-container">
    <h5>Earnings by year/Click to see year by months</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      @foreach($incomesByYear as $i)
      <tr>
        
        <td><a href="{{ url('members/incomes_by_year_month/'.$i->year) }}">{{ $i->year }}</a></td>
        
       
      </tr>
       @endforeach
        
      
    </table>
    <br>
    
  </div>
  <hr>