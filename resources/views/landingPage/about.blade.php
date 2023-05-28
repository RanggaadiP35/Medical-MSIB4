@extends('landingPage.index')
@section('content')
<section class="about_section layout_padding">
    <div class="container  ">
        <div class="row">
            <div class="col-md-6 ">
                <div class="img-box" style="width: 80%;">
                    <img src="{{ url('assets/images/logo.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6" style="margin-left: -7%;">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            TENTANG <span>WEBSITE</span>
                        </h2>
                    </div>
                    <p>
                    Website ini merupakan sebuah web yang dibuat bertujuan untuk mengetahui 
                    kondisi fisik masyarakat di kecamatan ... dengan mempertimbangkan data tinggi 
                    badan dan berat badan.
                    </p>
                    <!-- <p>
                    Website ini memiliki filosofi logo dari kata "pulse" berhubungan dengan detak 
                    jantung yang melambangkan kehidupan dan keberlanjutan, menggambarkan platform 
                    yang memantau dan mengukur kesehatan masyarakat dalam berbagai isu.
                    </p> -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection