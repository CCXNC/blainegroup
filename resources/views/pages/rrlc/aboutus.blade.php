@extends('layouts.rrlcapp')

@section('content')
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/carousel1/header6.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel1/header7.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/carousel1/header1.jpg" alt="Third slide">
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
    <section class="page-title">
        <div class="container">
            <div class="col-md-12">
                <h3>About Us</h3>
            </div>
        </div>
    </section>
    <section class="about-1">
        <div class="container">
            <div class="col-md-12">
                <h2>Refamed About Us</h2>
                <hr class="hr">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, modi dolorum. Dolores aliquam voluptatem earum alias molestiae quas similique, corporis nemo totam illum, illo numquam quis. Ratione perferendis, maiores sed nostrum mollitia soluta quos amet inventore impedit laboriosam laudantium asperiores corrupti obcaecati. Necessitatibus impedit est minus fugit. Mollitia facilis eligendi expedita architecto minima laudantium suscipit alias maxime ratione! Eaque consequuntur voluptas provident ipsa dignissimos quae placeat! Architecto eligendi rerum veniam ipsum exercitationem alias deleniti, ratione, omnis reiciendis nam at aut necessitatibus iste quae sit cum nostrum! Facilis magnam eum, excepturi quod officiis maiores accusamus quis veritatis repellat ipsam corporis possimus a illum aperiam! Expedita laborum nisi accusamus ad aliquam et dolor sint dignissimos, quia voluptates nostrum repudiandae. Velit, repellat. Iusto harum omnis, ipsum atque molestiae similique saepe libero cupiditate inventore rerum minus possimus sint quo consequatur quisquam assumenda consequuntur iure quibusdam illum ipsa, provident perferendis aliquam! Earum ab dolore excepturi!</p>
            </div>
            <div class="header">
                <div class="col-md-12">
                    <h2>Address</h2>
                    <hr class="hr">
                </div>    
                <div class="col-md-8">    
                    <h5><span class="fa fa-map-marker">&nbsp;</span><span>Main Office:</span>Blaine Industrial Complex Brgy.14 Kamias Road Governor`s Drive Bo.Bancal Carmona, Cavite, Philippines 4116</h5>
                </div>
            </div>
            <br>
            <center>
                <div style="width: 1100px; height: 500px;">
                    {!! Mapper::render() !!}
                </div>
            </center>
            <br>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        CORPORATE SOCIAL RESPONSIBILITY
                    </div>
                    <div class="card-body">
                    <center><img src="/images/blank.png" width="1000px;" height="350px;" alt=""></center>
                      <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis eligendi reiciendis impedit architecto quaerat quisquam incidunt sapiente sed odio dignissimos nihil modi, facilis porro illo illum. Odit dolore exercitationem minima natus, eligendi tempora in assumenda vero pariatur doloribus, cupiditate similique provident excepturi fugit libero modi dignissimos, laborum sint ipsam consectetur. Placeat ipsum quam fuga vel earum laudantium porro ut quis libero, nihil ab voluptas tempore quasi id aut sed? Possimus inventore sint quo eaque nihil facere sapiente velit reiciendis? Modi dignissimos provident quisquam eius, fugiat nostrum quibusdam deserunt, error cum dolorem vel in, unde distinctio nihil! Blanditiis reiciendis quae, et ea, placeat nesciunt alias omnis sed soluta fugit impedit similique id temporibus dignissimos numquam sunt rerum consectetur ad ratione. Nesciunt facilis fuga delectus ex quam nobis. Excepturi, vitae? Ipsum, natus. Nulla nam inventore ducimus sapiente, ipsum tenetur, dignissimos itaque blanditiis non, corrupti veritatis provident odio aliquam sequi? Deleniti, minima perspiciatis.</P>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
