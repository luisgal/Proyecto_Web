function articuloMediano(){
    document.write(
    '<article class="articulos">',
        '<table class="descripcionCorta tablaMuestra">',
            '<tr>',
                '<td>Nombre</td>',
                '<td>El Jeilo</td>',
                '<td rowspan="5" class="sinFondo"><img src="styles/img/eljeilo.jpg" class="vistaMediana"></td>',
            '</tr>',
            '<tr>',
                '<td>Precio</td>',
                '<td>$5000</td>',
            '</tr>',
            '<tr>',
                '<td>Calificacion</td>',
                '<td>4.5 &#9733</td>',
            '</tr>',
            '<tr>',
                '<td>Descripción</td>',
                '<td>Videojuego basado en dispros que hacen pium pium y solo quiero rellenas informacion vale bye :v</td>',
            '</tr>',
            '<tr>',
                '<td colspan="2"><a href="#openModal"><button><span>Ver Más</span></button></a></td>',
            '</tr>',
        '</table>',
        '<hr class="separadorH">',
        '<div id="openModal" class="modalDialog">',
            '<div>',
                '<a href="#close" title="Close" class="close">X</a>',
                '<h2>Mi modal</h2>',
                '<p>Este es un ejemplo de modal, creado gracias al poder de CSS3.</p>',
                '<p>Puedes hacer un montón de cosas aquí, como alertas o incluso crear un formulario de registro aquí mismo.</p>',
            '</div>',
        '</div>',
    '</article>'
    );
}

function tablePresent(){
    document.write(
    '    <table class="descripcion">',
    '        <tr class="sinFondo imagenVistaM">',
    '            <td colspan="2"><img src="styles/img/eljeilo.jpg" class="vistaChica"></td>',
    '        </tr>',
    '        <tr>',
    '            <td>Nombre</td>',
    '            <td>El Jeilo</td>',
    '        </tr>',
    '        <tr>',
    '            <td>Calificacion</td>',
    '            <td>5 &#9733</td>',
    '        </tr>',
    '        <tr>',
    '            <td>Precio</td>',
    '            <td>$5000</td>',
    '        </tr>',
    '    </table>',
    );
}

function muestrario(){
    document.write('<article class="articulos">');
    tablePresent();
    tablePresent();
    tablePresent();
    tablePresent();

    document.write('<hr class="separadorH"></article>');
}
