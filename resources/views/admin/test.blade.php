<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sidebar with Right Dropdown</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #f8f9fa;
      padding: 20px;
      position: fixed;
    }

    .nav-link {
      color: #333;
      font-size: 12px;
      padding: 8px 12px;
      display: block;
      position: relative;
    }

    .nav-link:hover {
      background-color: #e9ecef;
      border-radius: 4px;
    }

    .dropdown-toggle::after {
      float: right;
      margin-top: 4px;
    }

    .nav-item.dropdown {
      position: relative;
    }

    .submenu-right {
      display: none;
      position: absolute;
      top: 0;
      left: 100%;
      background-color: white;
      min-width: 180px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
      z-index: 1000;
      border-radius: 8px;
      padding: 10px 0;
    }

    .nav-item.dropdown:hover .submenu-right {
      display: block;
    }

    .submenu-right a {
      padding: 8px 16px;
      display: block;
      font-size: 12px;
      color: #333;
      text-decoration: none;
    }

    .submenu-right a:hover {
      background-color: #f0f0f0;
    }

    .logo img {
      width: 100px;
    }
  </style>
</head>
<body>

<div class="sidebar">
  <div class="logo text-center mb-4">
    <img src="https://via.placeholder.com/100x40?text=Logo" alt="Logo">
  </div>
  <nav class="nav flex-column">
    <a href="#" class="fs-12 nav-link">Dashboard</a>

    <!-- Dropdown Master Data -->
    <div class="nav-item dropdown">
      <a href="#" class="fs-12 nav-link dropdown-toggle">Master Data</a>
      <div class="submenu-right">
        <a href="#">Fasilitas</a>
        <a href="#">Gedung</a>
        <a href="#">Lantai</a>
        <a href="#">Ruangan</a>
        <a href="#">Add Services</a>
        <a href="#">OverTime</a>
        <a href="#">Billing</a>
        <a href="#">Penalti</a>
        <a href="#">Denda</a>
        <a href="#">Standmeter</a>
        <a href="#">Rekening</a>
        <a href="#">Pajak</a>
        <a href="#">Materai</a>
      </div>
    </div>

    <a href="#" class="fs-12 nav-link">Pengguna</a>
    <a href="#" class="fs-12 nav-link">Tenant</a>
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

</body>
</html>
