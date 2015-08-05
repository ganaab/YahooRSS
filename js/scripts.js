function myFunction(url) {
  $.ajax({
    url      : 'http://ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(url),
    dataType : 'json',
    success  : function (data) {
      if (data.responseData.feed && data.responseData.feed.entries) {
        $.each(data.responseData.feed.entries, function (i, e) {
          document.getElementById("myUl").innerHTML += '<li><a href="'+e.link+'">'+e.title+'</a></li>';

        });
      }
    }
  });
}
function refresher(url){
  $("#myUl").empty()
  myFunction(url);
}
