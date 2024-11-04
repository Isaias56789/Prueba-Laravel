<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=PACIFICO&display=swap" rel="stylesheet">
<style>
  @font-face {
      font-family: 'SixtyfourConvergence';
      src: url("./Fuentes/SixtyfourConvergence-Regular.ttf") format("truetype");
      font-weight: normal; /* Asegúrate de especificar el peso */
      font-style: normal; /* O italic si es necesario */
  }

  .titulo { 
      font-family: 'SixtyfourConvergence', sans-serif; 
      font-weight: normal; /* O puedes usar bold si es necesario */
  }

  .contenido { 
      font-family: 'SixtyfourConvergence', sans-serif; 
  }
</style>
</head>
<body>
  <header>Cabecera, no cambia</header>
  
       {{$slot}}     <!-- con esto se especifica lo que cambiará -->
 
  <footer>Pié de página, no cambia</footer> 
</body>
</html>
