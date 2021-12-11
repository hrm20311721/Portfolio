@extends('layouts.app')

@section('content')
<!-- ========== Start fv ========== -->
<div class="fv">
    <div class="fv-copy">
        <p class="fv-main-copy">hrm<br>2031<br>1721</p>
        <p class="fv-sub-copy">Thank you for visiting my Portfolio.</p>
    </div>
    <div class="d-flex justify-content-end align-items-center">
        <div class="col-9 header-nav">
            <nav class="navbar navbar-expand-md">
                <div class="container justify-content-end">
                    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#header-nav" aria-controls="header-nav" aria-expanded="false"
                        aria-label="Toggle Header menu">
                        <span class="text-white"><i class="bi bi-grid-fill"></i></span>
                    </button>
                    <div class="collapse navbar-collapse mt-2 mt-md-0 justify-content-end" id="header-nav">
                        <ul class="navbar-nav text-end">
                            <li class="nav-item ms-3 rounded-circle">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item ms-3 rounded-circle">
                                <a class="nav-link" href="#">Skills</a>
                            </li>
                            <li class="nav-item ms-3 rounded-circle">
                                <a class="nav-link" href="#">Portfolio</a>
                            </li>
                            <li class="nav-item ms-3 rounded-circle">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- ========== End fv ========== -->
<!-- ========== Start contents list ========== -->
<div class="section-wrapper" id="contents_list">
    <div class="list-item">
        <button class="btn rounded-circle list-icon bg-primary">

        </button>
    </div>
</div>
<!-- ========== End contents list ========== -->
<!-- ========== Start about ========== -->
<div id="about" class="section-wrapper">
    <img src="{{ asset('storage/img/IMG_4691.jpg')}}" alt="profile picture" class="rounded-circle" width="100" height="100">
    <p class="profile-name">hrm20311721</p>
    <p class="profile-motto">My motto is SYMPATHY</p>
    <p class="profile-text">Hello I am a freelance web engineer. I just have started to learn programming '21 Sep. I'm fascinated by the joy of accomplishment of creating products. <br>My brief history is <a href="#brief-history" data-bs-toggle="collapse">here.</a></p>
</div>
<!-- ========== End about ========== -->
<!-- ========== Start brief history ========== -->
<div class="collapse" id="brief-history">
    <div class="history">
        <label for="2012" class="history-year">2012</label>
        <p class="history-heading">中東のオアシス、ドバイへ</p>
        <p class="history-text">大学を休学し、ドバイへ。日系企業にて総務を担当。イスラム圏の人々との感覚の違いに悩まされながら、相手の立場を考えることの大切さを学びました。</p>
    </div>
    <div class="history">
        <label for="2016" class="history-year">2016</label>
        <p class="history-heading">商品企画に携わる</p>
        <p class="history-text">商品企画MDとして年間約20商品ほど企画。仮説・検証といった基本的なビジネスフレームワークをベースに、データ分析から商品調達、売れるランディングページの作り方までまさに川上から川下まで多くのことを学びました。</p>
    </div>
    <div class="history">
        <label for="" class="history-year"></label>
        <p class="history-heading">プログラミングとの出会い</p>
        <p class="history-text">日々のデータ分析をする中で、Excel VBAと触れ合う。他の人が作ったコードなどを参考に初めてVBAにてプログラムを作成しました。CSVファイルを読み込み、ルールに基づきフラグを振り、ピボットテーブルを作成するというプログラムでした。</p>
    </div>
    <div class="history">
        <label for="2017" class="history-year">2017</label>
        <p class="history-heading">第一子出産</p>
        <p class="history-text">かわいいかわいい男の子を出産。</p>
    </div>
    <div class="history">
        <label for="2018" class="history-year">2018</label>
        <p class="history-heading">営業職を経験</p>
        <p class="history-text">商品企画をしながら営業も行う企画営業職に転職。約6商品を企画。</p>
    </div>
    <div class="history">
        <label for="" class="history-year"></label>
        <p class="history-heading"></p>
        <p class="history-text"></p>
    </div>
    <div class="history">
        <label for="" class="history-year"></label>
        <p class="history-heading"></p>
        <p class="history-text"></p>
    </div>
</div>
<!-- ========== End brief history ========== -->
<!-- ========== Start Skills ========== -->

<!-- ========== End Skills ========== -->
<!-- ========== Start Portfolio ========== -->

<!-- ========== End Portfolio ========== -->
@endsection
