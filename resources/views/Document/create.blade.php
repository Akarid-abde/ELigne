<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
 <form action="{{url('/file')}} " method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleFormControlInput1">Bénifice</label>
    <input type="text" name="bénificier" class="form-control" placeholder="Nom et Prenom">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Form Juridique</label>
    <select class="form-control" name="FormJuridique" id="exampleFormControlSelect1">
      <option value="SARL" >SARL</option>
      <option value="SAS" >SAS</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Date Experation</label>
    <input type="date" name="dateExpération" class="form-control"  placeholder="date expération">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Ville</label>
    <input type="text" name="ville" class="form-control" placeholder="prenom">
  </div>
 <!--  <div class="form-group">
    <label for="exampleFormControlTextarea1">Adresse</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div> -->

  <div class="form-group">
      <label>PDF</label>
      <input class="form-control" type="file" name="pdf">
  </div>

  <div class="form-group">
    <button class="btn btn-primary" style="border-radius:15px;">
    Valider
    </button>
  </div>
</form>
</body>
</html>