<?php
/**
 * @package admin
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_activity.php Jack Modified in v1.5.4 $
 */

define('HEADING_TITLE', '日志管理');
define('HEADING_SUB1', '查看或导出日志');
define('HEADING_SUB2', '清空日志');
define('TEXT_ACTIVITY_EXPORT_FORMAT', '导出文件的格式:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', '导出文件名称:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','在服务器上保存文件吗? (否则直接下载)');
define('TEXT_ACTIVITY_EXPORT_DEST','目标: ');
define('TEXT_PROCESSED', ' 已处理。');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', '导出完成。');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', '提示: 导出失败，无法写入文件 ');

define('TEXT_INSTRUCTIONS','<u>说明</u><br />本页用于导出 Zen Cart&reg; 管理日志到CSV文件。<br />请保存这些日志，万一网站被黑时可以用于调查。这是PCI条款所要求的。<br />
<ol><li>选择显示还是导出文件<li>输入文件名。<li>点击保存继续。<li>选择保存还是打开文件，根据浏览器有所不同。</ol>');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>清空数据库中的管理日志<br />警告: 请先备份好数据库!</strong><br />管理日志用于记录后台的所有操作。<br />基于这个原因，数据量会比较大，需要经常清理。<br />超过5万条记录或者60天后系统会给出警告。<br /><span class="alert">提示: PCI 条款要求保留12个月的管理日志。<br />清空日志前，最好先选择导出到CSV来保存日志。</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">警告!: 即将从数据库中删除管理日志。</span></strong><br />请先确认您已备份了数据库。<br /><br />我愿意继续重置操作:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>已删除</strong>管理日志');
define('TEXT_NO_RECORDS_FOUND', '没有找到符合条件的记录。');

define('TEXT_EXPORTFORMAT0', '导出 HTML (适合屏幕显示)');
define('TEXT_EXPORTFORMAT1', '导出 CSV (适合导入电子表格)');
define('TEXT_EXPORTFORMAT2', '导出 TXT');
define('TEXT_EXPORTFORMAT3', '导出 XML');

define('TEXT_ACTIVITY_EXPORT_FILTER', '需要查看哪个日志数据?');
define('TEXT_EXPORTFILTER0', '所有日志数据，包括所有级别。');
define('TEXT_EXPORTFILTER1', '消息 - 基本信息');
define('TEXT_EXPORTFILTER2', '通知 - 通知消息，最好定时查阅');
define('TEXT_EXPORTFILTER3', '警告 - 需要每日查阅的操作');
define('TEXT_EXPORTFILTER4', '通知和警告 (常用组合)。');

define('TEXT_INTERPRETING_LOG_DATA', '<p><strong>日志数据操作</strong><ul>
<li><strong>Severity</strong> - The standards for logging generally describe severities as follows:<ul>
<li><strong>INFO</strong> refers to general activity. This may or may not contain remarkable details.</li>
<li><strong>NOTICE</strong> refers to activity which indicates higher privilege was used, and may include things like creating new admin users or adding new payment modules. It also highlights when any data submitted on the web page includes potentially risky content such as script tags or embedded iframes, where malicious content is being added to your products/categories/pages by unhappy employees or an intruder on your site. These should be reviewed regularly for any anomalies such as unauthorized activity.</li>
<li><strong>WARNING</strong> is assigned to CRITICAL things such as removal of payment modules or deletion of admin users. These are activities which might suggest pending trouble if not caught quickly. These should be reviewed very frequently; recommended daily.</li>
</ul>
<li><strong>admin_user</strong> - This will show the admin user ID number followed by their admin username. If not logged in, it will show 0.</li>
<li><strong>page_accessed</strong> - This will indicate the name of the page visited, thus giving hints to the kind of activity taking place.</li>
<li><strong>parameters</strong> - This is the rest of the URI of the page visited, and gives further indication of the kind of activity being attempted by the visitor.</li>
<li><strong>flagged</strong> - If this is set to 1, that indicates that you should inspect the content recorded in the "postdata" field for unauthorized entry of script or iframe or other potentially dangerous content. An explanation of suspicious content will be listed in the "attention" field.</li>
<li><strong>attention</strong> - This will contain suggestions related to the kind of suspicious activity which should be reviewed in the "postdata" field if flagged. </li>
<li><strong>logmessage</strong> - This contains any messages recorded by the system about the activity taking place, such as installation of a certain module.</li>
<li><strong>postdata</strong> - This contains the raw POST data (with some sensitive information scrubbed) for easy review in case malicious activity is suspected.</li>
</ul></p>');
