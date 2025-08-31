FROM mongo as base

ENV MONGO_INITDB_ROOT_USERNAME=root
ENV MONGO_INITDB_ROOT_PASSWORD=mongoset1010
ENV MONGO_INITDB_DATABASE=appdb

COPY mongo-init-01.js /docker-entrypoint-initdb.d/