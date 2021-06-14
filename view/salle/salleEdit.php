<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet"href="http://localhost/mvcBrief5/view/salle/style/style.css">
    <title>Document</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/mvcBrief5/salle/index">Gestion des salles</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/mvcBrief5/salle/index">salle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/mvcBrief5/matiere">Matiére</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/mvcBrief5/groupe">Groupe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Enseignant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">cours</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div id="inputs">
<form action="http://localhost/mvcBrief5/salle/update" method="post">
    <div class="input-group flex-nowrap">
  <input type="hidden" class="form-control"aria-label="Username" aria-describedby="addon-wrapping" name="id" value="<?=$obj['id']?>"  >
</div>
    <div  class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">salle</span>
  <input  type="text" class="form-control"aria-label="Username" aria-describedby="addon-wrapping" name="libelle" value="<?=$obj['libelle_salle']?>" >
</div>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">capacité</span>
  <input type="text"  class="form-control"aria-label="Username" aria-describedby="addon-wrapping" name="capacite" value="<?=$obj['capacité']?>" >
</div>

<button type="submit" class="btn btn-primary">Update</button>
</form >
</div>

    
</body>
</html>