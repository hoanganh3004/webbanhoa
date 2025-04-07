<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giới thiệu nhân vật</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .profile-img {
      width: 150px;
      height: auto;
      border-radius: 10px;
      border: 5px solid #fff;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
      cursor: pointer;
    }
    .profile-img:hover {
      transform: scale(1.05);
    }
    .card {
      border: none;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s ease-in-out;
    }
    .card:hover {
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
    }
    .social-link {
      font-size: 24px;
      color: #007bff;
      transition: color 0.3s ease-in-out;
    }
    .social-link:hover {
      color: #0056b3;
    }
    .parallax-bg {
      background-image: url('https://via.placeholder.com/1920x1080');
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
      padding: 100px 0;
      text-align: center;
      color: #fff;
      position: relative;
    }
    .parallax-bg:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: -1;
    }
    .parallax-bg h1 {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .parallax-bg p {
      font-size: 18px;
    }
    .overlay {
      display: none;
      position: fixed;
      z-index: 999;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.7);
    }
    .overlay img {
      display: block;
      margin: 50px auto;
      max-width: 80%;
      max-height: 80%;
    }
    .overlay p {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      color: #fff;
      font-size: 18px;
    }
  </style>
</head>

<body>
  <div class="parallax-bg">
    <div class="container">
      <h1 class="display-5 text-dark">Giới thiệu nhân vật vĩ đại</h1>
      <p class="lead text-dark">Đây là trang web nói về 1 coder quèn đến từ Hưng Yên !</p>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card text-center">
          <div class="card-body">
            <div class="profile-img-frame">
              <img src="upload/huhu.jpg" alt="Nhân vật" class="profile-img" onclick="openOverlay()">
            </div>
            <h2 class="card-title mt-3">Nguyễn Hoàng Anh</h2>
            <p class="card-text">Thông tin cá nhân:</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Ngày sinh:</strong> 30/04/2003</li>
              <li class="list-group-item"><strong>Nghề nghiệp:</strong> Coder quèn ( đụt cận trĩ )</li>
              <li class="list-group-item"><strong>Quốc tịch:</strong> Việt Nam</li>
              <li class="list-group-item"><strong>Sở thích:</strong> Đọc sách, viết văn</li>
            </ul>
            <div class="mt-3">
              <a href="https://www.facebook.com/profile.php?id=100009607244154" class="social-link mr-2"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social-link mr-2"><i class="fab fa-twitter"></i></a>
              <a href="#" class="social-link mr-2"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="overlay" onclick="closeOverlay()">
    <img src="upload/huhu.jpg" alt="">
    <p>ĐÃ ĐẸP TRAI LẠI CÒN CHƠI GAME GIỎI.</p>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <script>
    function openOverlay() {
      document.querySelector('.overlay').style.display = 'block';
    }
    function closeOverlay() {
      document.querySelector('.overlay').style.display = 'none';
    }
  </script><br><br><br>
  <!-- End Body -->
  <button type="button" onclick="quay_lai_trang_truoc()">Quay lại trang trước</button>

<script>
    function quay_lai_trang_truoc(){
        history.back();
    }
</script>
</body>
</html>
