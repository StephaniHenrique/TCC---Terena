/* mostrar navbar */
const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav= document.getElementById(navId),
    bodypd= document.getElementById(bodyId)
    headerpd= document.getElementById(headerId)


    // validação das variaveis
    if(toggle && nav && bodypd && headerId){
        toggle.addEventListener('click', ()=>{

            //mostrar navbar
            nav.classList.toggle('show')

            //mudar icon
            toggle.classList.toggle('bx-x')

            bodypd.classList.toggle('body-pd')

            headerpd.classList.toggle('body-pd')
        })
    }
}

showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

/* link ativo */
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    if(linkColor){
        linkColor.forEach(l => l.classList.remove('active'))
        this.classList.add('active')
    }
}

linkColor.forEach(l => l.addEventListener('click', colorLink))


