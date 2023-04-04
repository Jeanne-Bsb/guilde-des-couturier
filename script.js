    //apparition du texte expilcatif
    document.querySelector('#reserver').addEventListener('click',function(clic){
        console.log('clique');
        document.querySelector('.container-form').style.display='flex';
        document.querySelector('#reserver').style.display='none';
        } 
    )
    
    //manipulation des chaine de caractère
    var nom=document.querySelector('#Nom').outerHTML.value;
    console.log(nom)
    nom=prenomNormalise(nom);
    console.log(nom)
    var prenom=document.querySelector('#Prenom').outerHTML.value;
    console.log(prenom)
    prenom=prenomNormalise(prenom);
    console.log(prenom)

    function normaliseCasse(chaine){
        var firstLettre=chaine[0].toUpperCase();
        var finchaine=chaine.substring(1,chaine.length-1);
        finchaine=finchaine.toLowerCase();
        return firstLettre+finchaine;
    }
    
    function prenomNormalise(prenom) {
        var tableau=prenom.split("-");
        var newPrenom='';
        for (let i = 0 ; i < tableau.length ; i++) {
            tableau[i]=normaliseCasse(tableau[i]);
            newPrenom=newPrenom+tableau[i];
        }
        return newPrenom
    }
