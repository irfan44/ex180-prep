FROM registry.redhat.io/ubi8/ubi-minimal

RUN microdnf install wget \
    && wget https://github.com/cdr/code-server/releases/download/v3.9.3/code-server-3.9.3-amd64.rpm \
    && rpm -i code-server-3.9.3-amd64.rpm \
    && rm code-server-3.9.3-amd64.rpm

ENTRYPOINT ["code-server","--auth","none"]
