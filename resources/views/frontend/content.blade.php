@extends ('frontend.master')
@section ('content')
@section ('study', 'active')

<!-- Detail Start -->
<div class="container py-5">

<div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Kajian Daring</span>
          </p>
          <h1 class="mb-4">{{ $study->judul }}</h1>
          <div class="">
          <strong class="mr-3"> {{ $study->nama }}</strong>
        </div>
          <div class="">
          <p class="mr-3"> {{ $study->created_at->format('d M Y') }}</p>
        </div>
        </div>

  <div class="row pt-5">
    <div class="col-lg-7">

    <!-- Gambar -->
      
      <div class="d-flex flex-column text-left mb-3">
        <div class="d-flex">
          <strong class="mr-3">
            <i class="fa fa-folder text-primary"></i> {{ $study->category->nama_kategori }}
          </strong>
        </div>
        <p class="section-title pr-5">
          <span class=""></span>
        </p>
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
    <div class="col-lg-5 mb-5">

    <h4 class="mt-4">Materi Kajian</h4>
            <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3 mb-3">
              <div class="p-3">
              
                <strong class="pt-4">Download File Materi</strong>
                @if($study->file)
                <p>{{ basename($study->file) }}</p>
                    <a href="{{ route('download', $study->id) }}" class="btn btn-primary mb-4">Download File</a>
                @else
                    File tidak tersedia
                @endif
              </div>
            </div>

    <h4 class=" mt-5">Related Post</h4>
    @foreach($relatedStudies as $relatedStudy)
            <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3 mb-3">
              <div class="pl-3">
              
                <h6 class="pt-3">{{ $relatedStudy->judul }}</h6>
                <div class="d-flex">
                  <p class="mr-3"><i class="fa fa-user text-primary"></i> {{ $relatedStudy->nama }}</p>
                  <p class="mr-3"><i class="fa fa-clock text-primary"></i> {{ $relatedStudy->created_at->format('d M Y') }}</p>
                </div>
                    <p>{{ Str::limit($relatedStudy->deskripsi, 100) }}</p>
                    <a href="{{ route('showkajian', $relatedStudy->id) }}" class="btn btn-primary mb-4">Read more...</a>
              </div>
            </div>
    @endforeach
            <!-- Tambahkan lebih banyak related post jika diperlukan -->
        </div>

  </div>
</div>
<!-- Detail End -->
@endsection
