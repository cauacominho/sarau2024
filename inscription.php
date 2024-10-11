<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CONFIG - CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FONT-AWESOME CONFIG - ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MATERIALS GOOGLE CONFIG - ICONS -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- CSS CONFIG  -->
    <link rel="stylesheet" href="./src/css/global.css">

    <title>Formulário de inscrição - Sarau 2024</title>

</head>

<body class="body">

    <div class="container d-flex flex-column justify-content-start text-primary">
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-6 col-lg-4">
                <h2 class="mb-4 text-primary">Formulário de Apresentação - Sarau 2024</h2>
                <form action="./src/backend/control-new-inscription.php" method="post">

                    <div class="form-check form-switch mb-3" style="font-size: 18px;">
                        <input class="form-check-input" type="checkbox" role="switch" id="apresentacaoGrupo" name="apresentacaoGrupo" value="sim">
                        <label class="form-check-label" for="apresentacaoGrupo">Apresentação em grupo</label>
                    </div>

                    <div class="mb-3 d-none" id="apresentacaoGrupal">
                        <h5 class="mb-3">Nome e série dos participantes</h5>

                        <div id="tags-container-grupal" class="tags-container"></div>
                        <input name="controlNameConvidadosGrupal" id="controlNameConvidadosGrupal" class="form-default" placeholder="Digite nomes e série">
                        <div class="text-white-50 mb-3">Adicione a vírgula para separar: pedro, mariana,...</div>

                        <h5>Dados do representante</h5>
                    </div>

                    <div class="d-block" id="apresentacaoSolo">
                        <div class="mb-3">
                            <input type="text" name="controlNome" id="controlNome" placeholder="Nome completo" class="form-default">
                        </div>
                        <div class="mb-3">
                            <select name="controlCurso" id="controlCurso" class="select-default">
                                <option value="" disabled selected>Selecionar Curso</option>
                                <option value="adm">Administração</option>
                                <option value="cont">Contabilidade</option>
                                <option value="info">Informática</option>
                                <option value="seg">Segurança do trabalho</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <select name="controlSerie" id="controlSerie" class="select-default">
                                <option value="" disabled selected>Selecionar Turma</option>
                                <option value="1a">1° - A</option>
                                <option value="1b">1° - B</option>
                                <option value="1c">1° - C</option>
                                <option value="2a">2° - A</option>
                                <option value="2b">2° - B</option>
                                <option value="2c">2° - C</option>
                                <option value="3a">3° - A</option>
                                <option value="3b">3° - B</option>
                                <option value="3c">3° - C</option>
                                <option value="4a">4° - A</option>
                                <option value="4b">4° - B</option>
                                <option value="4c">4° - C</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <input type="tel" name="controlTelefone" id="controlTelefone" placeholder="Telefone" class="form-default">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="convidados">Apresentação de convidados?</label>
                        <div class="form-check mb-3" style="font-size: 18px;">
                            <input class="form-check-input" type="radio" id="convidadoSim" name="convidados" value="sim">
                            <label class="form-check-label" for="convidadoSim">Sim</label>
                        </div>
                        <div class="form-check mb-3" style="font-size: 18px;">
                            <input class="form-check-input" type="radio" id="convidadoNao" name="convidados" value="não" checked>
                            <label class="form-check-label" for="convidadoNao">Não</label>
                        </div>
                    </div>

                    <div class="mb-3 d-none" id="convidados-container">
                        <div id="tags-container-convidados" class="tags-container"></div>
                        <input name="controlNameConvidados" id="controlNameConvidados" class="form-default" placeholder="Digite nomes e separe por vírgulas">
                        <div class="text-white-50">Adicione a vírgula para separar: pedro, mariana,...</div>
                    </div>

                    <div class="mb-3">
                        <textarea name="controlDetails" id="controlDetails" rows="4" class="form-textarea" placeholder="Detalhes da apresentação"></textarea>
                    </div>

                    <div class="mb-3">
                        <input type="text" name="controlMusica" id="controlMusica" placeholder="Link da música" class="form-default">
                    </div>

                    <div class="d-grid gap-2 text-center mb-5">
                        <input type="submit" class="btn btn-default-line"></input>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="./src/js/cellular-adjustment.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        const textareaGrupal = document.getElementById("controlNameConvidadosGrupal");
        const tagsContainerGrupal = document.getElementById("tags-container-grupal");
        const convidadosTextarea = document.getElementById("controlNameConvidados");
        const tagsContainerConvidados = document.getElementById("tags-container-convidados");

        // Array para armazenar os participantes do grupo
        let participantesGrupal = [];

        // Adicionar participantes do grupo
        textareaGrupal.addEventListener("input", function() {
            const inputText = this.value;
            const words = inputText.split(",");

            // Limpar o container de tags
            tagsContainerGrupal.innerHTML = "";

            // Criar tags e adicionar ao array
            participantesGrupal = [];
            words.forEach(word => {
                word = word.trim();
                if (word) {
                    participantesGrupal.push(word);
                    const tag = document.createElement("div");
                    tag.className = "tag";
                    tag.innerHTML = `<span>${word}</span><span class="remove-tag" onclick="removeTag(this, 'grupal')">x</span>`;
                    tagsContainerGrupal.appendChild(tag);
                }
            });
        });

        function removeTag(element, tipo) {
            const tag = element.parentElement;
            const tagText = tag.querySelector("span").innerText;

            if (tipo === 'grupal') {
                // Remover do array de participantes grupais
                participantesGrupal = participantesGrupal.filter(participante => participante !== tagText);
                const updatedText = participantesGrupal.join(", ");
                textareaGrupal.value = updatedText;

                // Remover a tag do container
                tagsContainerGrupal.removeChild(tag);
            } else {
                // Remover do array de convidados
                participantesConvidados = participantesConvidados.filter(convidado => convidado !== tagText);
                const updatedText = participantesConvidados.join(", ");
                convidadosTextarea.value = updatedText;

                // Remover a tag do container
                tagsContainerConvidados.removeChild(tag);
            }
        }

        // Array para armazenar os convidados
        let participantesConvidados = [];

        // Adicionar convidados
        convidadosTextarea.addEventListener("input", function() {
            const inputText = this.value;
            const words = inputText.split(",");

            // Limpar o container de tags
            tagsContainerConvidados.innerHTML = "";

            // Criar tags e adicionar ao array
            participantesConvidados = [];
            words.forEach(word => {
                word = word.trim();
                if (word) {
                    participantesConvidados.push(word);
                    const tag = document.createElement("div");
                    tag.className = "tag";
                    tag.innerHTML = `<span>${word}</span><span class="remove-tag" onclick="removeTag(this, 'convidados')">x</span>`;
                    tagsContainerConvidados.appendChild(tag);
                }
            });
        });

        // Mostrar/ocultar a seção de convidados
        const convidadosContainer = document.getElementById("convidados-container");
        const convidadoSim = document.getElementById("convidadoSim");
        const convidadoNao = document.getElementById("convidadoNao");

        convidadoSim.addEventListener("change", () => {
            convidadosContainer.classList.remove("d-none");
        });

        convidadoNao.addEventListener("change", () => {
            convidadosContainer.classList.add("d-none");
        });

        // Exibir/habilitar a seção de apresentação grupal
        const apresentacaoGrupoCheckbox = document.getElementById("apresentacaoGrupo");
        const apresentacaoGrupalDiv = document.getElementById("apresentacaoGrupal");

        apresentacaoGrupoCheckbox.addEventListener("change", () => {
            if (apresentacaoGrupoCheckbox.checked) {
                apresentacaoGrupalDiv.classList.remove("d-none");
            } else {
                apresentacaoGrupalDiv.classList.add("d-none");
            }
        });
    </script>
</body>

</html>