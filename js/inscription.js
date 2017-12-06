"use strict";

$(document).ready(function(){
    
    $( '#inscription' ).submit(function( event ) {
                
        var email = $('#email').val();
        var prenom = $('#prenom').val();
        var nom = $('#nom').val();
        var telephone = $('#telephone').val();
        var website = $('#website').val();
        var sexe = $('input[name="sexe"]').val();
        var ville = $('#ville').val();
        var taille = $('#taille').val();
        var couleur = $('#couleur').val();
        var password = $('#mdp1').val();
        var birthdate = $('#birthdate').val();
        var profilepic = $('#profilepicfile').val();
        
        var user = new User(
            email,
            prenom,
            nom,
            telephone,
            website,
            sexe,
            ville,
            taille,
            couleur,
            password,
            birthdate,
            profilepic
        );
        
        var user_json = JSON.stringify(user);
       
        var posting = $.post( 'traitements/req_inscription.php', {user: user_json});
        
        posting.done(function( data ) {
            var json = JSON.parse(data);
            console.log(json, json.email);
        });

        event.preventDefault();
    });
    
});

var User = function(_email, _prenom, _nom, _telephone, _website, _sexe, _ville, _taille, _couleur, _password, _birthdate, _profilepic)
{
    this.email = _email;
    this.prenom = _prenom;
    this.nom = _nom;
    this.telephone = _telephone;
    this.website = _website;
    this.sexe = _sexe;
    this.ville = _ville;
    this.taille = _taille;
    this.couleur = _couleur;
    this.password = _password;
    this.birthdate = _birthdate;
    this.profilepic = _profilepic;
};



/*
$.post('traitements/req_inscription.php', {user: user_json})
    .done(function() { location.reload(true); }
);
*/

/*
$.post('traitements/req_inscription.php', {user: user_json}, function( data ) {

    $('#email').val();
    $('#prenom').val();
    $('#nom').val();
    $('#telephone').val();
    $('#website').val();
    $('input[name="sexe"]').val();
    $('#ville').val();
    $('#taille').val();
    $('#couleur').val();
    $('#mdp1').val();
    $('#birthdate').val();
    $('#profilepicfile').val();

}, "json");
*/