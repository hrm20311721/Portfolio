<x-app-layout>
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
                                <a class="nav-link" href="#!">Blog</a>
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
<!-- ========== Start about ========== -->
<div class="container-lg section-wrapper" id="about">
    <div class="section-title right">
        <p>about</p>
    </div>
    <div class="row align-items-center about-content">
        <div class="col-4 py-5 profile-picture">
            <img src="{{ asset('storage/img/IMG_4691_square.jpg')}}" alt="profile picture" class="rounded-circle w-100">
        </div>
        <div class="col-8 p-5 about-text">
            <p class="profile-name display-6">hrm20311721</p>
            <p class="fs-3 profile-motto en">My motto is SYMPATHY</p>
            <p class="fs-3 profile-motto jp">共感</p>
            <p class="fs-4 profile-text en">Hello I am a freelance web engineer. I just have started to learn programming
                '21 Sep. I'm fascinated by the joy of accomplishment of creating products. <br>My brief history is <a
                    href="#brief-history" data-bs-toggle="modal">here.</a></p>
            <p class="fs-4 profile-text jp">
                初めまして。フリーランスwebエンジニアのhrm20311721です。’21年9月にプログラミングの勉強を始めたばかりです。自ら考えたモノをカタチにしていく達成感に夢中になっています。詳しい経歴は<a href="#brief-history" data-bs-toggle="modal">こちら.</a></p>
        </div>
    </div>
</div>
<!-- ========== End about ========== -->
<!-- ========== Start brief history ========== -->
<div class="modal fade" id="brief-history">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-header d-flex flex-column justify-content-center pt-5">
                <h3 class="modal-title text-center jp">略歴</h3>
                <h3 class="modal-title en">brief-history</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="brief-history">
                <div class="history current">
                    <span></span>
                    <div class="history-content current">
                        <label for="2012" class="history-year">2012</label>
                        <p class="history-heading">中東のオアシス、ドバイへ</p>
                        <p class="history-text">大学を休学し、ドバイへ。日系企業にて総務を担当。イスラム圏の人々との感覚の違いに悩まされながら、相手の立場を考えることの大切さを学びました。</p>
                    </div>
                </div>
                <div class="history">
                    <span></span>
                    <div class="history-content">
                        <label for="2016" class="history-year">2016</label>
                        <p class="history-heading">商品企画に携わる</p>
                        <p class="history-text">
                            商品企画MDとして年間約20商品ほど企画。仮説・検証といった基本的なビジネスフレームワークをベースに、データ分析から商品調達、売れるランディングページの作り方までまさに川上から川下まで多くのことを学びました。</p>
                    </div>
                </div>
                <div class="history">
                    <span></span>
                    <div class="history-content">
                        <label for="" class="history-year"></label>
                        <p class="history-heading">プログラミングとの出会い</p>
                        <p class="history-text">日々のデータ分析をする中で、Excel
                            VBAと触れ合う。他の人が作ったコードなどを参考に初めてVBAにてプログラムを作成しました。CSVファイルを読み込み、ルールに基づきフラグを振り、ピボットテーブルを作成するというプログラムでした。</p>
                    </div>
                </div>
                <div class="history">
                    <span></span>
                    <div class="history-content">
                        <label for="2017" class="history-year">2017</label>
                        <p class="history-heading">第一子出産</p>
                        <p class="history-text">かわいいかわいい男の子を出産。</p>
                    </div>
                </div>
                <div class="history">
                    <span></span>
                    <div class="history-content">
                        <label for="2018" class="history-year">2018</label>
                        <p class="history-heading">営業職を経験</p>
                        <p class="history-text">
                            商品企画をしながら営業も行う企画営業職に転職。約6商品を企画。VBAやExcel、Googleスプレッドシートで業務効率をあげるツールをこそこそ作っていたら、社内の人にいろいろと頼られるように。商品企画やツールの作成を通じて、自らのアイディアが人に感謝される喜びを改めて実感。
                        </p>
                    </div>
                </div>
                <div class="history">
                    <span></span>
                    <div class="history-content">
                        <label for="2021" class="history-year">2021</label>
                        <p class="history-heading">第二子出産</p>
                        <p class="history-text">育休中に夫の海外転勤が決まる。コロナ禍における在宅勤務増加といった風潮もあり、場所にとらわれない働き方をしたいと考えるように。</p>
                    </div>
                </div>
                <div class="history">
                    <span></span>
                    <div class="history-content">
                        <label for="" class="history-year"></label>
                        <p class="history-heading">プログラミング学習開始</p>
                        <p class="history-text">Progateや書籍を読みながら独学で勉強を始める。なかなか思うように動かずハマってしまうこともありますが、何かを作る達成感はやはりたまらない。まだまだ勉強を続けていきたい。
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ========== End brief history ========== -->
<!-- ========== Start Skills ========== -->
<div class="section-wrapper container-lg" id="skills">
    <div class="section-title blue">
        <p>skills</p>
    </div>
    <div class="row gx-5 px-4 gy-5 gy-lg-0 skills">
        <!-- card_1 -->
        <div class="col-md-6 col-lg-4">
            <div class="flip-box">
                <div class="flip">
                    <!-- card_front -->
                    <div class="flip-body front">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <h3 class="card-title h2 text-center">Front-end</h3>
                        </div>
                    </div>
                    <!-- card_back -->
                    <div class="flip-body back">
                        <div class="h-100 py-5">
                            <ul class="card-text list-unstyled w-100 h-100 d-flex flex-column justify-content-evenly">
                                @foreach ($skills['front'] as $skill)
                                    <li class="row d-flex align-items-center justify-content-between">
                                        <div class="col-5">
                                            <p class="m-0 fs-5">{{$skill->name_en}}</p>
                                        </div>
                                        <div class="col-7 d-flex align-items-center justify-content-evenly">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($skill->levels >= $i)
                                                    <span class="ripples"></span>
                                                @else
                                                    <span></span>
                                                @endif
                                            @endfor
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card_2 -->
        <div class="col-md-6 col-lg-4">
            <div class="flip-box">
                <div class="flip">
                    <!-- card_front -->
                    <div class="flip-body front">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <h3 class="card-title h2 text-center">Back-end</h3>
                        </div>
                    </div>
                    <!-- card_back -->
                    <div class="flip-body back">
                        <div class="h-100 py-5">
                            <ul class="card-text list-unstyled w-100 h-100 d-flex flex-column justify-content-evenly">
                                @foreach ($skills['back'] as $skill)
                                <li class="row d-flex align-items-center justify-content-between">
                                    <div class="col-5">
                                        <p class="m-0 fs-5">{{$skill->name_en}}</p>
                                    </div>
                                    <div class="col-7 d-flex align-items-center justify-content-evenly">
                                        @for ($i = 1; $i <= 5; $i++) @if ($skill->levels >= $i)
                                            <span class="ripples"></span>
                                            @else
                                            <span></span>
                                            @endif
                                            @endfor
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card_3 -->
        <div class="col-md-6 col-lg-4">
            <div class="flip-box">
                <div class="flip">
                    <!-- card_front -->
                    <div class="flip-body front">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <h3 class="card-title h2 text-center">Others</h3>
                        </div>
                    </div>
                    <!-- card_back -->
                    <div class="flip-body back">
                        <div class="h-100 py-5">
                            <ul class="card-text list-unstyled w-100 h-100 d-flex flex-column justify-content-evenly">
                                @foreach ($skills['others'] as $skill)
                                <li class="row d-flex align-items-center justify-content-between">
                                    <div class="col-5">
                                        <p class="m-0 fs-5">{{$skill->name_en}}</p>
                                    </div>
                                    <div class="col-7 d-flex align-items-center justify-content-evenly">
                                        @for ($i = 1; $i <= 5; $i++) @if ($skill->levels >= $i)
                                            <span class="ripples"></span>
                                            @else
                                            <span></span>
                                            @endif
                                            @endfor
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========== End Skills ========== -->
<!-- ========== Start Portfolio ========== -->
<div class="section-wrapper container-lg" id="portfolio">
    <div class="section-title right">
        <p>portfolio</p>
    </div>
    <div class="portfolio row">
        @foreach ($portfolios as $portfolio)
        <div class="col-md-6 pb-3 pe-3">
            <div class="portfolio-item border-bottom border-end p-5 h-100">
                <a href="#work-modal" class="work-title fs-4" data-bs-toggle="modal">{{ $portfolio->name_en }}</a>
                <div class="using">
                    <p>
                        @foreach ($portfolio->skills as $skill)
                            @if ($loop->last)
                                {{ $skill->name_en }}
                            @else
                                {{ $skill->name_en }} /
                            @endif
                        @endforeach
                    </p>
                </div>
                <div class="work-comment">
                    <p>{!! $portfolio->description_jp !!}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="modal fade" id="work-modal" tabindex="-1" role="dialog" aria-labelledby="#portfolio" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-0">
            <div id="portfolio_slide" class="carousel slide" data-bs-interval="false">
                <ol class="carousel-indicators">
                    <li data-bs-target="#portfolio_slide" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#portfolio_slide" data-bs-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="{{ asset('storage/img/Coding_from_XD_pc.png') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="{{ asset('storage/img/Coding_from_XD_sp.png') }}"
                            alt="Second slide">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#portfolio_slide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#portfolio_slide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
           </div>
        </div>
    </div>
</div>
<!-- ========== End Portfolio ========== -->
<!-- ========== Start Contact ========== -->
<div class="section-wrapper container-lg" id="contact">
    <div class="section-title blue">
        <p>Contact</p>
    </div>
    <form action="" class="contact-form row justify-content-center">
        <div class="col-12">
            <div class="form_name mb-3">
                <label for="name" class="form-label fs-5">お名前</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="form_email mb-3">
                <label for="email" class="form-label fs-5">メールアドレス</label>
                <input class="form-control" type="text" name="email">
            </div>
            <div class="form_type mb-3">
                <label for="type" class="form-label fs-5">お問い合わせの種類</label>
                <select class="form-select" name="type" id="">
                    <option value="quotation">見積りのご依頼</option>
                    <option value="order">お仕事のご依頼</option>
                    <option value="others">その他</option>
                </select>
            </div>
            <div class="form_detail mb-3">
                <label for="detail" class="form-label fs-5">お問い合わせの内容</label>
                <textarea class="form-control" name="detail" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form_submit mt-5 text-center">
                <input class="btn btn-info text-white fs-5" type="submit" value="送信">
            </div>
        </div>
    </form>
</div>
<!-- ========== End Contact ========== -->

<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>
<div class="bubble" id="bubble_1"></div>

</x-app-layout>
