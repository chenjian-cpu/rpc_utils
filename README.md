<h1 align="center"> rpc-utils </h1>

## 安装

```shell
$ composer require kk-erp-service/rpc-utils -vvv
```

## 说明

- 协议：jsonrpc-http

## 使用方式

### 服务提供者

> 采用注解方式

```php
/**
 * Class SplitPurchaseOrderRpc.
 *
 * @RpcService(name="SplitPurchaseOrderRpc")
 */
class SplitPurchaseOrderRpc implements SplitPurchaseOrderRpcInterface
{
}
```

### 服务消费者

> 采用自动生成代理类的方式，即仅需配置services.php即可

如
```php
return [
    'consumers' => [
        [
            'name' => 'SplitPurchaseOrderRpc',
            'service' => \KkErpService\RpcUtils\Contracts\Terp\SplitPurchaseOrderRpcInterface::class,
            'nodes' => [
                ['host' => '172.17.0.4', 'port' => 9502],
            ],
        ]
    ],
];
```