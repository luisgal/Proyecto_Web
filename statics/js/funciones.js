function articuloMediano(data){
    document.write(
    '<article class="articulos">',
        '<table class="descripcionCorta tablaMuestra">',
            '<tr>',
                '<td>Nombre</td>',
                '<td>', data.nombre ,'</td>',
                '<td rowspan="5" class="sinFondo"><img src="', data.imagen ,'" class="vistaMediana"></td>',
            '</tr>',
            '<tr>',
                '<td>Precio</td>',
                '<td>$', data.precio ,'</td>',
            '</tr>',
            '<tr>',
                '<td>Calificacion</td>',
                '<td>', data.calificacion ,' &#9733</td>',
            '</tr>',
            '<tr>',
                '<td>Descripción</td>',
                '<td>', data.descripcion ,'</td>',
            '</tr>',
            '<tr>',
                '<td colspan="2" class="boton"><a href="#openModal', data.idProducto ,'"><button><span>Ver Más</span></button></a></td>',
            '</tr>',
        '</table>',
        '<hr class="separadorH">',
        '<div id="openModal', data.idProducto ,'" class="modalDialog">',
            '<div>',
                '<a href="#close" title="Close" class="close">X</a>');

                tablePresentDetalles(data);

    document.write(
            '</div>',
        '</div>',
    '</article>'
    );
}

function tablePresentDetalles(data){
    document.write(
    '<article class="articulos">',
        '<button><span>Comprar Producto</span></button>',
        '<table class="descripcionCorta tablaMuestra">',
            '<tr>',
                '<td>Nombre</td>',
                '<td>', data.nombre ,'</td>',
                '<td rowspan="5" class="sinFondo"><img src="', data.imagen ,'" class="vistaMediana"></td>',
            '</tr>',
            '<tr>',
                '<td>Precio</td>',
                '<td>$', data.precio ,'</td>',
            '</tr>',
            '<tr>',
                '<td>Calificacion</td>',
                '<td>', data.calificacion ,' &#9733</td>',
            '</tr>',
            '<tr>',
                '<td>Descripción</td>',
                '<td>', data.descripcionLarga ,'</td>',
            '</tr>',
        '</table>',
    '</article>');
}

function tablePresent(data){
    document.write(
    '<a href="#openModal', data.idProducto ,'">',
    '    <table class="descripcion">',
    '        <tr class="sinFondo">',
    '            <td colspan="2"><img src="', data.imagen ,'" class="imagenVistaM"></td>',
    '        </tr>',
    '        <tr>',
    '            <td>Calificacion</td>',
    '            <td>', data.calificacion ,' &#9733</td>',
    '        </tr>',
    '        <tr>',
    '            <td>Precio</td>',
    '            <td>$', data.precio ,'</td>',
    '        </tr>',
    '    </table>',
    '</a>',
    '<div id="openModal', data.idProducto ,'" class="modalDialog">',
        '<div>',
            '<a href="#close" title="Close" class="close">X</a>');

            tablePresentDetalles(data);

document.write(
        '</div>',
    '</div>');
}

function muestrario(productos){
    document.write('<article class="articulos">');
    for(x=0;x<productos.length;x++){
        tablePresent(productos[x]);
    }
    document.write('<hr class="separadorH"></article>');
}

function muestrarioMediano(productos){
    document.write('<article class="articulos">');
    for(x=0;x<productos.length;x++){
        articuloMediano(productos[x]);
    }
    document.write('<hr class="separadorH"></article>');
}

function promocional(data){
    document.write(
    '    <article class="articulos">',
    '<a href="#openModal', data.idProducto ,'">',
    '        <table class="descripcionAs">',
    '            <tr class="sinFondo">',
    '                <td colspan="2"><img src="', data.imagen ,'" class="vistaChica"></td>',
    '            </tr>',
    '            <tr>',
    '                <td>', data.nombre, '</td>',
    '                <td>', data.calificacion,' ★</td>',
    '            </tr>',
    '        </table>',
    '</a>',
    '<div id="openModal', data.idProducto ,'" class="modalDialog">',
        '<div>',
            '<a href="#close" title="Close" class="close">X</a>');

            tablePresentDetalles(data);

document.write(
        '</div>',
    '</div>',
    '        <hr class="separadorH">',
    '    </article>',
    );
}

function imgPromocional(data){
    document.write(
        '<a href="#openModal', data.idProducto ,'">',
        '<img src="', data.imagen ,'" class="imgPromocional">',
        '</a>',
        '<div id="openModal', data.idProducto ,'" class="modalDialog">',
            '<div>',
                '<a href="#close" title="Close" class="close">X</a>');

                tablePresentDetalles(data);

    document.write(
            '</div>',
        '</div>',
        '<hr class="separadorH">'
    );
}
