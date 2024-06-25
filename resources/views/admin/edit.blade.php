@extends ('admin.masteradmin')
@section ('content')

<!-- partial -->
<div class="main-panel">
      <div class="btn-wrapper ">
        <a href="{{route('table')}}" class="btn btn-secondary text-danger me-0"><i class="icon-back"></i><-</a>
      </div>     
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Kajian</h4>
                  <p class="card-description">
                    Gunakan formulir ini untuk mengganti judul, deskripsi dan ketegori kajian.
                  </p>
                  <form class="form" method="POST" action="{{route('update',$study->id)}}" enctype="multipart/form-data">

                  @csrf
                  @method('PUT')

                  <!-- input kategori -->

                  <div class="form-group row">
                    <label for="categorys" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input class="form-control " value="{{ $study->category->nama_kategori }}" disabled selected style="width:auto">
                    </div>
                  </div>

                  <!-- nama Penerbit -->

                  <div class="form-group row">
                    <label for="categorys" class="col-sm-2 col-form-label">Nama Penerbit</label>
                    <div class="col-sm-10">
                      <input name="nama" id="nama" class="form-control" value="{{ $study->nama }}" disabled selected style="width:auto">
                    </div>
                  </div>

                  <!-- input kajian -->
                  
                  <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Kajian</label>
                    <div class="col-sm-10">
                      <input name="judul" id="judul" class="form-control form-control-dynamic" value="{{ $study->judul }}" style="width:auto">
                    </div>
                  </div>

                  <!-- input deskripsi -->
                  
                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                      <input name="deskripsi" id="deskripsi" class="form-control form-control-dynamic" value="{{ Str::limit($study->deskripsi,50) }}" style="width:auto">
                  </div>
                  </div>

                  <!-- input file -->
                  
                  <div class="form-group row">
                    <label for="file" class="col-sm-2 col-form-label">File Kajian</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="file" name="file" style="height: 3rem;">
                    </div>
                  </div>

                    <div class="btn-wrapper ">
                      <button type="submit" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Simpan</button>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dynamicInputs = document.querySelectorAll('.form-control-dynamic');

            dynamicInputs.forEach(input => {
                resizeInput.call(input); // Initial resize based on value length

                input.addEventListener('focus', resizeInput);
                input.addEventListener('input', resizeInput);

                function resizeInput() {
                    const length = this.value.length;
                    this.style.width = ((length + 1) * 8) + 'px';
                }
            });
        });
        </script>

@endsection