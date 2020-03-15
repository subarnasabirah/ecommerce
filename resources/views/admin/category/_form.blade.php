<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{old('name',isset($category)?$category->name:null)}}" class="form-control" id="name" placeholder="Enter category name" >
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="is_featured">Is Featured?</label>
    <input type="checkbox" name="is_featured" @if(old('is_featured',isset($category)?$category->is_featured:null)==1) checked @endif value="1" id="is_featured">
    <label for="is_featured">Yes</label>
</div>
<div class="form-group">
    <label for="status">Status</label>
    <br>
    <input type="radio" name="status" @if(old('status',isset($category)?$category->status:null)=='Active') checked @endif value="Active" id="active">
    <label for="active">Active</label>
    <input type="radio" name="status" @if(old('status',isset($category)?$category->status:null)=='Inactive') checked @endif value="Inactive" id="inactive">
    <label for="inactive">Inactive</label>
</div>
@error('status')
<div class="alert alert-danger">{{ $message }}</div>
@enderror