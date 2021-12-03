<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//if (G5_IS_MOBILE) {
//    include_once(G5_THEME_MOBILE_PATH.'/head.php');
//    return;
//}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
    <?php
//    if(defined('_INDEX_')) { // index에서만 실행
//        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
//    }
    ?>

        <!-- ------------------- header ------------------- -->
        <header>
            <div class="site_map_layer">
                사이트맵
                <span>닫기</span>
            </div>
            <div class="pc_gnb">	
                <div class="nav_wrap">
                    <div class="nav_inner">
                        <div class="menu">                        
                            <ul class="gnb">
                                <!-- gnb logo -->
                                <li class="gnb_logo clearfix">
                                    <h1><a href="/"><img src="/assets/images/logo.png" alt="대한주정 로고"></a></h1>
                                </li>                                                        
                                <li class="view">
                                    <a href="#none">대한주정판매 소개</a>
                                    <ul class="depth depth_01">
                                        <li><a href="#none">CEO 인사말</a></li>
                                        <li><a href="#none">회사소개</a></li>
                                        <li><a href="#none">연혁</a></li>
                                        <li><a href="#none">조직도</a></li>
                                        <li><a href="#none">오시는 길</a></li>
                                    </ul>
                                </li>                            
                                <li class="view">
                                    <a href="#none">주정 소개</a>
                                    <ul class="depth">
                                        <li><a href="#none">주정이란</a></li>
                                        <li><a href="#none">주정의 원료, 종류</a></li>
                                        <li><a href="#none">주정의 제조 공정</a></li>
                                    </ul>
                                </li>
                                <li class="view">
                                    <a href="#none">발효주정 용도</a>
                                    <ul class="depth">
                                        <li><a href="#none">주정용도</a></li>
                                    </ul>
                                </li>
                                <li class="view">
                                    <a href="#none">발효주정 활용</a>
                                    <ul class="depth">
                                        <li><a href="#none">주정의 활용</a></li>
                                        <li><a href="#none">제품 만들기 TIP</a></li>
                                    </ul>
                                </li>
                                <li class="view">
                                    <a href="#none">구입 방법</a>
                                    <ul class="depth">
                                        <li><a href="#none">발효주정 구입 절차</a></li>
                                        <li><a href="#none">구매처</a></li>
                                    </ul>
                                </li>
                                <li class="view">
                                    <a href="#none">구입 방법</a>
                                    <ul class="depth">
                                        <li><a href="#none">발효주정 구입 절차</a></li>
                                        <li><a href="#none">구매처</a></li>
                                        <li><a href="#none">온라인 상담</a></li>
                                    </ul>
                                </li>
                                <li class="view">
                                    <a href="#none">자료실</a>
                                    <ul class="depth">
                                        <li><a href="#none">알코올 희석/환산표</a></li>
                                        <li><a href="#none">관련 업체 소개</a></li>
                                        <li><a href="#none">구입 서식</a></li>
                                    </ul>
                                </li>
                                <!-- GNB Hamburgur btn -->
                                <li class="hamburgur_btn clearfix">
                                    <img src="/assets/images/icon_hamburgur.png" alt="">
                                </li>                                
                            </ul><!-- /gnb end-->
                        </div><!-- /menu end -->
                    </div>
                    <div class="menu_bg"></div><!-- /menu_bg end -->
                </div><!-- /nav_wrap end -->
            </div>
            <div class="mobile_gnb">
                <nav></nav>
            </div>
            
        </header> <!-- ------------------- /header end ------------------- -->
