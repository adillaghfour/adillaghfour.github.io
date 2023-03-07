function panier(){
    if(localStorage.service || localStorage.produit){
        let check1 = localStorage.service
        let check2 = localStorage.produit
        if(check1 && check2){
            const panier_elem = document.getElementById("panier_elem")
            panier_elem.style.display = "inherit"
            panier_elem.textContent = "2"
        }else{
            const panier_elem = document.getElementById("panier_elem")
            panier_elem.style.display = "inherit"
        }
    }
}

panier()