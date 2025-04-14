<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="icon" type="image/png" href="../../assets/image/icon.png">
</head>
<body>
    <!-- sidebar mobile -->
    <button class="toggle-btn" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="logo text-center">
            <img src="../../assets/image/logo.png" alt="" class="pb-4">
        </div>
        <nav class="nav flex-column">
            <a href="../admin/home.html" class="fs-12 nav-link active">Dashboard</a>

            <!-- dropdwon master data -->
            <a class="fs-12 nav-link d-flex justify-content-between align-items-center collapsed" 
            data-bs-toggle="collapse" 
            href="#masterDataMenu" 
            role="button" 
            aria-expanded="false" 
            aria-controls="masterDataMenu">
            Master Data 
            <i class="bi bi-chevron-down"></i>
         </a>
         
         <div class="collapse ps-3" id="masterDataMenu">
             <a href="../admin/fasilitas.html" class="fs-12 nav-link">Fasilitas</a>
             <a href="../admin/gedung.html" class="fs-12 nav-link">Gedung</a>
             <a href="../admin/lantai.html" class="fs-12 nav-link">Lantai</a>
             <a href="../admin/addservices.html" class="fs-12 nav-link">Add Services</a>
             <a href="../admin/overtime.html" class="fs-12 nav-link">OverTime</a>
             <a href="../admin/ruangan.html" class="fs-12 nav-link">Ruangan</a>
             <a href="../admin/billing.html" class="fs-12 nav-link">Billing</a>
             <a href="../admin/penalti.html" class="fs-12 nav-link">Penalti</a>
             <a href="../admin/denda.html" class="fs-12 nav-link">Denda</a>
             <a href="../admin/tariflistrik.html" class="fs-12 nav-link">Tarif Listrik</a>
             <a href="../admin/rekening.html" class="fs-12 nav-link">Rekening</a>
             <a href="../admin/pajak.html" class="fs-12 nav-link">Pajak</a>
             <a href="../admin/material.html" class="fs-12 nav-link">Material</a>
         </div>
         

            <a href="../admin/pengguna.html" class="fs-12 nav-link">Pengguna</a>
            <a href="../admin/tenant.html" class="fs-12 nav-link">Tenant</a>
            <a href="#" class="fs-12 nav-link">Lead Management</a>
            <a href="#" class="fs-12 nav-link">Sewa</a>
            <a href="#" class="fs-12 nav-link">Kontrak</a>
            <a href="#" class="fs-12 nav-link">Billing</a>
            <a href="#" class="fs-12 nav-link">Pembayaran</a>
            <a href="#" class="fs-12 nav-link">Overtime</a>
            <a href="#" class="fs-12 nav-link">Add Service</a>
            <a href="#" class="fs-12 nav-link">Kuesioner</a>
            <a href="#" class="fs-12 nav-link">Email Blast</a>
            <a href="#" class="fs-12 nav-link">Ticket Support</a>
        </nav>
    </div>

        <!-- main -->
        <div class="main-content p-3">
            <style>
                body { text-align: o; padding: 150px; }
                h1 { font-size: 50px; }
                body { font: 20px Helvetica, sans-serif; color: #333; }
                article { display: block; text-align: left; width: 650px; margin: 0 auto; }
                a { color: #dc8100; text-decoration: none; }
                a:hover { color: #333; text-decoration: none; }
              </style>
              
              <article>
                  <h1>We&rsquo;ll be back soon!</h1>
                  <div>
                      <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="https://www.youtube.com/@UqqyAhmad">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
                      <p>&mdash; The Team</p>
                  </div>
              </article>
         </div>

    <script src="../../assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
