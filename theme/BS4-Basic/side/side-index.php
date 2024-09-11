<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
?>

<div class="d-none loginnone">
	<?php echo na_widget('outlogin'); // 외부로그인 위젯 ?>
</div>


<div class="mobile-none">
    <ul class="nav nav-tabs new-tab new-rank" id="rank-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#rank-level" aria-selected="true"
                role="tab">레벨 랭킹</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#rank-point" aria-selected="false"
                tabindex="-1" role="tab">포인트 랭킹</button>
        </li>
    </ul>
    <div class="tab-content new-tabContent rank-tabContent" id="rank-tabContent">
        <div class="tab-pane fade show active" id="rank-level" role="tabpanel">
            <ul class="rank-ul">
                <li>
                    <div class="rank-infodiv">
                        <img src="/theme/BS4-Basic/img/rank01.png" alt="1등">
                        <span class="rank-id rank-top">골드로즈</span>
                    </div>
                    <span class="rank-level level-top">LV.7</span>
                </li>
				<li>
                    <div class="rank-infodiv">
                        <img src="/theme/BS4-Basic/img/rank02.png" alt="2등">
                        <span class="rank-id rank-top">골드로즈</span>
                    </div>
                    <span class="rank-level level-top">LV.7</span>
                </li>
				<li>
                    <div class="rank-infodiv">
                        <img src="/theme/BS4-Basic/img/rank03.png" alt="3등">
                        <span class="rank-id rank-top">골드로즈</span>
                    </div>
                    <span class="rank-level level-top">LV.7</span>
                </li>
				<li>
                    <div class="rank-infodiv">
                        <span class="rank-num">4</span>
                        <span class="rank-id">맞짱까지마</span>
                    </div>
                    <span class="rank-level">LV.6</span>
                </li>
                <li>
                    <div class="rank-infodiv">
                        <span class="rank-num">5</span>
                        <span class="rank-id">맞짱까지마</span>
                    </div>
                    <span class="rank-level">LV.6</span>
                </li>
				<li>
                    <div class="rank-infodiv">
                        <span class="rank-num">6</span>
                        <span class="rank-id">맞짱까지마</span>
                    </div>
                    <span class="rank-level">LV.6</span>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" id="rank-point" role="tabpanel">
            <ul class="rank-ul">
                <li>
                    <div class="rank-infodiv">
                        <img src="/theme/BS4-Basic/img/rank01.png" alt="1등">
                        <span class="rank-id rank-top">지켜보고있다</span>
                    </div>
                    <div>
                        <img src="/theme/BS4-Basic/img/icon_p_gold.webp" alt="1등">
                        <span class="rank-level level-top">27,680 P</span>
                    </div>
                </li>
				<li>
                    <div class="rank-infodiv">
                        <img src="/theme/BS4-Basic/img/rank02.png" alt="2등">
                        <span class="rank-id rank-top">지켜보고있다</span>
                    </div>
                    <div>
                        <img src="/theme/BS4-Basic/img/icon_p_gold.webp" alt="2등">
                        <span class="rank-level level-top">27,680 P</span>
                    </div>
                </li>
				<li>
                    <div class="rank-infodiv">
                        <img src="/theme/BS4-Basic/img/rank03.png" alt="3등">
                        <span class="rank-id rank-top">지켜보고있다</span>
                    </div>
                    <div>
                        <img src="/theme/BS4-Basic/img/icon_p_gold.webp" alt="3등">
                        <span class="rank-level level-top">27,680 P</span>
                    </div>
                </li>
                <li>
                    <div class="rank-infodiv">
                        <span class="rank-num">4</span>
                        <span class="rank-id">로또일등</span>
                    </div>
                    <div>
                        <span class="rank-level">15,940 P</span>
                    </div>
                </li>
				<li>
                    <div class="rank-infodiv">
                        <span class="rank-num">5</span>
                        <span class="rank-id">로또일등</span>
                    </div>
                    <div>
                        <span class="rank-level">15,940 P</span>
                    </div>
                </li>
				<li>
                    <div class="rank-infodiv">
                        <span class="rank-num">6</span>
                        <span class="rank-id">로또일등</span>
                    </div>
                    <div>
                        <span class="rank-level">15,940 P</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="mt-4 mobile-none">
    <ul class="nav nav-tabs new-tab" id="new-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#new-write" aria-selected="true" role="tab">새 글</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#new-reple" aria-selected="false" tabindex="-1" role="tab">새 댓글</button>
        </li>
    </ul>
    <div class="tab-content new-tabContent" id="new-tabContent">
        <div class="tab-pane fade show active" id="new-write" role="tabpanel">

            <ul>
                <li>
                    <a href="#" class="write-over">
                        먹튀검증의 중요성과 필요성에대해 자세히 알려드리겠습니다. 
                    </a>
                    <span class="write-time">05.31</span>
                </li>
				<li>
                    <a href="#" class="write-over">
                        먹튀검증의 중요성과 필요성에대해 자세히 알려드리겠습니다. 
                    </a>
                    <span class="write-time">05.31</span>
                </li>
				<li>
                    <a href="#" class="write-over">
                        먹튀검증의 중요성과 필요성에대해 자세히 알려드리겠습니다. 
                    </a>
                    <span class="write-time">05.31</span>
                </li>
				<li>
                    <a href="#" class="write-over">
                        먹튀검증의 중요성과 필요성에대해 자세히 알려드리겠습니다. 
                    </a>
                    <span class="write-time">05.31</span>
                </li>
				<li>
                    <a href="#" class="write-over">
                        먹튀검증의 중요성과 필요성에대해 자세히 알려드리겠습니다. 
                    </a>
                    <span class="write-time">05.31</span>
                </li>
				<li>
                    <a href="#" class="write-over">
                        먹튀검증의 중요성과 필요성에대해 자세히 알려드리겠습니다. 
                    </a>
                    <span class="write-time">05.31</span>
                </li>
            </ul>

        </div>
        <div class="tab-pane fade" id="new-reple" role="tabpanel">

            <ul>
				<li>
                    <a href="#" class="write-over">
                        먹튀검증의 중요성과 필요성에대해 자세히 알려드리겠습니다. 
                    </a>
                    <span class="write-time">05.31</span>
                </li>
				<li>
                    <a href="#" class="write-over">
                        먹튀검증의 중요성과 필요성에대해 자세히 알려드리겠습니다. 
                    </a>
                    <span class="write-time">05.31</span>
                </li>
				<li>
                    <a href="#" class="write-over">
                        먹튀검증의 중요성과 필요성에대해 자세히 알려드리겠습니다. 
                    </a>
                    <span class="write-time">05.31</span>
                </li>
				<li>
                    <a href="#" class="write-over">
                        먹튀검증의 중요성과 필요성에대해 자세히 알려드리겠습니다. 
                    </a>
                    <span class="write-time">05.31</span>
                </li>
				<li>
                    <a href="#" class="write-over">
                        먹튀검증의 중요성과 필요성에대해 자세히 알려드리겠습니다. 
                    </a>
                    <span class="write-time">05.31</span>
                </li>
				<li>
                    <a href="#" class="write-over">
                        먹튀검증의 중요성과 필요성에대해 자세히 알려드리겠습니다. 
                    </a>
                    <span class="write-time">05.31</span>
                </li>
            </ul>

        </div>
    </div>
</div>

<div class="sidebanner mt-4">
	<img src="/theme/BS4-Basic/img/sidebanner.png" alt="">
</div>

<!-- } 위젯 끝-->
