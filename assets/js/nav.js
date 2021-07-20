const navLink = document.querySelectorAll('.nav-link')

navLink.forEach(nl => {
    nl.addEventListener('click', function (e) {
        navLink.forEach(nl => {
            nl.classList.remove('aktif')
        })
       e.target.classList.add('aktif')
    })
})