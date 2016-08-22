(function() {
  var v = document.getElementsByClassName("video");
  for (var n = 0; n < v.length; n++) {
    var p = document.createElement("div");
    p.innerHTML = labnolThumb(v[n].dataset.id);
    p.onclick = labnolIframe;
    v[n].appendChild(p);
  }
})();
 
function labnolThumb(id) {
  return '<img class="video-thumb" src="//i.ytimg.com/vi/' + id + '/maxresdefault.jpg"><div class="video-overlay"></div><i class="video-play fa fa-play-circle-o" aria-hidden="true"></i>';
}
 
function labnolIframe() {
  var iframe = document.createElement("iframe");
  iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=1&showinfo=0");
  iframe.setAttribute("frameborder", "0");
  this.parentNode.replaceChild(iframe, this);
}