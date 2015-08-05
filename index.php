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
    ?>
    <input id="refreshSports" type="button" name="submit" value="Refresh">
    <script type="text/javascript">
    $("#refreshSports").click(function() {
      $("#myUl").empty()
      $.ajax({
        url: 'includes/parse.php',
        method: "POST",
        data: {str: 'http://news.yahoo.com/rss/sports'},
        success: function(result) {
        console.log($.parseXML(result));
        $(result).find('item').each(function(i, e) {
          var title = $(e).find('title').text();
          var link = $(e).find('link').text();
          document.getElementById("myUl").innerHTML += '<li><a href="'+link+'">'+title+'</a></li>';
        });

      }
    });
  });
  </script>
  <?php getfeed('http://news.yahoo.com/rss/sports'); ?>

</div>
</body>
</html>
