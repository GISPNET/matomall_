<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/trfv2fus0c841r77ur20nkjtxl1j9aqfmc23t26kf3axvnwu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <input type="text" name="" class="text">
        <textarea name="body"></textarea>
        <button type="submit">Salvar</button>
      </form>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      menubar: false,
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      language_url: '/js/tinymce/langs/pt_BR.js', // Caminho para o arquivo de idioma em Português
      language: 'pt_BR', // Defina o idioma para Português
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
    });
  </script>
</body>
</html>
