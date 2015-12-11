
<form id="user-login-form" accept-charset="UTF-8" method="post" action="/pminew/node?destination=node">
<div>
<div class="form-item form-type-textfield form-item-name">

<label for="edit-name">
Username‌·
<span class="form-required" title="This field is required.">*</span>
</label>

<input id="edit-name" class="form-text required" type="text" maxlength="60" size="15" value="" name="name">

<div class="form-item form-type-password form-item-pass">

<label for="edit-pass">
Password‌
·
<span class="form-required" title="This field is required.">*</span>
</label>

<input id="edit-pass" class="form-text required" type="password" maxlength="128" size="15" name="pass">

</div>
</div>



<div class="item-list">
<ul>
<li class="first">
<a title="Create a new user account." href="/pminew/user/register">Create‌·new‌·account</a>
</li>
<li class="last">
<a title="Request new password via e-mail." href="/pminew/user/password">Request‌·new‌·password</a>
</li>
</ul>
</div>
<input type="hidden" value="<?php print $elements['form_build_id']['#value']; ?>" name="form_build_id">

<input type="hidden" value="user_login_block" name="form_id">

<div id="edit-actions" class="form-actions form-wrapper">
<input id="edit-submit" class="form-submit" type="submit" value="Log in" name="op">
</div>
</div>
</form>
