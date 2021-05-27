@extends('home')
@section('user-home-contents')

<section class="container py-5 text-center">
    <div class="row py-lg-5">
        <div class="mx-auto col-lg-6 col-md-8">
            <h1 class="fw-light">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        </div>
    </div>
</section>

<div class="container">

    <div class="card card-primary">
        <div class="card-header">
            <p class="card-title">With supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-body">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    <p class="card-title">Default radio</p>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    <p class="card-title">Default radio</p>
                </label>
            </div>
        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <p class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, vitae laboriosam deserunt minus nulla magni placeat maiores? Eaque dolore impedit enim obcaecati, dolorem quo? Enim accusamus reiciendis quia iste. Facilis.</p>
        </div>
        <div class="card-body">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label " for="flexRadioDefault1">
                    <p class="card-title">Default radio</p>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    <p class="card-title">Default radio</p>
                </label>
            </div>
        </div>
    </div>

</div>

@endsection

