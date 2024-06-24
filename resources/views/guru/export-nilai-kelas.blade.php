<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Nilai Siswa Per Kelas</title>
    <style>
        *{
            font-family: 'Lato',sans-serif
        }
        table tr th, table tr td{
            border: 1px solid black
        }
    </style>
</head>
<body>
    <div class="text-center">
        <h1>Data Nilai Siswa</h1>
        <h1>Kelas: {{ $kelas->nama }}</h1>
    </div>
    <table class="table table-bordered align-middle">
        <thead class="table-success text-center">
            <tr class="align-middle">
                <th rowspan="2">Nama</th>
                <th rowspan="2">NISN</th>
                <th colspan="4" class="text-center">Nilai Terakhir</th>
            </tr>
            <tr>
                <th>Kuis 1</th>
                <th>Kuis 2</th>
                <th>Kuis 3</th>
                <th>Evaluasi</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($siswa as $item)
                <tr class="text-center">
                    <td class="text-start">{{ $item['data']->user->name }}</td>
                    <td class="text-start">{{ $item['data']->nisn }}</td>
                    <td>{{ is_null($item['kuis1Latest']) ? '-' : $item['kuis1Latest']->nilai }}</td>
                    <td>{{ is_null($item['kuis2Latest']) ? '-' : $item['kuis2Latest']->nilai }}</td>
                    <td>{{ is_null($item['kuis3Latest']) ? '-' : $item['kuis3Latest']->nilai }}</td>
                    <td>{{ is_null($item['evaluasiLatest']) ? '-' : $item['evaluasiLatest']->nilai }}</td>
                </tr>
                @endforeach
            </tbody>
    </table>
</body>
</html>