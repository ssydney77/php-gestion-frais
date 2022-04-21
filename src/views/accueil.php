
<div class="container">
    <h2 class="text-center py-3">Bonjour, <span class="text-success text-decoration-underline"><?php echo $_SESSION['prenom']."  ".$_SESSION['nom']; ?></span></h2>
    <h3 class="text-center py-2 font-weight-light">Bienvenue sur votre espace personnel !</h3>
    <div class="row text-center">
        <div class="col-4">
            <h4 class="py-4 font-weight-light"><a href="mon-espace/saisie-fiche-de-frais">Saisie fiche de frais</a></h4>
        </div>
        <div class="col-4">
            <h4 class="py-4 font-weight-light"><a href="mon-espace/mes-fiches-de-frais">Mes fiches de frais</a></h4>
        </div>
        <div class="col-4">
            <h4 class="py-4 font-weight-light"><a href="deconnecter">Déconnexion</a></h4>
        </div>

    </div>
</div>
