<?php

return [

    'nav_item_home' => 'Home',
    'nav_item_dashboard' => 'Dashboard',
    'nav_item_settings' => 'Settings',
    'nav_logout' => 'Log Out',

    'javascript' => [
        'dashboard_title' => 'Comments',
        'status_all' => 'All',
        'status_pending' => 'Pending',
        'status_approved' => 'Approved',
        'status_spam' => 'Spam',
        'status_trash' => 'Trash',
        'select_bulk_action' => 'Select action',
        'bulk_action_approve' => 'Approve',
        'bulk_action_unapprove' => 'Unapprove',
        'bulk_action_spam' => 'Mark as Spam',
        'bulk_action_delete' => 'Delete Permanently',
        'bulk_action_trash' => 'Move to Trash',
        'apply_bulk_action' => 'Apply',
        'order_latest' => 'Sort by Latest',
        'order_oldest' => 'Sort by Oldest',
        'column_author' => 'Author',
        'column_comment' => 'Comment',
        'column_in_response' => 'In Response To',
        'comments_count' => 'no comments | 1 comment | {count} comments',
        'next' => 'Next',
        'previous' => 'Previous',
        'submitted_on' => 'Submitted',
        'in_reply_to' => 'in reply to',
        'no_comments' => 'No comments.',
        'delete_modal_title' => 'Delete Comments',
        'delete_modal_text' => 'Are you sure you want to delete <span style="color: #d33;">{count}</span> comments ?',
        'delete_modal_confirm' => 'Yes, Delete',
        'delete_modal_cancel' => 'Cancel',
        'edit_comment_modal_title' => 'Edit Comment',
        'modal_save_changes' => 'Save Changes',
        'author_name' => 'Author Name',
        'author_email' => 'Author Email',
        'author_url' => 'Author Url',
        'comment_status' => 'Status',
        'comment_content' => 'Content',
        'write_tab' => 'Write',
        'preview_tab' => 'Preview',
        'loading_preview' => 'Loading preview...',
        'no_preview' => 'Nothing to preview',
        'comment_saved' => 'Your changes have been saved.',
        'reset_settings_modal_title' => 'Reset Settings',
        'reset_settings_modal_text' => 'Are you sure you want to reset all settings to their default values ?',
        'reset_settings_modal_confirm' => 'Yes, Reset',
        'reset_settings_modal_cancel' => 'Cancel',
        'action_approve' => 'Approve',
        'action_unapprove' => 'Unapprove',
        'action_spam' => 'Spam',
        'action_delete' => 'Delete Permanently',
        'action_trash' => 'Trash',
        'action_edit' => 'Edit',
        'view_page' => 'View Page',
        'filter_by_page' => 'Filter comments by this page',
        'clear_page_filter' => 'Clear page filter',
    ],

    'settings_title' => 'Settings',
    'settings_save_button' => 'Save Changes',
    'settings_reset_button' => 'Reset',
    'settings_saved' => 'Your changes have been saved.',
    'settings_general' => 'General',
    'settings_formatting' => 'Formatting',
    'settings_moderation' => 'Moderation',
    'settings_protection' => 'Protection',
    'settings_notifications' => 'Notifications',
    'setting_yes' => 'Yes',
    'setting_no' => 'No',
    'setting_config_cached' => 'After saving the changes make sure to clear your config cache! :command',
    'allow_guests_label' => 'Allow Guests',
    'allow_guests_help' => 'Specify if guest users can post comments.',
    'allow_votes_label' => 'Allow Votes',
    'allow_votes_help' => 'Specify if authenticated users can post comments.',
    'allow_replies_label' => 'Allow Replies',
    'allow_replies_help' => 'Specify if comment replies are allowed.',
    'broadcast_label' => 'Broadcast',
    'broadcast_help' => 'Specify if you want real time updating comments. Make sure you have a broadcast driver configured.',
    'allow_edit_label' => 'Editing',
    'allow_edit_help' => 'The number of seconds after a user can edit a comment. To disable leave it empty.',
    'allow_delete_label' => 'Deleting',
    'allow_delete_help' => 'The number of seconds after a user can delete a comment. To disable leave it empty.',
    'max_length_label' => 'Maximum Length',
    'max_length_help' => 'The maximum comment length. To disable leave it empty.',
    'per_page_label' => 'Per Page',
    'per_page_help' => 'The number of comments to be displayed per page. To disable leave it empty.',
    'default_order_label' => 'Default Order',
    'default_order_help' => 'The default comment order.',
    'default_gravatar_label' => 'Default Gravatar',
    'default_gravatar_help' => 'The default Gravatar imageset.',
    'emoji_label' => 'Emoji',
    'emoji_help' => 'Specify if you want to emoji support.',
    'markdown_label' => 'Markdown',
    'markdown_help' => 'Specify if comments should be parsed as Markdown (Litedown).',
    'bbcodes_label' => 'BBCodes',
    'bbcodes_help' => 'Specify if comments should be parsed as BBCode tags. Not available when Markdown is enabled.',
    'auto_link_label' => 'Auto Link',
    'auto_link_help' => 'Specify if plain-text URLs should be converted into clickable links.',
    'auto_email_label' => 'Auto Email',
    'auto_email_help' => 'Specify if plain-text emails should be converted into clickable links.',
    'auto_image_label' => 'Auto Image',
    'auto_image_help' => 'Specify if plain-text image URLs should be converted into actual images.',
    'auto_video_label' => 'Auto Video',
    'auto_video_help' => 'Specify if plain-text video URLs should be converted into actual videos.',
    'media_embed_label' => 'Media Embed',
    'media_embed_help' => 'Specify if content from <a href="http://s9etextformatter.readthedocs.io/Plugins/MediaEmbed/Sites" target="_blank">media sites</a> should be embedded.',
    'moderation_label' => 'Moderation',
    'moderation_help' => 'Specify if the comments should be put on hold for manual approval.',
    'akismet_label' => 'Akismet Spam Detection',
    'akismet_help' => 'Specify if you want to use Akismet for spam detection.<br> Make sure to set the <code>akismet_key</code> in <em>config/services.php</em>. Visit <a href="https://akismet.com/account" target="_blank">akismet.com</a> to get your key.',
    'moderation_keys_label' => 'Moderation Keys',
    'moderation_keys_help' => 'When a comment contains any of these words in its content, name, URL, e-mail, or IP, it will be held in the moderation queue. One per line.',
    'blacklist_keys_label' => 'Blacklist Keys',
    'blacklist_keys_help' => 'WWhen a comment contains any of these words in its content, name, URL, e-mail, or IP, it will be marked as spam. One per line.',
    'detect_duplicates_label' => 'Detect Duplicates',
    'detect_duplicates_help' => 'Detect if another comment with the same content and for the same page exists.',
    'max_unapproved_label' => 'Maximum Unapproved',
    'max_unapproved_help' => 'The maximum number of unapproved comments a user can have before can\'t post anymore.',
    'max_links_label' => 'Maximum Links',
    'max_links_help' => 'Specify the maximum number of links a comment a comment can have, after which it will be put on hold.',
    'censor_label' => 'Censor Words',
    'censor_help' => 'Specify if words should be censored.',
    'censored_words_label' => 'Censored Words',
    'censored_words_help' => 'Specify if and what words should be censored (sepearted by a space).',
    'allow_reports_label' => 'Reports',
    'allow_reports_help' => 'Specify if comment reports are allowed.',
    'max_reports_label' => 'Maximum Reports',
    'max_reports_help' => 'The maximum number of reports after the comment gets flagged.',
    'report_status_label' => 'Report Status',
    'report_status_help' => 'The status after the comment has to many reports.',
    'captcha_guest_label' => 'Captcha for Guests',
    'captcha_guest_help' => 'Specify if captcha is required for guest users.',
    'captcha_auth_label' => 'Captcha for Users',
    'captcha_auth_help' => 'Specify if captcha is required for authenticated users.',
    'throttle_label' => 'Throttle Posts',
    'throttle_help' => 'Specify if you want to throttle for comment posts,',
    'throttle_max_attempts_label' => 'Throttle Max Attempts',
    'throttle_max_attempts_help' => 'The maximum number of comment post attempts for delaying further attempts.',
    'throttle_decay_minutes_label' => 'Throttle Lockout Time',
    'throttle_decay_minutes_help' => 'The number of minutes to delay further comment post attempts.',
    'reply_notification_label' => 'Reply Notification',
    'reply_notification_help' => 'Specify if users should be notified when their comments receive replies.',
    'admin_notification_label' => 'Admin Email',
    'admin_notification_help' => 'Specify the email address to which notifications will be sent when a new comment is posted. Spam won\'t be reported.',

];
