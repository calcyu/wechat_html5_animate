String.prototype.replaceAll = function(s1,s2) { 
    return this.replace(new RegExp(s1,"gm"),s2); 
}
function trim(str){ 
  return str.replace(/(^\s*)|(\s*$)/g, "");
}
function QueryString(item){
    var sValue=location.search.match(new RegExp("[\?\&]"+item+"=([^\&]*)(\&?)","i"))
    return sValue?sValue[1]:sValue
}
function check(){
    var name = $("#recipient-name").val();
    if (name.length>24) {
        $(".alert").removeClass("hidden");
        return false;
    }
    if (name.length==0) {
        $(".alert").removeClass("hidden");
        return false;
    }
    obj=escape(name).replaceAll("%","_");
    var url = window.location.href;
    if(url){
        url=url.substring(0,url.indexOf("?"));
        url = url+"?xname="+obj;
        window.location.replace(url);
    }
    return false
}
function inputName(){
    $('#myModal').modal('show');
}

var app = (function(app, $){

  var currentScene = 1;
  var total = 3;



  function _constructor(){
    _bindEvents();
  }

  function _bindEvents(){
    $('body').swipe({
      swipe: function(event,direction) {
        if(direction == 'up') {
          slideHandle('down');
        } else if(direction == 'down') {
          slideHandle('up');
        }
      }
    });
    $('body, a, iframe').on('touchmove',function(e){
      e.stopPropagation();
      e.preventDefault();
    });
    $('a, iframe').on('mouseenter',function(e){
      e.stopPropagation();
      e.preventDefault();
    });
    $.browserSwipe({
      up: function(){
        slideHandle('up');
      },
      down: function(){
        slideHandle('down');
      }
    });
  }

  function slideHandle(direction) {
    switch(direction) {
      case 'up':
        if(currentScene > 0) {
          currentScene--;
          sceneHandle();
        }
      break;
      case 'down':
        if(currentScene < total) {
          currentScene++;
          sceneHandle();
        }
      break;
    }
  }

  function sceneHandle(){
    screen.play('s'+currentScene);
  }

  return _constructor;

})(window.app || {}, jQuery)
