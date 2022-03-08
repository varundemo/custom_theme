 <section class="footer ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center footer-logo">
                    <div class="footer-logo-img"> <img src="<?php echo get_bloginfo('template_url'); ?>/images/foot_logo_main.png" alt="footer_logo" class="img-fluid">
                        <p><a href="http://www.technisun.com">www.technisun.com</a> and the swirling sun (logo) are the trademarks of Technisun. All Rights Reserved. Do not reproduce the content of this website, in part or in full, without permission. DMCA
                            protected</p>
                    </div>
                    <div class="footer-social-icon socials">
                        <li><a href="https://twitter.com/technisun" target="_blank" class="social-icon "><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/Technisun-683209545375421/" target="_blank" class="social-icon "><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/technisun/" target="_blank" class="social-icon "><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/technisun/" target="_blank" class="social-icon "><i class="fa fa-linkedin"></i></a></li>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="copyright-block text-center">
        <p>Copyright &copy 2022 All Rights Reserved </p> <a href="//www.dmca.com/Protection/Status.aspx?ID=b2c8b6ac-a1c1-423d-ba96-f9709f8281be" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="<?php echo get_bloginfo('template_url'); ?>/images/bottom.png" alt="DMCA.com Protection Status" /></a>
        <p><a href="https://technisun.com/terms-and-conditions ">TERMS & CONDITIONS</a></p>
        <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js">
        </script>
    </div>
    <?php wp_footer(); ?>
    <script src="https://technisun.com/public/web/js/isotope.pkgd.min.js.download"></script>
    <script>
        $(document).ready(function() {
            $('.mobile_nav_link span').click(function() {
                $(this).parent().next().slideToggle();
            });
        });
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.scrolltop:hidden').stop(true, true).fadeIn();
            } else {
                $('.scrolltop').stop(true, true).fadeOut();
            }
        });
        $(function() {
            $(".scroll").click(function() {
                $("html,body").animate({
                    scrollTop: $(".thetop").offset().top
                }, "1000");
                return false
            })
        })
    </script>
    <script></script>
    <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 1000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };
        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];
            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }
            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';
            var that = this;
            var delta = 200 - Math.random() * 100;
            if (this.isDeleting) {
                delta /= 2;
            }
            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }
            setTimeout(function() {
                that.tick();
            }, delta);
        };
        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            $('.afterload').show();
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
    </script>
    <script>
        function buttonSubmit() {
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            if (name == '') {
                $('#name').css('border', '1px solid red');
                $('#name').focus(function() {
                    $('#name').css('border', '');
                });
            } else if (email == '') {
                $('#email').css('border', '1px solid red');
                $('#email').focus(function() {
                    $('#email').css('border', '');
                });
            } else if (validateEmail(email) == false || email == 'Please use a valid email') {
                $('#email').css('border', '1px solid red');
                $('#email').css('color', 'red');
                $('#email').val('Please use a valid email');
                $('#email').focus(function() {
                    $('#email').css('border', '');
                    $('#email').val('');
                    $('#email').css('color', '');
                });
                return false;
            } else if (phone == '') {
                $('#phone').css('border', '1px solid red');
                $('#phone').focus(function() {
                    $('#phone').css('border', '');
                });
            } else if (numberValidation(phone) == false || phone == 'Please use number only') {
                $('#phone').css('border', '1px solid red');
                $('#phone').css('color', 'red');
                $('#phone').val('Please use number only');
                $('#phone').focus(function() {
                    $('#phone').css('border', '');
                    $('#phone').val('');
                    $('#phone').css('color', '');
                });
                return false;
            } else {
                $('#homeForm').submit();
            }
        }

        function validateEmail($email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test($email);
        }

        function numberValidation(number) {
            numReg = /^(?=.*[0-9])[- +()0-9]+$/;
            return numReg.test(number);
        }
    </script>
</body>

</html>