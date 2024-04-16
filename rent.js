let openBtn = document.getElementById('open-btn');
let modalContainer = document.getElementById('modal-container');
openBtn.addEventListener('click', function(){

    modalContainer.style.display = 'block';
});
window.addEventListener('click', function(e) {

    if (e.target === modalContainer) {
        modalContainer.style.display = 'none';
    }
});