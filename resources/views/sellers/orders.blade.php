@extends('sellers.layouts.app')
@section('titulo')
@section('content')
<div class="content">
    <nav class="mb-2" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
        <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
        <li class="breadcrumb-item active">Default</li>
      </ol>
    </nav>
    <div class="mb-9">
      <div class="row g-3 mb-4">
        <div class="col-auto">
          <h2 class="mb-0">Orders</h2>
        </div>
      </div>
      <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">All <span class="text-700 fw-semi-bold">(68817)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#">Pending payment <span class="text-700 fw-semi-bold">(6)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#">Unfulfilled <span class="text-700 fw-semi-bold">(17)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#">Completed<span class="text-700 fw-semi-bold">(6,810)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#">Refunded<span class="text-700 fw-semi-bold">(8)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#">Failed<span class="text-700 fw-semi-bold">(2)</span></a></li>
      </ul>
      <div id="orderTable" data-list="{&quot;valueNames&quot;:[&quot;order&quot;,&quot;total&quot;,&quot;customer&quot;,&quot;payment_status&quot;,&quot;fulfilment_status&quot;,&quot;delivery_type&quot;,&quot;date&quot;],&quot;page&quot;:10,&quot;pagination&quot;:true}">
        <div class="mb-4">
          <div class="row g-3">
            <div class="col-auto">
              <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search orders" aria-label="Search">
                  <svg class="svg-inline--fa fa-magnifying-glass search-box-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"></path></svg><!-- <span class="fas fa-search search-box-icon"></span> Font Awesome fontawesome.com -->
                </form>
              </div>
            </div>
            <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
              <div class="btn-group position-static" role="group">
                <div class="btn-group position-static text-nowrap" role="group"><button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Payment status<svg class="svg-inline--fa fa-angle-down ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fas fa-angle-down ms-2"></span> Font Awesome fontawesome.com --></button>
                  <ul class="dropdown-menu dropdown-menu-end" style="">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group position-static text-nowrap" role="group"><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Fulfilment status<svg class="svg-inline--fa fa-angle-down ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fas fa-angle-down ms-2"></span> Font Awesome fontawesome.com --></button>
                  <ul class="dropdown-menu dropdown-menu-end" style="">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
                </div><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0">More filters </button>
              </div>
            </div>
            <div class="col-auto"><button class="btn btn-link text-900 me-4 px-0"><svg class="svg-inline--fa fa-file-export fs--1 me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-export" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M192 312C192 298.8 202.8 288 216 288H384V160H256c-17.67 0-32-14.33-32-32L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48v-128H216C202.8 336 192 325.3 192 312zM256 0v128h128L256 0zM568.1 295l-80-80c-9.375-9.375-24.56-9.375-33.94 0s-9.375 24.56 0 33.94L494.1 288H384v48h110.1l-39.03 39.03C450.3 379.7 448 385.8 448 392s2.344 12.28 7.031 16.97c9.375 9.375 24.56 9.375 33.94 0l80-80C578.3 319.6 578.3 304.4 568.1 295z"></path></svg><!-- <span class="fa-solid fa-file-export fs--1 me-2"></span> Font Awesome fontawesome.com -->Export</button><button class="btn btn-primary"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <span class="fas fa-plus me-2"></span> Font Awesome fontawesome.com -->Add order</button></div>
          </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
          <div class="table-responsive scrollbar mx-n1 px-1">
            <table class="table table-sm fs--1 mb-0">
              <thead>
                <tr>
                  <th class="white-space-nowrap fs--1 align-middle ps-0" style="width:26px;">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" id="checkbox-bulk-order-select" type="checkbox" data-bulk-select="{&quot;body&quot;:&quot;order-table-body&quot;}"></div>
                  </th>
                  <th class="sort white-space-nowrap align-middle pe-3" scope="col" data-sort="order" style="width:5%;">ORDER</th>
                  <th class="sort align-middle text-end" scope="col" data-sort="total" style="width:6%;">TOTAL</th>
                  <th class="sort align-middle ps-8" scope="col" data-sort="customer" style="width:28%; min-width: 250px;">CUSTOMER</th>
                  <th class="sort align-middle pe-3" scope="col" data-sort="payment_status" style="width:10%;">PAYMENT STATUS</th>
                  <th class="sort align-middle text-start pe-3" scope="col" data-sort="fulfilment_status" style="width:12%; min-width: 200px;">FULFILMENT STATUS</th>
                  <th class="sort align-middle text-start" scope="col" data-sort="delivery_type" style="width:30%;">DELIVERY TYPE</th>
                  <th class="sort align-middle text-end pe-0" scope="col" data-sort="date">DATE</th>
                </tr>
              </thead>
              <tbody class="list" id="order-table-body"><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle px-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;order&quot;:2453,&quot;total&quot;:87,&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/32.webp&quot;,&quot;name&quot;:&quot;Carry Anna&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Complete&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;,&quot;icon&quot;:&quot;check&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Cancelled&quot;,&quot;type&quot;:&quot;badge-phoenix-secondary&quot;,&quot;icon&quot;:&quot;x&quot;},&quot;delivery_type&quot;:&quot;Cash on delivery&quot;,&quot;date&quot;:&quot;Dec 12, 12:56 PM&quot;}"></div>
                  </td>
                  <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2453</a></td>
                  <td class="total align-middle text-end fw-semi-bold text-1000">$87</td>
                  <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/32.webp" alt=""></div>
                      <h6 class="mb-0 ms-3 text-900">Carry Anna</h6>
                    </a></td>
                  <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Complete</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check ms-1" style="height:12.8px;width:12.8px;"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
                  <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ms-1" style="height:12.8px;width:12.8px;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></td>
                  <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                  <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Dec 12, 12:56 PM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle px-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;order&quot;:2452,&quot;total&quot;:7264,&quot;customer&quot;:{&quot;avatar&quot;:&quot;&quot;,&quot;name&quot;:&quot;Milind Mikuja&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Ready to pickup&quot;,&quot;type&quot;:&quot;badge-phoenix-info&quot;,&quot;icon&quot;:&quot;info&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Cancelled&quot;,&quot;type&quot;:&quot;badge-phoenix-secondary&quot;,&quot;icon&quot;:&quot;x&quot;},&quot;delivery_type&quot;:&quot;Free shipping&quot;,&quot;date&quot;:&quot;Dec 9, 2:28PM&quot;}"></div>
                  </td>
                  <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2452</a></td>
                  <td class="total align-middle text-end fw-semi-bold text-1000">$7264</td>
                  <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m">
                        <div class="avatar-name rounded-circle"><span>M</span></div>
                      </div>
                      <h6 class="mb-0 ms-3 text-900">Milind Mikuja</h6>
                    </a></td>
                  <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ms-1" style="height:12.8px;width:12.8px;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></td>
                  <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-info"><span class="badge-label">Ready to pickup</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info ms-1" style="height:12.8px;width:12.8px;"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span></td>
                  <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Free shipping</td>
                  <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Dec 9, 2:28PM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle px-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;order&quot;:2451,&quot;total&quot;:375,&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/35.webp&quot;,&quot;name&quot;:&quot;Stanly Drinkwater&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Pending&quot;,&quot;type&quot;:&quot;badge-phoenix-warning&quot;,&quot;icon&quot;:&quot;clock&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Completed&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;,&quot;icon&quot;:&quot;check&quot;},&quot;delivery_type&quot;:&quot;Local pickup&quot;,&quot;date&quot;:&quot;Dec 4, 12:56 PM&quot;}"></div>
                  </td>
                  <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2451</a></td>
                  <td class="total align-middle text-end fw-semi-bold text-1000">$375</td>
                  <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/35.webp" alt=""></div>
                      <h6 class="mb-0 ms-3 text-900">Stanly Drinkwater</h6>
                    </a></td>
                  <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock ms-1" style="height:12.8px;width:12.8px;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span></td>
                  <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Completed</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check ms-1" style="height:12.8px;width:12.8px;"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
                  <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Local pickup</td>
                  <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Dec 4, 12:56 PM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle px-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;order&quot;:2450,&quot;total&quot;:657,&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/57.webp&quot;,&quot;name&quot;:&quot;Josef Stravinsky&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Cancelled&quot;,&quot;type&quot;:&quot;badge-phoenix-secondary&quot;,&quot;icon&quot;:&quot;x&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Partially Fulfiled&quot;,&quot;type&quot;:&quot;badge-phoenix-warning&quot;,&quot;icon&quot;:&quot;clock&quot;},&quot;delivery_type&quot;:&quot;Standard shipping&quot;,&quot;date&quot;:&quot;Dec 1, 4:07 AM&quot;}"></div>
                  </td>
                  <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2450</a></td>
                  <td class="total align-middle text-end fw-semi-bold text-1000">$657</td>
                  <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/57.webp" alt=""></div>
                      <h6 class="mb-0 ms-3 text-900">Josef Stravinsky</h6>
                    </a></td>
                  <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ms-1" style="height:12.8px;width:12.8px;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></td>
                  <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Partially Fulfiled</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock ms-1" style="height:12.8px;width:12.8px;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span></td>
                  <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Standard shipping</td>
                  <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Dec 1, 4:07 AM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle px-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;order&quot;:2449,&quot;total&quot;:9562,&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/58.webp&quot;,&quot;name&quot;:&quot;Igor Borvibson&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Failed&quot;,&quot;type&quot;:&quot;badge-phoenix-danger&quot;,&quot;icon&quot;:&quot;x&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Partially Fulfiled&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;,&quot;icon&quot;:&quot;check&quot;},&quot;delivery_type&quot;:&quot;Express&quot;,&quot;date&quot;:&quot;Nov 28, 7:28 PM&quot;}"></div>
                  </td>
                  <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2449</a></td>
                  <td class="total align-middle text-end fw-semi-bold text-1000">$9562</td>
                  <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/58.webp" alt=""></div>
                      <h6 class="mb-0 ms-3 text-900">Igor Borvibson</h6>
                    </a></td>
                  <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Failed</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ms-1" style="height:12.8px;width:12.8px;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></td>
                  <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Partially Fulfiled</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check ms-1" style="height:12.8px;width:12.8px;"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
                  <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Express</td>
                  <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 28, 7:28 PM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle px-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;order&quot;:2448,&quot;total&quot;:46,&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/59.webp&quot;,&quot;name&quot;:&quot;Katerina Karenin&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Paid&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;,&quot;icon&quot;:&quot;check&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Unfulfiled&quot;,&quot;type&quot;:&quot;badge-phoenix-danger&quot;,&quot;icon&quot;:&quot;x&quot;},&quot;delivery_type&quot;:&quot;Local delivery&quot;,&quot;date&quot;:&quot;Nov 24, 10:16 AM&quot;}"></div>
                  </td>
                  <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2448</a></td>
                  <td class="total align-middle text-end fw-semi-bold text-1000">$46</td>
                  <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/59.webp" alt=""></div>
                      <h6 class="mb-0 ms-3 text-900">Katerina Karenin</h6>
                    </a></td>
                  <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Paid</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check ms-1" style="height:12.8px;width:12.8px;"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
                  <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Unfulfiled</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ms-1" style="height:12.8px;width:12.8px;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></td>
                  <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Local delivery</td>
                  <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 24, 10:16 AM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle px-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;order&quot;:2447,&quot;total&quot;:953,&quot;customer&quot;:{&quot;avatar&quot;:&quot;&quot;,&quot;name&quot;:&quot;Roy Anderson&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Pending&quot;,&quot;type&quot;:&quot;badge-phoenix-warning&quot;,&quot;icon&quot;:&quot;clock&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Fulfiled&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;,&quot;icon&quot;:&quot;check&quot;},&quot;delivery_type&quot;:&quot;Cash on delivery&quot;,&quot;date&quot;:&quot;Nov 18, 5:43 PM&quot;}"></div>
                  </td>
                  <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2447</a></td>
                  <td class="total align-middle text-end fw-semi-bold text-1000">$953</td>
                  <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m">
                        <div class="avatar-name rounded-circle"><span>R</span></div>
                      </div>
                      <h6 class="mb-0 ms-3 text-900">Roy Anderson</h6>
                    </a></td>
                  <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock ms-1" style="height:12.8px;width:12.8px;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span></td>
                  <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Fulfiled</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check ms-1" style="height:12.8px;width:12.8px;"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
                  <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                  <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 18, 5:43 PM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle px-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;order&quot;:2446,&quot;total&quot;:12,&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/31.webp&quot;,&quot;name&quot;:&quot;Martina scorcese&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Pending&quot;,&quot;type&quot;:&quot;badge-phoenix-warning&quot;,&quot;icon&quot;:&quot;clock&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Fulfiled&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;,&quot;icon&quot;:&quot;check&quot;},&quot;delivery_type&quot;:&quot;Standard shipping&quot;,&quot;date&quot;:&quot;Nov 18, 2:09 AM&quot;}"></div>
                  </td>
                  <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2446</a></td>
                  <td class="total align-middle text-end fw-semi-bold text-1000">$12</td>
                  <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/31.webp" alt=""></div>
                      <h6 class="mb-0 ms-3 text-900">Martina scorcese</h6>
                    </a></td>
                  <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Pending</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock ms-1" style="height:12.8px;width:12.8px;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span></td>
                  <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Fulfiled</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check ms-1" style="height:12.8px;width:12.8px;"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
                  <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Standard shipping</td>
                  <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 18, 2:09 AM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle px-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;order&quot;:2445,&quot;total&quot;:3927,&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/33.webp&quot;,&quot;name&quot;:&quot;Luis Bunuel&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Paid&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;,&quot;icon&quot;:&quot;check&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Canceled&quot;,&quot;type&quot;:&quot;badge-phoenix-secondary&quot;,&quot;icon&quot;:&quot;x&quot;},&quot;delivery_type&quot;:&quot;Cash on delivery&quot;,&quot;date&quot;:&quot;Nov 16, 3:22 PM&quot;}"></div>
                  </td>
                  <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2445</a></td>
                  <td class="total align-middle text-end fw-semi-bold text-1000">$3927</td>
                  <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/33.webp" alt=""></div>
                      <h6 class="mb-0 ms-3 text-900">Luis Bunuel</h6>
                    </a></td>
                  <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Paid</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check ms-1" style="height:12.8px;width:12.8px;"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
                  <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Canceled</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x ms-1" style="height:12.8px;width:12.8px;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></td>
                  <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Cash on delivery</td>
                  <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 16, 3:22 PM</td>
                </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                  <td class="fs--1 align-middle px-0 py-3">
                    <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row="{&quot;order&quot;:2444,&quot;total&quot;:5937,&quot;customer&quot;:{&quot;avatar&quot;:&quot;/team/34.webp&quot;,&quot;name&quot;:&quot;Jean Renoir&quot;},&quot;payment_status&quot;:{&quot;label&quot;:&quot;Paid&quot;,&quot;type&quot;:&quot;badge-phoenix-success&quot;,&quot;icon&quot;:&quot;check&quot;},&quot;fulfilment_status&quot;:{&quot;label&quot;:&quot;Ready to pickup&quot;,&quot;type&quot;:&quot;badge-phoenix-secondary&quot;,&quot;icon&quot;:&quot;info&quot;},&quot;delivery_type&quot;:&quot;Local pickup&quot;,&quot;date&quot;:&quot;Nov 09, 8:49 AM&quot;}"></div>
                  </td>
                  <td class="order align-middle white-space-nowrap py-0"><a class="fw-semi-bold" href="#!">#2444</a></td>
                  <td class="total align-middle text-end fw-semi-bold text-1000">$5937</td>
                  <td class="customer align-middle white-space-nowrap ps-8"><a class="d-flex align-items-center" href="#!">
                      <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/34.webp" alt=""></div>
                      <h6 class="mb-0 ms-3 text-900">Jean Renoir</h6>
                    </a></td>
                  <td class="payment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Paid</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check ms-1" style="height:12.8px;width:12.8px;"><polyline points="20 6 9 17 4 12"></polyline></svg></span></td>
                  <td class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-700"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Ready to pickup</span><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info ms-1" style="height:12.8px;width:12.8px;"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span></td>
                  <td class="delivery_type align-middle white-space-nowrap text-900 fs--1 text-start">Local pickup</td>
                  <td class="date align-middle white-space-nowrap text-700 fs--1 ps-4 text-end">Nov 09, 8:49 AM</td>
                </tr></tbody>
            </table>
          </div>
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
    <footer class="footer position-absolute">
      <div class="row g-0 justify-content-between align-items-center h-100">
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none">2023 ©<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
        </div>
        <div class="col-12 col-sm-auto text-center">
          <p class="mb-0 text-600">v1.11.0</p>
        </div>
      </div>
    </footer>
  </div>
@endsection
