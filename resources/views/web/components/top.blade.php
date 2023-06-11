<section class="py-0">
    <div class="container-small">
      <div class="ecommerce-topbar">
        <nav class="navbar navbar-expand-lg navbar-light px-0">
          <div class="row gx-0 gy-2 w-100 flex-between-center">
            <div class="col-auto"><a class="text-decoration-none" href="/">
                <div class="d-flex align-items-center"><img src="{{asset('assets/img/icons/logo.png')}}" alt="matomall" width="27" />
                  <p class="logo-text ms-2">matomall</p>
                </div>
              </a></div>
            <div class="col-auto order-md-1">
              <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
                <li class="nav-item d-flex align-items-center">
                  <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                </li>
                <li class="nav-item">
                    @if (Session::has('cart') && count(session()->get('cart')) > 0)
                        <a class="nav-link px-2 icon-indicator icon-indicator-primary" href="{{ route('cart.index') }}" role="button">
                            <span class="text-700" data-feather="shopping-cart" style="height:20px;width:20px;"></span>
                            <span class="icon-indicator-number">{{ count(session()->get('cart')) }}</span>
                        </a>
                    @else
                        <a class="nav-link px-2" href="{{ route('cart.index') }}" role="button">
                            <span class="text-700" data-feather="shopping-cart" style="height:20px;width:20px;"></span>
                        </a>
                    @endif
                </li>
                <li class="nav-item dropdown"><a class="nav-link px-2" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="user" style="height:20px;width:20px;"></span></a>
                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300 mt-2" aria-labelledby="navbarDropdownUser">
                   @if (auth()->check())
                   <div class="card position-relative border-0">
                    <div class="card-body p-0">
                      <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl ">
                          <img class="rounded-circle " src="" alt="" />
                        </div>
                        <h6 class="mt-2 text-black">{{ auth()->user()->name }}</h6>
                      </div>
                      <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 3rem;">
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Painel</a></li>
                      </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                      <ul class="nav d-flex flex-column my-3">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Adicionar outra conta                          </a></li>
                      </ul>
                      <hr />
                      <div class="px-3">
                          <form action="{{ route('logout') }}" method="POST">
                              @csrf
                              <button type="submit" class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!">
                                  <span class="me-2" data-feather="log-out"></span>Encerrar sessão
                              </button>
                          </form>
                      </div>
                      <div class="my-2 text-center fw-bold fs--2 text-600">
                          <a class="text-600 me-1" href="#!">Política de Privacidade</a>&bull;
                          <a class="text-600 mx-1" href="#!">Termos</a>&bull;
                          <a class="text-600 ms-1" href="#!">Cookies</a>
                      </div>

                    </div>
                  </div>
                  @else
                  <div class="card position-relative border-0">
                    <div class="overflow-auto scrollbar" style="height: 3.1rem;">
                        <div style="margin-top: 5px"></div>
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item">
                            <a class="nav-link px-3" href="{{ route('login') }}">
                                <span class="me-2 text-900" data-feather="log-in"></span>
                                Login
                            </a>
                        </li>
                                              </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                      <ul class="nav d-flex flex-column my-3">
                        <li class="nav-item"><a class="nav-link px-3" href="{{ route('customer.register.index') }}"> <span class="me-2 text-900" data-feather="user-plus"></span>Registrar uma conta                          </a></li>
                      </ul>
                      <hr />
                      <div class="my-2 text-center fw-bold fs--2 text-600">
                          <a class="text-600 me-1" href="#!">Política de Privacidade</a>&bull;
                          <a class="text-600 mx-1" href="#!">Termos</a>&bull;
                          <a class="text-600 ms-1" href="#!">Cookies</a>
                      </div>

                    </div>
                  </div>
                   @endif
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-12 col-md-6">
              <div class="search-box ecommerce-search-box w-100">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search form-control-sm" type="search" placeholder="Procurar" aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>
