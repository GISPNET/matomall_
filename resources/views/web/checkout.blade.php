@extends('web.layouts.app')
@section('titulo','Checkout')
@section('body')
    <main class="main" id="top">
        @component('web.components.top')
        @endcomponent

        @component('web.components.nav')
        @endcomponent

        <section class="pt-5 pb-9">
            <div class="container-small cart">
              <nav class="mb-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
                  <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
              <h2 class="mb-5">Check out</h2>
              <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">
                  <form>
                    <h3 class="mb-5">Shipping Info</h3>
                    <div class="row g-4">
                      <div class="col-12"><label class="form-label fs-0 text-1000 ps-0 text-none" for="inputName">Full name</label><input class="form-control" id="inputName" type="text" placeholder="Full name" /></div>
                      <div class="col-md-6"><label class="form-label fs-0 text-1000 ps-0 text-none" for="inputEmail">Email</label><input class="form-control" id="inputEmail" type="email" placeholder="Email" /></div>
                      <div class="col-md-6"><label class="form-label fs-0 text-1000 ps-0 text-none" for="inputPhone">Phone</label><input class="form-control" id="inputPhone" type="tel" placeholder="+1234567890" /></div>
                      <div class="col-12"><label class="form-label fs-0 text-1000 ps-0 text-none" for="inputAddress1">Address line 1</label><input class="form-control" id="inputAddress1" type="text" placeholder="Address line 1" /></div>
                      <div class="col-12"><label class="form-label fs-0 text-1000 ps-0 text-none" for="inputAddress2">Address line 2</label><input class="form-control" id="inputAddress2" type="text" placeholder="Address line 2" /></div>
                      <div class="col-md-4"><label class="form-label fs-0 text-1000 ps-0 text-none" for="inputCity">City</label><select class="form-select text-black" id="inputCity">
                          <option selected="selected">Van Nuys</option>
                          <option value="los-angeles">Los Angeles</option>
                          <option value="chicago">Chicago</option>
                          <option value="houston">Houston</option>
                        </select></div>
                      <div class="col-md-4"><label class="form-label fs-0 text-1000 ps-0 text-none" for="inputState">State</label><select class="form-select text-black" id="inputState">
                          <option selected="selected">California</option>
                          <option value="Alaska">Alaska</option>
                          <option value="alabama">Alabama</option>
                          <option value="florida">Florida</option>
                        </select></div>
                      <div class="col-md-4"><label class="form-label fs-0 text-1000 ps-0 text-none" for="inputZipCode">Zip code</label><input class="form-control number-arrows-none" id="inputZipCode" type="number" placeholder="Zip code" /></div>
                      <div class="col-md-4 mb-3"><label class="form-label fs-0 text-1000 ps-0 text-none" for="inputCountry">Country</label><select class="form-select text-black" id="inputCountry">
                          <option selected="selected">USA</option>
                          <option value="uk">UK</option>
                          <option value="aus">AUS</option>
                          <option value="nz">NZ</option>
                        </select></div>
                      <div class="col-12"><button class="btn btn-primary px-8 px-sm-11 me-2" type="submit">Save</button><button class="btn btn-phoenix-secondary text-nowrap" type="submit">Exit Without Saving</button></div>
                    </div>
                  </form>
                </div>
                <div class="col-lg-5 col-xl-4 offset-xl-1">
                  <div class="card mt-3 mt-lg-0">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Summary</h3><button class="btn btn-link pe-0" type="button">Edit cart</button>
                      </div>
                      <div class="border-dashed border-bottom mt-4">
                        <div class="mx-n2">
                          <div class="row align-items-center mb-2 g-3">
                            <div class="col-8 col-md-7 col-lg-8">
                              <div class="d-flex align-items-center"><img class="me-2 ms-1" src="../../../assets/img/products/1.png" width="40" alt="" />
                                <h6 class="fw-semi-bold text-1000 lh-base">Fitbit Sense Advanced Smartwatch with... </h6>
                              </div>
                            </div>
                            <div class="col-2 col-md-3 col-lg-2">
                              <h6 class="fs--2 mb-0">x1</h6>
                            </div>
                            <div class="col-2 ps-0">
                              <h5 class="mb-0 fw-semi-bold text-end text-lg-start">$398</h5>
                            </div>
                          </div>
                          <div class="row align-items-center mb-2 g-3">
                            <div class="col-8 col-md-7 col-lg-8">
                              <div class="d-flex align-items-center"><img class="me-2 ms-1" src="../../../assets/img/products/2.png" width="40" alt="" />
                                <h6 class="fw-semi-bold text-1000 lh-base">iPhone 13 pro max-Pacific Blue-128GB </h6>
                              </div>
                            </div>
                            <div class="col-2 col-md-3 col-lg-2">
                              <h6 class="fs--2 mb-0">x1</h6>
                            </div>
                            <div class="col-2 ps-0">
                              <h5 class="mb-0 fw-semi-bold text-end text-lg-start">$398</h5>
                            </div>
                          </div>
                          <div class="row align-items-center mb-5 g-3">
                            <div class="col-8 col-md-7 col-lg-8">
                              <div class="d-flex align-items-center"><img class="me-2 ms-1" src="../../../assets/img/products/3.png" width="40" alt="" />
                                <h6 class="fw-semi-bold text-1000 lh-base">Apple MacBook Pro 13 inch-M1-8/256GB</h6>
                              </div>
                            </div>
                            <div class="col-2 col-md-3 col-lg-2">
                              <h6 class="fs--2 mb-0">x1</h6>
                            </div>
                            <div class="col-2 ps-0">
                              <h5 class="mb-0 fw-semi-bold text-end text-lg-start">$65</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="border-dashed border-bottom mt-4">
                        <div class="d-flex justify-content-between mb-2">
                          <h5 class="text-900 fw-semi-bold">Items subtotal: </h5>
                          <h5 class="text-900 fw-semi-bold">$691</h5>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                          <h5 class="text-900 fw-semi-bold">Discount: </h5>
                          <h5 class="text-danger fw-semi-bold">-$59</h5>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                          <h5 class="text-900 fw-semi-bold">Tax: </h5>
                          <h5 class="text-900 fw-semi-bold">$126.20</h5>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                          <h5 class="text-900 fw-semi-bold">Subtotal </h5>
                          <h5 class="text-900 fw-semi-bold">$665</h5>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                          <h5 class="text-900 fw-semi-bold">Shipping Cost </h5>
                          <h5 class="text-900 fw-semi-bold">$30 </h5>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between border-dashed-y pt-3">
                        <h4 class="mb-0">Total :</h4>
                        <h4 class="mb-0">$695.20</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection



