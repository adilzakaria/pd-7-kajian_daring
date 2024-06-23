@extends ('admin.masteradmin')
@section ('content')

<!-- partial -->
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Formulir Unggah Kajian</h4>
                  <p class="card-description">
                    Gunakan formulir ini untuk mengunggah kajian baru.
                  </p>
                  <form class="form" method="POST" action="{{route('store')}}" enctype="multipart/form-data">
                  @csrf

                  <!-- input kategori -->

                  <div class="form-group row">
                    <label for="categorys" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="categorys" name="category" style="height: 3rem;" required>
                        <option value="" disabled selected>Pilih Kategori</option>
                        @foreach($categories as $categorys)
                          <option value="{{ $categorys->id }}">{{ $categorys->nama_kategori }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                  <!-- nama Penerbit -->

                  <div class="form-group row">
                    <label for="categorys" class="col-sm-2 col-form-label">Nama Penerbit</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Penerbit" style="height: 3rem;" required>
                    </div>
                  </div>

                  <!-- input kajian -->
                  
                  <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Kajian</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Kajian" style="height: 3rem;" required>
                    </div>
                  </div>

                  <!-- input deskripsi -->
                  
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                      <textarea type="textarea" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" style="height: 10rem;" required ></textarea>
                    </div>
                  </div>

                  <!-- input file -->
                  
                  <div class="form-group row">
                    <label for="file" class="col-sm-2 col-form-label">File Kajian</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="file" name="file" style="height: 3rem;" required>
                    </div>
                  </div>

                    <div class="btn-wrapper ">
                      <a href="#" class="btn btn-danger text-white"><i class="icon-printer"></i> Delete</a>
                      <button type="submit" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Upload</button>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection