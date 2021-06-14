<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="index.php">
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
          <a class="nav-link" href="http://localhost/mvcBrief5/matiere/singout">Sing out</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>



<form action="http://localhost/mvcBrief5/groupe/create" method="post">
    <div class="input-group flex-nowrap">
    
  <span class="input-group-text" id="addon-wrapping">groupe</span>
  <input type="text" class="form-control"aria-label="Username" aria-describedby="addon-wrapping" name="libelle">
</div>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">effectif</span>
  <input type="text" class="form-control"aria-label="Username" aria-describedby="addon-wrapping" name="effectif">
</div>

<button type="submit" class="btn btn-primary">save</button>
</form >


<table class="table table-dark table-hover">
<tr>
       <th>ID</th>
       <th>Libelle groupe</th>
       <th>effectif</th>
       <th>Action</th>
     </tr>
<?php 

foreach ($groupes as $groupe){
    
     echo "
     
    <tr>
      <td>".$groupe['id']."</td>  <td>".$groupe['libelle_groupe']."</td> 
       <td>".$groupe['effectif']."</td>
        <td> 

     <div class='d-flex'>  

     <form action='http://localhost/mvcBrief5/groupe/delete' method='post'><button type='submit' class='btn btn-danger'>delete</button>
        <input type='hidden' name='id' value='".$groupe['id']."' />
        </form> 

        <form action='http://localhost/mvcBrief5/groupe/edit' method='post'><button type='submit' class='btn btn-secondary'>edit</button>
            <input type='hidden' name='id' value='".$groupe['id']."' />
            </form>
        </td>
</div>
    </tr>";
    

} ?> 
  
</table>





    
</body>
</html>