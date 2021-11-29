<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    Hello
    <br>
    @foreach($matkul as $mk)
        {{ $mk->nama_mata_kuliah }}
        <br>
    @endforeach

    <form action="/matkul" method="post">
        @csrf <!-- {{ csrf_field() }} -->
        <input type="text" name="nama_mata_kuliah" placeholder="Nama Mata Kuliah">
        <input type="submit" value="Submit">
    </form>

</body>
</html>