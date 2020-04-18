<?php
/**
 */

namespace PH7\Framework\Seo\Data;

final class MetaData
{
    /**
     * @param string $sLangId The new language key (e.g., de_DE, fr_FR).
     *
     * @return array
     */
    public static function getDefault($sLangId)
    {
        $aData = [
            'langId' => $sLangId,
            'pageTitle' => 'Home',
            'metaDescription' => 'The Best Online Social Dating Service to meet people and keep in touch with your friends',
            'metaKeywords' => 'meet people, community, single, friends, meet singles, women, men, dating site, dating service, dating website, online dating website',
            'headline' => 'Be on the right website!',
            'slogan' => 'Online Dating Community with Chat Rooms',
            'promoText' => 'You are on the best place for meeting new people nearby! Chat, Flirt, Enjoy!<br />',
            'metaRobots' => 'index, follow, all',
            'metaAuthor' => '',
            'metaCopyright' => 'All Rights Reserved.',
            'metaRating' => 'general',
            'metaDistribution' => 'global',
            'metaCategory' => 'dating'
        ];

        return $aData;
    }
}
