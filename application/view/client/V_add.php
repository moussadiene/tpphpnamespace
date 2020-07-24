<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tp3namespace/public/css/test.css" />
    <title>tp2-html-css-js</title>
</head>
<body>
    <div id="content">

    </div>
    <header id="top" class="bg-white">
        <nav  class="flex-row">
            <div class="logo">
                <a href="#"><img src="/tp3POO/public/img/logo-Recupere.png" alt="logo banque du peuple" class="image"/></a>
            </div>
            <div class="texte plus-grand text-center">
                <h1 class="title-banque"> Banque du peuple </h1>
            </div>
            <d  iv class="user-logo">
                <a href="#"><img src="/tp3POO/public/img/user.jpeg" alt="logo banque du peuple" class="image"/></a>
            </d>
        </nav>
    </header>
    <main class="flex-row">
        <section id="left" class="bg-white">
            <div class="info-user flex-row">
                <div class="img">
                    <a href="#"><img src="/tp3POO/public/img/user.jpeg" alt="logo banque du peuple" class="image"/></a>
                </div>
                <div class="plus-grand">
                    <p>Moussa DIENE</p>
                    <p>Fonction : Responsable</p>
                    <p>Agence : AZER1231</p>
                </div>
            </div>
            <hr class="trait bg-red"/>
            <div class="site-bar">
                <div class="marge">
                    <img src="/tp3namespace/public/img/compte.png" alt="ok" class="icone" />
                    <a href="#" class="bolt"> Gestion Compte </a>
                    <ul>
                        <li><a href="#"> Ajouter Compte </a></li>
                        <li><a href="#"> Lister Compte </a></li>
                        <li><a href="#"> Fermer Compte </a></li>
                    </ul>
                </div>
                <div class="marge">
                    <img src="/tp3POO/public/img/compte.png" alt="ok" class="icone"  />
                    <a href="#" class="bolt"> Opération bancaire </a>
                    <ul>
                        <li><a href="#"> Opération de virement  </a></li>
                    </ul>
                </div>
            </div>
            <hr class="trait bg-red"/>
            <div class="">
                <input type="button" class="btn bg-red " value="Se déconnecter">
            </div>
        </section>
        <section id="contain" class="plus-grand bg-white">
            <!--onsubmit="return FormValider(this)" -->
            <form  action="add" method="POST"  onsubmit="return FormValider(this)" id="form">
                    <div id="taplap" class="flex-row flex-center">
                        <div class="item bg-red">
                            Client :
                        </div>
                        <div class="item bg-red">
                            Information Client :
                        </div>
                        <div class="item bg-red">
                            Information Compte :
                        </div>
                    </div>
    
                   <!-- <div class="flex-row flex-right">
                        <div id="notif flex-col">
                            <div>ok</div>
                            <div>&times;</div>
                        </div>
                   </div> -->
                    <div class="flex-col text-center marge">
                        <?if(isset($data['res'])){
                                if($data['res']== 1){
                                    echo '<p id="success" class="bg-success flex-center"> Compte ajouter avec success</p>';
                                }else{
                                    echo '<p id="erreur" class="bg-erreur"> Erreur d\'ajouter  </p>';
                                }
                            }
                        ?>
                    </div>
                <hr class="marge"/>
                <div id="contenue">
                    <div id="form_client" class="flex-row flex-right">
                        <div class="radio">
                            <input type="radio" name="choix_client" id="nouveau" value="nouveau" onclick="choixClient()"/>
                            <label for="ok1">Nouveau</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="choix_client" id="existant" value="existant" onclick="choixClient()"/>
                            <label for="ok2">Existant</label>
                        </div>
                    </div>
                    <div class="flex-row">
                        <div id="form_type_client">
                            <fieldset>
                                <legend class="text-center"> Type de Client</legend>
                                <div class="flex-row">
                                    <div class="radio">
                                        <input type="radio" name="choix_type_client" id="physique" value="physique" onclick="choixTypeClient()"/>
                                        <label for="ok1">Physique</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="choix_type_client" id="entreprise" value="entreprise" onclick="choixTypeClient()" />
                                        <label for="ok2">Entreprise</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div id="form_existant">
                            <fieldset class="flex-col">
                                <legend class="text-center"> Client Existant </legend>
                                <div class="form-group flex-row-between">
                                    <label for="">Identifiant du client </label>
                                    <input list="trouve" type="text" name="search" id="search"  onkeyup="searchValid()"/>
                                    <datalist id="trouve">

                                    </datalist>

                                </div>
                                <div id="trouve"></div>
                            </fieldset>
                        </div>
                        <div id="form_compte" >
                            <fieldset  class="flex-col">
                                <legend class="text-center">Type de compte</legend>
                                <div  class="flex-row">
                                    <div class="radio">
                                        <input type="radio" name="choix_compte" id="simple" value="simple" onclick="choixTypeCompte()"/>
                                        <label for="ok1">Simple et Xeewel</label>
                                    </div>
                                    <div class="radio" id='compte_courant'>
                                        <input type="radio" name="choix_compte" id="courant" value="courant" onclick="choixTypeCompte()" />
                                        <label for="ok2">Courant</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="choix_compte" id="bloque" value="bloque" onclick="choixTypeCompte()"/>
                                        <label for="ok1">Bloqué</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <input type="hidden" id="choixcompte" name="choixcompte" value="">
                    <div class="flex-row">
                        <div class="flex-row">
                            <div id="form_client_physique" class="flex-row">
                                <fieldset class="flex-col">
                                    <legend class="text-center"> Nouveau Client Physique</legend>
                                    <div class="form-group flex-row-between">
                                        <label for="">CNI</label>
                                        <input type="text" name="cni" id="cni" onblur="testCNI(this)" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Nom</label>
                                        <input type="text" name="nom" id="nom" onblur="testChamps(this)" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Prenom</label>
                                        <input type="text" name="prenom" id="prenom" onblur="testChamps(this)"/>
                                    </div>
                                    <div class="form-group flex-row-between">
                                    <label for="">Sexe</label>
                                        <select name="sexe" id="sexe" class="" onblur="testChamps(this)" >
                                            <option value="">----------------</option>
                                            <option value="masculin">Masculin</option>
                                            <option value="Feminin">Feminin</option>
                                        </select>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">DateNaiss</label>
                                        <input type="date" name="datenaiss" id="datenaiss" onblur="testChamps(this)"   />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Adresse</label>
                                        <input type="text" name="adr" id="adr"  />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Telephone</label>
                                        <input type="text" name="tel" id="tel" onblur="testNumero(this)"   />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Email (optionnel)</label>
                                        <input type="email" name="email" id="email" onblur="testEmail(this)"  />
                                    </div>
                                </fieldset>
                            </div>
                            <div id="form_client_moral" class="flex-row">
                                <fieldset class="flex-col ">
                                    <legend class="text-center"> Nouveau Client Entreprise</legend>
                                    <div class="form-group flex-row-between">
                                        <label for="">Nom Entreprise <span class="white">*</span></label>
                                        <input type="text" name="nom_entreprise" id="nom_entreprise" onblur="testChamps(this)"/>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Telephone</label>
                                        <input type="text" name="tel_entreprise" id="tel_entreprise" onblur="testNumero(this)"  />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Email (optionnel)</label>
                                        <input type="email" name="email_entreprise" id="email_entreprise" onblur="testEmail(this)" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Budget</label>
                                        <input type="number" name="budget_entreprise" id="budget_entreprise"onblur="testChamps(this)" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Localité </label>
                                        <input type="text" name="adr_entreprise" id="adr_entreprise"  />
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="flex-row">
                            <div id="form_compte_simple" class="flex-row">
                                <fieldset class="flex-col">
                                    <legend class="text-center"> Compte Simple et Xeewel</legend>
                                    <div class="form-group">
                                        <label for="">frais d’ouverture obligatoire : exple : 25 000CFA </label>
                                        <label for="">Rémunéré annuellement : exple : 10 000CFA </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="form_courant" class="flex-row">
                                <fieldset class="flex-col">
                                    <legend class="text-center"> Compte Courant</legend>
                                    <div class="form-group flex-row-between">
                                        <label for="">Raison social </label>
                                        <input type="text" name="raison_sociale" id="raison_sociale" onblur="testChamps(this)"/>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Salaire</label>
                                        <input type="number" name="salaire" id="salaire" onblur="testChamps(this)"/>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Nom Employeur</label>
                                        <input type="text" name="nom_employeur" id="nom_employeur" onblur="testChamps(this)" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Adresse</label>
                                        <input type="text" name="adr_employeur" id="adr_employeur"  />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">agios  : à retirer tous les trois mois.</label>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="form_bloque" class="flex-row">
                                <fieldset class="flex-col">
                                    <legend class="text-center"> Compte Bloqué</legend>
                                    <div class="form-group">
                                        <label for="">frais d’ouverture obligatoire : exple : 25 000CFA </label>
                                        <label for="">Rémunéré annuellement : exple : 10 000CFA </label>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Date Debut</label>
                                        <input type="date" name="date_debut" id="date_debut" onblur="testChamps(this)"/>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label for="">Date Fin</label>
                                        <input type="date" name="date_fin" id="date_fin" onblur="testChamps(this)"/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <input type="submit" class="bg-red" value="Valider" name="valider" id="valider"/>
                </div>
            </form>
        </section>
    </main>
    <footer>
        <section class="text-center bg-white footer">
            &copy Copyright @Groupe 5
        </section>
    </footer>
    <!-- <script src="/tp3namespace/public/js/test.js"></script> -->
    <script src="/tp3namespace/public/js/iframe.js"></script>
</body>
</html>