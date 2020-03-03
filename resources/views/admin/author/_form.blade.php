<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" value="{{old('name',isset($author)?$author->name:null)}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Author's Name">
    @error('name')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label for="description">Description</label><br>
    <textarea name="description" id="description" cols="40" rows="5">{{old('name',isset($author)?$author->description:null)}}</textarea>
    @error('description')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputFile">Author's Image</label>
        <div class="custom-file">
            <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            @error('photo')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
</div>
