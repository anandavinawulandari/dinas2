<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>
    <form action="{{route('lapstugas.store')}}" method="post" enctype="multipart/form-data">

    @csrf
    <input type="text" name="name" placeholder="Surattugasku">
    <input type="text" name="description" placeholder="Surattugas">
    <input type="file" name="file">
    <input type="submit">
    </form>
</body>
</html>