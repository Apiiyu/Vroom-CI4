<!doctype html>
<html lang='en'>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vroom - Landing</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,500;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#0D0C41',
            secondary: '#4743FB',
            muted: '#9D9DBC',
          },
          fontFamily: {
            sans: ['Poppins', 'sans-serif']
          }
        }
      }
    }
  </script>
</head>
<body>
  <main id="main-content">
   <?= $this->renderSection('content') ?>
  </main>

  <?= $this->include('Components/Organisms/Footer/Index'); ?>
  <?= $this->include('Components/Atoms/Copyright/Index'); ?>
</body>
</html>