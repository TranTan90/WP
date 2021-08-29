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

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '`X^tj0VEc+-<[8%E)&5:&`S J$l3P<V1bJ)%rj-}%[]$y3:Y4c`[%(eyIW_G5E_#' );
define( 'SECURE_AUTH_KEY',  '1{_]=YECK&3Ra^&Iu(q^Ei{JXO>e1*UEbh:RhP=KfG*Zk_!z}%p(6-_Ec{16v}%?' );
define( 'LOGGED_IN_KEY',    'Oam=]3 #UbpNyUrgM*4Y^1s[#3uH?;O+SsT}T(d-4+Otw0 i^7~zy7MH2rP/^E}d' );
define( 'NONCE_KEY',        'Qghde*=NOW>j`Tq|V88Ss[_MKXYj|kF&N>${@)GJr(p7u/9,gG5L>zs7Nz;mjr<A' );
define( 'AUTH_SALT',        '3q4MK11::p,[m!9*7;vzF.Q5IhXmi[ie4/F?ajD,u8gvqlR8s}v{0js2RxEEA)i}' );
define( 'SECURE_AUTH_SALT', '8q-71^CMO}I}hi1>LV`tDhC8rjsz8Nq|D2Ok(epeR[ioIzup%7x-nh,C0uG)O?B2' );
define( 'LOGGED_IN_SALT',   'm_2oYtO[m[v%M!O$8|]*977rh]-8*X|-C,(_Q^&5P,CmfEZO}.-=6lEC6]v(6!mk' );
define( 'NONCE_SALT',       ',E%H<=SjVOc1M7L[re=!&W5l<9`I+du@U<%X$PrE4^+L%*>{E$ZJXsq <:<OMxA;' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'dev_';

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
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
