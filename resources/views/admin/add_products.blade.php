<!DOCTYPE html>


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
                {{-- @include('admin.bodycontent'); --}}
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add/</span> Products</h4>

                    <div class="row">
                        <div class="col-xl">
                          <div class="card mb-4">

                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    <button class="close" type="button" data-dismiss="alert">
                                        X
                                    </button>
                                    {{ session()->get('message') }}
                                </div>
                            @endif


                            <div class="card-header d-flex justify-content-between align-items-center">
                              <h5 class="mb-0">Fill the following Field to add</h5>
                              {{-- <small class="text-muted float-end">Default label</small> --}}
                            </div>
                            <div class="card-body">
                                <form action="{{url('/add_products')}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-prodectname"> Product Name</label>
                                            <input type="text" class="form-control" id="basic-default-productname" placeholder="Product Name" name="name" required=""/>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-description"> Product Description</label>
                                            <input type="text" class="form-control" id="basic-default-description" placeholder="Product Name" name="description"required="" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-imaga"> Product Image</label>
                                            <input type="file"  name="file" required=""/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-category"> Product Category</label>
                                            <select name="category" required="" style="color: black">
                                                <option value="" selected="">Select Category</option>
                                                @foreach ($data as $categories)
                                                    <option>{{$categories->category_name}}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-quantity"> Product Quantity</label>
                                            <input type="number" class="form-control" id="basic-default-quantity" placeholder="Product Quantity" name="quantity" required="" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-price"> Product Price</label>
                                            <input type="number" class="form-control" id="basic-default-price" placeholder="Product Price" name="price" required="" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname-discountprice"> Discount Price</label>
                                            <input type="text" class="form-control" id="basic-default-fullname-discountprice" placeholder="Discount Price" required="" name="discount_price" />
                                        </div>

                                        <button type="submit" class="btn btn-primary" style="color: black">Add Product</button>
                                </form>
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

