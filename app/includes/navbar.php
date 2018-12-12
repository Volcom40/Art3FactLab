<nav class="navbar navbar-expand-lg text-center navbar-light bg-navbar-app">
<div class="mx-auto d-lg-flex">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     

      <li class="nav-item active">
        <form id="tab1" action="./" method="POST">
          <input name="tab" type="hidden" value="f-machines">
          <a class="nav-link" href="javascript:tab(1)">Utilisation machine</a>
        </form>
      </li>
      
      <li class="nav-item">
        <form id="tab2" action="./" method="POST">
          <input name="tab" type="hidden" value="userInfos">
          <a class="nav-link" href="javascript:tab(2)">Historique d'activités</a>
        </form>
      </li>

      <?php
        if($user["id_famille_membre"] < 3 ){
      ?>
      <li class="nav-item">
        <form id="tab3" action="./" method="POST">
          <input name="tab" type="hidden" value="gestionnaire">
          <a class="nav-link" href="javascript:tab(3)">Gestionnaire</a>
        </form>
      </li>
      <?php
        }
      ?>
      <?php
        if($user["id_famille_membre"] == 1 ){
      ?>
      <li class="nav-item">
        <form id="tab4" action="./" method="POST">
          <input name="tab" type="hidden" value="administrateur">
          <a class="nav-link" href="javascript:tab(4)">Administrateur</a>
        </form>
      </li>
      <?php
        }
      ?>
    </ul>
  </div>
</div>
</nav>

<script>
function tab(num) {
  switch (num) {
    case 1:
      document.getElementById("tab1").submit();
      break;
    case 2:
      document.getElementById("tab2").submit();
      break;
    <?php
      if($user["id_famille_membre"] < 3 ){
    ?>
    case 3:
      document.getElementById("tab3").submit();
      break;
    <?php
      }
      if ($user["id_famille_membre"] == 1 ) {
      ?>
    case 4:
      document.getElementById("tab4").submit();
      break;    
      <?php
      }
      ?>
  }
    
}

</script>