@extends('layouts.app')
@section('title', 'Detail Travel')

@section('content')
<main>
        <section class="section-details-header"></section>
          <section class="section-details-content">
              <div class="container">
                  <div class="row">
                      <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-8 pl-lg-0">
                          <div class="card card-details">
                              <h1>Orchid Forest</h1>
                              <p>
                                  Lembang, Bandung
                              </p>
                              <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontend/images/details.jpg" class="xzoom" id="xzoom-default" 
                                    xoriginal="frontend/images/details.jpg">
                                </div>
                                <div class="xzoom-thumb">
                                <a href="frontend/images/details1.jpg">
                                    <img src="frontend/images/details1.jpg" class="xzoom-gallery"
                                    width="128" xpreview="frontend/images/details1.jpg">
                                </a>
                                <a href="frontend/images/details2.jpg">
                                    <img src="frontend/images/details2.jpg" class="xzoom-gallery"
                                    width="128" xpreview="frontend/images/details2.jpg">
                                </a>
                                <a href="frontend/images/details3.jpg">
                                    <img src="frontend/images/details3.jpg" class="xzoom-gallery"
                                    width="128" xpreview="frontend/images/details3.jpg">
                                </a>
                                <a href="frontend/images/details4.jpg">
                                    <img src="frontend/images/details4.jpg" class="xzoom-gallery"
                                    width="128" xpreview="frontend/images/details4.jpg">
                                </a>
                                <a href="frontend/images/details5.jpg">
                                    <img src="frontend/images/details5.jpg" class="xzoom-gallery"
                                    width="128" xpreview="frontend/images/details5.jpg">
                                </a>
                                </div>
                              </div>
                              <h2>
                                  Tentang Wisata
                              </h2>
                              <p>
                                Orchid Forest Cikole Lembang baru dibuka sekitar Agustus tahun 2017. Tempat ini merupakan taman anggrek terluas di Indonesia. Berada di tengah kawasan hutan lindung dan terbentang seluas 12 hektar. Tidak kurang ada 157 jenis bunga anggrek beraneka macam dikembangkan disini.
                                Orchid Forest Cikole Bandung memfokuskan diri untuk memperkenalkan dan membudidayakan berbagai tanaman anggrek. Menggunakan metode lokal maupun internasional. 
                              </p>
                              <p>Tidak hanya berasal dari Indonesia yang merupakan negara kedua terbanyak varian anggrek. Tanaman anggrek di Orchid Forest juga berasal dari negara lain, seperti Venezuela, Argentina, Filipina, Peru, dan Amerika serikat.
                              </p>
                              <div class="features row">
                                  <div class="col-md-4">
                                      <img src="frontend/images/ic_event.png" alt="" class="features-image"/>
                                          <div class="description">
                                              <h3>Featured Event</h3>
                                              <p>LaLaLa Fest</p>
                                          </div>
                                      </h3>
                                  </div>
                                  <div class="col-md-4 border-left">
                                    <div class="description">
                                      <img src="frontend/images/ic_bahasa.png" alt="" class="features-image"/>
                                        <div class="description">
                                            <h3>Language</h3>
                                            <p>Bahasa Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                    <img src="frontend/images/ic_foods.png" alt="" class="features-image"/>
                                        <div class="description">
                                            <h3>Foods</h3>
                                            <p>Local Foods</p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="card card-details card-right">
                              <h2>Anggota yang Bergabung</h2>
                              <div class="members my-2">
                                <img src="/frontend/images/member-1.png" class="member-image mr-1">
                                <img src="/frontend/images/member-2.png" class="member-image mr-1">
                                <img src="/frontend/images/member-3.png" class="member-image mr-1">
                                <img src="/frontend/images/member-4.png" class="member-image mr-1">
                                <img src="/frontend/images/member-99.png" class="member-image mr-1">
                              </div>
                              <hr>
                              <h2>Informasi Perjalanan</h2>
                              <table class="trip-informations">
                                  <tr>
                                      <th width="50%">Keberangkatan</th>
                                      <td width="50%" class="text-right">
                                         25 Okt, 2020 
                                      </td>
                                  </tr>
                                  <tr>
                                    <th width="50%">Durasi</th>
                                    <td width="50%" class="text-right">
                                       4H 3M 
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Tipe Trip</th>
                                    <td width="50%" class="text-right">
                                       Open Trip
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Harga</th>
                                    <td width="50%" class="text-right">
                                       Rp 300.000/orang
                                    </td>
                                </tr>
                              </table>
                          </div>
                          <div class="join-container">
                              <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                  Bergabung Sekarang
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
         $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint:'#333',
            xoffset: 15
         });
        });
    </script>
@endpush