// 모바일 헤더 드롭다운
document.addEventListener('DOMContentLoaded', function() {
    const dropdownMenu = document.getElementById('mobiledropdownMenu');
    const menuItems = document.querySelectorAll('.mobiledropdown-menu-ul li');

    function disableScroll() {
        document.body.style.overflow = 'hidden';
    }

    function enableScroll() {
        document.body.style.overflow = 'auto';
    }

    document.getElementById('mobilehamburger').addEventListener('click', function(event) {
        event.preventDefault();
        dropdownMenu.classList.remove('hidden');
        dropdownMenu.style.display = 'block';
        dropdownMenu.classList.remove('slideUp');
        

        menuItems.forEach((item, index) => {
            item.style.setProperty('--index', index);
            item.style.animation = `fadeIn 0.3s ease-out forwards ${index * 0.05}s`;
        });

        disableScroll();
    });

    document.querySelector('.mobiledropdownclose').addEventListener('click', function(event) {
        event.preventDefault();
        dropdownMenu.classList.add('slideUp');
        setTimeout(function() {
            dropdownMenu.classList.add('hidden');
            dropdownMenu.style.display = 'none';

            enableScroll();

        }, 500); // Match this duration to the CSS animation duration
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const dropdownMenu02 = document.getElementById('mobiledropdownMenu02');

    function disableScroll() {
        document.body.style.overflow = 'hidden';
    }

    function enableScroll() {
        document.body.style.overflow = 'auto';
    }


    document.getElementById('mobilehamburger02').addEventListener('click', function(event) {
        event.preventDefault();
        dropdownMenu02.classList.remove('hidden');
        dropdownMenu02.style.display = 'block';
        dropdownMenu02.classList.remove('slideUp');

        disableScroll();
    });

    document.querySelector('.mobiledropdownclose02').addEventListener('click', function(event) {
        event.preventDefault();
        dropdownMenu02.classList.add('slideUp');
        setTimeout(function() {
            dropdownMenu02.classList.add('hidden');
            dropdownMenu02.style.display = 'none';

            enableScroll();

        }, 500); // Match this duration to the CSS animation duration
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const dropdownMenu02 = document.getElementById('mobiledropdownMenu03');

    function disableScroll() {
        document.body.style.overflow = 'hidden';
    }

    function enableScroll() {
        document.body.style.overflow = 'auto';
    }

    document.getElementById('mobilehamburger03').addEventListener('click', function(event) {
        event.preventDefault();
        dropdownMenu02.classList.remove('hidden');
        dropdownMenu02.style.display = 'block';
        dropdownMenu02.classList.remove('slideUp');

        disableScroll();
    });

    document.querySelector('.mobiledropdownclose03').addEventListener('click', function(event) {
        event.preventDefault();
        dropdownMenu02.classList.add('slideUp');
        setTimeout(function() {
            dropdownMenu02.classList.add('hidden');
            dropdownMenu02.style.display = 'none';

            enableScroll();

        }, 500); // Match this duration to the CSS animation duration
    });
});




// 헤더 스크롤 반응
$(document).ready(function () {
    let lastScrollTop = 0;
    const header = document.querySelector('.header');
    
    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            // 스크롤 내릴 때
            header.style.top = "-52px";  // 헤더의 높이에 맞게 조정
        } else {
            // 스크롤 올릴 때
            header.style.top = "0px";
        }
        lastScrollTop = scrollTop;
    });
});



// 동영상 영역 재생 제어
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer 콜백 함수
    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            const swiperPlaybox = document.querySelector('.swiperPlaybox');
            if (swiperPlaybox) {
                if (entry.isIntersecting) {
                    swiperPlaybox.classList.add('playnow');
                    swiperPlaybox.classList.remove('no-animation');
                } else {
                    swiperPlaybox.classList.remove('playnow');
                    swiperPlaybox.classList.add('no-animation');
                }
            }
        });
    }

    // Intersection Observer 생성
    var observer = new IntersectionObserver(handleIntersection, {
        threshold: 0.1 // 요소가 10% 보일 때 트리거
    });

    // sec03-swiper 클래스를 가진 모든 요소를 선택하고 Observer에 등록
    var swiperElements = document.querySelectorAll('.sec03-swiper');
    swiperElements.forEach(element => {
        observer.observe(element);
    });
});


// 동영상 스와어프
$(document).ready(function () {
    const swiper = new Swiper('.swiper', {
        slidesPerView: 'auto',
        spaceBetween: 80,
        centeredSlides: true,
        loop: false,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '" data-index="' + index + '"></span>';
            }
        }
    });

    function updateUIElements() {
        $('.ci-a').show();
        $('.ci-b').hide();
        $('.ci-c').hide();
    }

    swiper.on('slideChange', function () {
        var videos = swiper.el.querySelectorAll('video');
        videos.forEach(video => {
            video.pause();
            video.currentTime = 0; // 비디오를 처음부터 다시 시작하게 리셋
        });

        // 현재 활성화된 슬라이드의 비디오를 찾아 재생
        var activeVideo = swiper.slides[swiper.activeIndex].querySelector('video');
        if (activeVideo) {
            activeVideo.play();
        }

        updateUIElements();
        $('.swiper-pagination-bullet-active').removeClass('paused-animation').css('animation', '');
    });

    swiper.on('slideChangeTransitionEnd', function () {
        updateUIElements();
    });

    $('.swiper-pagination-bullet').on('click', function () {
        updateUIElements();
    });

    $('.swiper-pagination-bullet').on('animationend', function (event) {
        if ($(event.target).hasClass('swiper-pagination-bullet-active')) {
            if (swiper.activeIndex < swiper.slides.length - 1) {
                swiper.slideNext();
            } else {
                swiper.autoplay.stop();
                $('.ci-a').hide();
                $('.ci-b').hide();
                $('.ci-c').show();
            }
        }
    });

    $('.swiper-button-toggle').on('click', function () {
        if ($('.swiper-pagination-bullet-active').hasClass('paused-animation')) {
            $('.swiper-pagination-bullet-active').removeClass('paused-animation').css('animation', '');
            $('.ci-a').show();
            $('.ci-b').hide();
            $('.ci-c').hide();
        } else {
            $('.swiper-pagination-bullet-active').addClass('paused-animation').css('animation', 'none');
            $('.ci-a').hide();
            $('.ci-b').show();
            $('.ci-c').hide();
        }
    });

    // .ci-a 버튼 클릭 시 현재 비디오 일시정지
    $(document).on('click', '.ci-a', function() {
        var activeVideo = swiper.slides[swiper.activeIndex].querySelector('video');
        if (activeVideo) {
            activeVideo.pause();
        }
        $('.ci-a').hide();
        $('.ci-b').show();
        $('.ci-c').hide();
    });

    // .ci-b 버튼 클릭 시 현재 비디오 재생
    $(document).on('click', '.ci-b', function() {
        var activeVideo = swiper.slides[swiper.activeIndex].querySelector('video');
        if (activeVideo) {
            activeVideo.play();
        }
        $('.ci-a').show();
        $('.ci-b').hide();
        $('.ci-c').hide();
    });

    $(document).on('click', '.ci-c', function() {
        // 첫 번째 슬라이드로 이동 전에 모든 상태 및 애니메이션 초기화
        swiper.slideTo(0); // 첫 번째 슬라이드로 즉시 이동
        $('.swiper-pagination .swiper-pagination-bullet').last().removeClass('swiper-pagination-bullet-active paused-animation');
        updateUIElements();
    });
});




// sec04 글씨 스크롤 투명도
document.addEventListener('DOMContentLoaded', function() {
    const h4Element = document.querySelector('.sec04 h4');
    const subh4Element = document.querySelector('.sec04 .subh4');
    const elements = [h4Element, subh4Element];

    function updateOpacity() {
        const windowHeight = window.innerHeight;
        const elementTop = h4Element.getBoundingClientRect().top;

        // 섹션이 뷰포트에 들어올 때부터 시작해서 뷰포트의 중간까지 오면 opacity가 1이 됨
        const start = windowHeight;
        const end = windowHeight / 2;
        const range = start - end;

        // 요소의 상단이 화면 하단에 있을 때 opacity는 0, 화면 중간에 있을 때 opacity는 1
        let opacity = (start - elementTop) / range;
        if (opacity < 0) opacity = 0;
        if (opacity > 1) opacity = 1;

        elements.forEach(element => {
            element.style.opacity = opacity;
        });
    }

    window.addEventListener('scroll', updateOpacity);
    window.addEventListener('resize', updateOpacity);  // 윈도우 크기가 변경될 때도 opacity 업데이트
    updateOpacity();  // 초기화
});


// 카멜레온 효과
document.addEventListener('DOMContentLoaded', function() {
    const camelImgElement = document.querySelector('.camelimg');

    function updateTransform() {
        const windowHeight = window.innerHeight;
        const elementTop = camelImgElement.getBoundingClientRect().top;
        const elementHeight = camelImgElement.offsetHeight;

        const start = windowHeight;
        const end = windowHeight / 2;
        const range = start - end;

        // camelimg 요소가 뷰포트에 들어오기 시작할 때부터 중간까지의 변환 비율 계산
        let progress = (start - elementTop) / range;
        if (progress < 0) progress = 0;
        if (progress > 1) progress = 1;

        // 변환 매트릭스의 각 요소 계산
        const scale = 2.25 - progress * (2.25 - 1);
        const translateY = 401.58 - progress * 401.58;

        camelImgElement.style.transform = `matrix(${scale}, 0, 0, ${scale}, 0, ${translateY})`;
    }

    window.addEventListener('scroll', updateTransform);
    window.addEventListener('resize', updateTransform);  // 윈도우 크기가 변경될 때도 transform 업데이트
    updateTransform();  // 초기화
});


