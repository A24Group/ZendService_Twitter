<?php
/**
 * @see       https://github.com/zendframework/ZendService_Twitter for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/ZendService_Twitter/blob/master/LICENSE.md New BSD License
 */

namespace ZendService\Twitter;

/**
 * Twitter Image Uploader
 *
 * @author Cal Evans <cal@calevans.com>
 */
class Image extends Media
{
    /**
     * @param $imageUrl
     */
    public function __construct(string $imageUrl, string $mediaType = 'image/jpeg')
    {
        parent::__construct($imageUrl, $mediaType);
    }
}
