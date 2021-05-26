<!DOCTYPE hyml>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/bootstrap-icons.css" rel="stylesheet" />

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <title>WebClinic</title>
  </head>
  <body>
    
    <?= $this->renderSection('navbar') ?>
    <section id="hero" class="d-flex align-items-center">
    <?= $this->renderSection('content') ?>
     
    </section>
    <footer id="footer">
      <div class="container footer-bottom text-center">
        <div class="copyright">
          &copy; Copyright <strong><span>WebChronicles</span></strong
          >.
        </div>
      </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
