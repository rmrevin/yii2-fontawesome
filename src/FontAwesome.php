<?php
/**
 * FontAwesome.php
 * @author Revin Roman <roman@rmrevin.com>
 * @author Simon Karlen <simi.albi@gmail.com>
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\fontawesome;

use rmrevin\yii\fontawesome\component;

/**
 * Class FA
 * @package rmrevin\yii\fontawesome
 */
class FontAwesome
{
    /**
     * CSS class prefix
     * @var string
     */
    public static $cssPrefix = 'fa';

    /**
     * Mapping array
     * @var array
     */
    protected static $fa4to5mapping = [
        'address-book-o' => ['far', 'address-book'],
        'address-card-o' => ['far', 'address-card'],
        'area-chart' => ['fas', 'chart-area'],
        'arrow-circle-o-down' => ['far', 'arrow-alt-circle-down'],
        'arrow-circle-o-left' => ['far', 'arrow-alt-circle-left'],
        'arrow-circle-o-right' => ['far', 'arrow-alt-circle-right'],
        'arrow-circle-o-up' => ['far', 'arrow-alt-circle-up'],
        'arrows-alt' => ['fas', 'expand-arrows-alt'],
        'arrows-h' => ['fas', 'arrows-alt-h'],
        'arrows-v' => ['fas', 'arrows-alt-v'],
        'arrows' => ['fas', 'arrows-alt'],
        'asl-interpreting' => ['fas', 'american-sign-language-interpreting'],
        'automobile' => ['fas', 'car'],
        'bank' => ['fas', 'university'],
        'bar-chart-o' => ['far', 'chart-bar'],
        'bar-chart' => ['far', 'chart-bar'],
        'bathtub' => ['fas', 'bath'],
        'battery-0' => ['fas', 'battery-empty'],
        'battery-1' => ['fas', 'battery-quarter'],
        'battery-2' => ['fas', 'battery-half'],
        'battery-3' => ['fas', 'battery-three-quarters'],
        'battery-4' => ['fas', 'battery-full'],
        'battery' => ['fas', 'battery-full'],
        'bell-o' => ['far', 'bell'],
        'bell-slash-o' => ['far', 'bell-slash'],
        'bitbucket-square' => ['fab', 'bitbucket'],
        'bitcoin' => ['fab', 'btc'],
        'bookmark-o' => ['far', 'bookmark'],
        'building-o' => ['far', 'building'],
        'cab' => ['fas', 'taxi'],
        'calendar-check-o' => ['far', 'calendar-check'],
        'calendar-minus-o' => ['far', 'calendar-minus'],
        'calendar-o' => ['far', 'calendar'],
        'calendar-plus-o' => ['far', 'calendar-plus'],
        'calendar-times-o' => ['far', 'calendar-times'],
        'calendar' => ['fas', 'calendar-alt'],
        'caret-square-o-down' => ['far', 'caret-square-down'],
        'caret-square-o-left' => ['far', 'caret-square-left'],
        'caret-square-o-right' => ['far', 'caret-square-right'],
        'caret-square-o-up' => ['far', 'caret-square-up'],
        'cc' => ['far', 'closed-captioning'],
        'chain-broken' => ['fas', 'unlink'],
        'chain' => ['fas', 'link'],
        'check-circle-o' => ['far', 'check-circle'],
        'check-square-o' => ['far', 'check-square'],
        'circle-o-notch' => ['fas', 'circle-notch'],
        'circle-o' => ['far', 'circle'],
        'circle-thin' => ['far', 'circle'],
        'clock-o' => ['far', 'clock'],
        'close' => ['fas', 'times'],
        'cloud-download' => ['fas', 'cloud-download-alt'],
        'cloud-upload' => ['fas', 'cloud-upload-alt'],
        'cny' => ['fas', 'yen-sign'],
        'code-fork' => ['fas', 'code-branch'],
        'comment-o' => ['far', 'comment'],
        'commenting-o' => ['far', 'comment-alt'],
        'commenting' => ['fas', 'comment-alt'],
        'comments-o' => ['far', 'comments'],
        'credit-card-alt' => ['fas', 'credit-card'],
        'cutlery' => ['fas', 'utensils'],
        'dashboard' => ['fas', 'tachometer-alt'],
        'deafness' => ['fas', 'deaf'],
        'dedent' => ['fas', 'outdent'],
        'diamond' => ['far', 'gem'],
        'dollar' => ['fas', 'dollar-sign'],
        'dot-circle-o' => ['far', 'dot-circle'],
        'drivers-license-o' => ['far', 'id-card'],
        'drivers-license' => ['fas', 'id-card'],
        'eercast' => ['fab', 'sellcast'],
        'envelope-o' => ['far', 'envelope'],
        'envelope-open-o' => ['far', 'envelope-open'],
        'eur' => ['fas', 'euro-sign'],
        'euro' => ['fas', 'euro-sign'],
        'exchange' => ['fas', 'exchange-alt'],
        'external-link-square' => ['fas', 'external-link-square-alt'],
        'external-link' => ['fas', 'external-link-alt'],
        'eyedropper' => ['fas', 'eye-dropper'],
        'fa' => ['fab', 'font-awesome'],
        'facebook-f' => ['fab', 'facebook-f'],
        'facebook-official' => ['fab', 'facebook'],
        'facebook' => ['fab', 'facebook-f'],
        'feed' => ['fas', 'rss'],
        'file-archive-o' => ['far', 'file-archive'],
        'file-audio-o' => ['far', 'file-audio'],
        'file-code-o' => ['far', 'file-code'],
        'file-excel-o' => ['far', 'file-excel'],
        'file-image-o' => ['far', 'file-image'],
        'file-movie-o' => ['far', 'file-video'],
        'file-o' => ['far', 'file'],
        'file-pdf-o' => ['far', 'file-pdf'],
        'file-photo-o' => ['far', 'file-image'],
        'file-picture-o' => ['far', 'file-image'],
        'file-powerpoint-o' => ['far', 'file-powerpoint'],
        'file-sound-o' => ['far', 'file-audio'],
        'file-text-o' => ['far', 'file-alt'],
        'file-text' => ['fas', 'file-alt'],
        'file-video-o' => ['far', 'file-video'],
        'file-word-o' => ['far', 'file-word'],
        'file-zip-o' => ['far', 'file-archive'],
        'files-o' => ['far', 'copy'],
        'flag-o' => ['far', 'flag'],
        'flash' => ['fas', 'bolt'],
        'floppy-o' => ['far', 'save'],
        'folder-o' => ['far', 'folder'],
        'folder-open-o' => ['far', 'folder-open'],
        'frown-o' => ['far', 'frown'],
        'futbol-o' => ['far', 'futbol'],
        'gbp' => ['fas', 'pound-sign'],
        'ge' => ['fab', 'empire'],
        'gear' => ['fas', 'cog'],
        'gears' => ['fas', 'cogs'],
        'gittip' => ['fab', 'gratipay'],
        'glass' => ['fas', 'glass-martini'],
        'google-plus-circle' => ['fab', 'google-plus'],
        'google-plus-official' => ['fab', 'google-plus'],
        'google-plus' => ['fab', 'google-plus-g'],
        'group' => ['fas', 'users'],
        'hand-grab-o' => ['far', 'hand-rock'],
        'hand-lizard-o' => ['far', 'hand-lizard'],
        'hand-o-down' => ['far', 'hand-point-down'],
        'hand-o-left' => ['far', 'hand-point-left'],
        'hand-o-right' => ['far', 'hand-point-right'],
        'hand-o-up' => ['far', 'hand-point-up'],
        'hand-paper-o' => ['far', 'hand-paper'],
        'hand-peace-o' => ['far', 'hand-peace'],
        'hand-pointer-o' => ['far', 'hand-pointer'],
        'hand-rock-o' => ['far', 'hand-rock'],
        'hand-scissors-o' => ['far', 'hand-scissors'],
        'hand-spock-o' => ['far', 'hand-spock'],
        'hand-stop-o' => ['far', 'hand-paper'],
        'handshake-o' => ['far', 'handshake'],
        'hard-of-hearing' => ['fas', 'deaf'],
        'hdd-o' => ['far', 'hdd'],
        'header' => ['fas', 'heading'],
        'heart-o' => ['far', 'heart'],
        'hospital-o' => ['far', 'hospital'],
        'hotel' => ['fas', 'bed'],
        'hourglass-1' => ['fas', 'hourglass-start'],
        'hourglass-2' => ['fas', 'hourglass-half'],
        'hourglass-3' => ['fas', 'hourglass-end'],
        'hourglass-o' => ['far', 'hourglass'],
        'id-card-o' => ['far', 'id-card'],
        'ils' => ['fas', 'shekel-sign'],
        'image' => ['far', 'image'],
        'inr' => ['fas', 'rupee-sign'],
        'institution' => ['fas', 'university'],
        'intersex' => ['fas', 'transgender'],
        'jpy' => ['fas', 'yen-sign'],
        'keyboard-o' => ['far', 'keyboard'],
        'krw' => ['fas', 'won-sign'],
        'legal' => ['fas', 'gavel'],
        'lemon-o' => ['far', 'lemon'],
        'level-down' => ['fas', 'level-down-alt'],
        'level-up' => ['fas', 'level-up-alt'],
        'life-bouy' => ['far', 'life-ring'],
        'life-buoy' => ['far', 'life-ring'],
        'life-saver' => ['far', 'life-ring'],
        'lightbulb-o' => ['far', 'lightbulb'],
        'line-chart' => ['fas', 'chart-line'],
        'linkedin-square' => ['fab', 'linkedin'],
        'linkedin' => ['fab', 'linkedin-in'],
        'long-arrow-down' => ['fas', 'long-arrow-alt-down'],
        'long-arrow-left' => ['fas', 'long-arrow-alt-left'],
        'long-arrow-right' => ['fas', 'long-arrow-alt-right'],
        'long-arrow-up' => ['fas', 'long-arrow-alt-up'],
        'mail-forward' => ['fas', 'share'],
        'mail-reply-all' => ['fas', 'reply-all'],
        'mail-reply' => ['fas', 'reply'],
        'map-marker' => ['fas', 'map-marker-alt'],
        'map-o' => ['far', 'map'],
        'meanpath' => ['fab', 'font-awesome'],
        'meh-o' => ['far', 'meh'],
        'minus-square-o' => ['far', 'minus-square'],
        'mobile-phone' => ['fas', 'mobile-alt'],
        'mobile' => ['fas', 'mobile-alt'],
        'money' => ['far', 'money-bill-alt'],
        'moon-o' => ['far', 'moon'],
        'mortar-board' => ['fas', 'graduation-cap'],
        'navicon' => ['fas', 'bars'],
        'newspaper-o' => ['far', 'newspaper'],
        'paper-plane-o' => ['far', 'paper-plane'],
        'paste' => ['far', 'clipboard'],
        'pause-circle-o' => ['far', 'pause-circle'],
        'pencil-square-o' => ['far', 'edit'],
        'pencil-square' => ['fas', 'pen-square'],
        'pencil' => ['fas', 'pencil-alt'],
        'photo' => ['far', 'image'],
        'picture-o' => ['far', 'image'],
        'pie-chart' => ['fas', 'chart-pie'],
        'play-circle-o' => ['far', 'play-circle'],
        'plus-square-o' => ['far', 'plus-square'],
        'question-circle-o' => ['far', 'question-circle'],
        'ra' => ['fab', 'rebel'],
        'refresh' => ['fas', 'sync'],
        'remove' => ['fas', 'times'],
        'reorder' => ['fas', 'bars'],
        'repeat' => ['fas', 'redo'],
        'resistance' => ['fab', 'rebel'],
        'rmb' => ['fas', 'yen-sign'],
        'rotate-left' => ['fas', 'undo'],
        'rotate-right' => ['fas', 'redo'],
        'rouble' => ['fas', 'ruble-sign'],
        'rub' => ['fas', 'ruble-sign'],
        'ruble' => ['fas', 'ruble-sign'],
        'rupee' => ['fas', 'rupee-sign'],
        's15' => ['fas', 'bath'],
        'scissors' => ['fas', 'cut'],
        'send-o' => ['far', 'paper-plane'],
        'send' => ['fas', 'paper-plane'],
        'share-square-o' => ['far', 'share-square'],
        'shekel' => ['fas', 'shekel-sign'],
        'sheqel' => ['fas', 'shekel-sign'],
        'shield' => ['fas', 'shield-alt'],
        'sign-in' => ['fas', 'sign-in-alt'],
        'sign-out' => ['fas', 'sign-out-alt'],
        'signing' => ['fas', 'sign-language'],
        'sliders' => ['fas', 'sliders-h'],
        'smile-o' => ['far', 'smile'],
        'snowflake-o' => ['far', 'snowflake'],
        'soccer-ball-o' => ['far', 'futbol'],
        'sort-alpha-asc' => ['fas', 'sort-alpha-down'],
        'sort-alpha-desc' => ['fas', 'sort-alpha-up'],
        'sort-amount-asc' => ['fas', 'sort-amount-down'],
        'sort-amount-desc' => ['fas', 'sort-amount-up'],
        'sort-asc' => ['fas', 'sort-up'],
        'sort-desc' => ['fas', 'sort-down'],
        'sort-numeric-asc' => ['fas', 'sort-numeric-down'],
        'sort-numeric-desc' => ['fas', 'sort-numeric-up'],
        'spoon' => ['fas', 'utensil-spoon'],
        'square-o' => ['far', 'square'],
        'star-half-empty' => ['far', 'star-half'],
        'star-half-full' => ['far', 'star-half'],
        'star-half-o' => ['far', 'star-half'],
        'star-o' => ['far', 'star'],
        'sticky-note-o' => ['far', 'sticky-note'],
        'stop-circle-o' => ['far', 'stop-circle'],
        'sun-o' => ['far', 'sun'],
        'support' => ['far', 'life-ring'],
        'tablet' => ['fas', 'tablet-alt'],
        'tachometer' => ['fas', 'tachometer-alt'],
        'television' => ['fas', 'tv'],
        'thermometer-0' => ['fas', 'thermometer-empty'],
        'thermometer-1' => ['fas', 'thermometer-quarter'],
        'thermometer-2' => ['fas', 'thermometer-half'],
        'thermometer-3' => ['fas', 'thermometer-three-quarters'],
        'thermometer-4' => ['fas', 'thermometer-full'],
        'thermometer' => ['fas', 'thermometer-full'],
        'thumb-tack' => ['fas', 'thumbtack'],
        'thumbs-o-down' => ['far', 'thumbs-down'],
        'thumbs-o-up' => ['far', 'thumbs-up'],
        'ticket' => ['fas', 'ticket-alt'],
        'times-circle-o' => ['far', 'times-circle'],
        'times-rectangle-o' => ['far', 'window-close'],
        'times-rectangle' => ['fas', 'window-close'],
        'toggle-down' => ['far', 'caret-square-down'],
        'toggle-left' => ['far', 'caret-square-left'],
        'toggle-right' => ['far', 'caret-square-right'],
        'toggle-up' => ['far', 'caret-square-up'],
        'trash-o' => ['far', 'trash-alt'],
        'trash' => ['fas', 'trash-alt'],
        'try' => ['fas', 'lira-sign'],
        'turkish-lira' => ['fas', 'lira-sign'],
        'unsorted' => ['fas', 'sort'],
        'usd' => ['fas', 'dollar-sign'],
        'user-circle-o' => ['far', 'user-circle'],
        'user-o' => ['far', 'user'],
        'vcard-o' => ['far', 'address-card'],
        'vcard' => ['fas', 'address-card'],
        'video-camera' => ['fas', 'video'],
        'vimeo' => ['fab', 'vimeo-v'],
        'volume-control-phone' => ['fas', 'phone-volume'],
        'warning' => ['fas', 'exclamation-triangle'],
        'wechat' => ['fab', 'weixin'],
        'wheelchair-alt' => ['fab', 'accessible-icon'],
        'window-close-o' => ['far', 'window-close'],
        'won' => ['fas', 'won-sign'],
        'y-combinator-square' => ['fab', 'hacker-news'],
        'yc-square' => ['fab', 'hacker-news'],
        'yc' => ['fab', 'y-combinator'],
        'yen' => ['fas', 'yen-sign'],
        'youtube-play' => ['fab', 'youtube'],
        'youtube-square' => ['fab', 'youtube']
    ];

    /**
     * Regular font weight
     *
     * @param $name
     * @param array $options
     * @return component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public static function regular($name, $options = [])
    {
        return new component\Icon($name, $options, 'far');
    }

    /**
     * Solid font weight
     *
     * @param $name
     * @param array $options
     * @return component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public static function solid($name, $options = [])
    {
        return new component\Icon($name, $options, 'fas');
    }

    /**
     * Light font weight (Pro only)
     *
     * @param $name
     * @param array $options
     * @return component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public static function light($name, $options)
    {
        return new component\Icon($name, $options, 'fal');
    }

    /**
     * Brand icon
     *
     * @param $name
     * @param array $options
     * @return component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public static function brand($name, $options)
    {
        return new component\Icon($name, $options, 'fab');
    }

    /**
     * Creates an `Icon` component that can be used to FontAwesome html icon
     *
     * @param string $name
     * @param array $options
     * @return component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public static function icon($name, $options = [])
    {
        $name = strtolower(trim($name));
        if (array_key_exists($name, static::$fa4to5mapping)) {
            return new component\Icon(static::$fa4to5mapping[$name][1], $options, static::$fa4to5mapping[$name][0]);
        } elseif (strpos($name, ' ') !== false) {
            list($prefix, $name) = explode(' ', $name);
            return new component\Icon($name, $options, $prefix);
        }
        return static::solid($name, $options);
    }

    /**
     * Shortcut for `icon()` method
     * @see icon()
     *
     * @param string $name
     * @param array $options
     * @return component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public static function i($name, $options = [])
    {
        return static::icon($name, $options);
    }

    /**
     * Creates an `Stack` component that can be used to FontAwesome html icon
     *
     * @param array $options
     * @return component\Stack
     */
    public static function stack($options = [])
    {
        return new component\Stack($options);
    }

    /**
     * Shortcut for `stack()` method
     * @see stack()
     *
     * @param array $options
     * @return component\Stack
     */
    public static function s($options = [])
    {
        return static::stack($options);
    }

    /**
     * @param array $options
     * @return component\UnorderedList
     */
    public static function ul($options = [])
    {
        return new component\UnorderedList($options);
    }

    /**
     * Size values
     * @see component\Icon::size
     */
    const SIZE_SMALL = self::SIZE_SM; // Backwards compatibility
    const SIZE_LARGE = self::SIZE_LG; // Backwards compatibility
    const SIZE_XS = 'xs';
    const SIZE_SM = 'sm';
    const SIZE_LG = 'lg';
    const SIZE_2X = '2x';
    const SIZE_3X = '3x';
    const SIZE_4X = '4x';
    const SIZE_5X = '5x';
    const SIZE_6X = '6x';
    const SIZE_7X = '7x';
    const SIZE_8X = '8x';
    const SIZE_9X = '9x';
    const SIZE_10X = '10x';

    /**
     * Flip values
     * @see component\Icon::flip
     */
    const FLIP_HORIZONTAL = 'h';
    const FLIP_VERTICAL = 'v';
}
