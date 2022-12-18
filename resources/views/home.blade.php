<!--
    Programmer Name: Ms. Lim Jia Yong, Project Manager
    Description: Home / landing page for customers or unregistered user
    Edited on: 28 February 2022
 -->
<link rel="stylesheet" href="{{ asset('css/foodhub.css') }}">
<link rel="stylesheet" href="{{ asset('css/media_query.css') }}">
@extends('layouts.app')

@section('links')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('bodyID')
    {{ 'home' }}
@endsection

@section('navTheme')
    {{ 'dark' }}
@endsection

@section('logoFileName')
    {{ URL::asset('/images/White Logo.png') }}
@endsection


@section('content')
    <section class="banner">
        <div class="container">
            <div class="col-md-10 col-lg-8 details">
                <h3>FRESHEST SUSHI IN TOWN</h3>
                <h1>Experience a taste of sushi as if you are in Japan</h1>
                <a href="{{ route('menu') }}" class="btn primary-btn" style="width:250px; text-align:center">Discover menu</a>
            </div>

        </div>
    </section>

    <section class="chefs">
        <div class="container">
            <h2 class="title flex-center">Meet our chefs</h2>

            <section class="about" id="about">

                <div class="about-left">

                    <div class="img-box">
                        <img src="/images/chef-1.jpg" alt="about image" class="about-img" width="250" loading="lazy">
                    </div>

                    <div class="abs-content-box">
                        <div class="dotted-border">
                            <p class="number-lg">14</p>
                            <p class="text-md">Years <br> Experiense</p>
                        </div>
                    </div>



                </div>

                <div class="about-right">

                    <h2 class="section-title">We are doing more than
                        you expect</h2>

                    <p class="section-text">
                        Faudantium magnam error temporibus ipsam aliquid neque quibusdam dolorum, quia ea numquam assumenda
                        mollitia
                        dolorem
                        impedit. Voluptate at quis exercitationem officia temporibus adipisci quae totam enim dolorum,
                        assumenda.
                        Sapiente
                        soluta nostrum reprehenderit a velit obcaecati facilis vitae magnam tenetur neque vel itaque
                        inventore eaque
                        explicabo
                        commodi maxime! Aliquam quasi, voluptates odio.
                    </p>

                    <p class="section-text">
                        Consectetur adipisicing elit. Cupiditate nesciunt amet facilis numquam, nam adipisci qui voluptate
                        voluptas
                        enim
                        obcaecati veritatis animi nulla, mollitia commodi quaerat ex, autem ea laborum.
                    </p>



                </div>

            </section>

            <section class="about" id="about">

                <div class="about-left">

                    <div class="img-box">
                        <img src="/images/chef-2.jpg" alt="about image" class="about-img" width="250" loading="lazy">
                    </div>

                    <div class="abs-content-box">
                        <div class="dotted-border">
                            <p class="number-lg">15</p>
                            <p class="text-md">Years <br> Experiense</p>
                        </div>
                    </div>



                </div>

                <div class="about-right">

                    <h2 class="section-title">We are doing more than
                        you expect</h2>

                    <p class="section-text">
                        Faudantium magnam error temporibus ipsam aliquid neque quibusdam dolorum, quia ea numquam assumenda
                        mollitia
                        dolorem
                        impedit. Voluptate at quis exercitationem officia temporibus adipisci quae totam enim dolorum,
                        assumenda.
                        Sapiente
                        soluta nostrum reprehenderit a velit obcaecati facilis vitae magnam tenetur neque vel itaque
                        inventore eaque
                        explicabo
                        commodi maxime! Aliquam quasi, voluptates odio.
                    </p>

                    <p class="section-text">
                        Consectetur adipisicing elit. Cupiditate nesciunt amet facilis numquam, nam adipisci qui voluptate
                        voluptas
                        enim
                        obcaecati veritatis animi nulla, mollitia commodi quaerat ex, autem ea laborum.
                    </p>



                </div>

            </section>

            <section class="about" id="about">

                <div class="about-left">

                    <div class="img-box">
                        <img src="/images/chef-3.jpg" alt="about image" class="about-img" width="250" loading="lazy">
                    </div>

                    <div class="abs-content-box">
                        <div class="dotted-border">
                            <p class="number-lg">17</p>
                            <p class="text-md">Years <br> Experiense</p>
                        </div>
                    </div>



                </div>

                <div class="about-right">

                    <h2 class="section-title">We are doing more than
                        you expect</h2>

                    <p class="section-text">
                        Faudantium magnam error temporibus ipsam aliquid neque quibusdam dolorum, quia ea numquam assumenda
                        mollitia
                        dolorem
                        impedit. Voluptate at quis exercitationem officia temporibus adipisci quae totam enim dolorum,
                        assumenda.
                        Sapiente
                        soluta nostrum reprehenderit a velit obcaecati facilis vitae magnam tenetur neque vel itaque
                        inventore eaque
                        explicabo
                        commodi maxime! Aliquam quasi, voluptates odio.
                    </p>

                    <p class="section-text">
                        Consectetur adipisicing elit. Cupiditate nesciunt amet facilis numquam, nam adipisci qui voluptate
                        voluptas
                        enim
                        obcaecati veritatis animi nulla, mollitia commodi quaerat ex, autem ea laborum.
                    </p>



                </div>

            </section>
            {{-- Old Chef List --}}
            {{-- <div class="row justify-content-evenly align-items-center chefs-wrapper">
                <div class="card col-lg-3 col-md-8 col-10 mt-5">
                    <div class="chef-img d-flex align-items-center justify-content-center">
                        <img src="./images/chef1.jpg" alt="">
                    </div>
                    <div class="chef-desc d-flex flex-column align-items-center justify-content-start">
                        <p class="chef-name">Chin Chong</p>
                        <p class="chef-position">Kitchen Lead</p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-8 col-10 mt-5">
                    <div class="chef-img d-flex align-items-center justify-content-center">
                        <img src="./images/chef2.jpg" alt="">
                    </div>
                    <div class="chef-desc d-flex flex-column align-items-center justify-content-start">
                        <p class="chef-name">Louis Hansel</p>
                        <p class="chef-position">Sashimi Expert</p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-8 col-10 mt-5">
                    <div class="chef-img d-flex align-items-center justify-content-center">
                        <img src="./images/chef3.jpg" alt="">
                    </div>
                    <div class="chef-desc d-flex flex-column align-items-center justify-content-start">
                        <p class="chef-name">Febrian Zakaria</p>
                        <p class="chef-position">Kitchen Helper</p>
                    </div>
                </div>
            </div> --}}

        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2 class="title flex-center">Contact Us</h2>
            <div class="flex-center contact-wrapper">
                <div class="form-wrapper flex-center">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" style="height: 100px"></textarea>
                        </div>
                        <div class="w-100 flex-center">
                            <a href="mailto:muhammedkamilbarad@gmail.com" ?subject=Feedback&body=Message"
                                class="primary-btn msg-btn w-100 px-3 py-2 text-center rounded">
                                Send Message
                            </a>
                        </div>
                    </form>
                </div>

                <div class="gmap flex-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8810.37814524434!2d39.21699853383318!3d38.673268427506606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfab09781af4df30a!2zTWVya2V6IE9jYWtiYcWfxLE!5e0!3m2!1sar!2str!4v1670422895558!5m2!1sar!2str"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
    </section>
@endsection
