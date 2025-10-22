const select = document.getElementById('miSelect');
const campoOtros = document.getElementById('campoOtros');

select.addEventListener('change', function() {
  if (this.value === 'otros') {
    campoOtros.style.display = 'inline'; // Muestra el campo de texto
  } else {
    campoOtros.style.display = 'none'; // Oculta el campo de texto
    campoOtros.value = ''; // Limpia el campo si se cambia la selección
  }
});