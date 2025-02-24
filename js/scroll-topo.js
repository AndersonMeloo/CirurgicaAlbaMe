let lastScrollTop = 0; // Variável para armazenar a posição do Scroll
const topo = document.querySelector('.topo'); 

window.addEventListener('scroll', () => {

    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if(currentScroll > lastScrollTop) {
        // Rolando para baixo
        topo.style.top = '-60px'; // Esconde o cabeçalho
    } else {
        // Rolando para cima
        topo.style = "0"; // Mostra o cabeçalho
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; //  Impede que a rolagem se mova para cima quando estiver no topo
});