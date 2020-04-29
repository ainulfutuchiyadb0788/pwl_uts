  <div class="content-wrapper"> 
    <section class="content-wrapper">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Data Anggota Peminjaman Buku Mahasiswa</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
    </section>

    <section class="content">
        <?php echo $this->session->flashdata('message'); ?>
        <button class="btn btn-primary ml-3 mb-3"data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
        Tambah Data Peminjaman Buku Mahasiswa</button>

        <a class="btn btn-danger mb-3" href=" <?php echo base_url('index.php/peminjaman/print') ?>"> <i class="fa fa-print"></i> Print</a>

        <div class="form-inline mr-auto float-sm-right navbar-right navbar-form ">
            <div class="input-group">
                <?php echo form_open('peminjaman/search') ?>
                <input type="text" name="keyword" class="form-control" placeholder="Search">
                <button type="submit" class="btn btn-success float-sm-right inline">Cari</button>
                <?php echo form_close() ?> 
            </div>
        </div>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Kode Transaksi</th>
                <th>ID Anggota</th>
                <th>ID Buku</th>
                <th>Tanggal Peminjaman Buku</th>
                <th>Tanggal Pengembalian Buku</th>
                <th>Denda</th>
                <th colspan="2">AKSI</th>
            </tr>

            <?php

            $no=1;
            foreach ($peminjaman as $pjm ) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pjm->kode_transaksi ?></td>
                    <td><?php echo $pjm->id_anggota ?></td>
                    <td><?php echo $pjm->id_buku ?></td>
                    <td><?php echo $pjm->tanggal_pinjam ?></td>
                    <td><?php echo $pjm->tanggal_kembali ?></td>
                    <td><?php echo $pjm->denda ?></td>
                    <td><?php echo anchor('peminjaman/detail_peminjaman/'.$pjm->kode_transaksi,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                    <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('peminjaman/hapus/'.$pjm->kode_transaksi, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                    <td><?php echo anchor('peminjaman/edit_peminjaman/'.$pjm->kode_transaksi, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel"> Form Input Data Pemijaman Buku Mahasiswa</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url().'index.php/peminjaman/tambah_aksi' ; ?>">

                <div class="form-group">
                    <label>Kode Transaksi</label>
                    <input type="text" name="kode_transaksi" class="form-control">                   
                </div>
                <div class="form-group">
                    <label>ID Anggota</label>
                    <input type="text" name="id_anggota" class="form-control">                   
                </div>
                <div class="form-group">
                    <label>ID Buku</label>
                    <input type="text" name="id_buku" class="form-control">                   
                </div>
                <div class="form-group">
                    <label>Tanggal Peminjaman Buku</label>
                    <input type="text" name="tanggal_pinjam" class="form-control">                   
                </div>
                <div class="form-group">
                    <label>Tanggal Pengembalian Buku</label>
                    <input type="text" name="tanggal_kembali" class="form-control">                   
                </div>
                <div class="form-group">
                    <label>Denda</label>
                    <input type="text" name="denda" class="form-control">                   
                </div>

                <button type="reset" class="btn btn-danger" data-dismiss="modal">RESET</button>
                <button type="submit" class="btn btn-primary">Save</button>
                
            </form>
          </div>
        </div>
      </div>
    </div>
</div>