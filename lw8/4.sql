/* 4. Получить кино по определенному году */
SELECT dvd_id, title, production_year
FROM dvd
WHERE production_year = 2000 ORDER by title;



/* 5. Получить кино, которое не вернули */
SELECT dvd.dvd_id, title, production_year 
FROM dvd INNER JOIN offer ON dvd.dvd_id = offer.dvd_id 
WHERE offer.return_date IS NULL;


/* 6. Клиенты + фильмы которые они брали в году*/
SELECT first_name, title, offer.offer_date
FROM dvd INNER JOIN offer INNER JOIN customer ON offer.dvd_id = dvd.dvd_id 
WHERE customer.customer_id = offer.customer_id AND offer.offer_date LIKE '1996%' ORDER BY first_name;
