## 安装protoc-gen-go

```bash
go get -u github.com/golang/protobuf/{proto,protoc-gen-go}
go install github.com/golang/protobuf/protoc-gen-go
cp ~/go/bin/protoc-gen-go /usr/local/bin/

```

## 代码生成
```bash
bin/go_proto.sh
```