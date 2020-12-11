@extends('layouts.main')
@section('content')
<form>
    <div class="form-group">
        <label for="name-company">Name</label>
        <input type="text" class="form-control" id="name-company" name="name-company" placeholder="Enter company's name: ">
    </div>
    <div class="form-group">
        <label for="name-company">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="upload">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="upload" aria-describedby="upload">
            <label class="custom-file-label" for="upload">Choose file</label>
        </div>
    </div>
</form>

@endsection
