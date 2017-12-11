"use strict";

$(document).ready(function(){
    validateMdp2();
    
    $('#profilepicfile').change(function(e) {
        var preview = $('#profilepic')[0];
        var file = e.target.files[0];
        var reader  = new FileReader();
        
        reader.addEventListener("load", function () {
            preview.src = reader.result;
        }, false);
        
        if (file) reader.readAsDataURL(file);
    });
});

function validateMdp2()
{  
    var mdp1 = $('#mdp1');
    var mdp2 = $('#mdp2');
    
    if (mdp1.val() === mdp2.val()) {
        document.getElementById('mdp2').setCustomValidity('');
    } 
    else {
        document.getElementById('mdp2').setCustomValidity('Les mots de passes doivent être égaux.');
    }
}

function computeAge()
{  
    try
    {  
        // j'affiche dans la console quelques objets javascript, ce qui devrait vous aider.
        /*
        console.log(Date.now());  
        console.log(document.getElementById("birthdate"));  
        console.log(document.getElementById("birthdate").valueAsDate);  
        console.log(Date.parse(document.getElementById("birthdate").valueAsDate));  
        console.log(new Date(0).getYear());  
        console.log(new Date(65572346585).getYear());
        */
        // modifier ici la valeur de l'élément age
        var value = $('#birthdate').val();
        var thisYear = new Date( Date.now() ).getYear();
        var birthYear = new Date( value ).getYear();
        
        $('#age').val(thisYear - birthYear);
    } 
    catch(e) { alert(e) }
}