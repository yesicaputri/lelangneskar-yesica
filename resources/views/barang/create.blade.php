@extends('templatesb.master')

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/barang" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Nama Barang">
                  </div>

                  <div class="form-group">
                    <label for="tgl">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" id="tgl" placeholder="Tanggal">
                  </div>

                  <div class="form-group">
                    <label for="harga_awal">Harga Awal</label>
                    <input type="text" name="harga_awal" class="form-control" id="harga_awal" placeholder="Harga Awal">
                  </div>

                  <div class="form-group">
                    <label for="image" class="form-label">Gambar Barang</label>
                    <img class="img-preview img-fluid col-sm-5 mb-3" alt="">
                    <input class="form-control @error('image')is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="deskripsi_barang"> Deskripsi Barang</label>
                    <textarea type="text" name="deskripsi_barang"class="form-control"></textarea>
                  </div>

                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

<script>
  function previewImage() {
    const image = document.querySelector('#image')
    const imgPreview = document.querySelector('.img-preview')
    imgPreview.style.display = 'block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection