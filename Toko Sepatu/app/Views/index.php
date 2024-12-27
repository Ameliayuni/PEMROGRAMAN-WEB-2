<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Sepatu</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url()?>css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-end">
          <a href="<?= base_url() ?>chart" class="btn btn-secondary">Keranjang Berbelanja <span class="badge text-bg-warning">99</span></a>
        </div>
      </div>
      <div class="row bg-primary-subtle mb-5">
        <div class="col-6 p-5">
          <h1>Selamat Datang di Toko Sepatu</h1>
          <p>Kami menyediakan berbagai macam sepatu untuk segala kebutuhan Anda.</p>
          <a href="#" class="btn btn-success">Lihat Produk</a>
        </div>
        <div class="col-6 p-5">
          <h1>Temukan sepatu favorit Anda!</h1>
          <form action="">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Jenis Sepatu"/>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary">Cari</button>
            </div>
          </form>
        </div>
      </div>

      <h2>Sepatu Terlaris</h2>
      <div class="row mb-5 g-3">
        <div class="col-3">
          <div class="card">
            <img src="images/sepatu1.jpg" class="card-img-top" alt="sepatu  1" />
            <div class="card-body">
              <h5 class="card-title">Sepatu Sneakers</h5>
              <p class="card-text">
                Rp 1.500,000,-
              </p>
              <a href="#" class="btn btn-primary">Add to Chart</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="images/sepatu2.jpg" class="card-img-top" alt="sepatu   2" />
            <div class="card-body">
              <h5 class="card-title">Sepatu Boots</h5>
              <p class="card-text">
                Rp 2.300,000,-
              </p>
              <a href="#" class="btn btn-primary">Add to Chart</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="images/sepatu3.jpg" class="card-img-top" alt="sepatu   3" />
            <div class="card-body">
              <h5 class="card-title">Sepatu Sandal</h5>
              <p class="card-text">
                Rp 450,000,-
              </p>
              <a href="#" class="btn btn-primary">Add to Chart</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="images/sepatu4.jpg" class="card-img-top" alt="sepatu   4" />
            <div class="card-body">
              <h5 class="card-title">Sepatu Formal</h5>
              <p class="card-text">
                Rp 3.800,000,-
              </p>
              <a href="#" class="btn btn-primary">Add to Chart</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-danger-subtle py-3">
      <div class="container">
        Copyright 2024. Toko Sepatu. All Rights Reserved.
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
