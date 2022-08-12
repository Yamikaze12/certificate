<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<style>
    body {
            min-height: 75rem;
            padding-top: 4.5rem;
        }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm" id="Navbar">
        <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/logo.png" width="17%" alt="">
          </a>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link text-success" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Institute
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Online Courses</a>
                <a class="dropdown-item" href="#">Synchronous Courses</a>
                <a class="dropdown-item" href="#">Certificate Verification</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-success my-2 my-sm-0" href="/certificates" role="button">Login / Register</a>
          </form>
        </div>
    </div>
      </nav>


    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <p class="text-muted">VERIFICATION</p> <hr width="15px">

                    <h1><strong>CERTIFICATE VERIFICATION</strong></h1>

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
                                                <h3>Unique Certificate Code : *</h3>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label>Certificate No. <em>*</em></label>
                                                <input maxlength="30" name="keyword" value="{{ request('keyword') }}" type="search" class="form-control" Placeholder="Certificate No." />
                                                
                                            </div>
                                            <div class="col-md-12" style="margin-bottom: 20px;">
                                                <a class="btn btn-primary" ><i class="bi bi-search"></i>&nbsp;&nbsp;SEARCH</a>
                                            </div>
                                        </div>     
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="/certificate_blank.jpg" alt="" width="100%" />
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="w-100 py-4 flex-shrink-0 bg-light">
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
        
        <div class="w-100 mt-5 border-top py-5">
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
<script src="/navonscroll.js"></script>
<script>
     hide_on_scroll({
        nav_id : 'Navbar',// you must specify this for plugin to work
        nav_offset           : 200,     // after how much y-scroll, nav should hide onscroll down
        nav_position         : 'top',   // you want to see nav bar at 'top' or 'bottom', default 'top'
        hide_onscroll_mobile : false,   // disables hide-onscroll for mobile, you can set it to true
        mobile_width         : 576      // viewport width below which it disables hide-onscroll if above is false

        });
</script>

</body>
</html>