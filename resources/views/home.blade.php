<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Trains</title>
</head>
<body>
  <header class="text-center p-2 mb-5 bg-warning text-white shadow">
    <h1>Trains List</h1>
  </header>

  <div class="container d-flex flex-column align-items-center gap-3 mb-5">
    <div class="row">
      @forelse ($trains as $train)
        <div class="col-3">
          <div class="card text-bg-warning mb-3 shadow" style="max-width: 18rem;">
            <div class="card-header text-white fw-bold">{{$train->azienda}}</div>
            <div class="card-body">
              <h5 class="card-title text-decoration-underline">Info Train</h5>
              <p class="card-text"><span class="text-white">Stazione Partenza: </span>{{$train->stazione_partenza}}</p>
              <p class="card-text"><span class="text-white">Stazione Arrivo: </span>{{$train->stazione_arrivo}}</p>
              <p class="card-text"><span class="text-white">Orario Partenza: </span>{{$train->orario_partenza}}</p>
              <p class="card-text"><span class="text-white">Orario Arrivo: </span>{{$train->orario_arrivo}}</p>
              <p class="card-text"><span class="text-white">Codice Treno: </span>{{$train->codice_treno}}</p>
              <p class="card-text"><span class="text-white">Numero Carrozze: </span>{{$train->n_carrozze}}</p>
              <p class="card-text"> <span class="text-white">In orario: </span> {{$train->in_orario ? 'Si':'No' }}</p>
              <p class="card-text"><span class="text-white">Cancellato: </span> {{$train->cancellato ? 'Si':'No' }}</p>
            </div>
          </div>
        </div>
      @empty
      <h2>Nessun treno disponibile</h2>
      @endforelse
    </div>
    {{$trains->links()}}
  </div>
</body>
</html>