
const urlShot="partyShotAPI.php";

async function affichageShot(){
    const dataShot = await fetch(urlShot);
    const infoShot = await dataShot.json();
    for(let i in infoShot){

        let article = document.getElementById("shot");
        let h  = document.createElement("h2");
        let im = document.createElement("img");
        let fp = document.createElement("p");
        let sp = document.createElement("p");
       

        h.textContent+=""+infoShot[i].name_party+"";
        im.setAttribute("src",""+infoShot[i].image_party+"", "alt","party");
        fp.textContent+=""+infoShot[i].recipe_party+"";
        sp.textContent+=""+infoShot[i].method_party+"";
        

        article.appendChild(h);
        article.appendChild(im);
        article.appendChild(fp);
        article.appendChild(sp);
                       
    }
}