@extends ('admin.masteradmin')
@section ('content')

<!-- partial -->
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
                    <img src="admin/assets/images/faces/face8.jpg" class="card-img-top rounded-circle" alt="Admin Profile Picture" style="width: 100px; height: 100px; object-fit: cover;">
                </div>
                  <div class="card-body text-center">
                    <h4 class="card-title">{{ Auth::user()->name }}</h4>
                    <p class="card-text">Administrator</p>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Profil Admin</h4>
                    <div class="form-group row mb-3">
                        <label for="adminName" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" readonly class="form-control-plaintext" id="adminName" value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="adminEmail" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="text" readonly class="form-control-plaintext" id="adminEmail" value="{{ Auth::user()->email }}">
                        </div>
                    </div>
                </div>
            </div>
              <div class="card-footer text-center">
                      <a href="form" class="btn btn-secondary text-primary">Form Unggah</a>
                      <a href="table" class="btn btn-secondary text-success">Lihat Kajian</a>
              </div>
          </div>
    </div>
</div>

@endsection