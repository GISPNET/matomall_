@extends('sellers.layouts.app')
@section('titulo')
@section('content')
<div class="content">
    <div class="mb-9">
      <div class="row g-2 mb-4">
        <div class="col-auto">
          <h2 class="mb-0">Customers</h2>
        </div>
      </div>
      <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">All <span class="text-700 fw-semi-bold">(68817)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#">New <span class="text-700 fw-semi-bold">(6)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#">Abandoned checkouts <span class="text-700 fw-semi-bold">(17)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#">Locals <span class="text-700 fw-semi-bold">(6,810)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#">Email subscribers <span class="text-700 fw-semi-bold">(8)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#">Top reviews <span class="text-700 fw-semi-bold">(2)</span></a></li>
      </ul>
      <div id="products" data-list="{&quot;valueNames&quot;:[&quot;customer&quot;,&quot;email&quot;,&quot;total-orders&quot;,&quot;total-spent&quot;,&quot;city&quot;,&quot;last-seen&quot;,&quot;last-order&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
        <div class="mb-4">
          <div class="row g-3">
            <div class="col-auto">
              <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search customers" aria-label="Search">
                  <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path></svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                </form>
              </div>
            </div>
            <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
              <div class="btn-group position-static" role="group">
                <div class="btn-group position-static text-nowrap"><button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Country<svg class="svg-inline--fa fa-angle-down ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fas fa-angle-down ms-2"></span> Font Awesome fontawesome.com --></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">US</a></li>
                    <li><a class="dropdown-item" href="#">Uk</a></li>
                    <li><a class="dropdown-item" href="#">Australia</a></li>
                  </ul>
                </div>
                <div class="btn-group position-static text-nowrap"><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> VIP<svg class="svg-inline--fa fa-angle-down ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fas fa-angle-down ms-2"></span> Font Awesome fontawesome.com --></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">VIP 1</a></li>
                    <li><a class="dropdown-item" href="#">VIP 2</a></li>
                    <li><a class="dropdown-item" href="#">VIP 3</a></li>
                    <li></li>
                  </ul>
                </div><button class="btn btn-phoenix-secondary px-7 flex-shrink-0">More filters</button>
              </div>
            </div>
            <div class="col-auto"><button class="btn btn-link text-900 me-4 px-0"><svg class="svg-inline--fa fa-file-export fs--1 me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-export" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M192 312C192 298.8 202.8 288 216 288H384V160H256c-17.67 0-32-14.33-32-32L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48v-128H216C202.8 336 192 325.3 192 312zM256 0v128h128L256 0zM568.1 295l-80-80c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94L494.1 288H384v48h110.1l-39.03 39.03C450.3 379.7 448 385.8 448 392s2.344 12.28 7.031 16.97c9.375 9.375 24.56 9.375 33.94 0l80-80C578.3 319.6 578.3 304.4 568.1 295z"></path></svg><!-- <span class="fa-solid fa-file-export fs--1 me-2"></span> Font Awesome fontawesome.com -->Export</button><button class="btn btn-primary"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <span class="fas fa-plus me-2"></span> Font Awesome fontawesome.com -->Add customer</button></div>
          </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
          <div class="table-responsive scrollbar-overlay mx-n1 px-1" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px -4px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: scroll hidden;"><div class="simplebar-content" style="padding: 0px 4px;">
            <table class="table table-sm fs--1 mb-0">
              <thead>
                <tr>
                  <th class="white-space-nowrap fs--1 align-middle ps-0">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" id="checkbox-bulk-customers-select" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;customers-table-body&quot;}"></div>
                  </th>
                  <th class="sort align-middle pe-5" scope="col" data-sort="customer" style="width:10%;">CUSTOMER</th>
                  <th class="sort align-middle pe-5" scope="col" data-sort="email" style="width:20%;">EMAIL</th>
                  <th class="sort align-middle text-end" scope="col" data-sort="total-orders" style="width:10%">ORDERS</th>
                  <th class="sort align-middle text-end ps-3" scope="col" data-sort="total-spent" style="width:10%">TOTAL SPENT</th>
                  <th class="sort align-middle ps-7" scope="col" data-sort="city" style="width:25%;">CITY</th>
                  <th class="sort align-middle text-end" scope="col" data-sort="last-seen" style="width:15%;">LAST SEEN</th>
                  <th class="sort align-middle text-end pe-0" scope="col" data-sort="last-order" style="width:10%;min-width: 150px;">LAST ORDER</th>
                </tr>
              </thead>
              <tbody class="list" id="customers-table-body"><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle ps-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/32.webp&quot;,&quot;name&quot;:&quot;Carry Anna&quot;},&quot;email&quot;:&quot;annac34@gmail.com&quot;,&quot;city&quot;:&quot;Budapest&quot;,&quot;totalOrders&quot;:89,&quot;totalSpent&quot;:23987,&quot;lastSeen&quot;:&quot;34 min ago&quot;,&quot;lastOrder&quot;:&quot;Dec 12, 12:56 PM&quot;}"></div>
                  </td>
                  <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/32.webp" alt=""></div>
                      <p class="mb-0 ms-3 text-1100 fw-bold">Carry Anna</p>
                    </a></td>
                  <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:annac34@gmail.com">annac34@gmail.com</a></td>
                  <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">89</td>
                  <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 23987</td>
                  <td class="city align-middle white-space-nowrap text-1000 ps-7">Budapest</td>
                  <td class="last-seen align-middle white-space-nowrap text-700 text-end">34 min ago</td>
                  <td class="last-order align-middle white-space-nowrap text-700 text-end">Dec 12, 12:56 PM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle ps-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/avatar.webp&quot;,&quot;name&quot;:&quot;Milind Mikuja&quot;,&quot;placeholder&quot;:true},&quot;email&quot;:&quot;mimiku@yahoo.com&quot;,&quot;city&quot;:&quot;Manchester&quot;,&quot;totalOrders&quot;:76,&quot;totalSpent&quot;:21567,&quot;lastSeen&quot;:&quot;6 hours ago&quot;,&quot;lastOrder&quot;:&quot;Dec 9, 2:28 PM&quot;}"></div>
                  </td>
                  <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle avatar-placeholder" src="../../../assets/img/team/avatar.webp" alt=""></div>
                      <p class="mb-0 ms-3 text-1100 fw-bold">Milind Mikuja</p>
                    </a></td>
                  <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:mimiku@yahoo.com">mimiku@yahoo.com</a></td>
                  <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">76</td>
                  <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 21567</td>
                  <td class="city align-middle white-space-nowrap text-1000 ps-7">Manchester</td>
                  <td class="last-seen align-middle white-space-nowrap text-700 text-end">6 hours ago</td>
                  <td class="last-order align-middle white-space-nowrap text-700 text-end">Dec 9, 2:28 PM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle ps-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/35.webp&quot;,&quot;name&quot;:&quot;Stanly Drinkwater&quot;},&quot;email&quot;:&quot;stnlwasser@hotmail.com&quot;,&quot;city&quot;:&quot;Smallville&quot;,&quot;totalOrders&quot;:69,&quot;totalSpent&quot;:19872,&quot;lastSeen&quot;:&quot;43 min ago&quot;,&quot;lastOrder&quot;:&quot;Dec 4, 12:56 PM&quot;}"></div>
                  </td>
                  <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/35.webp" alt=""></div>
                      <p class="mb-0 ms-3 text-1100 fw-bold">Stanly Drinkwater</p>
                    </a></td>
                  <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:stnlwasser@hotmail.com">stnlwasser@hotmail.com</a></td>
                  <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">69</td>
                  <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 19872</td>
                  <td class="city align-middle white-space-nowrap text-1000 ps-7">Smallville</td>
                  <td class="last-seen align-middle white-space-nowrap text-700 text-end">43 min ago</td>
                  <td class="last-order align-middle white-space-nowrap text-700 text-end">Dec 4, 12:56 PM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle ps-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/57.webp&quot;,&quot;name&quot;:&quot;Josef Stravinsky&quot;},&quot;email&quot;:&quot;Josefsky@sni.it&quot;,&quot;city&quot;:&quot;Metropolis&quot;,&quot;totalOrders&quot;:67,&quot;totalSpent&quot;:17996,&quot;lastSeen&quot;:&quot;2 hours ago&quot;,&quot;lastOrder&quot;:&quot;Dec 1,  4:07 AM&quot;}"></div>
                  </td>
                  <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/57.webp" alt=""></div>
                      <p class="mb-0 ms-3 text-1100 fw-bold">Josef Stravinsky</p>
                    </a></td>
                  <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:Josefsky@sni.it">Josefsky@sni.it</a></td>
                  <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">67</td>
                  <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 17996</td>
                  <td class="city align-middle white-space-nowrap text-1000 ps-7">Metropolis</td>
                  <td class="last-seen align-middle white-space-nowrap text-700 text-end">2 hours ago</td>
                  <td class="last-order align-middle white-space-nowrap text-700 text-end">Dec 1, 4:07 AM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle ps-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/58.webp&quot;,&quot;name&quot;:&quot;Igor Borvibson&quot;},&quot;email&quot;:&quot;vibigorr@technext.it&quot;,&quot;city&quot;:&quot;Central city&quot;,&quot;totalOrders&quot;:61,&quot;totalSpent&quot;:16785,&quot;lastSeen&quot;:&quot;5 days ago&quot;,&quot;lastOrder&quot;:&quot;Nov 28, 7:28 PM&quot;}"></div>
                  </td>
                  <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/58.webp" alt=""></div>
                      <p class="mb-0 ms-3 text-1100 fw-bold">Igor Borvibson</p>
                    </a></td>
                  <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:vibigorr@technext.it">vibigorr@technext.it</a></td>
                  <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">61</td>
                  <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 16785</td>
                  <td class="city align-middle white-space-nowrap text-1000 ps-7">Central city</td>
                  <td class="last-seen align-middle white-space-nowrap text-700 text-end">5 days ago</td>
                  <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 28, 7:28 PM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle ps-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/59.webp&quot;,&quot;name&quot;:&quot;Katerina Karenin&quot;},&quot;email&quot;:&quot;karkat99@gmail.com&quot;,&quot;city&quot;:&quot;Gotham&quot;,&quot;totalOrders&quot;:58,&quot;totalSpent&quot;:14956,&quot;lastSeen&quot;:&quot;2 weeks ago&quot;,&quot;lastOrder&quot;:&quot;Nov 24, 10:16 AM&quot;}"></div>
                  </td>
                  <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/59.webp" alt=""></div>
                      <p class="mb-0 ms-3 text-1100 fw-bold">Katerina Karenin</p>
                    </a></td>
                  <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:karkat99@gmail.com">karkat99@gmail.com</a></td>
                  <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">58</td>
                  <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 14956</td>
                  <td class="city align-middle white-space-nowrap text-1000 ps-7">Gotham</td>
                  <td class="last-seen align-middle white-space-nowrap text-700 text-end">2 weeks ago</td>
                  <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 24, 10:16 AM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle ps-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;&quot;,&quot;name&quot;:&quot;Roy Anderson&quot;},&quot;email&quot;:&quot;andersonroy@netflix.chill&quot;,&quot;city&quot;:&quot;Vancouver&quot;,&quot;totalOrders&quot;:52,&quot;totalSpent&quot;:12509,&quot;lastSeen&quot;:&quot;4 days ago&quot;,&quot;lastOrder&quot;:&quot;Nov 18, 5:43 PM&quot;}"></div>
                  </td>
                  <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m">
                        <div class="avatar-name rounded-circle"><span>R</span></div>
                      </div>
                      <p class="mb-0 ms-3 text-1100 fw-bold">Roy Anderson</p>
                    </a></td>
                  <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:andersonroy@netflix.chill">andersonroy@netflix.chill</a></td>
                  <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">52</td>
                  <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 12509</td>
                  <td class="city align-middle white-space-nowrap text-1000 ps-7">Vancouver</td>
                  <td class="last-seen align-middle white-space-nowrap text-700 text-end">4 days ago</td>
                  <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 18, 5:43 PM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle ps-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/31.webp&quot;,&quot;name&quot;:&quot;Martina scorcese&quot;},&quot;email&quot;:&quot;cesetina1@gmail.com&quot;,&quot;city&quot;:&quot;Viena&quot;,&quot;totalOrders&quot;:49,&quot;totalSpent&quot;:11003,&quot;lastSeen&quot;:&quot;6 min ago&quot;,&quot;lastOrder&quot;:&quot;Nov 18, 2:09 AM&quot;}"></div>
                  </td>
                  <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/31.webp" alt=""></div>
                      <p class="mb-0 ms-3 text-1100 fw-bold">Martina scorcese</p>
                    </a></td>
                  <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:cesetina1@gmail.com">cesetina1@gmail.com</a></td>
                  <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">49</td>
                  <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 11003</td>
                  <td class="city align-middle white-space-nowrap text-1000 ps-7">Viena</td>
                  <td class="last-seen align-middle white-space-nowrap text-700 text-end">6 min ago</td>
                  <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 18, 2:09 AM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle ps-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/33.webp&quot;,&quot;name&quot;:&quot;Luis Bunuel&quot;},&quot;email&quot;:&quot;luisuel@live.com&quot;,&quot;city&quot;:&quot;Bangalore&quot;,&quot;totalOrders&quot;:44,&quot;totalSpent&quot;:7897,&quot;lastSeen&quot;:&quot;56 min ago&quot;,&quot;lastOrder&quot;:&quot;Nov 16, 3:22 PM&quot;}"></div>
                  </td>
                  <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/33.webp" alt=""></div>
                      <p class="mb-0 ms-3 text-1100 fw-bold">Luis Bunuel</p>
                    </a></td>
                  <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:luisuel@live.com">luisuel@live.com</a></td>
                  <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">44</td>
                  <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 7897</td>
                  <td class="city align-middle white-space-nowrap text-1000 ps-7">Bangalore</td>
                  <td class="last-seen align-middle white-space-nowrap text-700 text-end">56 min ago</td>
                  <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 16, 3:22 PM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle ps-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/34.webp&quot;,&quot;name&quot;:&quot;Jean Renoir&quot;},&quot;email&quot;:&quot;renoirjean1836@gmail.com&quot;,&quot;city&quot;:&quot;Chittagong&quot;,&quot;totalOrders&quot;:37,&quot;totalSpent&quot;:7781,&quot;lastSeen&quot;:&quot;Yesterday&quot;,&quot;lastOrder&quot;:&quot;Nov 09, 8:49 AM&quot;}"></div>
                  </td>
                  <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/34.webp" alt=""></div>
                      <p class="mb-0 ms-3 text-1100 fw-bold">Jean Renoir</p>
                    </a></td>
                  <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:renoirjean1836@gmail.com">renoirjean1836@gmail.com</a></td>
                  <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">37</td>
                  <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 7781</td>
                  <td class="city align-middle white-space-nowrap text-1000 ps-7">Chittagong</td>
                  <td class="last-seen align-middle white-space-nowrap text-700 text-end">Yesterday</td>
                  <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 09, 8:49 AM</td>
                </tr></tbody>
            </table>
          </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 613px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: visible;"><div class="simplebar-scrollbar" style="width: 415px; display: block; transform: translate3d(0px, 0px, 0px);"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
          <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
            <div class="col-auto d-flex">
              <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info">1 to 10 <span class="text-600"> Items of </span>15</p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a>
            </div>
            <div class="col-auto d-flex"><button class="page-link disabled" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"></path></svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
              <ul class="mb-0 pagination"><li class="active"><button class="page" type="button" data-i="1" data-page="10">1</button></li><li><button class="page" type="button" data-i="2" data-page="10">2</button></li></ul><button class="page-link pe-0" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"></path></svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    @component('sellers.components.footer')
    @endcomponent
  </div>
@endsection
