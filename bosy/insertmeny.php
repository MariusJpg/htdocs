<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


header {
  background-color: #003399;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}


nav {
  float: left;
  width: 30%;
  height: 1000px; 
  background: #d9d9d9;
  padding: 20px;
}


nav ul {
  list-style-type: none;
  padding: 3;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #ffffff;
  height: 300px; 
}


section::after {
  content: "";
  display: table;
  clear: both;
}


footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}


@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>




<header>
  <h2>INSERT Meny</h2>
</header>

<section>
  <nav>
    <ul>
    <h2><a href="formbusy.php">Insert Person</a></h2>  
    <h2><a href="selectdata.php">Insert Firma</a></h2>  
    </ul>
  </nav>
  
  <article>
    <h1></h1>
    <p> </p>
    
  </article>
</section>

<footer>
  <p></p>
</footer>

</body>
</html>
