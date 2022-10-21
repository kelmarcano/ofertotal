@extends('includes.master')
@section('content')

    <section class="go-section">
        <div class="row">
            <div class="container">
                <div class="col-md-offset-2 col-md-8">
                    @if(Session::has('error'))
                        <div class="alert alert-danger alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ Session::get('error') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-12 text-center services">
                    <div class="col-md-12 order-div">
                        <div class="col-md-7 order-left">
                            <h4>Introduzca los detalles de su compra</h4>
                            <form class="col-md-offset-2 col-md-8" action="{{route('payment.submit')}}" method="post" id="payment_form">
                                {{csrf_field()}}
                                @if(Auth::guard('profile')->guest())
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" value="" placeholder="Nombre completo" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" value="" placeholder="Numero de Telefono" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" value="" placeholder="Correo" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" value="" placeholder="Direccion" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="city" value="" placeholder="Ciudad" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="zip" value="" placeholder="Codigo Postal" required>
                                </div>

                                    <input type="hidden" name="customer" value="0" />
                                @else
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" value="{{Auth::guard('profile')->user()->name}}" placeholder="Nombre Completo" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" value="{{Auth::guard('profile')->user()->phone}}" placeholder="Numero de Telefono" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" value="{{Auth::guard('profile')->user()->email}}" placeholder="Correo" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" value="{{Auth::guard('profile')->user()->address}}" placeholder="Direccion" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="city" value="{{Auth::guard('profile')->user()->city}}" placeholder="Ciudad" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="zip" value="{{Auth::guard('profile')->user()->zip}}" placeholder="Codigo Postal" required>
                                </div>

                                    <input type="hidden" name="customer" value="{{Auth::guard('profile')->user()->id}}" />
                                @endif
                                <div class="form-group">
                                    <select class="form-control" onChange="meThods(this)" id="formac" name="method" required>
                                        <option value="Paypal" selected>Paypal</option>
                                        <option value="Stripe">Tarjeta de Credito</option>
                                        <option value="Cash">Efectivo en entrega</option>
                                    </select>
                                </div>
                                <div id="stripes" style="display: none;">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="card" placeholder="Card">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="cvv" placeholder="Cvv">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="month" placeholder="Month">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="year" placeholder="Year">
                                    </div>
                                </div>

                                <input type="hidden" name="total" value="{{round($total,2)}}" />
                                <input type="hidden" name="products" value="{{$product}}" />
                                <input type="hidden" name="quantities" value="{{$quantity}}" />
                                <input type="hidden" name="sizes" value="{{$sizes}}" />

                                <div id="paypals">
                                    <input type="hidden" name="cmd" value="_xclick" />
                                    <input type="hidden" name="no_note" value="1" />
                                    <input type="hidden" name="lc" value="UK" />
                                    <input type="hidden" name="currency_code" value="USD" />
                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                                </div>
                                <button type="submit" class="button style-10"> Ordenar Ahora</button>
                            </form>
                            <div class="col-md-12">
				<a href="{{route('user.login')}}" style="color:#010101;">Entrar como usuario</a>
				</div>
                        </div>
                        <div class="col-md-5 order-right">
                            <h4>Detalle de Orden</h4>
                            <div class="pricing-list">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th width="20%">Cantidad</th>
                                        <th width="20%" align="right">Total</th>
                                        {{-- <th width="20%">Total</th> --}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cartdata as $cart)
                                    <tr>
                                        <td><a href="{{url('/product')}}/{{$cart->product}}/{{str_replace(' ','-',strtolower(\App\Product::findOrFail($cart->product)->title))}}" target="_blank">{{$cart->title}}</a></td>
                                        <td align="center">{{$cart->quantity}}</td>
                                        <td align="right">{{$cart->cost}}</td>
                                        {{-- <td align="right">{{$cart->cost}}</td> --}}
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <table class="table">
                                    {{--<tr>--}}
                                        {{--<td><strong>Costo de Compra:</strong></td>--}}
                                        {{--<td width="20%"><strong>${{round($settings[0]->shipping_cost,2)}}</strong></td>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <td><h3 class="pricing-count" style="margin: 0">Costo Total:</h3></td>
                                        <td><h3></h3></td>
                                        <td width="10%"><h3 class="pricing-count" style="margin: 0">${{round($total,2)}}</h3></td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@stop
@section('footer')
    <script type="text/javascript">
        function meThods(val) {
            var action1 = "{{route('payment.submit')}}";
            var action2 = "{{route('stripe.submit')}}";
            var action3 = "{{route('cash.submit')}}";
            if (val.value == "Paypal") {
                $("#payment_form").attr("action", action1);
                $("#stripes").hide();
            }
            if (val.value == "Stripe") {
                $("#payment_form").attr("action", action2);
                $("#stripes").show();
            }
            if (val.value == "Cash") {
                $("#payment_form").attr("action", action3);
                $("#stripes").hide();
            }
        }
    </script>
@stop