const embudos=document.querySelector("#Embudos");
const correos=document.querySelector("#Correos");
const contactos=document.querySelector("#Contactos");
const workflow=document.querySelector("#Workflows");
const initPage=(e)=>{
    embudos.textContent="106";
    correos.textContent="115";
    contactos.textContent="721";
    workflow.textContent="21";
}
document.addEventListener("DOMContentLoaded",initPage)
