@extends('layouts.admin')

@section('content')
     <!-- BEGIN: Content-->
     <div class="app-content content ecommerce-application">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Product Details</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="app-ecommerce-details.html#">eCommerce</a>
                    </li>
                    <li class="breadcrumb-item"><a href="app-ecommerce-shop.html">Shop</a>
                    </li>
                    <li class="breadcrumb-item active">Details
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
              <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- app e-commerce details start -->
<section class="app-ecommerce-details">
  <div class="card">
    <!-- Product Details starts -->
    <div class="card-body">
      <div class="row my-2">
        <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
          <div class="d-flex align-items-center justify-content-center">
            <img
              src="../../../Product-img/{{$product[0]->productimg}}"
              class="img-fluid product-img"
              alt="product image"
            />
          </div>
        </div>
        <div class="col-12 col-md-7">
          <h4>{{$product[0]->productname}}</h4>
          <span class="card-text item-company">{{$product[0]->productcat}}<a href="javascript:void(0)" class="company-name">From India</a></span>
          <div class="ecommerce-details-price d-flex flex-wrap mt-1">
            <h4 class="item-price mr-1">₹{{$product[0]->productprice}}/{{$product[0]->productqty}}-{{$product[0]->productunit}}</h4>
          </div>
          <p class="card-text">Status - <span class="text-success">{{$product[0]->productstatus}}</span></p>
          <p class="card-text">
            {{$product[0]->productdetails}}
          </p>
          <hr />
          <div class="d-flex flex-column flex-sm-row pt-1">
            @if($product[0]->productstatus == "Approved")

            
            @else
                <a href="javascript:void(0)" href="/admin/product/approve/{{ $p->productid }}" class="btn btn-success btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0">
                <span class="add-to-cart">Approve</span>
                </a>
            @endif
            <form action="/admin/product/delete/{{ $product[0]->productid }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger waves-effect waves-float waves-light">Delete</button>
                         
                          </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Product Details ends -->
  </div>
</section>
<!-- app e-commerce details end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->
@endsection