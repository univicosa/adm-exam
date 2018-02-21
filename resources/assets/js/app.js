require('./bootstrap')

function verifyDebug() {
    let next = document.getElementById('next')

    if(null !== next) {
        next.addEventListener('click', function () {
            let debug = document.getElementById('debug')

            if(null !== debug) {
                swal('A PRÓXIMA TELA NÃO ABRIU?', 'SERÁ QUE FICOU ALGO QUE AINDA PRECISA SER RESOLVIDO?', 'error')
            } else {
                window.location = next.getAttribute('data-location')
            }
        })
    }
}

window.onload = verifyDebug