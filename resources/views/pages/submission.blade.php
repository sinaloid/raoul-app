@extends('template.app')

@section('page_title')
Soumission de film
@endsection

@section('content')
    <div class="row py-5">
        <div class="col-12 col-md-10 mx-auto my-3 text-center">

            <span class="title-2 importante font-weight-bold text-uppercase">Pour soumettre un film contactez
                nous:</span><br>
            Sise:Secteur 25 Bobo-Dioulasso <br>
            Tel: +226 70 15 67 10 <br>
            Email: recisfestival@gmail.com <br>
        </div>
        <div class="col-12 col-md-10 mx-auto my-3 text-center">
            <div class="col-6 mx-auto">
                <a href="{{asset('assets/file/APPEL_RECIS_AOUT_2022.pdf')}}" class="importante font-weight-bold">Télécharger l'appel à film </a>
            </div>
        </div>
        <div class="col-12 col-md-10 mx-auto my-3 text-center">
            <div class="col-6 mx-auto">
                <a href="{{asset('assets/file/APPEL_A_FILM_Règlement_interieur.pdf')}}" class="importante font-weight-bold">Télécharger le règlement intérieur</a>
            </div>
        </div>
        <div class="col-12 col-md-10 mx-auto my-3 text-center">
            <div class="col-6 mx-auto">
                <a href="{{asset('assets/file/FORMULAIRE_DE_SOUMISSION_RECIS.docx')}}" class="importante font-weight-bold" download>Télécharger le formulaire de soumission de film </a>
            </div>
        </div>
        <div class="col-12 col-md-10 mx-auto my-3 text-center">
            <span class="sm-title-2 font-weight-bold text-uppercase">
                Organisateurs/trices
            </span>
            <p class="mt-3">
                <ul style="list-style: none">
                    <li><span class="font-weight-bold text-uppercase">Président</span>
                        <ul class="px-5 py-2" style="list-style: none">
                            <li>BAYALA ERIC</li>
                            <li>Tel: +43 676 662 2068 / <br> +226 73 87 04 19</li>
                            <li>ericbayala@gmail.com </li>
                        </ul>
                    </li>
                    <li><span class="font-weight-bold text-uppercase">Sécretaire Général</span>
                        <ul class="px-5 py-2" style="list-style: none">
                            <li>SANON BAKARY</li>
                            <li>Tel: +226 70 15 67 10</li>
                            <li>bakary.sanon@gmail.com</li>
                        </ul>
                    </li>
                    <li><span class="font-weight-bold text-uppercase">Trésorière Générale</span>
                        <ul class="px-5 py-2" style="list-style: none">
                            <li>IMA VERONIQUE</li>
                            <li>Tel: +226 65 92 29 47</li>
                            <li>19veronique93@gmail.com</li>
                        </ul>
                    </li>
                    <li><span class="font-weight-bold text-uppercase">SG-Adjointe</span>
                        <ul class="px-5 py-2" style="list-style: none">
                            <li>OUEDRAOGO Fatimata</li>
                            <li>Tel: +226 77 45 54 01</li>
                        </ul>
                    </li>
                    <li><span class="font-weight-bold text-uppercase">Chargé à l’organisation</span>
                        <ul class="px-5 py-2" style="list-style: none">
                            <li>DAO Sounkalo</li>
                            <li>Tel: +226 77 45 54 01</li>
                            <li>daosklo@yahoo.fr</li>
                        </ul>
                    </li>
                    <li><span class="font-weight-bold text-uppercase">Chargé à la communication</span>
                        <ul class="px-5 py-2" style="list-style: none">
                            <li>ZONGO Roland</li>
                            <li>Tel: +34 683 65 65 41</li>
                            <li>rolyzongo@gmail.com</li>
                        </ul>
                    </li>
                </ul>
            </p>
        </div>
        
        <!--div class="col-12 col-md-10 mx-auto  my-3" style="line-height: 190%">

            <p class="text-center">
                <span class="title-2 importante font-weight-bold text-uppercase">Observations sur les conditions de
                    participation</span><br>
            </p>
            <div class="col-12 col-md-8 mx-auto">
                <span class="importante-1 font-weight-bold text-uppercase">APPEL Á FILM DES RENCONTRES CINÉMATOGRAPHIQUES DE
                    SYA(en abrégé RECIS)</span><br>
                <span class="font-weight-bold">Première Partie</span>: LES PRIX : Les Silures<br>
                <ul class="px-5">
                    <li>
                        <span class="font-weight-bold">Catégorie long métrage de fiction :</span>
                        <ul class="px-5">
                            <li>Silure du meilleure film long-métrage</li>
                            <li>Silure du Jury fiction</li>
                        </ul>
                    </li>
                    <li>
                        <span class="font-weight-bold">Catégorie documentaire long-métrage</span>
                        <ul class="px-5">
                            <li>Silure du meilleur film documentaire</li>
                            <li>Silure du Jury film documentaire</li>
                        </ul>
                    </li>
                    <li>
                        <span class="font-weight-bold">Catégorie court métrage de fiction :</span>
                        <ul class="px-5">
                            <li>Silure du meilleur film court métrage</li>
                            <li>Silure du Jury Court Métrage</li>
                        </ul>
                    </li>
                    <li>
                        <span class="font-weight-bold">Catégorie Diaspora (Long-métrage fiction, documentaire et
                            court-métrage) :</span>
                        <ul class="px-5">
                            <li>Silure du meilleur film de la diaspora</li>
                            <li>Silure du meilleur court-métrage de la diaspora</li>
                            <li>Silure du Jury film de la diaspora (Long-métrage fiction ou documentaire ou court-métrage)
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span class="font-weight-bold">Catégorie clip vidéo :</span>
                        <ul class="px-5">
                            <li>Silure meilleur clip vidéo</li>
                            <li>Silure du Jury pour la meilleure musique</li>
                        </ul>
                    </li>
                </ul>
                <span class="font-weight-bold">Deuxième Partie : RÈGLEMENT, SÉLECTION DES FILMS DE LA PRÉMIÈRE ÉDITION RECIS
                    2022 - RÉGULATIONS</span><br>
                <p>La première édition des RECIS se déroulera du Mardi 6 décembre au Samedi 10 décembre 2022.
                    Les RECIS 2022 organise une compétition avec 5 sélections :
                </p>
                <ul class="px-5">
                    <li class="font-weight-bold">Longs métrages de fiction (durée supérieure ou égale à 60 minutes)</li>
                    <li class="font-weight-bold">Longs métrages documentaire (durée supérieure ou égale à 60 minutes)</li>
                    <li class="font-weight-bold">Long-métrages de la diaspora (durée supérieure ou égale à 60 minutes)</li>
                    <li class="font-weight-bold">Courts-métrages de fiction (durée comprise entre 7 minutes à 30 minutes)
                    </li>
                    <li class="font-weight-bold">Clips vidéo et ou vidéos musicales (aucune contrainte thématique ni de
                        durée n’est imposée)</li>
                </ul>

                <span class="font-weight-bold">Article 1 : CONDITIONS DE PARTICIPATION</span><br>
                <p>La compétition est ouverte aux longs-métrages de fiction, aux documentaires, aux courts-métrages
                    de fiction et aux clips vidéo. Ne sont PAS admis les films à caractère publicitaire, les reportages,
                    les films institutionnels et les sujets magazines.</p>
                <ul class="px-5">
                    <li>
                        <span class="font-weight-bold">1.1 . Sélection</span>
                        <p>Seront sélectionnés pour participer à la compétition</p>
                        <ul class="px-5">
                            <li>3 longs-métrages de fiction</li>
                            <li>3 Longs métrages documentaires</li>
                            <li>2 long métrages de la diaspora</li>
                            <li>7 à 12 courts-métrages de fiction (prises de vue réelles et animation)</li>
                            <li>10 clips vidéo</li>
                        </ul>
                    </li>

                    <li>
                        <span class="font-weight-bold">1.2 . Réception des films</span>
                        La réception des films sélectionnables pour la compétition officielle des RECIS 2022 s’arrête le 15
                        septembre 2022.
                        Nous allons envoyer des accusées de réception des candidatures. Un avis de sélection sera adressé à
                        la personne
                        responsable de l’inscription au plus tard le 15 octobre 2022 à 23h59 TU. Les candidats non
                        sélectionnés seront informés
                        par la diffusion de notre Newsletter sur le site de l’association annonçant la sélection définitive.
                        Les décisions du
                        comité de sélection seront également consultables sur le site internet des RECIS. Tout film inscrit
                        et retenu pour la
                        compétition ne pourra être retiré de la sélection. Le comité de sélection s'assure de la parfaite
                        conformité des
                        candidatures en fonction des objectifs du festival. Il pourra décider de la programmation de
                        certains films dans des
                        séances hors compétition pour les projections en plein air.
                    </li>

                </ul>
                <span class="font-weight-bold">Article 2 : CONDITIONS GENERALES D’INSCRIPTION</span><br>

                <p>Le festival accepte tous les films de 2019 et 2022 (date d’achèvement du film),
                    <span class="text-danger">(et qui n’ont jamais fait l’objet d’une inscription aux compétitions
                        antérieures du festival).</span>
                    Pour être sélectionnés, les films doivent être proposés au comité de sélection par leur réalisateur
                    et/ou leur producteur. Ils doivent être en français, ou en version originale sous-titrée en français.
                </p>

                <ul class="px-5">
                    <li>
                        <span class="font-weight-bold">2.1. Inscription</span>
                        <p>
                            Une fiche d’inscription devra être remplie et envoyé sur recisfestival@gmail.com avec tous les
                            documents requis. Voir point 5.3.
                        </p>
                        <span class="font-weight-bold">
                            2.2. Il faut inscrire le lien actif (avec mot de passe si lien privé) sur le formulaire
                            d’inscription en ligne.
                        </span>
                        <p>
                            Il est impératif de laisser l’accès à ce lien actif jusqu’au dernier jour du festival. Les RECIS
                            s’engagent expressément à conserver la confidentialité des liens et mots de passe qui lui sont
                            communiqués, et à les utiliser uniquement dans le cadre du processus de sélection.
                        </p>
                        <span class="font-weight-bold">2.3. Frais d'inscription</span>
                        <p>L’inscription des films est gratuite</p>
                        <span class="font-weight-bold">2.4. Clôture des inscriptions</span>
                        <p>La date limite des envois des films (supports matérialisés et non-matérialisés) et de
                            téléchargement du
                            fichier vidéo est fixée au 15 octobre 2022 à 23h59 TU. Aucune dérogation ne sera acceptée
                            au-delà de cette
                            date. La fiche d'inscription doit être remplie avant cette date. Le responsable du film doit
                            avoir renseigné
                            intégralement la fiche d’inscription du film doit être téléchargée sur le site du festival.
                            Attention ! les renseignements fournis lors de l’inscription sont ceux qui, dans l’éventualité
                            d’une
                            sélection en compétition, figureront dans les différents documents et programmes du festival. Le
                            festival ne
                            pourra être tenu responsable d’une erreur consécutive à un renseignement erroné dans la fiche
                            d’inscription.</p>
                    </li>
                    <li>
                        <span class="font-weight-bold">2.5 - Inéligibilité</span>


                        <ul class="px-5">
                            <li>Si un film ne remplit pas les critères ci-dessus</li>
                            <li>s’il dépasse la durée maximum(pour les court-métrages de fiction)</li>
                            <li>s’il nous a été présenté antérieurement, si son inscription par email est incomplète</li>
                            <li>si son lien de visionnage devient inopérant avant la fin du festival</li>
                            <li>il ne sera pas considéré comme admissible à la sélection. Le candidat en sera averti par
                                mail le cas
                                échéant.</li>
                        </ul>
                    </li>

                </ul>
                <span class="font-weight-bold">Article 3 : ADMISSIBILITÉ DES FILMS</span><br>

                <p>Pour les catégories courts-métrages (de prises de vues réelles/d’animation), documentaires &
                    longs-métrages :
                    La compétition est ouverte aux réalisatrices/réalisateurs originaires du Burkina Faso, de la diaspora
                    Burkinabè et des Afro-descendant.e.s.</p>

                <span class="font-weight-bold">Article 4 : PRÉSÉLECTION (Visionnage)</span><br>
                <p>Pour l’étape de visionnage par l’équipe de programmation : fournir un lien vidéo du film et
                    un lien de la bande annonce du film sur la plateforme <span class="text-danger">(Plateforme à créer)</span> . Les films dont la langue
                    n’est pas le français doivent impérativement être sous-titrés en français.</p>











            </div>








        </div-->
        <!--div class="col-12 col-md-10 col-lg-8 mx-auto">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <span>Partenaire</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <p>
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                        Odio quidem ex, ipsam neque praesentium modi voluptate at
                                                                        cumque dolores recusandae voluptatum, assumenda facere quia
                                                                        obcaecati ipsum iusto et libero rerum?
                                                                    </p>
                                                                </div>
                                                                <hr class="bg-dark"/>
                                                                <div class="px-2">
                                                                    <span class="font-weight-bold mx-2">Creation / Modification</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <form class="mx-2" action="/action_page.php">
                                                                        <div class="form-group">
                                                                            <label for="description">description:</label>
                                                                            <input type="text" class="form-control" placeholder="Description du bilan" name="description" id="description">
                                                                        </div>
                                                                        <input class="btn btn-recis font-weight-bold mt-2 ml-auto" type="submit" value="Enregistrer">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div-->
    </div>
@endsection
