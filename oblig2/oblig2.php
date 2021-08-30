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
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}


nav {
  float: left;
  width: 30%;
  height: 300px; 
  background: #ccc;
  padding: 20px;
}


nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
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
  <h2>Marius JB</h2>
</header>

<section>
  <nav>
    <ul>
    <h2><a href="oblig2/oblig2.php">oblig2</a></h2>
    <h3><a href="../index.php">Start</a></h3>      
    </ul>
  </nav>
  
  <article>
    <h1>Marius JB</h1>
    <p>Marius Er en flink gutt, Marius er en stor gutt, Marius er en ekstremt sterk mann. </p>
    
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>
