$(document).ready(function() {
    let experienciaCount = 2; // Começa em 2 para o próximo ID

    $('#adicionar-experiencia').click(function() {
        let novaExperiencia = $(`
            <div class="experiencia" id="experiencia-${experienciaCount}">
                <label for="cargo-${experienciaCount}">Cargo:</label>
                <input type="text" id="cargo-${experienciaCount}" name="cargo[]" required><br><br>

                <label for="empresa-${experienciaCount}">Empresa:</label>
                <input type="text" id="empresa-${experienciaCount}" name="empresa[]" required><br><br>

                <label for="periodo-${experienciaCount}">Período:</label>
                <input type="text" id="periodo-${experienciaCount}" name="periodo[]" required><br><br>

                <label for="descricao-${experienciaCount}">Descrição:</label>
                <textarea id="descricao-${experienciaCount}" name="descricao[]" rows="3" required></textarea><br><br>
            </div>
        `);
        $('#experiencias').append(novaExperiencia);
        experienciaCount++;
    });
});