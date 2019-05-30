var modalForm = document.getElementById('modalForm');
var overlay = document.getElementById('overlay');
var modalClose = document.getElementById('modalClose');
var modalImage = document.getElementById('modalImage');
var image = document.getElementsByClassName('image');

document.body.addEventListener('click', function(event) {
    if(event.target.classList.contains('image')) {
        modalImage.src = event.target.src;
        modalForm.style.display = 'block';
        overlay.style.display = 'block';
    }
});

modalClose.onclick = function() {
    modalForm.style.display = 'none';
    overlay.style.display = 'none';
};