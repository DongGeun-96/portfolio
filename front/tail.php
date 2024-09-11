<?php
include_once('./_common.php');

?>
       </div>
    </div>
</body>
</html>
<!-- 모바일 하단메뉴 전환 -->
<div class="mobile-bottommenu">
    <ul>
        <li>
            <button class="homecurrent" onclick="location.href='/front/index.php'">
                <span style="color: #7c7c7c; font-size: 23px;" class="iconify" data-icon="bxs:home"></span>
                <p>홈</p>
            </button>
        </li>
        <li>
            <button type="button" onClick="doShowMobileInfo('charge')">
                <span style="color: #7c7c7c; font-size: 23px;" class="iconify" data-icon="mingcute:receive-money-fill" data-rotate="180deg"></span>
                <p>충전신청</p>
            </button>
        </li>
        <li>
            <button onclick="openNav()">
                <span style="color: #7c7c7c; font-size: 26px;" class="iconify" data-icon="entypo:menu"></span>
                <p style="margin-top: 2px;">전체메뉴</p>
            </button>
        </li>
        <li>
            <button type="button" onClick="doShowMobileInfo('excharge')">
                <span style="color: #7c7c7c; font-size: 23px;" class="iconify" data-icon="mingcute:receive-money-fill"></span>
                <p>환전신청</p>
            </button>
        </li>
        <li>
            <button class="modal-messagebut" type="button" onClick="doShowMemoMobile()">
                <span style="color: #7c7c7c; font-size: 23px;" class="iconify" data-icon="majesticons:mail"></span>
                <p>쪽지</p>
            </button>
            <p class="modal-messagebut-alarm"></p>
        </li>
    </ul>
</div>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="hamburgerlogo">
        <img style="width: 120px;" src="/front/images/modallogo.webp" alt="로고">
    </div>
    <div class="hamburger-abox">
        <p class="hamburger-abox-p">전체메뉴</p>
        <!-- <button style="margin-top: 20px;">
              <span></span>
              <span class="hamburger-span">베팅대회</span>
          </button> -->
        <!-- 충전 -->
        <button type="button" onClick="doShowMobileInfo('charge')">
            <span></span>
            <span class="hamburger-span">충전신청</span>
        </button>
        <!-- 환전 -->
        <button type="button" onClick="doShowMobileInfo('excharge')">
            <span></span>
            <span class="hamburger-span">환전신청</span>
        </button>
        <!-- 포인트 -->
        <button type="button" onClick="doShowMobileInfo('rolling')">
            <span></span>
            <span class="hamburger-span">포인트 전환</span>
        </button>
        <!-- 베팅 -->
        <button type="button" onClick="doShowMobileInfo('bet_history')">
            <span></span>
            <span class="hamburger-span">베팅내역</span>
        </button>
        <!-- 출석 -->
        <!-- <button type="button" onClick="doShowMobileInfo('attendance')">
            <span></span>
            <span class="hamburger-span">출석체크</span>
        </button> -->
        <!-- 공지 -->
        <button type="button" onClick="doShowMobileInfo('notice')">
            <span></span>
            <span class="hamburger-span">공지사항</span>
        </button>
        <!-- 고객 -->
        <button type="button" onClick="doShowMobileInfo('qna')">
            <span></span>
            <span class="hamburger-span">고객센터</span>
        </button>
    </div>
</div>
<!-- alert 모달 -->
<div class="modal fade alert-modal" id="alert-modal" tabindex="-1" aria-hidden="true" style="z-index:9999;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-end">
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span style="color: #fff; font-size: 26px;" class="iconify" data-icon="ion:close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div style="margin-bottom: 20px;">
                    <img class="logo-img" src="/front/images/modallogo.webp" alt="로고">
                </div>
                <p id="alert_message"></p>
                <button type="button" style="margin-top: 8px;" class="loginconform" onClick="cfmCloseAlert();">확인</button>
            </div>
        </div>
    </div>
</div>
<!-- 로그인 -->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-hidden="true">
    <div style="max-width: 400px;" class="modal-dialog  header-modal modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span style="color: #fff; font-size: 26px;" class="iconify" data-icon="ion:close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div style="text-align: center;">
                    <img class="logo-img" src="/front/images/modallogo.webp" alt="로고">
                </div>
                <div class="modal-loginbox">
                    <p class="login-title">로그인 후 이용 가능합니다</p>
                    <div class="modal-loginbox-inputbox">
                        <form name="flogin" action="./login.check.php" method="post">
                            <input id="login_id" name="mb_id" class="tdinput tdid" type="text" placeholder="아이디">
                            <input id="login_password" name="mb_password" style="margin-top: 8px;" class="tdinput tdpassword" type="password" placeholder="비밀번호">
                            <button type="button" style="margin-top: 8px;" class="loginconform" onClick="doLoginCheck();">로그인</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 가입코드 -->
<div class="modal fade" id="modalJoinCode" tabindex="-1" aria-hidden="true">
    <div style="max-width: 400px;" class="modal-dialog  header-modal modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span style="color: #fff; font-size: 26px;" class="iconify" data-icon="ion:close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div style="text-align: center;">
                    <img class="logo-img" src="/front/images/modallogo.webp" alt="로고">
                </div>
                <div class="modal-loginbox">
                    <p class="login-title">가입코드를 입력해 주세요.</p>
                    <div class="modal-loginbox-inputbox">
                        <form onsubmit="return false">
                            <input type="hidden">
                            <input id="mb_join_code" class="tdinput tdid" type="text" placeholder="가입코드">
                            <button type="button" style="margin-top: 8px;" class="loginconform" onClick="doJoinCodeCheck();">확인</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 회원가입 -->
<div class="modal fade" id="modalSignup" tabindex="-1" aria-hidden="true">
    <div style="max-width: 450px;" class="modal-dialog  header-modal modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span style="color: #fff; font-size: 26px;" class="iconify" data-icon="ion:close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div style="text-align: center;">
                    <img class="logo-img" src="/front/images/modallogo.webp" alt="로고">
                </div>
                <div class="modal-loginbox">
                    <p class="login-title">회원가입</p>
                    <div class="modal-loginbox-inputbox" style="height:400px;overflow:auto;">
                        <form action="#">
                            <div class="signup-box">
                                <p class="signup-p01">아이디</p>
                                <div class="d-flex">
                                    <input id="mb_id" style="width: calc(100% - 80px); border-top-right-radius: 0; border-bottom-right-radius: 0; border-right: none;" class="tdinput tdid" type="text">
                                    <button class="phoneconform" type="button" onClick="doSignupCheckID()" style="width:80px;">중복확인</button>
                                </div>
                                <p class="signup-p02">4자 이상, 영어 소문자+숫자 조합만 입력가능합니다.</p>
                            </div>
                            <div class="signup-box">
                                <p class="signup-p01">닉네임</p>
                                <div class="d-flex">
                                    <input id="mb_nick" style="width: calc(100% - 80px); border-top-right-radius: 0; border-bottom-right-radius: 0; border-right: none;" class="tdinput tdid" type="text">
                                    <button class="phoneconform" type="button" onClick="doSignupCheckNick()" style="width:80px;">중복확인</button>
                                </div>
                                <p class="signup-p02">닉네임은 2~10자리</p>
                            </div>
                            <div class="signup-box">
                                <p class="signup-p01">이름</p>
                                <input id="mb_name" class="tdinput tdid" type="text">
                            </div>
                            <div class="signup-box">
                                <p class="signup-p01">생년월일</p>
                                <input id="mb_birth" class="tdinput tdid" type="text" placeholder="생년월일(예:19780102-1)">
                            </div>
                            <div class="signup-box">
                                <p class="signup-p01">비밀번호</p>
                                <input id="mb_password" style="margin-top: 8px;" class="tdinput tdpassword" type="password" placeholder="비밀번호(영문, 숫자포함 6자리 이상)">
                            </div>
                            <div class="signup-box">
                                <p class="signup-p01">비밀번호 확인</p>
                                <input id="mb_password2" style="margin-top: 8px;" class="tdinput tdpassword" type="password" placeholder="비밀번호(영문, 숫자포함 6자리 이상)">
                            </div>
                            <div class="signup-box">
                                <p class="signup-p01">은행</p>
                                <select id="mb_bank_name" class="form-select" placeholder="입금은행 선택">
                                    <option value="경남은행" selected>경남은행</option>
                                    <option value="IBK기업은행">IBK기업은행</option>
                                    <option value="신한은행">신한은행</option>
                                    <option value="KB국민은행">KB국민은행</option>
                                    <option value="KEB하나은행">KEB하나은행</option>
                                    <option value="카카오뱅크">카카오뱅크</option>
                                    <option value="케이뱅크">케이뱅크</option>
                                    <option value="우체국">우체국</option>
                                    <option value="Sh수협은행">Sh수협은행</option>
                                    <option value="우리은행">우리은행</option>
                                    <option value="NH농협은행">NH농협은행</option>
                                    <option value="지역농축협">지역농축협</option>
                                    <option value="신협은행">신협은행</option>
                                    <option value="새마을금고">새마을금고</option>
                                    <option value="광주은행">광주은행</option>
                                    <option value="전북은행">전북은행</option>
                                    <option value="대구은행">대구은행</option>
                                    <option value="부산은행">부산은행</option>
                                    <option value="제주은행">제주은행</option>
                                    <option value="제일은행">제일은행</option>
                                    <option value="저축은행">저축은행</option>
                                </select>
                            </div>
                            <div class="signup-box">
                                <p class="signup-p01">계좌번호</p>
                                <input id="mb_bank_account" class="tdinput tdid" type="text">
                            </div>
                            <div class="signup-box">
                                <p class="signup-p01">예금주</p>
                                <input id="mb_bank_owner" class="tdinput tdid" type="text">
                            </div>
                            <div class="signup-box">
                                <p class="signup-p01">출금비번</p>
                                <input id="mb_bank_password" style="margin-top: 8px;" class="tdinput tdpassword" type="password">
                            </div>
                            <div class="signup-box">
                                <p class="signup-p01">통신사</p>
                                <select id="mb_hp_type" class="form-select">
                                    <option value="SKT">SKT</option>
                                    <option value="KT">KT</option>
                                    <option value="LGT">LGT</option>
                                </select>
                            </div>                                
                            <div class="signup-box">
                                <p class="signup-p01">휴대폰번호</p>
                                <input id="mb_hp" class="tdinput tdid" type="text" placeholder="휴대폰번호(숫자만 입력)">
                            </div>
                            <button style="margin-top: 25px;" class="loginconform" type="button" onClick="dosignup()">회원가입</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 슬롯 게임 리스트-->
<div class="modal fade" id="modalSlotGameList" tabindex="-1" aria-hidden="true">
    <div style="margin-top: 100px; max-width: 1500px;" class="modal-dialog  casino-modal">
        <div class="modal-content">
            <div class="modal-header">
                <p class="casino-modal-title" id="slot_game_list_title">슬롯게임</p>
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span style="color: #fff; font-size: 26px;" class="iconify" data-icon="ion:close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="casino-game-box" id="slot_game_list" style="max-height: 720px;overflow: auto;">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- 상단메뉴 -->
<div class="modal fade" id="modalInfo" tabindex="-1" aria-hidden="true">
    <div style="margin-top: 10px;" class="modal-dialog bigmodal header-modal">
        <div class="modal-content">
            <div class="modal-header" style="z-index: 9999;">
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span style="color: #fff; font-size: 26px;" class="iconify" data-icon="ion:close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div style="text-align: center; margin-top: -30px;">
                    <img  style="width: 240px;" src="/front/images/modallogo.webp" alt="로고">
                </div>
                <ul class="nav nav-pills mb-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="btn_charge" type="button" onClick="doChangeInfo('charge');">충전신청</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="btn_excharge" type="button" onClick="doChangeInfo('excharge');">환전신청</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="btn_rolling" type="button" onClick="doChangeInfo('rolling');">포인트 전환</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="btn_bet_history" type="button" onClick="doChangeInfo('bet_history');">베팅내역</button>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="btn_attendance" type="button" onClick="doChangeInfo('attendance');">출석체크</button>
                    </li> -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="btn_notice" type="button" onClick="doChangeInfo('notice');">공지사항</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="btn_qna" type="button" onClick="doChangeInfo('qna');">고객센터</button>
                    </li>
                </ul>
                <div class="tab-content" id="div_tab_content">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- 공지사항 상세 -->
<div class="modal fade mun-Modal03" id="modalNoticeDetail" tabindex="-1" aria-hidden="true" style="z-index:9999;">
    <div style="max-width: 600px;" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span style="color: #fff; font-size: 26px;" class="iconify" data-icon="ion:close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="cd-popup" role="alert">
                    <div class="cd-popup-container">
                        <div class="cd-popupcontent">
                            <p class="cd-popup-container-title" id="notice_title"></p>
                            <div class="cd-messagebox scroll-bar-css" id="notice_content" style="color:#fff;">
                            </div>
                            <div style="text-align: center;">
                                <button class="pill-chargebut closespan" type="button" onClick="doCloseNoticeDetail()">확인완료</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 피씨 메시지 -->
<div class="modal fade" id="modalMemoPC" aria-hidden="true">
    <div style="margin-top: 100px; max-width: 1020px;" class="modal-dialog  casino-modal">
        <div class="modal-content">
            <div class="modal-header">
                <p class="casino-modal-title">쪽지</p>
                <button id="btnModalMemoPC" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span style="color: #fff; font-size: 26px;" class="iconify" data-icon="ion:close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="header-modal-contentbox">
                    <div class="d-flex justify-content-end mb-2">
                        <button class="message-read" onclick="doReadAll('PC');">전체읽기</button>
                    </div>
                    <div>
                        <table style="width: 100%; table-layout: fixed;" class="alarm-table">
                            <colgroup>
                                <col style="width: 60%;">
                                <col style="width: 20%;">
                                <col style="width: 20%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>내용</th>
                                    <th>받은날짜</th>
                                    <th>읽음여부</th>
                                </tr>
                            </thead>
                            <tbody id="memo_pc_list">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 모바일 쪽지 모달 -->
<div class="modal fade" id="modalMemoMobile" aria-hidden="true">
    <div class="modal-dialog header-modal">
        <div class="modal-content">
            <div class="modal-header d-flex">
                <p class="casino-modal-title">쪽지</p>
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span style="color: #fff; font-size: 26px;" class="iconify" data-icon="ion:close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="header-modal-contentbox">
                    <div class="d-flex justify-content-end mb-2">
                        <button class="message-read" onclick="doReadAll('MO');">전체읽기</button>
                    </div>
                    <div>
                        <table style="width: 100%; table-layout: fixed;" class="alarm-table">
                            <colgroup>
                                <col style="width: 62%;">
                                <col style="width: 20%;">
                                <col style="width: 18%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>내용</th>
                                    <th>받은날짜</th>
                                    <th>읽음여부</th>
                                </tr>
                            </thead>
                            <tbody id="memo_mobile_list">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 문의하기 상세 -->
<div class="modal fade mun-Modal02" id="modalMemoDetail" tabindex="-1" aria-hidden="true" style="z-index:9999;">
    <div style="max-width: 600px;" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span style="color: #fff; font-size: 26px;" class="iconify" data-icon="ion:close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="cd-popup" role="alert">
                    <div class="cd-popup-container">
                        <div class="cd-popupcontent">
                            <p class="cd-popup-container-title" id="memo_detail_title"></p>
                            <div class="cd-messagebox scroll-bar-css">
                                <p id="memo_detail_content">
                                </p>
                            </div>
                            <div style="text-align: center;">
                                <button class="pill-chargebut closespan" type="button" onClick="doCloseMemoDetail();">확인완료</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 고객센터 상세 -->
<div class="modal fade mun-Modal04" id="modalQnaDetail" tabindex="-1" aria-hidden="true" style="z-index:9999;">
    <div style="max-width: 600px;" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span style="color: #fff; font-size: 26px;" class="iconify" data-icon="ion:close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="cd-popup" role="alert">
                    <div class="cd-popup-container">
                        <div class="cd-popupcontent" id="div_qna_detail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 문의하기 상세 -->
<div class="modal fade mun-Modal" id="modalQnaRegister" tabindex="-1" aria-hidden="true" style="z-index:9999;">
    <div style="max-width: 600px;" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span style="color: #fff; font-size: 26px;" class="iconify" data-icon="ion:close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="cd-popup02" role="alert">
                    <div class="cd-popup-container">
                        <div class="cd-popupcontent">
                            <div class="munbox-content">
                                <div class="munbox">
                                    <p class="mun-p">분류</p>
                                    <select class="form-select" id="ca_name">
                                        <option value="">선택</option>
                                        <option value="계좌문의">계좌문의</option>
                                        <option value="출금계좌등록 문의">출금계좌등록 문의</option>
                                        <option value="충전지연">충전지연</option>
                                        <option value="환전지연">환전지연</option>
                                        <option value="버그신고">버그신고</option>
                                        <option value="기타문의">기타문의</option>
                                    </select>
                                </div>
                                <div class="munbox">
                                    <p class="mun-p">제목</p>
                                    <input style="text-align: left;" id="wr_subject" class="tdinput tdid" type="text" placeholder="제목을 입력해주세요.">
                                </div>
                            </div>
                            <textarea class="muntextarea" id="wr_content" cols="30" rows="10"></textarea>
                            <div style="text-align: center;">
                                <button class="pill-chargebut closespan" id="qna_save_btn" onClick="doSaveQna()">문의하기</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 모바일 고객센터 모달 -->
<div class="modal fade" id="modalInfoMobile" aria-hidden="true">
    <div class="modal-dialog header-modal">
        <div class="modal-content" id="div_mobile_content">

        </div>
    </div>
</div>
<script>
    <?php if (!$is_member) { ?>
        $(function(){
            $("#login_password").on("keyup",function(e){
                if(e.keyCode==13){
                    doLoginCheck();
                }
            });

            $("#mb_join_code").on("keyup",function(e){
                if(e.keyCode==13){
                    doJoinCodeCheck();
                }
            });

            // $("#secure_code").on("keyup",function(e){
            //     if(e.keyCode==13){
            //         doLogin();
            //     }
            // });

        });

        function doLogin() {
            $("#login_id").val("");
            $("#login_password").val("");
            $("#modalLogin").modal({
                backdrop: "static"
            });
            $("#modalLogin").modal('show');
        }

        function doLoginCheck() {
            if (!$("#login_id").val()) {
                cfmAlert("아이디를 입력하세요.");
                return;
            }

            if (!$("#login_password").val()) {
                cfmAlert("비밀번호를 입력하세요.");
                return;
            }

            document.flogin.submit();


        }

        function doJoinCode() {
            $("#mb_join_code").val("");
            $('#modalJoinCode').modal({
                backdrop: 'static'
            });
            $('#modalJoinCode').modal('show');
        }

        function doJoinCodeCheck() {
            if (!$("#mb_join_code").val()) {
                cfmAlert("가입코드를 입력하세요.");
                return;
            }
            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.member.joincode.check.php",
                data: {
                    jc_id: $("#mb_join_code").val()
                },
                dataType: "JSON",
                success: function(data) {
                    if (data.result == "SUCC") {
                        $("#mb_id").val("");
                        $("#mb_nick").val("");
                        $("#mb_password").val("");
                        $("#mb_password2").val("");
                        $("#mb_bank_name").val("");
                        $("#mb_bank_account").val("");
                        $("#mb_bank_owner").val("");
                        $("#mb_bank_password").val("");
                        $("#mb_hp").val("");

                        $('#modalJoinCode').modal('hide');
                        $('#modalSignup').modal({
                            backdrop: 'static'
                        });
                        $('#modalSignup').modal('show');
                    } else {
                        cfmAlert(data.msg);
                    }
                },
                error: function(event) {
                    cfmAlert("잠시후 다시 시도 바랍니다.");
                }
            });
        }

        function doSignupCheckID() {
            var chk = 0;
            var reg_num = /^.*[0-9].*$/;
            var reg_str = /^.*[a-z].*$/;

            if (!$("#mb_id").val()) {
                cfmAlert("아이디를 입력하세요.");
                return;
            }

            var mb_id = $("#mb_id").val();
            if (reg_num.test(mb_id)) {
                chk++;
            }
            if (reg_str.test(mb_id)) {
                chk++;
            }

            if (chk < 2 || mb_id.length < 5) {
                cfmAlert('아이디는 5자 이상, 영어 소문자+숫자 조합만 입력가능합니다.');
                return;
            }

            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.member.mb_id.check.php",
                data: {
                    mb_id: $("#mb_id").val()
                },
                dataType: "JSON",
                success: function(data) {
                    if (data.result == "SUCC") {
                        cfmAlert("사용할 수 있는 아이디 입니다.");
                    } else {
                        cfmAlert(data.msg);

                    }
                },
                error: function(event) {
                    cfmAlert("잠시후 다시 시도 바랍니다.");
                }
            });
        }

        function doSignupCheckNick() {
            if (!$("#mb_nick").val()) {
                cfmAlert("닉네임을 입력하세요.");
                return;
            }

            if ($("#mb_nick").val().length < 3 || $("#mb_nick").val().length > 8) {
                cfmAlert("닉네임은 3자이상 8자이하로 입력하세요.");
                return;
            }

            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.member.mb_nick.check.php",
                data: {
                    mb_nick: $("#mb_nick").val()
                },
                dataType: "JSON",
                success: function(data) {
                    if (data.result == "SUCC") {
                        cfmAlert("사용할 수 있는 닉네임 입니다.");
                    } else {
                        cfmAlert(data.msg);

                    }
                },
                error: function(event) {
                    cfmAlert("잠시후 다시 시도 바랍니다.");
                }
            });
        }

        function dosignup() {
            var chk = 0;
            var reg_num = /^.*[0-9].*$/;
            var reg_str = /^.*[a-z].*$/;

            var patternPhone = /01[016789]{1}[0-9]{3,4}[0-9]{4}/;

            if (!$("#mb_id").val()) {
                cfmAlert("아이디를 입력하세요.");
                return;
            }

            var mb_id = $("#mb_id").val();
            if (reg_num.test(mb_id)) {
                chk++;
            }
            if (reg_str.test(mb_id)) {
                chk++;
            }

            if (chk < 2 || mb_id.length < 5) {
                cfmAlert('아이디는 4자 이상, 영어 소문자+숫자 조합만 입력가능합니다.');
                return;
            }


            if (!$("#mb_nick").val()) {
                cfmAlert("닉네임을 입력하세요.");
                return;
            }

            if ($("#mb_nick").val().length < 3 || $("#mb_nick").val().length > 8) {
                cfmAlert("닉네임은 3자이상 8자이하로 입력하세요.");
                return;
            }

            if (!$("#mb_name").val()) {
                cfmAlert("이름을 입력하세요.");
                return;
            }

            if (!$("#mb_birth").val()) {
                cfmAlert("생년월일을 입력하세요.");
                return;
            }
            if (!$("#mb_hp").val()) {
                cfmAlert("핸드폰 번호를 입력하세요.");
                return;
            }

            var phoneNumber = $("#mb_hp").val();
            if(!reg_num.test(phoneNumber)) {
                cfmAlert('핸드폰 번호는 숫자만 입력가능합니다');
                return;
            }
            if (!patternPhone.test(phoneNumber)) {
                cfmAlert('핸드폰 번호를 확인 해주세요');
                return;
            }



            if (!$("#mb_password").val()) {
                cfmAlert("비밀번호를 입력하세요.");
                return;
            }

            if (!$("#mb_password2").val()) {
                cfmAlert("비밀번호 확인을 입력하세요.");
                return;
            }

            if ($("#mb_password").val() != $("#mb_password2").val()) {
                cfmAlert("비밀번호와 비밀번호확인이 일치하지 않습니다.");
                return;
            }

            if ($("#mb_password").val().length < 6) {
                cfmAlert("비밀번호 영문,숫자포함 6자리 이상 입력하세요.");
                return;
            }

            if (!$("#mb_bank_name").val()) {
                cfmAlert("비밀번호를 입력하세요.");
                return;
            }

            var bankAccount = $("#mb_bank_account").val();
            if (!$("#mb_bank_account").val()) {
                cfmAlert("계좌번호를 입력하세요.");
                return;
            }

            if(!reg_num.test(bankAccount)) {
                cfmAlert('계좌번호는 숫자만 입력가능합니다');
                return;
            }

            if (!$("#mb_bank_owner").val()) {
                cfmAlert("예금주를 입력하세요.");
                return;
            }
            if (!$("#mb_bank_password").val()) {
                cfmAlert("출금비밀번호를 입력하세요.");
                return;
            }
            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.member.signup.php",
                data: {
                    mb_join_code: $("#mb_join_code").val(),
                    mb_id: $("#mb_id").val(),
                    mb_nick: $("#mb_nick").val(),
                    mb_name: $("#mb_name").val(),
                    mb_birth: $("#mb_birth").val(),
                    mb_password: $("#mb_password").val(),
                    mb_bank_name: $("#mb_bank_name").val(),
                    mb_bank_account: $("#mb_bank_account").val(),
                    mb_bank_owner: $("#mb_bank_owner").val(),
                    mb_bank_password: $("#mb_bank_password").val(),
                    mb_hp_type: $("#mb_hp_type").val(),
                    mb_hp: $("#mb_hp").val()
                },
                dataType: "JSON",
                success: function(data) {
                    if (data.result == "SUCC") {
                        $('#modalSignup').modal('hide');
                        cfmAlert("회원가입이 완료되었습니다.\n관리자 승인 후 사용하실 수 있습니다.");
                    } else {
                        cfmAlert(data.msg);

                    }
                },
                error: function(event) {
                    cfmAlert("잠시후 다시 시도 바랍니다.");
                }
            });
        }

        function doShowGame(category) {
            cfmAlert("로그인 후 사용가능합니다.");
        }

        function doShowInfo(category) {
            cfmAlert("로그인 후 사용가능합니다.");
        }

        function doShowMobileInfo(category) {
            cfmAlert("로그인 후 사용가능합니다.");
        }

        function doRolling(){
            cfmAlert("로그인 후 사용가능합니다.");
        }
        function doLobby(gc_name, provider_id, category_id) {
            cfmAlert("로그인 후 사용가능합니다.");
        }
        function doGameLobby(provider_id, gc_game, game_id) {
            cfmAlert("로그인 후 사용가능합니다.");
        }
    <?php } else { ?>
        var game_child;
        var info_timer;
        jQuery(document).ready(function() {
            info_timer = setInterval(checkInfo, 30000);
            checkInfo();
        });

        function checkInfo() {
            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.member.info.php",
                data: {

                },
                dataType: "JSON",
                success: function(data) {
                    if (data.user.memo_count > 0) {
                        doShowMemoPC(true);
                    }
                    $("#member_memo_count").html(data.user.memo_count);
                    if (data.user.mb_force_logout == "1") {
                        if (game_child) {
                            game_child.close();
                        }
                        force_logout();
                    } else {
                        if (data.user.session_id != data.user.mb_session_id) {
                            clearInterval(info_timer);
                            if (game_child) {
                                game_child.close();
                            }
                            alert("다른곳에서 접속하였습니다.");
                            force_logout();

                        }
                    }

                    if (data.user.notice_qa_count > 0) {
                        $("#menu_board_qa").html("(" + data.user.notice_qa_count + ")");
                    } else {
                        $("#menu_board_qa").html("");
                    }

                    $("#member_point_amount").html(cfmNumberToComma(data.user.mb_point));
                    $("#member_game_amount").html(cfmNumberToComma(parseInt(data.user.mb_balance)));
                    $("#member_casino_amount").html(cfmNumberToComma(data.user.mb_game_balance));
                    $("#member_rolling_amount").html(cfmNumberToComma(data.user.mb_rolling_balance));

                    $("#transfer_game_amount").html(cfmNumberToComma(data.user.mb_balance));
                    $("#transfer_point_amount").html(cfmNumberToComma(data.user.mb_point));
                    $("#transfer_casino_amount").html(cfmNumberToComma(data.user.mb_game_balance));

                    /*
                    if($("#total_bet_amount").length > 0){
                      var _total_bet_amount = parseInt(data.user.baccaratt_bet_amount)+parseInt(data.user.slot_bet_amount);
                      $("#total_bet_amount").text("총 베팅금액 : "+cfmNumberToComma(_total_bet_amount)+"원");
                    }
                    */
                },
                error: function(event) {

                }
            });
        }

        function force_logout() {
            location.href = "./logout.php";
        }

        function doShowGame(category) {
            if (category == "slot") {
                $('#modalSlotGame').modal({
                    backdrop: 'static'
                });
                $("#modalSlotGame").modal("show");
            } else if (category == "minigame") {
                $('#modalMiniGame').modal({
                    backdrop: 'static'
                });
                $("#modalMiniGame").modal("show");
            }
        }

        function doLobby(gc_name, provider_id, category_id) {
            fncViewLoading();
            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.game.list.php",
                data: {
                    gc_name: gc_name,
                    provider_id: provider_id,
                    category_id: category_id
                },
                dataType: "JSON",
                success: function(data) {
                    fncCloseLoading();
                    if (data.result == "SUCC") {
                        var game_list = data.game;

                        var vHtml = "";
                        for (var i = 0; i < game_list.length; i++) {
                            var game_id = game_list[i].game_id;
                            var game_image  = game_list[i].game_image;
                            var game_title  = game_list[i].game_title;

                            vHtml += '<a class="casino-gama-a" href="javascript:doGame(\'' + provider_id + '\',\'' + gc_name+ '\',\'' + game_id + '\');">';
                            vHtml += '  <div class="casino-gama-a-black">';
                            vHtml += '    <img src="' + game_image + '" alt="' + game_id + '">';
                            vHtml += '  </div>';
                            vHtml += '  <div class="casino-gama-a-span">';
                            vHtml += '    <span>게임시작</span>';
                            vHtml += '  </div>';
                            vHtml += '  <p class="slot-game-name">'+game_title+'</p>';
                            vHtml += '</a>';
                        }
                        $("#slot_game_list_title").html(provider_id);
                        $("#slot_game_list").html(vHtml);
                        $("#modalSlotGame").modal("hide");
                        $("#modalSlotGameList").modal("show");
                    } else {
                        cfmAlert("게임 점검중입니다.");
                    }
                },
                error: function(event) {
                    cfmAlert("게임 점검중입니다.");
                }
            });
        }

        function doGameLobby(provider_id, gc_game, game_id) {
            fncViewLoading();
            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.game.lobby.php",
                data: {
                    provider_id: provider_id,
                    game_id: game_id,
                    gc_game: gc_game
                },
                dataType: "JSON",
                success: function(data) {
                    fncCloseLoading();
                    if (data.result == "SUCC") {
                        game_child = window.open(data.url, 'newwindow', 'height=800, width=1160, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no');
                    } else {
                        cfmAlert(data.msg);
                    }

                },
                error: function(event) {
                    console.log(event);
                    cfmAlert("게임 점검중입니다.");
                }
            });
        }

        function doGame(provider_id, gc_game, game_id) {
            fncViewLoading();
            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.game.launch.php",
                data: {
                    provider_id: provider_id,
                    game_id: game_id,
                    gc_game: gc_game
                },
                dataType: "JSON",
                success: function(data) {
                    fncCloseLoading();
                    if (data.result == "SUCC") {
                        game_child = window.open(data.url, 'newwindow', 'height=800, width=1160, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no');
                    } else {
                        cfmAlert(data.msg);
                    }

                },
                error: function(event) {
                    cfmAlert("게임 점검중입니다.");
                }
            });
        }

        function doShowInfo(category) {
            $(".nav-link").removeClass("active");
            $("#btn_" + category).addClass("active");
            $("#div_tab_content").load("/front/include/pc/" + category + ".php");
            $('#modalInfo').modal({
                backdrop: 'static'
            });
            $("#modalInfo").modal("show");
        }

        function doChangeInfo(category) {
            $(".nav-link").removeClass("active");
            $("#btn_" + category).addClass("active");
            $("#div_tab_content").load("/front/include/pc/" + category + ".php");
        }

        function doShowMobileInfo(category) {
            $("#div_mobile_content").load("/front/include/mobile/" + category + ".php");
            $('#modalInfoMobile').modal({
                backdrop: 'static'
            });
            $("#modalInfoMobile").modal("show");
        }

        function doShowNoticeDetail(wr_id) {
            $("#notice_title").html("");
            $("#notice_content").html("");
            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.board.notice.view.php",
                data: {
                    wr_id: wr_id
                },
                dataType: "JSON",
                success: function(data) {
                    var wr_title = data.data.wr_subject;
                    var wr_link1 = data.data.wr_link1;
                    var wr_content = data.data.wr_content.replace(/(?:\r\n|\r|\n)/g, '<br />');
                    var vHtml = "";
                    if(wr_link1){
                        vHtml += '<div style="text-align:center;"><img src="'+wr_link1+'" style="max-width:100%"></div>';
                    }
                    vHtml += wr_content;
                    $("#notice_title").html(wr_title);
                    $("#notice_content").html(vHtml);
                    var _w = $(window).width();
                    if(_w>=768){
                        $("#notice_content").css({height:($(window).height()-270)+"px"});
                    }
                    $("#modalNoticeDetail").modal('show');
                },
                error: function(event) {
                    alert("잠시후 다시 시도 바랍니다.");
                }
            });
        }

        function doCloseNoticeDetail() {
            $("#modalNoticeDetail").modal('hide');
        }

        function doShowMemoPC(isForce) {
            if(isForce){
                $("#btnModalMemoPC").hide();
            }else{
                $("#btnModalMemoPC").show();
            }
            var row_num = 10;
            var vPage = 1;
            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.board.memo.list.php",
                data: {
                    me_type: "RESV",
                    page: vPage,
                    rownum: row_num
                },
                dataType: "JSON",
                success: function(data) {
                    var total_count = data.total_count;
                    var total_page = Math.ceil(total_count / row_num);
                    if (total_count > 0 && vPage > total_page) {
                        doSearchPage(total_page);
                    } else {
                        var dataList = data.data;

                        var vHtml = "";
                        for (var i = 0; i < dataList.length; i++) {
                            var me_read = dataList[i].me_read;
                            var me_read_str = "";
                            if (me_read == 1) {
                                me_read_str = "읽음";
                            } else {
                                me_read_str = "안읽음";
                            }
                            var me_memo = dataList[i].me_memo.split('\n')[0];
                            var me_read_datetime = dataList[i].me_read_datetime;
                            if (me_read_datetime == "0000-00-00 00:00:00") me_read_datetime = "";
                            vHtml += '<tr>';
                            vHtml += '<td class="alarm-table-td01"><a href="javascript:doShowMemoDetail(' + dataList[i].me_id + ')" class="cd-popup-trigger"><span class="alin-span">' + cfmNvl1(me_memo) + '</span></a></td>';
                            vHtml += '<td>' + cfmNvl1(dataList[i].me_send_datetime) + '</td>';
                            vHtml += '<td class="memo-status-' + dataList[i].me_id + '">' + me_read_str + '</td>';
                            vHtml += '</tr>';

                        }

                        $("#memo_pc_list").html(vHtml);
                        $('#modalMemoPC').modal({
                            backdrop: 'static'
                        });
                        $('#modalMemoPC').modal("show");
                        // vHtml = cfmPage(10, vPage, total_page, "doSearchPage");
                        // $("#pageList").html(vHtml);

                    }
                },
                error: function(event) {
                    alert("잠시후 다시 시도 바랍니다.");
                }
            });
        }

        function doShowMemoMobile() {
            var row_num = 10;
            var vPage = 1;
            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.board.memo.list.php",
                data: {
                    me_type: "RESV",
                    page: vPage,
                    rownum: row_num
                },
                dataType: "JSON",
                success: function(data) {
                    var total_count = data.total_count;
                    var total_page = Math.ceil(total_count / row_num);
                    if (total_count > 0 && vPage > total_page) {
                        doSearchPage(total_page);
                    } else {
                        var dataList = data.data;

                        var vHtml = "";
                        for (var i = 0; i < dataList.length; i++) {
                            var me_read = dataList[i].me_read;
                            var me_read_str = "";
                            if (me_read == 1) {
                                me_read_str = "읽음";
                            } else {
                                me_read_str = "안읽음";
                            }
                            var me_memo = dataList[i].me_memo.split('\n')[0];
                            var me_read_datetime = dataList[i].me_read_datetime;
                            if (me_read_datetime == "0000-00-00 00:00:00") me_read_datetime = "";
                            vHtml += '<tr>';
                            vHtml += '<td class="alarm-table-td01"><a href="javascript:doShowMemoDetail(' + dataList[i].me_id + ')" class="cd-popup-trigger"><span class="alin-span">' + cfmNvl1(me_memo) + '</span></a></td>';
                            vHtml += '<td>' + cfmNvl1(dataList[i].me_send_datetime) + '</td>';
                            vHtml += '<td class="memo-status-' + dataList[i].me_id + '">' + me_read_str + '</td>';
                            vHtml += '</tr>';

                        }

                        $("#memo_mobile_list").html(vHtml);
                        $('#modalMemoMobile').modal({
                            backdrop: 'static'
                        });
                        $('#modalMemoMobile').modal("show");
                        // vHtml = cfmPage(10, vPage, total_page, "doSearchPage");
                        // $("#pageList").html(vHtml);

                    }
                },
                error: function(event) {
                    alert("잠시후 다시 시도 바랍니다.");
                }
            });
        }

        function doShowMemoDetail(me_id) {
            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.board.memo.view.php",
                data: {
                    me_id: me_id
                },
                dataType: "JSON",
                success: function(data) {
                    var vHtml = "";
                    var me_memo = data.data.me_memo.replace(/(?:\r\n|\r|\n)/g, '<br />');
                    $("#memo_detail_title").html("쪽지 내용");
                    $("#memo_detail_content").html(me_memo);
                    $('#modalMemoDetail').modal("show");
                    $(".memo-status-"+me_id).text("읽음");
                },
                error: function(event) {
                    alert("잠시후 다시 시도 바랍니다.");
                }
            });
        }

        function doCloseMemoDetail() {
            $('#modalMemoDetail').modal("hide");
        }

        function doRolling(){
            var _w = $(window).width();
            if(_w>=768){
                doShowInfo('rolling');
            }else{
                doShowMobileInfo('rolling');
            }
        }

        function doReadAll(_type){
            //전체읽음 처리 
            if (!confirm("전체 읽음 처리하시겠습니까?")) return;
            $.ajax({
                type: "POST",
                url: "/front/ajax/ajax.board.memo.read.all.php",
                data: {},
                dataType: "JSON",
                success: function(data) {
                    var row_num = 10;
                    var vPage = 1;
                    $.ajax({
                        type: "POST",
                        url: "/front/ajax/ajax.board.memo.list.php",
                        data: {
                            me_type: "RESV",
                            page: vPage,
                            rownum: row_num
                        },
                        dataType: "JSON",
                        success: function(data) {
                            var dataList = data.data;
                            var vHtml = "";
                            for (var i = 0; i < dataList.length; i++) {
                                var me_read = dataList[i].me_read;
                                var me_read_str = "";
                                if (me_read == 1) {
                                    me_read_str = "읽음";
                                } else {
                                    me_read_str = "안읽음";
                                }
                                var me_memo = dataList[i].me_memo.split('\n')[0];
                                var me_read_datetime = dataList[i].me_read_datetime;
                                if (me_read_datetime == "0000-00-00 00:00:00") me_read_datetime = "";
                                vHtml += '<tr>';
                                vHtml += '<td class="alarm-table-td01"><a href="javascript:doShowMemoDetail(' + dataList[i].me_id + ')" class="cd-popup-trigger"><span class="alin-span">' + cfmNvl1(me_memo) + '</span></a></td>';
                                vHtml += '<td>' + cfmNvl1(dataList[i].me_send_datetime) + '</td>';
                                vHtml += '<td>' + me_read_str + '</td>';
                                vHtml += '</tr>';

                            }
                            $("#btnModalMemoPC").show();
                            if(_type=="PC")
                                $("#memo_pc_list").html(vHtml);
                            else
                                $("#memo_mobile_list").html(vHtml);
                        },
                        error: function(event) {
                            alert("잠시후 다시 시도 바랍니다.");
                        }
                    });
                },
                error: function(event) {
                    alert("잠시후 다시 시도 바랍니다.");
                }
            });
        }
    <?php } ?>
</script>

<!-- Le Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://bootadmin.org/scripts/vendor/bootstrap.min.js"></script>
<script src="https://bootadmin.org/scripts/vendor/library.min.js"></script>



<script src="https://bootadmin.org/scripts/core/main.js"></script>


<script>
    // 롤링 입금
    function RollingList(listName,listIndex) {
    let listHeight = 0;
    setInterval(function(){
        listHeight = $(listName).find(".rol02").outerHeight();
        $(listName).css("height", listHeight*listIndex);
        $(listName).find(".rol02-ul").delay(500).animate({"top":-listHeight},1000,function(){
            $(listName).find(".rol02-ul").append($(listName).find(".rol02").first().clone());
            $(listName).find(".rol02-ul").css("top","0px");
            $(listName).find(".rol02").first().remove();
        });
    },1500);
}
RollingList($(".rolling-list-right"),4);
</script>
<script>
     // 롤링 출금
    function RollingList(listName,listIndex) {
    let listHeight = 0;
    setInterval(function(){
        listHeight = $(listName).find(".rol01").outerHeight();
        $(listName).css("height", listHeight*listIndex);
        $(listName).find(".rol01-ul").delay(500).animate({"top":-listHeight},1000,function(){
            $(listName).find(".rol01-ul").append($(listName).find(".rol01").first().clone());
            $(listName).find(".rol01-ul").css("top","0px");
            $(listName).find(".rol01").first().remove();
        });
    },1500);
}
RollingList($(".rolling-list-left"),4);
</script>

<script>
    // 데이트 피커
$.datepicker.setDefaults({
dateFormat: 'yy-mm-dd',
prevText: '이전 달',
nextText: '다음 달',
monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
dayNames: ['일', '월', '화', '수', '목', '금', '토'],
dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
showMonthAfterYear: true,
yearSuffix: '년'
});

$(function() {
$("#datepicker, #datepicker02, #datepicker03,#datepicker04").datepicker();
});
</script>

<script>
    $('.counter').counterUp({
  delay: 200,
  time: 15000
});
</script>