CREATE TABLE test_db.users (
    id INT NOT NULL,
    first_name VARCHAR(14) NOT NULL,
    age INT,
    PRIMARY KEY(id)
);
insert into `users` values (1, 'fuku', 30);