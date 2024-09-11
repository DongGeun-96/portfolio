<?php
define('G5_MOBILE_AGENT',   'phone|samsung|lgtel|mobile|[^A]skt|nokia|blackberry|BB10|android|sony');
function is_mobile(){
    if (isset($_SERVER['HTTP_USER_AGENT']))
        return  preg_match('/'.G5_MOBILE_AGENT.'/i', $_SERVER['HTTP_USER_AGENT']);
    else
        return '';
}

if(is_mobile()){
	include_once("./mobile.php");
	exit;
}

?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="https://trcbt.migoweb.co.kr">
    <meta property="og:title" content="테일즈런너RPG">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://trcbt.migoweb.co.kr/images/cbtPerview.jpg">
    <meta property="og:description" content="가슴 뛰는 런너들의 새로운 모험의 시작, 테일즈 런너 RPG ">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" as="style" crossorigin href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/static/pretendard.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/css/newstyle.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="/js/newscript.js" type="text/javascript"></script>
    <title>테일즈런너RPG</title>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6QCM467HVE"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6QCM467HVE');
    </script>

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1056822651009566');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1056822651009566&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>


<body>

    <!-- 오디오 파일 임베드 -->
    <audio loop>
        <source src="/music/mainbgm.wav" type="audio/wav">
    </audio>

    <div id="wrapper" class="bg2">
        <div class="top">
            <div class="mainmenuDivbox-menu">
                <nav>
                    <ul>
                        <li class="top-wordmenu">
                            <a href="" class="wordlink wordlink-but">
                                <div class="glowarrow-left">
                                    <img src="/images/glowarrow-left.png" alt="왼쪽 화살">
                                </div>
                                <span>세계관</span>
                                <div class="glowarrow-right">
                                    <img src="/images/glowarrow-right.png" alt="오른쪽 화살">
                                </div>
                            </a>
                        </li>
                        <li class="top-peoplemenu">
                            <a href="" class="peoplelink peoplelink-but">
                                <div class="glowarrow-left">
                                    <img src="/images/glowarrow-left.png" alt="왼쪽 화살">
                                </div>
                                <span>등장인물</span>
                                <div class="glowarrow-right">
                                    <img src="/images/glowarrow-right.png" alt="오른쪽 화살">
                                </div>
                            </a>
                        </li>
                        <li class="top-mediamenu">
                            <a href="" class="medialink medialink-but">
                                <div class="glowarrow-left">
                                    <img src="/images/glowarrow-left.png" alt="왼쪽 화살">
                                </div>
                                <span>미디어</span>
                                <div class="glowarrow-right">
                                    <img src="/images/glowarrow-right.png" alt="오른쪽 화살">
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="mainmenuDivbox-logo">
                <h1>
                    <button class="home">
                        <img src="/images/logo.png" alt="로고">
                    </button>
                </h1>
            </div>
            <div class="channel_box">
                <ul>
                    <li class="youtubeIcon-li">
                        <a href="https://www.youtube.com/@TalesRunnerRPG" target="_blank" class="youtubeIcon bg"></a>
                    </li>
                    <li class="xIcon-li">
                        <a href="https://x.com/TalesRunnerRPG" target="_blank" class="xIcon bg"></a>
                    </li>
                    <li class="naverIcon-li">
                        <a href="https://game.naver.com/lounge/TalesRunnerRPG/home"  target="_blank" class="naverIcon bg"></a>
                    </li>
                    <li class="shareIcon-li">
                        <a href="#" class="shareIcon bg" onclick="copyUrl(); return false;"></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- 컨텐츠 -->
        <div class="whiteback"></div>

        <!-- 메인 화면 -->
        <div class="section bg2 active" id="section1">
            <div class="section1Video">
                <video  loop  muted="" autoplay="" src="/images/video/mainVideo.mp4"></video>
            </div>
            <div class="indexCenterdiv">
                <div class="indexlogo bg"></div>
                <button class="index-youtubueBut bg" data-bs-toggle="modal" data-bs-target="#intro-videoModal" data-video="https://www.youtube.com/embed/lfURne7AlX0?si=P4P-I0M0v_Keq-Mt"></button>
                <!-- <button onclick="fncCBTCall();" class="index-cbtBut bg"></button> -->
            </div>
            <div class="scrolldown bg"></div>
        </div>


        <!-- 메뉴 화면 -->
        <div class="section bg2" id="section2">
            <div class="section2Video">
                <video loop  muted="" autoplay="" src="/images/video/menuVideo.mp4"></video>
            </div>
            <ul class="twoContent-ul">
                <li class="wordlink-li">
                    <button class="wordlink button bg" id="nextButton"></button>
                </li>
                <li class="peoplelink-li">
                    <button class="peoplelink button bg" id="nextButton4"></button>
                </li>
                <li class="medialink-li">
                    <button class="medialink button bg" id="nextButton5"></button>
                </li>
            </ul>
        </div>


        <!-- 세게관 화면 -->
        <div class="section bg2" id="section3">
            <div class="section3Video">
                <video id="storyVideo" muted="" autoplay="" loop src="/images/video/storyVideo.mp4"></video>
            </div>
            <div class="swiper wordswiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide videooneplay">
                        <div class="story-slide bg2">
                            <div class="storyContent">
                                <div class="storymu bg2"></div>
                                <div class="storytitle bg2"></div>
                                <div>
                                    <p>
                                        이 세상의 모든 동화가 모이고 탄생하는 '동화나라'. <br>
                                        동화에서 나오는 꿈과 희망으로 에너지를 유지하는 이곳은<br>
                                        사람들이 동화책을 읽지 않자, 심각한 에너지 부족에 시달리게 된다.
                                    </p>
                                    <p>
                                        과거, 동화나라의 왕 앙리 3세는 이 문제에 관해 깊게 고민한다.<br>
                                        그는 사람들이 동화 속을 달리며 동심을 되찾을 수 있도록<br>
                                        달리기 대회를 개최해 <테일즈런너>들을 모집하며<br>
                                            어떤 소원이든 이루어주는 <소원의 돌>을 우승 상품으로 내걸게 되는데...
                                    </p>
                                    <p>
                                        동화나라 배 달리기 대회 폐막으로부터 10년 후.<br>
                                        당시 공주였던 '라라'가 여왕으로 즉위하고, <br>
                                        <테일즈 라이브러리>를 설립해 동화를 더욱 효율적으로 관리할 수 있게 만들었다.
                                    </p>
                                    <p>
                                        그러나 그 평화는 오래가지 않았다.<br>
                                        원인 모를 이유로 <테일즈 라이브러리>에서 관리하던 이 세상 모든 동화가<br>
                                            모두 초기화되어 버리면서, 동화나라는 다시금 위기를 겪게 된다.
                                    </p>
                                    <p>
                                        그 무렵, 봉인되어있던 <소원의 돌>은 홀로 빛을 내기 시작했다.<br>
                                            이와 함께 세계 각지, 여러 차원의 사람들이 '소원을 이뤄준다'는 <br>
                                            의문의 편지를 받으면서 동화나라로<br>
                                            하나둘씩 모여들기 시작한다.
                                    </p>
                                </div>
                                <!-- <button class="storybut" data-bs-toggle="modal" data-bs-target="#story-videoModal"></button> -->
                                <div class="storyscrolldown"></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="writer-slide bg2">
                            <div class="writerContent">
                                <div class="writermu bg2"></div>
                                <div class="writertitle bg2"></div>
                                <div>
                                    <p>
                                        대한민국, 서울. <br>
                                        불 꺼진 방. 쌓여있는 에너지 드링크. 널브러진 책.<br>
                                        작가는 노트북 앞에 앉아 글을 쓴다.
                                    </p>
                                    <p>
                                        어린 시절,<br>
                                        자신의 쓴 글을 읽고 사람들이 꿈과 희망을 가지는 게 좋았다.<br>
                                        그 감정은 동화를 쓰게 만드는 원동력이 되었고<br>
                                        작가는 어린이 동화 작가로서 데뷔해 유명해진다.
                                    </p>
                                    <p>
                                        그러나 성인이 된 지금.<br>
                                        작가는 어두운 얼굴로 인세와 서평을 확인한다.<br>
                                        판매량 부진의 탓을 표지 디자인으로 돌린다.
                                    </p>
                                    <p>
                                        그는 문득 생각한다. 글을 쓰는 게 더는 즐겁지 않다고.<br>
                                        꿈과 희망 같은 것보다는, <br>
                                        자신에게 떨어지는 수익과 유명 동화 작가로서의 명예가 더 중요했다.<br>
                                        그는 그렇게 어른이 되었다.
                                    </p>
                                    <p>
                                        이것은 테일즈런너 RPG의 주인공이자, <br>
                                        어린시절의 꿈을 잃어버린 사람들의 이야기.<br>
                                        소원을 이뤄준다는 '소원의 돌'은,<br>
                                        과연 당신의 꿈을 되찾아줄 수 있을까?
                                    </p>
                                </div>
                            </div>
                            <div class="light-left">
                                <div class="light-leftbg bg2"></div>
                            </div>
                            <div class="right-left">
                                <div class="right-leftbg bg2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-scrollbar word-scrollbar">
                    <div class="cib-ba">스토리</div>
                </div>
            </div>          
        </div>



        <!-- 등장인물 화면 -->
        <div class="section bg2" id="section4">
            <div class="peopleContent">
                <div class="leftbuttonbox">
                    <div class="swiper peoplemenubox">
                        <div class="swiper-wrapper">

                            <!-- 테일즈런너 -->
                            <div class="swiper-slide taleslide">
                                <button data-target="content1" class="left-button left-button01">
                                    <div class="peoplemenubox-img">
                                        <img src="/images/people/left-button01.png" alt="테일즈런너메뉴">
                                    </div>
                                    <p>테일즈런너</p>
                                </button>
                            </div>

                            <!-- 소원의돌 -->
                            <div class="swiper-slide wishslide">
                                <button data-target="content2" class="left-button left-button02">
                                    <div class="peoplemenubox-img">
                                        <img src="/images/people/left-button02.png" alt="소원의돌메뉴">
                                    </div>
                                    <p>소원의돌</p>
                                </button>
                            </div>

                            <!-- 동화나라 -->
                            <div class="swiper-slide storyslide">
                                <button data-target="content3" class="left-button left-button03">
                                    <div class="peoplemenubox-img">
                                        <img src="/images/people/left-button03.png" alt="동화나라메뉴">
                                    </div>
                                    <p>동화나라</p>
                                </button>
                            </div>

                            <!-- 테일즈런너 -->
                            <div class="swiper-slide taleslide">
                                <button data-target="content1" class="left-button left-button01">
                                    <div class="peoplemenubox-img">
                                        <img src="/images/people/left-button01.png" alt="테일즈런너메뉴">
                                    </div>
                                    <p>테일즈런너</p>
                                </button>
                            </div>

                            <!-- 소원의돌 -->
                            <div class="swiper-slide wishslide">
                                <button data-target="content2" class="left-button left-button02">
                                    <div class="peoplemenubox-img">
                                        <img src="/images/people/left-button02.png" alt="소원의돌메뉴">
                                    </div>
                                    <p>소원의돌</p>
                                </button>
                            </div>

                            <!-- 동화나라 -->
                            <div class="swiper-slide storyslide">
                                <button data-target="content3" class="left-button left-button03">
                                    <div class="peoplemenubox-img">
                                        <img src="/images/people/left-button03.png" alt="동화나라메뉴">
                                    </div>
                                    <p>동화나라</p>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev peoplemenubox-button-prev"></div>
                    <div class="swiper-button-next peoplemenubox-button-next"></div>
                </div>
                <div class="peopleRightContent">

                    <!-- 테일즈런너 -->
                    <div id="content1" class="peopleRightContent-box right-Content01 bg peopleRightContent-box-active">

                        <!-- Main Swiper -->
                        <div class="swiper peoR-mainSwiper01">
                            <div class="swiper-wrapper">
                                <!-- 초원 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-chowon name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 안영미</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/tale/chowon/Chowon_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/tale/chowon/Chowon_LobbyIdle1.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#tale-chowon">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>21</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>05월 02일</span>
                                                        </li>
                                                        <li>
                                                            <span>직업</span>
                                                            <span>육상선수</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>173</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>52</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        대한민국 서울의 한국대학교 체육교육과 2학년.<br>
                                                        체육 선생님을 꿈꾸는 평범한 대학생이다.
                                                    </p>
                                                    <p class="faded-text">
                                                        10년 전, 그저 달리는 것이 좋아 동화나라로 온 11살 아이.<br>
                                                        달리기뿐만 아니라 모든 운동을 좋아했던 초원은 세월이 흘러<br> 
                                                        새로운 꿈을 찾아 새로운 꿈을 꾸고 있다.
                                                    </p>
                                                    <p class="faded-text">
                                                        어린 나이에 동화나라의 위기를 함께 극복했던 시간은 그에게<br> 
                                                        소중한 추억으로 남아있고, 늘 희망을 잃지 않는 동력이<br> 
                                                        되어주고 있다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 chowon-picture"></div>
                                    </div>
                                </div>
                                <!-- 밍밍 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-minging name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 김필진</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/tale/mingming/Mingming_PartyJoin0.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/tale/mingming/Mingming_Star3.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#tale-mingming">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>20</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>07월 29일</span>
                                                        </li>
                                                        <li>
                                                            <span>직업</span>
                                                            <span>액션배우</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>156</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>44</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        어릴 때부터 촉망받는 아역배우였으며 지금은 세계적인<br>
                                                        스타가 된 중국 출신의 배우.<br>
                                                        특히 뛰어난 무술 실력으로, 스턴트맨 없이도 어려운 액션<br>
                                                        연기를 소화해내기도 한다.
                                                    </p>
                                                    <p class="faded-text">
                                                        10년 전, 빨리 어른이 되어 다양한 배역을 맡고 싶다는 소원을<br> 
                                                        가지고 동화나라에 왔던 적이 있다.<br>
                                                        그때 다른 친구들을 만나며 함께 역경을 이겨낸 경험이<br>
                                                        좋은 추억으로 남아있다고 한다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 mingming-picture"></div>
                                    </div>
                                </div>
                                <!-- 라라 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-lala name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 장예나</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/tale/lala/Lala_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/tale/lala/Lala_FriendshipUp0.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#tale-lala">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>23</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>01월 31일</span>
                                                        </li>
                                                        <li>
                                                            <span>직업</span>
                                                            <span>동화나라 여왕</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>163</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>46</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        동화나라의 여왕이자 기쁨의 힘을 가진 존재.<br>
                                                        상냥하고 온화한 성품을 지녔고 모두에게 먼저 다가가는 것을<br> 
                                                        좋아해, 여왕의 신분임에도 딱딱한 위계질서를 두는 것을<br> 
                                                        싫어한다.
                                                    </p>
                                                    <p class="faded-text">
                                                        선대왕인 앙리 3세의 뒤를 이어 즉위한 지 몇 년 되지 않았다.<br>
                                                        그러나 앙리 3세의 행방에 대해 물어보면 왜인지 함구하는 중.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 lala-picture"></div>
                                    </div>
                                </div>
                                <!-- 엘림스 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-elimce name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 황창영</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/tale/smile/Elims_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/tale/smile/Elims_LobbyIdle0.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#tale-elims">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li style="width:166px;">
                                                            <span>나이</span>
                                                            <span>40대 초반</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>08월 08일</span>
                                                        </li>
                                                        <li>
                                                            <span>직업</span>
                                                            <span>아티팩터</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li style="width:166px;">
                                                            <span>신장</span>
                                                            <span>193</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>77</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        에너지가 깃든 도구를 만들어내는 과학자, '아티팩터'<br>
                                                        과거 동화나라에 큰 전쟁이 일어났을 때 이를 저지하는데 크게<br> 
                                                        기여했다.
                                                    </p>
                                                    <p class="faded-text">
                                                        과거엔 어떤 사연 때문에 스마일 마스크를 쓰고다녔기에<br> 
                                                        엘림스 스마일이란 이름을 사용했다.<br>
                                                        그러나 이제는 과거의 무게를 극복해, 그저 애착 물건으로<br>
                                                        가지고 다니는 듯하다.
                                                    </p>
                                                    <p class="faded-text">
                                                        상당히 괴팍하고 직설적인 성격으로 때론 무례하게 보일 수<br> 
                                                        있다.<br>
                                                        그러나 그의 능력과 천재성만큼은 모두가 인정하고 있다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 elimce-picture"></div>
                                    </div>
                                </div>
                                <!-- 빅보 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-bigbo name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 김광국</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/tale/bigbo/Bigbo_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/tale/bigbo/Bigbo_LobbyIdle2.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#tale-bigbo">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>28</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>03월 03일</span>
                                                        </li>
                                                        <li>
                                                            <span>직업</span>
                                                            <span>수의사</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>195</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>105</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        강한 힘과 큰 덩치를 가졌지만, 마음씨만은 누구보다 따뜻한 <br>수의사. <br>
                                                        어릴 적부터 작은 동물을 좋아해 돌봐주기를 좋아했다.<br>
                                                        10년 전, 자신이 아끼는 앵무새 둥가가 병에 걸리면서<br>
                                                        그 병을 치료하기 위해 동화나라에 온 적이 있다.
                                                    </p>
                                                    <p class="faded-text">
                                                        동물 외에도 작고 약한 친구들을 도와주고 싶어한다.<br>
                                                        힘쓰는 일에는 자신있어, 다시 동화나라가 위기에 처하자<br>
                                                        선뜻 돌아와 라라 여왕을 도와주기로 한다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 bigbo-picture"></div>
                                    </div>
                                </div>
                                <!-- 하루 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-haru name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 홍범기</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/tale/haru/Haru_PartyJoin0.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/tale/haru/Haru_Star4.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#tale-haru">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>불명</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>11월 11일</span>
                                                        </li>
                                                        <li>
                                                            <span>직업</span>
                                                            <span>어둠의 군주</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>179</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>66</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        태초의 테일즈랜드를 만든 빛, 그 이면의 어둠에서 태어난<br>
                                                        소년.<br>
                                                        어둠 세력의 수장이었으나 공동의 적을 물리치기 위해<br>
                                                        일시적으로 테일즈랜드에 협력했던 적이 있다.
                                                    </p>
                                                    <p class="faded-text">
                                                        테일즈랜드가 평화를 되찾은 이후 행방이 묘연해졌으나<br>
                                                        테일즈랜드에 짙은 어둠이 드리우자 힘을 되찾고 다시 모습을 <br>
                                                        드러낸다.<br>
                                                        무엇을 위해 나타난 건지는 아직 알 수 없다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 haru-picture"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Thumbs Swiper -->
                        <div class="swiper peoR-thumbsSwiper01 choiceCharBox">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide onSum">
                                    <div class="choiceChar-chicebox story-chara-choice tale-cha-01 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice tale-cha-02 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice tale-cha-03 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice tale-cha-04 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice tale-cha-05 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice tale-cha-06 bg2"></div>
                                </div>
                            </div>
                        </div>

                        <!-- 화살표 -->
                        <div class="swiper-button-prev peoR-mainSwiper01-prev"></div>
                        <div class="swiper-button-next peoR-mainSwiper01-next"></div>

                    </div>


                    <!-- 소원의돌 -->
                    <div id="content2" class="peopleRightContent-box right-Content02 bg">

                        <!-- Main Swiper -->
                        <div class="swiper peoR-mainSwiper02">
                            <div class="swiper-wrapper">
                                <!-- 헬리아 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-helia name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 방시우</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/wish/helia/Helya_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/wish/helia/Helya_PartyJoin0.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#wish-helya">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>27</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>04월 18일</span>
                                                        </li>
                                                        <li style="width:220px;">
                                                            <span>직업</span>
                                                            <span>테일즈나이츠 단장</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>168</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>50</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        동화나라 기사단, [테일즈 나이츠]의 기사 단장.<br>
                                                        언제나 밝고 힘찬 기합으로 단원들의 사기를 높인다.<br>
                                                        전투능력도 발군이라 기사들의 존경을 받기도 한다.
                                                    </p>
                                                    <p class="faded-text">
                                                        언제나 단순하고 긍정적으로 생각해 섬세한 면은 조금<br> 
                                                        부족하지만 그런 그녀의 태양 같은 면이 오히려 주변<br> 
                                                        사람들에게 힘이 되어주곤 한다.
                                                    </p>
                                                    <p class="faded-text">
                                                        테일즈 나이츠의 부단장, 루나와는 오랜 인연이 있는<br>
                                                        모양이다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 helia-picture"></div>
                                    </div>
                                </div>

                                <!-- 엘린 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-elilin name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 이소은</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/wish/elien/Ellin_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/wish/elien/Ellin_PartyJoin0.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#wish-ellin">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>14</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>05월 10일</span>
                                                        </li>
                                                        <li style="width:220px;">
                                                            <span>직업</span>
                                                            <span>수석 연금술사</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>147</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>35</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        귀엽고 작은 체구, 천진한 어린아이 같아 보이지만 사실은<br> 
                                                        동화나라 최연소 수석 연금술사.<br> 
                                                        떠돌이 고아였던 그녀는 일찍이 동화나라 왕성에 거두어졌다.<br> 
                                                        그녀에겐 이미 앙리성이 고향이기도 하고, 여왕인 라라도<br>  
                                                        가족처럼 여기며 잘 따르고 있다.
                                                    </p>
                                                    <p class="faded-text">
                                                        연금술 중에서도 포션학 전공.<br>  
                                                        주로 사람들을 치유하거나 기운을 북돋우는 포션을 연구하고<br>  
                                                        있다.<br> 
                                                        포션 제조 외에도 기본적인 마법들도 익히고 있어 동화나라의<br>  
                                                        기사단 [테일즈 나이츠]와 함께 전투에 출전하기도 한다.
                                                    </p>
                                                    <p class="faded-text">
                                                        애교많고 아이 같은 말투로 아무것도 모른다는 인상을 주기<br>  
                                                        쉬우나 결정적인 순간, 논리적인 한 마디로 상대의 허를<br> 
                                                        찌르곤 한다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 elilin-picture"></div>
                                    </div>
                                </div>


                                <!-- 세실리아 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-sesila name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 이소은</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/wish/sesilia/Cecilia_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/wish/sesilia/Cecilia_SkillB0.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#wish-sesilia">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>17</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>12월 07일</span>
                                                        </li>
                                                        <li style="width:220px;">
                                                            <span>직업</span>
                                                            <span>기억을 잃은 소녀</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>164</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>46</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        자신의 이름 말고는 무엇도 기억하지 못하는 의문의 소녀.<br>
                                                        어둠이 모여드는 등불을 항상 들고 다닌다.<br>
                                                    </p>
                                                    <p class="faded-text">
                                                        무덤덤하고 차분한 성격에 말수도 적은 편이지만, 배려심 많고<br> 
                                                        섬세해 다른 사람의 이야기에 곧잘 공감해 주며 주변 사람들을<br> 
                                                        소중히 여기는 다정한 모습을 보이기도 한다.<br>
                                                    </p>
                                                    <p class="faded-text">
                                                        어디에선가 '작가'를 본 적 있는 것 같다는데...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 sesila-picture"></div>
                                    </div>
                                </div>

                                <!-- 루시안 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-lusian name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 이경태</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/wish/lusian/Lucian_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/wish/lusian/Lucian_Star5.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#wish-lucian">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>16</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>12월 01일</span>
                                                        </li>
                                                        <li style="width:220px;">
                                                            <span>직업</span>
                                                            <span>영원의 고통</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>163</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>42</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        어릴 적부터 희귀병을 앓아 고통을 안고 살아가는 소년.<br>
                                                        부유한 집안의 외동아들로 겉보기엔 온순한 도련님 같지만,<br>
                                                        병증이 심해질 때면 불안정한 모습을 가감 없이 드러내<br>
                                                        병원에서는 진료 기피 환자로 통하고 있다.
                                                    </p>
                                                    <p class="faded-text">
                                                        어떤 약도 진통제도 병증을 가라앉힐 수 없기에 자신이 나을<br> 
                                                        수 없다면 타인이 함께 고통받기를 바랐고, 테일즈랜드에 오기<br> 
                                                        전에도 자신이 느꼈던 고통을 타인과 나누면 좋겠다는 소원을<br> 
                                                        빌었다고 한다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 lusian-picture"></div>
                                    </div>
                                </div>

                                <!-- 아나스타샤 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-innistsha name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 장미</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/wish/innistasha/Anastasia_Go0.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/wish/innistasha/Anastasia_Star1.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#wish-innistasha">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>18</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>06월 12일</span>
                                                        </li>
                                                        <li style="width:220px;">
                                                            <span>직업</span>
                                                            <span>설산의 조사대원</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>150</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>38</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        테일즈랜드 외곽 설산의 얼음 마창사.<br>
                                                        테일즈랜드의 이변을 조사하기 위해 파견 나간 어머니로부터<br>
                                                        연락이 끊기자 어머니의 행방을 찾아 테일즈랜드에 오게<br>
                                                        되었다.
                                                    </p>
                                                    <p class="faded-text">
                                                        얼음 마녀였던 어머니의 영향으로 얼음 마법을 다룰 줄 알며,<br>
                                                        무기로는 어머니가 떠날 적 남겨 주신 만년필을 사용한다.
                                                    </p>
                                                    <p class="faded-text">
                                                        무심한 듯 보이지만 은근히 장난기 많고 짓궂은 성격으로<br>
                                                        어딘가 어설픈 경어를 쓰기도 한다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 innistsha-picture"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Thumbs Swiper -->
                        <div class="swiper peoR-thumbsSwiper02 choiceCharBox">
                            <div class="swiper-wrapper">
                            <div class="swiper-slide onSum">
                                    <div class="choiceChar-chicebox story-chara-choice wish-cha-01 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice wish-cha-02 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice wish-cha-04 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice wish-cha-05 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice wish-cha-06 bg2"></div>
                                </div>
                            </div>
                        </div>

                        <!-- 화살표 -->
                        <div class="swiper-button-prev peoR-mainSwiper02-prev"></div>
                        <div class="swiper-button-next peoR-mainSwiper02-next"></div>
                    
                    </div>


                    <!-- 동화나라 -->
                    <div id="content3" class="peopleRightContent-box right-Content03 bg">

                        <!-- Main Swiper -->
                        <div class="swiper peoR-mainSwiper03">
                            <div class="swiper-wrapper">
                                <!-- 엘리스 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-alice name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 방시우</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/elice/Alice_Go0.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/elice/Alice_LobbyIdle1.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#story-elice">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>22</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>01월 05일</span>
                                                        </li>
                                                        <li>
                                                            <span>직업</span>
                                                            <span>정의의 용사</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>165</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>48</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        치렁치렁한 프릴. 조용한 식사 시간.<br>
                                                        고상한 예법과 아가씨다운 미소.<br>
                                                        앨리스 플레전스에겐 그 모든 게 맞지 않는 드레스와 같았다.
                                                    </p>
                                                    <p class="faded-text">
                                                        그녀가 원하는 건 오직...스릴! 모험! 그리고 세계 제패!
                                                    </p>
                                                    <p class="faded-text">
                                                        그러던 중, 그녀가 이상한 나라 원더랜드로 오게 된 건 삶의<br> 
                                                        새로운 전환점과 같은 일이었다.
                                                    </p>
                                                    <p class="faded-text">
                                                        몬스터 처치! 레벨 업! 그리고 다시 처치!<br>
                                                        앨리스의 등장에 원더랜드의 카드병정들은 맥을 맞추지<br> 
                                                        못한다.<br>
                                                        앨리스는 오늘도 모험을 떠난다.<br>
                                                        새로운 세계의 용사가 되기 위해서...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 alice-picture"></div>
                                    </div>
                                </div>
                                <!-- 그레텔 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-gretel name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 정유정</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/gretel/Gretel_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/gretel/Gretel_LobbyTouch1.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#story-gretel">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>13</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>06월 22일</span>
                                                        </li>
                                                        <li style="width:230px;">
                                                            <span>직업</span>
                                                            <span>파티셰 (장래희망)</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>148</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>37</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        숲 속의 가난한 오두막집에 사는 소녀.<br>
                                                        오빠인 헨젤과는 둘도 없는(?) 관계.<br>
                                                        겉보기엔 조용하고 얌전한 성격에 온순한 여동생...인듯<br> 
                                                        보이지만...그 이면에 숨겨진 영악함과 난폭함은 오직<br> 
                                                        헨젤만이 알고 있는 그레텔의 일면이다.
                                                    </p>
                                                    <p class="faded-text">
                                                        귀찮은 일은 오빠를 내세우지만, 그녀를 움직이게 하는 것은<br> 
                                                        오직 '디저트'.<br>
                                                        가난한 형편인지라 디저트를 원 없이 먹어보는 게 소원이라고<br> 
                                                        한다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 gretel-picture"></div>
                                    </div>
                                </div>

                                <!-- 체셔 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-chaser name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 정주원</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/chaser/CheshireCat_PartyJoin2.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/chaser/CheshireCat_LobbyIdle1.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#story-chaser">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>비밀♧</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>02월 22일</span>
                                                        </li>
                                                        <li style="width:230px;">
                                                            <span>직업</span>
                                                            <span>정체불명 고양이</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>175</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>60</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        이상한 나라의 원더랜드에 살고 있는 정체불명의 고양이.<br>
                                                        말투는 젠틀하지만 어딘지 장난스럽고 음흉한 구석이 보인다.<br>
                                                        본인이 유리할 때 나타났다가 불리할 때는 사라지는 등 종잡을<br> 
                                                        수 없는 성격이기도 하다.
                                                    </p>
                                                    <p class="faded-text">
                                                        원래는 신체도 고양이었지만, 주인을 만나면서 인간의 몸으로<br>  
                                                        변신시켜주었다고 한다.<br> 
                                                        그러나 체셔캣으로서의 능력도 그대로 지니고 있어 몸 일부나<br>  
                                                        전체를 투명화시킬 수 있다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 chaser-picture"></div>
                                    </div>
                                </div>

                                <!-- 플레어 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-flare name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 김가령</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/flare/Flare_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/flare/Flare_Star5.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#story-flare">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>17</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>04월 20일</span>
                                                        </li>
                                                        <li style="width:230px;">
                                                            <span>직업</span>
                                                            <span>서커스 단장</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>160</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>47</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        플레어 서커스단의 단장.<br>
                                                        인형들을 데리고 서커스단을 꾸리고 있으며, 귀여운 외모와<br>
                                                        화려한 스타성으로 매니아들을 몰고 다닌다.
                                                    </p>
                                                    <p class="faded-text">
                                                        단, 조금 뒤틀린 성격 때문에 귀여운 인형만 보면 이성을<br> 
                                                        잃어버리며 어떻게든 가지려고 어린아이처럼 굴기도 한다.<br>
                                                        그녀의 인형에 대한 집착을 보고있으면 다소 섬뜩한 기분이<br> 
                                                        들기도 한다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 flare-picture"></div>
                                    </div>
                                </div>

                                <!-- 브라이어로즈 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-rose name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 김현지</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/rose/BriarRose_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/rose/BriarRose_LobbyTouch1.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#story-rose">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>115</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>03월 17일</span>
                                                        </li>
                                                        <li style="width:230px;">
                                                            <span>직업</span>
                                                            <span>잠자는 공주</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>151</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>40</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        잠자는 저주에 걸려 깊은 잠에 걸린 공주님.<br>
                                                        그러나 원래 잠자는 것을 좋아해, 매사에 의욕 없고<br>
                                                        무기력하다.
                                                    </p>
                                                    <p class="faded-text">
                                                        늘 잠이 부족해 하루에 대다수 시간을 수면으로 보낸다고<br>
                                                        한다.<br>
                                                        수면의 품질을 몹시 중요하게 생각하기 때문에 늘 좋은 침구와<br> 
                                                        수면 환경을 갖추려 노력한다.
                                                    </p>
                                                    <p class="faded-text">
                                                        막 깨어났을 때엔 매우 괴팍하고 성격이 좋지 않으니 주의.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 rose-picture"></div>
                                    </div>
                                </div>

                                <!-- 멜피 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-melphi name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 김가령</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/melphi/Malfi_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/melphi/Malfi_Star4.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#story-malfi">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li style="width:162px;">
                                                            <span>나이</span>
                                                            <span>알 수 없음</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>05월 30일</span>
                                                        </li>
                                                        <li style="width:230px;">
                                                            <span>직업</span>
                                                            <span>악몽의 요정</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li style="width:162px;">
                                                            <span>신장</span>
                                                            <span>163</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>51</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        [잠자는 숲 속의 공주] 동화 속, 악몽의 요정으로 불리는 검은<br>
                                                        요정.<br>
                                                        그녀의 지팡이에 달린 종소리를 들은 자는 누구든 잠에<br>
                                                        빠진다.
                                                    </p>
                                                    <p class="faded-text">
                                                        그녀가 등장하는 곳엔 사람들의 꿈에 들어가 악몽을 꾸게 하는<br>
                                                        '검은 양 떼'들이 항상 함께한다고 한다.
                                                    </p>
                                                    <p class="faded-text">
                                                        언제나 소극적이고 자신감 없는 그녀는 사랑받는 것에 익숙지<br>
                                                        않다.<br>
                                                        그래서인지 과대망상이나 집착을 하는 등 불안정한 모습을<br>
                                                        보이기도 해, 주변 사람들에게 음침하다는 평가를 받곤 한다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 melphi-picture"></div>
                                    </div>
                                </div>

                                <!-- 제페토 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-jepheto name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 방시우</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/jepheto/Zepeto_FiveStar.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/jepheto/Zepeto_LobbyIdle1.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#story-zepeto">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>32</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>07월 14일</span>
                                                        </li>
                                                        <li style="width:230px;">
                                                            <span>직업</span>
                                                            <span>인형공방의 주인</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>170</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>53</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        피노키오를 제작한 목수이자 목각인형 장인. <br>
                                                        본업은 목수지만, 부업으로 목각 인형과 목공예품을 만드는 <br>
                                                        것에<br>
                                                        더욱 몰두하고 있다.<br>
                                                        상당히 정교하고 퀄리티가 높아 제페토가 만드는 인형을<br>
                                                        사기 위해선 몇 개월을 기다려야 한다고...
                                                    </p>
                                                    <p class="faded-text">
                                                        완성도가 높을 수밖에 없는 이유는 따로 있다.<br>
                                                        제페토가 굉장한 완벽주의자기 때문이다.<br>
                                                        자신의 작품이 완벽하지 않으면 인정사정없으며,<br>
                                                        고객이 괜찮다고 제발 팔아달라고 애원해도 절대 판매하지 <br>
                                                        않는다고.<br>
                                                        그런 깐깐한 성격 탓에 차갑다고 오해받기 쉬운 타입이다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 jepheto-picture"></div>
                                    </div>
                                </div>

                                <!-- 샤샤 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-shasha name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 이새아</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/shasha/Sasha_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/shasha/Sasha_LobbyTouch3.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#story-sasha">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>8</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>03월 30일</span>
                                                        </li>
                                                        <li style="width:230px;">
                                                            <span>직업</span>
                                                            <span>빨간 두건</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>130</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>29</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        빨간 두건을 두른 어린 소녀.<br>
                                                        허무맹랑한 소리도 잘 믿고 잘 속을 만큼 순진무구한 성격.<br>
                                                        상냥하고 활발하지만, 처음 보는 사람에겐 낯을 가리기도<br>
                                                        한다.
                                                    </p>
                                                    <p class="faded-text">
                                                        작은 체구답지 않게 성인보다 많이 먹을 정도의 대식가지만,<br>
                                                        맛있는 것은 함께 먹을 때 더 맛있다고 생각하기에 음식을<br> 
                                                        나눠주거나 양보하는 것도 마다하지 않는다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 shasha-picture"></div>
                                    </div>
                                </div>

                                <!-- 아이르 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-aero name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 김하루</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/iero/Aire_FriendshipUp1.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/iero/Aire_PartyJoin1.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#story-aire">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>16</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>10월 10일</span>
                                                        </li>
                                                        <li style="width:230px;">
                                                            <span>직업</span>
                                                            <span>인어공주</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>164</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>45</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        바닷속에서 금지옥엽 키워진 인어 공주님.<br>
                                                        바다에 빠진 육지의 왕자를 구해준 후 첫눈에 반해, 자신도<br> 
                                                        인간의 다리를 얻어 육지로 올라가기로 마음먹는다.
                                                    </p>
                                                    <p class="faded-text">
                                                        공주님으로서 사랑받고 자라서인지 자존심이 강해 자신의<br> 
                                                        감정을 표현하는 데 서투르며 솔직하지 못하다.
                                                    </p>
                                                    <p class="faded-text">
                                                        비록 첫사랑은 좌절되었지만, 자신은 새로운 사랑을 찾았으니<br> 
                                                        괜찮다는데...?
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 aero-picture"></div>
                                    </div>
                                </div>

                                <!-- 키스멧 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-kismet name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 이은조</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/kismet/Kismet_PartyJoin0.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/story/kismet/Kismet_LobbyTouch1.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#story-kismet">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>불명</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>01월 01일</span>
                                                        </li>
                                                        <li style="width:230px;">
                                                            <span>직업</span>
                                                            <span>예언가</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>173</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>53</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        아득히 오랜 세월 바다를 지켜온 심해의 예언가.<br>
                                                        파도의 흐름으로 운명을 내다볼 수 있다.<br>
                                                        선과 악, 육지와 바다 그 누구의 편도 들지 않으며, 예언서에<br> 
                                                        적힌 운명의 순리에 따르는 것을 섭리로 여긴다.
                                                    </p>
                                                    <p class="faded-text">
                                                        여유롭고 지적인 성격으로, 시대를 통달할 정도의 지식을 알고<br>  
                                                        있다.<br> 
                                                        자신과 수준이 맞는 상대와 격 높은 대화를 나누는 것을<br>  
                                                        즐긴다고 한다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture  kismet-picture"></div>
                                    </div>
                                </div>


                                <!-- 플로렌스 -->
                                <div class="swiper-slide">
                                    <div class="chabigbox">
                                        <!-- 캐릭터정보 -->
                                        <div class="left-charainfobox">
                                            <!-- 이름 및 속성 -->
                                            <div class="name-florance name bg2"></div>
                                            <!-- 녹음 및 영상 -->
                                            <div class="voicevideobox">
                                                <!-- 녹음 -->
                                                <div class="voicebox">
                                                    <div class="voice-actordiv">
                                                        <span>CV. 이보희</span>
                                                    </div>
                                                    <div class="voicebutbox">
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/wish/flolance/Florence_GetCharacter.wav"></audio>
                                                        </button>
                                                        <button class="voicepbut">
                                                            <img src="/images/people/voiceIcon.png" alt="녹음">
                                                            <audio src="/music/wish/flolance/Florence_LobbyIdle1.wav"></audio>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- 영상 -->
                                                <!-- <div class="videobox">
                                                    <div class="video-div">
                                                        <span>캐릭터 영상</span>
                                                    </div>
                                                    <div class="videobutbox">
                                                        <button data-bs-toggle="modal" data-bs-target="#wish-florence">
                                                            <img src="/images/people/playIcon.png" alt="녹음">
                                                        </button>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- 프로필 -->
                                            <div class="charaprofileBox">
                                                <div class="profiletitle bg2"></div>
                                                <div class="profile-info">
                                                    <ul>
                                                        <li>
                                                            <span>나이</span>
                                                            <span>17</span>
                                                        </li>
                                                        <li>
                                                            <span>생일</span>
                                                            <span>02월 04일</span>
                                                        </li>
                                                        <li style="width:220px;">
                                                            <span>직업</span>
                                                            <span>정원사</span>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li>
                                                            <span>신장</span>
                                                            <span>160</span>
                                                        </li>
                                                        <li>
                                                            <span class="progile-weight">몸무게</span>
                                                            <span>44</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- 스토리 -->
                                            <div class="charastoryBox">
                                                <div class="charastorytitle bg2"></div>
                                                <div class='charastory-textarea storyword-textarea'>
                                                    <p class="faded-text">
                                                        [겨울나무 숲에는 꽃이 핀다] 동화 속 여주인공.<br>
                                                        꽃을 좋아하는 상냥하고 성실한 성격의 정원사지만, 아버지의<br>
                                                        병을 고치기 위해 왕을 찾아가는 대담한 모습을 보이기도<br>
                                                        한다.
                                                    </p>
                                                    <p class="faded-text">
                                                        들고 있는 물뿌리개는 어떤 꽃이든 피울 수 있는 마법의 물건.<br>
                                                        이를 이용해 화염꽃을 피워 겨울나무 숲의 못된 마녀를<br>
                                                        무찌르고 아버지의 병을 고친 현명한 주인공으로 전해진다.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 캐릭터 사진 -->
                                        <div class="charaPicture bg2 florance-picture"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Thumbs Swiper -->
                        <div class="swiper peoR-thumbsSwiper03 choiceCharBox">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide onSum">
                                    <div class="choiceChar-chicebox story-chara-choice story-cha-01 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice story-cha-02 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice story-cha-03 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice story-cha-04 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice story-cha-05 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice story-cha-06 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice story-cha-07 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice story-cha-08 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice story-cha-09 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice story-cha-10 bg2"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="choiceChar-chicebox story-chara-choice story-cha-11 bg2"></div>
                                </div>
                            </div>
                        </div>

                        <!-- 화살표 -->
                        <div class="swiper-button-prev peoR-mainSwiper03-prev"></div>
                        <div class="swiper-button-next peoR-mainSwiper03-next"></div>

                    </div>
                </div>
            </div>
        </div>


        <!-- 미디어 화면 -->
        <div class="section bg2" id="section5">
            <div class="section5Video">
                <video loop  muted="" autoplay="" src="/images/video/mediaVideo.mp4"></video>
            </div>
            <div class="mediatitle bg"></div>
            <div class="swiper section05swiper">
                <div class="swiper-wrapper">
                    <!-- 영상 -->
                    <div class="swiper-slide section05swiper-slide">
                        <!-- 미디어1 -->
                        <div class="swiper media01swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="media01-videobox media01-video01 bg">                
                                        <iframe id="youtube-video-media01" width="100%" height="100%" src="https://www.youtube.com/embed/JjQDHZL5mZ8?si=ZId26BWMPu2_ukiW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <!-- <div class="swiper-slide">
                                    <div class="media01-videobox media01-video02 bg">                                       
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/JjQDHZL5mZ8?si=ZId26BWMPu2_ukiW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="media01-videobox media01-video03 bg">
                                        <button class="media01swiper-videobut" data-bs-toggle="modal" data-bs-target="#story-videoModal"></button>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="media01-videobox media01-video01 bg">
                                        <button class="media01swiper-videobut" data-bs-toggle="modal" data-bs-target="#story-videoModal"></button>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="media01-videobox media01-video02 bg">
                                        <button class="media01swiper-videobut" data-bs-toggle="modal" data-bs-target="#story-videoModal"></button>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="media01-videobox media01-video03 bg">
                                        <button class="media01swiper-videobut" data-bs-toggle="modal" data-bs-target="#story-videoModal"></button>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="media01swiper-arrow bg"></div>
                        <div class="swiper-button-prev media01swiperArrow media01swiper-prev bg"></div>
                        <div class="swiper-button-next media01swiperArrow media01swiper-next bg"></div>
                    </div>
                    
                    <!-- 일러스트 -->
                    <div class="swiper-slide section05swiper-slide">
                        <div id="carouselExampleIndicators" class="carousel slide illuslide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="bg" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div>
                                        <img src="/images/ill-p01.png" alt="일러스트1">
                                    </div>
                                    <div class="illusideButbox">
                                        <button id="illuslide-shareIcon01" class="illuslide-shareIcon bg"></button>
                                        <button id="downloadButton-ill-p01" class="illuslide-downIcon bg"></button>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div>
                                        <img src="/images/ill-p02.png" alt="일러스트2">
                                    </div>
                                    <div class="illusideButbox">
                                        <button id="illuslide-shareIcon02" class="illuslide-shareIcon bg"></button>
                                        <button id="downloadButton-ill-p02" class="illuslide-downIcon bg"></button>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div>
                                        <img src="/images/ill-p03.png" alt="일러스트3">
                                    </div>
                                    <div class="illusideButbox">
                                        <button id="illuslide-shareIcon03" class="illuslide-shareIcon bg"></button>
                                        <button id="downloadButton-ill-p03" class="illuslide-downIcon bg"></button>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div>
                                        <img src="/images/ill-p04.png" alt="일러스트4">
                                    </div>
                                    <div class="illusideButbox">
                                        <button id="illuslide-shareIcon04" class="illuslide-shareIcon bg"></button>
                                        <button id="downloadButton-ill-p04" class="illuslide-downIcon bg"></button>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>                       
                    </div>
                </div>
                <!-- If we need pagination -->
            </div>
            <div class="swiper-scrollbar02 word-scrollbar02">
                <div class="cib-ba02">영상</div>
            </div>
        </div>

        <!-- -------------------------------------------------------------------- -->


        <!-- 라운지 링크 -->
        <button class="lounageBut bg" onclick="window.open('https://game.naver.com/lounge/TalesRunnerRPG/home')">
            <div class="lounageBut-close bg"></div>
        </button>
        <!-- 라디오제어 -->
        <div class="radiobox">
            <div class="radioBarbox">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <button class="radioControlbut" onclick="toggleAnimation()">SOUND ON</button>
        </div>
        <!-- 푸터 -->
        <div class="footer">
            <div>
                <p>상호 : (주) 라온 엔터테인먼트</p>
                <div class="footbar"></div>
                <p>사업자등록번호 : 514-81-37077</p>
                <div class="footbar"></div>
                <p>Contact Us: talesrunner.rpg_support@rhaon.com</p>
                <div class="footbar"></div>
                <p>Copyright ⓒ RHAON Entertainment Corp. All Rights Reserved</p>
            </div>
        </div>
    </div>




    <!-- 모달관련 -->
    <!-- ---------------------------------------------------- -->
    <!-- 인트로 영상 모달 -->
    <div class="modal fade videoModal" id="intro-videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content;">
            <div class="modal-content" style="background-color:transparent;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="frameborder">
                        <iframe id="videoIframe-main" width="100%" height="100%" src="https://www.youtube.com/embed/JjQDHZL5mZ8?si=ZId26BWMPu2_ukiW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 스토리 영상 모달 -->
    <div class="modal fade videoModal" id="story-videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content;">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div><img style="width:100%; height:100%;" src="/images/people/introvideo-sum.png" alt="예시"></div>
                    <button onclick="window.open('https://youtu.be/JjQDHZL5mZ8')" class="videoModalButton bg"></button>
                </div>
            </div>
        </div>
    </div>


    <!-- 캐릭터 모달 -->
    <div class="modal fade" id="tale-chowon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tale-mingming" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tale-lala" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tale-elims" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tale-bigbo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tale-haru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="story-elice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="story-gretel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="story-chaser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="story-flare" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="story-rose" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="story-malfi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="story-zepeto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="story-sasha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="story-aire" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="story-kismet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="wish-helya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="wish-ellin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="wish-florence" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="wish-sesilia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="wish-lucian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="wish-innistasha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        let sections = document.querySelectorAll('.section');
        let currentSection = 0;
        let isScrolling = false;
        let twoContentUl = document.querySelector('.twoContent-ul');
        let topWordMenu = document.querySelector('.top-wordmenu'); // .top-wordmenu 요소 찾기
        let topPeopleMenu = document.querySelector('.top-peoplemenu'); // .top-wordmenu 요소 찾기
        let topMediaMenu = document.querySelector('.top-mediamenu'); // .top-wordmenu 요소 찾기
        let whitebackDiv = document.querySelector('.whiteback'); // 'whiteback' 클래스를 가진 div 선택
        let modals = document.querySelectorAll('.modal'); // .modal 요소들 선택

        whitebackDiv.addEventListener('animationend', function() {
            whitebackDiv.style.display = 'none'; // 애니메이션 종료 후 display를 none으로 설정
        });

        function isModalOpen() {
            return Array.from(modals).some(modal => modal.classList.contains('show'));
        }

        function scrollToSection(index) {
            isScrolling = true;

            whitebackDiv.style.display = 'block'; // whiteback div를 보이게 설정

            setTimeout(() => { // 0.2초 후에 섹션 전환 로직 실행
                sections.forEach((section, i) => {
                    if (i === index) {
                        section.classList.add('active');
                        section.classList.remove('inactive');

                        if (i === 1) { 
                            twoContentUl.classList.add('menufadedown');
                        }
                        if (i === 2) { 
                            topWordMenu.classList.add('top-wordmenu-active');
                        }
                        if (i === 3) { 
                            topPeopleMenu.classList.add('top-peoplemenu-active');
                        }
                        if (i === 4) {
                            topMediaMenu.classList.add('top-mediamenu-active');
                        }
                    } else {
                        section.classList.add('inactive');
                        section.classList.remove('active');
                        if (i === 1) { 
                            twoContentUl.classList.remove('menufadedown');
                        }
                        if (i === 2) { 
                            topWordMenu.classList.remove('top-wordmenu-active');
                        }
                        if (i === 3) { 
                            topPeopleMenu.classList.remove('top-peoplemenu-active');
                        }
                        if (i === 4) {
                            topMediaMenu.classList.remove('top-mediamenu-active');
                        }
                    }
                });
                setTimeout(() => {
                    isScrolling = false;
                }, 1000);
            }, 200); // 0.2초 지연
        }

        function handleScroll(event) {
            if (isScrolling || isModalOpen()) return; // 스크롤 중이거나 모달이 열려 있으면 스크롤 이벤트 무시
            if (currentSection >= 2) return;

            if (event.deltaY > 0 && currentSection < sections.length - 1 && currentSection < 1) {
                currentSection++;
                scrollToSection(currentSection);
            } else if (event.deltaY < 0 && currentSection > 0) {
                currentSection--;
                scrollToSection(currentSection);
            }
        }

        document.addEventListener('wheel', handleScroll);

        // Button click event listeners
        document.getElementById('nextButton').addEventListener('click', function() {
            currentSection = 2;
            scrollToSection(currentSection);
        });

        document.getElementById('nextButton4').addEventListener('click', function() {
            currentSection = 3;
            scrollToSection(currentSection);
        });

        document.getElementById('nextButton5').addEventListener('click', function() {
            currentSection = 4;
            scrollToSection(currentSection);
        });

        document.querySelector('.home').addEventListener('click', function() {
            currentSection = 0;
            scrollToSection(currentSection);
        });

        document.querySelectorAll('.wordlink-but').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default anchor behavior
                currentSection = 2;
                scrollToSection(currentSection);
            });
        });

        document.querySelectorAll('.peoplelink-but').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default anchor behavior
                currentSection = 3;
                scrollToSection(currentSection);
            });
        });

        document.querySelectorAll('.medialink-but').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default anchor behavior
                currentSection = 4;
                scrollToSection(currentSection);
            });
        });

        const observerModal = new MutationObserver(mutations => {
            mutations.forEach(mutation => {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    if (isModalOpen()) {
                        isScrolling = true;
                    } else {
                        isScrolling = false;
                    }
                }
            });
        });

        modals.forEach(modal => {
            observerModal.observe(modal, { attributes: true });
        });

        <?php
        if($_GET['medialink']!=""){
        ?>
        $(window).load(function(){
            currentSection = 4;
            scrollToSection(currentSection);
            swiper05.slideTo(1);
            $(".carousel-indicators").children("button").eq(<?=$_GET['medialink']-1?>).trigger("click");
        });
        <?php
        }else{
        ?>
        scrollToSection(currentSection);
        <?php
        }
        ?>
    });
</script>

<script>
    // 화면 리사이즈
    function resizeApply() {
        var minWidth = 1920;  // 고정 너비 1920px 설정
        var minHeight = 980;  // 고정 높이 980px 설정
        var body = document.getElementsByTagName('body')[0];
        
        // 너비와 높이에 대한 비율 계산
        var widthScale = window.innerWidth / minWidth;
        var heightScale = window.innerHeight / minHeight;

        // 너비와 높이 중 더 작은 비율을 사용하여 화면 크기 조정
        var scale = Math.min(widthScale, heightScale);
        body.style.zoom = scale;  // 모든 해상도에서 너비와 높이 비율 유지
    }
    
    window.onload = function() {
        window.addEventListener('resize', function() {
            resizeApply();
        });
        resizeApply();  // 초기 호출
    }

        // 라디오 효과제어
        function toggleAnimation() {
        var audio = document.querySelector('audio'); // 오디오 요소 참조 추가
        var bars = document.querySelectorAll('.bar');
        var button = document.querySelector('.radioControlbut');
        
        if (button.textContent === 'SOUND ON') {
            bars.forEach(bar => bar.style.animationPlayState = 'running');
            audio.play(); // 오디오 재생
            button.textContent = 'SOUND OFF';
        } else {
            bars.forEach(bar => bar.style.animationPlayState = 'paused');
            audio.pause(); // 오디오 중지
            button.textContent = 'SOUND ON';
        }
        
    }


    // 라디오 색상 제어
    $(document).ready(function() {
            // MutationObserver를 사용하여 #section1의 클래스 변화를 감지
            const targetNode = document.getElementById('section1');
            const config = { attributes: true };

            const callback = function(mutationsList, observer) {
                for(let mutation of mutationsList) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                        if ($(targetNode).hasClass('active')) {
                            $('.radiobox').addClass('radiocolorchang');
                        } else {
                            $('.radiobox').removeClass('radiocolorchang');
                        }
                    }
                }
            };

        const observer = new MutationObserver(callback);
        observer.observe(targetNode, config);
    });

    // 보러가기 닫기 버튼 누를시
    document.addEventListener('DOMContentLoaded', function() {
        var closeButton = document.querySelector('.lounageBut-close');
        closeButton.addEventListener('click', function(event) {
            event.stopPropagation(); // 이벤트 전파를 중지합니다.
            var button = event.target.closest('.lounageBut');
            button.style.display = 'none'; // 버튼을 숨깁니다.
        });
    });
    
</script>




<!-- 세계관 스크립트 -->
<script>
    const swiper = new Swiper('.wordswiper', {
        // Optional parameters
        direction: 'vertical',
        loop: false,
        simulateTouch: false, // 마우스 드래그 및 터치 드래그 비활성화
        // If we need pagination
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        speed: 1200, // 슬라이드 전환 속도를 800ms로 설정
        mousewheel: {
            enabled: true,
            eventsTarged: '.swiper-container',
        },
        on: {
            slideChange: function () {
                const cibBaElement = document.querySelector('.cib-ba');
                if (this.activeIndex === 1) { // 
                    cibBaElement.classList.add('active');
                    // 
                    cibBaElement.addEventListener('transitionend', function updateStyleOnce() {
                        cibBaElement.textContent = '작가'; // 
                        cibBaElement.style.setProperty('--image-url', 'url("/images/wordSeconddot.png")'); //
                        cibBaElement.removeEventListener('transitionend', updateStyleOnce); // 
                    }, { once: true });
                } else {
                    cibBaElement.classList.remove('active');
                    cibBaElement.textContent = '스토리'; //
                    cibBaElement.style.setProperty('--image-url', 'url("/images/wordFirstdot.png")'); //
                }
            }
        }
    });
</script>


<!-- 세계관 동영상 한번 재생 -->
<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var video = document.getElementById('storyVideo');
        var section3 = document.getElementById('section3');

        if (video && section3) {  
            video.addEventListener('ended', function() {
                video.pause();
                video.currentTime = 0;  
                video.removeAttribute('autoplay'); 
            });

            var observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                        if (section3.classList.contains('active')) {
                            video.play();  
                        }
                    }
                });
            });

            observer.observe(section3, { attributes: true });
        } else {
            
        }
    });
</script> -->


<!-- 등장인물 스크립트 -->
<script>
    var peoplemenubox = new Swiper(".peoplemenubox", {
        direction: 'vertical',
        centeredSlides: true,
        loop: true,
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: '.peoplemenubox-button-next',
            prevEl: '.peoplemenubox-button-prev',
        },
        simulateTouch: false, // 마우스 드래그 및 터치 드래그 비활성화
        on: {
            // 슬라이드가 변경될 때 실행될 함수
            slideChange: function () {
                // 모든 오디오 요소를 찾아서 중지하고 재생 위치를 리셋
                document.querySelectorAll('.swiper-slide audio').forEach(audio => {
                    if (!audio.paused) {
                        audio.pause();
                        audio.currentTime = 0;
                    }
                });
            }
        }
    });
    // swiper-slide-prev 요소를 클릭할 때 peoplemenubox-button-prev 클릭 이벤트 트리거
    document.addEventListener('click', function(event) {
        if (event.target.closest('.peoplemenubox .swiper-slide-prev')) {
            document.querySelector('.peoplemenubox-button-prev').click();
        }
        if (event.target.closest('.peoplemenubox .swiper-slide-next')) {
            document.querySelector('.peoplemenubox-button-next').click();
        }
    });
    
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const peopleContent = document.querySelector('#section4');
    const buttons = document.querySelectorAll('.left-button');
    const contents = document.querySelectorAll('.peopleRightContent-box');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                contents.forEach(content => {
                    if (content.id === targetId) {
                        content.classList.add('peopleRightContent-box-active');
                        switch (targetId) {
                            case 'content1':
                                peopleContent.style.backgroundImage = 'url("/images/peopleBg01.png")';
                                break;
                            case 'content2':
                                peopleContent.style.backgroundImage = 'url("/images/peopleBg02.png")';
                                break;
                            case 'content3':
                                peopleContent.style.backgroundImage = 'url("/images/peopleBg03.png")';
                                break;
                        }
                    } else {
                        content.classList.remove('peopleRightContent-box-active');
                    }
                });
            });
        });
    });
</script>


<script>
    // 썸네일 슬라이더 초기화
    const peoRthumbsSwiper01 = new Swiper('.peoR-thumbsSwiper01', {
        spaceBetween: 16,
        slidesPerView: 4,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.peoR-mainSwiper01-next',
            prevEl: '.peoR-mainSwiper01-prev',
        },
        slideToClickedSlide: false,
        allowTouchMove: false, // 드래그로 슬라이드 변경 금지
    });

    // 메인 슬라이더 초기화
    const peoRmainSwiper01 = new Swiper('.peoR-mainSwiper01', {
        spaceBetween: 10,
        allowTouchMove: false, // 드래그로 슬라이드 변경 금지
        on: {
            // 슬라이드가 변경될 때 실행될 함수
            slideChange: function () {
                // 모든 오디오 요소를 찾아서 중지하고 재생 위치를 리셋
                document.querySelectorAll('.swiper-slide audio').forEach(audio => {
                    if (!audio.paused) {
                        audio.pause();
                        audio.currentTime = 0;
                    }
                });
            }
        }
    });

    // 썸네일 클릭 이벤트를 메인 슬라이더와 연결
    peoRthumbsSwiper01.on('click', function(swiper) {
        if (swiper.clickedIndex !== undefined) {
            peoRmainSwiper01.slideTo(swiper.clickedIndex);
            // 모든 썸네일에서 'onSum' 클래스 제거
            document.querySelectorAll('.peoR-thumbsSwiper01 .swiper-slide').forEach(function(slide) {
                slide.classList.remove('onSum');
            });
            // 클릭된 썸네일에 'onSum' 클래스 추가
            swiper.slides[swiper.clickedIndex].classList.add('onSum');
        }
    });

    // ---------------------------

    // 썸네일 슬라이더 초기화
    const peoRthumbsSwiper02 = new Swiper('.peoR-thumbsSwiper02', {
        spaceBetween: 16,
        slidesPerView: 4,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.peoR-mainSwiper02-next',
            prevEl: '.peoR-mainSwiper02-prev',
        },
        slideToClickedSlide: false, // 썸네일 슬라이드를 클릭했을 때 자동으로 이동하지 않음
        allowTouchMove: false, // 드래그로 슬라이드 변경 금지
    });

    // 메인 슬라이더 초기화
    const peoRmainSwiper02 = new Swiper('.peoR-mainSwiper02', {
        spaceBetween: 10,
        allowTouchMove: false, // 드래그로 슬라이드 변경 금지
        on: {
            // 슬라이드가 변경될 때 실행될 함수
            slideChange: function () {
                // 모든 오디오 요소를 찾아서 중지하고 재생 위치를 리셋
                document.querySelectorAll('.swiper-slide audio').forEach(audio => {
                    if (!audio.paused) {
                        audio.pause();
                        audio.currentTime = 0;
                    }
                });
            }
        }
    });

    // 썸네일 클릭 이벤트를 메인 슬라이더와 연결
    peoRthumbsSwiper02.on('click', function(swiper) {
        if (swiper.clickedIndex !== undefined) {
            peoRmainSwiper02.slideTo(swiper.clickedIndex);
            // 모든 썸네일에서 'onSum' 클래스 제거
            document.querySelectorAll('.peoR-thumbsSwiper02 .swiper-slide').forEach(function(slide) {
                slide.classList.remove('onSum');
            });
            // 클릭된 썸네일에 'onSum' 클래스 추가
            swiper.slides[swiper.clickedIndex].classList.add('onSum');
        }
    });
    // ---------------------------

    // 썸네일 슬라이더 초기화
    const peoRthumbsSwiper03 = new Swiper('.peoR-thumbsSwiper03', {
        spaceBetween: 16,
        slidesPerView: 4,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.peoR-mainSwiper03-next',
            prevEl: '.peoR-mainSwiper03-prev',
        },
        slideToClickedSlide: false, // 썸네일 슬라이드를 클릭했을 때 자동으로 이동하지 않음
        allowTouchMove: false, // 드래그로 슬라이드 변경 금지
    });

    // 메인 슬라이더 초기화
    const peoRmainSwiper03 = new Swiper('.peoR-mainSwiper03', {
        spaceBetween: 10,
        allowTouchMove: false, // 드래그로 슬라이드 변경 금지
        on: {
            // 슬라이드가 변경될 때 실행될 함수
            slideChange: function () {
                // 모든 오디오 요소를 찾아서 중지하고 재생 위치를 리셋
                document.querySelectorAll('.swiper-slide audio').forEach(audio => {
                    if (!audio.paused) {
                        audio.pause();
                        audio.currentTime = 0;
                    }
                });
            }
        }
    });

    // 썸네일 클릭 이벤트를 메인 슬라이더와 연결
    peoRthumbsSwiper03.on('click', function(swiper) {
        if (swiper.clickedIndex !== undefined) {
            peoRmainSwiper03.slideTo(swiper.clickedIndex);
            // 모든 썸네일에서 'onSum' 클래스 제거
            document.querySelectorAll('.peoR-thumbsSwiper03 .swiper-slide').forEach(function(slide) {
                slide.classList.remove('onSum');
            });
            // 클릭된 썸네일에 'onSum' 클래스 추가
            swiper.slides[swiper.clickedIndex].classList.add('onSum');
        }
    });
</script>

<!-- 등장인물 세계관 클릭시 화면 전환 코드 -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const observer = new MutationObserver(mutations => {
            mutations.forEach(mutation => {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    let targetElement = mutation.target;
                    if (targetElement.classList.contains('swiper-slide-active')) {
                        // 태일즈런너에 대한 처리
                        if (targetElement.classList.contains('taleslide')) {
                            document.querySelector('.left-button01[data-target="content1"]').click();
                        }
                        // 소원의 돌에 대한 처리
                        else if (targetElement.classList.contains('wishslide')) {
                            document.querySelector('.left-button02[data-target="content2"]').click();
                        }
                        // 동화나라에 대한 처리
                        else if (targetElement.classList.contains('storyslide')) {
                            document.querySelector('.left-button03[data-target="content3"]').click();
                        }
                    }
                }
            });
        });

        const config = { attributes: true, childList: false, subtree: false };
        const slides = document.querySelectorAll('.swiper-slide');
        slides.forEach(slide => {
            observer.observe(slide, config);
        });
    });
</script>

<script>
    document.querySelectorAll('.voicepbut').forEach(button => {
        button.addEventListener('click', function() {
            var audio = this.querySelector('audio');
            // 오디오가 이미 재생 중이면 중지
            if (!audio.paused) {
                audio.pause();
                audio.currentTime = 0; // 
            } else {
                // 
                document.querySelectorAll('audio').forEach(otherAudio => {
                    if (!otherAudio.paused) {
                        otherAudio.pause();
                        otherAudio.currentTime = 0;
                    }
                });
                // 현재 오디오 재생
                audio.play();
            }
        });
    });
</script>






<!-- 미디어 스크립트 -->
<script>
    const swiper05 = new Swiper('.section05swiper', {
        // Optional parameters
        direction: 'vertical',
        loop: false,
        simulateTouch: false, // 마우스 드래그 및 터치 드래그 비활성화
        mousewheel: {
            enabled: true,
            eventsTarged: '.swiper-container',
        },
        scrollbar: {
            el: '.swiper-scrollbar02',
        },
        speed: 600, // 
        on: {
            slideChangeTransitionStart: function () {
                const slides = this.slides;
                slides.forEach((slide) => {
                    if (slide.classList.contains('swiper-slide-prev')) {
                        slide.style.opacity = '0';
                        slide.style.transform = 'translateY(200%)';
                    } else {
                        slide.style.opacity = '0';
                        slide.style.transform = 'translateY(100%)';
                    }
                });

                const activeSlide = slides[this.activeIndex];
                activeSlide.style.opacity = '1';
                activeSlide.style.transform = 'translateY(0)';
            },
            slideChangeTransitionEnd: function () {
                const slides = this.slides;
                slides.forEach((slide) => {
                    slide.style.opacity = '0';
                    slide.style.transform = 'translateY(100%)';
                });

                const activeSlide = slides[this.activeIndex];
                activeSlide.style.opacity = '1';
                activeSlide.style.transform = 'translateY(0)';
            },
            slideChange: function () {
                const cibBaElement02 = document.querySelector('.cib-ba02');
                if (this.activeIndex === 1) { // 
                    cibBaElement02.classList.add('active');
                    // 
                    cibBaElement02.addEventListener('transitionend', function updateStyleOnce() {
                        cibBaElement02.textContent = '일러스트'; // 
                        cibBaElement02.style.setProperty('--image-url', 'url("/images/wordFirstdot02.png")'); 
                        cibBaElement02.removeEventListener('transitionend', updateStyleOnce);
                    }, { once: true });
                } else {
                    cibBaElement02.classList.remove('active');
                    cibBaElement02.textContent = '영상'; // 
                    cibBaElement02.style.setProperty('--image-url', 'url("/images/wordFirstdot02.png")'); // 
                }
            }
        },
    });
</script>


<script>
    const media01swiper = new Swiper('.media01swiper', {
        effect: 'coverflow',
        centeredSlides: true,
        loop:true,
        slidesPerView: 1.2, // 화면에 주 슬라이드 외에 조금씩 보이도록 설정
        spaceBetween: 10, // 슬라이드 사이 간격
        coverflowEffect: {
            rotate: 0, // 회전 없음
            stretch: 0, // 슬라이드 간 거리 조절 없음
            depth: 100, // 깊이 효과 강도
            modifier: 1, // 효과의 다양한 부분에 적용할 수치
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.media01swiper-next',
            prevEl: '.media01swiper-prev',
        },
    });
</script>


<!-- 일러스트 이미지 다운로드 -->
<script>
    document.getElementById('downloadButton-ill-p01').addEventListener('click', function() {
        // 다운로드할 이미지의 URL
        var imageUrl = '/images/ill-p01-down.jpg'; // 실제 이미지 경로로 변경하세요

        // a 태그를 생성하여 클릭 이벤트를 트리거
        var link = document.createElement('a');
            link.href = imageUrl;
            link.download = 'TalesRunnerRPG_keyvisual_01.jpg'; // 다운로드될 파일 이름
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
    });

    document.getElementById('downloadButton-ill-p02').addEventListener('click', function() {
        // 다운로드할 이미지의 URL
        var imageUrl = '/images/ill-p02-down.jpg'; // 실제 이미지 경로로 변경하세요

        // a 태그를 생성하여 클릭 이벤트를 트리거
        var link = document.createElement('a');
            link.href = imageUrl;
            link.download = 'TalesRunnerRPG_keyvisual_02.jpg'; // 다운로드될 파일 이름
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
    });

    document.getElementById('downloadButton-ill-p03').addEventListener('click', function() {
        // 다운로드할 이미지의 URL
        var imageUrl = '/images/ill-p03-down02.jpg'; // 실제 이미지 경로로 변경하세요

        // a 태그를 생성하여 클릭 이벤트를 트리거
        var link = document.createElement('a');
            link.href = imageUrl;
            link.download = 'TalesRunnerRPG_keyvisual_03.jpg'; // 다운로드될 파일 이름
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
    });

    document.getElementById('downloadButton-ill-p04').addEventListener('click', function() {
        // 다운로드할 이미지의 URL
        var imageUrl = '/images/ill-p04-down02.jpg'; // 실제 이미지 경로로 변경하세요

        // a 태그를 생성하여 클릭 이벤트를 트리거
        var link = document.createElement('a');
            link.href = imageUrl;
            link.download = 'TalesRunnerRPG_keyvisual_04.jpg'; // 다운로드될 파일 이름
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
    });
</script>


<!-- 공유하기 버튼 url복사 -->
<script>
    document.getElementById('illuslide-shareIcon01').addEventListener('click', function() {
        const link = 'https://trcbt.migoweb.co.kr/?medialink=1';
        
        // Create a temporary textarea to copy the link
        const textarea = document.createElement('textarea');
        textarea.value = link;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        
        // Show alert message
        alert('링크 복사가 완료되었습니다');
    });

    document.getElementById('illuslide-shareIcon02').addEventListener('click', function() {
        const link = 'https://trcbt.migoweb.co.kr/?medialink=2';
        
        // Create a temporary textarea to copy the link
        const textarea = document.createElement('textarea');
        textarea.value = link;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        
        // Show alert message
        alert('링크 복사가 완료되었습니다');
    });

    document.getElementById('illuslide-shareIcon03').addEventListener('click', function() {
        const link = 'https://trcbt.migoweb.co.kr/?medialink=3';
        
        // Create a temporary textarea to copy the link
        const textarea = document.createElement('textarea');
        textarea.value = link;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        
        // Show alert message
        alert('링크 복사가 완료되었습니다');
    });

    document.getElementById('illuslide-shareIcon04').addEventListener('click', function() {
        const link = 'https://trcbt.migoweb.co.kr/?medialink=4';
        
        // Create a temporary textarea to copy the link
        const textarea = document.createElement('textarea');
        textarea.value = link;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        
        // Show alert message
        alert('링크 복사가 완료되었습니다');
    });
</script>
<!-- ------------------------------------------------------------------ -->



<!-- 섹션 벗어날시 오디오 재생 정지 -->
<script>
const section2 = document.querySelector('#section2');
const observer = new MutationObserver((mutations) => {
  mutations.forEach((mutation) => {
    if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
      const targetElement = mutation.target;
    
      if (targetElement.classList.contains('inactive')) {
       
        const audioContainers = document.querySelectorAll('button.voicepbut audio');
        audioContainers.forEach(audio => {
          if (!audio.paused) { // 
            audio.pause(); // 
          }
        });
      }
    }
  });
});

observer.observe(section2, { attributes: true });

</script>


<!-- 상단 공유하기 아이콘 클릭 -->
<script>
    function copyUrl() {
    // 현재 페이지의 URL을 클립보드에 복사
    var dummy = document.createElement('textarea');
    document.body.appendChild(dummy);
    dummy.value = window.location.href;
    dummy.select();
    document.execCommand('copy');
    document.body.removeChild(dummy);

    // 경고창 표시
    alert('링크 복사가 완료되었습니다');
}
</script>

<script>
    function fncCBTCall(){
        gtag('event','user_reserve',{ 'event_label' : 'CBT신청',  });
        window.open('https://forms.gle/K5ZGEhNGmRsPeAxz9');
    }
</script>

<!-- 모달 동영상 정지 -->
<script>
    // 메인
    $('#intro-videoModal').on('hidden.bs.modal', function () {
            var iframe = document.getElementById('videoIframe-main');
            var iframeSrc = iframe.src;
            iframe.src = iframeSrc; 
    });
</script>

<!-- 화면 전환시 미디어 영상정지 -->
<script>
    function stopYouTubeVideos() {
            $('#section5 iframe').each(function() {
                const src = $(this).attr('src');
                $(this).attr('src', src);
            });
        }

        $(document).ready(function() {
            const targetNode = document.getElementById('section5');
            const config = { attributes: true, attributeFilter: ['class'] };

            const callback = function(mutationsList, observer) {
                for(let mutation of mutationsList) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                        if (!$(mutation.target).hasClass('active')) {
                            stopYouTubeVideos();
                        }
                    }
                }
            };
            const observer = new MutationObserver(callback);
            observer.observe(targetNode, config);
        });
</script>
