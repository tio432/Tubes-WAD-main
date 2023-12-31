
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
              <h1>Tambah Makanan</h1>
            </div>
          </div>
    </div>

    <div class="form-add mt-5">
        <form id="form-unggah" action="/admin/menu/makanan" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Gambar Makanan</label>
                <input name="image" id="input-gambar" type="file" class="form-control input-default" placeholder="Input Default" required>
                <img id="preview-gambar" src="#" width="100px" alt="Preview Gambar" style="display: none;">
            </div>

            <div class="form-group">
                <label for="nama">Nama Makanan</label>
                <input name="name" type="text" class="form-control" id="nama" placeholder="Masukkan nama makanan" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi Makanan</label>
                <textarea name="description" class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deskripsi makanan" required></textarea>
            </div>

            <div class="form-group">
                <label for="harga">Harga Makanan</label>
                <input name="price" type="number" class="form-control" id="harga" placeholder="Masukkan harga makanan" required>
            </div>

            {{-- stock --}}
            <div class="form-group">
                <label for="stock">Stock Makanan</label>
                <input name="stock" type="number" class="form-control" id="stock" placeholder="Masukkan stock makanan" required>
            </div>

            <button class="btn btn-success" type="submit">Tambah Makanan</button>
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


<script>
    const inputGambar = document.getElementById('input-gambar');
    const previewGambar = document.getElementById('preview-gambar');

    inputGambar.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                previewGambar.src = e.target.result;
                previewGambar.style.display = 'block';
            }

            reader.readAsDataURL(file);
        } else {
            previewGambar.src = '';
            previewGambar.style.display = 'none';
        }
    });
</script>

</body>

</html>
