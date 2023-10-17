<div class="container mt-3">
  <h2 style="font: !important;font-size: 20px;font-weight: bolder;">Gym Trainers</h2>


  <x-formTrainers :prg='$prg'></x-formTrainers>


  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Program/Price</th>
        <th>Profile</th>
        
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach($trainer as $trainer)
      <tr>
       
       <td>{{ $trainer->name }}</td>
       <td>{{ $trainer->email }}</td>
       <td>{{ $trainer->phone }}</td>
       <td>{{ $trainer->program->name }} <span style="color:red;">{{ $trainer->program->price }}$</span></td>
       <td>
          <a href="{{ url('trainers/singl_trainer/'.$trainer->id) }}">See profile</a>
       </td>
       <td>
        <a href="{{ url('trainers/delete/'.$trainer->id) }}"><span class="badge bg-danger">Delete</span></a> 
        <a href="{{ url('trainers/edit/'.$trainer->id) }}"><span class="badge bg-info">Edit</span></a></td>
        </td>
       
       
      
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
