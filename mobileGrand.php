<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" as="style" crossorigin href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/static/pretendard.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/mobile/css/styleReservation.css">
    <link rel="stylesheet" href="/mobile/css/reset.css">
    <link href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>테일즈런너RPG, 지금 바로 다운로드!</title>

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
    <audio id="bgm" loop="">
        <source src="/mobile/music/mainbgm.wav" type="audio/wav">
    </audio>

    <div id="wrapper">
        <div id="contentbox">
            <!-- 탑메뉴 -->
            <div class="top">
                <div>
                    <div class="hamburger hd">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div>
                    <button class="toplogo bg"></button>
                </div>
                <div class="topRIght">
                    <button class="shareIcon bg" onclick="copyUrl(); return false;"></button>
                    <button class="radioBarbox paused">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </button>
                </div>
            </div>

            <!-- 컨텐츠 -->
            <div id="fullpage" class="bg2">
                <div class="whiteback"></div>
                <!-- 메인 화면 -->
                <div class="section bg2 active" id="section1">
                    <div class="sectionVideobg section01Bg">
                        <video id="storyVideo" muted="" autoplay="" playsinline="" loop="">
                            <source src="/mobile/video/resmain.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="section01Cotent">
                        <div class="indexLogo bg"></div>
                        <button class="indexVideobut bg" data-bs-toggle="modal" data-bs-target="#intro-videoModal" data-video="https://www.youtube.com/embed/lfURne7AlX0?si=P4P-I0M0v_Keq-Mt"></button>
                        <div class="maintxt">
                            <img src="/mobile/images/maintxt.png" alt="메인텍스트">
                        </div>
                        <div class="appbutBox">
                            <button onclick="alert('추후 오픈 예정입니다.');" class="reserGooglebut bg"></button>
                            <button onclick="alert('추후 오픈 예정입니다.');" class="reserApplebut bg"></button>
                        </div>
                        <div class="reser-indexScrolldown bg"></div>
                    </div>
                </div>


                <!-- 메뉴 화면 -->
                <div class="section bg2" id="section2">
                    <div class="sectionVideobg section02Bg">
                        <video loop muted autoplay playsinline>
                            <source src="/mobile/video/section02Bg.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="swiper menuSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <button id="btnToSection3" class="bg"></button>
                            </div>
                            <div class="swiper-slide">
                                <button id="btnToSection4" class="bg"></button>
                            </div>
                            <div class="swiper-slide">
                                <button id="btnToSection6" class="bg"></button>
                            </div>
                            <div class="swiper-slide">
                                <button id="btnToSection5" class="bg"></button>
                            </div>
                        </div>
                        <div class="swiper-pagination menuSwiper-pagination"></div>
                    </div>
                </div>


                <!-- 세게관 화면 -->
                <div class="section wordsection bg2" id="section3">
                    
                    <div class="swiper wordSwiper">
                        <div class="swiper-wrapper">

                            <!-- 스토리 -->
                            <div class="swiper-slide">
                                <div class="sectionVideobg section02Bg">
                                    <video id="storyVideo" muted autoplay playsinline loop>
                                        <source src="/mobile/video/section03Bg.mp4" type="video/mp4">
                                    </video>
                                </div>
                                <div class="word-storyContent">
                                    <div class="storyMun bg"></div>
                                    <div class="storyTitle bg"></div>
                                    <div class="storyoverBox" id="storyoverBox">
                                        <div class="wordTextcontent"  id="wordTextcontent">
                                            <p>
                                                이 세상의 모든 동화가 모이고<br>
                                                탄생하는 '동화나라'.<br>
                                                동화에서 나오는 꿈과 희망으로<br>
                                                에너지를 유지하는 이곳은<br>
                                                사람들이 동화책을 읽지 않자,<br>
                                                심각한 에너지 부족에 시달리게 된다.
                                            </p>
                                            <p>
                                                과거, 동화나라의 왕 앙리 3세는 이 문제에 관해 <br>
                                                깊게 고민한다.<br>
                                                그는 사람들이 동화 속을 달리며 <br>
                                                동심을 되찾을 수 있도록<br>
                                                달리기 대회를 개최해 <테일즈런너>들을 모집하며<br>
                                                어떤 소원이든 이루어주는 <소원의 돌>을<br>
                                                우승 상품으로 내걸게 되는데...
                                            </p>
                                            <p>
                                                동화나라 배 달리기 대회 폐막으로부터 10년 후.<br>
                                                당시 공주였던 '라라'가 여왕으로 즉위하고, <br>
                                                <테일즈 라이브러리>를 설립해 <br>
                                                동화를 더욱 효율적으로 관리할 수 있게 만들었다.
                                            </p>
                                            <p>
                                                그러나 그 평화는 오래가지 않았다.<br>
                                                원인 모를 이유로 <테일즈 라이브러리>에서 관리하던<br>
                                                이 세상 모든 동화가 모두 초기화되어 버리면서,<br>
                                                동화나라는 다시금 위기를 겪게 된다.
                                            </p>
                                            <p>
                                                그 무렵, 봉인되어있던 <소원의 돌>은<br>
                                                홀로 빛을 내기 시작했다.<br>
                                                이와 함께 세계 각지, 여러 차원의 사람들이<br>
                                                '소원을 이뤄준다'는 의문의 편지를 받으면서<br>
                                                동화나라로 하나둘씩 모여들기 시작한다.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- <button class="storyButton bg" data-bs-toggle="modal" data-bs-target="#story-videoModal"></button> -->
                                </div>
                            </div>
                            
                            <!-- 작가 -->
                            <div class="swiper-slide wordSwiperWriter">
                                <div class="wordSwiper-writer bg">
                                    <div class="word-storyContent">
                                        <div class="writerMun bg"></div>
                                        <div class="writerTitle bg"></div>
                                        <div class="writeroverBox" id="writeoverBox">
                                            <div class="wordTextcontent02"  id="wordTextcontent02">
                                                <p>
                                                    대한민국, 서울. <br>
                                                    불 꺼진 방. 쌓여있는 에너지 드링크. 널브러진 책.<br>
                                                    작가는 노트북 앞에 앉아 글을 쓴다.
                                                </p>
                                                <p>
                                                    어린 시절,<br>
                                                    자신의 쓴 글을 읽고 사람들이 꿈과 희망을 <br>
                                                    가지는 게 좋았다.<br>
                                                    그 감정은 동화를 쓰게 만드는 원동력이 되었고<br>
                                                    작가는 어린이 동화 작가로서 데뷔해 유명해진다.
                                                </p>
                                                <p>
                                                    그러나 성인이 된 지금.<br>
                                                    작가는 어두운 얼굴로 인세와 서평을 확인한다.<br>
                                                    판매량 부진의 탓을 표지 디자인으로 돌린다.
                                                </p>
                                                <p>
                                                    그는 문득 생각한다. <br>
                                                    글을 쓰는 게 더는 즐겁지 않다고.<br>
                                                    꿈과 희망 같은 것보다는, <br>
                                                    자신에게 떨어지는 수익과 유명 동화 작가로서의 <br>
                                                    명예가 더 중요했다.<br>
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
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- 스크롤 아이콘 -->
                    <div class="wordfixIcon bg"></div>

                </div>


                <!-- 등장인물 화면 -->
                <div class="section peoplesection bg2" id="section4">
                    <div style="width:100%; height:100%;">
                        <!-- 버튼 -->
                        <ul class="peopleNav nav nav-pills" id="pills-tab" role="tablist">
                            <!-- 테일즈런너 -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#pills-tale"  aria-selected="true">테일즈런너</button>
                            </li>
                            <!-- 소원의돌 -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-wish"  aria-selected="false">소원의돌</button>
                            </li>
                            <!-- 동화나라 -->
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-story"  aria-selected="false">동화나라</button>
                            </li>
                        </ul>
                        <div class=" tab-content" id="pills-tabContent">

                            <!-- 테일즈런너 -->
                            <div class="tab-pane show active" id="pills-tale" role="tabpanel">
                                <div class="pills-taleBg bg">
                                    <!-- 캐릭터 -->
                                    <div class="tale-characterbg tale-01">
                                        <img src="/mobile/images/people/tale-people0.png" alt="캐릭터">
                                    </div>
                                    <!-- 메인 이미지 슬라이더 -->
                                    <div class="main-taleContent upChangeClass">
                                        <div class="main-taleContent02">
                                            <div class="swiper-container main-tale">
                                                <div class="swiper-wrapper">

                                                    <!-- 초원 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-chowon bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 안영미</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/tale/chowon/Chowon_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/tale/chowon/Chowon_LobbyIdle1.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>21</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>173</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>육상선수</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>05월 02일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>52</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        대한민국 서울의 한국대학교 체육교육과 2학년.<br>
                                                                        체육 선생님을 꿈꾸는 평범한 대학생이다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        10년 전, 그저 달리는 것이 좋아 동화나라로 온 11살<br>
                                                                        아이.<br>
                                                                        달리기뿐만 아니라 모든 운동을 좋아했던 초원은<br>
                                                                        세월이 흘러 새로운 꿈을 찾아 새로운 꿈을 꾸고 있다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        어린 나이에 동화나라의 위기를 함께 극복했던 시간은<br>
                                                                        그에게 소중한 추억으로 남아있고, 늘 희망을 잃지 않는<br>
                                                                        동력이 되어주고 있다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 밍밍 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-mingming bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 김필진</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/tale/mingming/Mingming_PartyJoin0.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/tale/mingming/Mingming_Star3.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>20</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>156</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>액션배우</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>07월 29일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>44</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        어릴 때부터 촉망받는 아역배우였으며 지금은 세계적인<br>
                                                                        스타가 된 중국 출신의 배우.<br>
                                                                        특히 뛰어난 무술 실력으로, 스턴트맨 없이도 어려운 액션<br>
                                                                        연기를 소화해내기도 한다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        10년 전, 빨리 어른이 되어 다양한 배역을 맡고 싶다는<br>
                                                                        소원을 가지고 동화나라에 왔던 적이 있다.<br>
                                                                        그때 다른 친구들을 만나며 함께 역경을 이겨낸 경험이<br>
                                                                        좋은 추억으로 남아있다고 한다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 라라 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-lala bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 장예나</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/tale/lala/Lala_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/tale/lala/Lala_FriendshipUp0.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>23</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>163</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>동화나라 여왕</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>01월 31일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>46</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        동화나라의 여왕이자 기쁨의 힘을 가진 존재.<br>
                                                                        상냥하고 온화한 성품을 지녔고 모두에게 먼저 다가가는<br> 
                                                                        것을 좋아해, 여왕의 신분임에도 딱딱한 위계질서를 두는<br> 
                                                                        것을 싫어한다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        선대왕인 앙리 3세의 뒤를 이어 즉위한 지 몇 년 되지<br> 
                                                                        않았다.<br>
                                                                        그러나 앙리 3세의 행방에 대해 물어보면 왜인지<br> 
                                                                        함구하는 중.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 엘리스 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-elice bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 황창영</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/tale/smile/Elims_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/tale/smile/Elims_LobbyIdle0.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>40대 초반</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>193</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>아티팩터</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>08월 08일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>77</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        에너지가 깃든 도구를 만들어내는 과학자, '아티팩터'<br>
                                                                        과거 동화나라에 큰 전쟁이 일어났을 때 이를 저지하는데<br> 
                                                                        크게 기여했다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        어떤 사연 때문에 스마일 마스크를 쓰고다녔기에<br>
                                                                        엘림스 스마일이란 이름을 사용했다.<br>
                                                                        그러나 이제는 과거의 무게를 극복해, 그저 애착 물건으로<br>
                                                                        가지고 다니는 듯하다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        상당히 괴팍하고 직설적인 성격으로 때론 무례하게 보일<br>
                                                                        수 있다.<br>
                                                                        그러나 그의 능력과 천재성만큼은 모두가 인정하고 있다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 빅보 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-bigbo bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 김광국</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/tale/bigbo/Bigbo_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/tale/bigbo/Bigbo_LobbyIdle2.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>28</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>195</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>수의사</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>03월 03일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>105</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        강한 힘과 큰 덩치를 가졌지만, 마음씨만은 누구보다 <br>
                                                                        따뜻한 수의사. <br>
                                                                        어릴 적부터 작은 동물을 좋아해 돌봐주기를 좋아했다. <br>
                                                                        10년 전, 자신이 아끼는 앵무새 둥가가 병에 걸리면서 <br>
                                                                        그 병을 치료하기 위해 동화나라에 온 적이 있다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        동물 외에도 작고 약한 친구들을 도와주고 싶어한다. <br>
                                                                        힘쓰는 일에는 자신있어, 다시 동화나라가 위기에 처하자 <br>
                                                                        선뜻 돌아와 라라 여왕을 도와주기로 한다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 하루 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-haru bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 홍범기</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/tale/haru/Haru_PartyJoin0.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/tale/haru/Haru_Star4.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>불명</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>179</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>어둠의 군주</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>11월 11일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>66</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        태초의 테일즈랜드를 만든 빛, 그 이면의 어둠에서 태어난<br>
                                                                        소년.<br>
                                                                        어둠 세력의 수장이었으나 공동의 적을 물리치기 위해<br>
                                                                        일시적으로 테일즈랜드에 협력했던 적이 있다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        테일즈랜드가 평화를 되찾은 이후 행방이 묘연해졌으나<br>
                                                                        테일즈랜드에 짙은 어둠이 드리우자 힘을 되찾고 다시 <br>
                                                                        모습을 드러낸다.<br>
                                                                        무엇을 위해 나타난 건지는 아직 알 수 없다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="upPeoplebut main-taleupbut"></button>
                                    </div>

                                    <div class="thumbs-taleContent">
                                        <div class="thumbs-taleContent02">
                                            <!-- 썸네일 슬라이더 -->
                                            <div class="swiper-container thumbs-tale">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide onSum">
                                                        <div class="sumDiv bg tale-sum01"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg tale-sum02"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg tale-sum03"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg tale-sum04"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg tale-sum05"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg tale-sum06"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-prev thumbs-tale-prev"></div>
                                            <div class="swiper-button-next thumbs-tale-next"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 소원의돌 -->
                            <div class="tab-pane" id="pills-wish" role="tabpanel">
                                <div class="pills-wishBg bg">
                                    <!-- 캐릭터 -->
                                    <div class="wish-characterbg tale-01">
                                        <img src="/mobile/images/people/wish-people0.png" alt="캐릭터">
                                    </div>
                                    <!-- 메인 이미지 슬라이더 -->
                                    <div class="main-wishContent upChangeClass">
                                        <div class="main-wishContent02">
                                            <div class="swiper-container main-wish">
                                                <div class="swiper-wrapper">

                                                    <!-- 헬리아 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-helia bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 방시우</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/wish/helia/Helya_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/wish/helia/Helya_PartyJoin0.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>27</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>168</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>테일즈나이츠 단장</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>04월 18일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>50</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
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
                                                    </div>

                                                    <!-- 엘린 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-elien bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 이소은</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/wish/elien/Ellin_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/wish/elien/Ellin_PartyJoin0.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>14</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>147</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>수석 연금술사</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>05월 10일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>35</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        귀엽고 작은 체구, 천진한 어린아이 같아 보이지만<br>
                                                                        사실은 동화나라 최연소 수석 연금술사.<br>
                                                                        떠돌이 고아였던 그녀는 일찍이 동화나라 왕성에<br>
                                                                        거두어졌다.<br>
                                                                        그녀에겐 이미 앙리성이 고향이기도 하고, 여왕인 라라도<br>
                                                                        가족처럼 여기며 잘 따르고 있다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        연금술 중에서도 포션학 전공.<br>
                                                                        주로 사람들을 치유하거나 기운을 북돋우는 포션을<br>
                                                                        연구하고 있다.<br>
                                                                        포션 제조 외에도 기본적인 마법들도 익히고 있어<br>
                                                                        동화나라의 기사단 [테일즈 나이츠]와 함께 전투에<br>
                                                                        출전하기도 한다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        애교많고 아이 같은 말투로 아무것도 모른다는 인상을<br>
                                                                        주기 쉬우나 결정적인 순간, 논리적인 한 마디로 상대의<br>
                                                                        허를 찌르곤 한다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 세실리아 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-sesila bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 이소은</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/wish/sesilia/Cecilia_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/wish/sesilia/Cecilia_SkillB0.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>17</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>164</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>기억을 잃은 소녀</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>12월 07일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>46</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        자신의 이름 말고는 무엇도 기억하지 못하는 의문의 소녀.<br>
                                                                        어둠이 모여드는 등불을 항상 들고 다닌다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        무덤덤하고 차분한 성격에 말수도 적은 편이지만, 배려심<br> 
                                                                        많고 섬세해 다른 사람의 이야기에 곧잘 공감해 주며 주변<br> 
                                                                        사람들을 소중히 여기는 다정한 모습을 보이기도 한다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        어디에선가 '작가'를 본 적 있는 것 같다는데...
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 루시안 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-lusian bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 이경태</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/wish/lusian/Lucian_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/wish/lusian/Lucian_Star5.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>16</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>163</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>영원의 고통</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>12월 01일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>42</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        어릴 적부터 희귀병을 앓아 고통을 안고 살아가는 소년.<br>
                                                                        부유한 집안의 외동아들로 겉보기엔 온순한 도련님<br> 
                                                                        같지만, 병증이 심해질 때면 불안정한 모습을 가감 없이<br>  
                                                                        드러내 병원에서는 진료 기피 환자로 통하고 있다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        어떤 약도 진통제도 병증을 가라앉힐 수 없기에 자신이<br>  
                                                                        나을 수 없다면 타인이 함께 고통받기를 바랐고,<br>  
                                                                        테일즈랜드에 오기 전에도 자신이 느꼈던 고통을 타인과<br>  
                                                                        나누면 좋겠다는 소원을 빌었다고 한다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 아나스타샤 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-innistasha bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 장미</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/wish/innistasha/Anastasia_Go0.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/wish/innistasha/Anastasia_Star1.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>18</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>150</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>설산의 조사대원</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>06월 12일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>38</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        테일즈랜드 외곽 설산의 얼음 마창사.<br>
                                                                        테일즈랜드의 이변을 조사하기 위해 파견 나간<br>
                                                                        어머니로부터 연락이 끊기자 어머니의 행방을 찾아<br>
                                                                        테일즈랜드에 오게 되었다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        얼음 마녀였던 어머니의 영향으로 얼음 마법을 다룰 줄<br>
                                                                        알며, 무기로는 어머니가 떠날 적 남겨 주신 만년필을<br>
                                                                        사용한다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        무심한 듯 보이지만 은근히 장난기 많고 짓궂은 성격으로<br>
                                                                        어딘가 어설픈 경어를 쓰기도 한다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="upPeoplebut main-wishupbut"></button>
                                    </div>

                                    <div class="thumbs-wishContent">
                                        <div class="thumbs-wishContent02">
                                            <!-- 썸네일 슬라이더 -->
                                            <div class="swiper-container thumbs-wish">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide onSum">
                                                        <div class="sumDiv bg wish-sum01"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg wish-sum02"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg wish-sum04"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg wish-sum05"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg wish-sum06"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-prev thumbs-wish-prev"></div>
                                            <div class="swiper-button-next thumbs-wish-next"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 동화나라 -->
                            <div class="tab-pane" id="pills-story" role="tabpanel">
                                <div class="pills-storyBg bg">
                                    <!-- 캐릭터 -->
                                    <div class="story-characterbg tale-01">
                                        <img src="/mobile/images/people/story-people0.png" alt="캐릭터">
                                    </div>
                                    <!-- 메인 이미지 슬라이더 -->
                                    <div class="main-storyContent upChangeClass">
                                        <div class="main-storyContent02">
                                            <div class="swiper-container main-story">
                                                <div class="swiper-wrapper">

                                                    <!-- 엘리스 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-stelice bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 방시우</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/elice/Alice_Go0.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>22</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>165</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>정의의 용사</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>01월 05일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>48</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        치렁치렁한 프릴. 조용한 식사 시간.<br>
                                                                        고상한 예법과 아가씨다운 미소.<br>
                                                                        앨리스 플레전스에겐 그 모든 게 맞지 않는 드레스와<br>
                                                                        같았다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        그녀가 원하는 건 오직...스릴! 모험! 그리고 세계 제패!
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        그러던 중, 그녀가 이상한 나라 원더랜드로 오게 된 건<br>
                                                                        삶의 새로운 전환점과 같은 일이었다.
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
                                                    </div>

                                                    <!-- 그레텔 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-gretel bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 정유정</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/gretel/Gretel_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/gretel/Gretel_LobbyTouch1.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>13</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>148</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>파티셰(장래희망)</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>06월 22일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>37</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        숲 속의 가난한 오두막집에 사는 소녀.<br>
                                                                        오빠인 헨젤과는 둘도 없는(?) 관계.<br>
                                                                        겉보기엔 조용하고 얌전한 성격에 온순한 여동생...인듯<br> 
                                                                        보이지만... 그 이면에 숨겨진 영악함과 난폭함은<br>
                                                                        오직 헨젤만이 알고 있는 그레텔의 일면이다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        귀찮은 일은 오빠를 내세우지만, 그녀를 움직이게 하는<br> 
                                                                        것은 오직 '디저트'.<br>
                                                                        가난한 형편인지라 디저트를 원 없이 먹어보는 게<br> 
                                                                        소원이라고 한다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 체셔 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-chaser bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 정주원</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/chaser/CheshireCat_PartyJoin2.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/chaser/CheshireCat_LobbyIdle1.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>비밀♧</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>175</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>정체불명 고양이</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>02월 22일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>60</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        이상한 나라의 원더랜드에 살고 있는 정체불명의 고양이.<br>
                                                                        말투는 젠틀하지만 어딘지 장난스럽고 음흉한 구석이 <br>
                                                                        보인다.<br>
                                                                        본인이 유리할 때 나타났다가 불리할 때는 사라지는 등<br>
                                                                        종잡을 수 없는 성격이기도 하다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        원래는 신체도 고양이었지만, 주인을 만나면서 인간의<br> 
                                                                        몸으로 변신시켜주었다고 한다.<br>
                                                                        그러나 체셔캣으로서의 능력도 그대로 지니고 있어 몸<br> 
                                                                        일부나 전체를 투명화시킬 수 있다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 플레어 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-flare bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 김가령</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/flare/Flare_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/flare/Flare_Star5.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>17</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>160</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>서커스 단장</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>04월 20일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>47</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        플레어 서커스단의 단장.<br>
                                                                        인형들을 데리고 서커스단을 꾸리고 있으며, 귀여운<br> 
                                                                        외모와 화려한 스타성으로 매니아들을 몰고 다닌다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        단, 조금 뒤틀린 성격 때문에 귀여운 인형만 보면 이성을<br> 
                                                                        잃어버리며 어떻게든 가지려고 어린아이처럼 굴기도<br> 
                                                                        한다.<br>
                                                                        그녀의 인형에 대한 집착을 보고있으면 다소 섬뜩한<br> 
                                                                        기분이 들기도 한다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 브라이어 로즈 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-rose bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 김현지</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/rose/BriarRose_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/rose/BriarRose_LobbyTouch1.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>115</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>151</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>잠자는 공주</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>03월 17일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>40</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        잠자는 저주에 걸려 깊은 잠에 걸린 공주님.<br>
                                                                        그러나 원래 잠자는 것을 좋아해, 매사에 의욕 없고<br>
                                                                        무기력하다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        늘 잠이 부족해 하루에 대다수 시간을 수면으로 보낸다고<br> 
                                                                        한다.<br>
                                                                        수면의 품질을 몹시 중요하게 생각하기 때문에 늘 좋은<br> 
                                                                        침구와 수면 환경을 갖추려 노력한다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        막 깨어났을 때엔 매우 괴팍하고 성격이 좋지 않으니<br>
                                                                        주의.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 멜피 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-melphi bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 김가령</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/music/story/melphi/Malfi_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>알 수 없음</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>163</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>악몽의 요정</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>05월 30일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>51</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        [잠자는 숲 속의 공주] 동화 속, 악몽의 요정으로 불리는<br>
                                                                        검은 요정.<br>
                                                                        그녀의 지팡이에 달린 종소리를 들은 자는 누구든 잠에<br>
                                                                        빠진다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        그녀가 등장하는 곳엔 사람들의 꿈에 들어가 악몽을 꾸게<br>
                                                                        하는 '검은 양 떼'들이 항상 함께한다고 한다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        언제나 소극적이고 자신감 없는 그녀는 사랑받는 것에<br>
                                                                        익숙지 않다.<br>
                                                                        그래서인지 과대망상이나 집착을 하는 등 불안정한<br>
                                                                        모습을 보이기도 해, 주변 사람들에게 음침하다는<br>
                                                                        평가를 받곤 한다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 제페토 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-jepheto bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 방시우</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/jepheto/Zepeto_FiveStar.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/jepheto/Zepeto_LobbyIdle1.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>32</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>170</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>인형공방의 주인</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>07월 14일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>53</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        피노키오를 제작한 목수이자 목각인형 장인.<br>
                                                                        본업은 목수지만, 부업으로 목각 인형과 목공예품을<br>
                                                                        만드는 것에 더욱 몰두하고 있다.<br>
                                                                        상당히 정교하고 퀄리티가 높아 제페토가 만드는 인형을<br>
                                                                        사기 위해선 몇 개월을 기다려야 한다고...
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        완성도가 높을 수밖에 없는 이유는 따로 있다.<br>
                                                                        제페토가 굉장한 완벽주의자기 때문이다.<br>
                                                                        자신의 작품이 완벽하지 않으면 인정사정없으며, 고객이<br>
                                                                        괜찮다고 제발 팔아달라고 애원해도 절대 판매하지<br>
                                                                        않는다고.<br>
                                                                        그런 깐깐한 성격 탓에 차갑다고 오해받기 쉬운 타입이다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 샤샤 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-shasha bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 이새아</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/shasha/Sasha_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/shasha/Sasha_GetCharacter.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>8</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>130</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>빨간 두건</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>03월 30일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>29</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        빨간 두건을 두른 어린 소녀.<br>
                                                                        허무맹랑한 소리도 잘 믿고 잘 속을 만큼 순진무구한<br>
                                                                        성격.<br>
                                                                        상냥하고 활발하지만, 처음 보는 사람에겐 낯을 가리기도<br>
                                                                        한다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        작은 체구답지 않게 성인보다 많이 먹을 정도의<br>
                                                                        대식가지만,<br>
                                                                        맛있는 것은 함께 먹을 때 더 맛있다고 생각하기에 음식을<br> 
                                                                        나눠주거나 양보하는 것도 마다하지 않는다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 아이르 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-aero bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 김하루</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/iero/Aire_FriendshipUp1.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/iero/Aire_PartyJoin1.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>16</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>164</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>인어공주</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>10월 10일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>45</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        바닷속에서 금지옥엽 키워진 인어 공주님.<br>
                                                                        바다에 빠진 육지의 왕자를 구해준 후 첫눈에 반해,<br>
                                                                        자신도 인간의 다리를 얻어 육지로 올라가기로<br>
                                                                        마음먹는다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        공주님으로서 사랑받고 자라서인지 자존심이 강해<br>
                                                                        자신의 감정을 표현하는 데 서투르며 솔직하지 못하다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        비록 첫사랑은 좌절되었지만, 자신은 새로운 사랑을<br> 
                                                                        찾았으니 괜찮다는데...?
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 키스멧 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-kismet bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 이은조</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/kismet/Kismet_PartyJoin0.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/story/kismet/Kismet_LobbyTouch1.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>불명</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>173</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>예언가</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>01월 01일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>53</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        아득히 오랜 세월 바다를 지켜온 심해의 예언가.<br>    
                                                                        파도의 흐름으로 운명을 내다볼 수 있다.<br> 
                                                                        선과 악, 육지와 바다 그 누구의 편도 들지 않으며,<br> 
                                                                        예언서에 적힌 운명의 순리에 따르는 것을 섭리로 여긴다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        여유롭고 지적인 성격으로, 시대를 통달할 정도의 지식을 <br> 
                                                                        알고 있다.<br> 
                                                                        자신과 수준이 맞는 상대와 격 높은 대화를 나누는 것을 <br> 
                                                                        즐긴다고 한다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- 플로렌스 -->
                                                    <div class="swiper-slide">
                                                        <div class="d65">
                                                            <div class="upArea">
                                                                <div class="peopleName tale-name-florance bg"></div>
                                                            </div>
                                                            <div class="voicevideobox">
                                                                <!-- 녹음 -->
                                                                <div class="voicebox">
                                                                    <div class="voice-actordiv">
                                                                        <span>CV. 이보희</span>
                                                                    </div>
                                                                    <div class="voicebutbox">
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/wish/flolance/Florence_GetCharacter.wav"></audio>
                                                                        </button>
                                                                        <button class="voicepbut">
                                                                            <img class="voiceIcon" src="/mobile/images/people/voiceIcon.png" alt="녹음">
                                                                            <audio src="/mobile/music/wish/flolance/Florence_LobbyIdle1.wav"></audio>
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
                                                                            <img class="playIcon" src="/mobile/images/people/playIcon.png" alt="녹음">
                                                                        </button>
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                        <div class="ddmi">
                                                            <!-- 프로필 -->
                                                            <div>
                                                                <div class="profile-title profile-title-tale bg"></div>
                                                                <div class="profileUl-flex">
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span>나&nbsp;&nbsp;&nbsp;이</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>17</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>신&nbsp;&nbsp;&nbsp;장</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>160</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>직&nbsp;&nbsp;&nbsp;업</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>정원사</span>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="profileUl">
                                                                        <li>
                                                                            <span style="width:28px;">생&nbsp;&nbsp;&nbsp;일</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>02월 04일</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>몸무게</span>
                                                                            <div class="profilebar"></div>
                                                                            <span>44</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- 스토리 -->
                                                            <div class="storyBoxContent">
                                                                <div class="story-title story-title-tale bg"></div>
                                                                <div class="charastory-textarea storyword-textarea">
                                                                    <p class="faded-text">
                                                                        [겨울나무 숲에는 꽃이 핀다] 동화 속 여주인공.<br>
                                                                        꽃을 좋아하는 상냥하고 성실한 성격의 정원사지만,<br>
                                                                        아버지의 병을 고치기 위해 왕을 찾아가는 대담한 모습을 <br>
                                                                        보이기도 한다.
                                                                    </p>
                                                                    <p class="faded-text">
                                                                        들고 있는 물뿌리개는 어떤 꽃이든 피울 수 있는 마법의<br> 
                                                                        물건.<br>
                                                                        이를 이용해 화염꽃을 피워 겨울나무 숲의 못된 마녀를<br> 
                                                                        무찌르고 아버지의 병을 고친 현명한 주인공으로<br> 
                                                                        전해진다.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="upPeoplebut main-storyupbut"></button>
                                    </div>

                                    <div class="thumbs-storyContent">
                                        <div class="thumbs-storyContent02">
                                            <!-- 썸네일 슬라이더 -->
                                            <div class="swiper-container thumbs-story">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide onSum">
                                                        <div class="sumDiv bg story-sum01"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg story-sum02"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg story-sum03"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg story-sum04"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg story-sum05"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg story-sum06"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg story-sum07"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg story-sum08"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg story-sum09"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg story-sum10"></div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="sumDiv bg story-sum11"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-prev thumbs-story-prev"></div>
                                            <div class="swiper-button-next thumbs-story-next"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- 게임특징 화면 -->
                <div class="section peoplesection bg2" id="section6">
                    <div style="width:100%; height:100%;">
                        <div class="gametkContent bg">
                            <div class="gametekTitle bg"></div>
                            <div class="gametekslideContent">
                                <div id="carouselExampleIndicatorsGametek" class="carousel slide gametekslide">
                                    <div class="carousel-indicators gametek-num">
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsGametek" data-bs-slide-to="0" class="active bg" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsGametek" data-bs-slide-to="1" class="bg" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsGametek" data-bs-slide-to="2" class="bg" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsGametek" data-bs-slide-to="3" class="bg" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsGametek" data-bs-slide-to="4" class="bg" aria-label="Slide 5"></button>
                                    </div>
                                    <div class="carousel-indicators gametek-tabtitle">
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsGametek" data-bs-slide-to="0" class="active bg" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsGametek" data-bs-slide-to="1" class="bg" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsGametek" data-bs-slide-to="2" class="bg" aria-label="Slide 3"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsGametek" data-bs-slide-to="3" class="bg" aria-label="Slide 4"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicatorsGametek" data-bs-slide-to="4" class="bg" aria-label="Slide 5"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="gametekimgDiv">
                                                <img src="/mobile/images/gametek01.png" alt="세계관">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="gametekimgDiv">
                                                <img src="/mobile/images/gametek02.png" alt="캐릭터">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="gametekimgDiv">
                                                <img src="/mobile/images/gametek03.png" alt="전투">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="gametekimgDiv">
                                                <img src="/mobile/images/gametek04.png" alt="작가">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="gametekimgDiv">
                                                <img src="/mobile/images/gametek05.png" alt="하늘섬">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev bg" type="button" data-bs-target="#carouselExampleIndicatorsGametek" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next bg" type="button" data-bs-target="#carouselExampleIndicatorsGametek" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>                            
                                </div>     
                            </div>
                        </div>
                    </div>
                </div>


                <script>
            document.querySelectorAll('.carousel').forEach(function(carousel) {
                const indicatorsTab = carousel.querySelectorAll('.gametek-tabtitle button');
                const indicatorsNum = carousel.querySelectorAll('.gametek-num button');

                function synchronizeIndicators(index) {
                    indicatorsTab.forEach(function(button, i) {
                        button.classList.remove('active');
                    });
                    indicatorsNum.forEach(function(button, i) {
                        button.classList.remove('active');
                    });

                    // 이제 두 인디케이터를 동시에 활성화
                    indicatorsTab[index].classList.add('active');
                    indicatorsNum[index].classList.add('active');
                }

                indicatorsTab.forEach(function(button, index) {
                    button.addEventListener('click', function() {
                        $('#carouselExampleIndicatorsGametek').carousel(index); 
                        synchronizeIndicators(index);
                    });
                });

                indicatorsNum.forEach(function(button, index) {
                    button.addEventListener('click', function() {
                        $('#carouselExampleIndicatorsGametek').carousel(index); 
                        synchronizeIndicators(index);
                    });
                });

                carousel.addEventListener('slid.bs.carousel', function () {
                    const activeIndex = Array.from(carousel.querySelectorAll('.carousel-item')).findIndex(item => item.classList.contains('active'));
                    synchronizeIndicators(activeIndex);
                });
            });
        </script>

                <!-- 미디어 화면 -->
                <div class="section mediasection bg2" id="section5">
                    <div class="sectionVideobg section02Bg">
                        <video loop muted autoplay playsinline>
                            <source src="/mobile/video/section04Bg.mp4" type="video/mp4">
                        </video>
                    </div>
                    <!-- 타이틀 -->
                    <div class="mediaContent">
                        <div>
                            <div class="mediamun bg"></div>
                            <div class="mediaTitle bg"></div>
                        </div>
                        <div class="swiper mediaSwiper">
                            <div class="swiper-wrapper">
                                
                                <!-- 영상 -->
                                <div class="swiper-slide">
                                    <div class="swiper mediaVideoswiper">

                                        <div class="swiper-wrapper">
                                            <!-- 풀영상 -->
                                            <div class="swiper-slide">
                                                <div class="media01-videobox media01-video01 bg">
                                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/JjQDHZL5mZ8?si=bDmwC_GW2NKKKSCL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <!-- 30 -->
                                            <div class="swiper-slide">
                                                <div class="media01-videobox media01-video01 bg">
                                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/KjEYlo_1M30?si=N6HLbKqalNIjAjmc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <!-- 15 -->
                                            <div class="swiper-slide">
                                                <div class="media01-videobox media01-video01 bg">
                                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/PzjrF0oUSg4?si=8Ac_aN3fUbbMpVGG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <!-- 라라 -->
                                            <div class="swiper-slide">
                                                <div class="media01-videobox media01-video01 bg">
                                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wsxBuI_V0do?si=tqjcUkPfMm4UWkO1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="media01-videobox media01-video01 bg">
                                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/OA7v71f92aIsi=ZId26BWMPu2_ukiW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="media01-videobox media01-video01 bg">
                                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ZUq6rd-4wVksi=ZId26BWMPu2_ukiW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination mediaVideoswiper-paging"></div>

                                        <!-- If we need navigation buttons -->
                                        <div class="swiper-button-prev media01swiperArrow mediaVideoswiper-prev"></div>
                                        <div class="swiper-button-next media01swiperArrow mediaVideoswiper-next"></div>

                                    </div>
                                </div>

                                <!-- 미디어 -->
                                <div class="swiper-slide mediaSwiperWriter">
                                    <div class="swiper mediaVideoswiper02">

                                        <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                                <button data-bs-toggle="modal" data-bs-target="#img-downModal01">
                                                    <img class="w100" src="/mobile/images/mediaVideo02-01.png" alt="사진1">
                                                </button>
                                            </div>
                                            <div class="swiper-slide">
                                                <button data-bs-toggle="modal" data-bs-target="#img-downModal02">
                                                    <img class="w100" src="/mobile/images/mediaVideo02-02.png" alt="사진2">
                                                </button>
                                            </div>
                                            <div class="swiper-slide">
                                                <button data-bs-toggle="modal" data-bs-target="#img-downModal03">
                                                    <img class="w100" src="/mobile/images/mediaVideo02-03.png" alt="사진3">
                                                </button>
                                            </div>
                                            <div class="swiper-slide">
                                                <button data-bs-toggle="modal" data-bs-target="#img-downModal04">
                                                    <img class="w100" src="/mobile/images/mediaVideo02-04.png" alt="사진4">
                                                </button>
                                            </div>
                                            <div class="swiper-slide">
                                                <button data-bs-toggle="modal" data-bs-target="#img-downModal05">
                                                    <img class="w100" src="/mobile/images/mediaVideo02-05.png" alt="사진5">
                                                </button>
                                            </div>
                                            <div class="swiper-slide">
                                                <button data-bs-toggle="modal" data-bs-target="#img-downModal06">
                                                    <img class="w100" src="/mobile/images/mediaVideo02-06.png" alt="사진6">
                                                </button>
                                            </div>
                                        </div>

                                        <!-- If we need pagination -->
                                        <div class="swiper-pagination mediaVideoswiper-paging"></div>

                                        <!-- If we need navigation buttons -->
                                        <div class="swiper-button-prev media01swiperArrow mediaVideoswiper02-prev"></div>
                                        <div class="swiper-button-next media01swiperArrow mediaVideoswiper02-next"></div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- 스크롤 아이콘 -->
                    <div class="mediafixIcon bg"></div>
                </div>


                <!-- 쿠폰등록 화면 -->
                <div class="section peoplesection bg2" id="section7">
                    쿠폰등록
                </div>

                <!-- 메뉴컨텐츠 -->
                <div class="fllMenuContent-div">
                    <ul class="golink-ul">
                        <li>
                            <button id="MenubtnToSection3" class="wordlink wordlink-but">
                                <div class="glowarrow-left">
                                    <img style="width:26px;" src="/mobile/images/glowarrow-left.png" alt="왼쪽 화살">
                                </div>
                                <span>세계관</span>
                                <div class="glowarrow-right">
                                    <img style="width:26px;" src="/mobile/images/glowarrow-right.png" alt="오른쪽 화살">
                                </div>
                            </button>
                        </li>
                        <li>
                            <button id="MenubtnToSection4" class="peoplelink peoplelink-but">
                                <div class="glowarrow-left">
                                    <img style="width:26px;" src="/mobile/images/glowarrow-left.png" alt="왼쪽 화살">
                                </div>
                                <span>등장인물</span>
                                <div class="glowarrow-right">
                                    <img style="width:26px;" src="/mobile/images/glowarrow-right.png" alt="오른쪽 화살">
                                </div>
                            </button>
                        </li>
                        <li>
                            <button id="MenubtnToSection6" class="gamelink gamelink-but">
                                <div class="glowarrow-left">
                                    <img style="width:26px;" src="/mobile/images/glowarrow-left.png" alt="왼쪽 화살">
                                </div>
                                <span>게임 특징</span>
                                <div class="glowarrow-right">
                                    <img style="width:26px;" src="/mobile/images/glowarrow-right.png" alt="오른쪽 화살">
                                </div>
                            </button>
                        </li>
                        <li>
                            <button id="MenubtnToSection5" class="medialink medialink-but">
                                <div class="glowarrow-left">
                                    <img style="width:26px;" src="/mobile/images/glowarrow-left.png" alt="왼쪽 화살">
                                </div>
                                <span>미디어</span>
                                <div class="glowarrow-right">
                                    <img style="width:26px;" src="/mobile/images/glowarrow-right.png" alt="오른쪽 화살">
                                </div>
                            </button>
                        </li>
                        <li>
                            <button id="MenubtnToSection7" onclick="alert('추후 오픈 예정입니다.');" class="couponlink couponlink-but">
                                <div class="glowarrow-left">
                                    <img style="width:26px;" src="/mobile/images/glowarrow-left.png" alt="왼쪽 화살">
                                </div>
                                <span>쿠폰 등록</span>
                                <div class="glowarrow-right">
                                    <img style="width:26px;" src="/mobile/images/glowarrow-right.png" alt="오른쪽 화살">
                                </div>
                            </button>
                        </li>
                    </ul>
                    <div class="fllMenuContent-bottom">
                        <div class="bordermun bg"></div>
                        <span class="hanCommuspan">커뮤니티</span>
                        <div class="hamSnsbox">
                            <button onclick="location.href='https://www.youtube.com/@TalesRunnerRPG'" class="yotubebut bg"></button>
                            <button onclick="location.href='https://x.com/TalesRunnerRPG'" class="xbut bg"></button>
                            <button onclick="location.href='https://game.naver.com/lounge/TalesRunnerRPG/home'" class="naverbut bg"></button>
                        </div>
                        <button class="lounagebut bg" onclick="window.open('https://game.naver.com/lounge/TalesRunnerRPG/home')"></button>
                        <div class="borermun02 bg"></div>
                        <ul class="copyul">
                            <li>상호 : (주) 라온 엔터테인먼트  &nbsp;|&nbsp;  사업자등록번호 : 514-81-37077</li>
                            <li><span style="text-decoration: none !important;">Contact Us: talesrunner.rpg_support@rhaon.com</span></li>
                            <li>Copyright ⓒ RHAON Entertainment Corp. All Rights Reserved.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- 모달관련 -->
    <!-- ---------------------------------------------------- -->
    <!-- 인트로 영상 모달 -->
    <div class="modal fade videoModal" id="intro-videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content;">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="frameborder">
                        <iframe id="videoIframe-main" width="100%" height="100%" src="https://www.youtube.com/embed/PzjrF0oUSg4?si=6aFHXSdHsuUC1xGp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 세계관 영상 모달 -->
    <div class="modal fade videoModal" id="story-videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content;">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <button onclick="window.open('https://youtu.be/JjQDHZL5mZ8')">
                        <img style="width:100%; height:100%;" src="/mobile/images/wordvideo-sum.png" alt="예시">
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- 이미지 다운 모달01 -->
    <div class="modal fade imgdownModal" id="img-downModal01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content;">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="imgdownModal-imgbox">
                        <div>
                            <img style="width:100%; height:100%;" src="/mobile/images/img-downModal01.png" alt="예시">
                        </div>
                        <button id="illuslide-shareIcon01" class="imgSharebutton bg"></button>
                        <button id="downloadButton-ill-p01" class="imgDownbutton bg"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 이미지 다운 모달02 -->
    <div class="modal fade imgdownModal" id="img-downModal02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content;">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="imgdownModal-imgbox">
                        <div>
                            <img style="width:100%; height:100%;" src="/mobile/images/img-downModal02.png" alt="예시">
                        </div>
                        <button id="illuslide-shareIcon02" class="imgSharebutton bg"></button>
                        <button id="downloadButton-ill-p02" class="imgDownbutton bg"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 이미지 다운 모달03 -->
    <div class="modal fade imgdownModal" id="img-downModal03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content;">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="imgdownModal-imgbox">
                        <div>
                            <img style="width:100%; height:100%;" src="/mobile/images/img-downModal03.png" alt="예시">
                        </div>
                        <button id="illuslide-shareIcon03" class="imgSharebutton bg"></button>
                        <button id="downloadButton-ill-p03" class="imgDownbutton bg"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 이미지 다운 모달04 -->
    <div class="modal fade imgdownModal" id="img-downModal04" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content;">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="imgdownModal-imgbox">
                        <div>
                            <img style="width:100%; height:100%;" src="/mobile/images/img-downModal04.png" alt="예시">
                        </div>
                        <button id="illuslide-shareIcon04" class="imgSharebutton bg"></button>
                        <button id="downloadButton-ill-p04" class="imgDownbutton bg"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 이미지 다운 모달05 -->
    <div class="modal fade imgdownModal" id="img-downModal05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content;">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="imgdownModal-imgbox">
                        <div>
                            <img style="width:100%; height:100%;" src="/mobile/images/img-downModal05.png" alt="예시">
                        </div>
                        <button id="illuslide-shareIcon05" class="imgSharebutton bg"></button>
                        <button id="downloadButton-ill-p05" class="imgDownbutton bg"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 이미지 다운 모달06 -->
    <div class="modal fade imgdownModal" id="img-downModal06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content;">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="imgdownModal-imgbox">
                        <div>
                            <img style="width:100%; height:100%;" src="/mobile/images/img-downModal06.png" alt="예시">
                        </div>
                        <button id="illuslide-shareIcon06" class="imgSharebutton bg"></button>
                        <button id="downloadButton-ill-p06" class="imgDownbutton bg"></button>
                    </div>
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



<!-- 화면 전환 관련 -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var sections = document.querySelectorAll('.section');
        var currentSection = 0;
        var isTransitioning = false;
        var allowDirectTransition = false; // 직접 이동을 허용하는 플래그
        var whiteback = document.querySelector('.whiteback'); // whiteback 요소 선택

        function triggerWhitebackAnimation(callback) {
            whiteback.style.display = 'block'; // whiteback을 보이게 설정
            whiteback.style.animation = 'flashWhite 0.7s ease-in-out forwards'; // 애니메이션 적용
            setTimeout(callback, 300); // 애니메이션이 거의 끝나기 직전에 콜백 실행
        }

        function changeSection(next) {
            if (isTransitioning || next === currentSection) return;

            // 기존 섹션 이동 제한 조건
            if (currentSection === 1 && next === 2 && !allowDirectTransition) return;
            if ((currentSection === 2 || currentSection === 3 || currentSection === 4 || currentSection === 5 || currentSection === 6) && !allowDirectTransition) return;

            isTransitioning = true;
            allowDirectTransition = false;

            triggerWhitebackAnimation(() => {
                sections[currentSection].classList.remove('active');
                sections[next].classList.add('active');
                currentSection = next;
                setTimeout(() => {
                    isTransitioning = false;
                    whiteback.style.display = 'none'; // 애니메이션 완료 후 whiteback 숨기기
                }, 200); // 확실히 화면 전환이 완료된 후에 상태 초기화
            });
        }

        // `toplogo` 클래스 버튼 클릭 이벤트 리스너
        var topLogoButtons = document.querySelectorAll('.toplogo');
            topLogoButtons.forEach(button => {
            button.addEventListener('click', function() {
                // fllMenuContent-div에서 menuon 클래스 제거
                var menuDiv = document.querySelector('.fllMenuContent-div');
                if (menuDiv.classList.contains('menuon')) {
                    menuDiv.classList.remove('menuon');
                }

                // hamburger 에서 active 클래스 제거
                var menuDiv = document.querySelector('.hamburger');
                if (menuDiv.classList.contains('active')) {
                    menuDiv.classList.remove('active');
                }

                // section과 active 클래스를 모두 가진 요소에서 seDelete 클래스 제거
                var activeSections = document.querySelectorAll('.section.active');
                activeSections.forEach(section => {
                    if (section.classList.contains('seDelete')) {
                        section.classList.remove('seDelete');
                    }
                });

                // 기존 로직 유지
                allowDirectTransition = true;
                changeSection(0); // 1번 섹션(인덱스 0)으로 이동
            });
        });


        // 햄버거메뉴 세계관 버튼
        document.getElementById('MenubtnToSection3').addEventListener('click', function() {
            // 허용된 직접 전환을 true로 설정
            allowDirectTransition = true;

            // 3번 섹션으로 이동
            changeSection(2);

            // 'hamburger' 클래스를 가진 모든 div 찾기 및 클래스 제거
            const hamburgeronDivs = document.querySelectorAll('div.hamburger');
            hamburgeronDivs.forEach(function(div) {
                div.classList.remove('active');
            });

            // 'menuon' 클래스를 가진 모든 div 찾기 및 클래스 제거
            const menuonDivs = document.querySelectorAll('div.menuon');
            menuonDivs.forEach(function(div) {
                div.classList.remove('menuon');
            });

            // 'seDelete' 클래스를 가진 모든 div 찾기 및 클래스 제거
            const seDeleteDivs = document.querySelectorAll('div.seDelete');
            seDeleteDivs.forEach(function(div) {
                div.classList.remove('seDelete');
            });

            // 'butActive' 클래스를 가진 모든 요소 찾기 및 클래스 제거
            const buttonElements = document.querySelectorAll('.butActive');
            buttonElements.forEach(function(element) {
                element.classList.remove('butActive');
            });

            this.classList.add('butActive');

        });

        // 햄버거메뉴 등장인물 버튼
        document.getElementById('MenubtnToSection4').addEventListener('click', function() {
            // 허용된 직접 전환을 true로 설정
            allowDirectTransition = true;

            // 4번 섹션으로 이동
            changeSection(3);

            // 'hamburger' 클래스를 가진 모든 div 찾기 및 클래스 제거
            const hamburgeronDivs = document.querySelectorAll('div.hamburger');
            hamburgeronDivs.forEach(function(div) {
                div.classList.remove('active');
            });

            // 'menuon' 클래스를 가진 모든 div 찾기 및 클래스 제거
            const menuonDivs = document.querySelectorAll('div.menuon');
            menuonDivs.forEach(function(div) {
                div.classList.remove('menuon');
            });

            // 'seDelete' 클래스를 가진 모든 div 찾기 및 클래스 제거
            const seDeleteDivs = document.querySelectorAll('div.seDelete');
            seDeleteDivs.forEach(function(div) {
                div.classList.remove('seDelete');
            });

            // 'butActive' 클래스를 가진 모든 요소 찾기 및 클래스 제거
            const buttonElements = document.querySelectorAll('.butActive');
            buttonElements.forEach(function(element) {
                element.classList.remove('butActive');
            });

            this.classList.add('butActive');

        });

        // 햄버거메뉴 게임특징 버튼
        document.getElementById('MenubtnToSection6').addEventListener('click', function() {
            // 허용된 직접 전환을 true로 설정
            allowDirectTransition = true;

            // 4번 섹션으로 이동
            changeSection(4);

            // 'hamburger' 클래스를 가진 모든 div 찾기 및 클래스 제거
            const hamburgeronDivs = document.querySelectorAll('div.hamburger');
            hamburgeronDivs.forEach(function(div) {
                div.classList.remove('active');
            });

            // 'menuon' 클래스를 가진 모든 div 찾기 및 클래스 제거
            const menuonDivs = document.querySelectorAll('div.menuon');
            menuonDivs.forEach(function(div) {
                div.classList.remove('menuon');
            });

            // 'seDelete' 클래스를 가진 모든 div 찾기 및 클래스 제거
            const seDeleteDivs = document.querySelectorAll('div.seDelete');
            seDeleteDivs.forEach(function(div) {
                div.classList.remove('seDelete');
            });

            // 'butActive' 클래스를 가진 모든 요소 찾기 및 클래스 제거
            const buttonElements = document.querySelectorAll('.butActive');
            buttonElements.forEach(function(element) {
                element.classList.remove('butActive');
            });

            this.classList.add('butActive');

        });

        // 햄버거메뉴 미디어 버튼
        document.getElementById('MenubtnToSection5').addEventListener('click', function() {
            // 허용된 직접 전환을 true로 설정
            allowDirectTransition = true;

            // 5번 섹션으로 이동
            changeSection(5);

            // 'hamburger' 클래스를 가진 모든 div 찾기 및 클래스 제거
            const hamburgeronDivs = document.querySelectorAll('div.hamburger');
            hamburgeronDivs.forEach(function(div) {
                div.classList.remove('active');
            });

            // 'menuon' 클래스를 가진 모든 div 찾기 및 클래스 제거
            const menuonDivs = document.querySelectorAll('div.menuon');
            menuonDivs.forEach(function(div) {
                div.classList.remove('menuon');
            });

            // 'seDelete' 클래스를 가진 모든 div 찾기 및 클래스 제거
            const seDeleteDivs = document.querySelectorAll('div.seDelete');
            seDeleteDivs.forEach(function(div) {
                div.classList.remove('seDelete');
            });

            // 'butActive' 클래스를 가진 모든 요소 찾기 및 클래스 제거
            const buttonElements = document.querySelectorAll('.butActive');
            buttonElements.forEach(function(element) {
                element.classList.remove('butActive');
            });

            this.classList.add('butActive');

        });

        // 햄버거메뉴 쿠폰등록 버튼
        // document.getElementById('MenubtnToSection7').addEventListener('click', function() {
    
        //     allowDirectTransition = true;

        //     changeSection(6);

        //     const hamburgeronDivs = document.querySelectorAll('div.hamburger');
        //     hamburgeronDivs.forEach(function(div) {
        //         div.classList.remove('active');
        //     });

        //     const menuonDivs = document.querySelectorAll('div.menuon');
        //     menuonDivs.forEach(function(div) {
        //         div.classList.remove('menuon');
        //     });


        //     const seDeleteDivs = document.querySelectorAll('div.seDelete');
        //     seDeleteDivs.forEach(function(div) {
        //         div.classList.remove('seDelete');
        //     });

        //     const buttonElements = document.querySelectorAll('.butActive');
        //     buttonElements.forEach(function(element) {
        //         element.classList.remove('butActive');
        //     });

        //     this.classList.add('butActive');

        // });


        // 각 버튼 이벤트 리스너에 직접 이동 플래그 설정
        document.getElementById('btnToSection3').addEventListener('click', function() {
            allowDirectTransition = true;
            changeSection(2); // 3번 섹션으로 이동
        });
        document.getElementById('btnToSection4').addEventListener('click', function() {
            allowDirectTransition = true;
            changeSection(3); // 4번 섹션으로 이동
        });
        document.getElementById('btnToSection6').addEventListener('click', function() {
            allowDirectTransition = true;
            changeSection(4); // 4번 섹션으로 이동
        });
        document.getElementById('btnToSection5').addEventListener('click', function() {
            allowDirectTransition = true;
            changeSection(5); // 5번 섹션으로 이동
        });

        function isMenuOn() {
            return document.querySelector('.fllMenuContent-div').classList.contains('menuon');
        }

        function isModalShown() {
            return document.querySelectorAll('.modal.show').length > 0;
        }


    window.addEventListener('wheel', function(event) {
        if (isMenuOn() || isModalShown()) {
            event.preventDefault(); // 스크롤 기능 제한
        } else if (!allowDirectTransition && (currentSection === 1 && event.deltaY > 0)) {
            return;
        } else {
            var deltaY = event.deltaY;
            if (deltaY > 0) {
                changeSection(Math.min(sections.length - 1, currentSection + 1));
            } else if (deltaY < 0) {
                changeSection(Math.max(0, currentSection - 1));
            }
        }
    });

    var startY;
    window.addEventListener('touchstart', function(event) {
        if (!isMenuOn() && !isModalShown()) {
            startY = event.touches[0].clientY;
        }
    }, false);

    window.addEventListener('touchend', function(event) {
        if (!isMenuOn() && !isModalShown()) {
            var endY = event.changedTouches[0].clientY;
            var deltaY = startY - endY;

            if (currentSection === 1) {
                if (deltaY < -30) {
                    changeSection(Math.max(0, currentSection - 1));
                }
            } else {
                if (deltaY > 30) {
                    changeSection(Math.min(sections.length - 1, currentSection + 1));
                } else if (deltaY < -30) {
                    changeSection(Math.max(0, currentSection - 1));
                }
            }
        }
    }, false);

    var observerModal = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    if (isModalShown()) {
                        document.body.style.overflow = 'hidden';
                    } else {
                        document.body.style.overflow = '';
                    }
                }
            });
        });

        var modals = document.querySelectorAll('.modal');
            modals.forEach(function(modal) {
                observerModal.observe(modal, { attributes: true });
        });
    
    });


    // url 미디어 추가
    <?php
    if($_GET['medialink']!=""){
    ?>
    $(window).load(function(){
        $("#MenubtnToSection5").trigger("click");
        mediaSwiper.slideTo(1);
        mediaVideoswiper02.slideTo(<?=$_GET['medialink']-1?>);
    });
    <?php
    }
    ?>
</script>

<!-- 탑메뉴 스크립트 -->
<!-- ---------------------------------------------- -->
<script>
    document.querySelector('.hamburger').addEventListener('click', function() {
        this.classList.toggle('active');

        document.querySelectorAll('.section.active').forEach(function(div) {
            div.classList.toggle('seDelete');
        });

        document.querySelectorAll('.fllMenuContent-div').forEach(function(div) {
            div.classList.toggle('menuon');
        });

    });
 // 오디오 요소와 버튼을 선택합니다.
    const audio = document.getElementById('bgm');
    const button = document.querySelector('.radioBarbox');

    // 버튼 클릭 이벤트 리스너를 추가합니다.
    button.addEventListener('click', function() {
        // 클래스 'paused'의 존재 여부에 따라 오디오 재생 상태를 토글합니다.
        if (audio.paused) {
            audio.play();
            this.classList.remove('paused');
        } else {
            audio.pause();
            this.classList.add('paused');
        }
    });
</script>


<!-- 햄버거 메뉴에서 상황별 세계관 효과 온오프 -->
<script>
    const wordsection = document.querySelector('.wordsection');

    // wordlink 클래스를 가진 모든 div 요소를 선택
    const wordlinks = document.querySelectorAll('.wordlink');

    // Observer 인스턴스를 생성하고, 변화를 감지할 콜백 함수를 정의
    const observer = new MutationObserver(mutations => {
        mutations.forEach(mutation => {
            if (mutation.attributeName === 'class') {
            const target = mutation.target;
            if (target.classList.contains('active')) {
                // wordsection이 active 클래스를 갖고 있을 경우
                // 모든 wordlink 요소에 butActive 클래스를 추가
                wordlinks.forEach(wordlink => {
                wordlink.classList.add('butActive');
                });
            } else {
                // active 클래스가 제거되면 butActive 클래스도 제거
                wordlinks.forEach(wordlink => {
                wordlink.classList.remove('butActive');
                });
            }
            }
        });
    });

    // observer를 설정하고, class 속성의 변화를 감지
    observer.observe(wordsection, { attributes: true, attributeFilter: ['class'] });
</script>

<!-- 햄버거 메뉴에서 상황별 등장인물 효과 온오프 -->
<script>
    const peoplesection = document.querySelector('.peoplesection');

    // peoplelink 클래스를 가진 모든 div 요소를 선택
    const peoplelinks = document.querySelectorAll('.peoplelink');

    // Observer 인스턴스를 생성하고, 변화를 감지할 콜백 함수를 정의
    const observer02 = new MutationObserver(mutations => {
        mutations.forEach(mutation => {
            if (mutation.attributeName === 'class') {
            const target = mutation.target;
            if (target.classList.contains('active')) {
                // peoplesection active 클래스를 갖고 있을 경우
                // 모든 wordlink 요소에 butActive 클래스를 추가
                peoplelinks.forEach(peoplelink => {
                peoplelink.classList.add('butActive');
                });
            } else {
                // active 클래스가 제거되면 butActive 클래스도 제거
                peoplelinks.forEach(peoplelink => {
                peoplelink.classList.remove('butActive');
                });
            }
            }
        });
    });

    // observer를 설정하고, class 속성의 변화를 감지
    observer02.observe(peoplesection, { attributes: true, attributeFilter: ['class'] });
</script>

<!-- 햄버거 메뉴에서 상황별 미디어 효과 온오프 -->
<script>
    const mediasection = document.querySelector('.mediasection');

    // peoplelink 클래스를 가진 모든 div 요소를 선택
    const medialinks = document.querySelectorAll('.medialink');

    // Observer 인스턴스를 생성하고, 변화를 감지할 콜백 함수를 정의
    const observer03 = new MutationObserver(mutations => {
        mutations.forEach(mutation => {
            if (mutation.attributeName === 'class') {
            const target = mutation.target;
            if (target.classList.contains('active')) {
                // mediasection active 클래스를 갖고 있을 경우
                // 모든 medialink 요소에 butActive 클래스를 추가
                medialinks.forEach(medialink => {
                medialink.classList.add('butActive');
                });
            } else {
                // active 클래스가 제거되면 butActive 클래스도 제거
                medialinks.forEach(medialink => {
                medialink.classList.remove('butActive');
                });
            }
            }
        });
    });

    // observer를 설정하고, class 속성의 변화를 감지
    observer03.observe(mediasection, { attributes: true, attributeFilter: ['class'] });
</script>


<!-- 메뉴 스크립트 -->
<!-- ---------------------------------------------- -->
<script>
    var menuSwiper = new Swiper(".menuSwiper", {
        effect: "coverflow",
        grabCursor: true,
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: "auto",
        initialSlide: 1, // 초기 상태를 두 번째 슬라이드로 설정
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
    },
    pagination: {
        el: ".menuSwiper-pagination",
        type: 'progressbar',
    },
    on: {
        init: function() {
            this.pagination.render();
            this.pagination.update();

            var progressBarFill = document.querySelector('.swiper-pagination-progressbar-fill');
            if (progressBarFill) {
                progressBarFill.style.transform = 'scaleX(0.33)'; // 초기 프로그래스바를 세 번째 슬라이드에 맞게 설정
            }

            var newClassDiv = document.querySelector('.new-class');
            if (newClassDiv) {
                newClassDiv.style.left = `calc(67% - ${newClassDiv.offsetWidth / 2}px)`; // 'new-class' 요소 위치 초기 설정
            }
        },
        slideChange: function() {
            let scale = 0;
            if (this.activeIndex === 1) {
                scale = 0.33;
            } else if (this.activeIndex === 2) {
                scale = 0.67;
            } else if (this.activeIndex === 3) {
                scale = 1;
            }

            var progressBarFill = document.querySelector('.swiper-pagination-progressbar-fill');
            if (progressBarFill) {
                progressBarFill.style.transform = `scaleX(${scale})`;
            }

            var newClassDiv = document.querySelector('.new-class');
            if (newClassDiv) {
                newClassDiv.style.left = `calc(${scale * 100}% - 0px)`;
            }
        }
    },
});
menuSwiper.init();
    
</script>


<script>
    var paginationContainer = document.querySelector('.swiper-pagination.menuSwiper-pagination');

    var newDiv = document.createElement('div');
    newDiv.classList.add('new-class'); // 예를 들어 'new-class'라는 클래스를 추가

    paginationContainer.appendChild(newDiv);
</script>


<!-- 세계관 스크립트 -->
<!-- ---------------------------------------------- -->
<script>
    const wordSwiper = new Swiper('.wordSwiper', {
        direction: 'vertical',
        loop: false,
        speed: 500,
        mousewheel: {
            enabled: true,
            eventsTarged: '.swiper-container',
        },
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiperWriter = document.querySelector('.wordSwiperWriter');
        const fixIcon = document.querySelector('.wordfixIcon'); // wordfixIcon 클래스를 가진 요소 선택

        // MutationObserver를 사용하여 클래스 변화를 감지
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(mutation => {
                if (mutation.attributeName === 'class') {
                    if (swiperWriter.classList.contains('swiper-slide-active')) {
                        fixIcon.style.backgroundImage = 'url("/mobile/images/word-scrollUp.png")'; // 변경할 이미지 경로
                    } else {
                        fixIcon.style.backgroundImage = 'url("/mobile/images/word-scrollDown.png")'; // 원래 이미지 경로로 복구
                    }
                }
            });
        });

        observer.observe(swiperWriter, {
            attributes: true // 속성 변화만 감시
        });
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

<!-- 글씨 스크롤 1-->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuButton = document.getElementById("MenubtnToSection3");
        const box = document.getElementById("storyoverBox");
        const content = document.getElementById("wordTextcontent");
        let scrollPosition = 0;
        const scrollSpeed = 0.2; 
        let scrolling = false;

        function startAutoScroll() {
            if (!scrolling) {
                scrolling = true;
                scrollContent();
            }
        }

        function scrollContent() {
            scrollPosition += scrollSpeed;
            if (scrollPosition >= content.scrollHeight - box.clientHeight) {
                scrollPosition = content.scrollHeight - box.clientHeight; 
                setTimeout(() => {
                    scrollPosition = 0; 
                    if (scrolling) {
                        requestAnimationFrame(scrollContent);
                    }
                }, 2000); 
                return;
            }
            box.scrollTop = scrollPosition;
            if (scrolling) {
                requestAnimationFrame(scrollContent);
            }
        }

        const observer = new MutationObserver((mutationsList, observer) => {
            for (const mutation of mutationsList) {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    if (menuButton.classList.contains('butActive')) {
                        setTimeout(startAutoScroll, 2000); 
                    } else {
                        scrolling = false; 
                    }
                }
            }
        });

        observer.observe(menuButton, { attributes: true });

        menuButton.addEventListener('click', () => {
            menuButton.classList.toggle('butActive');
        });

        box.addEventListener('touchstart', () => {
            scrolling = false;
        });

        box.addEventListener('touchend', () => {
            if (menuButton.classList.contains('butActive')) {
                startAutoScroll();
            }
        });
    });
</script>

<!-- 글씨 스크롤 2-->
<script >
    document.addEventListener("DOMContentLoaded", function() {
        const menuButton02 = document.getElementById("MenubtnToSection3");
        const box02 = document.getElementById("writeoverBox");
        const content02 = document.getElementById("wordTextcontent02");
        let scrollPosition = 0;
        const scrollSpeed = 0.2; 
        let scrolling = false;

        function startAutoScroll() {
            if (!scrolling) {
                scrolling = true;
                scrollContent();
            }
        }

        function scrollContent() {
            scrollPosition += scrollSpeed;
            if (scrollPosition >= content02.scrollHeight - box02.clientHeight) {
                scrollPosition = content02.scrollHeight - box02.clientHeight; 
                setTimeout(() => {
                    scrollPosition = 0; 
                    if (scrolling) {
                        requestAnimationFrame(scrollContent);
                    }
                }, 2000); 
                return;
            }
            box02.scrollTop = scrollPosition;
            if (scrolling) {
                requestAnimationFrame(scrollContent);
            }
        }

        const observer02 = new MutationObserver((mutationsList, observer02) => {
            for (const mutation of mutationsList) {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    if (menuButton02.classList.contains('butActive')) {
                        setTimeout(startAutoScroll, 2000); 
                    } else {
                        scrolling = false; 
                    }
                }
            }
        });

        observer02.observe(menuButton02, { attributes: true });

        menuButton02.addEventListener('click', () => {
            menuButton02.classList.toggle('butActive');
        });

        box02.addEventListener('touchstart', () => {
            scrolling = false;
        });

        box02.addEventListener('touchend', () => {
            if (menuButton02.classList.contains('butActive')) {
                startAutoScroll();
            }
        });
    });
</script>


<!-- 등장인물 스크립트 -->
<!-- ---------------------------------------------- -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var tabs = document.querySelectorAll('button[data-bs-toggle="pill"]');
        var navLinks = document.querySelectorAll('.nav-link');

        // 초기 활성화 상태에 따라 적절한 클래스를 모든 nav-link에 추가
        function applyInitialClass() {
            if (document.getElementById('pills-tale').classList.contains('active')) {
                navLinks.forEach(function(link) {
                    link.classList.add('tale-button');
                });
            } else if (document.getElementById('pills-wish').classList.contains('active')) {
                navLinks.forEach(function(link) {
                    link.classList.add('wish-button');
                });
            } else if (document.getElementById('pills-story').classList.contains('active')) {
                navLinks.forEach(function(link) {
                    link.classList.add('story-button');
                });
            }
        }

        applyInitialClass(); // 초기 클래스 적용

        // 탭 변경시 클래스 동적으로 추가 및 제거
        tabs.forEach(function(tab) {
            tab.addEventListener('shown.bs.tab', function(event) {
                var activeTabId = event.target.getAttribute('data-bs-target');

                // 모든 nav-link 클래스를 가진 버튼에서 기존 클래스 제거
                navLinks.forEach(function(link) {
                    link.classList.remove('tale-button', 'wish-button', 'story-button');
                });

                // 활성화된 탭에 따라 적절한 클래스 추가
                if (activeTabId === '#pills-tale') {
                    navLinks.forEach(function(link) {
                        link.classList.add('tale-button');
                    });
                } else if (activeTabId === '#pills-wish') {
                    navLinks.forEach(function(link) {
                        link.classList.add('wish-button');
                    });
                } else if (activeTabId === '#pills-story') {
                    navLinks.forEach(function(link) {
                        link.classList.add('story-button');
                    });
                }
            });
        });
    });
</script>


<script>
    // 테일즈런너 탭의 썸네일 슬라이더와 메인 슬라이더 초기화 및 이벤트 처리
    const thumbstale = new Swiper('.thumbs-tale', {
        spaceBetween: 10,
        slidesPerView: 4,
        watchSlidesProgress: true,
        slideToClickedSlide: false,
        navigation: {
            nextEl: '.thumbs-tale-next',
            prevEl: '.thumbs-tale-prev',
        },

    });

    const maintale = new Swiper('.main-tale', {
        spaceBetween: 10,
        allowTouchMove: false, // 드래그로 슬라이드 변경 금지
        slideToClickedSlide: false,
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

    thumbstale.on('click', function(swiper) {
    const clickedIndex = swiper.clickedIndex;
        if (clickedIndex !== undefined) {
            maintale.slideTo(clickedIndex);
            var newImageUrl = '/mobile/images/people/tale-people' + clickedIndex + '.png';
            var newClass = 'tale-0' + (clickedIndex + 1);

            // 테일즈런너 탭의 이미지 및 클래스 경로 업데이트
            var characterBgDiv = document.querySelector('.tale-characterbg');
            var characterBgImg = characterBgDiv.querySelector('img');

            // 새 이미지 로드를 위한 준비
            var tempImage = new Image(); // 임시 이미지 객체 생성
            tempImage.onload = function() {
                // 페이드 아웃
                characterBgImg.style.opacity = 0;

                // 페이드 아웃이 끝나고 이미지와 클래스를 업데이트
                setTimeout(function() {
                    characterBgDiv.className = 'tale-characterbg ' + newClass; // 클래스 업데이트
                    characterBgImg.src = newImageUrl;
                    characterBgImg.style.opacity = 1; // 페이드 인
                }, 300); // 페이드 아웃 지속 시간에 맞춰 지연
            };
            tempImage.src = newImageUrl;

            // 기존의 'onSum' 클래스를 모든 썸네일 슬라이드에서 제거
            document.querySelectorAll('.thumbs-tale .swiper-slide').forEach(function(slide) {
                slide.classList.remove('onSum');
            });

            // 현재 클릭된 슬라이드에 'onSum' 클래스 추가
            swiper.slides[clickedIndex].classList.add('onSum');
        }
    });

    // 소원의돌 탭의 썸네일 슬라이더와 메인 슬라이더 초기화 및 이벤트 처리
    const thumbswish = new Swiper('.thumbs-wish', {
        spaceBetween: 10,
        slidesPerView: 4,
        watchSlidesProgress: true,
        slideToClickedSlide: false,
        navigation: {
            nextEl: '.thumbs-wish-next',
            prevEl: '.thumbs-wish-prev',
        },
    });

    const mainwish = new Swiper('.main-wish', {
        spaceBetween: 10,
        allowTouchMove: false, // 드래그로 슬라이드 변경 금지
        slideToClickedSlide: false,
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

    thumbswish.on('click', function(swiper) {
        const clickedIndex = swiper.clickedIndex;
        if (clickedIndex !== undefined) {
            mainwish.slideTo(clickedIndex);
            var newImageUrl02 = '/mobile/images/people/wish-people' + clickedIndex + '.png';
            var newClass = 'tale-0' + (clickedIndex + 1);

            // 테일즈런너 탭의 이미지 경로 업데이트를 위한 요소 선택
            var characterBgDiv = document.querySelector('.wish-characterbg');
            var characterBgImg = characterBgDiv.querySelector('img');

            // 새 이미지 로드를 위한 준비
            var tempImage = new Image();  // 임시 이미지 객체 생성
            tempImage.onload = function() {
                // 페이드 아웃
                characterBgImg.style.opacity = 0;

                // 페이드 아웃이 끝나고 이미지와 클래스를 업데이트
                setTimeout(function() {
                    characterBgDiv.className = 'wish-characterbg ' + newClass; // 클래스 업데이트
                    characterBgImg.src = newImageUrl02;
                    characterBgImg.style.opacity = 1; // 페이드 인
                }, 300); // 
            };
            tempImage.src = newImageUrl02;

            document.querySelectorAll('.thumbs-wish .swiper-slide').forEach(function(slide) {
                slide.classList.remove('onSum');
            });

            swiper.slides[clickedIndex].classList.add('onSum');
        }
    });


    // 동화나라 탭의 썸네일 슬라이더와 메인 슬라이더 초기화 및 이벤트 처리
    const thumbsstory = new Swiper('.thumbs-story', {
        spaceBetween: 10,
        slidesPerView: 4,
        watchSlidesProgress: true,
        slideToClickedSlide: false,
        navigation: {
            nextEl: '.thumbs-story-next',
            prevEl: '.thumbs-story-prev',
        },
    });

    const mainstory = new Swiper('.main-story', {
        spaceBetween: 10,
        allowTouchMove: false, // 드래그로 슬라이드 변경 금지
        slideToClickedSlide: false,
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

    thumbsstory.on('click', function(swiper) {
        const clickedIndex = swiper.clickedIndex;
        if (clickedIndex !== undefined) {
            mainstory.slideTo(clickedIndex);
            var newImageUrl03 = '/mobile/images/people/story-people' + clickedIndex + '.png';
            var newClass = 'tale-0' + (clickedIndex + 1);

            // 테일즈런너 탭의 이미지 경로 업데이트를 위한 요소 선택
            var characterBgDiv = document.querySelector('.story-characterbg');
            var characterBgImg = characterBgDiv.querySelector('img');

            // 새 이미지 로드를 위한 준비
            var tempImage = new Image();  // 임시 이미지 객체 생성
            tempImage.onload = function() {
                // 페이드 아웃
                characterBgImg.style.opacity = 0;

                // 페이드 아웃이 끝나고 이미지와 클래스를 업데이트
                setTimeout(function() {
                    characterBgDiv.className = 'story-characterbg ' + newClass; // 클래스 업데이트
                    characterBgImg.src = newImageUrl03;
                    characterBgImg.style.opacity = 1; // 페이드 인
                }, 300); // 페이드 아웃 지속 시간에 맞춰 지연
            };
            tempImage.src = newImageUrl03;

            // 기존의 'onSum' 클래스를 모든 슬라이드에서 제거
            document.querySelectorAll('.thumbs-story .swiper-slide').forEach(function(slide) {
                slide.classList.remove('onSum');
            });

            // 현재 클릭된 슬라이드에 'onSum' 클래스 추가
            swiper.slides[clickedIndex].classList.add('onSum');
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ddmi = document.querySelectorAll('.ddmi');
        var contentAreas = document.querySelectorAll('.main-taleContent, .main-wishContent, .main-storyContent'); // 수정된 부분
        var upChangeDiv = document.querySelectorAll('.upChangeClass');
        var upPeoplebut = document.querySelectorAll('.upPeoplebut'); // 수정된 부분

        ddmi.forEach(function(element) {
            element.style.height = '0px'; // 모든 ddmi 숨김
        });
        contentAreas.forEach(function(element) { // 수정된 부분
            element.style.height = '73px'; // 모든 contentAreas 높이 줄임
        });

        function toggleElements() {
            ddmi.forEach(function(element) {
                if (element.style.height === '0px') {
                    element.style.height = '174px'; // ddmi를 펼침
                } else {
                    element.style.height = '0px'; // ddmi의 높이를 0으로 만들어 다시 숨김
                }
            });
            contentAreas.forEach(function(element) { // 수정된 부분
                if (element.style.height === '73px') {
                    element.style.height = '247px'; // contentAreas의 원래 높이로 복원
                } else {
                    element.style.height = '73px'; // contentAreas의 높이를 줄임
                }
            });
            upChangeDiv.forEach(function(element) {
                element.classList.toggle('downIconChange'); // downIconChange 클래스 토글
            });
            upPeoplebut.forEach(function(element) {
                element.classList.toggle('arrowbgChange'); // arrowbgChange 클래스 토글
            });
        }

        document.querySelectorAll('.upArea').forEach(function(upArea) {
            upArea.addEventListener('click', toggleElements);
        });

        upPeoplebut.forEach(function(element) {
            element.addEventListener('click', toggleElements);
        });
    });
</script>

</script>
<!-- 미디어 스크립트 -->
<!-- ---------------------------------------------- -->
<script>
    const mediaSwiper = new Swiper('.mediaSwiper', {
        direction: 'vertical',
        loop: false,
        speed: 500,
        mousewheel: {
            enabled: true,
            eventsTarged: '.swiper-container',
        },
    });

    // 영상
    const mediaVideoswiper = new Swiper('.mediaVideoswiper', {
        direction: 'horizontal',
        loop: false,
        speed: 500,
        spaceBetween: 5,
        navigation: {
            nextEl: '.mediaVideoswiper-next',
            prevEl: '.mediaVideoswiper-prev',
        },
        pagination: {
            el: '.swiper-pagination',
        },
        on: {
        slideChangeTransitionEnd: function () {
            this.update();
        },
    },
    });

    // 일러스트
    const mediaVideoswiper02 = new Swiper('.mediaVideoswiper02', {
        direction: 'horizontal',
        loop: false,
        speed: 500,
        spaceBetween: 5,
        navigation: {
            nextEl: '.mediaVideoswiper02-next',
            prevEl: '.mediaVideoswiper02-prev',
        },
        pagination: {
            el: '.swiper-pagination',
        },
        on: {
            slideChangeTransitionEnd: function () {
                this.update();
            },
            
        },
    });


    // 아이콘 변경
    document.addEventListener('DOMContentLoaded', function() {
        const mediaSwiperChange = document.querySelector('.mediaSwiperWriter');
        const fixIconChange = document.querySelector('.mediafixIcon'); // wordfixIcon 클래스를 가진 요소 선택

        // MutationObserver를 사용하여 클래스 변화를 감지
        const observerChange = new MutationObserver(function(mutations) {
            mutations.forEach(mutation => {
                if (mutation.attributeName === 'class') {
                    if (mediaSwiperChange.classList.contains('swiper-slide-active')) {
                        fixIconChange.style.backgroundImage = 'url("/mobile/images/mediafixIcon-up.png")'; // 변경할 이미지 경로
                    } else {
                        fixIconChange.style.backgroundImage = 'url("/mobile/images/mediafixIcon-down.png")'; // 원래 이미지 경로로 복구
                    }
                }
            });
        });

        observerChange.observe(mediaSwiperChange, {
            attributes: true // 속성 변화만 감시
        });
    });
</script>

<!-- 일러스트 이미지 다운로드 -->
<script>
    document.getElementById('downloadButton-ill-p01').addEventListener('click', function() {
        // 다운로드할 이미지의 URL
        var imageUrl = '/mobile/images/ill-p01-down.jpg'; // 실제 이미지 경로로 변경하세요

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
        var imageUrl = '/mobile/images/ill-p02-down.jpg'; // 실제 이미지 경로로 변경하세요

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
        var imageUrl = '/mobile/images/ill-p03-down.jpg'; // 실제 이미지 경로로 변경하세요

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
        var imageUrl = '/mobile/images/ill-p04-down.jpg'; // 실제 이미지 경로로 변경하세요

        // a 태그를 생성하여 클릭 이벤트를 트리거
        var link = document.createElement('a');
            link.href = imageUrl;
            link.download = 'TalesRunnerRPG_keyvisual_04.jpg'; // 다운로드될 파일 이름
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
    });

    document.getElementById('downloadButton-ill-p05').addEventListener('click', function() {
        // 다운로드할 이미지의 URL
        var imageUrl = '/mobile/images/ill-p05-down.jpg'; // 실제 이미지 경로로 변경하세요

        // a 태그를 생성하여 클릭 이벤트를 트리거
        var link = document.createElement('a');
        link.href = imageUrl;
        link.download = 'TalesRunnerRPG_keyvisual_05.jpg'; // 다운로드될 파일 이름
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });

    document.getElementById('downloadButton-ill-p06').addEventListener('click', function() {
        // 다운로드할 이미지의 URL
        var imageUrl = '/mobile/images/ill-p06-down.jpg'; // 실제 이미지 경로로 변경하세요

        // a 태그를 생성하여 클릭 이벤트를 트리거
        var link = document.createElement('a');
        link.href = imageUrl;
        link.download = 'TalesRunnerRPG_keyvisual_06.jpg'; // 다운로드될 파일 이름
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>


<!-- 이미지 링크 복사하기 -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const shareButton01 = document.getElementById("illuslide-shareIcon01");
        const shareButton02 = document.getElementById("illuslide-shareIcon02");
        const shareButton03 = document.getElementById("illuslide-shareIcon03");
        const shareButton04 = document.getElementById("illuslide-shareIcon04");
        const shareButton05 = document.getElementById("illuslide-shareIcon05");
        const shareButton06 = document.getElementById("illuslide-shareIcon06");

        shareButton01.addEventListener("click", function() {
            const urlToCopy = "https://trcbt.migoweb.co.kr/?medialink=1";

            navigator.clipboard.writeText(urlToCopy).then(function() {
                alert("링크 복사가 완료되었습니다");
            }).catch(function(err) {
                console.error("Could not copy text: ", err);
            });
        });

        shareButton02.addEventListener("click", function() {
            const urlToCopy = "https://trres.migoweb.co.kr/?medialink=2";

            navigator.clipboard.writeText(urlToCopy).then(function() {
                alert("링크 복사가 완료되었습니다");
            }).catch(function(err) {
                console.error("Could not copy text: ", err);
            });
        });

        shareButton03.addEventListener("click", function() {
            const urlToCopy = "https://trres.migoweb.co.kr/?medialink=3";

            navigator.clipboard.writeText(urlToCopy).then(function() {
                alert("링크 복사가 완료되었습니다");
            }).catch(function(err) {
                console.error("Could not copy text: ", err);
            });
        });

        shareButton04.addEventListener("click", function() {
            const urlToCopy = "https://trres.migoweb.co.kr/?medialink=4";

            navigator.clipboard.writeText(urlToCopy).then(function() {
                alert("링크 복사가 완료되었습니다");
            }).catch(function(err) {
                console.error("Could not copy text: ", err);
            });
        });

        shareButton05.addEventListener("click", function() {
            const urlToCopy = "https://trres.migoweb.co.kr/?medialink=5";

            navigator.clipboard.writeText(urlToCopy).then(function() {
                alert("링크 복사가 완료되었습니다");
            }).catch(function(err) {
                console.error("Could not copy text: ", err);
            });
        });

        shareButton06.addEventListener("click", function() {
            const urlToCopy = "https://trres.migoweb.co.kr/?medialink=6";

            navigator.clipboard.writeText(urlToCopy).then(function() {
                alert("링크 복사가 완료되었습니다");
            }).catch(function(err) {
                console.error("Could not copy text: ", err);
            });
        });
    });
</script>


<!-- ----------오디오 관련---------------- -->
<script>
    document.querySelectorAll('.voicepbut').forEach(button => {
        button.addEventListener('click', function() {
            var audio = this.querySelector('audio');
            // 오디오가 이미 재생 중이면 중지
            if (!audio.paused) {
                audio.pause();
                audio.currentTime = 0; // 
            } else {

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

<script>
    // 감지할 요소 선택
    var section4 = document.getElementById('section4');
        var observerVoice = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
                if (mutation.attributeName === "class") {
                var target = mutation.target;
                if (!target.classList.contains('active')) {
                    // active 클래스가 없으면 모든 오디오 검사
                    var audioElements = target.querySelectorAll('.voicepbut audio');
                    audioElements.forEach(function(audio) {
                    if (!audio.paused) {
                        // 재생 중인 오디오가 있으면 멈춤
                        audio.pause();
                        console.log('Audio stopped:', audio.src);
                    }
                    });
                }
                }
            });
        });

    // Observer 설정
    observerVoice.observe(section4, { attributes: true });
        document.querySelectorAll('.tab-pane.active').forEach(targetNode => {
        const observerTab = new MutationObserver(mutations => {
            mutations.forEach(mutation => {
                if (mutation.attributeName === 'class') {
                    const target = mutation.target;
                    // 'active' 클래스가 없는지 확인
                    if (!target.classList.contains('active')) {
                        // 해당 탭 내의 모든 오디오 중지
                        target.querySelectorAll('audio').forEach(audio => {
                            audio.pause();
                        });
                    }
                }
            });
        });

        // 감시할 대상 요소 및 설정
        observerTab.observe(targetNode, { attributes: true });
    });
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
