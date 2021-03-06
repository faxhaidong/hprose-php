<?php
/*--------------------------------------------------------*\
|                                                          |
|                          hprose                          |
|                                                          |
| Official WebSite: https://hprose.com                     |
|                                                          |
| Hprose/RPC/Core/ServiceCodec.php                         |
|                                                          |
| LastModified: Jan 29, 2020                               |
| Author: Ma Bingyao <andot@hprose.com>                    |
|                                                          |
\*________________________________________________________*/

namespace Hprose\RPC\Core;

interface ServiceCodec {
    function encode($result, ServiceContext $context): string;
    function decode(string $request, ServiceContext $context): array;
}