<div class="container mt-3">
  <h2 style="font: !important;font-size: 20px;font-weight: bolder;">Company</h2>


  <x-formCompany></x-formCompany>


  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Contry</th>
        <th>City</th>
        <th>Address</th>
        
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach($comp as $comps)
      <tr>
          <td>{{ $comps->id }}</td>
          <td>{{ $comps->name }}</td>
          <td>{{ $comps->email }}</td>
          <td>{{ $comps->phone }}</td>
          <td>{{ $comps->country }}</td>
          <td>{{ $comps->city }}</td>
          <td>{{ $comps->address }}</td>
          <td><a href="{{ url('company/delete/'.$comps->id) }}"><span class="badge bg-danger">Delete</span></a> 
            <a href="{{ url('company/edit/'.$comps->id) }}"><span class="badge bg-info">Edit</span></a></td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>