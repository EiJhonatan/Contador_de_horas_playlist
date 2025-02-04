document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        const adsterraTest = document.querySelector('script[src="//disappearsurgery.com/3237619219b6abf3aca9ad55e61ef9c3/invoke.js"]');
        
        const adsContainer = document.querySelector(".ads");
        if (!adsterraTest || !adsContainer || adsContainer.innerHTML.trim() === "") {
           
            document.body.innerHTML = `
                <div class="adblock-detected">
                    <div class="adblock-icon">
                        <img src="https://cdn-icons-png.flaticon.com/512/742/742751.png" alt="Triste">
                    </div>
                    <h1>Detectamos que você está usando um bloqueador de anúncios 😢</h1>
                    <p>
                        Nossos anúncios ajudam a manter este site gratuito. Por favor, desative o AdBlock para continuar navegando.
                    </p>
                    <button onclick="location.reload()">Já desativei, recarregar página</button>
                </div>
            `;
        }
    }, 3000);
});
