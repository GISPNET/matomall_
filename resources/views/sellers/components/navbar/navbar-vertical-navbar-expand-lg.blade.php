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
                                        <span class="nav-link-text">Página Inicial</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse"
                                        id="home">
                                        <li class="collapsed-nav-item-title d-none">Página Inicial</li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="index.html" data-bs-toggle=""
                                                aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Vendedor</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- rótulo -->
                            <p class="navbar-vertical-label">Aplicativos</p>
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
                                            <span data-feather="shopping-cart"></span>
                                        </span>
                                        <span class="nav-link-text">Comércio Eletrônico</span>
                                    </div>
                                </a>
                                <div class="parent-wrapper label-1">
                                    <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse"
                                        id="e-commerce">
                                        <li class="collapsed-nav-item-title d-none">Comércio Eletrônico</li>
                                        <!-- Itens diretamente dentro do menu Comércio Eletrônico -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('seller.product.add') }}"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Adicionar Produto</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('seller.product.index') }}"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Produtos</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps/e-commerce/admin/customers.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Clientes</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('seller.orders.index') }}"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Pedidos</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps/e-commerce/admin/refund.html"
                                                data-bs-toggle="" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text">Reembolso</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- rótulo -->
                            <p class="navbar-vertical-label">Páginas</p>
                            <hr class="navbar-vertical-line" />
                            <!-- páginas principais -->
                            <div class="nav-item-wrapper">
                                <a class="nav-link label-1" href="pages/notifications.html" role="button"
                                    data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span data-feather="bell"></span>
                                        </span>
                                        <span class="nav-link-text-wrapper">
                                            <span class="nav-link-text">Notificações</span>
                                        </span>
                                    </div>
                                </a>
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
