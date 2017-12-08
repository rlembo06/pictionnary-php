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
        var profilepic = document.getElementById('profilepic').getAttribute('src');
       
        console.log(document.getElementById('profilepic').getAttribute('src'));
        
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
        
        var existuser = $.post( 'traitements/req_existUser.php', {user: user_json});
        existuser.done(function(data) {
                                    
            if(data.length > 1)
            {
                var json = JSON.parse(data);
                
                $('#email').val('');
                $('#prenom').val(json.prenom);
                $('#nom').val(json.nom);
                $('#telephone').val(json.tel);
                $('#website').val(json.website);
                $('#ville').val(json.ville);
                $('#taille').val(json.taille);
                $('#couleur').val('#' + json.couleur);
                $('#mdp1').val(json.password);
                $('#mdp2').val(json.password);
                $('#birthdate').val(json.birthdate);
                $('#profilepicfile').val(json.profilepic);

                if(json.sexe === 'h') $('#homme').prop("checked", true);
                if(json.sexe === 'f') $('#femme').prop("checked", true);

                var thisYear = new Date( Date.now() ).getYear();
                var birthYear = new Date( json.birthdate ).getYear();
                $('#age').val(thisYear - birthYear);

                $('#errorMessage').show();
            } 
            else 
            {
                $.post('traitements/req_inscription.php', {user: user_json});
                location.reload(true);
            }
            
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