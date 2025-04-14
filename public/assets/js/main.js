function toggleSidebar() {
    let sidebar = document.querySelector(".sidebar");
    sidebar.classList.toggle("show");
}


document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.sidebar .nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            // Hapus class active dari semua link
            navLinks.forEach(nav => nav.classList.remove('active'));

            // Tambahkan class active ke link yang diklik
            this.classList.add('active');

            // Optional: tambahkan efek "klik" seperti scale atau delay
            this.classList.add('clicked');
            setTimeout(() => {
                this.classList.remove('clicked');
            }, 200);
        });
    });
});

const modalPengguna = document.getElementById('addpengguna');

modalPengguna.addEventListener('hidden.bs.modal', function () {
    // Reset form input di dalam modal
    const form = modalPengguna.querySelector('form');
    form.reset();

    // Reset eye icon dan input type jadi password
    const passwordInput = form.querySelector('#password');
    passwordInput.setAttribute('type', 'password');
    const togglePassword = form.querySelector('#togglePassword');
    togglePassword.innerHTML = '<i class="bi bi-eye"></i>';
});