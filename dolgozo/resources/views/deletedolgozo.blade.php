<!DOCTYPE html>
<html lang="hu">
 
<head>
  <title>Tanulo lista</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 
<body>
<div class="container">
  <h2>Tanuló lista</h2>
 
  <table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Név</th>
        <th>Város</th>
        <th>Születés</th>
        <th>Fizetés</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $dolgozok as $dolgozo )
            <tr>
                <td>{{ $dolgozo->id }}</td>
                <td>{{ $dolgozo->nev }}</td>
                <td>{{ $dolgozo->varos }}</td>
                <td>{{ $dolgozo->szuletes }}</td>
                <td>{{ $dolgozo->fizetes }}</td>
            </tr>
                    <a class="btn btn-primary" href="/delete/{{ $dolgozo->id }}">Törlés</a>
                </td>
            </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>