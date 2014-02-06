<?php
/** 
 * Copyright Intermesh
 * 
 * This file is part of Group-Office. You should have received a copy of the
 * Group-Office license along with Group-Office. See the file /LICENSE.TXT
 * 
 * If you have questions write an e-mail to info@intermesh.nl
 * 
 * @copyright Copyright Intermesh
 * @version $Id: en.js 7708 2011-07-06 14:13:04Z wilmar1980 $
 * @author Dat Pham <datpx@fab.vn> +84907382345
 */
require($GO_LANGUAGE->get_fallback_base_language_file('lostpassword'));

$lang['lostpassword']['success']='<h1>Mật khẩu đã đổi</h1><p>Mật khẩu đã đổi. Bạn có thể tiếp tục vào trang đăng nhập.</p>';
$lang['lostpassword']['send']='Gửi';
$lang['lostpassword']['login']='Đăng nhập';

$lang['lostpassword']['lost_password_subject']='Yêu cầu mật khẩu mới';
$lang['lostpassword']['lost_password_body']='%s,

Bạn yêu cầu mật khẩu mới cho %s. Tên người dùng của bạn "%s".

Nhấn vào liên kết dưới để thay đổi (hoặc dán vào trình duyệt) để đổi mật khẩu:

%s

Nếu bạn không yêu cầu xin hãy xóa email này.';

$lang['lostpassword']['lost_password_error']='Không thể tìm email của người cần đổi.';
$lang['lostpassword']['lost_password_success']='Một email đã gửi tới hòm thư của bạn.';

$lang['lostpassword']['enter_password']='Nhập mật khẩu mới';

$lang['lostpassword']['new_password']='Mật khẩu mới';
$lang['lostpassword']['lost_password']='Mất mật khẩu';

$lang['lostpassword']['confirm_password']='Xác nhận mật khẩu';
?>
