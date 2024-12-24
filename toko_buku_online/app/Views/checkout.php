<?= $this->extend('template')?>

<?= $this->section('main')?>

<div class="container">
    <h2 class="mb-5">Checkout</h2>
    <div class="mb-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Detail Buku</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Total</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="<?= base_url("images/images1.jpg"); ?> " alt=""
                        style="width:150px; height:auto;">
                        <h6>Tetaplah Sendiri</h6>
                    </td>
                    <td>
                        x1
                    </td>
                    <td>
                        Rp90.000
                    </td>
                    <td>
                        Rp90.000
                    </td>
                   
                </tr>
            </tbody>
        </table>
    </div>
    <h2 class="mb-5">Total: 180.000</h2>
    <h2 class="mb-3">Data Pembeli</h2>
    <div class="mb-5">
        Yuni Amelia <br />
        085289361594 <br />
        ameliafc712@gmail.com <br />
    </div>
    <h2 class="mb-3">Alamat Pengiriman</h2>
    <div class="mb-5">
        <span>Jl. Mandalo, Simpang Sungai Duren, Muaro Jambi.</span>
    </div>
    <h2 class="mb-3">Metode Bayar</h2>
    <div class="mb-5">
        Transfer Bank <br />
        BCA, Yuni Amelia <br />
        2306200520
    </div>
    <div class="mb-5">
        <a href="<?= base_url('submit') ?>" class="btn btn-danger">Submit</a>
    </div>
</div>


<?= $this->endSection()?>