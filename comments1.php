<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
	
	<!--添加新评论-->
    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    	<h3 id="response">添加新评论</h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
			<div class="wrap">
				<?php if($this->user->hasLogin()): ?>
				<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
				<?php else: ?>
				<ul class="compost">
				<li>
					<input type="text" name="author" id="author" class="text" placeholder="<?php _e('昵称（必填）'); ?>" value="<?php $this->remember('author'); ?>" required />
				</li>
				<li>
					<input type="email" name="mail" id="mail" class="text" placeholder="<?php _e('邮箱（必填）'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
				</li>
				<li>
					<input type="url" name="url" id="url" class="text" placeholder="<?php _e('网址（选填）'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
				</li>
				</ul>
				<?php endif; ?>
				<div>
					<textarea rows="8" cols="50" name="text" id="textarea" placeholder="说点什么？" class="textarea" required><?php $this->remember('text'); ?></textarea>
				</div>
				<p>
					<button type="submit" class="submit"><?php _e('提交评论'); ?></button>
				</p>
			</div>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
	
	
	<!--评论列表-->
	 <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    <?php $comments->listComments(); ?>
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    <?php endif; ?>
	
</div>

<style>
	
	#comments {
		padding-top:15px;
		background-color: #fff;
		padding: 30px;
	}
	#response{
		color: #373e4a;
		font-weight: 600;
		font-size: 18px;
	}
	.comment-list,.comment-list ol {
		list-style:none;
		margin:0;
		padding:0
	}
	.comment-list li {
		padding:14px;
		margin-top:10px;
		border:1px solid #EEE
	}
	.comment-list li.comment-level-odd {
		background:#f6f6f3
	}
	.comment-list li.comment-level-even {
		background:#FFF
	}
	.comment-list li.comment-by-author {
		background:#fff9e8
	}
	.comment-list li .comment-reply {
		text-align:right;
		font-size:.92857em
	}
	.comment-meta a {
		color:#999;
		font-size:.92857em
	}
	.comment-author {
		display:block;
		margin-bottom:3px;
		color:#444
	}
	.comment-author .avatar {
		float:left;
		margin-right:10px
	}
	.comment-author cite {
		font-weight:bold;
		font-style:normal
	}
	.comment-list .respond {
		margin-top:15px;
		border-top:1px solid #EEE
	}
	.respond .cancel-comment-reply {
		float:right;
		margin-top:15px;
		font-size:.92857em
	}
	#comment-form label {
		display:block;
		margin-bottom:.5em;
		font-weight:bold
	}
	#comment-form .required:after {
		content:" *";
		color:#C00
	}
	.respond ul {
		margin:0
	}
	.respond .compost {
		overflow:hidden;
		padding:10px 0 0
	}
	.respond .textarea, .text {
		border:0;
		border-radius:5px;
		background-color:rgba(241,241,241,.98);
		width: 100%;
		padding: 20px;
		resize: none;
	}
	.respond .compost li input {
		width:100%;
		height:24px;
		color:#666
	}
	.text:focus, .textarea:focus{
		outline: none !important;
		border:0;
	}
	.respond .compost li {
		float:left;
		margin-right:6px;
		margin-bottom:10px;
		list-style-type:none
	}
	
	.comment-content {
		margin:10px 0 0 45px
	}

</style> 