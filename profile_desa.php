<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarwadadi, Talun, Cirebon</title>
    <style>
        /* Reset margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #333;
            line-height: 1.8;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        /* Main container styling */
        .container {
            max-width: 800px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        /* Header styling */
        .header {
            font-size: 28px;
            font-weight: bold;
            color: #2c3e50;
            border-bottom: 2px solid #2980b9;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        /* Content and link section */
        .content {
            margin-bottom: 20px;
            font-size: 16px;
            color: #555;
        }

        /* Pranala luar section */
        .pranala-judul {
            font-weight: bold;
            font-size: 18px;
            color: #2980b9;
            margin-bottom: 10px;
        }

        /* List styling */
        ul {
            padding-left: 20px;
            margin-bottom: 20px;
        }
        
        ul li {
            margin-bottom: 10px;
        }

        /* Link styling */
        a {
            color: #2980b9;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        a:hover {
            color: #1c598a;
            text-decoration: underline;
        }

        /* Sidebar styling */
        .sidebar {
            border: 1px solid #ddd;
            background-color: #f9fafc;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 14px;
        }

        .sidebar-title {
            font-weight: bold;
            font-size: 18px;
            color: #2c3e50;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .sidebar-item {
            margin: 8px 0;
            display: flex;
            justify-content: space-between;
        }

        .sidebar-item strong {
            color: #34495e;
        }

        /* Map link styling */
        .map-link {
            text-decoration: none;
            color: #2980b9;
            transition: color 0.2s ease;
        }

        .map-link:hover {
            color: #1c598a;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <!-- Header Section -->
        <div class="header">Sarwadadi, Talun, Cirebon</div>
        
        <!-- Content Section -->
        <div class="content">
            <p>Sarwadadi adalah desa di kecamatan Talun, Cirebon, Jawa Barat, Indonesia.</p>
        </div>
        
        <!-- Pranala Luar Section -->
        <div class="pranala-judul">PROFILE DESA SARWADADI</div>
        <ul>
        <img src="images/Foto0424.jpg" alt="desa" width="500">
        <p>kantor</p>

        </ul>
        
        <!-- Sidebar Section -->
        <div class="sidebar">
            <div class="sidebar-title">Sarwadadi</div>
            <div class="sidebar-item"><strong>Negara:</strong> <span>Indonesia</span></div>
            <div class="sidebar-item"><strong>Provinsi:</strong> <span>Jawa Barat</span></div>
            <div class="sidebar-item"><strong>Kabupaten:</strong> <span>Cirebon</span></div>
            <div class="sidebar-item"><strong>Kecamatan:</strong> <span>Talun</span></div>
            <div class="sidebar-item"><strong>Kode Kemendagri:</strong> <span>32.09.14.2010</span></div>
            <div class="sidebar-item"><strong>Koordinat:</strong> <a href="https://www.openstreetmap.org/?mlat=-6.786667&mlon=108.502778&zoom=12" target="_blank" class="map-link">6°47'12"S 108°30'10"E</a></div>
            
        <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Keluar</span></a>
      </li>
        </div>
    </div>
</body>
</html>
