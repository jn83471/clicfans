const embudos=document.querySelector("#Embudos");
const correos=document.querySelector("#Correos");
const contactos=document.querySelector("#Contactos");
const workflow=document.querySelector("#Workflows");
const sidebar=document.querySelector("aside");
const dropdawns=document.querySelectorAll(".dropdown");
const initPage=(e)=>{
    embudos.textContent="106";
    correos.textContent="115";
    contactos.textContent="721";
    workflow.textContent="21";
    sidebar.addEventListener("click",activeItem);
    dropdawns.forEach(elm=>{
        elm.addEventListener("click",(event=>{
            event.target.classList.toggle("active");
        }))
    })
}
document.addEventListener("DOMContentLoaded",initPage)
function activeItem(e){
    const active=sidebar.querySelectorAll(".active");
    active.forEach(element=>{
        element.classList.remove("active");
    });
    console.log(active);
    if(e.target.classList.contains("nav-link")){
        e.target.classList.add("active");
    }
}