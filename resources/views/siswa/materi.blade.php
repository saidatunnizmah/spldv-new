@extends('template.template-materi')

@section('title', $title. ' - SPLDV')

@section('css-Addon')
<link rel="stylesheet" href="{{ asset('css/siswa/materi.css') }}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <h4 class="text-center fw-bold">
                Materi
            </h4>
            <div class="card" id="card-materi">
                <div class="card-body overflow-scroll">
                    {!! $materi !!}
                </div>
            </div>
            <div class="d-flex justify-content-between my-2">
                @if ($btnSebelumnya != false)
                    <a href="{{ route('siswa.materi',['bab'=>$bab,'page'=>$page-1]) }}" class="btn btn-danger" id="btnSebelumnya"><i class="bi bi-chevron-left"></i> Sebelumnya</a>
                @endif

                @if ($btnSelanjutnya['type'] =='page')
                    <a href="{{ $btnSelanjutnya['url'] }}" class="btn btn-primary" id="btnSelanjutnya" disabled>Selanjutnya</a>
                    {{-- <button class="btn btn-primary" id="btnNextPage">Selanjutnya <i class="bi bi-chevron-right"></i></button> --}}
                @endif
                @if ($btnSelanjutnya['type'] =='bab')
                    <a href="{{ $btnSelanjutnya['url'] }}" class="btn btn-primary" id="btnSelanjutnya" disabled>Selanjutnya</a>
                    {{-- <button class="btn btn-primary" id="btnNextBab">Selanjutnya <i class="bi bi-chevron-right"></i></button> --}}
                @endif
                
                @if ($btnSelanjutnya['type']=='modal')
                <button type="button" id="btnSelanjutnya" disabled class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kuisModal" data-kuis="{{ $bab }}">
                    Selanjutnya <i class="bi bi-chevron-right"></i>
                </button>
                @endif
                
            </div>
        </div>
        <div class="col-lg-4 col-md-12 mt-sm-3 mt-lg-0">
            <h4 class="text-center fw-bold">
                Ruang Diskusi
            </h4>
            <div class="card" id="card-chat">
                <div class="card-body">
                    <div id="chat-container">
                        
                    </div>
                    <div class="chat-input">
                        <div class="input-group">
                            <input type="text" class="form-control" id="chatInput" placeholder="Ketik pesan..." aria-label="Ketik pesan..." >
                            <button class="btn btn-outline-secondary" type="button" id="btn-kirim"><i class="bi bi-send"></i></button>
                        </div>                          
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
<!-- Modal -->
<div class="modal fade" id="kuisModal" tabindex="-1" aria-labelledby="kuisModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="KuisModalLabel">Pemberitahuan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalKuisBody">
                Anda akan mengerjakan Kuis
            </div>
            <div class="modal-body" id="modalKuisBody">
            <div>
                Berikut petunjuk pelaksanaannya :
                <ul>
                    <li>Pastikan perangkat yang digunakan terhubung ke internet dengan koneksi yang stabil.</li>
                    <li>Siapkan alat tulis seperti kertas dan pena untuk coretan sementara jika diperlukan.</li>
                    <li>Baca soal dengan teliti.</li>
                    <li>Atur waktu dengan baik untuk memastikan semua soal terjawab sebelum waktu habis.</li>
                    <li>Jangan keluar atau berpindah aplikasi selama kuis berlangsung.</li>
                    <li>Setelah waktu habis, aplikasi akan otomatis menyimpan jawaban yang sudah diisi dan menutup akses ke soal.</li>
                </ul>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="" class="btn btn-primary" id="modalKuisBtn">Kerjakan Kuis</a>
                {{-- <button type="button" class="btn btn-primary">Kerjakan Kuis</button> --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-Addon')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/materi/sidebar.js') }}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<script type="module">
    window.addEventListener("DOMContentLoaded", () => 
      import("//unpkg.com/mathlive?module").then((mathlive) => 
        mathlive.renderMathInDocument()
      )
    );
</script>
<script src="{{ asset('js/materi/btnNav.js') }}"></script>
<script src="{{ asset('js/materi/'.$bab.'-'. $page.'.js') }}"></script>
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script async src="{{ asset('js/materi/chat.js') }}"></script>
<script>
    const kelas = '{{ auth()->user()->siswa->kelas }}'
    let title = "{{ $title }}"
    let id = {{ auth()->user()->id }}
    $('math-field').each(function(){
        $(this)[0].menuItems =[];
    })
    let token = "{{ csrf_token() }}"
</script>
@endsection
