function loadVideo() {
    let videoContainer = document.querySelector(".video-container");
    videoContainer.innerHTML = `
        <iframe 
            width="360" 
            height="640" 
            src="https://www.youtube.com/embed/KcNNKXFywdQ?autoplay=1" 
            title="Como usar o site Contador de Playlist Fênix" 
            frameborder="0" 
            allowfullscreen>
        </iframe>`;
}
