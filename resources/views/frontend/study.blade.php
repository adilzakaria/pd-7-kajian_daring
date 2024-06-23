@extends ('frontend.master')
@section ('content')
@section ('study', 'active')

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Kajian Terbaru</span>
          </p>
          <h1 class="mb-4">Kajian Terbaru yang Diunggah</h1>
        </div>
        <label for="">Filter Pencarian</label>
        <div class="form-group">
          <select class="form-control" id="kajianCategory" name="category" required>
            <option value="" disabled selected>Waktu</option>
            <option value="">Paling Awal</option>
            <option value="">Paling Akhir</option>
          </select>
        </div>
        <div class="form-group">
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
        <div class="row pb-3">
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="assets/img/blog-1.jpg" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">Judul Kajian</h4>
                <div class="d-flex justify-content-center mb-3">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Kategori</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-clock text-primary"></i> Date</small
                  >
                </div>
                <p>
                  Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                  eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                  lorem. Tempor ipsum justo amet stet...
                </p>
                <a href="content" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="assets/img/blog-2.jpg" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">Judul Kajian</h4>
                <div class="d-flex justify-content-center mb-3">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Kategori</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-clock text-primary"></i> Date</small
                  >
                </div>
                <p>
                  Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                  eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                  lorem. Tempor ipsum justo amet stet...
                </p>
                <a href="single" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="assets/img/blog-3.jpg" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">Judul Kajian</h4>
                <div class="d-flex justify-content-center mb-3">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Kategori</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-clock text-primary"></i> Date</small
                  >
                </div>
                <p>
                  Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                  eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                  lorem. Tempor ipsum justo amet stet...
                </p>
                <a href="single" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="assets/img/blog-1.jpg" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">Judul Kajian</h4>
                <div class="d-flex justify-content-center mb-3">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Kategori</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-clock text-primary"></i> Date</small
                  >
                </div>
                <p>
                  Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                  eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                  lorem. Tempor ipsum justo amet stet...
                </p>
                <a href="single" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="assets/img/blog-2.jpg" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">Judul Kajian</h4>
                <div class="d-flex justify-content-center mb-3">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Kategori</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-clock text-primary"></i> Date</small
                  >
                </div>
                <p>
                  Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                  eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                  lorem. Tempor ipsum justo amet stet...
                </p>
                <a href="single" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="assets/img/blog-3.jpg" alt="" />
              <div class="card-body bg-light text-center p-4">
                <h4 class="">Judul Kajian</h4>
                <div class="d-flex justify-content-center mb-3">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Kategori</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-clock text-primary"></i> Date</small
                  >
                </div>
                <p>
                  Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam
                  eirmod, duo et sed sit eirmod kasd clita tempor dolor stet
                  lorem. Tempor ipsum justo amet stet...
                </p>
                <a href="single" class="btn btn-primary px-4 mx-auto my-2"
                  >Read More</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-12 mb-4">
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog End -->
@endsection