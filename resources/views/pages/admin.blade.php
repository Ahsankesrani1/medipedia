@extends('layout.master')
@section('content')
<section id="hero" class="d-flex justify-content-center align-items-center">
    {{-- form section --}}
    <div class="container position-relative">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3>Contact Form</h3>
                </div>
                <div class="card-body row">
                    <div class="col-md-3">
                     <p>Name : <span>ahsan</span></p>
                    </div>
                    <div class="col-md-3">
                     <p>Email : <span>ahsan@gmail.com</span></p>
                    </div>
                    <div class="col-md-3">
                     <p>subject : <span>php</span></p>
                    </div>
                    <div class="col-md-3">
                     <p>message : <span>hello</span></p>
                    </div>
                </div>
                <div class="card-body row">
                    <div class="col-md-3">
                     <p>Name : <span>ahsan</span></p>
                    </div>
                    <div class="col-md-3">
                     <p>Email : <span>ahsan@gmail.com</span></p>
                    </div>
                    <div class="col-md-3">
                     <p>subject : <span>php</span></p>
                    </div>
                    <div class="col-md-3">
                     <p>message : <span>hello</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- form section --}}
</section>
{{-- artical section --}}
<section id="contact" class="contact mt-5">
    <div class="container">
        <div class="section-title">
            <h2>Articles Update</h2>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 mt-2 mt-lg-0">
                <form class="php-email-form">
                    <div class="form-group mt-3">
                        <select  class="form-control">
                            <option value="1" selected>--select Articale---</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="Articale" rows="5" placeholder="Articale" required></textarea>
                    </div>
                    <div class="text-center"><button type="submit">Update</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
{{-- artical section --}}

@endsection
