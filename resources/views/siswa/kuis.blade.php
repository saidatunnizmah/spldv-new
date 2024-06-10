@extends('template.template-kuis')

@section('title','Kuis '.$jenis.' - SPLDV')

@section('css-Addon')
<link rel="stylesheet" href="{{ asset('css/siswa/kuis.css') }}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center fw-bold">
                Kuis {{ $jenis }} : {{ $title }}
            </h3>
        </div>
    </div>
    <div class="row px-5">
        <div class="col-9">
            <div class="card" id="card-soal">
                <div class="card-header">
                    <div id="no-soal">
                        <h5 class="m-0 fw-bold">Soal <span id="noSoal">1</span></h5>
                    </div>
                    <div class="waktu-container">
                        <i class="bi bi-clock-fill"></i>
                        <span id="waktu"></span>
                    </div>
                </div>
                <div class="card-body">
                    <div id="soal-content" class="overflow-scroll">
                        
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3 mb-5">
                <button class="btn btn-danger" id="btn-nav-prev">Sebelumnya</button>
                <button class="btn btn-primary" id="btn-nav-next">Selanjutnya</button>
            </div>
        </div>
        <div class="col-3">
            <div class="card" id="card-no-soal">
                <div class="card-header">
                    <h5 class="m-0 fw-bold py-1">Nomor Soal</h5>
                </div>
                <div class="card-body d-flex flex-wrap gap-1 justify-content-start">
                    @for ($i = 1; $i <= $jumlahSoal; $i++)
                    <button class="nav-soal-item" value="{{ $i }}">{{ $i }}</button>
                    @endfor
                    
                </div>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-success fw-bold d-none" id="selesaiBtn">Selesai</button>
                <button class="btn btn-warning fw-bold d-none" id="kumpulBtn">
                    Kumpulkan
                </button>
                <button class="btn btn-danger fw-bold" id="keluarBtn">
                    Keluar
                </button>
            </div>
        </div>
    </div>
</div> 
@endsection

@section('js-Addon')
<script>
    let token = '{{ csrf_token() }}';
    // let setSoal = '{{ isset($setSoal) ? $setSoal : '' }}';
    let setSoal = 2;
    let jumlahSoal = {{ $jumlahSoal }};
    let timer = {{ $waktuPengerjaan }}*60;
</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<script type="module">
    window.addEventListener("DOMContentLoaded", () => 
      import("//unpkg.com/mathlive?module").then((mathlive) => 
        mathlive.renderMathInDocument()
      )
    );
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/kuis/kuis.js') }}"></script>
@endsection
