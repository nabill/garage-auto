// Garage Auto - Admin JS
document.addEventListener('DOMContentLoaded', function() {
    // Image upload preview
    const imageInput = document.getElementById('image');
    if (imageInput) {
        imageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (!file) return;

            // Validate file size (2 Mo max)
            if (file.size > 2 * 1024 * 1024) {
                alert('L\'image ne doit pas dépasser 2 Mo.');
                this.value = '';
                return;
            }

            // Validate file type
            const allowed = ['image/jpeg', 'image/png', 'image/webp'];
            if (!allowed.includes(file.type)) {
                alert('Format non autorisé. Utilisez JPEG, PNG ou WebP.');
                this.value = '';
                return;
            }
        });
    }
});
