<div class="footer_wrap">
        <footer>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_footer.png" alt="">
            <div class="nav footer">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('company')) ?>">COMPANY</a></li>
                    <li><a href="<?php echo esc_url(home_url('service')) ?>">SERVICE</a></li>
                    <li><a href="<?php echo esc_url(home_url('pharmacist')) ?>">PHARMACIST</a></li>
                    <li><a href="<?php echo esc_url(home_url('news')) ?>">NEWS</a></li>
                    <li><a href="<?php echo esc_url(home_url('contact')) ?>">CONTACT</a></li>
                </ul>
            </div>
        </footer>
        <p class="footer_text">PRIVACYPOLOCY</p>
    </div>

    <script>
        $(function () {
            $('.spheader_btn').on('click', function () {
                $(".sp_header_inner").fadeIn(function () {
                    $('.closeBtn').on('click', function () {
                        $('.sp_header_inner').fadeOut('');
                    });
                });
            });
        });
    </script>
</body>

</html>