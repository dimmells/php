SELECT title AS 'Title', summary AS 'Sammary', prod_year
FROM film, genre
WHERE genre.name='erotic' AND genre.id_genre=film.id_genre
ORDER BY prod_year DESC;