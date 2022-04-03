document.getElementById('form').addEventListener('submit', function(e){

    e.preventDefault();

    let formulario = new FormData(document.getElementById('form'));

    fetch('registro.php', {
     method: 'POST',
     body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
            document.getElementById('txtNombre').value = '';
            document.getElementById('txtApellidoMa').value = '';
            document.getElementById('txtApellidoPa').value = '';
            document.getElementById('txtFecha').value = '';
            document.getElementById('txtEstadoCivil').value = '';
            document.getElementById('txtSexo').value = '';
            document.getElementById('txtNacionalidad').value = '';
            document.getElementById('txtTelefono').value = '';
            document.getElementById('txtMovil').value = '';
            document.getElementById('txtCorreo').value = '';
            document.getElementById('txtDireccion').value = '';
            document.getElementById('txtRFC').value = '';
            document.getElementById('txtCURP').value = '';
            document.getElementById('txtNSS').value = '';
            alert('El usuario se inserto correcramente.');
        } else {
            console.log(data);
        }
    });
});