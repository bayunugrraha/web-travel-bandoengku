@extends('layouts.checkout')
@section('title', 'Checkout')

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
                                <li class="breadcrumb-item">
                                    Details
                                </li>
                                <li class="breadcrumb-item active">
                                    Checkout
                                </li>
                            </ol>
                        </nav>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-8 pl-lg-0">
                          <div class="card card-details">
                              <h1>Siapa yang akan Pergi?</h1>
                              <p>
                                Trip to Orchid Forest, Lembang
                              </p>
                              <div class="attendee">
                                  <table>
                                  <table class="table table-responsive-sm text-center">
                                      <thead>
                                          <tr>
                                              <td>Gambar</td>
                                              <td>Nama</td>
                                              <td>Jenis Kelamin</td>
                                              <td>Nomer Telpon</td>
                                              <td></td>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <img src="{{ url('frontend/images/avatar-1.png') }}" height="60" />
                                              </td>
                                              <td class="align-middle">
                                                  Asep Sudrajad
                                              </td>
                                              <td class="align-middle">
                                                Laki-Laki
                                            </td>
                                            <td class="align-middle">
                                                0851-xxxx-xxxx
                                            </td>
                                            <td class="align-middle">
                                               <a href="#">
                                               <img src="{{ url('frontend/images/icon_x.png') }}" alt="">
                                            </a>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <img src="{{ url('frontend/images/avatar-2.png') }}" height="60" />
                                            </td>
                                            <td class="align-middle">
                                                Yulinda Mertiany
                                            </td>
                                            <td class="align-middle">
                                              Perempuan
                                          </td>
                                          <td class="align-middle">
                                              0858-xxxx-xxxx
                                          </td>
                                          <td class="align-middle">
                                             <a href="#">
                                             <img src="{{ url('frontend/images/icon_x.png') }}" alt="">
                                          </a>
                                          </td>
                                        </tr>
                                      </tbody>
                                  </table>
                              </div>
                              <div class="member mt-3">
                                  <h2>Tambah Anggota</h2>
                                  <form class="form-inline">
                                      <label for="inputUsername" class="sr-only">Nama</label>
                                      <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Nama"/>
                                      
                                      <select name="inputJenisKelamin" id="inputJenisKelamin" class="custom-select mb-2 mr-sm-2">
                                          <option value="Laki-Laki" selected>Laki-Laki</option>
                                          <option value="Perempuan">Perempuan</option>
                                      </select>
      
                                      <label for="inputNomer" class="sr-only">Nomer Telepon</label>
                                      <input type="text" class="form-control mb-2 mr-sm-2" id="inputNomer" placeholder="Nomer Telepon"/>

                                      <button type="submit" class="btn btn-add-now mb-2 px-4">
                                        Tambah
                                    </button>

                                  </form>
                                  <h3 class="mt-2 mb-0">Catatan</h3>
                                  <p class="disclaimer mb-0">
                                    Anda hanya dapat mengundang anggota yang telah terdaftar di BdgKu.
                                  </p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="card card-details card-right">
                              <h2>Informasi Pembayaran</h2>
                              <table class="trip-informations">
                                  <tr>
                                      <th width="50%">Anggota</th>
                                      <td width="50%" class="text-right">
                                         2 Orang
                                      </td>
                                  </tr>
                                  <tr>
                                    <th width="50%">Harga Trip</th>
                                    <td width="50%" class="text-right">
                                       Rp 300.000
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total Harga</th>
                                    <td width="50%" class="text-right">
                                       Rp 600.000
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+Kode Unik)</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-blue">Rp 600.</span>
                                        <span class="text-orange">123</span>

                                    </td>
                                </tr>
                              </table>
                              <hr>

                              <h2>Cara Pembayaran</h2>
                              <p class="payment-instructions">harap selesaikan pembayaran sebelum Anda melanjutkan perjalanan yang menyenangkan</p>
                              <div class="bank">
                              <div class="bank-item pb-3">
                                  <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                                  <div class="description">
                                      <h3>PT Bdgku INDONESIA</h3>
                                      <p>0851 5727 7027</p>
                                      <p>Bank Central Asia</p>
                                  </div>
                                  <div class="clearfix"></div>
                              </div>
                              <div class="bank-item pb-3">
                                <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT Bdgku INDONESIA</h3>
                                    <p>1111 5227 7070</p>
                                    <p>Bank Jawa Barat</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            </div>
                        </div>
                          <div class="join-container">
                              <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Konfrimasi Pembayaran
                              </a>
                          </div>
                          <div class="text-center mt-3">
                              <a href="{{ route('detail') }}" class="text-muted">
                                  Batalkan Pemesanan
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/combined/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/combined/js/gijgo.min.js') }}"></script>
        <script>
            $(document).ready(function() {

            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
                }
            })
            });
        </script>
@endpush