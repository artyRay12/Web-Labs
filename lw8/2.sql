CREATE TABLE IF NOT EXISTS dvd (
    dvd_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    production_year YEAR NOT NULL,
    PRIMARY KEY(dvd_id)
);

CREATE TABLE IF NOT EXISTS customer (
    customer_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    passport_code VARCHAR(11) NOT NULL UNIQUE,
    registration_date TIMESTAMP NOT NULL,
    PRIMARY KEY(customer_id)
);

CREATE TABLE IF NOT EXISTS offer (
    offer_id UNSIGNED INT NOT NULL,
    dvd_id INT UNSIGNED NOT NULL,
        INDEX dvd_id_index(dvd_id),
        FOREIGN KEY (dvd_id)
            REFERENCES dvd(dvd_id)
            ON DELETE CASCADE,
    customer_id INT UNSIGNED NOT NULL,
        INDEX customer_id_index(customer_id),
        FOREIGN KEY (customer_id)
            REFERENCES customer(customer_id)
            ON DELETE CASCADE,
    offer_date TIMESTAMP NOT NUll,
    return_date DATETIME,
    PRIMARY KEY(offer_id)
);



