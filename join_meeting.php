<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $password1 = $_POST['password'];
    $ID = $_POST['ID'];

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" media="screen" href="meeting.css" />
</head>
<body class="body">

<form action="host_meeting.php" method="post" id="lobby__form">
  <div class="mb-3">
    <label for="Name" class="form-label">Your Name :</label>
    <input type="text" name="name" class="form-control" id="Name"/>
  </div>
  <div class="mb-3">
    <label for="ID" class="form-label">Meeting ID :</label>
    <input type="text" length="10" name="ID" class="form-control" id="ID"/>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Create Password :</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1"/>
  </div>
  <button type="submit" class="btn btn-primary" onClick="fo()">Join Room</button>
</form>

</body>

<script>
  let form = document.getElementById('lobby__form')

  let displayName = sessionStorage.getItem('display_name')
  if(displayName){
      form.name.value = displayName
  }

  function fo(e){
    e.preventDefault()
    sessionStorage.setItem('display_name', e.target.name.value)
  }
  
</script>
</html>