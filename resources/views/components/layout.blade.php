 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Creative Coder MM</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
   <link
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
     crossorigin="anonymous" />
   <script src="https://cdn.tailwindcss.com"></script>
 </head>



 <body style=" font-family: 'Montserrat'; " id=" home">


   <x-navbar />

   {{$slot}}
   <div id="app"></div>

   <x-footer />

   <script
     src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
     crossorigin="anonymous"></script>

   <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
   <script>
     ClassicEditor
       .create(document.querySelector('.editor'))
       .catch(error => {
         console.error(error);
       });
   </script>

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



 </body>

 </html>