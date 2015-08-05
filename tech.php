<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <title>Yahoo News</title>
    <meta name="description" content="Yahoo News">
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="lib/jquery-1.11.3.js"></script>
    <script src="js/scripts.js"></script>
  </head>
  <body>
    <div class="container">
      <nav>
          <ul id="tabs">
            <li><a href="index.php">Sports</a></li>
            <li><a href="enter.php">Entertainment</a></li>
            <li><a href="tech.php">Tech</a></li>
          </ul>
      </nav>
      <button type="button" id="techRefresh" onclick=refresher('http://news.yahoo.com/rss/tech')>Refresh</button>
      <ul id="myUl"></ul>
      <script type="text/javascript">
        myFunction('http://news.yahoo.com/rss/tech');
      </script>
    </div>
  </body>
</html>
