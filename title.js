style_title();
window.addEventListener('resize', style_title);

function style_title() {
  var parent = document.getElementById('content');
  var title = document.getElementById('title');
  
  title.style.width = parent.clientWidth + 'px';

  var parent_x = parent.getBoundingClientRect().x;
  
  var parent_center = parent_x + (parent.clientWidth / 2);
  var position = parent_center - (title.clientWidth / 2);
  
  title.style.left = position + 'px';
}
