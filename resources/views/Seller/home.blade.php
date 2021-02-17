@extends('layouts.SellerMain')

@section('content')

<!DOCTYPE html>
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">

 
    <!-- BEGIN: Content-->
    <div class="app-content content " style="margin-left:0px;">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
    <h4 class="mb-2">Seller Account</h4>
    <div class="alert alert-danger" role="alert">
      <div class="alert-body">
        <strong>Info:</strong> Your Seller Acount is Not Active Now&nbsp;
      </div>
      </div>
      <div class="content-wrapper">
      
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Seller Information Portal</h2>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
              
            </div>
          </div>
        </div>
        <div class="content-body">
            <!-- Vertical Wizard -->
            <section class="vertical-wizard">
                <div class="bs-stepper vertical vertical-wizard-example">
                    <div class="bs-stepper-header">
                    <div class="step" data-target="#account-details-vertical">
                        <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">1</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Account Details</span>
                            <span class="bs-stepper-subtitle">Setup Account Details</span>
                        </span>
                        </button>
                    </div>
                    <div class="step" data-target="#address-step-vertical">
                        <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">2</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Address</span>
                            <span class="bs-stepper-subtitle">Add Address</span>
                        </span>
                        </button>
                    </div>
                    <div class="step" data-target="#social-links-vertical">
                        <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">3</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Gov ID's</span>
                            <span class="bs-stepper-subtitle">Add Gov ID's</span>
                        </span>
                        </button>
                    </div>
                    <div class="step" data-target="#document-links-vertical">
                        <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">4</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Require Documents</span>
                            <span class="bs-stepper-subtitle">Upload Documents</span>
                        </span>
                        </button>
                    </div>
                    </div>
                    <div class="bs-stepper-content">
                    <div id="account-details-vertical" class="content">
                        <div class="content-header">
                        <h5 class="mb-0">Seller Account Details</h5>
                        <small class="text-muted">Enter Your Account Details.</small>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="vertical-username">Username</label>
                            <input type="text" id="vertical-username" class="form-control" placeholder="johndoe" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="vertical-email">Email</label>
                            <input
                            type="email"
                            id="vertical-email"
                            class="form-control"
                            placeholder="john.doe@email.com"
                            aria-label="john.doe"
                            />
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group form-password-toggle col-md-6">
                            <label class="form-label" for="vertical-password">Full Name</label>
                            <input
                            type="Text"
                            id="vertical-name"
                            class="form-control"
                            placeholder="Ram Lal"
                            />
                        </div>
                        <div class="form-group form-password-toggle col-md-6">
                            <label class="form-label" for="vertical-password">Initial Product Category</label>
                            <select class="form-control" name="" id="">
                                <option value="Wheat">Wheat</option>
                                <option value="Rice">Rice</option>
                                <option value="Ragi">Ragi</option>
                                <option value="Barley">Barley</option>
                            </select>
                        </div>
                        <div class="form-group form-password-toggle col-md-6">
                            <label class="form-label" for="vertical-confirm-password">Phone No</label>
                            <input
                            type="number"
                            id="vertical-confirm-password"
                            class="form-control"
                            placeholder="+91"
                            />
                        </div>
                        <div class="form-group form-password-toggle col-md-6">
                            <label class="form-label" for="vertical-confirm-password">Alternate Phone No</label>
                            <input
                            type="number"
                            id="vertical-confirm-password"
                            class="form-control"
                            placeholder="+91"
                            />
                        </div>
                        </div>
                        <div class="d-flex justify-content-between">
                        <button class="btn btn-outline-secondary btn-prev" disabled>
                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                        </button>
                        </div>
                    </div>
                    <div id="address-step-vertical" class="content">
                        <div class="content-header">
                        <h5 class="mb-0">Address</h5>
                        <small>Enter Your Address.</small>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="vertical-address">Address</label>
                            <input
                            type="text"
                            id="vertical-address"
                            class="form-control"
                            placeholder="98  Borough bridge Road, Birmingham"
                            />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="vertical-landmark">Landmark</label>
                            <input type="text" id="vertical-landmark" class="form-control" placeholder="Borough bridge" />
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="pincode2">Pincode</label>
                            <input type="text" id="pincode2" class="form-control" placeholder="658921" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="city2">City</label>
                            <input type="text" id="city2" class="form-control" placeholder="Birmingham" />
                        </div>
                        </div>
                        <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                        </button>
                        </div>
                    </div>
                    <div id="social-links-vertical" class="content">
                        <div class="content-header">
                        <h5 class="mb-0">Gov ID's</h5>
                        <small>Enter Your Goverment ID's Number.</small>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="vertical-twitter">Adhar Card</label>
                            <input type="text" id="vertical-twitter" class="form-control" placeholder="xxxx-xxxx-xxxx" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="vertical-facebook">Pan Card</label>
                            <input type="text" id="vertical-facebook" class="form-control" placeholder="xxxxxx" />
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="vertical-google">Voter ID</label>
                            <input type="text" id="vertical-google" class="form-control" placeholder="xxxxxx" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="vertical-linkedin">Driving License</label>
                            <input type="text" id="vertical-linkedin" class="form-control" placeholder="xxxxxx" />
                        </div>
                        </div>
                        <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none">Next</span>
                            <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                        </button>
                        </div>
                    </div>
                    <div id="document-links-vertical" class="content">
                        <div class="content-header">
                        <h5 class="mb-0">Required Documents</h5>
                        <small>Upload Your Required Documents</small>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="vertical-twitter">Upload File</label>
                            <input type="file" id="vertical-twitter" class="form-control" placeholder="test" />
                        </div>
                        </div>
                        <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-prev">
                            <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button class="btn btn-success btn-submit">Submit</button>
                        </div>
                    </div>
                    </div>
                </div>
            </section>

            <!--section class="horizontal-wizard">
                <div class="bs-stepper horizontal-wizard-example linear">
                    <div class="bs-stepper-header">
                        <div class="step active" data-target="#account-details">
                            <button type="button" class="step-trigger" aria-selected="true">
                                <span class="bs-stepper-box">1</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Account Details</span>
                                    <span class="bs-stepper-subtitle">Setup Account Details</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right font-medium-2">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                        <div class="step" data-target="#personal-info">
                            <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                                <span class="bs-stepper-box">2</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Personal Info</span>
                                    <span class="bs-stepper-subtitle">Add Personal Info</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right font-medium-2">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                        <div class="step" data-target="#address-step">
                            <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                                <span class="bs-stepper-box">3</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Address</span>
                                    <span class="bs-stepper-subtitle">Add Address</span>
                                </span>
                            </button>
                        </div>
                        <div class="line">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right font-medium-2">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                        <div class="step" data-target="#social-links">
                            <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                                <span class="bs-stepper-box">4</span>
                                <span class="bs-stepper-label">
                                    <span class="bs-stepper-title">Social Links</span>
                                    <span class="bs-stepper-subtitle">Add Social Links</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <div id="account-details" class="content active dstepper-block">
                            <div class="content-header">
                                <h5 class="mb-0">Account Details</h5>
                                <small class="text-muted">Enter Your Account Details.</small>
                            </div>
                            <form novalidate="novalidate">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" name="username" id="username" class="form-control error" placeholder="johndoe" aria-describedby="username-error"><span id="username-error" class="error">This field is required.</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control error" placeholder="john.doe@email.com" aria-label="john.doe" aria-describedby="email-error"><span id="email-error" class="error">This field is required.</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group form-password-toggle col-md-6">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control error" placeholder="············" aria-describedby="password-error"><span id="password-error" class="error">This field is required.</span>
                                    </div>
                                    <div class="form-group form-password-toggle col-md-6">
                                        <label class="form-label" for="confirm-password">Confirm Password</label>
                                        <input type="password" name="confirm-password" id="confirm-password" class="form-control error" placeholder="············" aria-describedby="confirm-password-error"><span id="confirm-password-error" class="error">This field is required.</span>
                                    </div>
                                </div>
                            </form>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-secondary btn-prev waves-effect" disabled="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left align-middle mr-sm-25 mr-0">
                                        <line x1="19" y1="12" x2="5" y2="12"></line>
                                        <polyline points="12 19 5 12 12 5"></polyline>
                                    </svg>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next waves-effect waves-float waves-light">
                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right align-middle ml-sm-25 ml-0">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div id="personal-info" class="content">
                            <div class="content-header">
                                <h5 class="mb-0">Personal Info</h5>
                                <small>Enter Your Personal Info.</small>
                            </div>
                            <form novalidate="novalidate">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="first-name">First Name</label>
                                        <input type="text" name="first-name" id="first-name" class="form-control" placeholder="John">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="last-name">Last Name</label>
                                        <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Doe">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="country">Country</label>
                                        <div class="position-relative"><select class="select2 w-100 select2-hidden-accessible" name="country" id="country" data-select2-id="country" tabindex="-1" aria-hidden="true">
                                                <option label=" " data-select2-id="2"></option>
                                                <option>UK</option>
                                                <option>USA</option>
                                                <option>Spain</option>
                                                <option>France</option>
                                                <option>Italy</option>
                                                <option>Australia</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-container"><span class="select2-selection__rendered" id="select2-country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="language">Language</label>
                                        <div class="position-relative"><select class="select2 w-100 select2-hidden-accessible" name="language" id="language" multiple="" data-select2-id="language" tabindex="-1" aria-hidden="true">
                                                <option>English</option>
                                                <option>French</option>
                                                <option>Spanish</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                        <ul class="select2-selection__rendered">
                                                            <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select value" style="width: 0px;"></li>
                                                        </ul>
                                                    </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                    </div>
                                </div>
                            </form>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev waves-effect waves-float waves-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left align-middle mr-sm-25 mr-0">
                                        <line x1="19" y1="12" x2="5" y2="12"></line>
                                        <polyline points="12 19 5 12 12 5"></polyline>
                                    </svg>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next waves-effect waves-float waves-light">
                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right align-middle ml-sm-25 ml-0">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div id="address-step" class="content">
                            <div class="content-header">
                                <h5 class="mb-0">Address</h5>
                                <small>Enter Your Address.</small>
                            </div>
                            <form novalidate="novalidate">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="address">Address</label>
                                        <input type="text" id="address" name="address" class="form-control" placeholder="98  Borough bridge Road, Birmingham">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="landmark">Landmark</label>
                                        <input type="text" name="landmark" id="landmark" class="form-control" placeholder="Borough bridge">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="pincode1">Pincode</label>
                                        <input type="text" id="pincode1" class="form-control" placeholder="658921">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="city1">City</label>
                                        <input type="text" id="city1" class="form-control" placeholder="Birmingham">
                                    </div>
                                </div>
                            </form>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev waves-effect waves-float waves-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left align-middle mr-sm-25 mr-0">
                                        <line x1="19" y1="12" x2="5" y2="12"></line>
                                        <polyline points="12 19 5 12 12 5"></polyline>
                                    </svg>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next waves-effect waves-float waves-light">
                                    <span class="align-middle d-sm-inline-block d-none">Next</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right align-middle ml-sm-25 ml-0">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div id="social-links" class="content">
                            <div class="content-header">
                                <h5 class="mb-0">Social Links</h5>
                                <small>Enter Your Social Links.</small>
                            </div>
                            <form novalidate="novalidate">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="twitter">Twitter</label>
                                        <input type="text" id="twitter" name="twitter" class="form-control" placeholder="https://twitter.com/abc">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="facebook">Facebook</label>
                                        <input type="text" id="facebook" name="facebook" class="form-control" placeholder="https://facebook.com/abc">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="google">Google+</label>
                                        <input type="text" id="google" name="google" class="form-control" placeholder="https://plus.google.com/abc">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="linkedin">Linkedin</label>
                                        <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder="https://linkedin.com/abc">
                                    </div>
                                </div>
                            </form>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-prev waves-effect waves-float waves-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left align-middle mr-sm-25 mr-0">
                                        <line x1="19" y1="12" x2="5" y2="12"></line>
                                        <polyline points="12 19 5 12 12 5"></polyline>
                                    </svg>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-success btn-submit waves-effect waves-float waves-light">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section-->
            <!-- /Vertical Wizard -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center" href="javascript:void(0);"><i class="spinner" data-feather="settings"></i></a><div class="customizer-content">
  <!-- Customizer header -->
  <div class="customizer-header px-2 pt-1 pb-0 position-relative">
    <h4 class="mb-0">Theme Customizer</h4>
    <p class="m-0">Customize & Preview in Real Time</p>

    <a class="customizer-close" href="javascript:void(0);"><i data-feather="x"></i></a>
  </div>

  <hr />

  <!-- Styling & Text Direction -->
  <div class="customizer-styling-direction px-2">
    <p class="font-weight-bold">Skin</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input
          type="radio"
          id="skinlight"
          name="skinradio"
          class="custom-control-input layout-name"
          checked
          data-layout=""
        />
        <label class="custom-control-label" for="skinlight">Light</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input
          type="radio"
          id="skinbordered"
          name="skinradio"
          class="custom-control-input layout-name"
          data-layout="bordered-layout"
        />
        <label class="custom-control-label" for="skinbordered">Bordered</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input
          type="radio"
          id="skindark"
          name="skinradio"
          class="custom-control-input layout-name"
          data-layout="dark-layout"
        />
        <label class="custom-control-label" for="skindark">Dark</label>
      </div>
      <div class="custom-control custom-radio">
        <input
          type="radio"
          id="skinsemidark"
          name="skinradio"
          class="custom-control-input layout-name"
          data-layout="semi-dark-layout"
        />
        <label class="custom-control-label" for="skinsemidark">Semi Dark</label>
      </div>
    </div>
  </div>

  <hr />

  <!-- Menu -->
  <div class="customizer-menu px-2">
    <div id="customizer-menu-collapsible" class="d-flex">
      <p class="font-weight-bold mr-auto m-0">Menu Collapsed</p>
      <div class="custom-control custom-control-primary custom-switch">
        <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch" />
        <label class="custom-control-label" for="collapse-sidebar-switch"></label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Layout Width -->
  <div class="customizer-footer px-2">
    <p class="font-weight-bold">Layout Width</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="layout-width-full" name="layoutWidth" class="custom-control-input" checked />
        <label class="custom-control-label" for="layout-width-full">Full Width</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="layout-width-boxed" name="layoutWidth" class="custom-control-input" />
        <label class="custom-control-label" for="layout-width-boxed">Boxed</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Navbar -->
  <div class="customizer-navbar px-2">
    <div id="customizer-navbar-colors">
      <p class="font-weight-bold">Navbar Color</p>
      <ul class="list-inline unstyled-list">
        <li class="color-box bg-white border selected" data-navbar-default=""></li>
        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
        <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
      </ul>
    </div>

    <p class="navbar-type-text font-weight-bold">Navbar Type</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="nav-type-floating" name="navType" class="custom-control-input" checked />
        <label class="custom-control-label" for="nav-type-floating">Floating</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="nav-type-sticky" name="navType" class="custom-control-input" />
        <label class="custom-control-label" for="nav-type-sticky">Sticky</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="nav-type-static" name="navType" class="custom-control-input" />
        <label class="custom-control-label" for="nav-type-static">Static</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="nav-type-hidden" name="navType" class="custom-control-input" />
        <label class="custom-control-label" for="nav-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
  <hr />

  <!-- Footer -->
  <div class="customizer-footer px-2">
    <p class="font-weight-bold">Footer Type</p>
    <div class="d-flex">
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="footer-type-sticky" name="footerType" class="custom-control-input" />
        <label class="custom-control-label" for="footer-type-sticky">Sticky</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="footer-type-static" name="footerType" class="custom-control-input" checked />
        <label class="custom-control-label" for="footer-type-static">Static</label>
      </div>
      <div class="custom-control custom-radio mr-1">
        <input type="radio" id="footer-type-hidden" name="footerType" class="custom-control-input" />
        <label class="custom-control-label" for="footer-type-hidden">Hidden</label>
      </div>
    </div>
  </div>
</div>

    </div>
    <!-- End: Customizer-->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2021<a class="ml-25" href="http://sourcewithapril.com" target="_blank">Source With April</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/forms/form-wizard.min.js"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
@endsection