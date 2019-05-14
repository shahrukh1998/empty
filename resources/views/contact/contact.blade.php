@extends('layout.mainLayout')
@section('meta-tag')
    @endsection
@section('content')
    <section class="about-us-top">

    </section>
    <section class="contact-us mb-30">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.4950962468515!2d77.36154861455918!3d28.614920091629862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce539757e597f%3A0xed782325458142fc!2sAnrari!5e0!3m2!1sen!2sin!4v1556805587396!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>Contact Us</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Name <sup>*</sup></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">Email <sup>*</sup></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">Subject <sup>*</sup></label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-15">
                        <div class="col-12">
                            <label for="">Add Your Comment <sup>*</sup></label>
                            <textarea name="" id=""  rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <a href="" class="btn send warning-bg text-white">Send</a>
                </div>
                <div class="col-md-4">
                    <h3>Information</h3>
                    <div class="informationContent">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, sed? Vel magni recusandae amet. Expedita eveniet nulla aliquam minus minima?</p>
                        <p><strong class="fw-7">Address: </strong>C 56/A3 Ground Floor, Sector 62, C Block, Phase 2, Industrial Area, Sector 62, Noida, Uttar Pradesh 201301</p>
                        <p><strong class="fw-7">Email: </strong>info@anatelventures.com</p>
                        <p><strong class="fw-7">Phone: </strong>+91-9999127637</p>
                    </div>

                    <h3>Working Hours</h3>
                    <div class="informationContent">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, sed? Vel magni recusandae amet. Expedita eveniet nulla aliquam minus minima?</p>
                        <p><strong class="fw-7">Address: </strong> C 56/A3 Ground Floor, Sector 62, C Block, Phase 2, Industrial Area, Sector 62, Noida, Uttar Pradesh 201301</p>
                        <p><strong class="fw-7">Email: </strong>info@anatelventures.com</p>
                        <p><strong class="fw-7">Phone: </strong>+91-9999127637</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection