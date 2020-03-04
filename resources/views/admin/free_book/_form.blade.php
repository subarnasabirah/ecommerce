<div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" value="{{old('name',isset($author)?$author->name:null)}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Book Title">
    @error('title')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <label for="exampleInputFile">Book's Image</label>
        <div class="custom-file">
            <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            @error('photo')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
</div>

<div class="form-group">
    <label for="file">Book's File</label>
    <div class="custom-file">
        <input type="file" name="file" class="custom-file-input" id="file">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        @error('file')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
</div>

<div class="form-group">
    <label for="author_name">Author Name</label>
    <input type="text" name="author_name" value="{{old('author_name',isset($author)?$author->name:null)}}" class="form-control" id="author_name" placeholder="Enter Author's Name">
    @error('author_name')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    <label>Book Category</label>
    <select class="form-control" name="category">
        <option>option 1</option>
        <option>option 2</option>
        <option>option 3</option>
        <option>option 4</option>
        <option>option 5</option>
    </select>
</div>
