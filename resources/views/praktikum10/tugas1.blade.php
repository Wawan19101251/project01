<!DOCTYPE html>
<html>
    <head>
        <title>Daftar kategori</title>
    </head>
    <body>
        <h3>Data Kategori</h3>
        Jumlah Data : {{ $Jrek }}
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID Kategori</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($KData as $dt=>$nval)
                <tr>
                    <td>{{$dt+1}}</td>
                    <td>{{$nval->idkat}}</td>
                    <td>{{$nval->kategori}}</td>
                    <td>{{$nval->keterangan}}</td>
                    <td> <a href="http://localhost:8000 prak10/{{$nval->idkat}}/edit">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </body>
</html>