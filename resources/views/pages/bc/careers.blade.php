@extends('layouts.bcgroupapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/carousel/img1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel/img2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel/img3.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> 
    <br>
    <section class="bc-page-title">
        <div class="container">
            <div class="col-md-12">
                <h3>Careers</h3>
            </div>
        </div>
    </section>
    <section class="section bc-careeropp">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal" action="">
                        <div class="form-group">
                            <label class="control-label" for="name">Name</label>
                            <div>
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name">Email</label>
                            <div >
                                <input class="form-control" type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label class="control-label" for="telephone_mobile_number">Telephone or Mobile Number</label>
                            </div>
                            <div>
                                <input class="form-control" type="text" name="telephone_mobile_number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <label class="control-label" for="telephone_mobile_number"></label>
                            </div>
                            <div>
                                <label class="control-label" for="telephone_mobile_number"></label>
                            </div>
                            <select class="form-control" name="#" id="">
                            <option value="#">Sales and Marketing</option>
                            <option value="#">Quality Management</option>
                            <option value="#">Production Operation</option>
                            <option value="#">Research & Development</option>
                            <option value="#">Supply Chain / Logistics</option>
                            <option value="#">Finance</option>
                            <option value="#">Engineering</option>
                            <option value="#">IT / Computer</option>
                            <option value="#">Human Resources</option>
                            <option value="#">Training & Development</option>
                            <option value="#">Law / Legal</option>
                            <option value="#">Environmenta / Health / Safety</option>
                            <option value="#">Admin & Security</option>
                            <option value="#">Others</option>
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="file">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div>
                                <input class="btn" type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <img src="/images/bc/image4.png" width="500px;" height="350px;" alt="Video">
                </div>
            </div>
        </div>
    </section>
@endsection    