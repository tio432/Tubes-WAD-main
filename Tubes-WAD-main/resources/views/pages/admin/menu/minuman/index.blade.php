<body>

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
    <div class="content-body">

        <div class="container-fluid mt-3">
            <div class="flex-column d-flex">
                <div class="menu-minuman justify-content-end m-1">
                  <h1>Menu minuman</h1>
                </div>

                <div class="button justify-content-start m-1">
                    <a href="/admin/menu/minuman/add">
                        <button class="btn btn-primary">+ Tambah minuman</button>
                    </a>
                </div>
              </div>
            <div class="row">
                <div class="row">
                    {{-- looping minuman --}}
                    @foreach ($minuman as $m)
                    <div class="col-md-6 col-lg-3">
                        <a href={{ '/admin/menu/minuman/'.$m->slug }}>
                            <div class="card">
                                <div class="relative">
                                    <img class="img-fluid" style="object-fit: cover;" src="{{ $m->image }}" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $m->name }}</h5>
                                    <p class="card-text">{{ $m->description }}</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text d-inline">
                                        <small class="text-muted">
                                            @if (class_exists('Illuminate\Support\Carbon'))
                                                {{ Illuminate\Support\Carbon::parse($m->updated_at)->diffForHumans() }}
                                            @else
                                                Updated {{ time_elapsed_string($m->updated_at) }} ago
                                            @endif
                                        </small>
                                    </p>
                                    <a href={{ '/admin/menu/minuman/'.$m->slug }} class="card-link float-right"><small>Detail</small></a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                    {{-- end looping minuman --}}
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
        </div>
    </div>
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
