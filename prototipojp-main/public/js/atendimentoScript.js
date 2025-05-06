// Função para limpar o campo de documento ao trocar o tipo
function clearDoc(idCampo) {
    document.getElementById(idCampo).value = "";
}

// Função chamada quando muda a quantidade de hóspedes
function changeQnt() {
    const qnt = parseInt(document.getElementById("qntInput").value);

    console.log("Quantidade de hóspedes: ", qnt);
}


document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("btnConfirmar");

    btn.addEventListener("click", (e) => {
        e.preventDefault();

        // Pegando valores do formulário
        const nome = document.getElementById("nameInput").value;
        const nascimento = document.getElementById("dateInput").value;
        const fiador = document.getElementById("payInput").value;
        const contato = document.getElementById("contInput").value;

        // Enviando dados com fetch para o controller
        fetch("../../config/controller/atendimentoController.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                nome: nome,
                nascimento: nascimento,
                fiador: fiador,
                contato: contato
            })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                alert("Dados enviados com sucesso!");
            } else {
                alert("Erro ao enviar dados.");
            }
        })
        .catch(err => console.error("Erro na requisição:", err));
    });
});
