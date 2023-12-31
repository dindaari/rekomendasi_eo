@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Alternatif</li>
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
                <h3 class="card-title">Edit Alternatif</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/update/'.$alternatif->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="kode_alternatif" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode_alternatif" placeholder="Masukan Kode Alternatif" value="{{ $alternatif->kode_alternatif}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_1" class="col-sm-2 col-form-label">Rating</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_1" placeholder="Masukan Nilai 1-5" value="{{ $alternatif->kriteria_1}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_2" class="col-sm-2 col-form-label">Tahun Berdiri</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_2" placeholder="Masukan Tahun Berdiri Perusahaan" value="{{ $alternatif->kriteria_2}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_3" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_3" placeholder="Masukan Nilai Lokasi 1-5" value="{{ $alternatif->kriteria_3}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_4" class="col-sm-2 col-form-label">Kualitas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_4" placeholder="Masukan Nilai Kualitas 1-5" value="{{ $alternatif->kriteria_4}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_5" class="col-sm-2 col-form-label">Total Pelanggan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_5" placeholder="Masukan Jumlah Total Pelanggan" value="{{ $alternatif->kriteria_5}}">
                    </div>
                  </div>
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