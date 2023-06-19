<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/trfv2fus0c841r77ur20nkjtxl1j9aqfmc23t26kf3axvnwu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

  <style>
    body{
        background-color: red;
    }
  </style>
</head>
<body>
  <div>
    {!! $post->body !!}
  </div>

  <script>
    tinymce.init({
      selector: 'div',
      toolbar: false,
      menubar: false,
      plugins: '',
      branding: false,
      inline: true,
      readonly: true,
      content_css: false,
      setup: function(editor) {
        editor.on('init', function() {
          this.getContainer().style.visibility = 'visible';
        });
      }
    });
  </script>
</body>
</html>
