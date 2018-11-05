@extends('dashboard')

@section('pre-javascript')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script> Stripe.setPublishableKey('{{ Config::get("services.stripe.key") }}'); </script>
@stop

@section('content')

@include('billing.tabs')

    <div class="tabs-content">
        <div role="tabpanel" class="tab-pane tab-active">

            <div class="raw-margin-top-24">
                <div class='card-wrapper'></div>
            </div>

            <div class="col-md-6 offset-md-3 raw-margin-top-24 well">
                <form method="POST" class="billing" action="/user/billing/subscribe">

                <div class="form-group">
    <label class="form-label" for="plan">Plan</label>
    <select class="form-control" name="plan" id="plan">
        @foreach (config('plans.plans') as $plan)
            <option value="{{ $plan['stripe_id'] }}">{{ $plan['name'] }}</option>
        @endforeach
    </select>
</div>

                    @include('billing.card-form')

                    <div class="row text-right">
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@stop
