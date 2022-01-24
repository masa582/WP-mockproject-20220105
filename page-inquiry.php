<?php
/*
Template Name: news_list_1
*/
?>
<?php get_header('inquiry'); ?>
</div>
<main class="main">
  <section>
    <div class="news_maingBg_inner">
      <div class="news_mainBg"></div>
      <div class="news_accent">
        <h2 class="news_accent_ttl">お問い合わせ(Contact)</h2>
      </div>
  </section>
  <section>
    <div class="inquiry_mainsec">
      <div>
        <p class="formTxt"> <span class="formTxt_ttl">フォームからのお問い合わせ</span>
        </p>
        <p>記入内容の確認後、2～3営業日以内にご連絡させていただきます。</p><br><br><br>
      </div>


      <form action="">
        <table class="contact-table">

          <tr class="form-content">
            <th for="name" class="form-content-space">お名前<span class="colorRed">*</span></th>
            <td class="form-content-space">
              <input type="text" name="name" placeholder="山田　太郎" >
            </td>
          </tr>
          <tr class="form-content">
            <th for="name" class="form-content-space">フリガナ</th>
            <td class="form-content-space"><input type="text" placeholder="ヤマダ　タロウ"></td>
          </tr>
          <tr class="form-content">
            <th for="tel" class="form-content-space">電話番号<span class="colorRed">*</th>
            <td class="form-content-space">
              <input type="text" placeholder="03-1234-5678">
            </td>
          </tr>
          <tr class="form-content">
            <th for="email" class="form-content-space">メールアドレス<span class="colorRed">*</th>
            <td class="form-content-space"><input type="text" placeholder="info@test.com"></td>
            <!-- [email* your-email email-992 class:inquiry-content placeholder "info@test.com" ] -->
          </tr>
          <tr class="form-content">
            <th for="postalcode" class="form-content-space">郵便番号<span class="colorRed">*</th>
            <td class="form-content-space">
              <input type="text" placeholder="123-4567">
            </td>
          </tr>
          <tr class="form-content">
            <th for="name" class="form-content-space">ご住所<span class="colorRed">*</th>
            <td class="form-content-space">
              <input type="text" placeholder="東京都渋谷区千駄ヶ谷5-8-4">
            </td>
          </tr>
          <tr class="inquiry-content">
            <th class="inquiry-content-title1">問合せ内容<span class="colorRed">*</span><br>
              <div class="inquiry-content-title2">
                <p class="">-中途採用に関して</p><br>
                <p>-新卒採用に関して</p><br>
                <p>-その他のお問い合わせ</p>

            </th>
            <td class="inquiry-textarea">
              <textarea name="" id="" cols="75" rows="12" placeholder="ご不明な点などお気軽にご記入ください。"></textarea>
            </td>
          </tr>
        </table>
    </div>

    <div class="policyBox">
      <p class="policy-title">個人情報の取り扱いについて</p><br>
      <div class="policy-content"> <input type="button" id="openBtn" value="個人情報保護方針" class="openBtn">を必ずご確認下さい。</div>
      <br>
      <p class="agree">
      <div class="check-box">
        <label>
          <input class="check" type="checkbox" name="check" autocomplete="off" id="agree">
          <span class="agree-txt">個人情報保護方針に同意する</span>
          </p>
        </label>
      </div>
    </div>
    <div id="modal" class="modal">
      <div class="modal__content">
        <div class="modal__content-inner">
          <p>プライバシーポリシー<br>
            株式会社estra（以下，「当社」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。<br>

            第1条（個人情報）<br>
            「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。<br>

            第2条（個人情報の収集方法）<br>
            当社は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,当社の提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。<br>

            第3条（個人情報を収集・利用する目的）<br>
            当社が個人情報を収集・利用する目的は，以下のとおりです。<br>

            1.当社サービスの提供・運営のため<br>
            2.ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）<br>
            3.ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び当社が提供する他のサービスの案内のメールを送付するため<br>
            4.メンテナンス，重要なお知らせなど必要に応じたご連絡のため<br>
            5.利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため<br>
            6.ユーザーにご自身の登録情報の閲覧や変更，削除，ご利用状況の閲覧を行っていただくため<br>
            7.有料サービスにおいて，ユーザーに利用料金を請求するため<br>
            8.上記の利用目的に付随する目的<br>

            第4条（利用目的の変更）<br>
            1.当社は，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。<br>
            2.利用目的の変更を行った場合には，変更後の目的について，当社所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。<br>

            第5条（個人情報の第三者提供）<br>
            1,当社は，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。<br>
            　1-1.人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき<br>
            　1-2.公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき<br>
            　1-3.国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき<br>
            　1-4.予め次の事項を告知あるいは公表し，かつ当社が個人情報保護委員会に届出をしたとき<br>
            　1-4-1.利用目的に第三者への提供を含むこと<br>
            　1-4-2.第三者に提供されるデータの項目<br>
            　1-4-3.第三者への提供の手段または方法<br>
            　1-4-4.本人の求めに応じて個人情報の第三者への提供を停止すること<br>
            　1-4-5.本人の求めを受け付ける方法<br>
            2.前項の定めにかかわらず，次に掲げる場合には，当該情報の提供先は第三者に該当しないものとします。<br>
            　2-1.当社が利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合<br>
            　2-2.合併その他の事由による事業の承継に伴って個人情報が提供される場合<br>
            　2-3.個人情報を特定の者との間で共同して利用する場合であって，その旨並びに共同して利用される個人情報の項目，共同して利用する者の範囲，利用する者の利用目的および当該個人情報の管理について責任を有する者の氏名または名称について，あらかじめ本人に通知し，または本人が容易に知り得る状態に置いた場合<br>

            第6条（個人情報の開示）<br>
            1.当社は，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。ただし，開示することにより次のいずれかに該当する場合は，その全部または一部を開示しないこともあり，開示しない決定をした場合には，その旨を遅滞なく通知します。なお，個人情報の開示に際しては，1件あたり1，000円の手数料を申し受けます。<br>
            　1-1.本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合<br>
            　1-2.当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合<br>
            　1-3.その他法令に違反することとなる場合<br>
            2.前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示いたしません。<br>

            第7条（個人情報の訂正および削除）<br>
            1.ユーザーは，当社の保有する自己の個人情報が誤った情報である場合には，当社が定める手続きにより，当社に対して個人情報の訂正，追加または削除（以下，「訂正等」といいます。）を請求することができます。<br>
            2.当社は，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正等を行うものとします。<br>
            3.当社は，前項の規定に基づき訂正等を行った場合，または訂正等を行わない旨の決定をしたときは遅滞なく，これをユーザーに通知します。<br>

            第8条（個人情報の利用停止等）<br>
            1.当社は，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。<br>
            2.前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。<br>
            3.当社は，前項の規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。<br>
            4.前2項にかかわらず，利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって，ユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は，この代替策を講じるものとします。<br>

            第9条（プライバシーポリシーの変更）<br>
            1.本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。<br>
            2.当社が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。<br>

            第10条（お問い合わせ窓口）<br>
            本ポリシーに関するお問い合わせは，下記の窓口までお願いいたします。<br>

            住所：〒151-0051 東京都渋谷区千駄ヶ谷5-8-4 第7瑞穂ビル 4階<br>
            社名：株式会社estra<br>
            Eメールアドレス：taro.y@estra.jp</p>
          <div><input type="button" id="closeBtn" class="closeBtn" value="閉じる"></div>
        </div>
      </div>
    </div>
    <button type="submit" class="submit" id="submit">
      <i class="far fa-envelope"></i>　送信する
    </button>

    </form>
    </div>
  </section>
  <!-- </section> -->
</main>

<?php get_footer(); ?>