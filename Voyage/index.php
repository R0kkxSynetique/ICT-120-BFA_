<?php require_once "includes/store.php"; ?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <title>Base</title>
    <link rel="stylesheet" href="Css/Style.css">
    <script src="JS/reload.js"></script>
    <script src="JS/Script.js"></script>

</head>

<body>

<div class="banner">
    <div class="logo">
        <img src="IMG/logo%20seul%20vert.png" id="CPNVLogo">
    </div>
    <div class="page-title center">
        <p>Cette page rassemble toutes les informations nécessaires pour l'organisation de notre voyage d'étude en troisième année.</p>
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
        <div class="people hidden">
            Adresse:<input type="text" id="txtAddress00" name="txtAddress[00]">Code postal:<input type="text"
                                                                                                  id="txtNPA00"
                                                                                                  name="txtNPA[00]">Ville:<input
                    type="text" name="txtCity[00]" id="txtCity00">Prénom: <input type="text" name="txtFirstName[00]"
                                                                                 id="txtFirstName00">Nom:<input
                    type="text" name="txtLastName[00]" id="txtLastName00">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[00]"
                                                                                                    id="txtPhone00">Prof
            ou élève:<input type="text" name="txtprof[00]" id="txtprof00"><br>
            Adresse:<input type="text" id="txtAddress01" name="txtAddress[01]">Code postal:<input type="text"
                                                                                                  id="txtNPA01"
                                                                                                  name="txtNPA[01]">Ville:<input
                    type="text" name="txtCity[01]" id="txtCity01">Prénom: <input type="text" name="txtFirstName[01]"
                                                                                 id="txtFirstName01">Nom:<input
                    type="text" name="txtLastName[01]" id="txtLastName01">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[01]"
                                                                                                    id="txtPhone01">Prof
            ou élève:<input type="text" name="txtprof[01]" id="txtprof01"><br>
            Adresse:<input type="text" id="txtAddress02" name="txtAddress[02]">Code postal:<input type="text"
                                                                                                  id="txtNPA02"
                                                                                                  name="txtNPA[02]">Ville:<input
                    type="text" name="txtCity[02]" id="txtCity02">Prénom: <input type="text" name="txtFirstName[02]"
                                                                                 id="txtFirstName02">Nom:<input
                    type="text" name="txtLastName[02]" id="txtLastName02">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[02]"
                                                                                                    id="txtPhone02">Prof
            ou élève:<input type="text" name="txtprof[02]" id="txtprof02"><br>
            Adresse:<input type="text" id="txtAddress03" name="txtAddress[03]">Code postal:<input type="text"
                                                                                                  id="txtNPA03"
                                                                                                  name="txtNPA[03]">Ville:<input
                    type="text" name="txtCity[03]" id="txtCity03">Prénom: <input type="text" name="txtFirstName[03]"
                                                                                 id="txtFirstName03">Nom:<input
                    type="text" name="txtLastName[03]" id="txtLastName03">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[03]"
                                                                                                    id="txtPhone03">Prof
            ou élève:<input type="text" name="txtprof[03]" id="txtprof03"><br>
            Adresse:<input type="text" id="txtAddress04" name="txtAddress[04]">Code postal:<input type="text"
                                                                                                  id="txtNPA04"
                                                                                                  name="txtNPA[04]">Ville:<input
                    type="text" name="txtCity[04]" id="txtCity04">Prénom: <input type="text" name="txtFirstName[04]"
                                                                                 id="txtFirstName04">Nom:<input
                    type="text" name="txtLastName[04]" id="txtLastName04">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[04]"
                                                                                                    id="txtPhone04">Prof
            ou élève:<input type="text" name="txtprof[04]" id="txtprof04"><br>
            Adresse:<input type="text" id="txtAddress05" name="txtAddress[05]">Code postal:<input type="text"
                                                                                                  id="txtNPA05"
                                                                                                  name="txtNPA[05]">Ville:<input
                    type="text" name="txtCity[05]" id="txtCity05">Prénom: <input type="text" name="txtFirstName[05]"
                                                                                 id="txtFirstName05">Nom:<input
                    type="text" name="txtLastName[05]" id="txtLastName05">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[05]"
                                                                                                    id="txtPhone05">Prof
            ou élève:<input type="text" name="txtprof[05]" id="txtprof05"><br>
            Adresse:<input type="text" id="txtAddress06" name="txtAddress[06]">Code postal:<input type="text"
                                                                                                  id="txtNPA06"
                                                                                                  name="txtNPA[06]">Ville:<input
                    type="text" name="txtCity[06]" id="txtCity06">Prénom: <input type="text" name="txtFirstName[06]"
                                                                                 id="txtFirstName06">Nom:<input
                    type="text" name="txtLastName[06]" id="txtLastName06">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[06]"
                                                                                                    id="txtPhone06">Prof
            ou élève:<input type="text" name="txtprof[06]" id="txtprof06"><br>
            Adresse:<input type="text" id="txtAddress07" name="txtAddress[07]">Code postal:<input type="text"
                                                                                                  id="txtNPA07"
                                                                                                  name="txtNPA[07]">Ville:<input
                    type="text" name="txtCity[07]" id="txtCity07">Prénom: <input type="text" name="txtFirstName[07]"
                                                                                 id="txtFirstName07">Nom:<input
                    type="text" name="txtLastName[07]" id="txtLastName07">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[07]"
                                                                                                    id="txtPhone07">Prof
            ou élève:<input type="text" name="txtprof[07]" id="txtprof07"><br>
            Adresse:<input type="text" id="txtAddress08" name="txtAddress[08]">Code postal:<input type="text"
                                                                                                  id="txtNPA08"
                                                                                                  name="txtNPA[08]">Ville:<input
                    type="text" name="txtCity[08]" id="txtCity08">Prénom: <input type="text" name="txtFirstName[08]"
                                                                                 id="txtFirstName08">Nom:<input
                    type="text" name="txtLastName[08]" id="txtLastName08">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[08]"
                                                                                                    id="txtPhone08">Prof
            ou élève:<input type="text" name="txtprof[08]" id="txtprof08"><br>
            Adresse:<input type="text" id="txtAddress09" name="txtAddress[09]">Code postal:<input type="text"
                                                                                                  id="txtNPA09"
                                                                                                  name="txtNPA[09]">Ville:<input
                    type="text" name="txtCity[09]" id="txtCity09">Prénom: <input type="text" name="txtFirstName[09]"
                                                                                 id="txtFirstName09">Nom:<input
                    type="text" name="txtLastName[09]" id="txtLastName09">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[09]"
                                                                                                    id="txtPhone09">Prof
            ou élève:<input type="text" name="txtprof[09]" id="txtprof09"><br>
            Adresse:<input type="text" id="txtAddress10" name="txtAddress[10]">Code postal:<input type="text"
                                                                                                  id="txtNPA10"
                                                                                                  name="txtNPA[10]">Ville:<input
                    type="text" name="txtCity[10]" id="txtCity10">Prénom: <input type="text" name="txtFirstName[10]"
                                                                                 id="txtFirstName10">Nom:<input
                    type="text" name="txtLastName[10]" id="txtLastName10">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[10]"
                                                                                                    id="txtPhone10">Prof
            ou élève:<input type="text" name="txtprof[10]" id="txtprof10"><br>
            Adresse:<input type="text" id="txtAddress11" name="txtAddress[11]">Code postal:<input type="text"
                                                                                                  id="txtNPA11"
                                                                                                  name="txtNPA[11]">Ville:<input
                    type="text" name="txtCity[11]" id="txtCity11">Prénom: <input type="text" name="txtFirstName[11]"
                                                                                 id="txtFirstName11">Nom:<input
                    type="text" name="txtLastName[11]" id="txtLastName11">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[11]"
                                                                                                    id="txtPhone11">Prof
            ou élève:<input type="text" name="txtprof[11]" id="txtprof11"><br>
            Adresse:<input type="text" id="txtAddress12" name="txtAddress[12]">Code postal:<input type="text"
                                                                                                  id="txtNPA12"
                                                                                                  name="txtNPA[12]">Ville:<input
                    type="text" name="txtCity[12]" id="txtCity12">Prénom: <input type="text" name="txtFirstName[12]"
                                                                                 id="txtFirstName12">Nom:<input
                    type="text" name="txtLastName[12]" id="txtLastName12">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[12]"
                                                                                                    id="txtPhone12">Prof
            ou élève:<input type="text" name="txtprof[12]" id="txtprof12"><br>
            Adresse:<input type="text" id="txtAddress13" name="txtAddress[13]">Code postal:<input type="text"
                                                                                                  id="txtNPA13"
                                                                                                  name="txtNPA[13]">Ville:<input
                    type="text" name="txtCity[13]" id="txtCity13">Prénom: <input type="text" name="txtFirstName[13]"
                                                                                 id="txtFirstName13">Nom:<input
                    type="text" name="txtLastName[13]" id="txtLastName13">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[13]"
                                                                                                    id="txtPhone13">Prof
            ou élève:<input type="text" name="txtprof[13]" id="txtprof13"><br>
            Adresse:<input type="text" id="txtAddress14" name="txtAddress[14]">Code postal:<input type="text"
                                                                                                  id="txtNPA14"
                                                                                                  name="txtNPA[14]">Ville:<input
                    type="text" name="txtCity[14]" id="txtCity14">Prénom: <input type="text" name="txtFirstName[14]"
                                                                                 id="txtFirstName14">Nom:<input
                    type="text" name="txtLastName[14]" id="txtLastName14">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[14]"
                                                                                                    id="txtPhone14">Prof
            ou élève:<input type="text" name="txtprof[14]" id="txtprof14"><br>
            Adresse:<input type="text" id="txtAddress15" name="txtAddress[15]">Code postal:<input type="text"
                                                                                                  id="txtNPA15"
                                                                                                  name="txtNPA[15]">Ville:<input
                    type="text" name="txtCity[15]" id="txtCity15">Prénom: <input type="text" name="txtFirstName[15]"
                                                                                 id="txtFirstName15">Nom:<input
                    type="text" name="txtLastName[15]" id="txtLastName15">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[15]"
                                                                                                    id="txtPhone15">Prof
            ou élève:<input type="text" name="txtprof[15]" id="txtprof15"><br>
            Adresse:<input type="text" id="txtAddress16" name="txtAddress[16]">Code postal:<input type="text"
                                                                                                  id="txtNPA16"
                                                                                                  name="txtNPA[16]">Ville:<input
                    type="text" name="txtCity[16]" id="txtCity16">Prénom: <input type="text" name="txtFirstName[16]"
                                                                                 id="txtFirstName16">Nom:<input
                    type="text" name="txtLastName[16]" id="txtLastName16">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[16]"
                                                                                                    id="txtPhone16">Prof
            ou élève:<input type="text" name="txtprof[16]" id="txtprof16"><br>
            Adresse:<input type="text" id="txtAddress17" name="txtAddress[17]">Code postal:<input type="text"
                                                                                                  id="txtNPA17"
                                                                                                  name="txtNPA[17]">Ville:<input
                    type="text" name="txtCity[17]" id="txtCity17">Prénom: <input type="text" name="txtFirstName[17]"
                                                                                 id="txtFirstName17">Nom:<input
                    type="text" name="txtLastName[17]" id="txtLastName17">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[17]"
                                                                                                    id="txtPhone17">Prof
            ou élève:<input type="text" name="txtprof[17]" id="txtprof17"><br>
            Adresse:<input type="text" id="txtAddress18" name="txtAddress[18]">Code postal:<input type="text"
                                                                                                  id="txtNPA18"
                                                                                                  name="txtNPA[18]">Ville:<input
                    type="text" name="txtCity[18]" id="txtCity18">Prénom: <input type="text" name="txtFirstName[18]"
                                                                                 id="txtFirstName18">Nom:<input
                    type="text" name="txtLastName[18]" id="txtLastName18">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[18]"
                                                                                                    id="txtPhone18">Prof
            ou élève:<input type="text" name="txtprof[18]" id="txtprof18"><br>
            Adresse:<input type="text" id="txtAddress19" name="txtAddress[19]">Code postal:<input type="text"
                                                                                                  id="txtNPA19"
                                                                                                  name="txtNPA[19]">Ville:<input
                    type="text" name="txtCity[19]" id="txtCity19">Prénom: <input type="text" name="txtFirstName[19]"
                                                                                 id="txtFirstName19">Nom:<input
                    type="text" name="txtLastName[19]" id="txtLastName19">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[19]"
                                                                                                    id="txtPhone19">Prof
            ou élève:<input type="text" name="txtprof[19]" id="txtprof19"><br>
            Adresse:<input type="text" id="txtAddress20" name="txtAddress[20]">Code postal:<input type="text"
                                                                                                  id="txtNPA20"
                                                                                                  name="txtNPA[20]">Ville:<input
                    type="text" name="txtCity[20]" id="txtCity20">Prénom: <input type="text" name="txtFirstName[20]"
                                                                                 id="txtFirstName20">Nom:<input
                    type="text" name="txtLastName[20]" id="txtLastName20">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[20]"
                                                                                                    id="txtPhone20">Prof
            ou élève:<input type="text" name="txtprof[20]" id="txtprof20"><br>
            Adresse:<input type="text" id="txtAddress21" name="txtAddress[21]">Code postal:<input type="text"
                                                                                                  id="txtNPA21"
                                                                                                  name="txtNPA[21]">Ville:<input
                    type="text" name="txtCity[21]" id="txtCity21">Prénom: <input type="text" name="txtFirstName[21]"
                                                                                 id="txtFirstName21">Nom:<input
                    type="text" name="txtLastName[21]" id="txtLastName21">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[21]"
                                                                                                    id="txtPhone21">Prof
            ou élève:<input type="text" name="txtprof[21]" id="txtprof21"><br>
            Adresse:<input type="text" id="txtAddress22" name="txtAddress[22]">Code postal:<input type="text"
                                                                                                  id="txtNPA22"
                                                                                                  name="txtNPA[22]">Ville:<input
                    type="text" name="txtCity[22]" id="txtCity22">Prénom: <input type="text" name="txtFirstName[22]"
                                                                                 id="txtFirstName22">Nom:<input
                    type="text" name="txtLastName[22]" id="txtLastName22">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[22]"
                                                                                                    id="txtPhone22">Prof
            ou élève:<input type="text" name="txtprof[22]" id="txtprof22"><br>
            Adresse:<input type="text" id="txtAddress23" name="txtAddress[23]">Code postal:<input type="text"
                                                                                                  id="txtNPA23"
                                                                                                  name="txtNPA[23]">Ville:<input
                    type="text" name="txtCity[23]" id="txtCity23">Prénom: <input type="text" name="txtFirstName[23]"
                                                                                 id="txtFirstName23">Nom:<input
                    type="text" name="txtLastName[23]" id="txtLastName23">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[23]"
                                                                                                    id="txtPhone23">Prof
            ou élève:<input type="text" name="txtprof[23]" id="txtprof23"><br>
            Adresse:<input type="text" id="txtAddress24" name="txtAddress[24]">Code postal:<input type="text"
                                                                                                  id="txtNPA24"
                                                                                                  name="txtNPA[24]">Ville:<input
                    type="text" name="txtCity[24]" id="txtCity24">Prénom: <input type="text" name="txtFirstName[24]"
                                                                                 id="txtFirstName24">Nom:<input
                    type="text" name="txtLastName[24]" id="txtLastName24">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[24]"
                                                                                                    id="txtPhone24">Prof
            ou élève:<input type="text" name="txtprof[24]" id="txtprof24"><br>
            Adresse:<input type="text" id="txtAddress25" name="txtAddress[25]">Code postal:<input type="text"
                                                                                                  id="txtNPA25"
                                                                                                  name="txtNPA[25]">Ville:<input
                    type="text" name="txtCity[25]" id="txtCity25">Prénom: <input type="text" name="txtFirstName[25]"
                                                                                 id="txtFirstName25">Nom:<input
                    type="text" name="txtLastName[25]" id="txtLastName25">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[25]"
                                                                                                    id="txtPhone25">Prof
            ou élève:<input type="text" name="txtprof[25]" id="txtprof25"><br>
            Adresse:<input type="text" id="txtAddress26" name="txtAddress[26]">Code postal:<input type="text"
                                                                                                  id="txtNPA26"
                                                                                                  name="txtNPA[26]">Ville:<input
                    type="text" name="txtCity[26]" id="txtCity26">Prénom: <input type="text" name="txtFirstName[26]"
                                                                                 id="txtFirstName26">Nom:<input
                    type="text" name="txtLastName[26]" id="txtLastName26">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[26]"
                                                                                                    id="txtPhone26">Prof
            ou élève:<input type="text" name="txtprof[26]" id="txtprof26"><br>
            Adresse:<input type="text" id="txtAddress27" name="txtAddress[27]">Code postal:<input type="text"
                                                                                                  id="txtNPA27"
                                                                                                  name="txtNPA[27]">Ville:<input
                    type="text" name="txtCity[27]" id="txtCity27">Prénom: <input type="text" name="txtFirstName[27]"
                                                                                 id="txtFirstName27">Nom:<input
                    type="text" name="txtLastName[27]" id="txtLastName27">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[27]"
                                                                                                    id="txtPhone27">Prof
            ou élève:<input type="text" name="txtprof[27]" id="txtprof27"><br>
            Adresse:<input type="text" id="txtAddress28" name="txtAddress[28]">Code postal:<input type="text"
                                                                                                  id="txtNPA28"
                                                                                                  name="txtNPA[28]">Ville:<input
                    type="text" name="txtCity[28]" id="txtCity28">Prénom: <input type="text" name="txtFirstName[28]"
                                                                                 id="txtFirstName28">Nom:<input
                    type="text" name="txtLastName[28]" id="txtLastName28">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[28]"
                                                                                                    id="txtPhone28">Prof
            ou élève:<input type="text" name="txtprof[28]" id="txtprof28"><br>
            Adresse:<input type="text" id="txtAddress29" name="txtAddress[29]">Code postal:<input type="text"
                                                                                                  id="txtNPA29"
                                                                                                  name="txtNPA[29]">Ville:<input
                    type="text" name="txtCity[29]" id="txtCity29">Prénom: <input type="text" name="txtFirstName[29]"
                                                                                 id="txtFirstName29">Nom:<input
                    type="text" name="txtLastName[29]" id="txtLastName29">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[29]"
                                                                                                    id="txtPhone29">Prof
            ou élève:<input type="text" name="txtprof[29]" id="txtprof29"><br>
            Adresse:<input type="text" id="txtAddress30" name="txtAddress[30]">Code postal:<input type="text"
                                                                                                  id="txtNPA30"
                                                                                                  name="txtNPA[30]">Ville:<input
                    type="text" name="txtCity[30]" id="txtCity30">Prénom: <input type="text" name="txtFirstName[30]"
                                                                                 id="txtFirstName30">Nom:<input
                    type="text" name="txtLastName[30]" id="txtLastName30">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[30]"
                                                                                                    id="txtPhone30">Prof
            ou élève:<input type="text" name="txtprof[30]" id="txtprof30"><br>
            Adresse:<input type="text" id="txtAddress31" name="txtAddress[31]">Code postal:<input type="text"
                                                                                                  id="txtNPA31"
                                                                                                  name="txtNPA[31]">Ville:<input
                    type="text" name="txtCity[31]" id="txtCity31">Prénom: <input type="text" name="txtFirstName[31]"
                                                                                 id="txtFirstName31">Nom:<input
                    type="text" name="txtLastName[31]" id="txtLastName31">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[31]"
                                                                                                    id="txtPhone31">Prof
            ou élève:<input type="text" name="txtprof[31]" id="txtprof31"><br>
            Adresse:<input type="text" id="txtAddress32" name="txtAddress[32]">Code postal:<input type="text"
                                                                                                  id="txtNPA32"
                                                                                                  name="txtNPA[32]">Ville:<input
                    type="text" name="txtCity[32]" id="txtCity32">Prénom: <input type="text" name="txtFirstName[32]"
                                                                                 id="txtFirstName32">Nom:<input
                    type="text" name="txtLastName[32]" id="txtLastName32">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[32]"
                                                                                                    id="txtPhone32">Prof
            ou élève:<input type="text" name="txtprof[32]" id="txtprof32"><br>
            Adresse:<input type="text" id="txtAddress33" name="txtAddress[33]">Code postal:<input type="text"
                                                                                                  id="txtNPA33"
                                                                                                  name="txtNPA[33]">Ville:<input
                    type="text" name="txtCity[33]" id="txtCity33">Prénom: <input type="text" name="txtFirstName[33]"
                                                                                 id="txtFirstName33">Nom:<input
                    type="text" name="txtLastName[33]" id="txtLastName33">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[33]"
                                                                                                    id="txtPhone33">Prof
            ou élève:<input type="text" name="txtprof[33]" id="txtprof33"><br>
            Adresse:<input type="text" id="txtAddress34" name="txtAddress[34]">Code postal:<input type="text"
                                                                                                  id="txtNPA34"
                                                                                                  name="txtNPA[34]">Ville:<input
                    type="text" name="txtCity[34]" id="txtCity34">Prénom: <input type="text" name="txtFirstName[34]"
                                                                                 id="txtFirstName34">Nom:<input
                    type="text" name="txtLastName[34]" id="txtLastName34">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[34]"
                                                                                                    id="txtPhone34">Prof
            ou élève:<input type="text" name="txtprof[34]" id="txtprof34"><br>
            Adresse:<input type="text" id="txtAddress35" name="txtAddress[35]">Code postal:<input type="text"
                                                                                                  id="txtNPA35"
                                                                                                  name="txtNPA[35]">Ville:<input
                    type="text" name="txtCity[35]" id="txtCity35">Prénom: <input type="text" name="txtFirstName[35]"
                                                                                 id="txtFirstName35">Nom:<input
                    type="text" name="txtLastName[35]" id="txtLastName35">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[35]"
                                                                                                    id="txtPhone35">Prof
            ou élève:<input type="text" name="txtprof[35]" id="txtprof35"><br>
            Adresse:<input type="text" id="txtAddress36" name="txtAddress[36]">Code postal:<input type="text"
                                                                                                  id="txtNPA36"
                                                                                                  name="txtNPA[36]">Ville:<input
                    type="text" name="txtCity[36]" id="txtCity36">Prénom: <input type="text" name="txtFirstName[36]"
                                                                                 id="txtFirstName36">Nom:<input
                    type="text" name="txtLastName[36]" id="txtLastName36">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[36]"
                                                                                                    id="txtPhone36">Prof
            ou élève:<input type="text" name="txtprof[36]" id="txtprof36"><br>
            Adresse:<input type="text" id="txtAddress37" name="txtAddress[37]">Code postal:<input type="text"
                                                                                                  id="txtNPA37"
                                                                                                  name="txtNPA[37]">Ville:<input
                    type="text" name="txtCity[37]" id="txtCity37">Prénom: <input type="text" name="txtFirstName[37]"
                                                                                 id="txtFirstName37">Nom:<input
                    type="text" name="txtLastName[37]" id="txtLastName37">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[37]"
                                                                                                    id="txtPhone37">Prof
            ou élève:<input type="text" name="txtprof[37]" id="txtprof37"><br>
            Adresse:<input type="text" id="txtAddress38" name="txtAddress[38]">Code postal:<input type="text"
                                                                                                  id="txtNPA38"
                                                                                                  name="txtNPA[38]">Ville:<input
                    type="text" name="txtCity[38]" id="txtCity38">Prénom: <input type="text" name="txtFirstName[38]"
                                                                                 id="txtFirstName38">Nom:<input
                    type="text" name="txtLastName[38]" id="txtLastName38">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[38]"
                                                                                                    id="txtPhone38">Prof
            ou élève:<input type="text" name="txtprof[38]" id="txtprof38"><br>
            Adresse:<input type="text" id="txtAddress39" name="txtAddress[39]">Code postal:<input type="text"
                                                                                                  id="txtNPA39"
                                                                                                  name="txtNPA[39]">Ville:<input
                    type="text" name="txtCity[39]" id="txtCity39">Prénom: <input type="text" name="txtFirstName[39]"
                                                                                 id="txtFirstName39">Nom:<input
                    type="text" name="txtLastName[39]" id="txtLastName39">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[39]"
                                                                                                    id="txtPhone39">Prof
            ou élève:<input type="text" name="txtprof[39]" id="txtprof39"><br>
            Adresse:<input type="text" id="txtAddress40" name="txtAddress[40]">Code postal:<input type="text"
                                                                                                  id="txtNPA40"
                                                                                                  name="txtNPA[40]">Ville:<input
                    type="text" name="txtCity[40]" id="txtCity40">Prénom: <input type="text" name="txtFirstName[40]"
                                                                                 id="txtFirstName40">Nom:<input
                    type="text" name="txtLastName[40]" id="txtLastName40">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[40]"
                                                                                                    id="txtPhone40">Prof
            ou élève:<input type="text" name="txtprof[40]" id="txtprof40"><br>
            Adresse:<input type="text" id="txtAddress41" name="txtAddress[41]">Code postal:<input type="text"
                                                                                                  id="txtNPA41"
                                                                                                  name="txtNPA[41]">Ville:<input
                    type="text" name="txtCity[41]" id="txtCity41">Prénom: <input type="text" name="txtFirstName[41]"
                                                                                 id="txtFirstName41">Nom:<input
                    type="text" name="txtLastName[41]" id="txtLastName41">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[41]"
                                                                                                    id="txtPhone41">Prof
            ou élève:<input type="text" name="txtprof[41]" id="txtprof41"><br>
            Adresse:<input type="text" id="txtAddress42" name="txtAddress[42]">Code postal:<input type="text"
                                                                                                  id="txtNPA42"
                                                                                                  name="txtNPA[42]">Ville:<input
                    type="text" name="txtCity[42]" id="txtCity42">Prénom: <input type="text" name="txtFirstName[42]"
                                                                                 id="txtFirstName42">Nom:<input
                    type="text" name="txtLastName[42]" id="txtLastName42">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[42]"
                                                                                                    id="txtPhone42">Prof
            ou élève:<input type="text" name="txtprof[42]" id="txtprof42"><br>
            Adresse:<input type="text" id="txtAddress43" name="txtAddress[43]">Code postal:<input type="text"
                                                                                                  id="txtNPA43"
                                                                                                  name="txtNPA[43]">Ville:<input
                    type="text" name="txtCity[43]" id="txtCity43">Prénom: <input type="text" name="txtFirstName[43]"
                                                                                 id="txtFirstName43">Nom:<input
                    type="text" name="txtLastName[43]" id="txtLastName43">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[43]"
                                                                                                    id="txtPhone43">Prof
            ou élève:<input type="text" name="txtprof[43]" id="txtprof43"><br>
            Adresse:<input type="text" id="txtAddress44" name="txtAddress[44]">Code postal:<input type="text"
                                                                                                  id="txtNPA44"
                                                                                                  name="txtNPA[44]">Ville:<input
                    type="text" name="txtCity[44]" id="txtCity44">Prénom: <input type="text" name="txtFirstName[44]"
                                                                                 id="txtFirstName44">Nom:<input
                    type="text" name="txtLastName[44]" id="txtLastName44">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[44]"
                                                                                                    id="txtPhone44">Prof
            ou élève:<input type="text" name="txtprof[44]" id="txtprof44"><br>
            Adresse:<input type="text" id="txtAddress45" name="txtAddress[45]">Code postal:<input type="text"
                                                                                                  id="txtNPA45"
                                                                                                  name="txtNPA[45]">Ville:<input
                    type="text" name="txtCity[45]" id="txtCity45">Prénom: <input type="text" name="txtFirstName[45]"
                                                                                 id="txtFirstName45">Nom:<input
                    type="text" name="txtLastName[45]" id="txtLastName45">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[45]"
                                                                                                    id="txtPhone45">Prof
            ou élève:<input type="text" name="txtprof[45]" id="txtprof45"><br>
            Adresse:<input type="text" id="txtAddress46" name="txtAddress[46]">Code postal:<input type="text"
                                                                                                  id="txtNPA46"
                                                                                                  name="txtNPA[46]">Ville:<input
                    type="text" name="txtCity[46]" id="txtCity46">Prénom: <input type="text" name="txtFirstName[46]"
                                                                                 id="txtFirstName46">Nom:<input
                    type="text" name="txtLastName[46]" id="txtLastName46">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[46]"
                                                                                                    id="txtPhone46">Prof
            ou élève:<input type="text" name="txtprof[46]" id="txtprof46"><br>
            Adresse:<input type="text" id="txtAddress47" name="txtAddress[47]">Code postal:<input type="text"
                                                                                                  id="txtNPA47"
                                                                                                  name="txtNPA[47]">Ville:<input
                    type="text" name="txtCity[47]" id="txtCity47">Prénom: <input type="text" name="txtFirstName[47]"
                                                                                 id="txtFirstName47">Nom:<input
                    type="text" name="txtLastName[47]" id="txtLastName47">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[47]"
                                                                                                    id="txtPhone47">Prof
            ou élève:<input type="text" name="txtprof[47]" id="txtprof47"><br>
            Adresse:<input type="text" id="txtAddress48" name="txtAddress[48]">Code postal:<input type="text"
                                                                                                  id="txtNPA48"
                                                                                                  name="txtNPA[48]">Ville:<input
                    type="text" name="txtCity[48]" id="txtCity48">Prénom: <input type="text" name="txtFirstName[48]"
                                                                                 id="txtFirstName48">Nom:<input
                    type="text" name="txtLastName[48]" id="txtLastName48">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[48]"
                                                                                                    id="txtPhone48">Prof
            ou élève:<input type="text" name="txtprof[48]" id="txtprof48"><br>
            Adresse:<input type="text" id="txtAddress49" name="txtAddress[49]">Code postal:<input type="text"
                                                                                                  id="txtNPA49"
                                                                                                  name="txtNPA[49]">Ville:<input
                    type="text" name="txtCity[49]" id="txtCity49">Prénom: <input type="text" name="txtFirstName[49]"
                                                                                 id="txtFirstName49">Nom:<input
                    type="text" name="txtLastName[49]" id="txtLastName49">Numéro de portable:<input type="text"
                                                                                                    name="txtPhone[49]"
                                                                                                    id="txtPhone49">Prof
            ou élève:<input type="text" name="txtprof[49]" id="txtprof49"><br>
        </div>
        <div class="transport hidden">
            Rendez-vous:<input type="text" name="txtMeeting[00]" id="txtMeeting00">Départ:<input type="text"
                                                                                                 name="txtStart[00]"
                                                                                                 id="txtStart00">Arrivée:<input
                    type="text" name="txtEnd[00]" id="txtEnd00">Numéro de vol:<input type="text" name="txtFlight[00]"
                                                                                     id="txtFlight00">Numéro de
            train:<input type="text" name="txtTrain[00]" id="txtTrain00">Numéro de bus:<input type="text"
                                                                                              name="txtBus[00]"
                                                                                              id="txtBus00">Prix:<input
                    type="text" name="txtPrice[00]" id="txtPrice00"><br>
            Rendez-vous:<input type="text" name="txtMeeting[01]" id="txtMeeting01">Départ:<input type="text"
                                                                                                 name="txtStart[01]"
                                                                                                 id="txtStart01">Arrivée:<input
                    type="text" name="txtEnd[01]" id="txtEnd01">Numéro de vol:<input type="text" name="txtFlight[01]"
                                                                                     id="txtFlight01">Numéro de
            train:<input type="text" name="txtTrain[01]" id="txtTrain01">Numéro de bus:<input type="text"
                                                                                              name="txtBus[01]"
                                                                                              id="txtBus01">Prix:<input
                    type="text" name="txtPrice[01]" id="txtPrice01"><br>
            Rendez-vous:<input type="text" name="txtMeeting[02]" id="txtMeeting02">Départ:<input type="text"
                                                                                                 name="txtStart[02]"
                                                                                                 id="txtStart02">Arrivée:<input
                    type="text" name="txtEnd[02]" id="txtEnd02">Numéro de vol:<input type="text" name="txtFlight[02]"
                                                                                     id="txtFlight02">Numéro de
            train:<input type="text" name="txtTrain[02]" id="txtTrain02">Numéro de bus:<input type="text"
                                                                                              name="txtBus[02]"
                                                                                              id="txtBus02">Prix:<input
                    type="text" name="txtPrice[02]" id="txtPrice02"><br>
            Rendez-vous:<input type="text" name="txtMeeting[03]" id="txtMeeting03">Départ:<input type="text"
                                                                                                 name="txtStart[03]"
                                                                                                 id="txtStart03">Arrivée:<input
                    type="text" name="txtEnd[03]" id="txtEnd03">Numéro de vol:<input type="text" name="txtFlight[03]"
                                                                                     id="txtFlight03">Numéro de
            train:<input type="text" name="txtTrain[03]" id="txtTrain03">Numéro de bus:<input type="text"
                                                                                              name="txtBus[03]"
                                                                                              id="txtBus03">Prix:<input
                    type="text" name="txtPrice[03]" id="txtPrice03"><br>
            Rendez-vous:<input type="text" name="txtMeeting[04]" id="txtMeeting04">Départ:<input type="text"
                                                                                                 name="txtStart[04]"
                                                                                                 id="txtStart04">Arrivée:<input
                    type="text" name="txtEnd[04]" id="txtEnd04">Numéro de vol:<input type="text" name="txtFlight[04]"
                                                                                     id="txtFlight04">Numéro de
            train:<input type="text" name="txtTrain[04]" id="txtTrain04">Numéro de bus:<input type="text"
                                                                                              name="txtBus[04]"
                                                                                              id="txtBus04">Prix:<input
                    type="text" name="txtPrice[04]" id="txtPrice04"><br>
            Rendez-vous:<input type="text" name="txtMeeting[05]" id="txtMeeting05">Départ:<input type="text"
                                                                                                 name="txtStart[05]"
                                                                                                 id="txtStart05">Arrivée:<input
                    type="text" name="txtEnd[05]" id="txtEnd05">Numéro de vol:<input type="text" name="txtFlight[05]"
                                                                                     id="txtFlight05">Numéro de
            train:<input type="text" name="txtTrain[05]" id="txtTrain05">Numéro de bus:<input type="text"
                                                                                              name="txtBus[05]"
                                                                                              id="txtBus05">Prix:<input
                    type="text" name="txtPrice[05]" id="txtPrice05"><br>
            Rendez-vous:<input type="text" name="txtMeeting[06]" id="txtMeeting06">Départ:<input type="text"
                                                                                                 name="txtStart[06]"
                                                                                                 id="txtStart06">Arrivée:<input
                    type="text" name="txtEnd[06]" id="txtEnd06">Numéro de vol:<input type="text" name="txtFlight[06]"
                                                                                     id="txtFlight06">Numéro de
            train:<input type="text" name="txtTrain[06]" id="txtTrain06">Numéro de bus:<input type="text"
                                                                                              name="txtBus[06]"
                                                                                              id="txtBus06">Prix:<input
                    type="text" name="txtPrice[06]" id="txtPrice06"><br>
            Rendez-vous:<input type="text" name="txtMeeting[07]" id="txtMeeting07">Départ:<input type="text"
                                                                                                 name="txtStart[07]"
                                                                                                 id="txtStart07">Arrivée:<input
                    type="text" name="txtEnd[07]" id="txtEnd07">Numéro de vol:<input type="text" name="txtFlight[07]"
                                                                                     id="txtFlight07">Numéro de
            train:<input type="text" name="txtTrain[07]" id="txtTrain07">Numéro de bus:<input type="text"
                                                                                              name="txtBus[07]"
                                                                                              id="txtBus07">Prix:<input
                    type="text" name="txtPrice[07]" id="txtPrice07"><br>
            Rendez-vous:<input type="text" name="txtMeeting[08]" id="txtMeeting08">Départ:<input type="text"
                                                                                                 name="txtStart[08]"
                                                                                                 id="txtStart08">Arrivée:<input
                    type="text" name="txtEnd[08]" id="txtEnd08">Numéro de vol:<input type="text" name="txtFlight[08]"
                                                                                     id="txtFlight08">Numéro de
            train:<input type="text" name="txtTrain[08]" id="txtTrain08">Numéro de bus:<input type="text"
                                                                                              name="txtBus[08]"
                                                                                              id="txtBus08">Prix:<input
                    type="text" name="txtPrice[08]" id="txtPrice08"><br>
            Rendez-vous:<input type="text" name="txtMeeting[09]" id="txtMeeting09">Départ:<input type="text"
                                                                                                 name="txtStart[09]"
                                                                                                 id="txtStart09">Arrivée:<input
                    type="text" name="txtEnd[09]" id="txtEnd09">Numéro de vol:<input type="text" name="txtFlight[09]"
                                                                                     id="txtFlight09">Numéro de
            train:<input type="text" name="txtTrain[09]" id="txtTrain09">Numéro de bus:<input type="text"
                                                                                              name="txtBus[09]"
                                                                                              id="txtBus09">Prix:<input
                    type="text" name="txtPrice[09]" id="txtPrice09"><br>
            Rendez-vous:<input type="text" name="txtMeeting[10]" id="txtMeeting10">Départ:<input type="text"
                                                                                                 name="txtStart[10]"
                                                                                                 id="txtStart10">Arrivée:<input
                    type="text" name="txtEnd[10]" id="txtEnd10">Numéro de vol:<input type="text" name="txtFlight[10]"
                                                                                     id="txtFlight10">Numéro de
            train:<input type="text" name="txtTrain[10]" id="txtTrain10">Numéro de bus:<input type="text"
                                                                                              name="txtBus[10]"
                                                                                              id="txtBus10">Prix:<input
                    type="text" name="txtPrice[10]" id="txtPrice10"><br>
            Rendez-vous:<input type="text" name="txtMeeting[11]" id="txtMeeting11">Départ:<input type="text"
                                                                                                 name="txtStart[11]"
                                                                                                 id="txtStart11">Arrivée:<input
                    type="text" name="txtEnd[11]" id="txtEnd11">Numéro de vol:<input type="text" name="txtFlight[11]"
                                                                                     id="txtFlight11">Numéro de
            train:<input type="text" name="txtTrain[11]" id="txtTrain11">Numéro de bus:<input type="text"
                                                                                              name="txtBus[11]"
                                                                                              id="txtBus11">Prix:<input
                    type="text" name="txtPrice[11]" id="txtPrice11"><br>
            Rendez-vous:<input type="text" name="txtMeeting[12]" id="txtMeeting12">Départ:<input type="text"
                                                                                                 name="txtStart[12]"
                                                                                                 id="txtStart12">Arrivée:<input
                    type="text" name="txtEnd[12]" id="txtEnd12">Numéro de vol:<input type="text" name="txtFlight[12]"
                                                                                     id="txtFlight12">Numéro de
            train:<input type="text" name="txtTrain[12]" id="txtTrain12">Numéro de bus:<input type="text"
                                                                                              name="txtBus[12]"
                                                                                              id="txtBus12">Prix:<input
                    type="text" name="txtPrice[12]" id="txtPrice12"><br>
            Rendez-vous:<input type="text" name="txtMeeting[13]" id="txtMeeting13">Départ:<input type="text"
                                                                                                 name="txtStart[13]"
                                                                                                 id="txtStart13">Arrivée:<input
                    type="text" name="txtEnd[13]" id="txtEnd13">Numéro de vol:<input type="text" name="txtFlight[13]"
                                                                                     id="txtFlight13">Numéro de
            train:<input type="text" name="txtTrain[13]" id="txtTrain13">Numéro de bus:<input type="text"
                                                                                              name="txtBus[13]"
                                                                                              id="txtBus13">Prix:<input
                    type="text" name="txtPrice[13]" id="txtPrice13"><br>
            Rendez-vous:<input type="text" name="txtMeeting[14]" id="txtMeeting14">Départ:<input type="text"
                                                                                                 name="txtStart[14]"
                                                                                                 id="txtStart14">Arrivée:<input
                    type="text" name="txtEnd[14]" id="txtEnd14">Numéro de vol:<input type="text" name="txtFlight[14]"
                                                                                     id="txtFlight14">Numéro de
            train:<input type="text" name="txtTrain[14]" id="txtTrain14">Numéro de bus:<input type="text"
                                                                                              name="txtBus[14]"
                                                                                              id="txtBus14">Prix:<input
                    type="text" name="txtPrice[14]" id="txtPrice14"><br>
            Rendez-vous:<input type="text" name="txtMeeting[15]" id="txtMeeting15">Départ:<input type="text"
                                                                                                 name="txtStart[15]"
                                                                                                 id="txtStart15">Arrivée:<input
                    type="text" name="txtEnd[15]" id="txtEnd15">Numéro de vol:<input type="text" name="txtFlight[15]"
                                                                                     id="txtFlight15">Numéro de
            train:<input type="text" name="txtTrain[15]" id="txtTrain15">Numéro de bus:<input type="text"
                                                                                              name="txtBus[15]"
                                                                                              id="txtBus15">Prix:<input
                    type="text" name="txtPrice[15]" id="txtPrice15"><br>
            Rendez-vous:<input type="text" name="txtMeeting[16]" id="txtMeeting16">Départ:<input type="text"
                                                                                                 name="txtStart[16]"
                                                                                                 id="txtStart16">Arrivée:<input
                    type="text" name="txtEnd[16]" id="txtEnd16">Numéro de vol:<input type="text" name="txtFlight[16]"
                                                                                     id="txtFlight16">Numéro de
            train:<input type="text" name="txtTrain[16]" id="txtTrain16">Numéro de bus:<input type="text"
                                                                                              name="txtBus[16]"
                                                                                              id="txtBus16">Prix:<input
                    type="text" name="txtPrice[16]" id="txtPrice16"><br>
            Rendez-vous:<input type="text" name="txtMeeting[17]" id="txtMeeting17">Départ:<input type="text"
                                                                                                 name="txtStart[17]"
                                                                                                 id="txtStart17">Arrivée:<input
                    type="text" name="txtEnd[17]" id="txtEnd17">Numéro de vol:<input type="text" name="txtFlight[17]"
                                                                                     id="txtFlight17">Numéro de
            train:<input type="text" name="txtTrain[17]" id="txtTrain17">Numéro de bus:<input type="text"
                                                                                              name="txtBus[17]"
                                                                                              id="txtBus17">Prix:<input
                    type="text" name="txtPrice[17]" id="txtPrice17"><br>
            Rendez-vous:<input type="text" name="txtMeeting[18]" id="txtMeeting18">Départ:<input type="text"
                                                                                                 name="txtStart[18]"
                                                                                                 id="txtStart18">Arrivée:<input
                    type="text" name="txtEnd[18]" id="txtEnd18">Numéro de vol:<input type="text" name="txtFlight[18]"
                                                                                     id="txtFlight18">Numéro de
            train:<input type="text" name="txtTrain[18]" id="txtTrain18">Numéro de bus:<input type="text"
                                                                                              name="txtBus[18]"
                                                                                              id="txtBus18">Prix:<input
                    type="text" name="txtPrice[18]" id="txtPrice18"><br>
            Rendez-vous:<input type="text" name="txtMeeting[19]" id="txtMeeting19">Départ:<input type="text"
                                                                                                 name="txtStart[19]"
                                                                                                 id="txtStart19">Arrivée:<input
                    type="text" name="txtEnd[19]" id="txtEnd19">Numéro de vol:<input type="text" name="txtFlight[19]"
                                                                                     id="txtFlight19">Numéro de
            train:<input type="text" name="txtTrain[19]" id="txtTrain19">Numéro de bus:<input type="text"
                                                                                              name="txtBus[19]"
                                                                                              id="txtBus19">Prix:<input
                    type="text" name="txtPrice[19]" id="txtPrice19"><br>
            Rendez-vous:<input type="text" name="txtMeeting[20]" id="txtMeeting20">Départ:<input type="text"
                                                                                                 name="txtStart[20]"
                                                                                                 id="txtStart20">Arrivée:<input
                    type="text" name="txtEnd[20]" id="txtEnd20">Numéro de vol:<input type="text" name="txtFlight[20]"
                                                                                     id="txtFlight20">Numéro de
            train:<input type="text" name="txtTrain[20]" id="txtTrain20">Numéro de bus:<input type="text"
                                                                                              name="txtBus[20]"
                                                                                              id="txtBus20">Prix:<input
                    type="text" name="txtPrice[20]" id="txtPrice20"><br>
            Rendez-vous:<input type="text" name="txtMeeting[21]" id="txtMeeting21">Départ:<input type="text"
                                                                                                 name="txtStart[21]"
                                                                                                 id="txtStart21">Arrivée:<input
                    type="text" name="txtEnd[21]" id="txtEnd21">Numéro de vol:<input type="text" name="txtFlight[21]"
                                                                                     id="txtFlight21">Numéro de
            train:<input type="text" name="txtTrain[21]" id="txtTrain21">Numéro de bus:<input type="text"
                                                                                              name="txtBus[21]"
                                                                                              id="txtBus21">Prix:<input
                    type="text" name="txtPrice[21]" id="txtPrice21"><br>
            Rendez-vous:<input type="text" name="txtMeeting[22]" id="txtMeeting22">Départ:<input type="text"
                                                                                                 name="txtStart[22]"
                                                                                                 id="txtStart22">Arrivée:<input
                    type="text" name="txtEnd[22]" id="txtEnd22">Numéro de vol:<input type="text" name="txtFlight[22]"
                                                                                     id="txtFlight22">Numéro de
            train:<input type="text" name="txtTrain[22]" id="txtTrain22">Numéro de bus:<input type="text"
                                                                                              name="txtBus[22]"
                                                                                              id="txtBus22">Prix:<input
                    type="text" name="txtPrice[22]" id="txtPrice22"><br>
            Rendez-vous:<input type="text" name="txtMeeting[23]" id="txtMeeting23">Départ:<input type="text"
                                                                                                 name="txtStart[23]"
                                                                                                 id="txtStart23">Arrivée:<input
                    type="text" name="txtEnd[23]" id="txtEnd23">Numéro de vol:<input type="text" name="txtFlight[23]"
                                                                                     id="txtFlight23">Numéro de
            train:<input type="text" name="txtTrain[23]" id="txtTrain23">Numéro de bus:<input type="text"
                                                                                              name="txtBus[23]"
                                                                                              id="txtBus23">Prix:<input
                    type="text" name="txtPrice[23]" id="txtPrice23"><br>
            Rendez-vous:<input type="text" name="txtMeeting[24]" id="txtMeeting24">Départ:<input type="text"
                                                                                                 name="txtStart[24]"
                                                                                                 id="txtStart24">Arrivée:<input
                    type="text" name="txtEnd[24]" id="txtEnd24">Numéro de vol:<input type="text" name="txtFlight[24]"
                                                                                     id="txtFlight24">Numéro de
            train:<input type="text" name="txtTrain[24]" id="txtTrain24">Numéro de bus:<input type="text"
                                                                                              name="txtBus[24]"
                                                                                              id="txtBus24">Prix:<input
                    type="text" name="txtPrice[24]" id="txtPrice24"><br>
            Rendez-vous:<input type="text" name="txtMeeting[25]" id="txtMeeting25">Départ:<input type="text"
                                                                                                 name="txtStart[25]"
                                                                                                 id="txtStart25">Arrivée:<input
                    type="text" name="txtEnd[25]" id="txtEnd25">Numéro de vol:<input type="text" name="txtFlight[25]"
                                                                                     id="txtFlight25">Numéro de
            train:<input type="text" name="txtTrain[25]" id="txtTrain25">Numéro de bus:<input type="text"
                                                                                              name="txtBus[25]"
                                                                                              id="txtBus25">Prix:<input
                    type="text" name="txtPrice[25]" id="txtPrice25"><br>
            Rendez-vous:<input type="text" name="txtMeeting[26]" id="txtMeeting26">Départ:<input type="text"
                                                                                                 name="txtStart[26]"
                                                                                                 id="txtStart26">Arrivée:<input
                    type="text" name="txtEnd[26]" id="txtEnd26">Numéro de vol:<input type="text" name="txtFlight[26]"
                                                                                     id="txtFlight26">Numéro de
            train:<input type="text" name="txtTrain[26]" id="txtTrain26">Numéro de bus:<input type="text"
                                                                                              name="txtBus[26]"
                                                                                              id="txtBus26">Prix:<input
                    type="text" name="txtPrice[26]" id="txtPrice26"><br>
            Rendez-vous:<input type="text" name="txtMeeting[27]" id="txtMeeting27">Départ:<input type="text"
                                                                                                 name="txtStart[27]"
                                                                                                 id="txtStart27">Arrivée:<input
                    type="text" name="txtEnd[27]" id="txtEnd27">Numéro de vol:<input type="text" name="txtFlight[27]"
                                                                                     id="txtFlight27">Numéro de
            train:<input type="text" name="txtTrain[27]" id="txtTrain27">Numéro de bus:<input type="text"
                                                                                              name="txtBus[27]"
                                                                                              id="txtBus27">Prix:<input
                    type="text" name="txtPrice[27]" id="txtPrice27"><br>
            Rendez-vous:<input type="text" name="txtMeeting[28]" id="txtMeeting28">Départ:<input type="text"
                                                                                                 name="txtStart[28]"
                                                                                                 id="txtStart28">Arrivée:<input
                    type="text" name="txtEnd[28]" id="txtEnd28">Numéro de vol:<input type="text" name="txtFlight[28]"
                                                                                     id="txtFlight28">Numéro de
            train:<input type="text" name="txtTrain[28]" id="txtTrain28">Numéro de bus:<input type="text"
                                                                                              name="txtBus[28]"
                                                                                              id="txtBus28">Prix:<input
                    type="text" name="txtPrice[28]" id="txtPrice28"><br>
            Rendez-vous:<input type="text" name="txtMeeting[29]" id="txtMeeting29">Départ:<input type="text"
                                                                                                 name="txtStart[29]"
                                                                                                 id="txtStart29">Arrivée:<input
                    type="text" name="txtEnd[29]" id="txtEnd29">Numéro de vol:<input type="text" name="txtFlight[29]"
                                                                                     id="txtFlight29">Numéro de
            train:<input type="text" name="txtTrain[29]" id="txtTrain29">Numéro de bus:<input type="text"
                                                                                              name="txtBus[29]"
                                                                                              id="txtBus29">Prix:<input
                    type="text" name="txtPrice[29]" id="txtPrice29"><br>
        </div>
        <div class="lodging hidden">
            Hotel: <input type="text" name="txtHotelData[00]" id="txtHotelData00"><br>
            Adresse: <input type="text" name="txtHotelData[01]" id="txtHotelData01"><br>
            NPA: <input type="text" name="txtHotelData[02]" id="txtHotelData02"><br>
            City: <input type="text" name="txtHotelData[03]" id="txtHotelData03"><br>
            Téléphone: <input type="text" name="txtHotelData[04]" id="txtHotelData04"><br>
            Email: <input type="text" name="txtHotelData[05]" id="txtHotelData05"><br>

            Chambre:<input type="text" name="txtRoom[00]" id="txtRoom00">Etage:<input type="text" name="txtFloor[00]"
                                                                                      id="txtFloor00">Max
            personnes:<input type="text" name="txtCapacity[00]" id="txtCapacity00">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[00]"
                                                                                                    id="txtOcc100">Occupant2:<input
                    type="text" name="txtOcc2[00]" id="txtOcc200">Occupant3:<input type="text" name="txtOcc3[00]"
                                                                                   id="txtOcc300">Occupant4:<input
                    type="text" name="txtOcc4[00]" id="txtOcc400"><br>
            Chambre:<input type="text" name="txtRoom[01]" id="txtRoom01">Etage:<input type="text" name="txtFloor[01]"
                                                                                      id="txtFloor01">Max
            personnes:<input type="text" name="txtCapacity[01]" id="txtCapacity01">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[01]"
                                                                                                    id="txtOcc101">Occupant2:<input
                    type="text" name="txtOcc2[01]" id="txtOcc201">Occupant3:<input type="text" name="txtOcc3[01]"
                                                                                   id="txtOcc301">Occupant4:<input
                    type="text" name="txtOcc4[01]" id="txtOcc401"><br>
            Chambre:<input type="text" name="txtRoom[02]" id="txtRoom02">Etage:<input type="text" name="txtFloor[02]"
                                                                                      id="txtFloor02">Max
            personnes:<input type="text" name="txtCapacity[02]" id="txtCapacity02">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[02]"
                                                                                                    id="txtOcc102">Occupant2:<input
                    type="text" name="txtOcc2[02]" id="txtOcc202">Occupant3:<input type="text" name="txtOcc3[02]"
                                                                                   id="txtOcc302">Occupant4:<input
                    type="text" name="txtOcc4[02]" id="txtOcc402"><br>
            Chambre:<input type="text" name="txtRoom[03]" id="txtRoom03">Etage:<input type="text" name="txtFloor[03]"
                                                                                      id="txtFloor03">Max
            personnes:<input type="text" name="txtCapacity[03]" id="txtCapacity03">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[03]"
                                                                                                    id="txtOcc103">Occupant2:<input
                    type="text" name="txtOcc2[03]" id="txtOcc203">Occupant3:<input type="text" name="txtOcc3[03]"
                                                                                   id="txtOcc303">Occupant4:<input
                    type="text" name="txtOcc4[03]" id="txtOcc403"><br>
            Chambre:<input type="text" name="txtRoom[04]" id="txtRoom04">Etage:<input type="text" name="txtFloor[04]"
                                                                                      id="txtFloor04">Max
            personnes:<input type="text" name="txtCapacity[04]" id="txtCapacity04">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[04]"
                                                                                                    id="txtOcc104">Occupant2:<input
                    type="text" name="txtOcc2[04]" id="txtOcc204">Occupant3:<input type="text" name="txtOcc3[04]"
                                                                                   id="txtOcc304">Occupant4:<input
                    type="text" name="txtOcc4[04]" id="txtOcc404"><br>
            Chambre:<input type="text" name="txtRoom[05]" id="txtRoom05">Etage:<input type="text" name="txtFloor[05]"
                                                                                      id="txtFloor05">Max
            personnes:<input type="text" name="txtCapacity[05]" id="txtCapacity05">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[05]"
                                                                                                    id="txtOcc105">Occupant2:<input
                    type="text" name="txtOcc2[05]" id="txtOcc205">Occupant3:<input type="text" name="txtOcc3[05]"
                                                                                   id="txtOcc305">Occupant4:<input
                    type="text" name="txtOcc4[05]" id="txtOcc405"><br>
            Chambre:<input type="text" name="txtRoom[06]" id="txtRoom06">Etage:<input type="text" name="txtFloor[06]"
                                                                                      id="txtFloor06">Max
            personnes:<input type="text" name="txtCapacity[06]" id="txtCapacity06">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[06]"
                                                                                                    id="txtOcc106">Occupant2:<input
                    type="text" name="txtOcc2[06]" id="txtOcc206">Occupant3:<input type="text" name="txtOcc3[06]"
                                                                                   id="txtOcc306">Occupant4:<input
                    type="text" name="txtOcc4[06]" id="txtOcc406"><br>
            Chambre:<input type="text" name="txtRoom[07]" id="txtRoom07">Etage:<input type="text" name="txtFloor[07]"
                                                                                      id="txtFloor07">Max
            personnes:<input type="text" name="txtCapacity[07]" id="txtCapacity07">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[07]"
                                                                                                    id="txtOcc107">Occupant2:<input
                    type="text" name="txtOcc2[07]" id="txtOcc207">Occupant3:<input type="text" name="txtOcc3[07]"
                                                                                   id="txtOcc307">Occupant4:<input
                    type="text" name="txtOcc4[07]" id="txtOcc407"><br>
            Chambre:<input type="text" name="txtRoom[08]" id="txtRoom08">Etage:<input type="text" name="txtFloor[08]"
                                                                                      id="txtFloor08">Max
            personnes:<input type="text" name="txtCapacity[08]" id="txtCapacity08">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[08]"
                                                                                                    id="txtOcc108">Occupant2:<input
                    type="text" name="txtOcc2[08]" id="txtOcc208">Occupant3:<input type="text" name="txtOcc3[08]"
                                                                                   id="txtOcc308">Occupant4:<input
                    type="text" name="txtOcc4[08]" id="txtOcc408"><br>
            Chambre:<input type="text" name="txtRoom[09]" id="txtRoom09">Etage:<input type="text" name="txtFloor[09]"
                                                                                      id="txtFloor09">Max
            personnes:<input type="text" name="txtCapacity[09]" id="txtCapacity09">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[09]"
                                                                                                    id="txtOcc109">Occupant2:<input
                    type="text" name="txtOcc2[09]" id="txtOcc209">Occupant3:<input type="text" name="txtOcc3[09]"
                                                                                   id="txtOcc309">Occupant4:<input
                    type="text" name="txtOcc4[09]" id="txtOcc409"><br>
            Chambre:<input type="text" name="txtRoom[10]" id="txtRoom10">Etage:<input type="text" name="txtFloor[10]"
                                                                                      id="txtFloor10">Max
            personnes:<input type="text" name="txtCapacity[10]" id="txtCapacity10">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[10]"
                                                                                                    id="txtOcc110">Occupant2:<input
                    type="text" name="txtOcc2[10]" id="txtOcc210">Occupant3:<input type="text" name="txtOcc3[10]"
                                                                                   id="txtOcc310">Occupant4:<input
                    type="text" name="txtOcc4[10]" id="txtOcc410"><br>
            Chambre:<input type="text" name="txtRoom[11]" id="txtRoom11">Etage:<input type="text" name="txtFloor[11]"
                                                                                      id="txtFloor11">Max
            personnes:<input type="text" name="txtCapacity[11]" id="txtCapacity11">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[11]"
                                                                                                    id="txtOcc111">Occupant2:<input
                    type="text" name="txtOcc2[11]" id="txtOcc211">Occupant3:<input type="text" name="txtOcc3[11]"
                                                                                   id="txtOcc311">Occupant4:<input
                    type="text" name="txtOcc4[11]" id="txtOcc411"><br>
            Chambre:<input type="text" name="txtRoom[12]" id="txtRoom12">Etage:<input type="text" name="txtFloor[12]"
                                                                                      id="txtFloor12">Max
            personnes:<input type="text" name="txtCapacity[12]" id="txtCapacity12">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[12]"
                                                                                                    id="txtOcc112">Occupant2:<input
                    type="text" name="txtOcc2[12]" id="txtOcc212">Occupant3:<input type="text" name="txtOcc3[12]"
                                                                                   id="txtOcc312">Occupant4:<input
                    type="text" name="txtOcc4[12]" id="txtOcc412"><br>
            Chambre:<input type="text" name="txtRoom[13]" id="txtRoom13">Etage:<input type="text" name="txtFloor[13]"
                                                                                      id="txtFloor13">Max
            personnes:<input type="text" name="txtCapacity[13]" id="txtCapacity13">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[13]"
                                                                                                    id="txtOcc113">Occupant2:<input
                    type="text" name="txtOcc2[13]" id="txtOcc213">Occupant3:<input type="text" name="txtOcc3[13]"
                                                                                   id="txtOcc313">Occupant4:<input
                    type="text" name="txtOcc4[13]" id="txtOcc413"><br>
            Chambre:<input type="text" name="txtRoom[14]" id="txtRoom14">Etage:<input type="text" name="txtFloor[14]"
                                                                                      id="txtFloor14">Max
            personnes:<input type="text" name="txtCapacity[14]" id="txtCapacity14">Occupant1:<input type="text"
                                                                                                    name="txtOcc1[14]"
                                                                                                    id="txtOcc114">Occupant2:<input
                    type="text" name="txtOcc2[14]" id="txtOcc214">Occupant3:<input type="text" name="txtOcc3[14]"
                                                                                   id="txtOcc314">Occupant4:<input
                    type="text" name="txtOcc4[14]" id="txtOcc414"><br>
        </div>
        <div class="activity hidden">
            Titre:<input type="text" name="txtTitle[00]" id="txtTitle00">Description:<textarea name="txtDesc[00]"
                                                                                               id="txtDesc00"></textarea>Date:<input
                    type="text" name="txtActDate[00]" id="txtActDate00">Heure:<input type="text" name="txtActTime[00]"
                                                                                     id="txtActTime00">Prix:<input
                    type="text" name="txtActPrice[00]" id="txtActPrice00">Transport:<input type="text"
                                                                                           name="txtActTrsp[00]"
                                                                                           id="txtActTrsp00">Rendez-vous:<input
                    type="text" name="txtRDV[00]" id="txtRDV00">Image:<input type="text" name="txtActImg[00]"
                                                                             id="txtActImg00"><img id="imgActImg00"
                                                                                                   class="actimg"/><br>
            Titre:<input type="text" name="txtTitle[01]" id="txtTitle01">Description:<textarea name="txtDesc[01]"
                                                                                               id="txtDesc01"></textarea>Date:<input
                    type="text" name="txtActDate[01]" id="txtActDate01">Heure:<input type="text" name="txtActTime[01]"
                                                                                     id="txtActTime01">Prix:<input
                    type="text" name="txtActPrice[01]" id="txtActPrice01">Transport:<input type="text"
                                                                                           name="txtActTrsp[01]"
                                                                                           id="txtActTrsp01">Rendez-vous:<input
                    type="text" name="txtRDV[01]" id="txtRDV01">Image:<input type="text" name="txtActImg[01]"
                                                                             id="txtActImg01"><img id="imgActImg01"
                                                                                                   class="actimg"/><br>
            Titre:<input type="text" name="txtTitle[02]" id="txtTitle02">Description:<textarea name="txtDesc[02]"
                                                                                               id="txtDesc02"></textarea>Date:<input
                    type="text" name="txtActDate[02]" id="txtActDate02">Heure:<input type="text" name="txtActTime[02]"
                                                                                     id="txtActTime02">Prix:<input
                    type="text" name="txtActPrice[02]" id="txtActPrice02">Transport:<input type="text"
                                                                                           name="txtActTrsp[02]"
                                                                                           id="txtActTrsp02">Rendez-vous:<input
                    type="text" name="txtRDV[02]" id="txtRDV02">Image:<input type="text" name="txtActImg[02]"
                                                                             id="txtActImg02"><img id="imgActImg02"
                                                                                                   class="actimg"/><br>
            Titre:<input type="text" name="txtTitle[03]" id="txtTitle03">Description:<textarea name="txtDesc[03]"
                                                                                               id="txtDesc03"></textarea>Date:<input
                    type="text" name="txtActDate[03]" id="txtActDate03">Heure:<input type="text" name="txtActTime[03]"
                                                                                     id="txtActTime03">Prix:<input
                    type="text" name="txtActPrice[03]" id="txtActPrice03">Transport:<input type="text"
                                                                                           name="txtActTrsp[03]"
                                                                                           id="txtActTrsp03">Rendez-vous:<input
                    type="text" name="txtRDV[03]" id="txtRDV03">Image:<input type="text" name="txtActImg[03]"
                                                                             id="txtActImg03"><img id="imgActImg03"
                                                                                                   class="actimg"/><br>
            Titre:<input type="text" name="txtTitle[04]" id="txtTitle04">Description:<textarea name="txtDesc[04]"
                                                                                               id="txtDesc04"></textarea>Date:<input
                    type="text" name="txtActDate[04]" id="txtActDate04">Heure:<input type="text" name="txtActTime[04]"
                                                                                     id="txtActTime04">Prix:<input
                    type="text" name="txtActPrice[04]" id="txtActPrice04">Transport:<input type="text"
                                                                                           name="txtActTrsp[04]"
                                                                                           id="txtActTrsp04">Rendez-vous:<input
                    type="text" name="txtRDV[04]" id="txtRDV04">Image:<input type="text" name="txtActImg[04]"
                                                                             id="txtActImg04"><img id="imgActImg04"
                                                                                                   class="actimg"/><br>
            Titre:<input type="text" name="txtTitle[05]" id="txtTitle05">Description:<textarea name="txtDesc[05]"
                                                                                               id="txtDesc05"></textarea>Date:<input
                    type="text" name="txtActDate[05]" id="txtActDate05">Heure:<input type="text" name="txtActTime[05]"
                                                                                     id="txtActTime05">Prix:<input
                    type="text" name="txtActPrice[05]" id="txtActPrice05">Transport:<input type="text"
                                                                                           name="txtActTrsp[05]"
                                                                                           id="txtActTrsp05">Rendez-vous:<input
                    type="text" name="txtRDV[05]" id="txtRDV05">Image:<input type="text" name="txtActImg[05]"
                                                                             id="txtActImg05"><img id="imgActImg05"
                                                                                                   class="actimg"/><br>
            Titre:<input type="text" name="txtTitle[06]" id="txtTitle06">Description:<textarea name="txtDesc[06]"
                                                                                               id="txtDesc06"></textarea>Date:<input
                    type="text" name="txtActDate[06]" id="txtActDate06">Heure:<input type="text" name="txtActTime[06]"
                                                                                     id="txtActTime06">Prix:<input
                    type="text" name="txtActPrice[06]" id="txtActPrice06">Transport:<input type="text"
                                                                                           name="txtActTrsp[06]"
                                                                                           id="txtActTrsp06">Rendez-vous:<input
                    type="text" name="txtRDV[06]" id="txtRDV06">Image:<input type="text" name="txtActImg[06]"
                                                                             id="txtActImg06"><img id="imgActImg06"
                                                                                                   class="actimg"/><br>
            Titre:<input type="text" name="txtTitle[07]" id="txtTitle07">Description:<textarea name="txtDesc[07]"
                                                                                               id="txtDesc07"></textarea>Date:<input
                    type="text" name="txtActDate[07]" id="txtActDate07">Heure:<input type="text" name="txtActTime[07]"
                                                                                     id="txtActTime07">Prix:<input
                    type="text" name="txtActPrice[07]" id="txtActPrice07">Transport:<input type="text"
                                                                                           name="txtActTrsp[07]"
                                                                                           id="txtActTrsp07">Rendez-vous:<input
                    type="text" name="txtRDV[07]" id="txtRDV07">Image:<input type="text" name="txtActImg[07]"
                                                                             id="txtActImg07"><img id="imgActImg07"
                                                                                                   class="actimg"/><br>
            Titre:<input type="text" name="txtTitle[08]" id="txtTitle08">Description:<textarea name="txtDesc[08]"
                                                                                               id="txtDesc08"></textarea>Date:<input
                    type="text" name="txtActDate[08]" id="txtActDate08">Heure:<input type="text" name="txtActTime[08]"
                                                                                     id="txtActTime08">Prix:<input
                    type="text" name="txtActPrice[08]" id="txtActPrice08">Transport:<input type="text"
                                                                                           name="txtActTrsp[08]"
                                                                                           id="txtActTrsp08">Rendez-vous:<input
                    type="text" name="txtRDV[08]" id="txtRDV08">Image:<input type="text" name="txtActImg[08]"
                                                                             id="txtActImg08"><img id="imgActImg08"
                                                                                                   class="actimg"/><br>
            Titre:<input type="text" name="txtTitle[09]" id="txtTitle09">Description:<textarea name="txtDesc[09]"
                                                                                               id="txtDesc09"></textarea>Date:<input
                    type="text" name="txtActDate[09]" id="txtActDate09">Heure:<input type="text" name="txtActTime[09]"
                                                                                     id="txtActTime09">Prix:<input
                    type="text" name="txtActPrice[09]" id="txtActPrice09">Transport:<input type="text"
                                                                                           name="txtActTrsp[09]"
                                                                                           id="txtActTrsp09">Rendez-vous:<input
                    type="text" name="txtRDV[09]" id="txtRDV09">Image:<input type="text" name="txtActImg[09]"
                                                                             id="txtActImg09"><img id="imgActImg09"
                                                                                                   class="actimg"/><br>
        </div>
        <input type="submit" value="Ok" name="cmdSave" class="hidden">
        <input type="checkbox" name="showdata" title="Remise à zéro de tous les champs qui ne sont pas formatés correctement" class="hidden">
        <label for="showdata" class="hidden" id="lblReset">reset</label>
    </form>
</div>

</body>

</html>

