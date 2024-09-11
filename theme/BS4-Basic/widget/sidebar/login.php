<?php
if (!defined('_GNUBOARD_')) exit; //개별 페이지 접근 불가
?>
<div>
	<form id="sidebar_login" name="sidebar_login" method="post" action="<?php echo G5_HTTPS_BBS_URL ?>/login_check.php" autocomplete="off">
	<input type="hidden" name="url" value="<?php echo $urlencode ?>">


		<div class="form-group mb6">
			<label for="sidebar_mb_id" class="sr-only">아이디<strong class="sr-only"> 필수</strong></label>						
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-user text-muted"></i></span>
				</div>
				<input type="text" name="mb_id" id="sidebar_mb_id" class="form-control" placeholder="아이디">
			</div>
		</div>
		<div class="form-group mb6">
			<label for="sidebar_mb_password" class="sr-only">비밀번호<strong class="sr-only"> 필수</strong></label>									
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-lock text-muted"></i></span>
				</div>
				<input type="password" name="mb_password" id="sidebar_mb_password" class="form-control" placeholder="비밀번호">
			</div>
		</div>
		<div class="form-group mb-0">
			<button type="submit" class="btn sidebarlobut">
				로그인
			</button>    
		</div>	

		<div class="d-flex align-items-center justify-content-between" style="font-size:13px; margin-top:7px;">
			<div class="f-sm">
				<div class="custom-control custom-switch">
					<input type="checkbox" name="auto_login" class="custom-control-input remember-me" id="sidebar_remember_me">
					<label class="custom-control-label float-left" for="sidebar_remember_me">자동로그인</label>
				</div>
			</div>
			<a href="<?php echo G5_BBS_URL ?>/password_lost.php" role="button">
				정보찾기
			</a>
		</div>

	</form>
</div>

<div class="position-relative p-3 pb-5 font-weight-normal">
	<?php @include (get_social_skin_path().'/social_sidebar.skin.php'); // 나리야에서 별도 추가 ?>
</div>