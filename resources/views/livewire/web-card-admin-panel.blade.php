<div class="container mt-3">
  <h2 style="font: !important;font-size: 20px;font-weight: bolder;">
  Web Card Gym Members
</h2>




  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Profile</th>
        
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach($web_card as $member)
      @if($member->web_card=="1")
      <tr>
       
       <td>{{ $member->name }}</td>
       <td>{{ $member->email }}</td>
       <td>{{ $member->phone }}</td>
       <td><img class="card-img-top" src="{{ asset('members_img/'.$member->profile) }}" alt="Card image" style="width:60px;border-radius: 7px;"></td>
       <td>
        <a href="{{ url('members/delete/'.$member->id) }}"><span class="badge bg-danger">Delete</span></a> 
        <a href="{{ url('members/edit/'.$member->id) }}"><span class="badge bg-info">Edit</span></a></td>
        </td>
      </tr>

      @else
      {{ "There are no one yet" }}

      @endif


      @endforeach
    
    </tbody>
  </table>
    

    

</div>
