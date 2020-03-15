<div class="form-group">
    <label>Book Category</label>
    <select class="form-control" name="category_id">
        <option>Select</option>
        @foreach($categories as $id=>$category)
            <option value="{{$id}}">{{$category}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Author</label>
    <select class="form-control" name="author_id">
        <option>Select</option>
        @foreach($authors as $id=>$author)
            <option value="{{$id}}">{{$author}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" value="{{old('title',isset($free_book)?$free_book->title:null)}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Book Title">
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




