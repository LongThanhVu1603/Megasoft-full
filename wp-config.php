<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define('SAVEQUERIES', true);
// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'megasoft' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9n7FCgIaC-krDGS;P@}/{/pe6a<#,o[Xb`cF}0sqpqx)([>r|H~4XX84%wR2W(`L' );
define( 'SECURE_AUTH_KEY',  'i ]|@.Ee4Pi1~9SN#B<Ju0Y];cwJOI?[HXR0%2nU6J!x,8R/mXSIY,_0&J{8iQCV' );
define( 'LOGGED_IN_KEY',    'Vw};C~>(t9n2>z2m14Zp. x<<;$Rf~ a3=ud~v<=yUT.0O#cr|~d5]bZADPFwnvf' );
define( 'NONCE_KEY',        'sV+S|:u|u5kcBj_;Qr^W586n2N`iq_%3$CE0izuG[q<?`?Jzd~%Hwp?dGk@I[9ni' );
define( 'AUTH_SALT',        'fe{&j6rbYe3x%fW/Xq`Q%Q21Dj51)PU>`7tas7e%2$&rct54KEBX4/sQ?PR*KQRR' );
define( 'SECURE_AUTH_SALT', '](S7z.[yf^ur#G;yZ/)Fnl1}F;B,;q?315|[EeaPkB<mIQRDaGX<6&r{do[<[*cT' );
define( 'LOGGED_IN_SALT',   '^j-&<Owjc%vdvu/FrZiJC=>#zfjW0.c4iWD2KrGJ`a/D0XJ=odYfIc7}[4y*L< n' );
define( 'NONCE_SALT',       '!eNJ=PF/|l`k<^APB!Eo[^mGUPO(<-hN,UV+wq{yTS>ieBVNRxFPl:Y?aPv<F94^' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', TRUE);
define('WP_DEBUG_LOG', TRUE);
/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
