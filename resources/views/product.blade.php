@extends('layouts.app')

@section('content')
<section class="clearfix cta-bg mt-5" style="background-color: #C8EFFD;">
    <div class="container">
        <h1 style="text-align: center;" class="qlt mb-3">Product Specification</h1>
        <div class="position-relative">
            <img src="./images/process.jpg"class="col-12 col-md-12 text-center">

            <div class="position-absolute" style="top: 40%;">
                <h3>1. Corrugated Carton Box Regular</h3>
                <h3>2. Corrugated Carton Box Die Cut</h3>
            </div>
        </div>


    </div>
</section>

<section class="clearfix cta-bg" style="background-color: #C8EFFD;">
    <div class="container">
        <h1 style="text-align: center;" class="qlt mb-5">SOURCE OF MATERIAL</h1>
        <img src="./images/source.jpg" class="col-12 col-md-12 mt-3">

    </div>
</section>
<section class="clearfix py-5" style="background: #C8EFFD;">
    <div class="container">
        <h1 style="text-align: center;"class="qlt">Quality Control Machinery</h1>
        <div class="gallery py-5 mt-3">
            <div class="text-center">
                <div class="float-left col-md-4"><a data-lightbox="mygallery" href="./images/machine6.PNG"><img src="./images/machine6.PNG" alt=""></a><br>Box Compression Test (BCT)</div>
                <div class="float-left col-md-4"><a data-lightbox="mygallery" href="./images/machine7.PNG"><img src="./images/machine7.PNG" alt=""></a><br>Box Strength Tester (BST)</div>
                <div class="float-left col-md-4"><a data-lightbox="mygallery" href="./images/machine8.PNG"><img src="./images/machine8.PNG" alt=""></a><br>Crush Tester</div>
            </div>
            <div class="gallery-div">
                <div class="float-left col-md-4"><a data-lightbox="mygallery" href="./images/machine9.PNG"><img src="./images/machine9.PNG" alt=""></a><br>Edge Crush Test (ECT)</div>
                <div class="float-left col-md-4"><a data-lightbox="mygallery" href="./images/machine10.PNG"><img src="./images/machine10.PNG" alt=""></a><br>Thickness Tester</div>
            </div>
        </div>
    </div>
</section>

@endsection
