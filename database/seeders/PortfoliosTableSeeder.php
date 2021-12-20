<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolio = new Portfolio([
            'name_en'          => 'Coding from XD',
            'name_jp'          => 'XDファイルからの模写コーディング',
            'description_jp'   => '<a href="" class="link-info">クリスタ</a>さんのXDデザインサンプルからのコーディング。<br>ファーストビューのスライドショーは、サンプルコードではjQueryのプラグインを使っていましたが、keyframeでアニメーションを設定して作成しました。'
        ]);
        $portfolio->save();

        $portfolio = new Portfolio([
            'name_en'          => 'Attendance Record',
            'name_jp'          => '登降園記録',
            'description_jp'   => '初めて一から作成したアプリ。<br>ログイン機能はメールアドレスではなくIDを使う形式にし、権限によるルート制御を設定しました。単純な画面推移によるCRUD機能だけではなく、Bootstrapのモーダルを使用しajaxでコンテンツ取得、POST送信などにチャレンジしました。'
        ]);
        $portfolio->save();

        $portfolio = new Portfolio([
            'name_en'          => 'Quotation, Order, Invoice management app.',
            'name_jp'          => '受注売上予実管理ツール',
            'description_jp'   => 'アウトソーシングサイトからの依頼で作成。<br>見積書や注文書を作成し、作成した内容やスプレッドシート上で送信された注文データをデータベース登録、PDF発行というプログラムを組みました。'
        ]);
        $portfolio->save();

        $portfolio = new Portfolio([
            'name_en'          => 'Portfolio Site',
            'name_jp'          => 'ポートフォリオサイト',
            'description_jp'   => 'このポートフォリオサイト。<br>フォームのバリデーションなど簡単に実装できるためlaravelを利用しました。レイアウトの一部にBootstrapを使用しました。ダイビングが趣味なので海をイメージし、泡などをパララックスに表現しました。'
        ]);
        $portfolio->save();
    }
}
