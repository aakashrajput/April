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
                <h2 class="content-header-title float-left mb-0">Seller Detail Page</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/home">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Seller Detail
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
        <div class="content-body">
        <div class="col-12">
            <div class="alert alert-primary" role="alert">
            <div class="alert-body">
                <strong>Info:</strong> Seller Detail with all the Document Uploded can be Seen Below.&nbsp;<a
                class="text-primary"
                href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/documentation-layout-empty.html"
                target="_blank"
                >Layout empty documentation</a
                >&nbsp; for more details.
            </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Details for Seller with Email: {{$data[0]->email}}, Seller Account Status: <span style="color:red; font-weight:bold;">{{$data2[0]->accountstatus}}</span></h4>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                    <li>
                        <a data-action="collapse"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                    </li>
                    <li>
                        <a data-action="reload"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg></a>
                    </li>
                    <!--li>
                        <a data-action="close"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>
                    </li-->
                    </ul>
                </div>
                </div>
                <div class="card-content collapse show">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                        <table class="table table-bordered">
                            <!--thead>
                            <tr>
                                <th>Action</th>
                                <th>Icon</th>
                                <th>Details</th>
                            </tr>
                            </thead-->
                            <tbody>
                            <tr>
                                <td style="background-color:#333; color:#fff">Full Name:</td>
                                <td>{{$data[0]->fullname}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Username:</td>
                                <td>{{$data[0]->username}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Email:</td>
                                <td>{{$data[0]->email}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Primary Product Category:</td>
                                <td>{{$data[0]->productCat}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Primary Phone No:</td>
                                <td>{{$data[0]->phone1}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Alternate Phone No:</td>
                                <td>{{$data[0]->phone2}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Address:</td>
                                <td>{{$data[0]->address}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">PinCode:</td>
                                <td>{{$data[0]->pincode}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">City:</td>
                                <td>{{$data[0]->city}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Landmark:</td>
                                <td>{{$data[0]->landmark}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Adhar Card No:</td>
                                <td>{{$data[0]->adharCard}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Pan Card No:</td>
                                <td>{{$data[0]->PanCard}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Voter ID No:</td>
                                <td>{{$data[0]->VoterID}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Driving Licence No:</td>
                                <td>{{$data[0]->drivingLicence}}</td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Adhar Card Front Image:</td>
                                <td><img src="../../DigitalLibrary/{{$data[0]->adharfront}}" style="width:250px;" alt=""></td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Adhar Card Back Image:</td>
                                <td><img src="../../DigitalLibrary/{{$data[0]->adharback}}" style="width:250px;" alt=""></td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Pan Card Image:</td>
                                <td><img src="../../DigitalLibrary/{{$data[0]->pancarddoc}}" style="width:250px;" alt=""></td>
                            </tr>
                            <tr>
                                <td style="background-color:#333; color:#fff">Created On:</td>
                                <td>{{$data[0]->created_at}}</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/admin/seller/approve/{{ $data[0]->email }}" type="button" class="btn btn-success">
                                            Approve
                                    </a>
                                </td>
                                <td>
                                            <form action="/admin/seller/delete/{{ $data[0]->email }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger waves-effect waves-float waves-light">Delete</button>
                                            </a>
                                            </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->


    @endsection