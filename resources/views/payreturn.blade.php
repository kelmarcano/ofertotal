@extends('includes.master')

@section('content')

    <section class="go-section">
        <div class="row">
            <div class="container">
                <div class="col-md-12 text-center services">
                    <div class="services-div">
                        <h1 class="text-center" style="color: green"> Felicitaciones !!</h1>
                        <h2>Su orden a sido confirmada.</h2>
                        <p></p>
                        <a href="{{url('user/account')}}" class="button style-10">Mi cuenta</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@stop

@section('footer')

@stop