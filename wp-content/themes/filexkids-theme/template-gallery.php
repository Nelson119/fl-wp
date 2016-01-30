<?php /* Template Name: 相簿播放 */ ?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>SimpleViewer Gallery</title>
  <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  </style>
  <script type="text/javascript">
  var searchStr, searchStrParams, parameters, parameter, i;
  var searchStr = window.location.search.substr(1);
  var searchStrParams = searchStr.split('&');
  parameters = {};
  for (i = 0; i < searchStrParams.length; i += 1) {
    parameter = searchStrParams[i].split('=');
    parameters[parameter[0]] = decodeURIComponent(parameter[1]);
  }
  
  var svMobile = true;
  var svGalleryPath = parameters.galleryURL.substr(0, parameters.galleryURL.lastIndexOf('/') + 1);
  document.title = parameters.title;
  document.title = "undefined" ? '生活相簿' : document.title;
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/gallery/svcore/js/simpleviewer.js"></script>
  <script type="text/javascript">
  simpleviewer.ready(function () {
    simpleviewer.load('sv-container', '100%', '100%', parameters.bg, false, {galleryURL: parameters.galleryURL || 'gallery.xml'});
  });
  </script>
</head>

<body>
  <div id="sv-container"></div>  
</body>
</html>