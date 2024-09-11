<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// WING
if($is_wing)
	@include_once (G5_THEME_PATH.'/_wing.php');
?>

<div class="nt-container px-0 px-sm-4 px-xl-0 pt-0 pt-sm-4">
	<div class="row na-row">
		<!-- 메인 영역 -->
		<div class="col-md-9 na-col">
			<div class="mainContent">
				<!-- 1 -->
				<div class="mainTop">
					<h2>
						토토위키 : 대문
					</h2>
					<div class="mainTop-right">
						<button class="mainCombut">
							<img style="width:22px;" src="/theme/BS4-Basic/img/commuIcon.png" alt="커뮤니티">
							<span>커뮤니티</span>
						</button>
						<button class="mainStarbut" onclick="toggleStar(this)">
							<iconify-icon icon="carbon:star" class="staroff"></iconify-icon>
							<iconify-icon icon="carbon:star-filled" class="staron" style="color:#FFD027;"></iconify-icon>
						</button>
					</div>
				</div>

				<!-- 2 -->
				<div>
					<p class="resentTime">최근 수정 시각: 2024-05-27 13:58:23</p>
					<div class="mainBannerBox">
						<a href="#">
							<img src="/theme/BS4-Basic/img/mainBanner.png" alt="메인배너">
						</a>
					</div>
					<div class="introBox">
						<div>
							<h3>여러분 가꾸어 나가는 <span>1등 토토 커뮤니티</span> 사이트</h3>
							<p><span>토토위키</span>에 오신 것을 환영합니다!</p>
						</div>
						<div>
							<p>
								토토위키는 누구나 기여할 수 있는 위키입니다.<br>
								검증된 사이트만을 제공해드립니다.
							</p>
						</div>
					</div>
				</div>

				<!-- 3 -->
				<div class="mainUrlbox">
					<ul>
						<li>
							<button>
								<iconify-icon icon="bi:question-circle-fill" style="font-size:50px; color:#fff;"></iconify-icon>
							</button>
							<div class="mainUrlbox-div02">
								<p>토토위키에 처음 오셨나요?</p>
								<p>먼저 <a href="#">토토가이드</a>와 <a href="#">공지사항</a>, <a href="#">1:1 문의</a>를 통 토토위키에 대해 궁금한것을 문의해 보세요.</p>
							</div>
						</li>
						<li>
							<button>
								<img src="/theme/BS4-Basic/img/chatIcon.png" alt="채팅">
							</button>
							<div class="mainUrlbox-div02">
								<p>토토위키 게시판</p>
								<div class="mainUrlbox-abox">
									<a class="mainUrlbox-a" href="#">
										<img src="/theme/BS4-Basic/img/linkIcon.png" alt="링크">
										<span class="linkspan">자유게시판</span>
									</a>
									<a class="mainUrlbox-a" href="#">
										<img src="/theme/BS4-Basic/img/linkIcon.png" alt="링크">
										<span class="linkspan">유머게시판</span>
									</a>
								</div>
							</div>
						</li>
						<li>
							<button>
								<iconify-icon icon="mingcute:safety-certificate-fill" style="font-size:60px; color:#fff;"></iconify-icon>
							</button>
							<div class="mainUrlbox-div02">
								<p>공식보증업체</p>
								<p>토토사이트 먹튀검증 커뮤니티 토토나라에서 보증하는 사이트 입니다. 먹튀사고 발생시 100% 보상 을 해드릴것을 약속 드립니다.</p>
							</div>
						</li>
						<li>
							<button>
								<iconify-icon icon="ep:warn-triangle-filled" style="font-size:66px; color:#fff;"></iconify-icon>
							</button>
							<div class="mainUrlbox-div02">
								<p>먹튀검증</p>
								<p>토토사이트 먹튀검증 커뮤니티 토토나라는 자체검증 시스템을 활용하여, 사이트 검증을 하고있습니다 올바른 정보만을 전달해 드리겠습니다.</p>
							</div>
						</li>
					</ul>
				</div>

				<div class="seperate"></div>

				<!-- 4 -->
				<div class="siteBox">
					<div class="siteBox-title">
						<div class="siteBox-titleLeft">
							<iconify-icon icon="mingcute:safety-certificate-fill" style="font-size: 28px; color:#00A495; margin-top:-3px;"></iconify-icon>
							<span>공식보증업체 사이트</span>
						</div>
						<a class="mainUrlbox-a" href="#" style="margin-right:0px;">
							<img src="/theme/BS4-Basic/img/linkIcon.png" alt="링크" title="">
							<span class="linkspan">더보기</span>
						</a>
					</div>
					<div>
						<ul class="siteBox-ul">
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner01.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner02.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner01.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner02.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner01.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner02.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner02.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner01.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner02.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner02.png" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>

				<!-- 5 -->
				<div class="siteBox">
					<div class="siteBox-title">
						<div class="siteBox-titleLeft">
							<iconify-icon icon="ep:warn-triangle-filled" style="font-size: 28px; color:#00A495; margin-top:-3px;"></iconify-icon>
							<span>먹튀검증 사이트</span>
						</div>
						<a class="mainUrlbox-a" href="#" style="margin-right:0px;">
							<img src="/theme/BS4-Basic/img/linkIcon.png" alt="링크" title="">
							<span class="linkspan">더보기</span>
						</a>
					</div>
					<div>
						<ul class="siteBox-ul">
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner01.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner02.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner01.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner02.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner01.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner02.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner02.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner01.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner02.png" alt="">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/theme/BS4-Basic/img/exbanner02.png" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="seperate"></div>

				<!-- 6 -->
				<div class="boardBox">
					<div class="siteBox-title">
						<div class="siteBox-titleLeft">
							<img style="height:20px;" src="/theme/BS4-Basic/img/chatMini.png" alt="">
							<span style="margin-left:3px;">전체 게시판</span>
						</div>
						<div class="boardBox-flexmore">
							<a class="mainUrlbox-a mainUrlbox-a-af mo-mr0" href="#">
								<img src="/theme/BS4-Basic/img/linkIcon.png" alt="링크" title="">
								<span class="linkspan">자유게시판 더보기</span>
							</a>
							<a class="mainUrlbox-a" href="#">
								<img src="/theme/BS4-Basic/img/linkIcon.png" alt="링크" title="">
								<span class="linkspan">유머게시판 더보기</span>
							</a>
						</div>
					</div>
					<div>
						<table class="mainTable">
							<colgroup>
								<col style="width:55%">
								<col style="width:18%">
								<col style="width:9%">
								<col style="width 9%">
								<col style="width:9%">
							</colgroup>
							<thead>
								<tr>
									<th>제목</th>
									<th>작성자</th>
									<th>작성일</th>
									<th>조회수</th>
									<th>좋아요</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="boardTitlecontent">
											<span class="boardKind">유머게시판</span>
											<span class="boardTitle">
												<a href="#">소액이라도 바꿔서 배팅해봄 ㅎㅎ 오늘도 건승하시길 바랍니다!!</a>
											</span>
											<span class="boardCount">+10</span>
										</div>
									</td>
									<td>
										<div class="boardProfile">
											<img src="/theme/BS4-Basic/img/no_profile.png" alt="노프로필">
											<span>헤이쥴넛</span>
										</div>
									</td>
									<td>05:30</td>
									<td>28</td>
									<td>12</td>
								</tr>
								<tr>
									<td>
										<div class="boardTitlecontent">
											<span class="boardKind">유머게시판</span>
											<span class="boardTitle">
												<a href="#">소액이라도 바꿔서 배팅해봄 ㅎㅎ 오늘도 건승하시길 바랍니다!!</a>
											</span>
											<span class="boardCount">+10</span>
										</div>
									</td>
									<td>
										<div class="boardProfile">
											<img src="/theme/BS4-Basic/img/no_profile.png" alt="노프로필">
											<span>헤이쥴넛</span>
										</div>
									</td>
									<td>05:30</td>
									<td>28</td>
									<td>12</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="seperate"></div>

				<div class="alarmBox">
					<div class="siteBox-title">
						<div class="siteBox-titleLeft">
							<span>주요 운영 알림</span>
						</div>
						<div class="boardBox-flexmore">
							<a class="mainUrlbox-a mainUrlbox-a-af" href="#">
								<img src="/theme/BS4-Basic/img/linkIcon.png" alt="링크" title="">
								<span class="linkspan">더보기</span>
							</a>
						</div>
					</div>
					<ul class="alarm-ul">
						<li>
							<a href="#">게시판별 포인트적립 및 꽁머니랭킹 기능이 업데이트 되었습니다.</a>
							<div class="boardBox-flexmore">
								<a class="mainUrlbox-a mainUrlbox-a-af" href="#">
									<img src="/theme/BS4-Basic/img/linkIcon.png" alt="링크" title="">
									<span class="linkspan">더보기</span>
								</a>
							</div>
						</li>
						<li>
							<a href="#">게시판별 포인트적립 및 꽁머니랭킹 기능이 업데이트 되었습니다.</a>
							<div class="boardBox-flexmore">
								<a class="mainUrlbox-a mainUrlbox-a-af" href="#">
									<img src="/theme/BS4-Basic/img/linkIcon.png" alt="링크" title="">
									<span class="linkspan">더보기</span>
								</a>
							</div>
						</li>
						<li>
							<a href="#">게시판별 포인트적립 및 꽁머니랭킹 기능이 업데이트 되었습니다.</a>
							<div class="boardBox-flexmore">
								<a class="mainUrlbox-a mainUrlbox-a-af" href="#">
									<img src="/theme/BS4-Basic/img/linkIcon.png" alt="링크" title="">
									<span class="linkspan">더보기</span>
								</a>
							</div>
						</li>
						<li>
							<a href="#">게시판별 포인트적립 및 꽁머니랭킹 기능이 업데이트 되었습니다.</a>
							<div class="boardBox-flexmore">
								<a class="mainUrlbox-a mainUrlbox-a-af" href="#">
									<img src="/theme/BS4-Basic/img/linkIcon.png" alt="링크" title="">
									<span class="linkspan">더보기</span>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>       
		</div>

		<!-- 사이드 영역 -->
		<div class="col-md-3 na-col">
			<?php @include_once(G5_THEME_PATH.'/side/side-index.php') ?>
		</div>
	</div>
</div>

<script>
    function toggleStar(button) {
        button.classList.toggle('active');
    }
</script>
