<!DOCTYPE html>
<html>
<head>
 <!-- Load file CSS Bootstrap offline -->
<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
  <script src="<?php echo base_url()?>/assets/bootstrap/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
  <h1>Halaman HTML dengan bootstrap offline</h1>
  <p>Halaman ini responsive untuk semua jenis perangkat</p> 
  <br>
  <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">Home</button>
  <a href="http://localhost/pustaka_arin/perkenalan" class="btn btn-secondary" role="button">Biodata</a>
  <button type="button" class="btn btn-secondary">News</button>
  <button type="button" class="btn btn-secondary">Mata Kuliah</button>
  <a href="http://localhost/pustaka_arin/web" class="btn btn-secondary" role="button">Web</a>
</div>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Kolom pertama</h3>
      <p>Paragraf pertama</p>
      <p>Paragraf kedua</p>
    </div>
    <div class="col-sm-4">
      <h3>Kolom kedua</h3>
    <p>Paragraf pertama</p>
      <p>Paragraf kedua</p>
    </div>
    <div class="col-sm-4">
      <h3>Kolom ketiga</h3>        
      <p>Paragraf pertama</p>
      <p>Paragraf kedua</p>
    </div>
  </div>
</div>

</body>
</html>