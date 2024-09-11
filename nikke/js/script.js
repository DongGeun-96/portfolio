$(document).ready(function () {
    // 화면 리사이즈
    function resizeApply() {
        var minWidth = 1920;  // 고정 너비 1920px 설정
        var body = document.getElementsByTagName('body')[0];
        body.style.zoom = (window.innerWidth / minWidth);  // 모든 해상도에서 1920px 너비 비율 유지
    }
    
    window.onload = function() {
        window.addEventListener('resize', function() {
            resizeApply();
        });
        resizeApply();  // 초기 호출
    }
    // 애플 큐알코드
    $('.applestore').on('mouseenter', function() {
        $('.qrcode01').addClass("visible");
    });
    $('.applestore').on('mouseleave', function() {
        $('.qrcode01').removeClass("visible");
    });

    // 구글 큐알코드
    $('.googlestore').on('mouseenter', function() {
        $('.qrcode02').addClass("visible");
    });
    $('.googlestore').on('mouseleave', function() {
        $('.qrcode02').removeClass("visible");
    });

    // 헤더 스크롤
    var fixScroll = 0;
    $(window).scroll(function(event){
        var scroll = $(this).scrollTop();
        if (scroll > 950){
            $(".headertop").addClass("topchange");
        }
        else {
            $(".headertop").removeClass("topchange");
        }
        fixScroll = scroll;
    });

    $(".headerfake").mouseenter(function(){
        $(".headertop").removeClass("topchange")
    });

    $(".headerfake").mouseleave(function() {
        // headertop에 마우스가 있는지 확인
        if (!$(".headertop:hover").length) {
            $(".headertop").addClass("topchange");
        }
    });


    $(".headertop").mouseleave(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 950) {
            $(".headertop").addClass("topchange");
        }
    });
    // 바텀 다운로드 박스
    var fixScroll = 0;
    $(window).scroll(function() {
        var scroll = $(this).scrollTop();
        var docHeight = $(document).height();
        var windowHeight = $(window).height();
        var triggerHeight = (docHeight - windowHeight) * 0.9; // 전체 높이의 90%
    
        if (scroll > 950 && scroll <= triggerHeight) {
            // 스크롤이 950 픽셀 이상이고 전체 높이의 90% 이하일 때 클래스 추가
            $(".buyou").addClass("buyoudisplay");
        } else {
            // 그 외의 경우, 즉 스크롤이 950 픽셀 미만이거나 90%를 초과할 때 클래스 제거
            $(".buyou").removeClass("buyoudisplay");
        }
    
        fixScroll = scroll; // 스크롤 위치 저장
    });

    // 비디오 프레임 주소 가져오기
    $('.video-btn').click(function() {
        var videoUrl = $(this).data("video"); // 올바른 동영상 URL 가져오기
        $($(this).data("bs-target")).find("iframe").attr("src", videoUrl);
    });

    $('.videoModal').on('hide.bs.modal', function () {
        $(this).find("iframe").attr('src', ''); // 모달 닫힐 때 iframe 소스 제거
    });
});

