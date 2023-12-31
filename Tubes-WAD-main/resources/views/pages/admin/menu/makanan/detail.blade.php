
@include('templates.header')
<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
{{-- import templates/sidebar/admin --}}
@include('templates.sidebar.admin')
<!--**********************************
    Sidebar end
***********************************-->

<!--**********************************
    Content body start
***********************************-->
<div class="container content-body">

    <div class="mt-3">
        <div class="flex-column d-flex">
            <div class="menu-makanan justify-content-end m-1">
              <h1>Detail Makanan</h1>
            </div>
          </div>
    </div>

    <div class="form-add mt-3">
        <form id="form-unggah" action="/admin/menu/makanan" enctype="multipart/form-data" method="POST">
            @csrf

            <div class="flex">
                <a  href="/admin/menu/makanan/{{ $makanan->slug }}/edit">
                    <button class="btn btn-warning mb-5" type="button">Edit Makanan</button>
                </a>
                <a  href="/admin/menu/makanan/{{ $makanan->slug }}/delete">
                    <button class="btn btn-danger mb-5" type="button">Hapus Makanan</button>
                </a>
            </div>

            <div class="form-group">
                <label for="nama">Gambar Makanan</label>
                <br/>
                <img id="preview-gambar" src="{{ asset($makanan->image) }}" width="300px" alt="Preview Gambar">
            </div>

            <div class="form-group">
                <label for="nama">Nama Makanan</label>
                <input name="name"  type="text" class="form-control" id="nama" placeholder="Masukkan nama makanan" value="{{ $makanan->name }}" disabled>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi Makanan</label>
                <textarea name="description"  class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deskripsi makanan" disabled>{{ $makanan->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="harga">Harga Makanan</label>
                <input name="price" type="number" class="form-control" id="harga" placeholder="Masukkan harga makanan" value="{{ $makanan->price }}" disabled>
            </div>

            {{-- stock --}}
            <div class="form-group">
                <label for="stock">Stock Makanan</label>
                <input name="stock" type="number" class="form-control" id="stock" placeholder="Masukkan stock makanan" value="{{ $makanan->stock }}" disabled>
            </div>

            {{-- jika status true maka button hijau jika false maka button merah --}}
            <div class="form-group">
                <label for="stock">Status Makanan</label>
                <br/>
                @if ($makanan->status == true)
                    <button class="btn btn-success" type="button">Tersedia</button>
                @else
                    <button class="btn btn-danger" type="button">Tidak Tersedia</button>
                @endif
            </div>

        </form>
    </div>

    <!--**********************************
        Footer start
    ***********************************-->
    <!--**********************************
        Footer end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
{{-- footer --}}
@include('templates.footer')

</body>

</html>
