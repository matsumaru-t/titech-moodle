<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_o365', language 'ja', version '3.9'.
 *
 * @package     local_o365
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acp_healthcheck'] = 'ヘルスチェック';
$string['acp_parentsite_desc'] = '共有されたMoodleコースデータのサイト';
$string['acp_parentsite_name'] = 'Moodle';
$string['calendar_site'] = 'サイト全体のカレンダー';
$string['calendar_user'] = '個人（ユーザ）カレンダー';
$string['erroracpauthoidcnotconfig'] = 'まずアプリケーション証明書をauth_oidcで設定してください。';
$string['erroracplocalo365notconfig'] = 'まずlocal_o365を設定してください。';
$string['erroracpnosptoken'] = '有効なSharePointトークンが取得できませんでした。';
$string['errorcouldnotcreatespgroup'] = 'SharePointグループを作成できませんでした。';
$string['errorcouldnotrefreshtoken'] = 'トークンを回復できませんでした';
$string['errorcreatingsharepointclient'] = 'SharePoint APIクライアントを取得できませんでした';
$string['errorhttpclientbadtempfileloc'] = 'ファイルを格納するための一時的な場所をオープンできませんでした。';
$string['errorhttpclientnofileinput'] = 'httpclient::putにファイルパラメータがありません';
$string['erroro365apibadcall'] = 'APIコールでエラー';
$string['erroro365apibadpermission'] = 'パーミッションが見つかりません';
$string['erroro365apicouldnotcreatesite'] = 'サイト作成の問題。';
$string['erroro365apicoursenotfound'] = 'コースが見つかりません。';
$string['erroro365apiinvalidmethod'] = '無効なhttpmethodがAPIコールに渡されました';
$string['erroro365apiinvalidtoken'] = '無効または失効したトークン。';
$string['erroro365apinoparentinfo'] = '親フォルダの情報が見つけられませんでした';
$string['erroro365apinotimplemented'] = 'これは上書きされます。';
$string['erroro365apinotoken'] = '与えられたリソースとユーザのトークンが得られません。ユーザの回復トークンが失効していますか？';
$string['erroro365apisiteexistsnolocal'] = 'サイトはすでに存在しますが、ローカルレコードは見つかりませんでした。';
$string['eventcalendarsubscribed'] = 'カレンダー購読ユーザ';
$string['eventcalendarunsubscribed'] = 'カレンダー非購読ユーザ';
$string['healthcheck_fixlink'] = '修正するにはここおをクリック。';
$string['healthcheck_systemapiuser_title'] = 'System APIユーザ';
$string['healthcheck_systemtoken_result_badtoken'] = 'Office365との通信に、System APIユーザ上の問題がありました。これはたいていシステムAPIユーザをリセットすることで解決できます。';
$string['healthcheck_systemtoken_result_noclientcreds'] = 'アプリケーション証明情報がOpenID接続プラグインい提供されていません、これらの証明情報無しでは、MoodleはOffice 365といかなる通信も実行できません。設定ページを訪れるためにはここをクリックし、証明情報を入力してください。';
$string['healthcheck_systemtoken_result_notoken'] = 'MoodleはこのSystem APIユーザでOffice365と通信するためのトークンが取得できません。これはたいてい、System APIユーザを再設定することで解決できます。';
$string['healthcheck_systemtoken_result_passed'] = 'MoodleはOffice 365とSystem APIユーザで通信できます。';
$string['pluginname'] = 'Microsoft Office 365 統合';
$string['settings_aadsync'] = 'AzureADとユーザ情報を同期';
$string['settings_aadsync_details'] = '有効にすると、関連するAzureADのユーザ情報がMoodleと同期されます。これにより、AzureADにあるユーザ情報をMoodleに作成し、AzureADから削除されたユーザ情報はMoodleからも削除します。';
$string['settings_aadtenant'] = 'AzureADテナント';
$string['settings_aadtenant_details'] = 'AzureADでのあなたの組織を識別するために用いられます。例：contoso.onmicrosoft.com';
$string['settings_detectoidc'] = 'アプリケーション証明情報';
$string['settings_detectoidc_credsinvalid'] = '証明情報が設定されていないか不完全';
$string['settings_detectoidc_credsvalid'] = '証明情報が設定されました。';
$string['settings_detectoidc_details'] = 'Office365と通信するために、Moodleは識別のため証明情報が必要となります。これらは認証プラグインの"OpenID接続"で設定されます。';
$string['settings_detectperms'] = 'アプリケーションパーミッション';
$string['settings_detectperms_errorfix'] = 'パーミッションの修正を試みたところエラーが発生。Azureで手動設定してください。';
$string['settings_detectperms_fixperms'] = 'パーミッション修正';
$string['settings_detectperms_invalid'] = 'AzureADのパーミッションをチェック';
$string['settings_detectperms_missing'] = '不足：';
$string['settings_detectperms_nocreds'] = 'アプリケーション証明情報がまず設定される必要があります。上の設定を確認。';
$string['settings_detectperms_nounified'] = 'Unified APIが提供されておらず、いくつかの新しい機能は動作しないかもしれません。';
$string['settings_detectperms_unifiednomissing'] = '全ての統合パーミッションが提供されました。';
$string['settings_detectperms_update'] = '更新';
$string['settings_detectperms_valid'] = 'パーミッションは設定されました。';
$string['settings_header_setup'] = '設定';
$string['settings_healthcheck'] = 'ヘルスチェック';
$string['settings_healthcheck_details'] = 'もし何かが正しく動作しない場合には、ヘルスチェックを実行することで問題を特定し解決策を提案できます。';
$string['settings_healthcheck_linktext'] = 'ヘルスチェックの実行';
$string['settings_o365china'] = '中国用Office 365';
$string['settings_o365china_details'] = 'もし中国用Office 365を使うならここにチェック';
$string['settings_odburl'] = 'OneDrive for Business のURL';
$string['settings_odburl_details'] = 'OneDrive for Business にアクセスするために用いられるURL。これはAzureADテナントで定義できます。例えば、もしAzureADテナントが "contoso.onmicrosoft.com"なら、これは多くの場合、 "contoso-my.sharepoint.com"となります。ドメイン名のみ入力し、http://やhttps://は含めないでください。';
$string['settings_serviceresourceabstract_empty'] = '正しい値の検出を試みるため、値を入力するか、「検出」をクリックしてください。';
$string['settings_serviceresourceabstract_invalid'] = 'この値は利用可能ではありません。';
$string['settings_serviceresourceabstract_nocreds'] = 'まずアプリケーション証明情報を設定してください。';
$string['settings_serviceresourceabstract_valid'] = '{$a} は利用可能です。';
$string['settings_sharepointlink'] = 'SharePointリンク';
$string['settings_sharepointlink_changelink'] = 'サイトを変更';
$string['settings_sharepointlink_connected'] = 'MoodleはこのSharePointサイトに接続されています。';
$string['settings_sharepointlink_details'] = 'MoodleとSharePointを接続するため、接続するMoodle用のSharePointサイトのフルURLを入力してください。もしサイトが存在しない場合、Moodleはそれを作成するよう試みます。<br /><a href="https://docs.moodle.org/27/en/Office365/SharePoint">MoodleとSharePointの接続についての詳細を読む</a>';
$string['settings_sharepointlink_enterurl'] = 'URLを上に入力';
$string['settings_sharepointlink_initializing'] = 'MoodleはSharePointサイトを設定しています。';
$string['settings_sharepointlink_status_checking'] = '入力されたSharePointサイトを確認中...';
$string['settings_sharepointlink_status_invalid'] = 'これは利用可能なSharePointサイトではありません。';
$string['settings_sharepointlink_status_notempty'] = 'このサイトは利用可能ですが、すでに存在しています。Moodleは既存のコンテンツと衝突するかもしれません。最良の結果のために、存在しないSharePointサイトを入力すれば、Moodleがそれを作成します。';
$string['settings_sharepointlink_status_valid'] = 'このSharePointサイトはMoodleによって作られ、Moodleコンテンツのために用いられます。';
$string['settings_systemapiuser'] = 'System APIユーザ';
$string['settings_systemapiuser_change'] = 'ユーザ変更';
$string['settings_systemapiuser_setuser'] = 'ユーザを設定';
$string['settings_systemapiuser_usernotset'] = 'ユーザが未設定';
$string['settings_systemapiuser_userset'] = '{$a}';
$string['spsite_group_contributors_desc'] = 'コース {$a} のファイルを管理するための全ユーザ';
$string['task_calendarsyncin'] = 'o365のイベントをMoodleに同期';
$string['task_groupcreate'] = 'Office365にユーザグループをつくる';
$string['task_refreshsystemrefreshtoken'] = 'System API ユーザを回復することでトークンを回復';
$string['task_sharepointinit'] = 'SharePointを初期化。';
$string['task_syncusers'] = 'AADとユーザを同期。';
$string['ucp_calsync_availcal'] = '利用可能なMoodleカレンダー';
$string['ucp_calsync_desc'] = 'チェックされたカレンダーは、MoodleからOutloookカレンダーに同期されます。';
$string['ucp_calsync_title'] = 'Outlookカレンダー同期';
$string['ucp_connection_start'] = 'Office365に接続';
$string['ucp_connection_status'] = 'Office365接続:';
$string['ucp_connection_stop'] = 'Office365との接続を解除';
$string['ucp_connectionstatus'] = '接続ステータス';
$string['ucp_features'] = 'Office365の機能';
$string['ucp_general_intro'] = 'ここで Office 365 への接続を管理できます。';
$string['ucp_notconnected'] = 'ここに訪れる前にOffice365に接続してください。';
$string['ucp_options'] = 'オプション';
$string['ucp_status_disabled'] = '未接続';
$string['ucp_status_enabled'] = '有効';
$string['ucp_syncdir_both'] = 'OutlookとMoodleの両方を更新';
$string['ucp_syncdir_in'] = 'OutlookからMoodleへ';
$string['ucp_syncdir_out'] = 'MoodleからOutlookへ';
$string['ucp_syncwith_title'] = '同期：';
$string['ucp_title'] = 'Office365接続管理';
