//pourcentage 
//conteneur jaune
$(document).ready(function(){
    $.ajax({
        url:"PHP/conteneur_pourcentage.php",
        method:"GET",
        dataType:"json",
        data:" $pourcentage1"
    })
    .done(function(reponse){
        let data = JSON.stringify(reponse);
        //$("div#file1").append(data);
        var el = document.getElementById('file1');
        el.setAttribute('value', data);
        
    })
    .fail(function(error){
        alert("Echec:"+JSON.stringify(error));
    });
});
/*------------------------------*/
//conteneur vert
$(document).ready(function(){
    $.ajax({
        url:"PHP/conteneur_pourcentage2.php",
        method:"GET",
        dataType:"json",
        data:" $pourcentage2"
    })
    .done(function(reponse){
        let data = JSON.stringify(reponse);
        //$("div#file1").append(data);
        var el = document.getElementById('file2');
        el.setAttribute('value', data);
        
    })
    .fail(function(error){
        alert("Echec:"+JSON.stringify(error));
    });
});
/*----------------------------------------------*/
//conteneur gris
$(document).ready(function(){
    $.ajax({
        url:"PHP/conteneur_pourcentage3.php",
        method:"GET",
        dataType:"json",
        data:" $pourcentage3"
    })
    .done(function(reponse){
        let data = JSON.stringify(reponse);
        //$("div#file1").append(data);
        var el = document.getElementById('file3');
        el.setAttribute('value', data);
        
    })
    .fail(function(error){
        alert("Echec:"+JSON.stringify(error));
    });
});
/*------------------------------------------------------*/
//conteneur GRIS nbr de passage 
$(document).ready(function(){
    $.ajax({
        url:"PHP/conteneur_grise1.php",
        method:"GET",
        dataType:"json",
        data:" $sacGris1"
    })
    .done(function(reponse){
        let data = JSON.stringify(reponse);
        $("div#nbrPassage3").append(data);
    })
    .fail(function(error){
        alert("Echec:"+JSON.stringify(error));
    });
});
/*-----------------------------------------------------*/
//conteneur jaune nbr de passage
$(document).ready(function(){
    $.ajax({
        url:"PHP/conteneur_recyclable1.php",
        method:"GET",
        dataType:"json",
        data:" sacPoubelle1"
    })
    .done(function(reponse){
        let data = JSON.stringify(reponse);
        $("div#nbrPassage1").append(data);
    })
    .fail(function(error){
        alert("Echec:"+JSON.stringify(error));
    });
});
/*----------------------------------------------------*/
//conteneur vert nbr de sac
$(document).ready(function(){
    $.ajax({
        url:"PHP/conteneur_verte1.php",
        method:"GET",
        dataType:"json",
        data:" $sacvert1"
    })
    .done(function(reponse){
        let data = JSON.stringify(reponse);
        $("div#nbrPassage2").append(data);
    })
    .fail(function(error){
        alert("Echec:"+JSON.stringify(error));
    });
});