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
          <div class="d-inline-flex ">
          <p class="m-0"><a class="" href="home">Beranda</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Kajian Daring</p>
        </div>
        </div>
        <label for="">Filter Pencarian</label>
        <div class="form-group">
          <select class="form-control" id="kajianCategory" name="category" onchange="this.form.submit()" required >
            <option value="" disabled {{ request('order') ? '' : 'selected' }}>Waktu</option>
            <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }} >Paling Awal</option>
            <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }} >Paling Akhir</option>
          </select>
        </div>
        <div class="form-group">
          <select class="form-control" id="kajianCategory" name="category" required>
            <option value="" disabled selected>Pilih Kategori</option>  
            @foreach($categories as $categorys)
              <option value="{{ $categorys->id }}">{{ $categorys->nama_kategori }}</option>
            @endforeach
          </select>
        </div>
        <div class="row pb-3">

        @foreach($studies as $study)
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ $study->file }}" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">{{ $study->judul }}</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3">
                                    <i class="fa fa-user text-primary"></i> {{ $study->nama }}
                                </small>
                                <small class="mr-3">
                                    <i class="fa fa-folder text-primary"></i> {{ $study->category->nama_kategori }}
                                </small>
                                <small class="mr-3">
                                    <i class="fa fa-clock text-primary"></i> {{ $study->created_at->format('d M Y') }}
                                </small>
                            </div>
                            <p>{{ Str::limit($study->deskripsi, 200) }}</p>
                            <a href="{{ route('showkajian', $study->id) }}" class="btn btn-primary px-4 mx-auto my-2">
                              Lebih lanjut <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

          <!-- pagination -->
            <div class="col-md-12 mb-4">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-0">
                    {{ $studies->links('pagination::bootstrap-4') }}
                    </ul>
                </nav>
            </div>
        </div>
      </div>
    </div>
    <!-- Blog End -->
@endsection