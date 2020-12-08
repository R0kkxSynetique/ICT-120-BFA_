<?php require_once "includes/store.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <title>Base</title>
    <link rel="stylesheet" href="Css/Style.css">
    <script src="JS/NPA.js"></script>
    <script src="JS/reload.js"></script>
    <script src="JS/Script.js"></script>


</head>

<body>

<div class="banner">
    <div class="logo">
        <a href="http://www.google.com">
            <img src="IMG/logo%20seul%20vert.png" id="CPNVLogo" alt="menu">
        </a>

    </div>
    <div class="page-title center">
        <p>Cette page rassemble toutes les informations nécessaires pour l'organisation de notre voyage d'étude en
            troisième année.</p>
    </div>
</div>

<div class="navbar">
    <div>
        <input type="button" name="cmd" value="Personnes" class="cmd-nav" id="cmdPeople">
    </div>
    <div>
        <input type="button" name="cmd" value="Transport" class="cmd-nav" id="cmdTransport">
    </div>
    <div>
        <input type="button" name="cmd" value="Logement" class="cmd-nav" id="cmdLogement">
    </div>
    <div>
        <input type="button" name="cmd" value="Activité" class="cmd-nav" id="cmdActivite">
    </div>

</div>

<div>
    <form method="post">

        <div class="people hidden" id="txtPeople">

            <div class="content-flex-row">
                <div>
                    Adresse
                </div>
                <div>
                    Code postal
                </div>
                <div>
                    Ville
                </div>
                <div>
                    Prénom
                </div>
                <div>
                    Nom
                </div>
                <div>
                    Téléphone
                </div>
                <div>
                    Prof ou élève
                </div>
            </div>

            <div class="content-flex-column">

                <?php
                for ($i = 0; $i < 50; $i++){
                    ?>
                    <div class="content-flex-row">
                        <input type="text" id="txtAddress<?=$i?>" name="txtAddress[<?=$i?>]">
                        <input type="text" id="txtNPA<?=$i?>" name="txtNPA[<?=$i?>]">
                        <input type="text" name="txtCity[<?=$i?>]" id="txtCity<?=$i?>">
                        <input type="text" name="txtFirstName[<?=$i?>]" id="txtFirstName<?=$i?>">
                        <input type="text" name="txtLastName[<?=$i?>]" id="txtLastName<?=$i?>">
                        <input type="text" name="txtPhone[<?=$i?>]" id="txtPhone<?=$i?>">
                        <input type="text" name="txtprof[<?=$i?>]" id="txtprof<?=$i?>"><br>
                    </div>
                <?php
                }
                ?>

            </div>

        </div>

        <div class="transport hidden" id="txtTransport">

            <div class="content-flex-row">
                <div>
                    Rendez-vous
                </div>
                <div>
                    Départ
                </div>
                <div>
                    Arrivée
                </div>
                <div>
                    Numéro de vol
                </div>
                <div>
                    Numéro de train
                </div>
                <div>
                    Numéro de Bus
                </div>
                <div>
                    Prix
                </div>
            </div>

            <div class="content-flex-column">

                <?php
                for ($i = 0; $i < 50; $i++){
                    ?>
                    <div class="content-flex-row">
                        <input type="text" id="txtMeeting<?=$i?>" name="txtMeeting[<?=$i?>]">
                        <input type="text" id="txtStart<?=$i?>" name="txtStart[<?=$i?>]">
                        <input type="text" name="txtEnd[<?=$i?>]" id="txtEnd<?=$i?>">
                        <input type="text" name="txtFlight[<?=$i?>]" id="txtFlight<?=$i?>">
                        <input type="text" name="txtTrain[<?=$i?>]" id="txtTrain<?=$i?>">
                        <input type="text" name="txtBus[<?=$i?>]" id="txtBus<?=$i?>">
                        <input type="text" name="txtPrice[<?=$i?>]" id="txtPrice<?=$i?>"><br>
                    </div>
                    <?php
                }
                ?>

            </div>

        </div>

        <div class="lodging hidden" id="txtLogement">

        <div class="content-flex-row-half-half">

            <div class="content-flex-half-column">

                Hotel: <input
                        type="text"
                        name="txtHotelData[00]"
                        id="txtHotelData00"><br>
                Adresse: <input
                        type="text"
                        name="txtHotelData[01]"
                        id="txtHotelData01"><br>
                NPA: <input type="text"
                            name="txtHotelData[02]"
                            id="txtHotelData02"><br>
                City: <input type="text"
                             name="txtHotelData[03]"
                             id="txtHotelData03"><br>
                Téléphone: <input
                        type="text"
                        name="txtHotelData[04]"
                        id="txtHotelData04"><br>
                Email: <input
                        type="text"
                        name="txtHotelData[05]"
                        id="txtHotelData05"><br>
            </div>

            <div class="content-flex-half-column">

                <img src="IMG/alpha.jpg" id="HotelPic" class="hidden">

            </div>

        </div>

            <div class="content-flex-row">
                <div>
                    Chambre
                </div>
                <div>
                    Etage
                </div>
                <div>
                    Max personnes
                </div>
                <div>
                    Occupant 1
                </div>
                <div>
                    Occupant 2
                </div>
                <div>
                    Occupant 3
                </div>
                <div>
                    Occupant 4
                </div>
            </div>

            <div class="content-flex-column">

                <?php
                for ($i = 0; $i < 50; $i++){
                    ?>
                    <div class="content-flex-row">
                        <input type="text" id="txtMeeting<?=$i?>" name="txtMeeting[<?=$i?>]">
                        <input type="text" id="txtStart<?=$i?>" name="txtStart[<?=$i?>]">
                        <input type="text" name="txtEnd[<?=$i?>]" id="txtEnd<?=$i?>">
                        <input type="text" name="txtFlight[<?=$i?>]" id="txtFlight<?=$i?>">
                        <input type="text" name="txtTrain[<?=$i?>]" id="txtTrain<?=$i?>">
                        <input type="text" name="txtBus[<?=$i?>]" id="txtBus<?=$i?>">
                        <input type="text" name="txtPrice[<?=$i?>]" id="txtPrice<?=$i?>"><br>
                    </div>
                    <?php
                }
                ?>

            </div>

        </div>

        <div class="activity hidden" id="txtActivite">

            <div class="content-flex-row">
                <div>
                    Titre
                </div>
                <div>
                    Description
                </div>
                <div>
                    Date
                </div>
                <div>
                    Heure
                </div>
                <div>
                    Prix
                </div>
                <div>
                    Transport
                </div>
                <div>
                    Randez-vous
                </div>
                <div>
                    Image
                </div>
            </div>

            <div class="content-flex-column">

                <?php
                for ($i = 0; $i < 50; $i++){
                    ?>
                    <div class="content-flex-row">
                        <input type="text" id="txtTilte<?=$i?>" name="txtTilte[<?=$i?>]">
                        <input type="text" id="txtDesc<?=$i?>" name="txtDesc[<?=$i?>]">
                        <input type="text" name="txtDate[<?=$i?>]" id="txtDate<?=$i?>">
                        <input type="text" name="txtTime[<?=$i?>]" id="txtTime<?=$i?>">
                        <input type="text" name="txtPrice[<?=$i?>]" id="txtPrice<?=$i?>">
                        <input type="text" name="txtTrsp[<?=$i?>]" id="txtTrsp<?=$i?>">
                        <input type="text" name="txtRDV[<?=$i?>]" id="txtRDV<?=$i?>">
                        <input type="text" name="txtImg[<?=$i?>]" id="txtImg<?=$i?>"><br>
                    </div>
                    <?php
                }
                ?>

            </div>

        </div>

        <input type="submit"
               value="Ok"
               name="cmdSave"
               class="hidden">
        <input type="checkbox"
               name="showdata"
               title="Remise à zéro de tous les champs qui ne sont pas formatés correctement"
               class="hidden">
        <label for="showdata"
               class="hidden"
               id="lblReset">reset</label>
    </form>
</div>

</body>

</html>

