<div class="container mt-3" style="">
  <h2 style="font: !important;font-size: 20px;font-weight: bolder;">Categories</h2>

  <x-formCategories></x-formCategories>

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
        @foreach($cat as $cats)
      <tr>
          <td>{{ $cats->id }}</td>
          <td>{{ $cats->name }}</td>
          <td>{{ $cats->price }}$</td>
          <td><a href="{{ url('cat/delete/'.$cats->id) }}"><button type="button" class="btn btn-danger">Danger</button></a> 
            <a href="{{ url('cat/edit/'.$cats->id) }}"><button type="button" class="btn btn-info">Info</button></a></td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
