<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP 8.2.12 - phpinfo()</title>
<style type="text/css">
body (background-color: #fff; color: #222; font-family: sans-serif;)
pre (margin: 0; font-family: monospace;)
a:link (color: #009; text-decoration: none; background-color: #fff;)
a:hover (text-decoration: underline;)
table (border-collapse: collapse; border: 0; width: 934px; box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.2);)
.center (text-align: center;)
.center table (margin: 1em auto; text-align: left;)
.center th (text-align: center important;)
td, th (border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;)
th (position: sticky; top: 0; background: inherit;)
h1 (font-size: 150%;)
h2 (font-size: 125%;)
h2 a:link, h2 a:visited (color: inherit; background: inherit;)
.p (text-align: left;)
.e (background-color: #ccf; width: 300px; font-weight: bold;)
.h (background-color: #99c; font-weight: bold;)
.v (background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;)
.v1 (color: #999;)
img (float: right; border: 0;)
hr (width: 934px; background-color: #ccc; border: 0; height: 1px;)
@root (--php-dark-grey: #333; --php-dark-blue: #4F5B93; --php-medium-blue: #8892BF; --php-light-blue: #E2E4EF; --php-accent-purple: #793862) @media (prefers-color-scheme: dark) (
    body (background: var(--php-dark-grey); color: var(--php-light-blue))
    .h td, .e, th (border-color: #606A90)
    td (border-color: #505153)
    .e (background-color: #484A77)
    .h (background-color: var(--php-dark-blue))
    .v (background-color: var(--php-dark-grey))
    hr (background-color: #505153)
)
</style>
</head>
<body>
<div class="center">
    <h1>Xin chào Thiết kế và Lập trình web!</h1>
    <p>Bây giờ là 
    <?php 
        // Thiết lập múi giờ Việt Nam
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        // Lấy thời gian định dạng giống trên hình (giờ:phút, ngày tháng năm)
        echo date('H:i, d/m/Y');
    ?> 
    trên server.</p>
    
    <table>
    <tr class="h"><td>
        <a href="http://www.php.net/"><img border="0" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAA..." alt="PHP Logo" /></a>
    </td></tr>
    </table>
</div>
</body>
</html>