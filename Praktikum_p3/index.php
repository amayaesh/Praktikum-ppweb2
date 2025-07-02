<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Selamat Datang di STT Terpadu Nurul Fikri</h2>
        <p>Silahkan isi bku tamu dibawah ini</p>
        <hr>
        <form>
  <div class="form-group row">
    <label for="Email" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="Email" name="Email" type="text" class="form-control" aria-describedby="EmailHelpBlock" required="required"> 
      <span id="EmailHelpBlock" class="form-text text-muted">Nama Lengkap Kamu</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text" name="text" type="text" class="form-control" aria-describedby="textHelpBlock"> 
      <span id="textHelpBlock" class="form-text text-muted">Email kamu</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Keperluan</label> 
    <div class="col-8">
      <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control" aria-describedby="textareaHelpBlock"></textarea> 
      <span id="textareaHelpBlock" class="form-text text-muted">Keperluan kamu ke Perpustakaan</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    </div>
</body>
</html>