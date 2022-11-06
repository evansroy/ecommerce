<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="admin/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    @include('admin.css');
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('admin.menuaside');
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

            @include('admin.navbar');

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button class="close" type="button" data-dismiss="alert">
                        X
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add/</span> Categories</h4>

                <!-- Basic Layout -->
                <div class="row">
                  <div class="col-xl">
                    <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Fill the following Field to add</h5>
                        {{-- <small class="text-muted float-end">Default label</small> --}}
                      </div>
                      <div class="card-body">
                        <form action="{{url('/add_category')}}" method="POST" >
                            @csrf
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Category Name</label>
                            <input type="text" class="form-control" id="basic-default-fullname" placeholder="Category" name="category" />
                          </div>

                          <button type="submit" class="btn btn-primary" style="color: black">Add</button>
                        </form>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

          </div>
            <!-- / Content -->

            <!-- Footer -->
           {{-- @include('admin.footer') --}}
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    @include('admin.js')
  </body>
</html>

