<?php
include_once('./_common.php');
$sql       = " select * from g5_site_config  order by sc_no desc limit 1 ";
$site       = sql_fetch($sql);

if ($site['sc_delete']) {
    goto_url("/front/stop.php");
}
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Le CSS
    ================================================== -->
    <link rel="stylesheet" href="https://bootadmin.org/style/vendor/library.min.css">
    <link rel="stylesheet" href="https://bootadmin.org/style/vendor/jqueryui-flat/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://bootadmin.org/style/core/style.min.css">
    <link rel="stylesheet" href="/front/css/style.css?v=1.0.0.11">
    <link rel="stylesheet" href="/front/css/modal.css?v=1.0.0.12">
    <link rel="stylesheet" href="/front/css/media.css?v=1.0.0.11">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="/front/js/common.js?v=1.0.0.11" type="text/javascript"></script>
    <title><?=$site['sc_title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/front/css/reset.css?v=1.0.0.11">
</head>

<body id="landing" class="sidebar-open">
    <div class="page-container animsition">
        <div id="dashboardPage">
            <!-- Main Menu -->
            <div class="topbar">
                <div class="container-fluid">
                    <div class="row mobilehead">
                        <div class="col-md-7 hidden-xs">
                            <div class="logo">
                                <a href="/">
                                    <span class="logo-emblem"><img src="https://bootadmin.org/images/boot.png"
                                            alt="BA" /></span>
                                    <span class="logo-full">Bootadmin</span>
                                </a>
                            </div>
                            <div class="roleflexBox">
                                <div>
                                    <a href="/front/index.php" class="menu-toggle wave-effect">
                                        <i class="hamnenu feather icon-menu"></i>
                                    </a>
                                </div>
                                <!-- 롤링 -->
                                <div class="scroll_inner-box pc-scrollinnerbox">
                                    <div class="scroll_inner max1280">
                                        <div class="custom-row">
                                            <div class="scroll_row">
                                                <div class="scrolling_box">
                                                    <div class="scr_box" style="animation-duration: 30s;">
                                                        <div>
                                                            <span>등록된 계좌 외 타계좌 및 펌뱅킹(토스, 카카오페이, 핀크), ATM 이용시 무조건 반환됩니다. (영수증 필히 첨부)</span>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobilelogo">
                            <a href="/front/index.php">
                                <img class="mobilelogoimg" src="/front/images/logo.png" alt="로고">
                            </a>
                        </div>
                        <div class="col-md-5 text-right pr200">
                        <?php if(!$is_member){ ?>
                            <!-- 로그인전 -->
                            <div class="before-login">
                                <button class="login-button logbut pc-logbut" type="button" onClick="doLogin();">로그인</button>
                            <?php if (!$site['sc_join_broke']) { ?> 
                                <button class="login-button signupbut" type="button" onClick="doJoinCode();">회원가입</button>
                            <?php } ?>
                            </div>
                        <?php }else{ ?>
                            <!-- 로그인후 -->
                            <div class="nonelogin">
                                <div class="nonelogin01">
                                    <p style="margin-right: 6px;">게임머니 : <span id="member_game_amount"><?php echo number_format($member["mb_balance"], 0) ?></span>원</p>
                                    <button>포인트 : <span id="member_rolling_amount"><?php echo number_format(floor($member["mb_rolling_balance"]), 0) ?></span>원</button>
                                    <button class="disnone767" style="margin-left: 6px;" onClick="doShowMemoPC(false);">쪽지 : <span id="member_memo_count"><?php echo $member["memo_count"] ?></span>통</button>
                                </div>
                                <div class="nonelogin02">
                                    <p><?php echo $member["mb_nick"] ?><span>님</span></p>
                                    <button onClick="location.href='./logout.php'">로그아웃</button>
                                <?php if($member['mb_level'] < 9 && $member['mb_level'] >= 4 ){ ?>
                                    <button class="partnerbut" onClick="window.open('https://timept.box4545.com/admin/login.pt.check.php?mb_id=<?php echo $member["mb_id"] ?>&&session_id=<?php echo session_id() ?>')">
                                        <span style="font-size: 15px; margin-top: -1px;" class="iconify" data-icon="material-symbols-light:handshake"></span>
                                        <span>파트너</span>
                                    </button>
                                <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Menu -->
            <div class="sidebar">
                <div class="mainlogobox">
                    <a class="toplogo" href="/front/index.php">
                        <img class="logoimg" src="/front/images/logo.png" alt="로고">
                    </a>
                </div>
                <ul id="sidebarCookie">
                    <li class="spacer"></li>
                    <li class="nav-item notice-libor side-libor side-libor01">
                        <a href="javascript:doShowInfo('notice');" class="nav-link notice-libor-a wave-effect nav-single">
                            <img src="/front/images/notice.webp" alt="공지">
                            <span class="menu-title t0-title">공지사항</span>
                        </a>
                    </li>
                    <p class="side-mini-p">메뉴</p>
                    <li class="nav-item side-libor side-libor01">
                        <a href="javascript:doShowInfo('charge');" class="nav-link wave-effect nav-single">
                            <span class="iconify" data-icon="mingcute:receive-money-fill" data-rotate="180deg"></span>
                            <span class="menu-title">충전신청</span>
                        </a>
                    </li>
                    <li class="nav-item side-libor">
                        <a href="javascript:doShowInfo('excharge');" class="nav-link wave-effect nav-single">
                            <span class="iconify"  data-icon="mingcute:receive-money-fill"></span>
                            <span class="menu-title">환전신청</span>
                        </a>
                    </li>
                    <li class="nav-item side-libor">
                        <a href="javascript:doShowInfo('rolling');" class="nav-link wave-effect nav-single">
                            <span class="iconify" data-icon="mingcute:coin-2-fill"></span>
                            <span class="menu-title">포인트 전환</span>
                        </a>
                    </li>
                    <li class="nav-item side-libor">
                        <a href="javascript:doShowInfo('bet_history');" class="nav-link wave-effect nav-single">
                            <span class="iconify"  data-icon="fluent:list-bar-20-filled"></span>
                            <span class="menu-title">베팅내역</span>
                        </a>
                    </li>
                    <li class="nav-item side-libor">
                        <a href="javascript:doShowInfo('qna');" class="nav-link wave-effect nav-single">
                            <span class="iconify" data-icon="icon-park-outline:customer"></span>
                            <span class="menu-title">고객센터</span>
                        </a>
                    </li>
                </ul>
            </div>