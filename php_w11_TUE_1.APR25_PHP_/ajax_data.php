<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button class="btn" id="submit">submit</button>
   <script>
       document.getElementById("submit").addEventListener('click',function()
       {
          fetch("fetchdata.php")
          .then(function(response)
          {
           return response.json();
          })
          .then(function(data)
          {
          console.log(data)
          })
       })
   </script>

</body>
</html>