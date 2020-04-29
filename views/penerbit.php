  <div class="content-wrapper"> 
    <section class="content-wrapper">
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Data Anggota Penerbit Buku</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
    </section>

    <section class="content">
        <?php echo $this->session->flashdata('message'); ?>
        <button class="btn btn-primary ml-3 mb-3"data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>
        Tambah Data Buku Penerbit</button>

        <a class="btn btn-danger mb-3" href=" <?php echo base_url('index.php/penerbit/print') ?>"> <i class="fa fa-print"></i> Print</a>

        <div class="form-inline mr-auto float-sm-right navbar-right navbar-form ">
            <div class="input-group">
                <?php echo form_open('penerbit/search') ?>
                <input type="text" name="keyword" class="form-control" placeholder="Search">
                <button type="submit" class="btn btn-success float-sm-right inline">Cari</button>
                <?php echo form_close() ?> 
            </div>
        </div>

        <table class="table">
            <tr>
                <th>No</th>
                <th>ID Penerbit</th>
                <th>Nama Penerbit</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th colspan="2">AKSI</th>
            </tr>

            <?php

            $no=1;
            foreach ($penerbit as $pnb ) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pnb->id_penerbit ?></td>
                    <td><?php echo $pnb->nama_penerbit ?></td>
                    <td><?php echo $pnb->alamat ?></td>
                    <td><?php echo $pnb->no_telepon ?></td>
                    <td><?php echo anchor('penerbit/detail_penerbit/'.$pnb->id_penerbit,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                    <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('anggota/hapus/'.$pnb->id_penerbit, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                    <td><?php echo anchor('penerbit/edit_penerbit/'.$pnb->id_penerbit, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel"> Form Input Data Penerbit Buku</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url().'index.php/penerbit/tambah_aksi' ; ?>">

                <div class="form-group">
                    <label>ID Penerbit</label>
                    <input type="text" name="id_penerbit" class="form-control">                   
                </div>
                <div class="form-group">
                    <label>Nama Penerbit</label>
                    <input type="text" name="nama_penerbit" class="form-control">                   
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">                   
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="no_telepon" class="form-control">                   
                </div>
                
                <button type="reset" class="btn btn-danger" data-dismiss="modal">RESET</button>
                <button type="submit" class="btn btn-primary">Save</button>
                
            </form>
          </div>
        </div>
      </div>
    </div>
</div>