@extends('landingPage.index')
@section('content')
<section class="survey_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- <h1>helo</h1> -->
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="img-box" style="width: 80%;">
                            <h2><img src="{{ url('assets/images/user.png') }}" alt=""> Input Data Diri</h2>
                        </div>
                        <form>
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" placeholder=" Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Domisili</label>
                                <input type="text" class="form-control" id="domisili" placeholder=" Masukkan Alamat Domisili">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Gender</label>
                                <select class="form-control" id="gender">
                                    <option onlyread>Pilih</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Umur</label>
                                <input type="text" class="form-control" id="age" placeholder=" Masukkan Umur">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Tinggi Badan</label>
                                <input type="text" class="form-control" id="bodyHeight" placeholder=" Masukkan Tinggi Badan">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Berat Badan</label>
                                <input type="text" class="form-control" id="bodyWeight" placeholder=" Masukkan Berat Badan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection