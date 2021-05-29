<head>
    <meta name="viewport" content="width=device-width, 
    initial-scale=1">
    <title>Data Mahasiswa</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>

<body>
    <div style="overflow-x:auto">

    <nav>
        <a href="/anggota">Select</a> |
        <a href="/like">Select Like</a> |
        <a href="/buku">Select Join</a> |
        <a href="/like1">Select Join Like</a>
    </nav>

    <h1 style="text-align: center;">Select Join Like</h1>

    <hr>
        
        <table>
            <thead>
                <tr>
                    <th>Judul Buku</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($selikedata as $sl)
                    <tr>
                        <td>{{$sl->buku_judul}}</td>
                        <td>{{$sl->kategori_nama}}</td>
                        <td>{{$sl->buku_deskripsi}}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>
</body>