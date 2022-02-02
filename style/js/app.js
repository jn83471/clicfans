const embudos=document.querySelector("#Embudos");
const correos=document.querySelector("#Correos");
const contactos=document.querySelector("#Contactos");
const workflow=document.querySelector("#Workflows");
const sidebar=document.querySelector("aside .list:first-child");
const dropdawns=document.querySelectorAll(".dropdown");

let saveActive=false;
const initPage=async (e)=>{
    // events
    sidebar.addEventListener("click",activeItem);
    dropdawns.forEach(elm=>{
        elm.addEventListener("click",(event=>{
            event.stopPropagation();
            if(!event.target.classList.contains("dropdown")){
                return;
            }
            event.target.classList.toggle("active");
            if(event.target.classList?.contains("active")){
                saveActive=event.target;
            }
            
        }))
    });
    document.body.addEventListener("click",async (e)=>{
        if(saveActive.classList?.contains("active")){
            saveActive.classList.remove("active");
        }

        
    })

    //peticiones
    const responce=await fetch("https://clicfans.com/reclutamiento/",{
    method:"POST",
    body:JSON.stringify({"sendData":"Valencia Fernández Jesús Antonio"}),
    headers:{
        'X-Requested-With': 'XMLHttpRequest',
        'Content-Type': 'application/json'
     }}
    );
    const resp=await responce.json();
    console.log(responce);
    embudos.textContent=resp.embudos;
    correos.textContent=resp.correos;
    contactos.textContent=resp.contactos;
    workflow.textContent=resp.workflows;
}
document.addEventListener("DOMContentLoaded",initPage)
async function activeItem(e){
    const active=sidebar.querySelectorAll(".active");
    active.forEach(element=>{
        element.classList.remove("active");
    });
    if(e.target.classList.contains("nav-link")){
        e.target.classList.add("active");
        const responce=await fetch("https://clicfans.com/reclutamiento/",{
            method:"POST",
            body:JSON.stringify({"sendData":"Valencia Fernández Jesús Antonio"}),
            headers:{
                'X-Requested-With': 'XMLHttpRequest',
                'Content-Type': 'application/json'
             }}
            );
            const resp=await responce.json();
            console.log(responce);
            embudos.textContent=resp.embudos;
            correos.textContent=resp.correos;
            contactos.textContent=resp.contactos;
            workflow.textContent=resp.workflows;
    }
}