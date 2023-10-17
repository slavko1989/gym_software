 @props(['edit'])

  <p style='color: darkblue;'>Update company</p>  
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
<form action="{{ url('company/edit/'.$edit->id) }}" method="post">
    @csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name"  name="name" value="{{ $edit->name }}">
    @error('name')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Email:</label>
    <input type="text" class="form-control" id="name"  name="email" value="{{ $edit->email }}">
    @error('email')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Phone:</label>
    <input type="text" class="form-control" id="name"  name="phone" value="{{ $edit->phone }}">
    @error('phone')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Country:</label>
    <input type="text" class="form-control" id="name"  name="country" value="{{ $edit->country }}">
    @error('country')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">City:</label>
    <input type="text" class="form-control" id="name"  name="city" value="{{ $edit->city }}">
    @error('city')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Address:</label>
    <input type="text" class="form-control" id="name"  name="address" value="{{ $edit->address }}">
    @error('address')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
</div>
