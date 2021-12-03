<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//if (G5_IS_MOBILE) {
//    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
//    return;
//}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

                <!-- ------------------- footer ------------------- -->
                <footer>
                    <div class="container">        
                        <div class="footer_info">
                            <span><i>상호 :</i> 대한주정판매㈜</span>
                            <span><i>대표 :</i> 최상로</span>
                            <span><i>주소 :</i> 서울특별시 금천구 시흥대로 153번길 16, 7층</span>
                            <span></span>                            
                            <span><i>TEL :</i> 02-780-6213</span>
                            <span><i>FAX :</i> 02-780-6405</span>
                            <span><i>Email :</i> kasc7211@naver.com</span>
                        </div>
                        <div class="footer_gnb">
                            <div class="footer_copy">
                                COPYRIGHT ⓒ 2021 대한주정판매㈜  ALL RIGHTS RESERVED.
                            </div>
                            <div class="footer_nav clearfix">
                                <ul>
                                    <li><a href="#none">이용약관</a></li>
                                    <li><a href="#none" class="point_b">개인정보처리방침</a></li>
                                </ul>
                            </div>
                        </div>        
                    </div>
                </footer>  <!-- ------------------- /footer ------------------- -->

            </section>  <!-- ------------------- /section 05 ------------------- -->
        </main>
        <!-- TOP_btn -->
        <div class="top_btn">TOP</div>
        
    </div>
    
    <!-- jQuery JS -->
    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <!-- aos JS / animation -->
    <script src="/assets/js/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- swiper JS / slider -->
    <script src="/assets/js/swiper.min.js"></script>
    <!-- Pageable JS / fullpage -->
    <script src="/assets/js/pageable.min.js"></script>
    <!-- My CSS -->
    <script src="/assets/js/header.js"></script>
    <script src="/assets/js/main.js"></script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");