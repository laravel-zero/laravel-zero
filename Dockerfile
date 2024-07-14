FROM php:8.2-cli-alpine

RUN apk add --no-cache git shadow

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ARG UID
ARG GID

RUN addgroup -g $GID usergroup && \
    adduser -D -u $UID -G usergroup username

USER username

WORKDIR /app

CMD ["php"]