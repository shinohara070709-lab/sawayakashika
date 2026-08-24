<!DOCTYPE html>
<html>
  <head>
    <title>さわやか歯科クリニック</title>
    <meta charset="UTF-8">
    <meta name="description" content="地域に寄り添うさわやか歯科クリニック。一般歯科から小児歯科、予防歯科、口腔外科まで幅広く対応いたします。丁寧なカウンセリングと安心の医療設備で、お子様からご高齢の方までお口の健康をサポート。WEB・お電話にてご予約受付中。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  </head>
  <!-- ボディ -->
  <body>
    <!-- ヘッダー -->
    <header>
      <!-- ロゴ -->
      <a href="index.html" class="logo">
        <img src="img2/logo2.svg" alt="トップページに戻る">
      </a>
      <!-- PC用ナビゲーション -->
      <nav class="nav-pc">
       <ul>
        <li><a href="concept.html">コンセプト</a></li>
        <li><a href="service.html">診療内容</a></li>
        <li><a href="appointment.html">オンライン予約</a></li>
        <li><a href="index.html#access">アクセス</a></li>
        <li><a href="index.html#contact">お問い合わせ</a></li>
       </ul>
      </nav>

      <!-- スマホ用ハンバーガーメニュー（追加） -->
      <div class="nav-sp">
        <input type="checkbox" id="drawer-checkbox" class="drawer-checkbox">
        <label for="drawer-checkbox" class="drawer-icon">
          <span></span>
          <span></span>
          <span></span>
        </label>
        <div class="drawer-content">
          <ul>
            <li><a href="concept.html">コンセプト</a></li>
            <li><a href="service.html">診療内容</a></li>
            <li><a href="appointment.html">オンライン予約</a></li>
            <li><a href="index.html#access">アクセス</a></li>
            <li><a href="index.html#contact">お問い合わせ</a></li>
          </ul>
        </div>
      </div>
    </header>
    <main>
      <article>
        <!-- メインビジュアル -->
        <section class="main-visual">
          <img src="img2/img3.jpg" alt="歯医者の治療室">
        </section>
        <!-- コンセプト -->
        <section class="concept">
          <h3 class="tit_01">
            コンセプト
            <br>
            <span>CONCEPT</span>
          </h3>
          <div class="concept-flex">
            <div class="col-left">
              <img src="img2/img14.jpeg" alt="3人の家族">
            </div>
            <div class="col-right">
              <p class="tit">
                地域の皆様が安心して通える、
                <br>
                家族みんなのための歯科医院
              </p>
              <p class="tex">
               当院は、小さなお子さまからご年配の方まで、どなたでも安心して通える歯科クリニックを目指しています。単に「治療をする」のではなく、患者さんの不安を和らげ、笑顔で通えることを大切にし、最新の設備とやさしい診療で家族みんなの健康な歯を守れるようサポートしていきます。 
              </p>
            </div>
          </div>
          <p class="btn">
            <a href="concept.html">詳しくはこちら</a>
          </p>
        </section>
        <!-- 院長あいさsつ -->
        <section class="message">
          <h3 class="tit_01">
            院長あいさつ
            <br>
            <span>MESSAGE</span>
          </h3>
          <div class="message-block">
            <img src="img2/doctor2_matsumoto.jpg" alt="女性院長">
            <p class="doc_name">
              さわやか歯科クリニック
              <br>
              院長  松本 貴子
            </p>
            <p class="tex">
                みなさま、こんにちは。<br>「さわやか歯科クリニック」院長の松本 貴子です。<br>当院は、小さなお子さまからご年配の方まで、安心して通える歯科クリニックを目指しています。<br>歯医者に苦手意識を持つ方にも、やさしく丁寧な治療を提供し、リラックスできる環境を整えています。痛みを抑えた治療やわかりやすい説明を心がけ、不安なく通えるよう努めています。<br>また、歯の健康は全身の健康につながるため、治療だけでなく予防歯科にも力を入れています。定期検診やクリーニングを通じて、みなさまの大切な歯を守り続けるお手伝いをしていきます。<br>地域のみなさまにとって、「ここなら安心して通える」 と思っていただけるクリニックを目指し、スタッフ一同、努力してまいります。どうぞよろしくお願いいたします。
            </p>
          </div>
          <p class="btn">
            <a href="message.html">詳しくはこちら</a>
          </p>
        </section>
        <!-- 診療内容 -->
        <section class="service">
          <h3 class="tit_01">
            診療内容
            <br>
            <span>SERVICE</span>
          </h3>
          <div class="service-flex">
            <div class="service-left">
              <div class="service-left_01">
                <img src="img2/img7.jpg" alt="歯の模型">
                <p class="tit_02">
                  一般歯科
                </p>
                <p class="tex">
                  むし歯や歯周病の治療を行い、患者さんの健康な歯を守るための基本的なケア を提供します。
                </p>
              </div>
              <div class="service-left_02">
                <img src="img2/img1.jpg" alt="医療機器">
                <p class="tit_02">
                  口腔外科
                </p>
                <p class="tex">
                  親知らずの抜歯や顎関節症など、お口の中の外科的な治療を専門的に行います。
                </p>
              </div>
            </div>
            <div class="service-right">
              <div class="service-right_01">
                <img src="img2/img10.jpeg" alt="子供の診察">
                <p class="tit_02">
                  小児歯科
                </p>
                <p class="tex">
                  お子さまの歯の健康を守るために、むし歯の予防と治療を中心に、楽しく通える歯医者 を目指しています。
                </p>
              </div>
              <div class="service-right_02">
                <img src="img2/img12.jpeg" alt="歯ブラシなど">
                <p class="tit_02">
                  予防歯科
                </p>
                <p class="tex">
                  「痛くなってから行く」のではなく、むし歯や歯周病を防ぐことを目的とした診療です。
                </p>
              </div>
            </div>
          </div>
          <p class="btn">
            <a href="service.html">詳しくはこちら</a>
          </p>
        </section>
        <!-- 予約 -->
        <section class="appointment">
         <h3 class="tit_01">
            予約
            <br>
            <span>APPOINTMENT</span>
          </h3> 
          <p class="tel-text">
            ご予約は電話でも承ります。
          </p>
          <p class="tel-num">
            TEL：03-1234-5678
          </p>

          <!-- 診療時間表 -->
          <table class="schedule-table">
           <thead>
              <tr>
               <th>診察時間</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
                <th>日</th>
              </tr>
            </thead>
            <tbody>
             <tr>
                <td>9:30-13:00</td>
                <td>●</td>
                <td>●</td>
                <td>-</td>
                <td>●</td>
                <td>●</td>
                <td>●</td>
                <td>-</td>
              </tr>
              <tr>
                <td>14:00-18:30</td>
                <td>●</td>
                <td>●</td>
                <td>-</td>
                <td>●</td>
                <td>●</td>
                <td>-</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>

          <p class="table-note">
            <span>※最終受付</span> 
            <span>午前 12:30</span> 
            <span>午後 18:00</span>
          </p>

          <p class="btn">
            <a href="appointment.html">ネット予約はこちら</a>
          </p>
        </section>
        <!-- ブログ -->
        <section class="blog">
          <h3 class="tit_01">
            ブログ
            <br>
            <span>BLOG</span>
          </h3> 
          <div class="blog-flex">
            <div class="blog-flex-left">
              <p class="blog-tex">
                豆知識
                <br>
                2026.8.10 
                <br>
                 <a href="blog.html">定期歯科検診で健康な歯を守りましょう</a>
              </p>
              <p class="blog-tex">
                豆知識
                <br>
                2026.8.9
                <br>
                <a href="blog.html">正しい歯磨きのコツ！毎日のケアでむし歯・歯周病を防ごう</a>
              </p>
              <p class="blog-tex">
                お知らせ
                <br>
                2026.8.8
                <br>
                <a href="blog.html">さわやか歯科クリニックのホームページを開設しました！</a>
              </p>  
            </div>
            <div class="blog-flex-right">
              <img src="img2/img8.jpg" alt="院内の画像">
            </div>
          </div>
        </section>
        <!-- お問い合わせ -->
        <section class="contact" id="contact">
          <h3 class="tit_01">
            お問い合わせ
            <br>
            <span>CONTACT</span>
          </h3> 
          <div class="contact-form">
            <img src="img2/shot.png" alt="問い合わせ画面">
          </div>
        </section>
        <!-- アクセス -->
        <section class="access" id="access">
          <h3 class="tit_01">
            アクセス
            <br>
            <span>ACCESS</span>
          </h3> 
          <div class="access-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.28067680173!2d139.7448748812941!3d35.670090312014295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b9278be8ddf%3A0x27daea742fe6e901!2z44CSMTA1LTAwMDEg5p2x5Lqs6YO95riv5Yy66JmO44OO6ZaA77yR5LiB55uu77yT4oiS77yRIOOCsOODreODvOODkOODq-OCueOCr-OCqOOCoiA1MTk!5e0!3m2!1sja!2sjp!4v1786708381217!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
            </iframe>
            <p class="access-tex">
              〒105-0001
              <br>
              東京都港区虎ノ門１丁目３−１
              <br>
              東京メトロ 虎ノ門駅より直結・徒歩1分
              <br>
              駐車場はないので、近隣のコインパーキングをご利用ください
            </p>
          </div>
        </section>
      </article>
    </main>
    <!-- フッター -->
    <footer>
      <a href="index.html" class="logo">
        <img src="img2/logo2.svg" alt="トップページに戻る">
      </a>
      <div class="footer-link">
        <a href="concept.html">コンセプト</a>
        <a href="service.html">診療内容</a>
        <a href="appointment.html">オンライン予約</a>
        <a href="index.html#access">アクセス</a>
        <a href="index.html#contact">お問い合わせ</a>
      </div>
      <p class="copyright">COPYRIGHT&copy;さわやか歯科クリニック All Rights Reserved.</p>
    </footer>
  </body>
</html>