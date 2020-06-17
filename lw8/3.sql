USE rental;

INSERT INTO dvd (title, production_year)
VALUES 
    ('Gladiator', 2000),
    ('Lion King', 1994),
    ('Indiana Jones', 1981),
    ('Иван Васильевич меняет проффессию', 1992);

INSERT INTO customer (first_name, last_name, passport_code, registration_date)
VALUES
    ('John', 'Lenon', '12345678910', '1986-01-01'),
    ('Paul', 'McCartney', '12345678911', '1986-01-02'),
    ('Freddie', 'Mercury', '12345678912', '1982-01-02'),
    ('Муслим', 'Магомаев', '12345678913', '1989-01-02');

INSERT INTO offer (dvd_id, customer_id, offer_date, return_date)
VALUE 
    (1, 1, '1991-04-04', '1991-04-06'),
    (2, 1, '1994-02-04', '1995-04-06'),
    (3, 2, '1992-01-04', '1992-02-06'),
    (4, 4, '1996-10-04', null);


