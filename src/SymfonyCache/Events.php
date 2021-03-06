<?php

/*
 * This file is part of the FOSHttpCache package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\HttpCache\SymfonyCache;

/**
 * Events used in the customized Symfony built-in reverse proxy HttpCache.
 */
final class Events
{
    const PRE_HANDLE = 'fos_http_cache.pre_handle';

    const POST_HANDLE = 'fos_http_cache.post_handle';

    const PRE_INVALIDATE = 'fos_http_cache.pre_invalidate';

    const PRE_STORE = 'fos_http_cache.pre_store';
}
