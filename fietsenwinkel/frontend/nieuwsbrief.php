<html>
<head>
<!-- Include Editor style. -->
<link href='https://cdn.jsdelivr.net/npm/froala-editor@3.0.0/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />

<!-- Include JS file. -->
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@3.0.0/js/froala_editor.pkgd.min.js'></script>

  <!-- Load CSS files. -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/froala-editor@3.0.0-beta.0/css/froala_editor.css">

  <script src="require.js"></script>
  <script>
    require.config({
      packages: [{
        name: 'froala-editor',
        main: 'js/froala_editor.min'
      }],
      paths: {
        // Change this to your server if you do not wish to use our CDN.
        'froala-editor': 'https://cdn.jsdelivr.net/npm/froala-editor@3.0.0-beta.0'
      }
    });
  </script>

  <style>
    body {
      text-align: center;
    }
    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
    .ss {
      background-color: red;
    }
  </style>
</head>

<body>
  <div id="editor">
    <div id='edit' style='margin-top:30px;'>
    </div>
  </div>

  <script>
    require([
      'froala-editor',
      'froala-editor/js/plugins/align.min'
    ], function(FroalaEditor) {
      new FroalaEditor('#edit')
    });
  </script>
</body>

</html>