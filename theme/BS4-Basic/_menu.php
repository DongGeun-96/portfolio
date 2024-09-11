<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// PC 상단 메뉴타입
$menu_ul = 'clearfix'; 
$menu_li = 'float-left';
$menu_w = (int)$tset['menu_w'];
$menu_bb = $menu_flex = $menu_grow = $menu_head = $menu_tail = '';
switch($tset['menu']) {
	// 좌측형
	case '2' :  $menu_flex = ' justify-content-start'; 
				$menu_tail = ' ml-auto'; 
				break; 
	// 배분-일반
	default	 :  $menu_bb = '1'; 
				$menu_grow = 'flex-grow-1 '; 
				$menu_ul = 'row'; 
				$menu_li = 'col'; 
				break;
}

// 서브메뉴 너비
$is_sub_w = (int)$tset['sub_w'];
?>

<style>
	#nt_menu .me-sw { width:<?php echo $is_sub_w ?>px; }
</style>

<!-- PC 상단 메뉴 -->
<nav id="nt_menu" class="nt-menu d-none d-md-block font-weight-normal">
	<div class="nt-container d-flex newheader">
		<div class="header_left">
			<div class="header-logo">
				<a href="<?php echo NT_HOME_URL ?>">
					<img id="logo_img" src="<?php echo $tset['logo_img'] ?>" alt="<?php echo get_text($config['cf_title']) ?>">
				</a>
			</div>		
			<div class="d-flex<?php echo $menu_flex ?>">
				<div class="<?php echo $menu_grow ?>order-2 me-list">
					<ul class="<?php echo $menu_ul ?> m-0 me-ul nav-slide nt_menu-ul">
					<?php for ($i=0; $i < $menu_cnt; $i++) { 
						$me = $menu[$i]; 
					?>
						<li class="<?php echo $menu_li ?> p-0 me-li<?php echo ($me['on']) ? ' on' : ''; ?>">
							<a class="d-block" href="<?php echo $me['href'];?>" target="<?php echo $me['target'];?>">
								<span class="me-a text-nowrap en">
									<i class="fa <?php echo $me['icon'] ?>" aria-hidden="true"></i>
									<?php echo $me['text'];?>
								</span>
							</a>
							<?php if(!$tset['sub_pc'] && isset($me['s'])) { //Is Sub Menu ?>
								<div class="clearfix sub-slide sub-1div<?php echo ($menu_bb) ? ' w-100' : '';?>">
									<ul class="sub-1dul<?php echo ($menu_bb) ? '' : ' me-sw float-left';?>">
									<?php 
										$me_sw1 = 0; //나눔 체크
										for($j=0; $j < count($me['s']); $j++) { 
											$me1 = $me['s'][$j]; 
									?>
										<?php if($menu_flex && $me1['sp']) { //나눔 ?>
											</ul>
											<ul class="sub-1dul me-sw float-left">
										<?php $me_sw1++; } // 나눔 카운트 ?>

										<?php if($me1['line']) { //구분라인 ?>
											<li class="sub-1line"><a class="me-sh sub-1da"><?php echo $me1['line'];?></a></li>
										<?php } ?>

										<li class="sub-1dli<?php echo ($me1['on']) ? ' on' : ''; ?>">
											<a href="<?php echo $me1['href'];?>" class="me-sh sub-1da<?php echo (isset($me1['s'])) ? ' sub-icon' : '';?>" target="<?php echo $me1['target'];?>">
												<i class="fa <?php echo $me1['icon'] ?> fa-fw" aria-hidden="true"></i>
												<?php echo $me1['text'];?>
											</a>
											<?php if(isset($me1['s'])) { // Is Sub Menu ?>
												<div class="clearfix sub-slide sub-2div">
													<ul class="sub-2dul me-sw float-left">					
													<?php 
														$me_sw2 = 0; //나눔 체크
														for($k=0; $k < count($me1['s']); $k++) { 
															$me2 = $me1['s'][$k];
													?>
														<?php if($me2['sp']) { //나눔 ?>
															</ul>
															<ul class="sub-2dul me-sw float-left">
														<?php $me_sw2++; } // 나눔 카운트 ?>

														<?php if($me2['line']) { //구분라인 ?>
															<li class="sub-2line"><a class="me-sh sub-2da"><?php echo $me2['line'];?></a></li>
														<?php } ?>

														<li class="sub-2dli<?php echo ($me2['on']) ? ' on' : ''; ?>">
															<a href="<?php echo $me2['href'] ?>" class="me-sh sub-2da" target="<?php echo $me2['target'] ?>">
																<i class="fa <?php echo $me2['icon'] ?> fa-fw" aria-hidden="true"></i>
																<?php echo $me2['text'];?>
															</a>
														</li>
													<?php } ?>
													</ul>
													<?php $me_sw2 = $is_sub_w * ($me_sw2 + 1); //서브메뉴 너비 ?>
													<div class="clearfix" style="width:<?php echo $me_sw2 ?>px;"></div>
												</div>
											<?php } ?>
										</li>
									<?php } //for ?>
									</ul>
									<?php 
										if(!$menu_bb) { // 배분형이 아닐 경우에만
											$me_sw1 = $is_sub_w * ($me_sw1 + 1); //서브메뉴 너비
									?>
										<div class="clearfix" style="width:<?php echo $me_sw1 ?>px;"></div>
									<?php } ?>
								</div>
							<?php } ?>
						</li>
					<?php } //for ?>
					<?php if(!$menu_cnt) { ?>
						<li class="flex-grow-1 order-2 me-li">
							<a class="me-a f-md" href="javascript:;">테마설정 > 메뉴설정에서 메뉴를 등록해 주세요.</a>
						</li>
					<?php } ?>
					</ul>							
				</div>
			</div>
		</div>
		<div class="header_right">
			<div class="me-icon me-li<?php echo $menu_tail ?>">
				<a href="javascript:;" onclick="sidebar('menu'); return false;" class="ham-a" title="사이드바">
					<iconify-icon icon="charm:menu-hamburger" style="font-size:20px;"></iconify-icon>
				</a>
			</div>
			<div class="header-search">
				<form name="tsearch" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return tsearch_submit(this);" class="border-primary">
					<input type="hidden" name="sfl" value="wr_subject||wr_content">
					<input type="hidden" name="sop" value="and">
					<div class="input-group input-group-lg">
						<input type="text" name="stx" class="form-control en newSearch-input" value="<?php echo $stx ?>" placeholder="여기에서 검색">
						<div class="input-group-append searchIconbox">
							<button type="submit" class="btn">
								<iconify-icon icon="gg:search" style="font-size:22px;"></iconify-icon>
							</button>
						</div>
					</div>
				</form>
				<div class="disnone header-keyword mt-2">
					<?php echo na_widget('data-keyword', 'popular', 'q=아미나,나리야,플러그인,그누보드5.4,부트스트랩4,테마,스킨,위젯,애드온'); ?>
				</div>
			</div>
			<a  href="javascript:;" onclick="sidebar('user')" class="btn  mybut" role="button">
				<iconify-icon icon="icon-park-solid:people" style="color:#fff; font-size:20px;"></iconify-icon>
			</a>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('#nt_menu .nav-slide').nariya_menu(); // 주메뉴
		});
	</script>
</nav>

<!-- MOBILE 상단 메뉴 -->
<nav id="nt_menu_mobile" class="d-block d-md-none f-de">
    <div class=" px-sm-4">
        <div class="na-table d-table w-100">
            <div class="d-table-row">
                <div class="d-table-cell">
                    <div class="position-relative px-sm-4" id="mobile_nav">
                        <ul class="d-flex">
                        <?php
                        $m_menu_startAt = 0;
                        for ($i = 0; $i < $menu_cnt; $i++) {
                            $me = $menu[$i];
                            if($me['on']){
                                $m_menu_active = " active";
                                $m_menu_startAt = $i;
                            }else{
                                $m_menu_active = "";
                            }
                        ?>
                            <li class="text-nowrap<?=$m_menu_active?>">
                                <a href="<?php echo $me['href']; ?>" target="<?php echo $me['target']; ?>" class="f-de d-block px-3 py-2"><i class="fa <?php echo $me['icon'] ?>" aria-hidden="true"></i> <?php echo $me['text']; ?></a>
                            </li>
                        <?php
                        }
                        ?>
                        </ul>
                        <div class="gra gra-left-primary"></div>
                        <div class="gra gra-right-primary"></div>
                        <script>
                            $(document).ready(function() {
                                // Mobile Menu
                                $('#mobile_nav').sly({
                                    horizontal: 1,
                                    itemNav: 'basic', //basic
                                    smart: 1,
                                    mouseDragging: 1,
                                    touchDragging: 1,
                                    releaseSwing: 1,
                                    startAt: <?=$m_menu_startAt?>,
                                    speed: 300,
                                    elasticBounds: 1,
                                    dragHandle: 1,
                                    dynamicHandle: 1
                                });
                                $(window).resize(function(e) {
                                    $('#mobile_nav').sly('reload');
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="collapse show" id="mobile_sub">
        <div class="position-relative bg-white border-bottom shadow-sm px-3 px-sm-4" id="mobile_nav_sub1">
            <ul class="d-flex">
            <?php
            $me = $menu[$m_menu_startAt];
            $m_menu_sub_startAt = 0;
            if (!defined('_INDEX_') && !$tset['sub_pc'] && isset($me['s'])) { //Is Sub Menu 
                for($j=0;$j<count($me['s']); $j++){
                    if($me['s'][$j]['on']){
                        $m_menu_sub_active = " text-primary";
                        $m_menu_sub_startAt = $i;
                    }else{
                        $m_menu_sub_active = "";
                    }
            ?>
                <li class="pr-4 text-nowrap"><a href="<?=$me['s'][$j]['href']?>" target="<?=$me['s'][$j]['target']?>" class="f-de d-block py-2<?=$m_menu_sub_active?>"><?=$me['s'][$j]['text']?></a></li>
            <?php
                }
            }
            ?>
            </ul>
            <div class="gra gra-left-white"></div>
            <div class="gra gra-right-white"></div>
        </div>
        <script>
            $(document).ready(function() {
                // Mobile Sub Menu1
                $('#mobile_nav_sub1').sly({
                    horizontal: 1,
                    itemNav: 'basic', //basic
                    smart: 1,
                    mouseDragging: 1,
                    touchDragging: 1,
                    releaseSwing: 1,
                    startAt: <?=$m_menu_sub_startAt?>,
                    speed: 300,
                    elasticBounds: 1,
                    dragHandle: 1,
                    dynamicHandle: 1
                });
                $('#mobile_sub').on('shown.bs.collapse', function() {
                    $('#mobile_nav_sub1').sly('reload');
                });
            });
        </script>
    </div>
</nav>

<?php if($tset['sticky']) { // 메뉴 상단 고정 ?>
	<script>
	function sticky_menu (e) {

		e.preventDefault();

		var scroll_n = window.scrollY || document.documentElement.scrollTop;
		var sticky_h = $("#nt_sticky").height();
		var menu_h = $("#nt_sticky_wrap").height();

		if (scroll_n > (sticky_h - menu_h)) {
			$("#nt_sticky_wrap").addClass("me-sticky");
			$("#nt_sticky").css('height', sticky_h + 'px');
		} else {
			$("#nt_sticky").css('height', 'auto');
			$("#nt_sticky_wrap").removeClass("me-sticky");
		}
	}
	$(window).on('load', function () {
		$(window).scroll(sticky_menu);
		$(window).resize(sticky_menu);
	});
	</script>
<?php } ?>
