@extends('layouts.app')

@section('title', 'Travel Agent Payment - NginepKuy')
@section('content')
    <div class="container my-5">
        <div class="card border-0 shadow my-2 px-2 rounded-30">
            <div class="card-body my-2">
                <h3 class="fw-bold text-teal">Payment Summary</h3>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <h3>{{ $consultant->name }}</h3>
                        <p>{{ $consultant->ota_name }}</p>
                        <p>Price: Rp100.000 <br>
                            Duration: 1 hour
                        </p>
                    </div>
                    <div class="col-md-4 d-flex align-items-end justify-content-end">
                        <h5>Grand Total:
                            Rp100.000
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="mt-5">DO YOUR PAYMENT NOW</h3>
        <hr>
        <div class="accordion mt-3" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Bank Transfer
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body my-4">
                        <form action="{{ route('consultations.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="consultant_id" value="{{ $consultant->id }}">
                            <input type="hidden" name="payment_type" value="BNK">
                            <p>Total Payment:
                                Rp100.000
                            </p>
                            <p>Transfer to: 3892478923748 a/n Brian</p>
                            <hr>
                            <label for="transfer_proof">Upload your transfer proof</label>
                            <input type="file" class="form-control" name="transfer_proof">
                            <div class="d-flex justify-content-end mt-4">
                                <button type="submit" class="btn btn-lg btn-primary">Checkout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Cut Balance
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body mt-3">
                        <form action="{{ route('consultations.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="consultant_id" value="{{ $consultant->id }}">
                            <input type="hidden" name="payment_type" value="BAL">
                            <p>Your Balance: Rp{{ auth()->user()->balance }}</p>
                            <p>Total Payment:
                                Rp100.000
                            </p>
                            <div class="d-flex justify-content-end">
                                @if (auth()->user()->balance < 100000)
                                    <h5 class="fw-bold text-danger">Not enough balance</h5>
                                @else
                                    <button type="submit" class="btn btn-primary">CHECKOUT BY YOUR BALANCE</button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
