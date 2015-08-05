<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <title>Yahoo News</title>
    <meta name="description" content="Yahoo News">
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="lib/jquery-1.11.3.js"></script>
  </head>
  <body>
    <div class="container">
      <nav>
          <ul id="tabs">
            <li><a href="index.php" id="sports">Sports</a></li>
            <li><a href="enter.php" id="enter">Entertainment</a></li>
            <li><a href="tech.php" id="tech">Tech</a></li>
          </ul>
      </nav>
      <?php
      require_once "includes/functions.php";
      // if(isset($_POST['submit'])) {
      //     refresher();
      // }
      ?>
      <form action="javascript:void(0);" method="post">
          <input type="button" name="submit" value="Refresh">
      </form>
      <script type="text/javascript">
          $("form").submit(function(){
              $.ajax('includes/functions.php', str, function(result){
                  refresher(result);
              });
              return(false);
          });
      </script>
      <?php getfeed('http://news.yahoo.com/rss/sports'); ?>

  </div>
  </body>
</html>
