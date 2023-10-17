 @props(['edit'])

  <p style='color: darkblue;'>Update category</p>  
@if(session()->has('message'))

  <p style="font: !important;font-size: 20px;font-weight: bolder;">
    {{ session()->get('message') }}
  </p>

@endif

@if(session()->has('danger_message'))

  <p style="font: !important;font-size: 20px;font-weight: bolder;">
    {{ session()->get('danger_message') }}
  </p>

@endif
<div style="background-color: violet;border-radius:20px;margin: 10px;padding: 10px;">
<form action="{{ url('cat/edit/'.$edit->id) }}" method="post">
    @csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $edit->name }}">
    @error('name')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Price:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter price" name="price" value="{{ $edit->price }}">
    @error('price')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
</div>
