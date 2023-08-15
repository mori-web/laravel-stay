<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://faonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Styles -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <!-- ナビゲーションメニュー -->
  <nav class="navbar navbar-expand-lg navbar-light text-dark bg-dark" id="home">
    <div class="container">
      <a class="navbar-brand text-white" href="#">Portfolio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link text-white" href="#home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#skill">Skill</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- カード -->
  <div class="container my-5" id="skill">
    <h2 class="py-4 text-dark">Skill</h2>
    <div class="row row-cols-1 row-cols-md-3">
      <div class="col mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Sample</h5>
            <p class="card-text">SampleSampleSampleSampleSampleSampleSampleSampleSampleSample</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Sample</h5>
            <p class="card-text">SampleSampleSampleSampleSampleSampleSampleSampleSampleSample</p>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Sample</h5>
            <p class="card-text">SampleSampleSampleSampleSampleSampleSampleSampleSampleSample</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Example label</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Another label</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
  </div>

</body>

</html>