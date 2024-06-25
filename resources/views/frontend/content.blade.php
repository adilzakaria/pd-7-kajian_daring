@extends ('frontend.master')
@section ('content')
@section ('study', 'active')

<!-- Detail Start -->
<div class="container py-5">
  <div class="row pt-5">
    <div class="col-lg-8">
      
      <div class="d-flex flex-column text-left mb-3">
        <p class="section-title pr-5">
          <span class="pr-2">Kajian Daring</span>
        </p>

        <h1 class="mb-3">{{ $study->judul }}</h1>
        <div class="d-flex">
          <p class="mr-3"><i class="fa fa-user text-primary"></i> {{ $study->nama }}</p>
          <p class="mr-3">
            <i class="fa fa-folder text-primary"></i> {{ $study->category->nama_kategori }}
          </p>
          <p class="mr-3"><i class="fa fa-clock text-primary"></i> {{ $study->created_at->format('d M Y') }}</p>
        </div>
      </div>
      <div class="row">
        <!-- Deskripsi Kajian -->
        <div class="col-lg-12 mb-5">
          <p>{{ $study->deskripsi }}</p>
          <!-- Single Image -->
          <div class="mt-4">
            <img src="assets/assets/img/blog-3.jpg" alt="" class="img-fluid rounded" />
          </div>
        </div>

        
      </div>
    </div>
    <!-- Bahan Kajian -->
        <div class="col-lg-4 mb-5">
            <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3 mb-3">
              <div class="pl-3">
              <h2 class="mb-4">Bahan Kajian</h2>
                <h6>Download File Materi</h6>
                <p>File</p>
              </div>
            </div>
            <!-- Tambahkan lebih banyak related post jika diperlukan -->
        </div>
  </div>
</div>
<!-- Detail End -->
@endsection
