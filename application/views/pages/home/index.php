<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>CISshop</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">

    <!--Bootstap css-->
    <link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--Fontawesome-->
    <link href="/assets/libs/fontawesome/css/all.min.css" rel="stylesheet">

    <!--Costum style Css-->
    <link href="/assets/css/app.css" rel="stylesheet">
</head>
  <body>

        
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">CISshop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="dropdown-1" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">Manage</a>
                <div class="dropdown-menu" aria-labelledby="dropdown-1">
                    <a href="admin-category.html" class="dropdown-item">Kategori</a>
                    <a href="admin-product.html" class="dropdown-item">Product</a>
                    <a href="admin-order.html" class="dropdown-item">Order</a>
                    <a href="admin-users.html" class="dropdown-item">Pengguna</a>
                </div>
            </li>
          </ul>
          
          <ul class="navbar-nav">
            <li class="nav-item">
                <a href="cart.html" class="nav-link"><i class="fas fa-shopping-cart"></i>cart (0)</a>
            </li>

            <li class="nav-item">
                <a href="login.html" class="nav-link">login</a>
            </li>

            <li class="nav-item">
                <a href="register.html" class="nav-link">register</a>
            </li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">Manage</a>
                <div class="dropdown-menu" aria-labelledby="dropdown-2">
                    <a href="profile.html" class="dropdown-item">Profile</a>
                    <a href="orders.html" class="dropdown-item">Orders</a>
                    <a href="#" class="dropdown-item">Logout</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
    <main role="main" class="container">

    <?php $this->load->view ('layouts/_alert') ?>

        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-3">

                  <div class="card-body">
                    Kategori: <strong>Semua Kategori</strong>
                    <span class="float-right">
                      Urutkan Harga: <a href="#" class="badge badge-primary">Termurah</a> | <a href="#" class="badge badge-primary">Termahal</a>
                    </span>
                  </div>
                 
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="card mb-3">
                  <img src="http://placehold.co/100x70"  alt="" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text"><strong>Rp.100.000,</strong></p>
                    <p class="card-text">Some quick example text to Product card.</p>
                    <a href="#" class="badge badge-primary"><i class="fas fa-tags"></i>Category</a>
                  </div>

                  <div class="card-footer">
                    <form action="">
                      <div class="input-group">
                        <input type="number" class="form-control">
                        <div class="input-group-append">
                          <button class="btn btn-primary">Add to Cart</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="card mb-3">
                  <img src="http://placehold.co/100x70"  alt="" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text"><strong>Rp.100.000,</strong></p>
                    <p class="card-text">Some quick example text to Product card.</p>
                    <a href="#" class="badge badge-primary"><i class="fas fa-tags"></i>Category</a>
                  </div>

                  <div class="card-footer">
                    <form action="">
                      <div class="input-group">
                        <input type="number" class="form-control">
                        <div class="input-group-append">
                          <button class="btn btn-primary">Add to Cart</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="card mb-3">
                  <img src="http://placehold.co/100x70"  alt="" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text"><strong>Rp.100.000,</strong></p>
                    <p class="card-text">Some quick example text to Product card.</p>
                    <a href="#" class="badge badge-primary"><i class="fas fa-tags"></i>Category</a>
                  </div>

                  <div class="card-footer">
                    <form action="">
                      <div class="input-group">
                        <input type="number" class="form-control">
                        <div class="input-group-append">
                          <button class="btn btn-primary">Add to Cart</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>


              <div class="col-md-6">
                <div class="card mb-3">
                  <img src="http://placehold.co/100x70"  alt="" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text"><strong>Rp.100.000,</strong></p>
                    <p class="card-text">Some quick example text to Product card.</p>
                    <a href="#" class="badge badge-primary"><i class="fas fa-tags"></i>Category</a>
                  </div>

                  <div class="card-footer">
                    <form action="">
                      <div class="input-group">
                        <input type="number" class="form-control">
                        <div class="input-group-append">
                          <button class="btn btn-primary">Add to Cart</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>
            
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>


          </div>
          
          <div class="col-md-3">
            <div class="card mb-3">
              <div class="row">
                <div class="col-md-12">
                    <div clas="card"> 
                      <div class="card-header">
                        Pencarian
                      </div>
                      
                      <div>
                        <form action="">
                          <div class="input-group">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                              <button class="btn btn-primary">Cari</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>

            <div class="card mb-3">
              
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        Kategori
                      </div>
      
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Semua Kategori</li>
                          <li class="list-group-item">Kategori 1</li>
                          <li class="list-group-item">Kategori 2</li>
                        </ul>                
                      </div>
      
                    </div>
      
                  </div>
      
                </div>


            </div>
            
          </div>

        </div>

    </main>



