const form = document.getElementById('data')
const h3 = document.getElementById('res')
form.addEventListener('submit', e =>{
    e.preventDefault()
    let dataF = new FormData(form)
    fetch('../PHP/newuser.php', {
        method: 'POST',
        body: dataF
    })
    .then(res => res.json())
    .then(data =>{
        let aux = data
        if(aux === '1'){
            window.location.assign('../')
        }else{
            h3.innerHTML = 'correo existente'
        }
    }).catch(err =>{
        h3.innerHTML = 'correo existente'
    })
})