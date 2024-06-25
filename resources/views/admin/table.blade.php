@extends ('admin.masteradmin')
@section ('content')

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tabel Kajian Daring</h4>
                  <!-- Filter Pencarian -->
                <form method="GET" action="{{ route('table') }}">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Kajian..." name="search" value="{{ request()->query('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                    
                      <thead>
                        <tr>
                          <th>
                            Nama Penulis
                          </th>
                          <th>
                            Kategori 
                          </th>
                          <th>
                            Judul Kajian
                          </th>
                          
                          <!-- <th>
                            Deskripsi
                          </th> -->
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>

                      @foreach($studies as $study)
                      <tbody>
                        <tr>
                          <td>
                          {{ $study->nama }}
                          </td>
                          <td>
                          {{ $study->category->nama_kategori }}
                          </td>
                          <td>
                          {{ $study->judul }}
                          </td>
                          
                          <!-- <td>
                          {{ Str::limit($study->deskripsi, 50) }}
                          </td> -->
                          <td>
                          <a href="{{ route('edit', $study->id) }}" class="btn btn-secondary text-success">Edit</a>
                          <!-- <a href="" class="btn btn-secondary text-danger">Hapus</a> -->
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>

                  <!-- Pagination -->
                <div class="d-flex justify-content-center mt-3 pagination-container">
                    {{ $studies->links('pagination::bootstrap-4') }}
                </div>


                </div>
              </div>
</div>

@endsection