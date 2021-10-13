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

use Hyperf\Event\Contract\ListenerInterface;
use Hyperf\Framework\Event\BootApplication;
use Hyperf\Rpc\ProtocolManager;
use KkErpService\RpcUtils\Kernel\Component\ProtocolManager\DataFormatter;
use KkErpService\RpcUtils\Kernel\Component\ProtocolManager\JsonRpcHttpTransporter;
use KkErpService\RpcUtils\Kernel\Component\ProtocolManager\PathGenerator;
use KkErpService\RpcUtils\Kernel\Component\ProtocolManager\PhpSerializerPacker;

/**
 * 重写 jsonrpc-http 传输.
 */
class RegisterProtocolListener implements ListenerInterface
{
    /**
     * @var ProtocolManager
     */
    private $protocolManager;

    public function __construct(ProtocolManager $protocolManager)
    {
        $this->protocolManager = $protocolManager;
    }

    public function listen(): array
    {
        return [
            BootApplication::class,
        ];
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
