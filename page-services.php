<?php
//Template Name: servicesページのテンプレート
?>
<?php get_header(); ?>

    <!-- main -->
    <main id="main" class="main">
		<!-- InstanceBeginEditable name="main" -->
      <div class="pagettl">
        <h1>サービス紹介</h1>
  		</div>

      <div class="breadcrumbs wrap">
        <ol>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
          <li>サービス紹介</li>
        </ol>
      </div>

      <!-- contents -->
      <div id="contents">
        <section class="skill wrap">
          <h2 data-h2subttl="skill">提供サービス</h2>
          <ul class="skill__list noicon">
            <li class="skill__list__item">
              <figure class="skill__icon">
                <img src=<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services_icon01.png" alt="">
              </figure>
              <h4 class="skill__name">Webサイトデザイン</h4>
            </li>

            <li class="skill__list__item">
              <figure class="skill__icon">
                <img src=<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services_icon02.png" alt="">
              </figure>
              <h4 class="skill__name">LP / バナー</h4>
            </li>
            <li class="skill__list__item">
              <figure class="skill__icon">
                <img src=<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services_icon03.png" alt="">
              </figure>
              <h4 class="skill__name">コーディング</h4>
            </li>
            <li class="skill__list__item">
              <figure class="skill__icon">
                <img src=<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services_icon04.png" alt="">
              </figure>
              <h4 class="skill__name">イラスト / ロゴ</h4>
            </li>
            <li class="skill__list__item">
              <figure class="skill__icon">
                <img src=<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services_icon05.png" alt="">
              </figure>
              <h4 class="skill__name">サイト運営サポート</h4>
            </li>
            <li class="skill__list__item">
              <figure class="skill__icon">
                <img src=<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services_icon06.png" alt="">
              </figure>
              <h4 class="skill__name">DTP</h4>
            </li>
            <li class="skill__list__item">
              <figure class="skill__icon">
                <img src=<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services_icon07.png" alt="">
              </figure>
              <h4 class="skill__name">広報支援</h4>
            </li>
            <li class="skill__list__item">
              <figure class="skill__icon">
                <img src=<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services_icon08.png" alt="">
              </figure>
              <h4 class="skill__name">UI / UX デザイン</h4>
            </li>
          </ul>
        </section><!-- //skill -->

        <section class="strength wrap">
          <h2 data-h2subttl="strength">得意なこと</h2>
          <div class="strength__container">
            <section class="strength__box">
              <h3 class="strength__box__title">Webサイト制作・運営</h3>
              <figure class="strength__box__imgbox">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/service_strength_img01.jpg" alt="">
              </figure>
              <p class="strength__box__text">Webサイトの提案・デザイン・コーディングや納品後のサポートまでして受託可能です。</p>
            </section>
            <section class="strength__box">
              <h3 class="strength__box__title">デザイン・イラスト</h3>
              <figure class="strength__box__imgbox">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/service_strength_img02.jpg" alt="">
              </figure>
              <p class="strength__box__text">パンフレットやチラシ、名刺などのDTPやキャラクターデザインなどもご提案可能です。</p>
            </section>
            <section class="strength__box">
              <h3 class="strength__box__title">企画・提案</h3>
              <figure class="strength__box__imgbox">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/service_strength_img03.jpg" alt="">
              </figure>
              <p class="strength__box__text">お客様の目的や予算に応じた最適なご提案をさせていただきます。また広報支援も承っております。
              </p>
            </section>
          </div><!-- //strength__container -->
        </section><!-- //strength -->

        <section class="illustrations wrap">
          <h2 data-h2subttl="illustrations">イラスト作品例</h2>
          <div class="illustrations__container">
            <p class="illustrations__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_illustrations_img01.jpg" alt="干支のイラスト（丑）">
            </p>
            <p class="illustrations__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_illustrations_img02.jpg" alt="鍬を持ち帽子をかぶった男の子のイラスト">
            </p>
            <p class="illustrations__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_illustrations_img03.jpg" alt="干支のイラスト（虎）">
            </p>
            <p class="illustrations__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_illustrations_img04.jpg" alt="オオカミのイラスト">
            </p>
            <p class="illustrations__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_illustrations_img05.jpg" alt="アイスを持って水着で遊ぶ男の子のイラスト">
            </p>
            <p class="illustrations__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_illustrations_img06.jpg" alt="水鉄砲を持って水着で遊ぶ男の子のイラスト">
            </p>
            <p class="illustrations__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_illustrations_img07.jpg" alt="蜜壺から蜂蜜を美味しそうに食べる熊のイラスト。頭には蜂が止まっています。">
            </p>
            <p class="illustrations__item">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_illustrations_img08.jpg" alt="干支のイラスト（ネズミ）">
            </p>
          </div><!-- /illustrations__container -->
        </section><!-- //illustrations -->

        <section class="instructor">
          <h2 class="instructor__title">Illustrator出張講師のご相談</h2>
          <ul class="instructor__list">
            <li class="instructor__list__item">Illustrator（イラストレーター）の出張講師のご相談を承っております。</li>
            <li class="instructor__list__item">個人、法人を問いません。</li>
            <li class="instructor__list__item">「◯◯が作れるようになりたい」や基本的な操作方法を知りたい、などご相談ください。</li>
            <li class="instructor__list__item">出張範囲：関西圏（※大阪市内以外は、交通費をご負担いただく場合がございます）</li>
            <li class="instructor__list__item">詳しくはお問い合わせください。</li>
          </ul>
          <div class="btn btn--white">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>index.php?page_id=119">">お問い合わせフォームへ</a>
          </div>
        </section><!-- //instructor -->

        <section class="flow wrap">
          <h2 class="flow__title" data-h2subttl="flow">制作の流れ</h2>
          <p>Webサイトを作る場合の流れをご説明いたします。</p>

          <ol class="flow__list">
            <li class="flow__list__item">
              <h3 class="flow__list__title flow--01">ご相談・ヒアリング</h3>
              <div class="flow__list__contentbox">
                <figure class="flow__list__imgbox"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_flow_img01.png" alt=""></figure>
                <p class="flow__list__sentence">ご注文者様の「やりたいこと」をお聞かせください。今すぐの要望でなくても、将来的な構想や、現在抱える問題について、その他仕様のご要望・ご予算などをしっかりお聞かせください。</p>
              </div>
            </li>
            <li class="flow__list__item">
              <h3 class="flow__list__title  flow--02">お見積り・発注</h3>
              <div class="flow__list__contentbox">
                <figure class="flow__list__imgbox"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_flow_img02.png" alt=""></figure>
                <p class="flow__list__sentence">最初にご予算をお伺いするとご予算MAXまでの見積もりをされるのでは？と不安になる方がいますが、ご予算をお伺いするのはご希望に添った最適な方法をご提示させていただくためです。<br>瑕疵担保期間の設定や、秘密保持契約等の契約関連についてもお話させていただきます。</p>
              </div>
            </li>
            <li class="flow__list__item">
              <h3 class="flow__list__title  flow--03">リサーチ・ご提案</h3>
              <div class="flow__list__contentbox">
                <figure class="flow__list__imgbox"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_flow_img03.png" alt=""></figure>
                <p class="flow__list__sentence">具体化していくためのヒアリングを行います。希望や意向の他、技術的なものも含まれますが、よくわからないという方にはわかるようにご説明させていただいた上で最適な方法をご提示します。</p>
              </div>
            </li>
            <li class="flow__list__item">
              <h3 class="flow__list__title  flow--04">デザイン・構築</h3>
              <div class="flow__list__contentbox">
                <figure class="flow__list__imgbox"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_flow_img04.png" alt=""></figure>
                <p class="flow__list__sentence">まずはデザインを当方で起こします。数パターンご希望の場合は、事前にお見積もり段階でお伝えください。デザインをご提出させていただいた後も修正は可能です。デザイン確定後に構築作業に入ります。</p>
              </div>
            </li>
            <li class="flow__list__item">
              <h3 class="flow__list__title  flow--05">動作確認・検証</h3>
              <div class="flow__list__contentbox">
                <figure class="flow__list__imgbox"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_flow_img05.png" alt=""></figure>
                <p class="flow__list__sentence">構築作業が完了後に動作確認を行います。ご注文者様にも動作や文言確認のお願いをしております。修正がある場合はお伝えください。</p>
              </div>
            </li>
            <li class="flow__list__item">
              <h3 class="flow__list__title  flow--06">公開・納品</h3>
              <div class="flow__list__contentbox">
                <figure class="flow__list__imgbox"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/services/services_flow_img06.png" alt=""></figure>
                <p class="flow__list__sentence">納品データの引き渡しや、サイトの公開・納品を行います。<br>問題がある場合は事前に設定した瑕疵担保期間内にお申し出ください。
                  </p>
              </div>
            </li>

          </ol><!-- /flow__list -->
        </section><!-- //flow -->
      </div>
      <!-- //contents -->

		<!-- InstanceEndEditable -->
    </main>
    <!-- //main -->

<?php get_footer(); ?>

