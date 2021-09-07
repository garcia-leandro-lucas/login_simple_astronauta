// function centrarDiv() {
//   var wHeight = 0;
//   var wWidth = 0;
//   var dHeight = 0;
//   var dWidth = 0;
// 
//   if (typeof(window.innerWidth) == 'number') {
//     // Navegadores NO Internet Explorer
//     wWidth = window.innerWidth;
//     wHeight = window.innerHeight;
//   }else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
//     // Navegadores Internet Explorer desde la versión 6.0 en modo de compilación estándar
//     wWidth = document.documentElement.clientWidth;
//     wHeight = document.documentElement.clientHeight;
//   } else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
//     // Navegadores Internet Explorer 4
//     wWidth = document.body.clientWidth;
//     wHeight = document.body.clientHeight;
//   }
// 
//   var central = document.getElementById('central');
//   dHeight = central.offsetHeight;
//   dWidth = central.offsetWidth;
// 
//   var top = (wHeight - dHeight) / 2;
//   var left = (wWidth - dWidth) / 2;
// 
//   if (top < 0) {
//     top = 0;
//   }
//   if (left < 0) {
//     left = 0;
//   }
// 
//   central.style.top = top + 'px';
//   central.style.left = left + 'px';
// }
