<nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
    <script>
        var navbarStyle = window.config.config.phoenixNavbarStyle;
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- barra de rolagem removida -->
        <div class="navbar-vertical-content">
            <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                <!-- barra de rolagem removida -->
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                        <li class="nav-item">
                            <!-- páginas principais -->
                            <div class="nav-item-wrapper">
                                <a class="nav-link dropdown-indicator label-1" href="#home" role="button"
                                    data-bs-toggle="collapse" aria-expanded="true" aria-controls="home">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon">
                                            <span class="fas fa-caret-right"></span>
                                        </div>
                                        <span class="nav-link-icon">
                                            <span data-feather="pie-chart"></span>
                                        </span>
                                        <span class="nav-link-text">Dashboard</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse"
                                        id="home">
                                        <li class="collapsed-nav-item-title d-none">Dashboard</li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="index.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Visão Geral</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="index.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Estatísticas de Vendas</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="index.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Avaliações dos Clientes
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="index.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Relatórios
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- rótulo -->
                            <p class="navbar-vertical-label">Recursos</p>
                            <hr class="navbar-vertical-line" />
                            <!-- páginas principais -->
                            <div class="nav-item-wrapper">
                                <a class="nav-link dropdown-indicator label-1" href="#e-commerce" role="button"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon">
                                            <span class="fas fa-caret-right"></span>
                                        </div>
                                        <span class="nav-link-icon">
                                            <span data-feather="shopping-bag"></span>

                                        </span>
                                        <span class="nav-link-text">Produtos</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="e-commerce">
                                        <li class="collapsed-nav-item-title d-none">Produtos</li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('seller.product.index') }}"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Meus Produtos</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('seller.product.add') }}"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Adicionar Produto</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps/e-commerce/admin/refund.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Gerenciamento de Estoque
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1 collapsed"
                                        href="#CRM" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="CRM">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><svg
                                                    class="svg-inline--fa fa-caret-right" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="caret-right"
                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 256 512" data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M118.6 105.4l128 127.1C252.9 239.6 256 247.8 256 255.1s-3.125 16.38-9.375 22.63l-128 127.1c-9.156 9.156-22.91 11.9-34.88 6.943S64 396.9 64 383.1V128c0-12.94 7.781-24.62 19.75-29.58S109.5 96.23 118.6 105.4z">
                                                    </path>
                                                </svg>
                                                <!-- <span class="fas fa-caret-right"></span> Font Awesome fontawesome.com -->
                                            </div><span class="nav-link-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                                  <path d="M4 0h10a4 4 0 0 1 4 4v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"></path>
                                                  <polyline points="14 2 14 8 20 8"></polyline>
                                                  <line x1="16" y1="13" x2="8" y2="13"></line>
                                                  <line x1="16" y1="17" x2="8" y2="17"></line>
                                                  <polyline points="10 9 9 9 8 9"></polyline>
                                                </svg>
                                              </span>
                                              </span><span class="nav-link-text">Pedidos</span><svg
                                                class="svg-inline--fa fa-circle text-info ms-1 new-page-indicator"
                                                style="font-size: 6px;" aria-hidden="true" focusable="false"
                                                data-prefix="fas" data-icon="circle" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z">
                                                </path>
                                            </svg>
                                            <!-- <span class="fa-solid fa-circle text-info ms-1 new-page-indicator" style="font-size: 6px"></span> Font Awesome fontawesome.com -->
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav parent collapse" data-bs-parent="#navbarVerticalCollapse"
                                            id="CRM" style="">
                                            <li class="collapsed-nav-item-title d-none">Pedidos</li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/crm/analytics.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Meus Pedidos
                                                        </span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/crm/analytics.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Pedidos Pendentes
                                                        </span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/crm/analytics.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Pedidos Concluídos
                                                        </span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/crm/analytics.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Cancelamentos e Devoluções

                                                        </span></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1 collapsed"
                                        href="#email" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="email">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><svg
                                                    class="svg-inline--fa fa-caret-right" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="caret-right"
                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 256 512" data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M118.6 105.4l128 127.1C252.9 239.6 256 247.8 256 255.1s-3.125 16.38-9.375 22.63l-128 127.1c-9.156 9.156-22.91 11.9-34.88 6.943S64 396.9 64 383.1V128c0-12.94 7.781-24.62 19.75-29.58S109.5 96.23 118.6 105.4z">
                                                    </path>
                                                </svg>
                                                <!-- <span class="fas fa-caret-right"></span> Font Awesome fontawesome.com -->
                                            </div><span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-mail">
                                                    <path
                                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                    </path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg></span><span class="nav-link-text">Clientes</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav parent collapse" data-bs-parent="#navbarVerticalCollapse"
                                            id="email" style="">
                                            <li class="collapsed-nav-item-title d-none">Clientes</li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/email/inbox.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Lista de Clientes </span></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1 collapsed"
                                        href="#social" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="social">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><svg
                                                    class="svg-inline--fa fa-caret-right" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="caret-right"
                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 256 512" data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M118.6 105.4l128 127.1C252.9 239.6 256 247.8 256 255.1s-3.125 16.38-9.375 22.63l-128 127.1c-9.156 9.156-22.91 11.9-34.88 6.943S64 396.9 64 383.1V128c0-12.94 7.781-24.62 19.75-29.58S109.5 96.23 118.6 105.4z">
                                                    </path>
                                                </svg>
                                                <!-- <span class="fas fa-caret-right"></span> Font Awesome fontawesome.com -->
                                            </div><span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-share-2">
                                                    <circle cx="18" cy="5" r="3"></circle>
                                                    <circle cx="6" cy="12" r="3"></circle>
                                                    <circle cx="18" cy="19" r="3"></circle>
                                                    <line x1="8.59" y1="13.51" x2="15.42"
                                                        y2="17.49"></line>
                                                    <line x1="15.41" y1="6.51" x2="8.59"
                                                        y2="10.49"></line>
                                                </svg></span><span class="nav-link-text">Promoções e Ofertas</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav parent collapse" data-bs-parent="#navbarVerticalCollapse"
                                            id="social" style="">
                                            <li class="collapsed-nav-item-title d-none">Promoções e Ofertas</li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/social/profile.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Cupons de Desconto </span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/social/settings.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Promoções Especiais </span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/social/settings.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Ofertas Relâmpago
                                                        </span></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1 collapsed"
                                        href="#events" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="events">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><svg
                                                    class="svg-inline--fa fa-caret-right" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="caret-right"
                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 256 512" data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M118.6 105.4l128 127.1C252.9 239.6 256 247.8 256 255.1s-3.125 16.38-9.375 22.63l-128 127.1c-9.156 9.156-22.91 11.9-34.88 6.943S64 396.9 64 383.1V128c0-12.94 7.781-24.62 19.75-29.58S109.5 96.23 118.6 105.4z">
                                                    </path>
                                                </svg>
                                                <!-- <span class="fas fa-caret-right"></span> Font Awesome fontawesome.com -->
                                            </div><span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-bookmark">
                                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                                </svg></span><span class="nav-link-text">Pagamentos</span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav parent collapse" data-bs-parent="#navbarVerticalCollapse"
                                            id="events" style="">
                                            <li class="collapsed-nav-item-title d-none">Pagamentos</li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/events/create-an-event.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Configurações de Pagamento </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/events/event-detail.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Transações Financeiras </span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/events/event-detail.html" data-bs-toggle=""
                                                    aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Histórico de Pagamentos
                                                        </span></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1 collapsed"
                                        href="#project-management" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="project-management">
                                        <div class="d-flex align-items-center">
                                            <div class="dropdown-indicator-icon"><svg
                                                    class="svg-inline--fa fa-caret-right" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="caret-right"
                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 256 512" data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M118.6 105.4l128 127.1C252.9 239.6 256 247.8 256 255.1s-3.125 16.38-9.375 22.63l-128 127.1c-9.156 9.156-22.91 11.9-34.88 6.943S64 396.9 64 383.1V128c0-12.94 7.781-24.62 19.75-29.58S109.5 96.23 118.6 105.4z">
                                                    </path>
                                                </svg>
                                                <!-- <span class="fas fa-caret-right"></span> Font Awesome fontawesome.com -->
                                            </div><span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-clipboard">
                                                    <path
                                                        d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                    </path>
                                                    <rect x="8" y="2" width="8"
                                                        height="4" rx="1" ry="1"></rect>
                                                </svg></span><span class="nav-link-text">Configurações
                                            </span>
                                        </div>
                                    </a>
                                    <div class="parent-wrapper label-1">
                                        <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                            id="project-management">
                                            <li class="collapsed-nav-item-title d-none">Configurações</li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/project-management/create-new.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Perfil da Loja
                                                        </span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/project-management/create-new.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Configurações de Envio
                                                        </span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/project-management/create-new.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Políticas da Loja
                                                        </span></div>
                                                </a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link"
                                                    href="../../../apps/project-management/create-new.html"
                                                    data-bs-toggle="" aria-expanded="false">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text">Notificações e Alertas
                                                        </span></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="nav-item-wrapper"><a
                                            class="nav-link dropdown-indicator label-1 collapsed" href="#pricing"
                                            role="button" data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="pricing">
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown-indicator-icon"><svg
                                                        class="svg-inline--fa fa-caret-right" aria-hidden="true"
                                                        focusable="false" data-prefix="fas" data-icon="caret-right"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 256 512" data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M118.6 105.4l128 127.1C252.9 239.6 256 247.8 256 255.1s-3.125 16.38-9.375 22.63l-128 127.1c-9.156 9.156-22.91 11.9-34.88 6.943S64 396.9 64 383.1V128c0-12.94 7.781-24.62 19.75-29.58S109.5 96.23 118.6 105.4z">
                                                        </path>
                                                    </svg>
                                                    <!-- <span class="fas fa-caret-right"></span> Font Awesome fontawesome.com -->
                                                </div><span class="nav-link-icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16px"
                                                        height="16px" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-tag">
                                                        <path
                                                            d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z">
                                                        </path>
                                                        <line x1="7" y1="7" x2="7.01"
                                                            y2="7"></line>
                                                    </svg></span><span class="nav-link-text">Ajuda e Suporte:
                                                </span>
                                            </div>
                                        </a>
                                        <div class="parent-wrapper label-1">
                                            <ul class="nav parent collapse" data-bs-parent="#navbarVerticalCollapse"
                                                id="pricing" style="">
                                                <li class="collapsed-nav-item-title d-none">Ajuda e Suporte:

                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="../../../pages/pricing/pricing-column.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Central de Ajuda </span></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="../../../pages/pricing/pricing-grid.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Contato com o Suporte </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="../../../pages/pricing/pricing-grid.html"
                                                        data-bs-toggle="" aria-expanded="false">
                                                        <div class="d-flex align-items-center"><span
                                                                class="nav-link-text">Perguntas Frequentes (FAQ)
                                                            </span></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-item-wrapper">
                                <a class="nav-link dropdown-indicator label-1 collapsed" href="#relatorios"
                                    role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="relatorios">
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown-indicator-icon">
                                            <svg class="svg-inline--fa fa-caret-right" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="caret-right"
                                                role="img" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 256 512" data-fa-i2svg="">
                                                <path fill="currentColor"
                                                    d="M118.6 105.4l128 127.1C252.9 239.6 256 247.8 256 255.1s-3.125 16.38-9.375 22.63l-128 127.1c-9.156 9.156-22.91 11.9-34.88 6.943S64 396.9 64 383.1V128c0-12.94 7.781-24.62 19.75-29.58S109.5 96.23 118.6 105.4z">
                                                </path>
                                            </svg>
                                            <!-- <span class="fas fa-caret-right"></span> Font Awesome fontawesome.com -->
                                        </div>
                                        <span class="nav-link-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-bar-chart-2">
                                                <line x1="18" y1="20" x2="18" y2="10">
                                                </line>
                                                <line x1="12" y1="20" x2="12" y2="4">
                                                </line>
                                                <line x1="6" y1="20" x2="6" y2="14">
                                                </line>
                                            </svg>
                                        </span>
                                        <span class="nav-link-text">Relatórios e Análises </span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav parent collapse" data-bs-parent="#navbarVerticalCollapse"
                                        id="relatorios" style="">
                                        <li class="collapsed-nav-item-title d-none">Relatórios e Análises</li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../../../modules/reports/vendas.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Relatórios de Vendas
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="../../../modules/reports/produtos-mais-vendidos.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Análise de Desempenho
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../../../modules/reports/clientes.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Estatísticas de Clientes
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="navbar-vertical-footer"><button
                    class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 white-space-nowrap d-flex align-items-center"><span
                        class="uil uil-left-arrow-to-left fs-0"></span><span
                        class="uil uil-arrow-from-right fs-0"></span><span
                        class="navbar-vertical-footer-text ms-2">Visualização Compacta</span></button></div>
</nav>
