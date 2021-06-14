<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<div>

<form action="http://localhost/mvcBrief5/reservation/singOut" method="post">
  <button type="submit" class="btn btn-primary">Sing Out</button>

</form>

</div>

<form action="http://localhost/mvcBrief5/reservation/reserver" method="post">

<div>
<select class="form-select" aria-label="Default select example" name="salle">
<option selected>Selectionner une salle</option>
<?php foreach($salles as $salle) {
 ?>
  <option value="<?= $salle['id']?>"><?= $salle['libelle_salle']?></option>
  <?php } ?>
 </select>
</div>

<div>
<select class="form-select" aria-label="Default select example"name="groupe">
<option selected>Selectionner un groupe</option>
<?php foreach($groupes as $groupe) {
 ?>
  <option value="<?= $groupe['id']?>"><?= $groupe['libelle_groupe']?></option>
  <?php } ?>
 </select>
</div>

<div>

<input type="date" name="date">

</div>

<div>
<select class="form-select" aria-label="Default select example" name="time">
  <option selected>heure</option>
  <option >8H-10H</option>
  <option>10H-12H</option>
  <option >14H-16H</option>
  <option >16H-18H</option>
 </select>
</div>

<div>

<input class="btn btn-primary" type="submit" value="Submit">

</div>

</form>


<table class="table table-striped">
  <tr>
  <th>enseignant</th>
  <th>salle</th>
  <th>groupe</th>
  <th>date</th>
  <th>time</th>
  <th>action</th>
  </tr>

<?php foreach($cours as $cour):?>
  <tr>
  <td><?=$cour['nom']?></td>
  <td><?=$cour['libelle_salle']?></td>
  <td><?=$cour['libelle_groupe']?></td>
  <td><?=$cour['date']?></td>
  <td><?=$cour['time']?></td>
  
  <td> <form action='http://localhost/mvcBrief5/reservation/delete' method='post'><button type='submit' class='btn btn-danger'>delete</button>
      <input type='hidden' name='id' value='<?=$cour['id']?>'>
      </form> 

  </tr>
<?php endforeach ?>
  
</table>









</form>

    
</body>
</html>