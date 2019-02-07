<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="jokes.css">
    <link rel="stylesheet" href="forms.css">
    <title><?=$title?></title>
  </head>
  <body>
  <nav>
    <header>
      <h1>Internet Joke Database</h1>
    </header>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="jokes.php">List</a></li>
      <li><a href="addjoke.php">Add a new Joke</a></li>
    </ul>
  </nav>

  <main>
  <?=$output?>
  <p>Who is buying me lunch?</p>
  </main>

  <footer>
  &copy; IJDB 2019
  </footer>
  </body>
</html>