@extends('frontend.master')
@section('body')
    <div class="form-home">
        <div class="container">
            <div class="row">
                <div class="box-shadow">

                    <form action="{{ route('user.pay') }}" class="formpage" method="post">
                        @csrf
                        <input type="hidden" name="rowid" value="{{ $id }}" />
                        <div class="checkbox mainpayment">
                            <div class="payment-system">
                                <div class="checkout__input__checkbox">
                                    <label for="online" class="radio">
                                        Pay Online
                                        <input type="radio" id="online" name="payment" value="Pay Online" required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="promocode" class="radio">
                                        Have Promocode
                                        <input type="radio" id="promocode" name="payment" value="Promocode">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="checkout__input__checkbox col-md-12" id="panel">

                            </div>
                            <div class="clearfix"></div>

                            <div class="submit col-md-12" id="operation">
                                <button type="submit" class="btn btn-danger btn-round ">Register</button>
                                <button type="button" class="btn btn-danger btn-round"
                                    onclick="window.history.back();">Clear</button>
                            </div>
                            <div class="clearfix"></div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#panel").hide();
            $("#operation").hide();
        });
        $('input[type=radio][name=payment]').change(function() {
            if (this.value == 'Promocode') {
                $("#panel").append('<div class="checkout__input__checkbox">' +
                    '<input type="text" name="coupon" placeholder="Coupon Code" required>' +
                    '</div>');
                $("#panel").slideDown("slow");
                $("#operation").slideDown("slow");
            } else if (this.value == 'Pay Online') {
                $("#panel").slideUp("slow");
                $("#panel").empty();
                $("#operation").slideDown("slow");
            }
        });

    </script>
@endpush
