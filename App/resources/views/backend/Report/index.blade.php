@extends('backend.master')
@section('main')
<div class="page-breadcrumb border-bottom">
    <div class="row">
      <div
        class="
          col-lg-3 col-md-4 col-xs-12
          justify-content-start
          d-flex
          align-items-center
        "
      >
        <h5 class="font-weight-medium text-uppercase mb-0">
          Invoice List
        </h5>
      </div>
      <div
        class="
          col-lg-9 col-md-8 col-xs-12
          d-flex
          justify-content-start justify-content-md-end
          align-self-center
        "
      >
        <nav aria-label="breadcrumb" class="mt-2">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin/index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Invoice List
            </li>
          </ol>
        </nav>
        
      </div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <!-- -------------------------------------------------------------- -->
  <!-- Container fluid  -->
  <!-- -------------------------------------------------------------- -->
  <div class="container-fluid page-content">
    <!-- -------------------------------------------------------------- -->
    <!-- Start Page Content -->
    <!-- -------------------------------------------------------------- -->
    <!-- basic table -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Invoice List</h4>
            <h6 class="card-subtitle">
              In these invoice, with these below
              buttons(CSV,Copy,Excel,PDF,Print) you can save this content
              ad per requirments.
            </h6>
            <div class="table-responsive">
              {{-- <table id="file_export" class="table table-bordered"> --}}
              <table  class="table table-bordered">
                <thead>
                  <tr>
                    <th>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation1"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation1"
                        ></label>
                      </div>
                    </th>
                    <th>Setting</th>
                    <th>Date</th>
                    <th>Invoice</th>
                    <th>Order No</th>
                    <th>Customer Name</th>
                    <th>Due</th>
                    <th>Balance</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation2"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation2"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>11 March 2021</td>
                    <td>IWp-41</td>
                    <td>AONO-123456401</td>
                    <td>Nirav Joshi</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation3"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation3"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>12 March 2021</td>
                    <td>IWp-42</td>
                    <td>AONO-147852001</td>
                    <td>Sunil Joshi</td>
                    <td>2011/07/25</td>
                    <td>$320,800</td>
                    <td>$170,750</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation4"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation4"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>16 March 2021</td>
                    <td>IWp-43</td>
                    <td>AONO-190230145</td>
                    <td>Vishal Bhatt</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                    <td>$86,000</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation5"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation5"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>31 January 2021</td>
                    <td>IWp-44</td>
                    <td>AONO-123456401</td>
                    <td>Nirav Joshi</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                    <td>$433,060</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation6"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation6"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>01 August 2015</td>
                    <td>IWp-45</td>
                    <td>AONO-123456401</td>
                    <td>Uday Navapara</td>
                    <td>2008/12/13</td>
                    <td>$103,600</td>
                    <td>$103,600</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation7"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation7"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>17 March 2016</td>
                    <td>IWp-46</td>
                    <td>AONO-145789620</td>
                    <td>Vishal Bhatt</td>
                    <td>2008/12/19</td>
                    <td>$90,560</td>
                    <td>$90,560</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation8"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation8"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>31 January 2021</td>
                    <td>IWp-47</td>
                    <td>AONO-123456401</td>
                    <td>Sunil Joshi</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>$342,000</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation9"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation9"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>16 March 2021</td>
                    <td>IWp-48</td>
                    <td>AONO-190230145</td>
                    <td>Uday Navapara</td>
                    <td>2008/10/16</td>
                    <td>$470,600</td>
                    <td>$470,600</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation10"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation10"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>12 March 2021</td>
                    <td>IWp-49</td>
                    <td>AONO-145789620</td>
                    <td>Nirav Joshi</td>
                    <td>2012/12/18</td>
                    <td>$313,500</td>
                    <td>$313,500</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation11"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation11"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>31 January 2021</td>
                    <td>IWp-210</td>
                    <td>AONO-145789620</td>
                    <td>Vishal Bhatt</td>
                    <td>2010/03/17</td>
                    <td>$385,750</td>
                    <td>$385,750</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation12"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation12"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>16 March 2021</td>
                    <td>IWP-1121</td>
                    <td>AONO-145789620</td>
                    <td>Sunil Joshi</td>
                    <td>2012/11/27</td>
                    <td>$198,500</td>
                    <td>$198,500</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation13"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation13"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>12 March 2021</td>
                    <td>IWP-1120</td>
                    <td>AONO-120320145</td>
                    <td>Uday Navapara</td>
                    <td>2010/06/09</td>
                    <td>$725,000</td>
                    <td>$725,000</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation14"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation14"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>31 January 2021</td>
                    <td>IWP-1214</td>
                    <td>AONO-120320145</td>
                    <td>Nirav Joshi</td>
                    <td>2009/04/10</td>
                    <td>$237,500</td>
                    <td>$237,500</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation15"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation15"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>01 August 2015</td>
                    <td>IWP-1452</td>
                    <td>AONO-145789620</td>
                    <td>Vishal Bhatt</td>
                    <td>2012/10/13</td>
                    <td>$132,000</td>
                    <td>$132,000</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation16"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation16"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>17 March 2016</td>
                    <td>IWP-1250</td>
                    <td>AONO-123456401</td>
                    <td>Sunil Joshi</td>
                    <td>2012/09/26</td>
                    <td>$217,500</td>
                    <td>$217,500</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation17"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation17"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>16 March 2021</td>
                    <td>IWP-1430</td>
                    <td>AONO-120320145</td>
                    <td>Vishal Bhatt</td>
                    <td>2011/09/03</td>
                    <td>$345,000</td>
                    <td>$345,000</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation18"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation18"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>12 March 2021</td>
                    <td>IWP-1200</td>
                    <td>AONO-120320145</td>
                    <td>Ayaz Shekh</td>
                    <td>2009/06/25</td>
                    <td>$675,000</td>
                    <td>$675,000</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation19"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation19"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>31 January 2021</td>
                    <td>IWP-1452</td>
                    <td>AONO-120320145</td>
                    <td>Sunil Joshi</td>
                    <td>2011/12/12</td>
                    <td>$106,450</td>
                    <td>$106,450</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation20"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation20"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>01 August 2015</td>
                    <td>IWP-1420</td>
                    <td>AONO-147852030</td>
                    <td>Nirav Joshi</td>
                    <td>2010/09/20</td>
                    <td>$85,600</td>
                    <td>$85,600</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation21"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation21"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>12 March 2021</td>
                    <td>IWp-410</td>
                    <td>AONO-145789620</td>
                    <td>Uday Navapara</td>
                    <td>2009/10/09</td>
                    <td>$1,200,000</td>
                    <td>$1,200,000</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation22"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation22"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>31 January 2021</td>
                    <td>IWP-1230</td>
                    <td>AONO-123456401</td>
                    <td>Vishal Bhatt</td>
                    <td>2010/12/22</td>
                    <td>$92,575</td>
                    <td>$92,575</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation23"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation23"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>17 March 2016</td>
                    <td>IWp-220</td>
                    <td>AONO-140250369</td>
                    <td>Sunil Joshi</td>
                    <td>2010/11/14</td>
                    <td>$357,650</td>
                    <td>$357,650</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation24"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation24"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>16 March 2021</td>
                    <td>IWP-1200</td>
                    <td>AONO-190230145</td>
                    <td>Ayaz Shekh</td>
                    <td>2011/06/07</td>
                    <td>$206,850</td>
                    <td>$206,850</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation25"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation25"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>12 March 2021</td>
                    <td>IWP-1458</td>
                    <td>AONO-190230145</td>
                    <td>Vishal Bhatt</td>
                    <td>2010/03/11</td>
                    <td>$850,000</td>
                    <td>$850,000</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation26"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation26"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>31 January 2021</td>
                    <td>IWP-1457</td>
                    <td>AONO-147852001</td>
                    <td>Uday Navapara</td>
                    <td>2011/08/14</td>
                    <td>$163,000</td>
                    <td>$163,000</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation27"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation27"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>16 March 2021</td>
                    <td>IWP-4582</td>
                    <td>AONO-147852030</td>
                    <td>Nirav Joshi</td>
                    <td>2011/06/02</td>
                    <td>$95,400</td>
                    <td>$95,400</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation28"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation28"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>12 March 2021</td>
                    <td>IWP-1456</td>
                    <td>AONO-145789620</td>
                    <td>Ayaz Shekh</td>
                    <td>2009/10/22</td>
                    <td>$114,500</td>
                    <td>$114,500</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation29"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation29"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>31 January 2021</td>
                    <td>IWP-1230</td>
                    <td>AONO-145789620</td>
                    <td>Sunil Joshi</td>
                    <td>2011/05/07</td>
                    <td>$145,000</td>
                    <td>$145,000</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation30"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation30"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>01 August 2015</td>
                    <td>IWp-430</td>
                    <td>AONO-190230145</td>
                    <td>Uday Navapara</td>
                    <td>2008/10/26</td>
                    <td>$235,500</td>
                    <td>$235,500</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation31"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation31"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>12 March 2021</td>
                    <td>IWP-1200</td>
                    <td>AONO-123456401</td>
                    <td>Ayaz Shekh</td>
                    <td>2011/03/09</td>
                    <td>$324,050</td>
                    <td>$324,050</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation32"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation32"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>01 August 2015</td>
                    <td>IWP-1250</td>
                    <td>AONO-190230145</td>
                    <td>Vishal Bhatt</td>
                    <td>2009/12/09</td>
                    <td>$85,675</td>
                    <td>$85,675</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation33"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation33"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>16 March 2021</td>
                    <td>IWp-210</td>
                    <td>AONO-190230145</td>
                    <td>Sunil Joshi</td>
                    <td>2008/12/16</td>
                    <td>$164,500</td>
                    <td>$164,500</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation34"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation34"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>31 January 2021</td>
                    <td>IWP-1478</td>
                    <td>AONO-190230145</td>
                    <td>Vishal Bhatt</td>
                    <td>2010/02/12</td>
                    <td>$109,850</td>
                    <td>$109,850</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation35"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation35"
                        ></label>
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button
                          type="button"
                          class="
                            btn btn-light-primary
                            text-primary
                            dropdown-toggle
                          "
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="fas fa-cog"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="eye"
                              class="feather-sm me-2"
                            ></i>
                            Open</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="edit-2"
                              class="feather-sm me-2"
                            ></i>
                            Edit</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="trash-2"
                              class="feather-sm me-2"
                            ></i>
                            Delete</a
                          >
                          <a
                            class="dropdown-item"
                            href="javascript:void(0)"
                            ><i
                              data-feather="message-circle"
                              class="feather-sm me-2"
                            ></i>
                            Comments</a
                          >
                        </div>
                      </div>
                    </td>
                    <td>16 March 2021</td>
                    <td>IWP-1456</td>
                    <td>AONO-190230145</td>
                    <td>Nirav Joshi</td>
                    <td>2009/02/14</td>
                    <td>$452,500</td>
                    <td>$452,500</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th>
                      <div class="form-check">
                        <input
                          type="checkbox"
                          class="form-check-input"
                          id="customControlValidation35"
                          required
                        />
                        <label
                          class="form-check-label"
                          for="customControlValidation35"
                        ></label>
                      </div>
                    </th>
                    <th>Setting</th>
                    <th>Date</th>
                    <th>Invoice</th>
                    <th>Order No</th>
                    <th>Customer Name</th>
                    <th>Due</th>
                    <th>Balance</th>
                    <th>Amount</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End PAge Content -->
    <!-- -------------------------------------------------------------- -->
  </div>
@endsection