<div class="container mt-3">
  <h2 style="font: !important;font-size: 20px;font-weight: bolder;">Gym Members</h2>


  <x-formMembers :cat='$cat'  :comp='$comp'  :t='$t' :l='$l'></x-formMembers>


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
      @foreach($members as $member)
      <tr>
       
       <td>{{ $member->name }}</td>
       <td>{{ $member->email }}</td>
       <td>{{ $member->phone }}</td>
       <td><a href="{{ url('members/singl/'.$member->id) }}">See profile</a></td>
       <td>
        <a href="{{ url('members/delete/'.$member->id) }}"><span class="badge bg-danger">Delete</span></a> 
        <a href="{{ url('members/edit/'.$member->id) }}"><span class="badge bg-info">Edit</span></a></td>
        </td>
       
       
      
      </tr>

      @endforeach
    
    </tbody>
  </table>
      <div class="pagination">
    {!! $members->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>

</div>