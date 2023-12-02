 @props(['edit','cats','comps','trn','lcn'])

  <p style='color: darkblue;'>Update member</p>  
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
<form action="{{ url('members/edit/'.$edit->id) }}" method="post" enctype="multipart/form-data">
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
    <input type="text" class="form-control" id="name"  name="email" value="{{ $edit->email }}" readonly>
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

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Image:</label>
    <input type="file" class="form-control" id="name"  name="profile" value="{{ $edit->profile }}">
    @error('profile')
        <p style="color: black;">{{ $message }}</p>
    @enderror
    <img class="card-img-top" src="{{ asset('members_img/'. $edit->profile) }}" alt="Card image" style="width:80px;height:80px;">
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Date begin:</label>
    <input type="text" class="form-control" id="name"  name="date_begin" value="{{ $edit->date_begin }}">
    @error('date_begin')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Date expired:</label>
    <input type="text" class="form-control" id="name"  name="date_ex" value="{{ $edit->date_ex }}">
    @error('date_ex')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Category:</label>
    <select type="text" class="form-control" name="cat_id" value="{{ $edit->cat_id }}">
      @foreach($cats as $cat)
      <option value="{{ $cat->id }}">{{ $cat->name }}</option>
      @endforeach
      
    </select>
    @error('cat_id')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Status:</label>
    <select type="text" class="form-control" name="status" value="{{ $edit->status }}">
      
      <option value="0">Default</option>
      <option value="1">Active</option>
      <option value="2">Deactive</option>
    </select>
    @error('status')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Payment:</label>
    <select type="text" class="form-control" name="payment" value="{{ $edit->payment }}">
      
      <option value="0">Default</option>
      <option value="1">Paid</option>
      <option value="2">Not paid</option>
    </select>
    @error('payment')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Company:</label>
    <select type="text" class="form-control" name="comp_id" value="{{ $edit->comp_id }}">
      
      <option value="0">No company</option>
      @foreach($comps as $comp)
      <option value="{{ $comp->id }}">{{ $comp->name }}</option>
      @endforeach
    </select>
    @error('comp_id')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Location:</label>
    <select type="text" class="form-control" name="location_id" value="{{ $edit->location_id }}">
      
      <option value="0">Must choose</option>
      @foreach($lcn as $l)
      <option value="{{ $l->id }}" style="color: black;">{{ $l->name }}</option>
      @endforeach
    </select>
    @error('comp_id')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>

  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Trainer:</label>
    <select type="text" class="form-control" name="trainer_id" value="{{ $edit->trainer_id }}">
      
      <option value="0">No trainer</option>
      @foreach($trn as $t)
      <option value="{{ $t->id }}">{{ $t->name }}</option>
      @endforeach
    </select>
    @error('comp_id')
        <p style="color: black;">{{ $message }}</p>
    @enderror
  </div>



  <input type="hidden" name="updated_at" value="{{ $edit->updated_at }}">

  <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
</div>
