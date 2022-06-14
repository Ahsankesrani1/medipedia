@extends('layout.master')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative">
            <p class="text-white text-center">Truly know your Medicine before you take them.</p>
            <input class="medipedia-search offset-md-4 col-md-4 offset-md-4" placeholder="medipedia search" type="search"
                id="search" />
            <ul id="searchData">
            </ul>
        </div>
    </section><!-- End Hero -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="section-title">
                <h2>Articles</h2>
            </div>

            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper" id="articlesSlider">
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Technology Section ======= -->
    <section id="courses" class="courses">
        <div class="container">
            <div class="section-title">
                <h2>Dive into the latest healthcare
                    technology...</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="{{ asset('./assets/img/t1.webp') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>News 1</h4>
                                <p class="price">$169</p>
                            </div>
                            <p>Healthcare news. These newsa
                                are related to technology. Users
                                can find the letest technology
                                being used worldwide for
                                healthcare. </p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <span>Antonio</span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bx bx-user"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bx bx-heart"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="{{ asset('./assets/img/t1.webp') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>News 2</h4>
                                <p class="price">$169</p>
                            </div>
                            <p>Healthcare news. These newsa
                                are related to technology. Users
                                can find the letest technology
                                being used worldwide for
                                healthcare. </p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <span>Antonio</span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bx bx-user"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bx bx-heart"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="{{ asset('./assets/img/t1.webp') }}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>News 3</h4>
                                <p class="price">$169</p>
                            </div>
                            <p>Healthcare news. These newsa
                                are related to technology. Users
                                can find the letest technology
                                being used worldwide for
                                healthcare. </p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <span>Antonio</span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bx bx-user"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bx bx-heart"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Technology Section -->
@endsection


@push('scripts')
    <script>
      $(document).ready(function()
      {
        function search(val)
        {
          $.ajax(
            {
              url:"{{route('client.medicines')}}",
              type: "GET",
              data: 
              {
                name:val,
              },
              success: function(response)
              {
                $("#searchData").html('');
                if (response.length != 0) 
                {
                  $.each(response, function(i,d) 
                  {
                    $("#searchData").append(`<li><a href='{{route('client.medicine')}}?id=${d.id}'>${d.name}<img src="${d.image}" height=50 width=50></a></li>`);
                  });
                }
                else
                {
                  $("#searchData").append(`<li>Sorry No Data Available</li>`);
                }

                if (val.length == 0) 
                {
                  $("#searchData").html('');
                }
                
              },
              error: function()
              {
                alert('Something Went Wrong');
              }
            });
        }

        $('#search').keyup(function()
        {
          search($(this).val());
        });

        // ARTICLES

        function articles()
        {
          $.ajax(
            {
              url:"{{route('articles')}}",
              type: "GET",
              success: function(response)
              {
                $.each(response, function(i,d) 
                {
                    $("#articlesSlider").append(
                        `<div class="swiper-slide">
                        <div class="card">
                            <div class="card-header">
                                <h3>${d.name}</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ request()->root() }}/${d.image}"
                                            class="img-fuild" style="width:100%;" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        ${d.description}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`
                    );   
                });
                
              },
              error: function()
              {
                alert('Something Went Wrong');
              }
            });
        }
        articles();

      });
    </script>
@endpush
