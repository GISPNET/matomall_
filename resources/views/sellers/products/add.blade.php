<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phoenix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../../assets/js/config.js"></script>
    <script src="https://cdn.tiny.cloud/1/trfv2fus0c841r77ur20nkjtxl1j9aqfmc23t26kf3axvnwu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="../../../vendors/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="../../../vendors/choices/choices.min.css" rel="stylesheet">
    <link href="../../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            @component('sellers.components.navbar.navbar-vertical-navbar-expand-lg')
            @endcomponent
            @component('sellers.components.navbar.navbar-top-fixed-top')
            @endcomponent
            @component('sellers.components.navbar.navbar-top-navbar-slim-fixed-top')
            @endcomponent
            @component('sellers.components.navbar.navbar-top fixed-top-navbar-expand-lg')
            @endcomponent
            @component('sellers.components.navbar.navbar-top-navbar-slim-justify-content-between')
            @endcomponent
            @component('sellers.components.navbar.navbar-top fixed-top navbar-expand-lg')
            @endcomponent
            @component('sellers.components.navbar.navbar-top-fixed-top-navbar-slim-justify-content-between navbar-expand-lg')
            @endcomponent
            <script>
                var navbarTopShape = window.config.config.phoenixNavbarTopShape;
                var navbarPosition = window.config.config.phoenixNavbarPosition;
                var body = document.querySelector('body');
                var navbarDefault = document.querySelector('#navbarDefault');
                var navbarTop = document.querySelector('#navbarTop');
                var topNavSlim = document.querySelector('#topNavSlim');
                var navbarTopSlim = document.querySelector('#navbarTopSlim');
                var navbarCombo = document.querySelector('#navbarCombo');
                var navbarComboSlim = document.querySelector('#navbarComboSlim');

                var documentElement = document.documentElement;
                var navbarVertical = document.querySelector('.navbar-vertical');

                if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                    navbarDefault.remove();
                    navbarTop.remove();
                    navbarTopSlim.remove();
                    navbarCombo.remove();
                    navbarComboSlim.remove();
                    topNavSlim.style.display = 'block';
                    navbarVertical.style.display = 'inline-block';
                    body.classList.add('nav-slim');
                } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                    navbarDefault.remove();
                    navbarVertical.remove();
                    navbarTop.remove();
                    topNavSlim.remove();
                    navbarCombo.remove();
                    navbarComboSlim.remove();
                    navbarTopSlim.removeAttribute('style');
                    body.classList.add('nav-slim');
                } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                    navbarDefault.remove();
                    //- navbarVertical.remove();
                    navbarTop.remove();
                    topNavSlim.remove();
                    navbarCombo.remove();
                    navbarTopSlim.remove();
                    navbarComboSlim.removeAttribute('style');
                    navbarVertical.removeAttribute('style');
                    body.classList.add('nav-slim');
                } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                    navbarDefault.remove();
                    topNavSlim.remove();
                    navbarVertical.remove();
                    navbarTopSlim.remove();
                    navbarCombo.remove();
                    navbarComboSlim.remove();
                    navbarTop.removeAttribute('style');
                    documentElement.classList.add('navbar-horizontal');
                } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                    topNavSlim.remove();
                    navbarTop.remove();
                    navbarTopSlim.remove();
                    navbarDefault.remove();
                    navbarComboSlim.remove();
                    navbarCombo.removeAttribute('style');
                    navbarVertical.removeAttribute('style');
                    documentElement.classList.add('navbar-combo')

                } else {
                    topNavSlim.remove();
                    navbarTop.remove();
                    navbarTopSlim.remove();
                    navbarCombo.remove();
                    navbarComboSlim.remove();
                    navbarDefault.removeAttribute('style');
                    navbarVertical.removeAttribute('style');
                }

                var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
                var navbarTop = document.querySelector('.navbar-top');
                if (navbarTopStyle === 'darker') {
                    navbarTop.classList.add('navbar-darker');
                }

                var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
                var navbarVertical = document.querySelector('.navbar-vertical');
                if (navbarVerticalStyle === 'darker') {
                    navbarVertical.classList.add('navbar-darker');
                }
            </script>
            <div class="content">
                <form action="{{ route('seller.product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                        <div class="fallback">
                            <input name="files" type="file" multiple="multiple" />
                        </div>
                        <div class="dz-preview d-flex flex-wrap">
                            <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2"
                                style="height:80px;width:80px;">
                                <img class="dz-image" src="../../../assets/img/products/23.png" alt="..."
                                    data-dz-thumbnail="data-dz-thumbnail" />
                                <a class="dz-remove text-400" href="#!" data-dz-remove="data-dz-remove">
                                    <span data-feather="x"></span>
                                </a>
                            </div>
                        </div>
                        <div class="dz-message text-600" data-dz-message="data-dz-message">
                            Arraste sua foto aqui<span class="text-800">&nbsp;ou</span>
                            <button class="btn btn-link p-0" type="button">&nbsp;Navegar pelo dispositivo</button>
                            <br />
                            <img class="mt-3 me-2" src="{{ asset('assets/img/icons/image-icon.png') }}" width="40" alt="" />
                        </div>
                    </div>
                    <button type="submit">Enviar</button>
                </form>
                @component('sellers.components.footer')

                @endcomponent
            </div>
        </div>

    </main>
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
          menubar: false,
          branding: false,
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
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../vendors/dropzone/dropzone.min.js"></script>
    <script src="../../../vendors/choices/choices.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
</body>
</html>
