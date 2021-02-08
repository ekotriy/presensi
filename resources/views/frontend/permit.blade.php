@extends('frontend')

@section('section')
 <!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-5 col-lg-6 col-md-9">

        <div class="card o-hidden border-0  my-3 bg-white">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="px-2 py-3">
                            <ul class="nav position-relatif">
                                <li class="nav-item">
                                    <a href="/dashboard" class="back nav-link text-right pl-1"><i
                                            class="fas fa-arrow-left"></i></a>
                                </li>
                            </ul>

                            <form class="user mt-5">

                                <div class="box-radio p-2">
                                    <div class="form-check ml-2">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="cuti" value="option1" name="izin">
                                        <label class="form-check-label ml-2" for="cuti">
                                            Hari ini saya cuti
                                        </label>
                                    </div>
                                </div>

                                <div class="box-radio p-2 mt-3">
                                    <div class="form-check ml-2">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="sakit" value="option1" name="izin">
                                        <label class="form-check-label ml-2" for="sakit">
                                            Hari ini saya sakit
                                        </label>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <span>Mohon menambahkan catatan tentang ketidakhadiran.</span>
                                </div>

                                <div class="form-group mt-5">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                        name="pesan" placeholder="Ketik catatan..."></textarea>
                                </div>
                                <button class="btn btn-purple  btn-block mb-2" name="submit"
                                    type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection