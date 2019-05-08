create table users
(
  id         serial       not null
    constraint user_pkey
      primary key,
  username   varchar(255) not null,
  secondname varchar(255) not null,
  email      varchar(255) not null,
  password   varchar(255) not null
);

alter table users
  owner to postgres;

create table product
(
  id             serial            not null
    constraint product_pkey
      primary key,
  name           varchar(255)      not null,
  category_id    integer           not null,
  code           integer           not null,
  price          integer           not null,
  availability   integer           not null,
  brand          varchar(255)      not null,
  description    text              not null,
  is_new         integer default 0 not null,
  is_recommended integer default 0 not null,
  status         integer default 1 not null
);

alter table product
  owner to postgres;

create table product_order
(
  id           serial                              not null
    constraint product_order_pkey
      primary key,
  user_name    varchar(255)                        not null,
  user_phone   varchar(255)                        not null,
  user_comment text                                not null,
  user_id      integer
    constraint product_order_user_id_fkey
      references users,
  product_id   integer
    constraint product_order_product_id_fkey
      references product,
  date         timestamp default CURRENT_TIMESTAMP not null,
  products     text                                not null,
  status       integer   default 1                 not null
);

alter table product_order
  owner to postgres;

create table category
(
  id         serial not null
    constraint category_pkey
      primary key,
  name       varchar(255),
  sort_order integer default 0,
  status     integer default 1,
  product_id integer
    constraint category_product_id_fkey
      references product
);

alter table category
  owner to postgres;


