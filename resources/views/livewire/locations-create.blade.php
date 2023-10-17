<div class="container mt-3">
  <h2 style="font: !important;font-size: 20px;font-weight: bolder;">Gym Locations</h2>


  <x-formLoc></x-formLoc>


  <table class="table table-striped">
    <thead>
      <tr>
        <th>Country</th>
        <th>City</th>
        <th>Street</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach($locs as $loc)
      <tr>
      
       <td>{{ $loc->country }}</td>
       <td>{{ $loc->city }}</td>
       <td>{{ $loc->street }}</td>
       <td>{{ $loc->email }}</td>
       <td>{{ $loc->phone }}</td>
       <td>
        <a href="{{ url('locations/delete/'.$loc->id) }}"><span class="badge bg-danger">Delete</span></a> 
        <a href="{{ url('locations/edit/'.$loc->id) }}"><span class="badge bg-info">Edit</span></a></td>
        </td>
       
       
      
      </tr>
      @endforeach
    </tbody>
  </table>

</div>