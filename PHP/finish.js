const form = document.getElementById('data')
const h3 = document.getElementById('res')
fetch('../PHP/sessioncheck.php')
.then(res => res.json())
.then(ans =>{
    let aux = ans
    if(aux === '1'){
    }else{
        window.location.assign('../')
    }
})

form.addEventListener('submit', e =>{
    e.preventDefault();
    if(confirm('Este registro ya no se podrá editar, ¿desea continuar?')){
        let dataF = new FormData(form)
        fetch('./finish2.php',{
            method: 'POST',
            body: dataF
        })
        .then(res => res.json())
        .then(data =>{
            window.location.assign('../CDMX/')
            
        }).catch(err =>{
            h3.innerHTML = err;
        })
    }
})
