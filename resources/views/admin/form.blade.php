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
                  <form class="form" method="POST" action="" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                    <label for="kajianTitle" class="col-sm-2 col-form-label">Judul Kajian</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="kajianTitle" name="title" placeholder="Judul Kajian" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kajianDescription" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                      <textarea type="textarea" class="form-control" id="kajianDescription" name="description" placeholder="Deskripsi" style="height: 10rem;" required ></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kajianCategory" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="kajianCategory" name="category" required>
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="anak_muda">Kajian Anak Muda</option>
                        <option value="tafsir_alquran">Tafsir Al-Quran</option>
                        <option value="hadis">Hadis</option>
                        <option value="fiqih">Fiqih</option>
                        <option value="Akidah">Akidah</option>
                        <option value="tasawuf">Tasawuf</option>
                        <option value="sejarah">Sejarah Islam</option>
                        <option value="politik">Politik Islam</option>
                        <option value="budaya">Budaya Islam</option>
                        <option value="lingkungan">Lingkungan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kajianThumbnail" class="col-sm-2 col-form-label">Thumbnail</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="kajianThumbnail" name="thumbnail" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kajianFile" class="col-sm-2 col-form-label">File Kajian</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="kajianFile" name="file" required>
                    </div>
                  </div>
                    <div class="btn-wrapper ">
                      <a href="#" class="btn btn-danger text-white"><i class="icon-printer"></i> Delete</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Upload</a>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection