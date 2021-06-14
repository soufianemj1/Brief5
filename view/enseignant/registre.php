<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>registre</title>
</head>
<body>
<form action= "http://localhost/mvcBrief5/enseignant/signup" method="POST">
<div class="mb-3">
    <label for="name" class="form-label">nom de l'enseignant</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="nom">
   
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
   
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">mot de passe</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
   

      <label for="matiere" class="form-label">Matiere</label>
      <select id="matiere" class="form-select" name="idMatiere"> 
      <option value="" selected></option>
      <?php foreach ($obj as $row){?>
        <option value='<?=$row["id"] ?>'><?=$row["libelle_matiere"] ?></option><?php } ?>
      </select>
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>