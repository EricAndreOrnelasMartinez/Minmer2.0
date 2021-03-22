const form = document.getElementById('main');
const table = document.getElementById('table')
const h2 = document.getElementById('res')
fetch('../PHP/sessioncheck.php')
.then(res => res.json())
.then(ans =>{
    let aux = ans
    if(aux === '1'){
    }else{
        window.location.assign('../')
    }
})
form.addEventListener('submit', e  =>{
    e.preventDefault();
    let dataf = new FormData(form);
    fetch('../PHP/buscar.php',{
        method: 'POST',
        body: dataf
    })
    .then(res => res.json())
    .then(data =>{
    if((data.length > 0)){
    let output = `
    <tr>               
    <td>ID SQL</td>
    <td>Fecha de carga</td>
    <td>Fecha de entrega</td>
    <td>Operador</td>
    <td>Placas</td>
    <td>ID</td>
    <td>SO</td>
    <td>Factura</td>
    <td>Cliente</td>
    <td>PZS</td>
    <td>Cajas</td>
    <td>Subtotal</td>
    <td>Horario</td>
    <td>Dirección</td>
    <td>Destino</td>
    <td>Concepto</td>
    <td>Capacidad</td>
    <td>Observaciones</td>
    <td>OE</td>
    <td>Custodia</td>
    <td>Terminado</td>
    </tr>`;
    for(i in data){
        output += `<tr>
        <td>${data[i].ID_SQL}</td>
        <td>${data[i].FechaC}</td>
        <td>${data[i].FechaE}</td>
        <td>${data[i].Operador}</td>
        <td>${data[i].Placas}</td>
        <td>${data[i].ID}</td>
        <td>${data[i].SO}</td>
        <td>${data[i].Factura}</td>
        <td>${data[i].Cliente}</td>
        <td>${data[i].PZS}</td>
        <td>${data[i].Caja}</td>
        <td>${data[i].Subtotal}</td>
        <td>${data[i].Horario}</td>
        <td>${data[i].Direccion}</td>
        <td>${data[i].Destino}</td>
        <td>${data[i].Concepto}</td>
        <td>${data[i].Capacidad}</td>
        <td>${data[i].Observaciones}</td>
        <td>${data[i].OE}</td>
        <td>${data[i].Custodia}</td>
        <td>${data[i].Terminado}</td>
        </tr>`
        table.innerHTML = output;
        h2.innerHTML = ''
    }
}else{
    table.innerHTML = ''
    h2.innerHTML = 'No encontrado'
}
})
})