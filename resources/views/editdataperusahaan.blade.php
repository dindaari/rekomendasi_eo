@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Perusahaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Perusahaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data Perusahaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/perusahaan/update/'.$perusahaan->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                <div class="form-group row">
                    <label for="kode_alternatif" class="col-sm-2 col-form-label">Kode Alternatif</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode_alternatif" placeholder="Masukan Kode" value="{{ $perusahaan->kode_alternatif}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan" value="{{ $perusahaan->nama_perusahaan}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat" value="{{ $perusahaan->alamat}}" required>
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="tahun_berdiri" class="col-sm-2 col-form-label">Tahun Berdiri</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tahun_berdiri" placeholder="Tahun Berdiri" value="{{ $perusahaan->tahun_berdiri}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="lokasi" placeholder="Lokasi" value="{{ $perusahaan->lokasi}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kualitas" class="col-sm-2 col-form-label">Kualitas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kualitas" placeholder="Kualitas" value="{{ $perusahaan->kualitas}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="total_pelanggan" class="col-sm-2 col-form-label">Total Pelanggan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="total_pelanggan" placeholder="Jumlah Total Pelanggan" value="{{ $perusahaan->total_pelanggan}}" required>
                    </div>
                  </div> -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection