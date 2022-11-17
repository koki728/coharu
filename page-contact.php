<?php get_header(); ?>
<?/*
  Template Name: お問い合わせ
  */ ?>
<div class="main_title">
    <p>CONTACT</p>
</div>
<div class="inner_width">
    <div class="content">
        <div class="service_text">
            <p>サービスに関するご質問、取材依頼など、その他<br>以下フォームからお問い合わせください。</p>
        </div>
        <div class="contact_box">
            <!-- <div class="contact_inner">
                <div class="contact_group"><p>お名前</p>
                <input type="text"></div>
                <div class="contact_group"><p>会社・団体名</p>
                <input type="text"></div>
                <div class="contact_group"><p>メールアドレス</p>
                <input type="text"></div>
                <div class="contact_group"><p>お問い合わせ内容</p>
                <textarea name="" id="" cols="30" rows="10"></textarea></div>
            </div>
            <div class="submit">送信</div> -->
            <?php echo do_shortcode('[contact-form-7 id="19" title="お問い合わせ"]'); ?>
        </div>
        <!-- <ul class="contact_inner">
            <li class="contact_group">
                <label for="">お名前</label>
                <input type="text">
            </li>
            <li>
                <label for="">お名前</label>
                <input type="text">
            </li>
            <li>
                <label for="">お名前</label>
                <input type="text">
            </li>
            <li>
                <label for="">お名前</label>
                <input type="text">
            </li>
            <li>
                <label for="">お名前</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </li>
        </ul> -->
        
        

    </div>
</div>




<?php get_footer(); ?>