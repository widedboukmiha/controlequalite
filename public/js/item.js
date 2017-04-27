function include(file)
{

  var script  = document.createElement('script');
  script.src  = file;
  script.type = 'text/javascript';
  script.defer = true;

 // document.getElementsByTagName('head').item(0).appendChild(script);

}

/* include any js files here */
include('js/vue.js');
include('js/controlleur.js');