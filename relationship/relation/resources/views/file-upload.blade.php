<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form action="{{ route('file-upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" required>
    <button type="submit">Upload</button>
</form>

</body>
</html>
