@extends('layouts.bmcfoodapp')

@section('content')
    <div class="history" style="background-image: url('{{ asset('/images/bmcfood/History.jpg')}}'); height:100%; padding:50px;">
        <div class="container">
            <h3>Technical Services</h3>
            <hr class="hr">
            <br>
            <div class="row">
                <div class="col-md-6">
                    <br><br>
                    <h5>Expert Tolling Services</h5>
                    <p>
                        BMC is committed to providing reliable tolling services to all of its 
                        clients – our factory certified by several standards of manufacturing 
                        quality assurance such as; HACCP, Good Manufacturing Practices (GMP), 
                        Halal Certification, and FDA Accreditation. Our clients are well assured 
                        that their tolling and manufacturing needs are met.
                    </p>
                 </div>
                 <div class="col-md-6">
                    <img src="/images/bmcfood/techservice/image2.png" width="500px;" height="400px;">
                 </div>
            </div>
        </div>
    </div>
    <br>
@endsection    