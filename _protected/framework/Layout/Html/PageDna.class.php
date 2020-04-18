<?php
/**
 * @title            Page's DNA Generator
 *
 */

namespace PH7\Framework\Layout\Html;

defined('PH7') or exit('Restricted access');

final class PageDna
{
    const COMMENT_PH7CMS = <<<COMMENT
        \n
COMMENT;

    const COMMENT_BUILT_WITH_PH7CMS = <<<COMMENT
        \n
COMMENT;

    const COMMENT_FOR_YOU = <<<COMMENT
        \n
COMMENT;

    const COMMENT_SOCIAL_DATING_SOFTWARE = <<<COMMENT
        \n
COMMENT;

    const COMMENTS = [
        self::COMMENT_PH7CMS,
        self::COMMENT_BUILT_WITH_PH7CMS,
        self::COMMENT_FOR_YOU,
        self::COMMENT_SOCIAL_DATING_SOFTWARE
    ];

    /**
     * Generates HTML DNA comments.
     *
     * @return string
     */
    public static function generateHtmlComment()
    {
        return self::COMMENTS[array_rand(self::COMMENTS)];
    }
}
