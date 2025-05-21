document.addEventListener('DOMContentLoaded', () => {
    const imageInput = document.getElementById('imageInput');
    const addImageBtn = document.getElementById('addImageBtn');
    const gallery = document.getElementById('gallery');

    // Load existing images from localStorage
    loadImages();

    addImageBtn.addEventListener('click', () => {
        const file = imageInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const imgSrc = e.target.result;
                addImageToGallery(imgSrc);
                saveImageToLocalStorage(imgSrc);
                imageInput.value = ''; // Clear input
            };
            reader.readAsDataURL(file);
        }
    });

    function addImageToGallery(src) {
        const img = document.createElement('img');
        img.src = src;
        gallery.appendChild(img);
    }

    function saveImageToLocalStorage(src) {
        let images = JSON.parse(localStorage.getItem('images')) || [];
        images.push(src);
        localStorage.setItem('images', JSON.stringify(images));
    }

    function loadImages() {
        const images = JSON.parse(localStorage.getItem('images')) || [];
        images.forEach(src => {
            addImageToGallery(src);
        });
    }
});