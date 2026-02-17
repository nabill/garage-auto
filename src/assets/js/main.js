// Garage Auto - Main JS
document.addEventListener('DOMContentLoaded', function() {
    // Dynamic brand -> model select
    const brandSelect = document.getElementById('brand_id');
    const modelSelect = document.getElementById('model_id');

    if (brandSelect && modelSelect) {
        brandSelect.addEventListener('change', function() {
            const brandId = this.value;
            modelSelect.innerHTML = '<option value="">-- Choisir un modèle --</option>';
            modelSelect.disabled = true;

            if (!brandId) return;

            fetch('/api/models.php?brand_id=' + brandId)
                .then(r => r.json())
                .then(models => {
                    models.forEach(m => {
                        const opt = document.createElement('option');
                        opt.value = m.id;
                        opt.textContent = m.nom;
                        modelSelect.appendChild(opt);
                    });
                    modelSelect.disabled = false;
                });
        });
    }

    // Disable closed days on date input
    const dateInput = document.getElementById('date_rdv');
    if (dateInput) {
        // Set min date to tomorrow
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        dateInput.min = tomorrow.toISOString().split('T')[0];

        let closedDays = [];
        let weeklyClosures = [];

        fetch('/api/closed-days.php')
            .then(r => r.json())
            .then(data => {
                closedDays = data.closed_days || [];
                weeklyClosures = data.weekly_closures || [];
            });

        dateInput.addEventListener('change', function() {
            const val = this.value;
            if (!val) return;

            const date = new Date(val + 'T00:00:00');
            const dow = date.getDay();

            if (weeklyClosures.includes(dow)) {
                alert('Ce jour est un jour de fermeture hebdomadaire. Veuillez choisir un autre jour.');
                this.value = '';
                return;
            }

            if (closedDays.includes(val)) {
                alert('Ce jour est un jour de fermeture exceptionnel. Veuillez choisir un autre jour.');
                this.value = '';
                return;
            }
        });
    }
});
