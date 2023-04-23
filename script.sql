create table keywords
(
    KeywordID int auto_increment
        primary key,
    Keyword   varchar(50) not null
);

create table users
(
    UserID    int auto_increment
        primary key,
    Username  varchar(50)  not null,
    Password  varchar(50)  not null,
    Email     varchar(100) not null,
    FirstName varchar(50)  not null,
    LastName  varchar(50)  not null,
    Role      varchar(50)  not null
);

create table articles
(
    ArticleID         int auto_increment
        primary key,
    Title             varchar(100) not null,
    Abstract          text         not null,
    Content           text         not null,
    SubmissionDate    date         not null,
    PublicationStatus varchar(50)  not null,
    AuthorID          int          null,
    constraint articles_ibfk_1
        foreign key (AuthorID) references users (UserID)
);

create table articlekeywords
(
    ArticleID int not null,
    KeywordID int not null,
    primary key (ArticleID, KeywordID),
    constraint articlekeywords_ibfk_1
        foreign key (ArticleID) references articles (ArticleID),
    constraint articlekeywords_ibfk_2
        foreign key (KeywordID) references keywords (KeywordID)
);

create index KeywordID
    on articlekeywords (KeywordID);

create index AuthorID
    on articles (AuthorID);

create table editors
(
    EditorID int auto_increment
        primary key,
    UserID   int null,
    constraint editors_ibfk_1
        foreign key (UserID) references users (UserID)
);

create index UserID
    on editors (UserID);

create table reviews
(
    ReviewID       int auto_increment
        primary key,
    Comments       text        not null,
    Ratings        int         not null,
    Recommendation varchar(50) not null,
    ArticleID      int         null,
    ReviewerID     int         null,
    constraint reviews_ibfk_1
        foreign key (ArticleID) references articles (ArticleID),
    constraint reviews_ibfk_2
        foreign key (ReviewerID) references users (UserID)
);

create index ArticleID
    on reviews (ArticleID);

create index ReviewerID
    on reviews (ReviewerID);


