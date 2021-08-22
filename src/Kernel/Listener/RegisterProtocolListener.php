<?php

declare(strict_types=1);
/**
 * This file is part of the KKGUAN Service.
 *
 * (c) KKGUAN Service <>
 *
 * 本文件属于KK馆版权所有，泄漏必究。
 * This file belong to KKGUAN, all rights reserved.
 */
namespace KkErpService\RpcUtils\Kernel\Listener;

use Hyperf\JsonRpc\DataFormatter;
use Hyperf\JsonRpc\JsonRpcHttpTransporter;
use Hyperf\JsonRpc\PathGenerator;
use Hyperf\Rpc\ProtocolManager;
use Hyperf\Utils\Packer\PhpSerializerPacker;

class RegisterProtocolListener extends \Hyperf\JsonRpc\Listener\RegisterProtocolListener
{
    /**
     * @var ProtocolManager
     */
    private $protocolManager;

    public function __construct(ProtocolManager $protocolManager)
    {
        $this->protocolManager = $protocolManager;
        parent::__construct($protocolManager);
    }

    public function process(object $event)
    {
        $this->protocolManager->register('jsonrpc-http', [
            'packer'         => PhpSerializerPacker::class,
            'transporter'    => JsonRpcHttpTransporter::class,
            'path-generator' => PathGenerator::class,
            'data-formatter' => DataFormatter::class,
        ]);
    }
}
