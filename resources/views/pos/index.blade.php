@extends('layouts.master')

@section('content')
    <div class="main-section">
        <div class="top-text">
            <p>Location: Shop Name</p>
            <div id="date-display"></div>
            <script>
                let el = document.getElementById("date-display");
                el.innerHtml = Date()
                console.log(Date());
            </script>
        </div>
        <div class="left-element">
            <form action=""><input type="text"><input type="text"></form>
            <table>
                <th>Product<i class="fa fas-info"></i></th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th><i class="fa fas-cross"></i></th>
            </table>
        </div>

        <div class="right-element">

        </div>
    </div>
@endsection
