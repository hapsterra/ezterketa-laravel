<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    
<div class="container mt-5">
    <div class="row">
    <form action="{{ route('liburuak-update',['id'=>$liburua->id]) }}" method="POST">
      @csrf
  <div class="form-group">
    <label for="izenburua">Hegaldia</label>
    <input type="text" class="form-control" id="izenburua" name="izenburua" value="{{liburua->izenburua}}"  placeholder="izenburua">
    
  </div>
  <div class="form-group">
    <label for="egilea">Irteera</label>
    <input type="text" class="form-control" id="egilea" value="{{hegaldia->irt}}" placeholder="Egilea">
    <label for="egilea">Helmuga</label>
    <input type="text" class="form-control" id="egilea" value="{{hegaldia->hel}}" placeholder="Egilea">
    <label for="egilea">Iraupena</label>
    <input type="text" class="form-control" id="egilea" value="{{hegaldia->ira}}" placeholder="Egilea">
  </div>
 
  <button type="submit" class="btn btn-primary">Hegaldia aktualizatu</button>
</form>
    </div>
    <div>
      
</div>
    </div>
</body>
</html>