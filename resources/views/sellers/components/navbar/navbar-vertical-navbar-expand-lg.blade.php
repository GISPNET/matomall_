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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-file-text">
                                                    <path
                                                        d="M4 0h10a4 4 0 0 1 4 4v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="16" y1="13" x2="8"
                                                        y2="13"></line>
                                                    <line x1="16" y1="17" x2="8"
                                                        y2="17"></line>
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
                                                    href="{{ route('seller.orders.index') }}" data-bs-toggle=""
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
                                            </div><span class="nav-link-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                                  <path d="M17 13c0 1.66-1.34 3-3 3s-3-1.34-3-3"></path>
                                                  <path d="M2 8v10a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V8"></path>
                                                  <path d="M20 8V6a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                  <circle cx="12" cy="13" r="4"></circle>
                                                </svg>
                                              </span>
                                              <span class="nav-link-text">Clientes</span>
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
                                            </div><span class="nav-link-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-gift">
                                                    <polyline points="20 12 20 22 4 22 4 12"></polyline>
                                                    <rect x="2" y="7" width="20"
                                                        height="5"></rect>
                                                    <line x1="12" y1="22" x2="12"
                                                        y2="7"></line>
                                                    <path d="M5 22V7"></path>
                                                    <path d="M19 22V7"></path>
                                                    <path d="M12 2V7"></path>
                                                </svg>
                                            </span>

                                            <span class="nav-link-text">Promoções e Ofertas</span>
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
                                            </div><span class="nav-link-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                                  <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                                  <line x1="1" y1="10" x2="23" y2="10"></line>
                                                </svg>
                                              </span>
                                              <span class="nav-link-text">Pagamentos</span>
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
                                                    stroke-linejoin="round" class="feather feather-settings">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path
                                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                    </path>
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
                                                        stroke-linejoin="round" class="feather feather-life-buoy">
                                                        <circle cx="12" cy="12" r="10">
                                                        </circle>
                                                        <circle cx="12" cy="12" r="4">
                                                        </circle>
                                                        <line x1="4.93" y1="4.93" x2="9.17"
                                                            y2="9.17"></line>
                                                        <line x1="14.83" y1="14.83" x2="19.07"
                                                            y2="19.07"></line>
                                                        <line x1="14.83" y1="9.17" x2="19.07"
                                                            y2="4.93"></line>
                                                        <line x1="14.83" y1="9.17" x2="18.36"
                                                            y2="5.64"></line>
                                                        <line x1="4.93" y1="19.07" x2="9.17"
                                                            y2="14.83"></line>
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
