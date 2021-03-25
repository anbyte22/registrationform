@extends('frontend.master')
@section('body')
    <div class="form-home">
        <div class="container">
            <div class="row">
                <form action="" class="formpage" method="post">
                    <div class="box-shadow">
                        <div class="checkbox">
                            <div class="checkout__input__checkbox">
                                <label for="online">
                                    Pay Online
                                    <input type="radio" id="online" name="payment" value="Pay Online" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="promocode">
                                    Have Promocode
                                    <input type="radio" id="promocode" name="payment" value="Have Promocode">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox" id="panel">
                                <div class="checkout__input__checkbox">
                                    <input type="text" name="coupon" placeholder="Coupon Code" required>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="submit col-md-6">
                                <button type="submit" class="btn btn-danger btn-round ">Submit</button>
                                <button type="button" class="btn btn-danger btn-round">Clear</button>
                            </div>
                            <div class="submit col-md-6">

                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#panel").hide();
        });
        $('input[type=radio][name=payment]').change(function() {
            if (this.value == 'Have Promocode') {
                $("#panel").slideDown("slow");
            } else if (this.value == 'Pay Online') {
                $("#panel").slideUp("slow");
            }
        });

    </script>
@endpush
