<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//if (G5_IS_MOBILE) {
//    include_once(G5_THEME_MOBILE_PATH.'/index.php');
//    return;
//}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


        <main id="container" class="index" >

            <!-- ------------------- section 01 ------------------- -->
            <section data-anchor="Page 1" class="main_01">

                <!-- Slider main container -->
                <div class="swiper-container main_slider">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide" >
                            <div class="inner_container slide_content" >
                                <h3>천의 얼굴을 가진 <b class="point_b">순수</b>의 <b class="point_b">미학</b></h3>
                                <h2><b class="point_b">순수 곡물</b>과 <b class="point_b">발효 과학</b>이 만나 탄생하는</h2>
                                <h2><b class="point_b">고품질</b>의 <b class="point_b">주정!</b></h2>
                                <span>다양한 용도로 삶을 더 편리하고 풍요롭게 만들어갑니다.</span>
                            </div>
                        </div>
                        <div class="swiper-slide" >
                            <div class="inner_container slide_content slide_content_w">
                                <h3>미래를 건강하게 만드는 회사</h3>
                                <h2><b>최첨단</b>의 검사 장비를 갖추고</h2>
                                <h2><b>정기적인</b> 검사 진행</h2>
                                <span>언제나 신뢰할 수 있는 최고 품질의 발효 주정을 공급하고 있습니다</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="water_mark">
                    <div class="water_icon"></div>
                    <div class="bullet"></div>
                </div>
                <!-- Folding box -->
                <div class="folding">
                    <div class="inner_container">
                        <span >대한주정판매 소개</span>
                        <h3>Company Introduction and History</h3>
                        <img src="/assets/images/icon_right_arrow_l.png" alt="화살표 아이콘">
                    </div>
                </div>
            </section>  <!-- ------------------- /section 01 ------------------- -->

            <!-- ------------------- section 02 ------------------- -->
            <section data-anchor="Page 2" class="main_02">
                <div class="inner_container">

                    <div class="main_title_wrap">
                        <span class="water_mark"><img src="/assets/images/icon_waterdrop_01.png" alt="물방울 페이지 마크"></span>
                        <h3 class="main_title" ><b>깐깐</b>하다, <b>빈틈</b>없다. <b>발효주정의</b> <b class="point_b">품질관리</b></h3>
                        <h4>멈추지 않는 <b class="point_b">품질관리</b>를 위한 노력</h4>
                        <p>대한주정판매㈜는 주정의 품질관리를 위해 최첨단 검사장비를 갖추고</p>
                        <p>정기적인 검사를 통해 언제나 신뢰할 수 있는 주정만을 공급하고 있습니다.</p>
                    </div>

                    <ul class="main_02_list">
                        <li>
                            <a href="#none">
                                <div class="icon_box"><img src="/assets/images/icon_hand.png" alt="인사말 아이콘"></div>
                                <span class="main_02_list_title">CEO 인사말</span>
                                <p>인사드립니다.</p>
                                <p>대한주정판매㈜입니다.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#none">
                                <div class="icon_box"><img src="/assets/images/icon_history.png" alt="히스토리 아이콘"></div>
                                <span class="main_02_list_title">HISTORY</span>
                                <p>철저한 품질관리로 최고의 주정을 공급하는</p>
                                <p>대한주정판매가 걸어온 길을 소개합니다.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#none">
                                <div class="icon_box"><img src="/assets/images/icon_member.png" alt="멤버 아이콘"></div>
                                <span class="main_02_list_title">MEMBER</span>
                                <p>대한주정판매㈜를 이끌어 가고 있는</p>
                                <p>조직 및 구성원을 소개합니다.</p>
                            </a>
                        </li>
                        <li>
                            <a href="#none">
                                <div class="icon_box"><img src="/assets/images/icon_location.png" alt="로케이션 아이콘"></div>
                                <span class="main_02_list_title">LOCATION</span>
                                <p>대한주정판매㈜ 본사를</p>
                                <p>소개합니다.</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </section> <!-- ------------------- /section 02 ------------------- -->

            <!-- ------------------- section 03 ------------------- -->
            <section data-anchor="Page 3" class="main_03">
                <div class="inner_container">

                    <div class="tap_btn_wrap">
                        <span class="water_mark">
                            <img src="/assets/images/icon_waterdrop_02.png" alt="물방울 페이지 마크">
                        </span>
                        <h3 class="main_title"><b>BUSNIESS</b></h3>
                        <p>주정 구입 시 필요한 절차부터 관련 기관을 소개합니다.</p>
                        <ul class="tabs">
                            <li class="tab-link current" data-tab="tab-1">발효주정 구입절차</li>
                            <li class="tab-link" data-tab="tab-2">전국사무소, 소매업체</li>
                            <li class="tab-link" data-tab="tab-3">관련 제조 업체 소개</li>
                        </ul>
                    </div>

                    <!-- Tab01 - 발효주정 구입절차 -->
                    <div id="tab-1" class="tab-content current ">
                        <span class="tab_title">발효주정 <b class="point_b">구입절차</b></span>
                        <span class="tab_content_p">발효주정의 입고 및 출고관리는 전국의 세무서에서 담당하고 있으며, 수요자는 소정의 절차를 거쳐야 구입 가능합니다.
                        </span>                        
                        <ul class="main_03_01_list">
                            <li>
                                <i>01</i>
                                <span class="tab_list_title">구입 예정일 전<br>구입 신고</span>
                                <p>주정 구입(출고) 신청서 작성 및<br> 관할 세무서에 제출, <br> 실수요자 증명 확인</p>
                            </li>
                            <li>
                                <i>02</i>
                                <span class="tab_list_title">신고 후<br>구입의뢰</span>
                                <p>구매 수량, 희망일자 등<br> 관할 본사 및 <br> 소매 회사에 통지</p>
                            </li>
                            <li>
                                <i>03</i>
                                <span class="tab_list_title">발효주정<br>출고</span>
                                <p>구입 의뢰, 주정 대금<br> 입금 확인 후 출고</p>
                            </li>
                            <li>
                                <i>04</i>
                                <span class="tab_list_title">구입 예정일 전<br>구입 신고</span>
                                <p>주정 구입(출고) 신청서 작성 및<br> 관할 세무서에 제출, <br> 실수요자 증명 확인</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab02 - 전국사무소, 소매업체 -->
                    <div id="tab-2" class="tab-content">
                        <span class="tab_title">전국사무소, 소매업체</span>
                        <span class="tab_content_p">
                            주류용 주정은 대한주정판매에서 비주류용 주정은 소매업체에서 구매하세요
                        </span>

                        <span class="intro_title">전국사무소</span>
                        <ul class="main_03_02_list">
                            <li>
                                <span>본사</span>
                                <p>서울시 금천구 시흥대로 153길 16</p>
                                <p>T. 02) 780-6213</p>
                            </li>
                            <li>
                                <span>서울 사무소</span>
                                <p>경기도 화성시 남양읍 주석로 324</p>
                                <p>T. 02) 856-1664</p>
                            </li>
                            <li>
                                <span>군산 사무소</span>
                                <p>전북 군산시 풍전 4길 36</p>
                                <p>T. 063) 446-3877</p>
                            </li>
                            <li>
                                <span>전주 사무소</span>
                                <p>전북 전주시 덕진구 반월로 74</p>
                                <p>T. 063) 211-0390</p>
                            </li>
                            <li>
                                <span>대구 사무소</span>
                                <p>대구광역시 달서구 호산동로 6-5</p>
                                <p>T. 053) 582-2587</p>
                            </li>
                            <li>
                                <span>울산 사무소</span>
                                <p>울산광역시 울주군 청량면</p>
                                <p>T. 052) 277-6213</p>
                            </li>
                            <li>
                                <span>마산 사무소</span>
                                <p>경남 함안군 칠서면 계룡로 55</p>
                                <p>T. 055) 232-8566</p>
                            </li>
                        </ul>

                        <span class="intro_title">소매업체</span>
                        <ul class="main_03_02_list">
                            <li>
                                <span>대한 주정 라이프</span>
                                <p>경기도 화성시 우정읍 버들로 899-57</p>
                                <p>T. 031) 8077-2495</p>
                            </li>
                            <li>
                                <span>주정 판매 월드</span>
                                <p>전북 전주시 덕진구 팔복동 4가 205-7</p>
                                <p>T. 063) 214-0040</p>
                            </li>
                            <li>
                                <span>우리 주정</span>
                                <p>부산광역시 금정구 공단로 54 (금사동)</p>
                                <p>T. 051) 204-6262</p>
                            </li>
                        </ul>

                    </div>
                    <!-- Tab03 / 관련 제조 업체 소개 -->
                    <div id="tab-3" class="tab-content">
                        <span class="tab_title">관련 제조 업체 소개</span>
                        <span class="tab_content_p">
                            주류용 주정은 대한주정판매에서 비주류용 주정은 소매업체에서 구매하세요
                        </span>

                        <div class="tap_3_wrap">
                            <span class="intro_title">주정제조 회사소개</span>
                            <ul class="main_03_02_list">
                                <li>
                                    <span>㈜창해에탄올</span>
                                    <p>전라북도 전주시 덕진구원만성로15</p>
                                </li>
                                <li>
                                    <span>㈜진로발효</span>
                                    <p>경기도 안산시 단원구 별망로 594</p>
                                </li>
                                <li>
                                    <span>일신실업㈜</span>
                                    <p>경상남도 함안군 칠서면 대부로551</p>
                                </li>
                                <li>
                                    <span>서영주정㈜</span>
                                    <p>전라북도 군산시 외항로 366</p>
                                </li>
                                <li>
                                    <span>풍국주정공업㈜</span>
                                    <p>대구광역시 달서구 성서로72</p>
                                </li>
                                <li>
                                    <span>㈜MH에탄올</span>
                                    <p>경상남도 창원시 마산회원구 내서읍 광려천남로 25</p>
                                </li>
                                <li>
                                    <span>한국알콜산업㈜</span>
                                    <p>울산광역시 남구 상개로 66</p>
                                </li>
                                <li>
                                    <span>롯데칠성음료㈜</span>
                                    <p>전라북도 군산시 외항1길222</p>
                                </li>
                                <li>
                                    <span>서안주정㈜</span>
                                    <p>전라북도 군산시 외항 6길 67</p>
                                </li>
                            </ul>
                            <span class="intro_title">소주제조 회사소개</span>
                            <ul class="main_03_02_list">
                                <li>
                                    <span>하이트진로㈜</span>
                                    <p>(본사)서울특별시 강남구 영동대로 714 하이트빌딩</p>
                                    <p>(이천 공장)경기도 이천시 부발읍 중부대로 1707번길 13</p>
                                </li>
                                <li>
                                    <span>롯데칠성음료㈜</span>
                                    <p>(본사)서울시 송파구 신천동 7-18 롯데캐슬골드 5층</p>
                                    <p>(강릉공장)강원도 강릉시 관솔길 7</p>
                                </li>
                                <li>
                                    <span>㈜무학</span>
                                    <p>경상남도 창원시 마산회원구 봉암공단 2길6</p>
                                </li>
                                <li>
                                    <span>㈜금복주</span>
                                    <p>대구광역시 달서구 성서로 276</p>
                                </li>
                                <li>
                                    <span>보헤양조㈜</span>
                                    <p>전라남도 장성군 장성읍보해길41</p>
                                </li>
                                <li>
                                    <span>㈜더맥키스컴퍼니</span>
                                    <p>대전광역시 서구 영골길 158</p>
                                </li>
                                <li>
                                    <span>대선주조㈜</span>
                                    <p>부산광역시 동래구 여고로 77</p>
                                </li>
                                <li>
                                    <span>㈜충북소주</span>
                                    <p>충청북도 청원군 내수읍 우산길 57</p>
                                </li>
                                <li>
                                    <span>㈜한라산</span>
                                    <p>제주특별자치도 제주 한림읍 한림로 555</p>
                                </li>
                                <li>
                                    <span>㈜제주소주</span>
                                    <p>제주특별자치도 조천읍 중산간동로 1028</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>    
            </section> <!-- ------------------- /section 03 ------------------- -->

            <!-- ------------------- section 04 ------------------- -->
            <section data-anchor="Page 4" class="main_04">
                <div class="inner_container">

                    <div class="tap_btn_wrap">
                        <span class="water_mark">
                            <img src="/assets/images/icon_waterdrop_03.png" alt="물방울 페이지 마크">
                        </span>
                        <h3 class="main_title"><b>자료실</b></h3>
                        <p>주정 취급 시 필요한 자료부터 신고 양식을 안내합니다.</p>

                        <ul class="tab_">
                            <li class="tab-link active" data-tab="tab-4">알코올희석, 환산표</li>
                            <li class="tab-link" data-tab="tab-5">서식 다운로드</li>
                        </ul>
                        
                    </div>

                    <!-- Tab01 - 알코올희석, 환산표 -->
                    <div id="tab-4" class="tab-contents active">                  
                        <ul class="main_04_01_list">
                            <li>
                                <div class="table_down">
                                    <span>알코올 <b>희석표</b></span>
                                    <p>알코올을 희석하고자 할 때 알코올과 물의 ml를 계산하는 표</p>
                                    <div class="btn_down_b">
                                        <div class="btn_layer"></div>
                                        <a href="#none">DOWNLOAD</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="table_down">
                                    <span>알코올 <b>용량 환산표</b></span>
                                    <p>알코올 용량 환산표는 알코올 도수 94% 일 때 적용되는 용량 환산표</p>
                                    <div class="btn_down_g">
                                        <div class="btn_layer"></div>
                                        <a href="#none">DOWNLOAD</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="table_down">
                                    <span>알코올 <b>도수 환산표</b></span>
                                    <p>알코올 도수 환산표는 주정계로 알코올의 도수를 측정할 때 보는 표</p>
                                    <div class="btn_down_b">
                                        <div class="btn_layer"></div>
                                        <a href="#none">DOWNLOAD</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- /Tab01 -->
                    <!-- Tab02 - 자료실 -->
                    <div id="tab-5" class="tab-contents">
                        <ul class="main_04_02_list">
                            <li>
                                <div class="img_area"></div>
                                <span>서식 제목</span>
                            </li>
                            <li>
                                <div class="img_area"></div>
                                <span>서식 제목</span>
                            </li>
                            <li>
                                <div class="img_area"></div>
                                <span>서식 제목</span>
                            </li>
                            <li>
                                <div class="img_area"></div>
                                <span>서식 제목</span>
                            </li>
                            <li>
                                <div class="img_area"></div>
                                <span>서식 제목</span>
                            </li>
                            <li>
                                <div class="img_area"></div>
                                <span>서식 제목</span>
                            </li>
                            <li>
                                <div class="img_area"></div>
                                <span>서식 제목</span>
                            </li>
                        </ul>
                    </div><!-- /Tab01 --> 

                </div>
            </section> <!-- ------------------- /section 04 ------------------- -->

            <!-- ------------------- section 05 ------------------- -->
            <section data-anchor="Page 5" class="main_05">
                <div class="inner_container">
                    <div class="main_title_wrap">
                        <span class="water_mark"><img src="/assets/images/icon_waterdrop_04.png" alt="물방울 페이지 마크"></span>
                        <h3 class="main_title"><b>CONTACT</b></h3>
                    </div>

                    <ul class="contact_list">
                        <li>
                            <span class="contact_list_title">고객센터</span>
                            <ul class="center_list">
                                <li class="point_b">
                                    <i><img src="/assets/images/icon_phone.png" alt="전화 아이콘"></i>
                                    02) 780 - 6213
                                </li>
                                <li>
                                    <i><img src="/assets/images/icon_fax.png" alt="팩스 아이콘"></i> 
                                    02) 780 - 6405
                                </li>
                                <li>
                                    <i><img src="/assets/images/icon_mail.png" alt="메일 아이콘"></i>
                                    kasc7211@naver.com
                                </li>
                                <li class="contact_info">
                                    <span><b>평일</b> 09:00~06:00 <i>|</i> </span>
                                    <span><b>점심</b> 12:00~13:00</span>
                                    <span><b>휴일</b> 법정공휴일</span>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="contact_list_title">온라인 상담</span>
                            <div class="btn_full product_inquiry">
                                <a href="#one">제품 구입 문의</a>
                            </div>
                            <div class="btn_full inquiry">
                                <a href="#none">
                                    1:1문의<span>궁금한 사항은 언제든 문의주세요</span>
                                </a>
                            </div>
                        </li>
                        <!-- 게시판 영역 -->
                        <li class="board_list">
                            <span class="contact_list_title">공지사항</span>
                            <img class="btn_plus" src="/assets/images/icon_plus.png" alt="더보기 버튼 이미지">                            
                            <table class="notice_board">                                
                                <tbody>
                                    <tr>
                                        <td>이 영역은 게시판 영역입니다. 자세한 사항은 게시판을 참고</td>
                                        <td>2021.11.29</td>
                                    </tr>
                                    <tr>
                                        <td>이 영역은 게시판 영역입니다. 자세한 사항은 게시판을 참고</td>
                                        <td>2021.11.29</td>
                                    </tr>
                                    <tr>
                                        <td>이 영역은 게시판 영역입니다. 자세한 사항은 게시판을 참고</td>
                                        <td>2021.11.29</td>
                                    </tr>
                                    <tr>
                                        <td>이 영역은 게시판 영역입니다. 자세한 사항은 게시판을 참고</td>
                                        <td>2021.11.29</td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </div>  <!-- /inner.container -->

<?php
include_once(G5_THEME_PATH.'/tail.php');