<?php
/**
 * NewsPublisher
 *
 *
 *
 * NewsPublisher is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * NewsPublisher is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * NewsPublisher; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package newspublisher
 */
/**
 * Button Lexicon Topic
 *
 * @package newspublisher
 * @subpackage lexicon
 */


/* NewsPublisher EditThisButton strings */
$_lang['np_edit'] = 'Edit';
$_lang['np_no_edit_document_permission'] = 'No edit_document permission';
$_lang['np_no_context_save_document_permission'] = 'No context save_document permission';
$_lang['np_no_resource_save_document_permission'] = 'No Resource save permission on this document';
$_lang['np_no_edit_home_page'] = 'Can not edit home page';
$_lang['np_no_np_id'] = 'Could not set the np_id default property. Set it manually to the ID of the NewsPublisher page.';
$_lang['np_id_desc'] = 'ID of NewsPublisher page (set automatically on first run); If you change the name of the NewsPublisher page, you have to set this manually; Default: (empty).';
$_lang['np_edit_id_desc'] = 'ID of page to edit (bottom and right properties are ignored -- button is displayed inline). You can use this in an edit button tag in your getResources Tpl chunk to have multiple buttons on a page: [[!NpEditThisButton? &edit_id=`[[+id]]`]]; Default: (empty).';
$_lang['np_noShow_desc'] = 'Comma - separated list of IDs of documents on which the button should not be displayed . Default: IDs of Home page and NewsPublisher page.';
$_lang['np_bottom_desc'] = '(optional) - distance from bottom of window to place button. Can be in any legal CSS format. Default: 20%.';
$_lang['np_right_desc'] = '(optional) - distance from right of window to place button. Can be in any legal CSS format. Default: 20%.';
$_lang['np_language_desc'] = '(optional) - Language to use for error messages; default: (empty).';
$_lang['np_debug_desc'] = '(optional) - Displays the button on all pages with either the $buttonCaption, or a message explaining why it would not be shown; Default: No.';
$_lang['editHome_desc'] = '(optional) If set to Yes, edit button may be shown on the Home page; default: No';