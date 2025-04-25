
function abrirPopup() {
    document.getElementById("popupHistorico").style.display = "flex";
    document.body.style.overflow = "hidden";

    fetch('../scripts/pegarHistorico.php')
        .then(res => res.text())
        .then(html => {
            document.getElementById("dadosHistorico").innerHTML = html;
        });
}

function fecharPopup() {
    document.getElementById("popupHistorico").style.display = "none";
    document.body.style.overflow = "";
}


document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("deposit-form");
    const btn = document.getElementById("submit-btn");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        Swal.fire({
            title: 'Enviando...',
            text: 'Aguarde um momento',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso!',
                    text: 'Dados enviados com sucesso!',
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = '../index.php';
                });
            })
            .catch(err => {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: 'Algo deu errado. Tente novamente.'
                });
            });
    });
});
