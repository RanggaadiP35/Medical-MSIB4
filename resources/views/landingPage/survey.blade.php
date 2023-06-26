@extends('landingPage.index')
@section('content')
<section class="survey_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-bottom: 53%;">
                <div class="img-security" style="width: 80%;">
                    <img src="{{ url('assets/images/gembok.png') }}" alt="" style="margin-left: 6px;">
                    <h2> Keamanan Data</h2>
                </div>
                <br />
                <div class="img-sub" style="width: 80%;">
                    <img src="{{ url('assets/images/vector.png') }}" alt="">
                    <p> Kami menghargai privasi Anda dengan sangat serius. Data
                        pribadi yang Anda berikan akan digunakan secara eksklusif
                        untuk menghitung kesehatan Anda, dan tidak akan dibagikan
                        kepada pihak lain tanpa izin Anda.</p>
                </div>
                <br />
                <div class="img-sub" style="width: 80%;">
                    <img src="{{ url('assets/images/vector.png') }}" alt="">
                    <p> Keamanan informasi Anda adalah prioritas utama kami.
                        Dengan langkah-langkah keamanan yang ketat,
                        kami menjamin bahwa data Anda akan disimpan
                        dengan aman dan hanya digunakan untuk tujuan
                        perhitungan kesehatan Anda.</p>
                </div>
                <br />
                <div class="img-sub" style="width: 80%;">
                    <img src="{{ url('assets/images/vector.png') }}" alt="">
                    <p> Kami memahami betapa pentingnya privasi data pribadi
                        Anda. Dengan memberikan data Anda, Anda membantu kami
                        memberikan solusi kesehatan yang personal dan terbaik bagi
                        Anda. Jangan khawatir, informasi Anda akan tetap rahasia
                        dan digunakan dengan penuh tanggung jawab.</p>
                </div>
            </div>
            <div class="col-md-6" style="margin-bottom: 36%;">
                <div class="card">
                    <div class="card-body">
                        <div class="img-box" style="width: 80%;">
                            <h2><img src="{{ url('assets/images/user.png') }}" alt=""> Input Data Diri</h2>
                        </div>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('survey.store') }}" method="POST" data-toggle="validator">
                            {{ csrf_field() }}
                            <div class="form-group has-validation">
                                <label for="exampleFormControlInput1">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" name="name" value="" placeholder=" Masukkan Nama Lengkap" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Domisili</label>
                                <!-- <input type="text" class="form-control" id="domisili" name="domisili" value="" placeholder=" Masukkan Alamat Domisili"> -->
                                <select class="form-control" id="domisili" name="domisili" required id="domisili_id">
                                    <option value="option_select" disabled selected>Pilih Domisili</option>
                                    @foreach($domisili as $rowDomisili)
                                    <option value="{{ $rowDomisili->id }}">{{ $rowDomisili->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Gender</label>
                                <select class="form-control" id="gender" name="gender">
                                    <option onlyread>Pilih</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Umur</label>
                                <input type="text" class="form-control" id="age" name="age" value="" placeholder=" Masukkan Umur">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tinggi Badan</label>
                                <input type="text" class="form-control" id="bodyHeight" name="bodyHeight" value="" placeholder=" Masukkan Tinggi Badan">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Berat Badan</label>
                                <input type="text" class="form-control" id="bodyWeight" name="bodyWeight" value="" placeholder=" Masukkan Berat Badan">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Dengan menekan tombol 'Setuju' di bawah, Anda mengkonfirmasi bahwa semua
                                    data yang Anda masukkan dalam formulir ini adalah akurat dan lengkap.
                                </label>
                            </div>
                            <br />
                            <div class="button">
                                <button type="submit" name="proses" value="simpan" class="btn btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection