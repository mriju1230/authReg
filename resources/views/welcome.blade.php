<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Profile</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f3f6fc;
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
    }
    .navbar {
      background: linear-gradient(135deg, #6fb1fc, #4364f7, #0052d4);
    }
    .navbar-brand, .nav-link {
      color: #fff !important;
      font-weight: 600;
    }
    .profile-card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      max-width: 800px;
      margin: 40px auto;
      overflow: hidden;
    }
    .profile-header {
      background: linear-gradient(135deg, #4364f7, #0052d4);
      padding: 40px 20px;
      text-align: center;
      color: #fff;
    }
    .profile-photo {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 4px solid #fff;
      object-fit: cover;
      margin-top: -60px;
      background: #fff;
    }
    .info-section {
      padding: 25px 35px;
    }
    .info-section h5 {
      font-weight: 600;
      color: #0052d4;
      border-bottom: 2px solid #e0e0e0;
      padding-bottom: 8px;
      margin-bottom: 20px;
    }
    .info-item {
      margin-bottom: 12px;
    }
    .info-item label {
      font-weight: 500;
      color: #333;
    }
    .logout-btn {
      background-color: #e74c3c;
      border: none;
      color: #fff;
      padding: 8px 18px;
      border-radius: 25px;
      transition: 0.3s;
    }
    .logout-btn:hover {
      background-color: #c0392b;
    }
  </style>
</head>
<body>
  

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
