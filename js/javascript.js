function ponercomentario() {
    var comentarioTextarea = document.getElementById("comentario");
    var noticiaSpan = document.getElementById("noticia2");
    var comentario = comentarioTextarea.value.trim();

    if (comentario) {
        noticiaSpan.textContent = comentario;
        comentarioTextarea.value = "";
    } else {
        alert("Por favor, ingrese un comentario.");
    }
}
function volveranoticia() {
    var noticiaOriginal = "Este fin de semana continúa la 'Noche de Tributos' con un homenaje a Alejandro Sanz Este sábado, 25 de mayo, continúa la “Noche de Tributos” con diversos homenajes a grandes artistas del panorama musical nacional e internacional. Será el turno de Fran Valenzuela y su homenaje a Alejandro Sanz, destacado artista español con innumerables números 1 en su discografía.";
    document.getElementById('noticia2').innerText = noticiaOriginal;
}
  