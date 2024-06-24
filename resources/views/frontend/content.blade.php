@extends ('frontend.master')
@section ('content')
@section ('study', 'active')

    <!-- Detail Start -->
    <div class="container py-5">
      <div class="row pt-5">
        <div class="col-lg-12">
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
          <div class="mb-5">
            <p>{{ ($study->deskripsi) }}</p>
          </div>

          <!-- Related Post -->
          <div class="mb-5 mx-n3">
            <h2 class="mb-4 ml-3">Related Post</h2>
            <div class="owl-carousel post-carousel position-relative">
              <div
                class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3"
              >
                <img
                  class="img-fluid"
                  src="assets/img/post-1.jpg"
                  style="width: 80px; height: 80px"
                />
                <div class="pl-3">
                  <h5 class="">Diam amet eos at no eos</h5>
                  <div class="d-flex">
                    <small class="mr-3"
                      ><i class="fa fa-user text-primary"></i> Admin</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-folder text-primary"></i> Web
                      Design</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-comments text-primary"></i> 15</small
                    >
                  </div>
                </div>
              </div>
              <div
                class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3"
              >
                <img
                  class="img-fluid"
                  src="assets/img/post-2.jpg"
                  style="width: 80px; height: 80px"
                />
                <div class="pl-3">
                  <h5 class="">Diam amet eos at no eos</h5>
                  <div class="d-flex">
                    <small class="mr-3"
                      ><i class="fa fa-user text-primary"></i> Admin</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-folder text-primary"></i> Web
                      Design</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-comments text-primary"></i> 15</small
                    >
                  </div>
                </div>
              </div>
              <div
                class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3"
              >
                <img
                  class="img-fluid"
                  src="assets/img/post-3.jpg"
                  style="width: 80px; height: 80px"
                />
                <div class="pl-3">
                  <h5 class="">Diam amet eos at no eos</h5>
                  <div class="d-flex">
                    <small class="mr-3"
                      ><i class="fa fa-user text-primary"></i> Admin</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-folder text-primary"></i> Web
                      Design</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-comments text-primary"></i> 15</small
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>

          

          <!-- Single Image -->
          <div class="mb-5">
            <img src="assets/assets/img/blog-3.jpg" alt="" class="img-fluid rounded" />
          </div>

        </div>
      </div>
    </div>
    <!-- Detail End -->
@endsection