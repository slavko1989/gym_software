<div class="container mt-3" style="">
  <h2 style="font: !important;font-size: 20px;font-weight: bolder;">Categories</h2>

  <x-formPr></x-formPr>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($program as $p)
      <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->name }}</td>
          <td>{{ $p->price }}$</td>
          <td><a href="{{ url('programs/delete/'.$p->id) }}"><button type="button" class="btn btn-danger">Danger</button></a> 
            <a href="{{ url('programs/edit/'.$p->id) }}"><button type="button" class="btn btn-info">Info</button></a></td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>

