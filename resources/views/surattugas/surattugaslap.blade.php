<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>
    <form action="{{route('surattugas.uploadstugas')}}" method="post" enctype="multipart/form-data"></form>
    <input type="text" name="name" placeholder="Surattugasku">
    <input type="text" name="description" placeholder="Surattugas">
    <input type="file" name="file">
    <input type="submit" name="">
</body>
</html>