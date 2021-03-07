<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => '設定',
    'settings_save' => '設定を保存',
    'settings_save_success' => '設定を保存しました',

    // App Settings
    'app_customization' => 'Customization',
    'app_features_security' => 'Features & Security',
    'app_name' => 'アプリケーション名',
    'app_name_desc' => 'この名前はヘッダーやEメール内で表示されます。',
    'app_name_header' => 'ヘッダーにアプリケーション名を表示する',
    'app_public_access' => 'パブリック・アクセス',
    'app_public_access_desc' => 'Enabling this option will allow visitors, that are not logged-in, to access content in your BookStack instance.',
    'app_public_access_desc_guest' => 'Access for public visitors can be controlled through the "Guest" user.',
    'app_public_access_toggle' => 'Allow public access',
    'app_public_viewing' => 'アプリケーションを公開する',
    'app_secure_images' => '画像アップロード時のセキュリティを強化',
    'app_secure_images_toggle' => 'Enable higher security image uploads',
    'app_secure_images_desc' => 'パフォーマンスの観点から、全ての画像が公開になっています。このオプションを有効にすると、画像URLの先頭にランダムで推測困難な文字列が追加され、アクセスを困難にします。',
    'app_editor' => 'ページエディタ',
    'app_editor_desc' => 'ここで選択されたエディタを全ユーザが使用します。',
    'app_custom_html' => 'カスタムheadタグ',
    'app_custom_html_desc' => 'スタイルシートやアナリティクスコード追加したい場合、ここを編集します。これは<head>の最下部に挿入されます。',
    'app_custom_html_disabled_notice' => 'Custom HTML head content is disabled on this settings page to ensure any breaking changes can be reverted.',
    'app_logo' => 'ロゴ',
    'app_logo_desc' => '高さ43pxで表示されます。これを上回る場合、自動で縮小されます。',
    'app_primary_color' => 'プライマリカラー',
    'app_primary_color_desc' => '16進数カラーコードで入力します。空にした場合、デフォルトの色にリセットされます。',
    'app_homepage' => 'Application Homepage',
    'app_homepage_desc' => 'Select a view to show on the homepage instead of the default view. Page permissions are ignored for selected pages.',
    'app_homepage_select' => 'ページを選択',
    'app_footer_links' => 'Footer Links',
    'app_footer_links_desc' => 'Add links to show within the site footer. These will be displayed at the bottom of most pages, including those that do not require login. You can use a label of "trans::<key>" to use system-defined translations. For example: Using "trans::common.privacy_policy" will provide the translated text "Privacy Policy" and "trans::common.terms_of_service" will provide the translated text "Terms of Service".',
    'app_footer_links_label' => 'Link Label',
    'app_footer_links_url' => 'Link URL',
    'app_footer_links_add' => 'Add Footer Link',
    'app_disable_comments' => 'コメントを無効にする',
    'app_disable_comments_toggle' => 'コメントを無効にする',
    'app_disable_comments_desc' => 'アプリケーション内のすべてのページのコメントを無効にします。既存のコメントは表示されません。',

    // Color settings
    'content_colors' => 'コンテンツの色',
    'content_colors_desc' => 'Sets colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Shelf Color',
    'book_color' => 'Book Color',
    'chapter_color' => 'Chapter Color',
    'page_color' => 'Page Color',
    'page_draft_color' => 'Page Draft Color',

    // Registration Settings
    'reg_settings' => '登録設定',
    'reg_enable' => 'Enable Registration',
    'reg_enable_toggle' => 'Enable registration',
    'reg_enable_desc' => 'When registration is enabled user will be able to sign themselves up as an application user. Upon registration they are given a single, default user role.',
    'reg_default_role' => '新規登録時のデフォルト役割',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'Email Confirmation',
    'reg_email_confirmation_toggle' => 'Require email confirmation',
    'reg_confirm_email_desc' => 'ドメイン制限を有効にしている場合はEメール認証が必須となり、この項目は無視されます。',
    'reg_confirm_restrict_domain' => 'ドメイン制限',
    'reg_confirm_restrict_domain_desc' => '特定のドメインのみ登録できるようにする場合、以下にカンマ区切りで入力します。設定された場合、Eメール認証が必須になります。<br>登録後、ユーザは自由にEメールアドレスを変更できます。',
    'reg_confirm_restrict_domain_placeholder' => '制限しない',

    // Maintenance settings
    'maint' => 'メンテナンス',
    'maint_image_cleanup' => 'Cleanup Images',
    'maint_image_cleanup_desc' => "Scans page & revision content to check which images and drawings are currently in use and which images are redundant. Ensure you create a full database and image backup before running this.",
    'maint_delete_images_only_in_revisions' => 'Also delete images that only exist in old page revisions',
    'maint_image_cleanup_run' => 'クリーンアップを実行',
    'maint_image_cleanup_warning' => ':count potentially unused images were found. Are you sure you want to delete these images?',
    'maint_image_cleanup_success' => ':count potentially unused images found and deleted!',
    'maint_image_cleanup_nothing_found' => 'No unused images found, Nothing deleted!',
    'maint_send_test_email' => 'テストメールを送信',
    'maint_send_test_email_desc' => 'This sends a test email to your email address specified in your profile.',
    'maint_send_test_email_run' => 'Send test email',
    'maint_send_test_email_success' => 'Email sent to :address',
    'maint_send_test_email_mail_subject' => 'テストメール',
    'maint_send_test_email_mail_greeting' => 'Email delivery seems to work!',
    'maint_send_test_email_mail_text' => 'Congratulations! As you received this email notification, your email settings seem to be configured properly.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Open Recycle Bin',

    // Recycle Bin
    'recycle_bin' => 'Recycle Bin',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Deleted Item',
    'recycle_bin_deleted_by' => 'Deleted By',
    'recycle_bin_deleted_at' => 'Deletion Time',
    'recycle_bin_permanently_delete' => 'Permanently Delete',
    'recycle_bin_restore' => 'Restore',
    'recycle_bin_contents_empty' => 'The recycle bin is currently empty',
    'recycle_bin_empty' => 'Empty Recycle Bin',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item, along with any child elements listed below, from the system and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Items to be Destroyed',
    'recycle_bin_restore_list' => 'Items to be Restored',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Audit Log',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Event Filter',
    'audit_event_filter_no_filter' => 'No Filter',
    'audit_deleted_item' => 'Deleted Item',
    'audit_deleted_item_name' => 'Name: :name',
    'audit_table_user' => 'User',
    'audit_table_event' => 'Event',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_date' => 'Activity Date',
    'audit_date_from' => 'Date Range From',
    'audit_date_to' => 'Date Range To',

    // Role Settings
    'roles' => '役割',
    'role_user_roles' => '役割',
    'role_create' => '役割を作成',
    'role_create_success' => '役割を作成しました',
    'role_delete' => '役割を削除',
    'role_delete_confirm' => '役割「:roleName」を削除します。',
    'role_delete_users_assigned' => 'この役割は:userCount人のユーザに付与されています。該当するユーザを他の役割へ移行できます。',
    'role_delete_no_migration' => "ユーザを移行しない",
    'role_delete_sure' => '本当に役割を削除してよろしいですか？',
    'role_delete_success' => '役割を削除しました',
    'role_edit' => '役割を編集',
    'role_details' => '概要',
    'role_name' => '役割名',
    'role_desc' => '役割の説明',
    'role_external_auth_id' => 'External Authentication IDs',
    'role_system' => 'システム権限',
    'role_manage_users' => 'ユーザ管理',
    'role_manage_roles' => '役割と権限の管理',
    'role_manage_entity_permissions' => '全てのブック, チャプター, ページに対する権限の管理',
    'role_manage_own_entity_permissions' => '自身のブック, チャプター, ページに対する権限の管理',
    'role_manage_page_templates' => 'Manage page templates',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'アプリケーション設定の管理',
    'role_asset' => 'アセット権限',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => '各アセットに対するデフォルトの権限を設定します。ここで設定した権限が優先されます。',
    'role_asset_admins' => 'Admins are automatically given access to all content but these options may show or hide UI options.',
    'role_all' => '全て',
    'role_own' => '自身',
    'role_controlled_by_asset' => 'このアセットに対し、右記の操作を許可:',
    'role_save' => '役割を保存',
    'role_update_success' => '役割を更新しました',
    'role_users' => 'この役割を持つユーザ',
    'role_users_none' => 'この役割が付与されたユーザは居ません',

    // Users
    'users' => 'ユーザ',
    'user_profile' => 'ユーザプロフィール',
    'users_add_new' => 'ユーザを追加',
    'users_search' => 'ユーザ検索',
    'users_latest_activity' => 'Latest Activity',
    'users_details' => 'User Details',
    'users_details_desc' => 'Set a display name and an email address for this user. The email address will be used for logging into the application.',
    'users_details_desc_no_email' => 'Set a display name for this user so others can recognise them.',
    'users_role' => 'ユーザ役割',
    'users_role_desc' => 'Select which roles this user will be assigned to. If a user is assigned to multiple roles the permissions from those roles will stack and they will receive all abilities of the assigned roles.',
    'users_password' => 'ユーザー パスワード',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 6 characters long.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Send user invite email',
    'users_external_auth_id' => '外部認証ID',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your external authentication system.',
    'users_password_warning' => 'パスワードを変更したい場合のみ入力してください',
    'users_system_public' => 'このユーザはアプリケーションにアクセスする全てのゲストを表します。ログインはできませんが、自動的に割り当てられます。',
    'users_delete' => 'ユーザを削除',
    'users_delete_named' => 'ユーザ「:userName」を削除',
    'users_delete_warning' => 'ユーザ「:userName」を完全に削除します。',
    'users_delete_confirm' => '本当にこのユーザを削除してよろしいですか？',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'No user selected',
    'users_delete_success' => 'User successfully removed',
    'users_edit' => 'ユーザ編集',
    'users_edit_profile' => 'プロフィール編集',
    'users_edit_success' => 'ユーザを更新しました',
    'users_avatar' => 'アバター',
    'users_avatar_desc' => '256pxの正方形である必要があります。',
    'users_preferred_language' => '使用言語',
    'users_preferred_language_desc' => 'This option will change the language used for the user-interface of the application. This will not affect any user-created content.',
    'users_social_accounts' => 'ソーシャルアカウント',
    'users_social_accounts_info' => 'アカウントを接続すると、ログインが簡単になります。ここでアカウントの接続を解除すると、そのアカウントを経由したログインを禁止できます。接続解除後、各ソーシャルアカウントの設定にてこのアプリケーションへのアクセス許可を解除してください。',
    'users_social_connect' => 'アカウントを接続',
    'users_social_disconnect' => 'アカウントを接続解除',
    'users_social_connected' => '「:socialAccount」がプロフィールに接続されました。',
    'users_social_disconnected' => '「:socialAccount」がプロフィールから接続解除されました。',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token_create_success' => 'API token successfully created',
    'user_api_token_update_success' => 'API token successfully updated',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token created :timeAgo',
    'user_api_token_updated' => 'Token updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',
    'user_api_token_delete_success' => 'API token successfully deleted',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
