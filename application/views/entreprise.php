<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/App/BanqueDuPeuple-CodeIgniter/">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Liste Clients
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="EntrepriseController/list">Entreprise</a>
                    <a class="dropdown-item" href="#"></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ajouter Clients
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="">Entreprise</a>
                    <a class="dropdown-item" href="#"></a>
                    </div>
                </li>
                </ul>
            </div>
            </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  text-center"> Formulaire d'enregistrement Entreprises</div>
                    <div class="card-body card-body1" >
                    
                        <form method="POST" action="<?php echo site_url('EntrepriseController/create')?>">
                      <!--  <form method="POST" action= "{{ route ('persistentreprise') }}"> -->
                       
                            <div class="form-group"> 
                                <label class="control-label" for="nom_entreprise">Nom Entreprise* :</label>
                                <input class="form-control" name="nom_entreprise" id="nom_entreprise" type="text" required="required"/> 
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="adresse">Adresse * :</label>
                                <input class="form-control" name="adresse" id="adresse" type="text"required="required"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email">Email :</label>
                                <input class="form-control" name="email" id="email" type="email" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tel">Telephone * :</label>
                                <input class="form-control" name="telephone" id="telephone" type="telephone" required="required"  /> 
                            </div>
                            <div class="form-group">
                                    <select id="compte" name="compte" required="required">
                                    <option>Choisissez un type de compte *</option>
                                    <option>Compte épargne simple et xeewel</option>
                                    <option>Compte courant</option>
                                    <option>Compte bloque</option>
                                    </select >
                            </div>
                            <div class="form-group">
                                <label  class="control-label" for="salaire">NINEA * :</label>
                                <input class="form-control" name="ninea" id="ninea" type="number" required="required"/> 
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="numero">Numero compte* :</label>
                                <input class="form-control" name="numero" id="numero" type="number" required="required" /> 
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" name="envoyer" id="envoyer" value="envoyer" type="submit"/> 
                                <a  class="btn btn-danger" href="{{route('home')}}"> Annuler </a>

                              <!--  <input  class="btn btn-danger" name="annuler" id="annuler" value="annuler" type="reset"/> -->
                            </div>
                        <form>    
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> 
