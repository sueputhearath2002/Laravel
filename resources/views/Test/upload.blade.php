@extends("layout.master")
@section('css')
<style>
    #photos .img {
        margin: 4px;
        display: inline-block;
        border: 2px solid green;
    }
</style>
@endsection
@section('content')
<h1>Please upload file below!</h1>
<hr>
<form action="{{ route('upload.save') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <p>File : <input type="file" name="photo[]" accept="image/*" onchange="preview(event)" multiple> </p>

    <div id="photos">

    </div>
    <button>Upload</button>

    @if (Session::has('error'))
    <p>
        {{ session('error') }}
    </p>
    @endif
    @if (Session::has('success'))
    <p>
        {{ session('success') }}
    </p>
    @endif
</form>
@endsection
@section('js')
<script>
    function preview(evt) {
        let photos = evt.target.files;
        let img = "";
        for (let i = 0; i < photos.length; i++) {
            let src = URL.createObjectURL(evt.target.files[i]);
            img += "<img src ='" + src + "'width= '200px' 'height ='100px'>";
        }
        document.getElementById("photos").innerHTML = img;
    }
</script>

@endsection
