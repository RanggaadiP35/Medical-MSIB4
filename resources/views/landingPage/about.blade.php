@extends('landingPage.index')
@section('content')
<section class="about_section ">
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
                    Website ini...... are many variations of passages of Lorem Ipsum available, 
                    but the majority have suffered alteration in some form, by injected humour, 
                    or randomised words which don't look even slightly believable. If you are going 
                    to use a passage of Lorem Ipsum, you need to be sure there isn't anything 
                    embarrassing hidden in the middle of text.
                    </p>
                    <p>
                    Website ini memiliki filosofi logo dari kata "pulse" berhubungan dengan detak 
                    jantung yang melambangkan kehidupan dan keberlanjutan, menggambarkan platform 
                    yang memantau dan mengukur kesehatan masyarakat dalam berbagai isu.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection