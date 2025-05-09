document.addEventListener('DOMContentLoaded', function() {
    // 1. Elementos del DOM
    const btnCulturales = document.getElementById('btn_culturales');
    const btnDeportivos = document.getElementById('btn_deportivos');
    const btnArtistico = document.getElementById('btn_artistico');
    const btnInterpersonales = document.getElementById('btn_interpersonales');
    const btnTecnologicos = document.getElementById('btn_tecnologicos');
    const btnPersonales = document.getElementById('btn_personales');
    const buscador = document.getElementById('buscador');
    const filtrosSubcategorias = document.getElementById('filtros-subcategorias');
    const tarjetasTalleres = document.querySelectorAll('.grid > div');
    const checkboxesSub = document.querySelectorAll('.subcategoria-checkbox');
    const checkboxesTodos = document.querySelectorAll('.subcategoria-todas');
    
    // Nuevos elementos para efectos
    const botonesVerMas = document.querySelectorAll('.tarjeta-taller button.text-blue-600');
    const botonesFavoritos = document.querySelectorAll('.tarjeta-taller button.text-red-500');
    const imagenesCards = document.querySelectorAll('.tarjeta-taller img');

    // 2. Variables de estado
    let categoriaActual = '';

    // 3. Efectos Hover para tarjetas
    function aplicarEfectoHover(event) {
        const tarjeta = event.currentTarget;
        tarjeta.style.transform = "scale(1.05)";
        tarjeta.style.transition = "transform 0.3s ease";
        tarjeta.style.zIndex = "10";
        tarjeta.classList.remove('border-gray-200');
        tarjeta.classList.add('border-blue-500', 'shadow-lg');
    }

    function quitarEfectoHover(event) {
        const tarjeta = event.currentTarget;
        tarjeta.style.transform = "scale(1)";
        tarjeta.style.zIndex = "";
        tarjeta.classList.remove('border-blue-500', 'shadow-lg');
        tarjeta.classList.add('border-gray-200');
    }

    // 4. Configurar eventos hover
    tarjetasTalleres.forEach(tarjeta => {
        tarjeta.style.transition = "all 0.3s ease";
        tarjeta.addEventListener('mouseenter', aplicarEfectoHover);
        tarjeta.addEventListener('mouseleave', quitarEfectoHover);
    });

    // NUEVOS EFECTOS

    // Efecto 1: Animación para botones "Ver más"
    function aplicarEfectoBoton(event) {
        const boton = event.currentTarget;
        boton.classList.remove('text-blue-600', 'font-semibold');
        boton.classList.add('text-white', 'bg-blue-600', 'rounded-full', 'px-4', 'py-1', 'shadow-md');
    }

    function quitarEfectoBoton(event) {
        const boton = event.currentTarget;
        boton.classList.add('text-blue-600', 'font-semibold');
        boton.classList.remove('text-white', 'bg-blue-600', 'rounded-full', 'px-4', 'py-1', 'shadow-md');
    }

    botonesVerMas.forEach(boton => {
        boton.addEventListener('mouseenter', aplicarEfectoBoton);
        boton.addEventListener('mouseleave', quitarEfectoBoton);
    });

    // Efecto 2: Animación para botones de favoritos (corazón)
    function aplicarEfectoFavorito(event) {
        const boton = event.currentTarget;
        boton.classList.remove('text-2xl');
        boton.classList.add('text-3xl', 'transform', 'rotate-12');
        boton.style.transition = "all 0.3s ease";
    }

    function quitarEfectoFavorito(event) {
        const boton = event.currentTarget;
        boton.classList.add('text-2xl');
        boton.classList.remove('text-3xl', 'transform', 'rotate-12');
    }

    botonesFavoritos.forEach(boton => {
        boton.addEventListener('mouseenter', aplicarEfectoFavorito);
        boton.addEventListener('mouseleave', quitarEfectoFavorito);
    });

    // Efecto 3: Animación para imágenes de las tarjetas
    function aplicarEfectoImagen(event) {
        const imagen = event.currentTarget;
        imagen.classList.add('grayscale-0', 'brightness-110');
        imagen.classList.remove('grayscale');
        imagen.style.transition = "all 0.4s ease";
        // Agregar efecto de borde
        imagen.classList.add('ring-4', 'ring-blue-300');
    }

    function quitarEfectoImagen(event) {
        const imagen = event.currentTarget;
        imagen.classList.remove('grayscale-0', 'brightness-110');
        imagen.classList.add('grayscale');
        // Quitar efecto de borde
        imagen.classList.remove('ring-4', 'ring-blue-300');
    }

    imagenesCards.forEach(imagen => {
        // Añadimos la clase grayscale inicialmente
        imagen.classList.add('grayscale');
        imagen.addEventListener('mouseenter', aplicarEfectoImagen);
        imagen.addEventListener('mouseleave', quitarEfectoImagen);
    });

    // 5. Funciones para filtrado
    function mostrarSubcategorias(categoria) {
        document.querySelectorAll('#filtros-subcategorias > div').forEach(div => {
            div.classList.add('hidden');
        });
        const subcategoriaDiv = document.getElementById(`sub${categoria}`);
        if (subcategoriaDiv) subcategoriaDiv.classList.remove('hidden');
        filtrosSubcategorias.classList.remove('hidden');
    }

    function setActiveButton(activeBtn) {
        [btnCulturales, btnDeportivos, btnArtistico, btnInterpersonales, btnTecnologicos, btnPersonales].forEach(btn => {
            btn.classList.remove('active');
        });
        if (activeBtn) {
            activeBtn.classList.add('active');
            categoriaActual = activeBtn.id.replace('btn_', '');
            mostrarSubcategorias(categoriaActual);
        } else {
            categoriaActual = '';
            document.querySelectorAll('#filtros-subcategorias > div').forEach(div => {
                div.classList.remove('hidden');
            });
        }
    }

    function filtrarPorCategoria(categoria) {
        if (categoria) {
            tarjetasTalleres.forEach(tarjeta => {
                tarjeta.style.display = tarjeta.classList.contains(categoria) ? 'block' : 'none';
            });
            checkboxesSub.forEach(checkbox => checkbox.checked = false);
            checkboxesTodos.forEach(checkbox => {
                checkbox.checked = (checkbox.dataset.categoria === categoria);
            });
        } else {
            tarjetasTalleres.forEach(tarjeta => tarjeta.style.display = 'block');
            checkboxesSub.forEach(checkbox => checkbox.checked = false);
            checkboxesTodos.forEach(checkbox => checkbox.checked = false);
        }
    }

    function filtrarPorSubcategorias() {
        const subcategoriasSeleccionadas = [];
        const categoriasSeleccionadas = new Set();
        
        document.querySelectorAll('.subcategoria-checkbox:checked').forEach(checkbox => {
            subcategoriasSeleccionadas.push(checkbox.value);
            categoriasSeleccionadas.add(checkbox.dataset.categoria);
        });

        if (subcategoriasSeleccionadas.length === 0) {
            if (categoriaActual) filtrarPorCategoria(categoriaActual);
            return;
        }

        tarjetasTalleres.forEach(tarjeta => {
            tarjeta.style.display = 'none';
            
            if (categoriasSeleccionadas.size > 1) {
                let mostrar = true;
                categoriasSeleccionadas.forEach(cat => {
                    if (!tarjeta.classList.contains(cat)) mostrar = false;
                });
                if (mostrar && subcategoriasSeleccionadas.some(sub => tarjeta.classList.contains(sub))) {
                    tarjeta.style.display = 'block';
                }
            } else {
                subcategoriasSeleccionadas.forEach(sub => {
                    if (tarjeta.classList.contains(sub)) tarjeta.style.display = 'block';
                });
            }
        });
    }

    function buscarPorNombre() {
        const textoBusqueda = buscador.value.toLowerCase().trim();
        
        if (textoBusqueda === '') {
            filtrarPorSubcategorias();
            return;
        }

        tarjetasTalleres.forEach(tarjeta => {
            const nombre = tarjeta.querySelector('.nombre-taller').textContent.toLowerCase();
            const coincideNombre = nombre.includes(textoBusqueda);
            
            let visiblePorFiltros = false;
            const subcategoriasSeleccionadas = Array.from(document.querySelectorAll('.subcategoria-checkbox:checked')).map(cb => cb.value);
            
            if (subcategoriasSeleccionadas.length > 0) {
                visiblePorFiltros = subcategoriasSeleccionadas.some(sub => tarjeta.classList.contains(sub));
            } else if (categoriaActual) {
                visiblePorFiltros = tarjeta.classList.contains(categoriaActual);
            } else {
                visiblePorFiltros = true;
            }

            tarjeta.style.display = (coincideNombre && visiblePorFiltros) ? 'block' : 'none';
        });
    }

    function seleccionarTodos(categoria) {
        document.querySelectorAll(`.subcategoria-checkbox[data-categoria="${categoria}"]`).forEach(checkbox => {
            checkbox.checked = false;
        });
        if (categoriaActual) filtrarPorCategoria(categoria);
    }

    // 6. Event Listeners
    btnCulturales.addEventListener('click', () => {
        filtrarPorCategoria('culturales');
        setActiveButton(btnCulturales);
    });
    btnDeportivos.addEventListener('click', () => {
        filtrarPorCategoria('deportivos');
        setActiveButton(btnDeportivos);
    });
    btnArtistico.addEventListener('click', () => {
        filtrarPorCategoria('artistico');
        setActiveButton(btnArtistico);
    });
    btnInterpersonales.addEventListener('click', () => {
        filtrarPorCategoria('interpersonales');
        setActiveButton(btnInterpersonales);
    });
    btnTecnologicos.addEventListener('click', () => {
        filtrarPorCategoria('tecnologicos');
        setActiveButton(btnTecnologicos);
    });
    btnPersonales.addEventListener('click', () => {
        filtrarPorCategoria('personales');
        setActiveButton(btnPersonales);
    });

    buscador.addEventListener('input', buscarPorNombre);

    checkboxesSub.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            document.querySelector(`.subcategoria-todas[data-categoria="${this.dataset.categoria}"]`).checked = false;
            filtrarPorSubcategorias();
        });
    });

    checkboxesTodos.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            if (this.checked) seleccionarTodos(this.dataset.categoria);
        });
    });

    // 7. Inicialización
    function inicializarPagina() {
        tarjetasTalleres.forEach(tarjeta => tarjeta.style.display = 'block');
        setActiveButton(null);
        checkboxesSub.forEach(checkbox => checkbox.checked = false);
        checkboxesTodos.forEach(checkbox => checkbox.checked = false);
        document.querySelectorAll('#filtros-subcategorias > div').forEach(div => {
            div.classList.remove('hidden');
        });
        filtrosSubcategorias.classList.remove('hidden');
    }

    inicializarPagina();
});