@extends('template')

@section('content')
    <body id="grad">
        <div class="container-fluid d-flex justify-content-center mt-4" style="max-width: 600px;">
            <div class="col d-flex flex-column align-items-center mb-5">
              <div class="row">
                <h5 class="mt-2"><strong>List Tugas PWEB(B)</strong></h5>
              </div>
              <div class="row">
                <p>Maulana Muhammad Ad-Dzikri - 5026231136</px>
              </div>
              <a href="pertama" class="text-decoration-none text-reset mt-3" style="height: 60px; width: 100%;">
                <div class="position-relative bg-primary text-white rounded-lg px-3 transition" style="height: 60px; width: 100%; transition: transform 0.2s ease;">
                  <div class="d-flex h-100 justify-content-center align-items-center">
                    <h6 class="mb-0">Pertama</h6>
                  </div>
                  <div class="position-absolute" style="top: 50%; right: 15px; transform: translateY(-50%);">
                  </div>
                </div>
              </a>
              <a href="cssopacity" class="text-decoration-none text-reset mt-3" style="height: 60px; width: 100%;">
                <div class="position-relative bg-primary text-white rounded-lg px-3 transition" style="height: 60px; width: 100%; transition: transform 0.2s ease;">
                  <div class="d-flex h-100 justify-content-center align-items-center">
                    <h6 class="mb-0">CSS Opacity</h6>
                  </div>
                  <div class="position-absolute" style="top: 50%; right: 15px; transform: translateY(-50%);">
                  </div>
                </div>
              </a>
              <a href="griditem" class="text-decoration-none text-reset mt-3" style="height: 60px; width: 100%;">
                <div class="position-relative bg-primary text-white rounded-lg px-3 transition" style="height: 60px; width: 100%; transition: transform 0.2s ease;">
                  <div class="d-flex h-100 justify-content-center align-items-center">
                    <h6 class="mb-0">Grid Item</h6>
                  </div>
                  <div class="position-absolute" style="top: 50%; right: 15px; transform: translateY(-50%);">
                  </div>
                </div>
              </a>
              <a href="template1" class="text-decoration-none text-reset mt-3" style="height: 60px; width: 100%;">
                <div class="position-relative bg-primary text-white rounded-lg px-3 transition" style="height: 60px; width: 100%; transition: transform 0.2s ease;">
                  <div class="d-flex h-100 justify-content-center align-items-center">
                    <h6 class="mb-0">Template 1</h6>
                  </div>
                  <div class="position-absolute" style="top: 50%; right: 15px; transform: translateY(-50%);">
                  </div>
                </div>
              </a>
              <a href="bootstrap1" class="text-decoration-none text-reset mt-3" style="height: 60px; width: 100%;">
                <div class="position-relative bg-primary text-white rounded-lg px-3 transition" style="height: 60px; width: 100%; transition: transform 0.2s ease;">
                  <div class="d-flex h-100 justify-content-center align-items-center">
                    <h6 class="mb-0">Bootstrap 1</h6>
                  </div>
                  <div class="position-absolute" style="top: 50%; right: 15px; transform: translateY(-50%);">
                  </div>
                </div>
              </a>
              <a href="latihanlayoutno5" class="text-decoration-none text-reset mt-3" style="height: 60px; width: 100%;">
                <div class="position-relative bg-primary text-white rounded-lg px-3 transition" style="height: 60px; width: 100%; transition: transform 0.2s ease;">
                  <div class="d-flex h-100 justify-content-center align-items-center">
                    <h6 class="mb-0">Latihan Layout No 5</h6>
                  </div>
                  <div class="position-absolute" style="top: 50%; right: 15px; transform: translateY(-50%);">
                  </div>
                </div>
              </a>
              <a href="mocklinktree" class="text-decoration-none text-reset mt-3" style="height: 60px; width: 100%;">
                <div class="position-relative bg-primary text-white rounded-lg px-3 transition" style="height: 60px; width: 100%; transition: transform 0.2s ease;">
                  <div class="d-flex h-100 justify-content-center align-items-center">
                    <h6 class="mb-0">Mock Link Tree</h6>
                  </div>
                  <div class="position-absolute" style="top: 50%; right: 15px; transform: translateY(-50%);">
                  </div>
                </div>
              </a>
              <a href="validasi1" class="text-decoration-none text-reset mt-3" style="height: 60px; width: 100%;">
                <div class="position-relative bg-primary text-white rounded-lg px-3 transition" style="height: 60px; width: 100%; transition: transform 0.2s ease;">
                  <div class="d-flex h-100 justify-content-center align-items-center">
                    <h6 class="mb-0">Validasi 1</h6>
                  </div>
                  <div class="position-absolute" style="top: 50%; right: 15px; transform: translateY(-50%);">
                  </div>
                </div>
              </a>
              <a href="https://maulanamadd.github.io/" class="text-decoration-none text-reset mt-3" style="height: 60px; width: 100%;">
                <div class="position-relative bg-warning text-white rounded-lg px-3 transition" style="height: 60px; width: 100%; transition: transform 0.2s ease;">
                  <div class="d-flex h-100 justify-content-center align-items-center">
                    <h6 class="mb-0">ETS</h6>
                  </div>
                  <div class="position-absolute" style="top: 50%; right: 15px; transform: translateY(-50%);">
                  </div>
                </div>
              </a>
            </div>
          </div>
  <script>
    document.querySelectorAll('a').forEach(el => {
      el.addEventListener('mouseover', () => {
        el.firstElementChild.style.transform = 'scale(1.03)';
      });
      el.addEventListener('mouseout', () => {
        el.firstElementChild.style.transform = 'scale(1)';
      });
    });
  </script>
    </body>
@endsection

