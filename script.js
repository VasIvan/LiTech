/*Numbers animation*/
function animateValue(id, start, end, duration) {
    var increment = Math.round((end - start)/18);
    var timer = setInterval(function() {
        start += (end - start < increment? end - start : increment);
        document.getElementById(id).innerHTML = start;
        if (start == end) {
            clearInterval(timer);
        }
    }, duration);
}

animateValue("value", 0, 3000, 100);
animateValue("value2", 0, 180, 100);
animateValue("value3", 0, 10000, 100);

/*RSS FEED*/
jQuery(function($) {
    $("#rss-feeds").rss("https://www.lianatech.com/resources/blog.rss",
    {
      limit: 3,
      entryTemplate:'<div class="rss-list"><a href="{url}"><h5>{date}</h5><p>{shortBodyPlain}</p></a></div>'
    })
  })

  /*Subscribe*/
function resize() {
    if ($(window).width() < 575) {
     $('#sub-btn').addClass('btn-block');
     $('#btn-search').addClass('btn-block');
    }
    else {
        $('#sub-btn').removeClass('btn-block');
        $('#btn-search').removeClass('btn-block');
    }
}

$(document).ready( function() {
    $(window).resize(resize);
    resize();

});