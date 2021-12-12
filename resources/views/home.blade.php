@extends('layouts.app')

@section('content')
<!-- ========== Start fv ========== -->
<div class="fv" id="fv">
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
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item ms-3 rounded-circle">
                                <a class="nav-link" href="#skills">Skills</a>
                            </li>
                            <li class="nav-item ms-3 rounded-circle">
                                <a class="nav-link" href="#portfolio">Portfolio</a>
                            </li>
                            <li class="nav-item ms-3 rounded-circle">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- ========== End fv ========== -->
<div class="parallax">
<!-- ========== Start about ========== -->
<div class="container-lg section-wrapper" id="about">
    <div class="section-inner layer0 about-content" >
        <div class="row align-items-center">
            <div class="col-4 py-5 profile-picture">
                <img src="{{ asset('storage/img/IMG_4691_square.jpg')}}" alt="profile picture"
                    class="rounded-circle w-100">
            </div>
            <div class="about-text col-8 p-5">
                <p class="profile-name">hrm20311721</p>
                <p class="profile-motto en">My motto is SYMPATHY</p>
                <p class="profile-motto jp">共感</p>
                <p class="profile-text en">Hello I am a freelance web engineer. I just have started to learn programming
                    '21 Sep. I'm fascinated by the joy of accomplishment of creating products. <br>My brief history is <a href="#brief-history" data-bs-toggle="collapse">here.</a></p>
                <p class="profile-text jp">初めまして。フリーランスwebエンジニアのhrm20311721です。’21年9月にプログラミングの勉強を始めたばかりです。自ら考えたモノをカタチにしていく達成感に夢中になっています。詳しい経歴は<a href="#brief-history" data-bs-toggle="collapse">こちら.</a></p>
            </div>
        </div>
    </div>
    <div class="section-inner layer1">
        <p class="section-title">about</p>
    </div>
    <div class="section-inner layer2">
        <div class="bubble" id="bubble_1"></div>
    </div>
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
        <p class="history-text">
            商品企画MDとして年間約20商品ほど企画。仮説・検証といった基本的なビジネスフレームワークをベースに、データ分析から商品調達、売れるランディングページの作り方までまさに川上から川下まで多くのことを学びました。</p>
    </div>
    <div class="history">
        <label for="" class="history-year"></label>
        <p class="history-heading">プログラミングとの出会い</p>
        <p class="history-text">日々のデータ分析をする中で、Excel
            VBAと触れ合う。他の人が作ったコードなどを参考に初めてVBAにてプログラムを作成しました。CSVファイルを読み込み、ルールに基づきフラグを振り、ピボットテーブルを作成するというプログラムでした。</p>
    </div>
    <div class="history">
        <label for="2017" class="history-year">2017</label>
        <p class="history-heading">第一子出産</p>
        <p class="history-text">かわいいかわいい男の子を出産。</p>
    </div>
    <div class="history">
        <label for="2018" class="history-year">2018</label>
        <p class="history-heading">営業職を経験</p>
        <p class="history-text">
            商品企画をしながら営業も行う企画営業職に転職。約6商品を企画。VBAやExcel、Googleスプレッドシートで業務効率をあげるツールをこそこそ作っていたら、社内の人にいろいろと頼られるように。商品企画やツールの作成を通じて、自らのアイディアが人に感謝される喜びを改めて実感。
        </p>
    </div>
    <div class="history">
        <label for="2021" class="history-year">2021</label>
        <p class="history-heading">第二子出産</p>
        <p class="history-text">育休中に夫の海外転勤が決まる。どこにいても仕事ができるようになりたいと強く感じる。</p>
    </div>
    <div class="history">
        <label for="" class="history-year"></label>
        <p class="history-heading">プログラミング学習開始</p>
        <p class="history-text">Progateや書籍を読みながら独学で勉強を始める。なかなか思うように動かずハマってしまうこともありますが、何かを作る達成感はやはりたまらない。まだまだ勉強を続けていきたい。
        </p>
    </div>
</div>
<!-- ========== End brief history ========== -->
<!-- ========== Start Skills ========== -->
<div class="section-wrapper container-lg" id="skills">
    <div class="section-inner layer0">
        <div class="row gx-5 px-4 gy-5 gy-lg-0">
            <div class="col-md-6 col-lg-4">
                <div class="card rounded-0 border-0 shadow">
                    <div class="card-body">
                        <h3 class="card-title">Front-end</h3>
                        <ul class="card-text list-unstyled">
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>Jquery</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card rounded-0 border-0 shadow">
                    <div class="card-body">
                        <h3 class="card-title">Back-end</h3>
                        <ul class="card-text list-unstyled">
                            <li>PHP</li>
                            <li>Laravel</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card rounded-0 border-0 shadow">
                    <div class="card-body">
                        <h3 class="card-title">Others</h3>
                        <ul class="card-text list-unstyled">
                            <li>GAS</li>
                            <li>VBA</li>
                            <li>日商簿記</li>
                            <li>TOEIC</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-inner layer1">
        <div class="section-title blue">
            <p>skills</p>
        </div>
    </div>
    <div class="section-inner layer2">
        <div class="bubble" id="bubble_1"></div>
    </div>
</div>
<!-- ========== End Skills ========== -->
<!-- ========== Start Portfolio ========== -->
<div class="section-wrapper container-lg" id="portfolio">
    <div class="section-inner layer0">
        <div class="portfolio">
            <ul class="portfolio-list">
                <li class="portfolio-item">
                    <div class="work-title">Coding from XD</div>
                    <div class="using">HTML / CSS / jQuery</div>
                    <div class="work-comment"><a href="">クリスタ</a>さんのXDデザインサンプルからのコーディング。<br>ファーストビューのスライドショーは、サンプルコードではjQueryのプラグインを使っていましたが、keyframeでアニメーションを設定して作成しました。</div>
                </li>
                <li class="portfolio-item">
                    <div class="work-title">Attendance Record</div>
                    <div class="using">PHP / laravel / HTML / CSS / Bootstrap / jQuery</div>
                    <div class="work-comment">初めて一から作成したアプリ。<br>ログイン機能はメールアドレスではなくIDを使う形式にし、権限によるルート制御を設定しました。単純な画面推移によるCRUD機能だけではなく、Bootstrapのモーダルを使用しajaxでコンテンツ取得、POST送信などにチャレンジしました。</div>
                </li>
                <li class="portfolio-item">
                    <div class="work-title">Quotation, Order, Invoice managiment app.</div>
                    <div class="using">Google Apps Script / Google Spread Sheet</div>
                    <div class="work-comment">アウトソーシングサイトからの依頼で作成。<br>見積書や注文書を作成し、作成した内容やスプレッドシート上で送信された注文データをデータベース登録、PDF発行というプログラムを組みました。</div>
                </li>
                <li class="portfolio-item">
                    <div class="work-title">Portfolio Site</div>
                    <div class="using">HTML / CSS / Bootstrap / laravel</div>
                    <div class="work-comment">このポートフォリオサイト。<br>フォームのバリデーションなど簡単に実装できるためlaravelを利用しました。レイアウトの一部にBootstrapを使用しました。ダイビングが趣味なので海をイメージし、泡などをパララックスに表現しました。</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="section-inner layer2">
        <div class="section-title">
            <p>portfolio</p>
        </div>
    </div>
</div>

<!-- ========== End Portfolio ========== -->
<!-- ========== Start Contact ========== -->
<div class="section-wrapper container-lg" id="contact">
    <div class="section-inner layer0">
        <form action="" class="contact-form">
            <input type="text" name="name">
            <input type="text" name="email">
            <select name="type" id="">
                <option value="quotation">見積りのご依頼</option>
                <option value="order">お仕事のご依頼</option>
                <option value="others">その他</option>
            </select>
            <textarea name="detail" id="" cols="30" rows="10"></textarea>
        </form>
    </div>
    <div class="section-inner layer2">
        <div class="section-title blue">
            <p>Contact</p>
        </div>
    </div>
</div>
<!-- ========== End Contact ========== -->
</div>

@endsection
