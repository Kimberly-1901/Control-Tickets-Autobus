function selecRuta(boton){
    let tabla = document.getElementById('customers3');
    let fila = tabla.insertRow();

    fila.innerHTML = boton.parentNode.parentNode.childNodes;
    
    console.log(boton.parentNode.parentNode.childNodes);
}

function add(button) {
	var row = button.parentNode.parentNode;
    var cells = row.querySelectorAll('td');
    addToCartTable(cells);
    button.disabled = true;
    document.getElementById('btnComprar').type = 'button';
}

function remove() {
	var row = this.parentNode.parentNode;
   
    document.querySelector('#customers3 tbody')
            .removeChild(row);
    let boton = document.getElementById(this.getAttribute("id"));
    boton.disabled = false;


    if(document.getElementById("customers3").rows.length == 1){
        document.getElementById('btnComprar').type = 'hidden';
    }
}

function addToCartTable(cells) {
    var code = cells[0].innerText;
    var name = cells[1].innerText;
    var price = cells[2].innerText;


    var idcell = cells[3].firstChild.getAttribute("id");
    
    var newRow = document.createElement('tr');
    
    newRow.appendChild(createCell(code));
    newRow.appendChild(createCell(name));
    newRow.appendChild(createCell(price));
    var cellInputQty = createCell();
    cellInputQty.appendChild(createInputQty());
    newRow.appendChild(cellInputQty);
    var cellRemoveBtn = createCell();
    cellRemoveBtn.appendChild(createRemoveBtn(idcell))
    newRow.appendChild(cellRemoveBtn);
    
    document.querySelector('#customers3 tbody').appendChild(newRow);
}

function createInputQty() {
	var inputQty = document.createElement('input');
    inputQty.type = 'number';
    inputQty.id = 'elim';
    inputQty.required = 'true';
    inputQty.min = 1;
    inputQty.className = 'x';
    return inputQty;
}

function createRemoveBtn(idcell) {

    var btnRemove = document.createElement('button');
    btnRemove.className = 'btn btn-xs btn-danger';
    btnRemove.onclick = remove;
    btnRemove.id = idcell;
    btnRemove.innerText = 'Remover';
    return btnRemove;
}

function createCell(text) {
	var td = document.createElement('td');
  if(text) {
  	td.innerText = text;
  }
  return td;
}

function validarCantTickets(){

    let contador = parseInt(document.getElementById("customers3").rows.length);
    contador--;

    let suma = 0;

    while(contador > 0){
        let i = parseInt(document.getElementById("customers3").rows[contador].childNodes[3].childNodes[0].value);
        suma += i;
        contador--;
    }

    if(suma > 5 || suma == 0 || isNaN(suma)){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Cantidad de Tickets no valida (Debe digitar una cantidad de 1-5)',
            showConfirmButton: false,
            timer: 1500
          })
          return;
    }

    let lista = new Array();

    for(let i = 1;i<parseInt(document.getElementById("customers3").rows.length);i++){
        for(let j = 0;j<4;j++){
            if(j == 3){
                lista.push(document.getElementById("customers3").rows[i].childNodes[j].childNodes[0].value);
            }else{
                lista.push(document.getElementById("customers3").rows[i].childNodes[j].childNodes[0].data);
            }
        }
    }

    let dato =  JSON.stringify(lista);

    $.ajax(
        {
            type:'POST',
            url: '../../modelo/ticket2.php',
            datatype: 'JSON',
            data: {"lista": dato},

            success: function (result) {
               // alert(result);
            }
        }
    );
    
    window.location = "http://3.140.255.241/Examen1/modelo/ticket.php";
}