/*==========================================================================================================*/
/*--------------------------------ANIMAÇÃO DO MENU QUANDO DÁ SCROLL ----------------------------------------*/
/*----------------------------------------------------------------------------------------------------------*/
const header = document.querySelector("header");

window.addEventListener('scroll', function () {
  header.classList.toggle('sticky', window.scrollY > 30);
});

const btnMenu = document.querySelector(".btn-menu");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li a");

btnMenu.addEventListener("click", ()=>{
    btnMenu.classList.toggle("active");
    navLinks.classList.toggle("active");
})


links.forEach((link)=>{
    link.addEventListener("click", ()=>{
        btnMenu.classList.remove("active");
        navLinks.classList.remove("active");
    })
})


const submenu = document.querySelectorAll(".nav-links li a.submenu");

submenu.forEach((link)=>{
    link.addEventListener("click", (event)=>{
        event.preventDefault();
        link.classList.toggle("active")
    })
})




let link_inicio = document.querySelectorAll("a.link_inicio")
let link_cursos = document.querySelector("a.link_cursos")
let link_cursos_svg = document.querySelector("a.link_cursos > svg")
let link_portf = document.querySelectorAll("a.link_portf")
let link_redes = document.querySelectorAll("a.link_redes")
let link_painel = document.querySelector("a.link_painel")
let link_painel_svg = document.querySelector("a.link_painel > svg")
let link_dash = document.querySelectorAll("a.link_dash")
let link_1admin = document.querySelectorAll("a.link_1admin")
let link_1conta = document.querySelectorAll("a.link_1conta")
let link_1infor = document.querySelectorAll("a.link_1infor")
let link_1mecan = document.querySelectorAll("a.link_1mecan")
let link_1quimi = document.querySelectorAll("a.link_1quimi")
let link_3infor = document.querySelectorAll("a.link_3infor")

let link_1admin_url = "/cursos/1administracao"
let link_1conta_url = "/cursos/1contabilidade"
let link_1infor_url = "/cursos/1informatica"
let link_1mecan_url = "/cursos/1mecanica"
let link_1quimi_url = "/cursos/1quimica"
let link_3infor_url = "/cursos/3informatica"
let link_dashAdmin_url = "/admin/dashboard"
let link_dashAluno_url = "/aluno/dashboard"

let colorActive = "#05C886"

if(window.location.pathname == link_1admin_url){
    link_cursos.style.color = colorActive
    link_cursos_svg.style.fill = colorActive
    link_1admin.forEach((link)=>{
        link.style.color= colorActive
    })
}
if(window.location.pathname == link_1conta_url){
    link_cursos.style.color = colorActive
    link_cursos_svg.style.fill = colorActive
    link_1conta.forEach((link)=>{
        link.style.color= colorActive
    })
}
if(window.location.pathname == link_1infor_url){
    link_cursos.style.color = colorActive
    link_cursos_svg.style.fill = colorActive
    link_1infor.forEach((link)=>{
        link.style.color= colorActive
    })
}
if(window.location.pathname == link_1mecan_url){
    link_cursos.style.color = colorActive
    link_cursos_svg.style.fill = colorActive
    link_1mecan.forEach((link)=>{
        link.style.color= colorActive
    })
}
if(window.location.pathname == link_1quimi_url){
    link_cursos.style.color = colorActive
    link_cursos_svg.style.fill = colorActive
    link_1quimi.forEach((link)=>{
        link.style.color= colorActive
    })
}
if(window.location.pathname == link_3infor_url){
    link_cursos.style.color = colorActive
    link_cursos_svg.style.fill = colorActive
    link_3infor.forEach((link)=>{
        link.style.color= colorActive
    })
}
if(window.location.pathname == link_dashAdmin_url){
    link_painel.style.color = colorActive
    link_painel_svg.style.fill = colorActive
    link_dash.forEach((link)=>{
        link.style.color= colorActive
    })
}
if(window.location.pathname == link_dashAluno_url){
    link_painel.style.color = colorActive
    link_painel_svg.style.fill = colorActive
    link_dash.forEach((link)=>{
        link.style.color= colorActive
    })
}


