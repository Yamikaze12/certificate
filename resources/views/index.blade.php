<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<style>
    body {
    font-family: "Open Sans", sans-serif;
    color: #444444;
    }
    footer {
    color: #37423b;
    font-size: 14px;
    background: #eef0ef;
    }
</style>
<body>

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title" style="margin-bottom: 20px;">
                    <p>VERIFICATION</p>
                    <h2 class="mt-1"><strong>CERTIFICATE VERIFICATION</strong></h2>
                </div>
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-md-12" style="margin-bottom: 20px;">
                        <p>
                            This page allows you to verify whether the certificates you have been presented by one of our students are authentic. Every certificate includes an individual verification number in the bottom right corner of the page.
                        </p>
                        <p>
                            For every electronic certificate that is generated, a record is created and saved in our database. After you have entered the number, the database will verify whether such a record exists. If it does, you will receive a confirmation of the following information: Student First Name, Student Last Name, Course Name.
                        </p>
                        <h5>Verification of Certificates Fast. Secure. Trusted.
                        </h5>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="ContentPlaceHolder1_UpdatePanel_search">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <div class="row">
                                                    <div class="col-md-12 form-group">
                                               <h3>Unique Certificate Code : *</h3>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label>Certificate No. <em>*</em></label>
                                                <form action="{{ route('index') }}" method="GET" role="search">
                                                {{-- <form action="/index/search" method="GET" role="search"> --}}
                                                    <input type="search" maxlength="30" name="search" id="search" placeholder="Certificate No." class="form-control" value="{{ request('index') }}" /><br>
                                                  
                                                    <button type="submit" class="btn btn-primary" value="search" style="margin-bottom: 20px;">
                                                        <i class="bi bi-search"></i>&nbsp;&nbsp;SEARCH
                                                    </button>
                                                  
                                                </form>
                                            </div>
                                           
                                        </form>
                                        </div>     
                                    </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            @include('search')
        </section>
    </main>

    <footer class="w-100 py-4 mt-5 flex-shrink-0 bg-light">
        <div class="container py-4 ">
            <div class="row gy-4 gx-5">
                <div class="col-md-3">
                    <h3>IEEEL Institute</h3>
                            <p>
                                1 Scotts Road, #24-10
                                <br />
                                Shaw Centre
                                <br />
                                Singapore 228208
                                <br />
                                <br />
                                <strong>Phone:</strong> +62 8595 4798 033<br>
                                <strong>Email:</strong> ieeelinstitute@gmail.com<br>
                            </p></div>
                <div class="col-lg-4 col-md-6">
                    <h4>Join Our Newsletter</h4>
                        <p>However, none of the things I will read but it is our great fault that I will read many</p> <form action="#">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" id="button-addon2" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="w-100 mt-5 border-top py-4">
            <div class="container">
                <div class="row">
          <div class="col-md-6 col-lg-8">

            <p class="copyright">
            &copy; Copyright<script>document.write(new Date().getFullYear());</script> <strong>IEEEL Institute.</strong> All Rights Reserved
                </p>
          </div>
          <div class="col-md-6 col-lg-4 text-md-right">
              <p class="mb-0 list-unstyled">
                  <a class="mr-md-3" href="#"><i class="bi bi-twitter"></i></a>
                  <a class="mr-md-3" href="#"><i class="bi bi-facebook"></i></a>
                  <a class="mr-md-3" href="#"><i class="bi bi-instagram"></i></a>
                  <a class="mr-md-3" href="#"><i class="bi bi-twitter"></i></a>
                  <a class="mr-md-3" href="#"><i class="bi bi-whatsapp"></i></a>
              </p>
          </div>
        </div>
            </div>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
</body>
</html>