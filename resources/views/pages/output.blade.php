@extends('layouts.app')
@section('pages')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Output Data</h3>
    <form action="{{ route('back') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $data['nama'] }}</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>{{ $data['tempat'] }}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $data['tanggal'] }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $data['jk'] }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $data['email'] }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $data['alamat'] }}</td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Kembali</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
@endsection