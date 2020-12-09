const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show-menu')
        })
    }
}

showMenu('nav-toggle','nav-menu')


const sBody = document.querySelectorAll('.s-body')

function bodyAction(){
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu')

    bodyLink.forEach(n => n.addEventListener('click', bodyAction))
}

