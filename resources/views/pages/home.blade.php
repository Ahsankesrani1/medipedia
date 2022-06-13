@extends('layout.master')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative">
      <p class="text-white text-center">Truly know your Medicine before you take them.</p>
      <input class="medipedia-search offset-md-4 col-md-4 offset-md-4" placeholder="medipedia search" type="search" id="search"/>
      <ul id="searchData">
      </ul>
    </div>
  </section><!-- End Hero -->


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
                $.each(response, function(i,d) 
                {
                  $("#searchData").append(`<li><a href='medicine/${d.id}'>${d.name}<img src="${d.image}" height=50 width=50></a></li>`);
                });
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
      });
    </script>
@endpush