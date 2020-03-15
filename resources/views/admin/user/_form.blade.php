<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name',isset($user)?$user->name:null) }}" class="form-control" id="name" placeholder="Enter user Name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" value="{{ old('email',isset($user)?$user->email:null) }}" class="form-control" id="email" placeholder="Enter email">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>

<div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="text" name="phone" value="{{ old('phone',isset($user)?$user->phone:null) }}" class="form-control" id="phone" placeholder="Enter phone number">
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>

<div class="form-group">
    <label for="image">Image</label><br>
    <input type="file" name="image" id="image">
    @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>

<div class="form-group">
    <label for="status">Gender</label><br>
    <input type="radio" @if(old('gender',isset($user)?$user->gender:null) == 'Male') checked @endif name="status" id="active" value="Male">
    <label for="male">Male</label>
    <input type="radio" @if(old('gender',isset($user)?$user->gender:null) == 'Female') checked @endif name="status" id="female" value="Female">
    <label for="female">Female</label>
    @error('gender')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>



