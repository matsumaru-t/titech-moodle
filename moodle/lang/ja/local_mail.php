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
 * Strings for component 'local_mail', language 'ja', version '3.9'.
 *
 * @package     local_mail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addbcc'] = 'Bccを追加する';
$string['addcc'] = 'Ccを追加する';
$string['addrecipients'] = '受信者を追加する';
$string['addto'] = 'Toを追加する';
$string['advsearch'] = '高度な検索';
$string['all'] = 'すべて';
$string['applychanges'] = '適用する';
$string['assigntonewlabel'] = '新しいラベルに割り当てる ...';
$string['attachments'] = '添付ファイル';
$string['attachnumber'] = '{$a} 添付';
$string['bcc'] = 'Bcc';
$string['bulkmessage'] = '選択したユーザにローカルメールを送信する ...';
$string['cancel'] = 'キャンセル';
$string['cannotcompose'] = 'あなたはどのコースにも登録していないため、メッセージを作成できません。';
$string['cc'] = 'Cc';
$string['compose'] = '作成';
$string['configenablebackup'] = 'バックアップ / リストア';
$string['configenablebackupdesc'] = 'メールメッセージおよびラベルのバックアップおよびリストアを有効にします。';
$string['configlegacynav'] = 'レガシーナビゲーション';
$string['configlegacynavdesc'] = 'レガシーナビゲーションスタイルを使用します。Moodle 3.2またはそれ以上のバージョンにはお勧めしません。プラグインのバージョン2.0で削除されます。';
$string['continue'] = '続ける';
$string['courses'] = 'コース';
$string['delete'] = '削除';
$string['discard'] = '破棄';
$string['downloadall'] = 'すべてをダウンロードする';
$string['draft'] = '下書き';
$string['drafts'] = '下書き';
$string['editlabel'] = 'ラベルを編集する';
$string['emptyrecipients'] = '受信者はいません。';
$string['emptytrash'] = 'ごみ箱を空にする';
$string['emptytrashconfirm'] = 'あなたはごみ箱を空にしようとしています。';
$string['erroremptycourse'] = 'コースを指定してください。';
$string['erroremptylabelname'] = 'ラベル名を指定してください。';
$string['erroremptyrecipients'] = '少なくとも1名の受信者を選択してください。';
$string['erroremptysubject'] = '件名を指定してください。';
$string['errorinvalidcolor'] = '無効な色です。';
$string['errorrepeatedlabelname'] = 'ラベル名がすでに存在します。';
$string['filterbydate'] = '日付 (次の日以降):';
$string['forward'] = '転送';
$string['from'] = 'From';
$string['hasattachments'] = '(添付付きメッセージ)';
$string['inbox'] = '受信箱';
$string['invalidlabel'] = '無効なラベルです。';
$string['invalidmessage'] = '無効なメッセージです。';
$string['labelcolor'] = '色';
$string['labeldeleteconfirm'] = 'あなたは完全にラベル「 {$a} 」を削除しようとしています。';
$string['labelname'] = '名称';
$string['labels'] = 'ラベル';
$string['mail:addinstance'] = '新しいメールを追加する';
$string['mail:mailsamerole'] = '同じロールのユーザにメールを送信する';
$string['mail:usemail'] = 'メールを使用する';
$string['mailmenu'] = 'メールメニュー';
$string['mailupdater'] = 'メールアップデータ';
$string['markasread'] = '既読マークする';
$string['markasread_help'] = 'この設定を有効にした場合、すべての新しいメッセージは既読マークされます。';
$string['markasstarred'] = '星付きマークする';
$string['markasunread'] = '未読マークする';
$string['markasunstarred'] = '星なしマークする';
$string['maxattachments'] = '最大添付数';
$string['maxattachmentsize'] = '最大添付サイズ';
$string['message'] = 'メッセージ';
$string['messagedeleteconfirm'] = 'あなたは完全にメッセージ「 {$a} 」を削除しようとしています。';
$string['messageprovider:mail'] = 'メール受信通知';
$string['messagesdeleteconfirm'] = 'あなたは {$a} 件のメッセージを完全に削除しようとしています。';
$string['moreactions'] = 'さらに';
$string['mymail'] = 'マイメール';
$string['newlabel'] = '新しいラベル';
$string['nocolor'] = '色はありません。';
$string['nolabels'] = '利用可能なラベルはありません。';
$string['nomessages'] = 'メッセージはありません。';
$string['nomessageserror'] = '少なくとも1件のメッセージを選択してください。';
$string['nomessagestoview'] = '表示するメッセージはありません。';
$string['none'] = 'なし';
$string['norecipient'] = '(受信者なし)';
$string['noselectedmessages'] = '選択されたメッセージはありません。';
$string['nosubject'] = '(件名なし)';
$string['notificationbody'] = '- From: {$a->user}

- 件名: {$a->subject}

{$a->content}';
$string['notificationbodyhtml'] = '<p>From: {$a->user}</p><p>件名: <a href="{$a->url}">{$a->subject}</a></p><p>{$a->content}</p>';
$string['notificationpref'] = '送信通知';
$string['notificationsubject'] = '{$a} の新しいメールメッセージ';
$string['notingroup'] = 'あなたはどのグループにも属していません。';
$string['pagingmultiple'] = '{$a->first}-{$a->last} / {$a->total}';
$string['pagingsingle'] = '{$a->index} / {$a->total}';
$string['perpage'] = '{$a} 件のメッセージを表示する';
$string['pluginname'] = 'メール';
$string['read'] = '既読';
$string['references'] = '参照';
$string['removelabel'] = 'ラベルを削除する';
$string['reply'] = '返信';
$string['replyall'] = 'すべてに返信する';
$string['restore'] = 'リストア';
$string['save'] = '保存';
$string['search'] = '検索';
$string['searchbyattach'] = '添付あり';
$string['searchbyunread'] = '未読のみ';
$string['send'] = '送信';
$string['sendmessage'] = 'メッセージを送信する';
$string['sentmail'] = '送信済み';
$string['setlabels'] = 'ラベル';
$string['shortaddbcc'] = 'Bcc';
$string['shortaddcc'] = 'Cc';
$string['shortaddto'] = 'To';
$string['showlabelmessages'] = '「 {$a} 」ラベルメッセージを表示する';
$string['showrecentmessages'] = '最近のメッセージを表示する';
$string['smallmessage'] = '{$a->user} があなたにメールを送信しました。';
$string['starred'] = '星付き';
$string['starredmail'] = '星付き';
$string['subject'] = '件名';
$string['to'] = 'To';
$string['togglemailmenu'] = 'メールメニューを切り替える';
$string['toomanyrecipients'] = '検索結果が多すぎます。';
$string['trash'] = 'ごみ箱';
$string['undo'] = '元に戻す';
$string['undodelete'] = '{$a} 件のメッセージがごみ箱に移動されました。';
$string['undorestore'] = '{$a} 件のメッセージがリストアされました。';
$string['unread'] = '未読';
$string['unstarred'] = '星なし';
