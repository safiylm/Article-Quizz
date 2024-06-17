<div class="d-flex flex-column align-items-center justify-content-center" id="div-edit-user-data">
  <h2> Modifier ses données </h2>
    <form>

        <div class="d-flex flex-wrap align-items-center justify-content-center">
            <label>Nom :
              <input class="form-control" value="<?php echo $_SESSION["user"]["nom"];?>">
            </label>
            <label>Prenom :
              <input class="form-control" value="<?php echo  $_SESSION["user"]["prenom"];?>">
            </label>
        </div>

        <div class="d-flex flex-wrap align-items-center justify-content-center">
            <label>Email :
              <input type="email" class="form-control" value="<?php echo  $_SESSION["user"]["email"];?>">
            </label>
            <label>Mot de passe :
              <input type="password" class="form-control" value="<?php echo  $_SESSION["user"]["password"];?>">
            </label>
        </div>
        <div class="d-flex flex-wrap align-items-center justify-content-center">
          <button type="button" id="buttonOpenEditUserData" class="btn btn-primary" onclick="openEditUSerData()">Modifier</button>
          <button type="submit" id="buttonSaveModifs" class="btn btn-primary">Enregistrer les modifications</button>
          <button type="button" id="buttonCloseEditUserData" class="btn btn-light" onclick="closeEditUSerData()">Anuler</button>

        </div>

    </form>
</div>

<script>
const listeOfInput =  document.querySelectorAll('#div-edit-user-data input');
closeEditUSerData();

function openEditUSerData(){
  for (var i = 0; i < listeOfInput.length; i++) {
    listeOfInput[i].disabled =false;
  }
  document.getElementById('buttonOpenEditUserData').style.display = "none";
  document.getElementById('buttonCloseEditUserData').style.display = "block";
  document.getElementById('buttonSaveModifs').style.display = "block";

}

function closeEditUSerData(){
  for (var i = 0; i < listeOfInput.length; i++) {
    listeOfInput[i].disabled =true;
  }
  document.getElementById('buttonSaveModifs').style.display = "none";
  document.getElementById('buttonCloseEditUserData').style.display = "none";
  document.getElementById('buttonOpenEditUserData').style.display = "block";


}
</script>