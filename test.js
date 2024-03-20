// var nom = prompt('Entrez votre nom !');
// alert(nom)

// confirm('Voulez-vous quitter cette page ?')

// var nom = "Jean"

// var nom = "Julien"
// let nom = "Yannick"

//  nom = "Jean"

    // const nom="Bauma"
// let numCh = parseInt(prompt("Entrez le numero de la chambre"))

//     switch (numCh) {
//         case 1:
//             alert("C'est une chambre normale")
            
//             break;
//         case 2:
//             alert("C'est une chambre VIP")
//             break;
//         case 3:
//             alert("C'est une chambre VVIP")
//             break;
    
//         default:
//             alert("Pas de chambre pour ce numero111")
//             break;
//     }

    // let state = false

    // let connect = state ? "YES" : "NO"
    // alert(connect)

    // var age = parseInt(prompt("Tapez votre age"))

    // if(age >0 && age<18)
    // {
    //     alert("Vous etes mineur")
    // }
    // else if(age > 17 && age<=35)
    // {
    //     alert("Vous etes jeune")
    // }
    // else if(age > 35 && age <= 60)
    // {
    //     alert("Vous etes adulte")
    // }
    // else if(age > 60 && age <=100)
    // {
    //     alert("Vous etes vieux")
    // }
    // else
    // {
    //     alert("Valeur non reconnue")
    // }

        // let age = 0;

        // while (age<=10) 
        // {
        //     console.log("Bonjour age " + age)
        //     age++
        // }

        // const benef = function (prixA, prixV)
        // {
        //         return prixV - prixA

        // }


        // let prixVente = 10000
        // let prixAchat = 8000

        // alert(benef(prixAchat, prixVente))

        // let etudiants = new Array('Yannick','Mulemeri','Bauma')

        // etudiants.push('Chris','Joy','Joelle')
     
        // for (let i = 0; i < etudiants.length; i++) 
        // {
        //     let etudiant = etudiants[i];
        //     console.log(etudiant)
            
        // }

        // let etudiant = "yannick"
        // console.log(etudiant.toUpperCase());


        // affichage de l'element parent

// let link = document.getElementById('link1')
// let linkParent = link.parentNode

// console.log(linkParent.textContent)

    //affichage de l'element enfant

    // let paaragraphe = document.getElementById('paragraphe')
    // let first = paaragraphe.firstChild
    // let last = paaragraphe.lastChild

    // console.log(paaragraphe.childNodes)


    // // creer l'element
    // let newLink = document.createElement('a')

    // //affecter les attributs
    // newLink.id = 'link1'
    // newLink.href = 'monsite.com'
    // newLink.className = 'link'
    // newLink.setAttribute('title', 'Lien vers mon site')

    // //inserer dans le document

    // document.getElementById('paragraphe').appendChild(newLink)

    // let textLink = document.createTextNode('Nouveau lien')

    // newLink.appendChild(textLink)

    // let paragraphe = document.getElementById('paragraphe')
    // let span = paragraphe.lastChild
    // paragraphe.replaceChild(newLink,span)

    // let clonePar = paragraphe.cloneNode(true)
    // console.log(clonePar)
   
    // let span = document.getElementById('span1')
    // span.parentNode.removeChild(span)

    // console.log(span)

    // let btn1 = document.getElementById('btn1')

    // btn1.ondblclick = function () {

    //     btn1.textContent = "Vous avez cliquE"
        
    // }
    // btn1.ondblclick = function(){}

    // let hello = function(){
    //     alert('Je suis un evenement')
    // }

    // btn1.addEventListener('click',hello,false)

    // btn.onclick = function () {

  
    // let input = document.getElementById('input')
    // alert(input.value)
    // }
    
    let input = document.getElementById('input')
    let btn = document.getElementById('btn')
    let texte = document.getElementById('texte')

    btn.addEventListener('click',function(){
        if (input.value !=''){
        let li = document.createElement('li')
        let liText = document.createTextNode(input.value)
        li.appendChild(liText)
        liste.appendChild(li)
        
        let button = document.createElement('button')
        button.id = 'btn2'
        button.className = 'bttn'
        let del = document.createTextNode('Delete')

        button.appendChild(del)
        console.log(button)
        li.appendChild(button)

            button.onclick = function(){
            let liParent = this.parentNode
            liParent.parentNode.removeChild(liParent)
            }
        let buttonCross = document.createElement('button')
        buttonCross.id = 'crosbtn'
        let cross = document.createTextNode('Cross')
        buttonCross.appendChild(cross)
        li.appendChild(buttonCross)
   
        console.log(buttonCross)


        buttonCross.onclick = function()
        {
            let liParent = this.parentNode
        
            
            if(liParent.style.textDecoration != 'line-through')
            {
              liParent.style.textDecoration = 'line-through'
            }
            else
            {
                liParent.style.textDecoration = 'none'
            }
       
        }
        return buttonCross
        
    }

    },false)

     
