@extends('layouts.app')
@section('title', 'Contact')

@section('content')
    @php
        $heroImage = $contactHero?->image_url ?? asset('images/image4.jpeg');
        $email = $profile?->email ?? 'support@nigmagrid.com';
        $phone = $profile?->phone ?? '+62 812 3456 7890';
        $address = $profile?->address ?? 'Jakarta, Indonesia';
    @endphp

    <section class="page-hero text-center text-white" style="background-image:url('{{ $heroImage }}')">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <span class="badge rounded-pill text-bg-warning mb-3 px-3 py-2">Contact</span>
            <h1 class="display-4 fw-bold section-title">Contact Us</h1>
            <p class="lead mt-3 mx-auto" style="max-width:760px;">Let’s connect and build your digital future.</p>
        </div>
    </section>

    <section class="container section-pad">
        <div class="row g-5">
            <div class="col-lg-5">
                <p class="text-brand fw-semibold mb-2">Get in Touch</p>
                <h2 class="section-title mb-4">Reach Our Team</h2>
                <div class="brand-card p-4 mb-3">
                    <h6 class="fw-bold">Email</h6>
                    <p class="text-muted mb-0">{{ $email }}</p>
                </div>
                <div class="brand-card p-4 mb-3">
                    <h6 class="fw-bold">Phone</h6>
                    <p class="text-muted mb-0">{{ $phone }}</p>
                </div>
                <div class="brand-card p-4">
                    <h6 class="fw-bold">Location</h6>
                    <p class="text-muted mb-0">{{ $address }}</p>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="brand-card p-4 p-lg-5">
                    <h3 class="fw-bold mb-2">Send Message</h3>
                    <p class="text-muted mb-4">Form ini bersifat tampilan. Hubungi kami lewat kontak resmi di samping.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="Your name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="you@email.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Subject</label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="5" placeholder="Write your message..."></textarea>
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-brand px-4">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
