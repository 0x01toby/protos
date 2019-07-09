## 安装grpc & protobuf 扩展

```bash
pecl install protobuf
pecl install grpc
```

## 开启扩展
```bash
echo "extension=grpc.so" >> /path/php.ini
echo "extension=protobuf.so" >> /path/php.ini
```

## 代码生成
   ```bash
   bin/php_proto.sh
   ```