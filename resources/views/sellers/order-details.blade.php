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
      <h2 class="mb-0">Order <span>#349</span></h2>
      <div class="d-flex flex-wrap flex-between-center mb-1">
        <p class="text-800 lh-sm mb-0">Customer ID : <a class="fw-bold" href="#!"> 2364847</a></p>
        <div class="d-flex"><button class="btn pe-3 ps-0 text-900"><svg class="svg-inline--fa fa-print me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192H64C28.65 192 0 220.7 0 256v96c0 17.67 14.33 32 32 32h32v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h32c17.67 0 32-14.33 32-32V256C512 220.7 483.3 192 448 192zM384 448H128v-96h256V448zM432 296c-13.25 0-24-10.75-24-24c0-13.27 10.75-24 24-24s24 10.73 24 24C456 285.3 445.3 296 432 296zM128 64h229.5L384 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C387.4 3.375 379.2 0 370.8 0H96C78.34 0 64 14.33 64 32v128h64V64z"></path></svg><!-- <span class="fas fa-print me-2"></span> Font Awesome fontawesome.com -->Print</button><button class="btn px-3 text-900"><svg class="svg-inline--fa fa-arrow-rotate-left me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-rotate-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M480 256c0 123.4-100.5 223.9-223.9 223.9c-48.86 0-95.19-15.58-134.2-44.86c-14.14-10.59-17-30.66-6.391-44.81c10.61-14.09 30.69-16.97 44.8-6.375c27.84 20.91 61 31.94 95.89 31.94C344.3 415.8 416 344.1 416 256s-71.67-159.8-159.8-159.8C205.9 96.22 158.6 120.3 128.6 160H192c17.67 0 32 14.31 32 32S209.7 224 192 224H48c-17.67 0-32-14.31-32-32V48c0-17.69 14.33-32 32-32s32 14.31 32 32v70.23C122.1 64.58 186.1 32.11 256.1 32.11C379.5 32.11 480 132.6 480 256z"></path></svg><!-- <span class="fas fa-undo me-2"></span> Font Awesome fontawesome.com -->Refund</button>
          <div class="dropdown"><button class="btn text-900 dropdown-toggle dropdown-caret-none ps-3 pe-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">More action<svg class="svg-inline--fa fa-chevron-down ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"></path></svg><!-- <span class="fas fa-chevron-down ms-2"></span> Font Awesome fontawesome.com --></button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row g-5 gy-7">
        <div class="col-12 col-xl-8 col-xxl-9">
          <div id="orderTable" data-list="{&quot;valueNames&quot;:[&quot;products&quot;,&quot;color&quot;,&quot;size&quot;,&quot;price&quot;,&quot;quantity&quot;,&quot;total&quot;],&quot;page&quot;:10}">
            <div class="table-responsive scrollbar">
              <table class="table fs--1 mb-0 border-top border-200">
                <thead>
                  <tr>
                    <th class="sort white-space-nowrap align-middle fs--2" scope="col"></th>
                    <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:400px;" data-sort="products">PRODUCTS</th>
                    <th class="sort align-middle ps-4" scope="col" data-sort="color" style="width:150px;">COLOR</th>
                    <th class="sort align-middle ps-4" scope="col" data-sort="size" style="width:300px;">SIZE</th>
                    <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">PRICE</th>
                    <th class="sort align-middle text-end ps-4" scope="col" data-sort="quantity" style="width:200px;">QUANTITY</th>
                    <th class="sort align-middle text-end ps-4" scope="col" data-sort="total" style="width:250px;">TOTAL</th>
                  </tr>
                </thead>
                <tbody class="list" id="order-table-body"><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap py-2">
                      <div class="border rounded-2"><img src="../../../assets/img//products/1.png" alt="" width="53"></div>
                    </td>
                    <td class="products align-middle py-0"><a class="fw-semi-bold line-clamp-2 mb-0" href="#!">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                    <td class="color align-middle white-space-nowrap text-900 py-0 ps-4">Pure matte black</td>
                    <td class="size align-middle white-space-nowrap text-700 fw-semi-bold py-0 ps-4">42</td>
                    <td class="price align-middle text-900 fw-semi-bold text-end py-0 ps-4">$57</td>
                    <td class="quantity align-middle text-end py-0 ps-4 text-700">4</td>
                    <td class="total align-middle fw-bold text-1000 text-end py-0 ps-4">$228</td>
                  </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap py-2">
                      <div class="border rounded-2"><img src="../../../assets/img//products/2.png" alt="" width="53"></div>
                    </td>
                    <td class="products align-middle py-0"><a class="fw-semi-bold line-clamp-2 mb-0" href="#!">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                    <td class="color align-middle white-space-nowrap text-900 py-0 ps-4">Glossy black</td>
                    <td class="size align-middle white-space-nowrap text-700 fw-semi-bold py-0 ps-4">XL</td>
                    <td class="price align-middle text-900 fw-semi-bold text-end py-0 ps-4">$199</td>
                    <td class="quantity align-middle text-end py-0 ps-4 text-700">2</td>
                    <td class="total align-middle fw-bold text-1000 text-end py-0 ps-4">$398</td>
                  </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap py-2">
                      <div class="border rounded-2"><img src="../../../assets/img//products/3.png" alt="" width="53"></div>
                    </td>
                    <td class="products align-middle py-0"><a class="fw-semi-bold line-clamp-2 mb-0" href="#!">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                    <td class="color align-middle white-space-nowrap text-900 py-0 ps-4">Glossy black</td>
                    <td class="size align-middle white-space-nowrap text-700 fw-semi-bold py-0 ps-4">L</td>
                    <td class="price align-middle text-900 fw-semi-bold text-end py-0 ps-4">$600</td>
                    <td class="quantity align-middle text-end py-0 ps-4 text-700">1</td>
                    <td class="total align-middle fw-bold text-1000 text-end py-0 ps-4">$600</td>
                  </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap py-2">
                      <div class="border rounded-2"><img src="../../../assets/img//products/4.png" alt="" width="53"></div>
                    </td>
                    <td class="products align-middle py-0"><a class="fw-semi-bold line-clamp-2 mb-0" href="#!">Apple iMac 24" 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</a></td>
                    <td class="color align-middle white-space-nowrap text-900 py-0 ps-4">Gray</td>
                    <td class="size align-middle white-space-nowrap text-700 fw-semi-bold py-0 ps-4">22</td>
                    <td class="price align-middle text-900 fw-semi-bold text-end py-0 ps-4">$250</td>
                    <td class="quantity align-middle text-end py-0 ps-4 text-700">2</td>
                    <td class="total align-middle fw-bold text-1000 text-end py-0 ps-4">$500</td>
                  </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap py-2">
                      <div class="border rounded-2"><img src="../../../assets/img//products/5.png" alt="" width="53"></div>
                    </td>
                    <td class="products align-middle py-0"><a class="fw-semi-bold line-clamp-2 mb-0" href="#!">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</a></td>
                    <td class="color align-middle white-space-nowrap text-900 py-0 ps-4">Black</td>
                    <td class="size align-middle white-space-nowrap text-700 fw-semi-bold py-0 ps-4">L</td>
                    <td class="price align-middle text-900 fw-semi-bold text-end py-0 ps-4">$49</td>
                    <td class="quantity align-middle text-end py-0 ps-4 text-700">3</td>
                    <td class="total align-middle fw-bold text-1000 text-end py-0 ps-4">$147</td>
                  </tr><tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap py-2">
                      <div class="border rounded-2"><img src="../../../assets/img//products/6.png" alt="" width="53"></div>
                    </td>
                    <td class="products align-middle py-0"><a class="fw-semi-bold line-clamp-2 mb-0" href="#!">PlayStation 5 DualSense Wireless Controller</a></td>
                    <td class="color align-middle white-space-nowrap text-900 py-0 ps-4">Green Golden</td>
                    <td class="size align-middle white-space-nowrap text-700 fw-semi-bold py-0 ps-4">Regular</td>
                    <td class="price align-middle text-900 fw-semi-bold text-end py-0 ps-4">$65</td>
                    <td class="quantity align-middle text-end py-0 ps-4 text-700">2</td>
                    <td class="total align-middle fw-bold text-1000 text-end py-0 ps-4">$130</td>
                  </tr></tbody>
              </table>
            </div>
          </div>
          <div class="d-flex flex-between-center py-3 border-bottom mb-7">
            <p class="text-1100 fw-semi-bold lh-sm mb-0">Items subtotal :</p>
            <p class="text-1100 fw-bold lh-sm mb-0">$1690</p>
          </div>
          <div class="row gx-4 gy-6 g-xl-7 justify-content-sm-center justify-content-xl-start">
            <div class="col-12 col-sm-auto">
              <h4 class="mb-5">Billing details</h4>
              <div class="row g-4 flex-sm-column">
                <div class="col-6 col-sm-12">
                  <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-2" style="stroke-width:2.5;"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    <h6 class="mb-0">Customer</h6>
                  </div><a class="fs--1 ms-4" href="#!">Shatinon Mekalan</a>
                </div>
                <div class="col-6 col-sm-12">
                  <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-2" style="stroke-width:2.5;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <h6 class="mb-0">Email</h6>
                  </div><a class="fs--1 ms-4" href="mailto:shatinon@jeemail.com:">shatinon@jeemail.com</a>
                </div>
                <div class="col-6 col-sm-12 order-sm-1">
                  <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home me-2" style="stroke-width:2.5;"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="ms-4">
                    <p class="text-800 mb-0 fs--1">Shatinon Mekalan</p>
                    <p class="text-800 mb-0 fs--1">Vancouver, British Columbia,<br class="d-none d-sm-block">Canada</p>
                  </div>
                </div>
                <div class="col-6 col-sm-12">
                  <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone me-2" style="stroke-width:2.5;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <h6 class="mb-0">Phone</h6>
                  </div><a class="fs--1 ms-4" href="tel:+1234567890">+1234567890</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-auto">
              <h4 class="mb-5">Shipping details</h4>
              <div class="row g-4 flex-sm-column">
                <div class="col-6 col-sm-12">
                  <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-2" style="stroke-width:2.5;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <h6 class="mb-0">Email</h6>
                  </div><a class="fs--1 ms-4" href="mailto:shatinon@jeemail.com:">shatinon@jeemail.com</a>
                </div>
                <div class="col-6 col-sm-12">
                  <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone me-2" style="stroke-width:2.5;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <h6 class="mb-0">Phone</h6>
                  </div><a class="fs--1 ms-4" href="tel:+1234567890">+1234567890</a>
                </div>
                <div class="col-6 col-sm-12 order-sm-1">
                  <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home me-2" style="stroke-width:2.5;"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="ms-4">
                    <p class="text-800 mb-0 fs--1">Shatinon Mekalan</p>
                    <p class="text-800 mb-0 fs--1">Vancouver, British Columbia <br>Canada</p>
                  </div>
                </div>
                <div class="col-6 col-sm-12">
                  <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar me-2" style="stroke-width:2.5;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    <h6 class="mb-0">Shipping Date</h6>
                  </div>
                  <p class="mb-0 text-800 fs--1 ms-4">12 Nov, 2021</p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-auto">
              <h4 class="mb-5">Other details</h4>
              <div class="row g-4 flex-sm-column">
                <div class="col-6 col-sm-12">
                  <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag me-2" style="stroke-width:2.5;"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    <h6 class="mb-0">Gift order</h6>
                  </div><a class="mb-0 text-800 fs--1 ms-4">Yes</a>
                </div>
                <div class="col-6 col-sm-12">
                  <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package me-2" style="stroke-width:2.5;"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    <h6 class="mb-0">Wraping</h6>
                  </div>
                  <p class="mb-0 text-800 fs--1 ms-4">Magic wrapper</p>
                </div>
                <div class="col-6 col-sm-12">
                  <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text me-2" style="stroke-width:2.5;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    <h6 class="mb-0">Recipient</h6>
                  </div>
                  <p class="mb-0 text-800 fs--1 ms-4">Monjito Shiniga</p>
                </div>
                <div class="col-6 col-sm-12">
                  <div class="d-flex align-items-center mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail me-2" style="stroke-width:2.5;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <h6 class="mb-0">Gift Meaasge</h6>
                  </div>
                  <div class="ms-4">
                    <p class="text-800 fs--1 mb-0">Happy Birthday Shiniga <br>Lots of Love Buga Buga!!</p>
                    <p class="mb-0 text-800 fs--1">Yours, <br>Mekalan</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 col-xxl-3">
          <div class="row">
            <div class="col-12">
              <div class="card mb-3">
                <div class="card-body">
                  <h3 class="card-title mb-4">Summary</h3>
                  <div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Items subtotal :</p>
                      <p class="text-1100 fw-semi-bold">$691</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Discount :</p>
                      <p class="text-danger fw-semi-bold">-$59</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Tax :</p>
                      <p class="text-1100 fw-semi-bold">$126.20</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Subtotal :</p>
                      <p class="text-1100 fw-semi-bold">$665</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Shipping Cost :</p>
                      <p class="text-1100 fw-semi-bold">$30</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between border-top border-dashed pt-4">
                    <h4 class="mb-0">Total :</h4>
                    <h4 class="mb-0">$695.20</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title mb-4">Order Status</h3>
                  <h6 class="mb-2">Payment status</h6><select class="form-select mb-4" aria-label="delivery type">
                    <option value="cod">Processing</option>
                    <option value="card">Canceled</option>
                    <option value="paypal">Completed</option>
                  </select>
                  <h6 class="mb-2">Fulfillment status</h6><select class="form-select" aria-label="delivery type">
                    <option value="cod">Unfulfilled</option>
                    <option value="card">Fulfilled</option>
                    <option value="paypal">Pending</option>
                  </select>
                </div>
              </div>
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
