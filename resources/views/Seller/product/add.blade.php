@extends('layouts.SellerDashboard')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Add Product Page</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/seller/home">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="">Product</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="form-layout.html#">Add Product</a>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Horizontal form layout section start -->


<!-- Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Product Details</h4>
        </div>
        <div class="card-body">
          <form class="form" action="/seller/product/submit" method="post"  enctype="multipart/form-data">
          @csrf
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="first-name-column">Product Name</label>
                  <input
                    type="text"
                    id="first-name-column"
                    class="form-control"
                    placeholder="Enter Name"
                    name="productname"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="last-name-column">Product Category</label>
                  <select name="productcat"  id="last-name-column"
                    class="form-control">
                    <option value="Wheat">Wheat</option>
                                        <option value="Rice">Rice</option>
                                        <option value="Ragi">Ragi</option>
                                        <option value="Barley">Barley</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12 col-12">
                <div class="form-group">
                  <label for="city-column">Product Details</label>
                  <textarea id="city-column" class="form-control" placeholder="City" name="productdetails"> </textarea>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="country-floating">Product Price</label>
                  <input
                    type="text"
                    id="country-floating"
                    class="form-control"
                    name="productprice"
                    placeholder="Enter Price"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="company-column">Product Qty</label>
                  <input
                    type="text"
                    id="company-column"
                    class="form-control"
                    name="productqty"
                    placeholder="Enter Qty"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="email-id-column">Select Unit</label>
                  <select name="productunit" class="form-control">
                    <option value="tonne">Tonne</option>
                    <option value="kilogram">KiloGram (KG)</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="email-id-column">Product Image</label>
                  <input
                    type="file"
                    id="email-id-column"
                    class="form-control"
                    name="productimg"
                    placeholder="Email"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary mr-1">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Floating Label Form section end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->
@endsection