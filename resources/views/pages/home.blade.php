@extends('layouts.app')

@section('title')
    BandoengKu
@endsection

@section('content')
<!-- Header -->
    <header class="text-center">
        <h1>Jelajahi Kota Bandung
            <br />
            Semudah sekali klik</h1>
            <p class="mt-3">Kamu akan melihat momen 
            <br />
            yang belum pernah dilihat sebelumnya</p>
            <a href="#" class="btn btn-get-started px-4 mt-4">
                YUK MULAI
            </a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Anggota</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>99</h2>
                    <p>Wisata</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>200</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Rekan</p>
                </div>
            </section>
        </div>

     <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata Terfavorit</h2>
                    <p>Sesuatu yang belum pernah kamu coba
                        <br /> 
                        sebelumnya di tempat ini</p>
                </div>
            </div>
        </div>

     </section>  
     
     <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/orchidforest.jpg');">
                    <div class="travel-country">BANDUNG</div>
                    <div class="travel-location">ORCHID FOREST</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                         Lihat Ditail   
                        </a>
                    </div>
                </div>  
              </div> 
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/kawahputih.jpg');">
                    <div class="travel-country">BANDUNG</div>
                    <div class="travel-location">KAWAH PUTIH</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                         Lihat Ditail   
                        </a>
                    </div>
                </div>  
              </div>  
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/rancaupas.jpg');">
                    <div class="travel-country">BANDUNG</div>
                    <div class="travel-location">RANCA UPAS</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                         Lihat Ditail   
                        </a>
                    </div>
                </div>  
              </div>  
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('frontend/images/tangkubanperahu.jpg');">
                    <div class="travel-country">BANDUNG</div>
                    <div class="travel-location">TANGKUBAN PERAHU</div>
                    <div class="travel-button mt-auto">
                        <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                         Lihat Ditail   
                        </a>
                    </div>
                </div>  
              </div>   
            </div>
        </div>
     </section>

     <section class="section-networks" id="networks">
       <div class="container">
           <div class="row">
               <div class="col-md-4">
                   <h2>Kerja Sama</h2>
                   <p>Perusahaan mempercayai kami 
                    <br />
                    lebih dari sekedar berwisata</p>
               </div>
              <div class="col-md-8 text-center">
                  <img src="{{ url('frontend/images/partner.jpg') }}" alt="Logo Partner" class="img-partner" />
              </div> 
           </div>
       </div>
     </section>

     <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Ketahui Apa yang Mereka Katakan</h2>
                    <p>Momen Memberi Mereka Pengalaman Terbaik</p>
                </div>
            </div>
        </div>
     </section>

     <section class="section section-testimonial-content" id="testimonialContent">
         <div class="container">
             <div class="section-popular-travel row justify-content-center">
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="card card-testimonial text-center">
                         <div class="testimonial-content">
                             <img src="{{ url('frontend/images/aldi.jpg') }}" alt="user" class="mb-4 rounded-circle">
                             <h3 class="mb-4">Aldi</h3>
                             <p class="testimonial">
                                "Terima kasih BdgKu Travel. 
                                Sangat menyenangkan berpergian 
                                bersama kalian, Trimakasih sudah 
                                menemani kami. Dan menjadi teman 
                                yg baik didalam liburan kami."
                             </p>
                         </div>
                         <hr>
                         <p class="trip-to mt-2">
                          Orchid Forest, Bandung   
                         </p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{ url('frontend/images/yulinda.jpg') }}" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Yulinda</h3>
                            <p class="testimonial">
                                "Menyenangkan Dan memorable.
                                Pelayanan bagus dan terpercaya. 
                               Makasih BdgKu Travel  berharap 
                               bisa kembali ke Bandung lagi.
                               See you next time"
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                         Ciater, Bandung   
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{ url('frontend/images/asep.jpg') }}" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Asep</h3>
                            <p class="testimonial">
                                "Terima kasih BdgKu adalah guide 
                                yang sangat berpengalaman yang saya kenal. 
                                rencana perjalanannya sangat santai dan ringkas,
                                tetapi tetap menyenangkan"
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                         Ranca Upas, Bandung   
                        </p>
                    </div>
                </div>
             </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                      I Need Help  
                    </a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                          Get Started 
                        </a>
                </div>
            </div>
         </div>

        </section>
    </main>    
@endsection