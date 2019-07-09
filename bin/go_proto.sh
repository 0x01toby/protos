#!/bin/bash -e

DIR_PATH=$(cd `dirname $0`; pwd)

# 根目录
ROOT_PATH=$(cd `dirname ${DIR_PATH}`; pwd)
# proto path 目录
PROTO_PATH="${ROOT_PATH}/proto"

# modules
MODULE_PATH="${ROOT_PATH}/modules"

# 生成代码
for module_name in $(ls ${PROTO_PATH})
do
    for file_name in $(ls "${PROTO_PATH}/${module_name}")
    do
        if [[ ${file_name} =~ \.proto$ ]]; then
            echo "${PROTO_PATH}/${module_name}/${file_name}"
            protoc -I=${PROTO_PATH} "${module_name}/${file_name}" --go_out=plugins=grpc:${MODULE_PATH}
        fi
    done
done