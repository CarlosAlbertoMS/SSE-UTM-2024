<div id="contenido">
    <div class="evento__contenedor">
        <section class="evento__seccion-informacion">
            <h2 class="evento__titulo"> ${ response.nombre } </h2>
            <p class="evento__texto"> ${ response.descripcion } </p>

             <div class="evento__fechas">
               <p><img class="mi-icono" src="{{ asset('assets/icons/Calendario.svg') }}"></img> ${ response.fecha } </p>
               <p><img class="mi-icono" src="{{ asset('assets/icons/Calendario.svg') }}"></img> ${ response.fecha_fin } </p>
               <p><img class="mi-icono" src="{{ asset('assets/icons/ubicacion.svg') }}"</img> ${ response.lugar } </p>
             <div>
        </section>
        <section class="evento__seccion-img">
            <img src="${ response.imagen_url }" onerror="this.src='{{ asset('assets/img/normal_u1058.svg') }}';" class="evento__img" alt="">
            <div class="evento__contenedor-btn">
                <a id="btn-regresar" class="evento__btn-regresar">Regresar</a>
            </div>
        </section>
    </div>
</div>