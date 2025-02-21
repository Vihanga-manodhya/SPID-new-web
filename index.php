<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Southern Provincial Irrigation Department hi hi hi</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
 .bg-video {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
      
    }

    .overlay {
      background-color: rgba(0, 0, 0, 0.5);
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      
    }

    .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: rgb(0, 0, 0);
      text-align: center;
    }

    /* Container for language blocks */
    .language-container {
      display: flex;
      justify-content: flex-start;
      gap: 20px;
      margin-top: 20px;
    }

    .language-block {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
      background-color:  rgb(255, 255, 255)  ;
      padding: 30px;
      margin: 20px;
      border-radius: 110px 0px 110px 0px;
      width: 240px;
      height: 335px;
      box-shadow: 15px 10px 30px  rgba(0, 0, 0, 0.409);
      text-align: center;
      
    
    }

    .btn-language {
      font-size: 1rem;
      padding: 10px 20px;
      margin-top: 10px;
      border-radius: 25px;
      background-color: #e67e22;
      color: rgb(0, 0, 0);
      border: none;
      cursor: pointer;
    }

    .btn-language:hover {
      background-color: #d35400;
    }
  </style>
</head>
<body>

  <!-- Background Video -->
  <video class="bg-video" autoplay muted loop>
    <source src="bgv.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Overlay -->
  <div class="overlay"></div>

  <div class="container-fluid d-flex flex-column align-items-center justify-content-center content">
    <div class="logo">
      <img src="logonew.png" class="img-fluid" style="max-width: 80%;">
    </div>

    <!-- Language Selection Blocks -->
    <div class="row justify-content-center mt-4 w-100">
      <div class="col-10 col-sm-6 col-md-3 d-flex justify-content-center">
        <div class="language-block">
          <h2>Welcome</h2>
          <p>Official website of the Southern Province Irrigation Department</p>
          <button class="btn-language">English</button>
        </div>
      </div>

      <div class="col-10 col-sm-6 col-md-4 d-flex justify-content-center">
        <div class="language-block">
          <h2>ආයූබෝවන්</h2>
          <p>Official website of the Southern Province Irrigation Department</p>
          <button class="btn-language">සිංහල</button>
        </div>
      </div>

      <div class="col-10 col-sm-6 col-md-4 d-flex justify-content-center">
        <div class="language-block">
          <h2>தொருன</h2>
          <p>Southern Province Irrigation Department-இன் அதிகாரப்பூர்வ இணையதளம்</p>
          <button class="btn-language">தமிழ்</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
