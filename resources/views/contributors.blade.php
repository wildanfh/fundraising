<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contributors</title>
    <style>
        /* Add any custom styles for the PDF here */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Contributors</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contributors as $i => $contributor)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $contributor->nama }}</td>
                <td>{{ $contributor->email }}</td>
                <td>{{ $contributor->no_telepon }}</td>
                <td>{{ $contributor->jumlah }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
