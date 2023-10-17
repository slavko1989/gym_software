  @props(['formCategories'])

  <p style='color: darkblue;'>Add new  program</p>  
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
<div style="background-color: violet;border-radius:20px;margin: 10px;padding: 10px;width: 500px;">
<form action="{{ url('programs/create') }}" method="post">
    @csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
    @error('name')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Price:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter price" name="price" value="{{ old('price') }}">
    @error('price')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">ADD</button>
</form>
</div>
