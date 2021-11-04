<html>
<head>
    <title>Halaman mahasiswa|{{$title}}</title>
</head>
<body>
    {{$title}}
    <table border=1>
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_mahasiswa as $mahasiswa)
            <tr>
                <td>{{$mahasiswa}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>