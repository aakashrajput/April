@extends('layouts.admin')

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
                <h2 class="content-header-title float-left mb-0">Products Approval Lists</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/home">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Products
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
        <div class="content-body"><!-- Basic Tables start -->
<div class="row" id="basic-table">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Listed Products Lists for Approval</h4>
      </div>
      
      @if (session('status'))
      <div class="alert alert-success" role="alert">
      <div class="alert-body">
        <strong>Info:</strong>  {{ session('status') }}&nbsp;
        
      </div>
      </div>
      @endif
      <div class="table-responsive">
      
      @if($product)
        <table class="table">
          <thead>
            <tr>
              <th>Product Image</th>
              <th>Product Name</th>
              <th>Product Reference ID</th>
              <th>Product Category</th>
              <th>Product Price</th>
              <th>Product Qty</th>
              <th>Added On</th>
              <th>Product Status</th>
              <th>Approve</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          @foreach($product as $p)
            <tr>
              <td>
              <a href=""><img src="../../Product-img/{{$p->productimg}}" class="mr-75" height="50" width="50" ></a>
              </td>
              <td>
              <a href="/admin/product/{{$p->productid}}">{{$p->productname}}</a>
              </td>
              <td><a href="/admin/product/{{$p->productid}}">
                {{$p->productid}}</a>
              </td>
              <td>
              {{$p->productcat}}
              </td>
              <td>₹{{$p->productprice}}</td>
              <td>{{$p->productqty}}&nbsp;{{$p->productunit}}</td>
              <td>{{$p->created_at}}</td>
              <td>
              <span class="badge badge-pill badge-light-primary mr-1">{{$p->productstatus}}</span>
              </td>
              <td>
                          <a href="/admin/product/approve/{{ $p->productid }}" type="button" class="btn btn-success">
                                  Approve
                          </a>
              </td>
              <td>
                          <form action="/admin/product/delete/{{ $p->productid }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger waves-effect waves-float waves-light">Delete</button>
                          </a>
                          </form>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        @else
          <center><h2>No Product for Approval Available in System.</h2></center>
          @endif
      </div>
    </div>
  </div>
</div>
<!-- Basic Tables end -->

<!-- Table head options end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    @endsection