protected-inlet-44333::DATABASE=> CREATE TABLE books (id int PRIMARY KEY, name varchar(25), price int, author varchar(25));
CREATE TABLE

protected-inlet-44333::DATABASE=> INSERT INTO books VALUES (2, 'The last year of the war', 22, 'Susan Meissner');
INSERT 0 1
protected-inlet-44333::DATABASE=> INSERT INTO books VALUES (3, 'Life after life', 23, 'Kate Atkinson');
INSERT 0 1
protected-inlet-44333::DATABASE=> INSERT INTO books VALUES (4, 'The thousand bomber raids', 14, 'Martyn Charton');
INSERT 0 1
protected-inlet-44333::DATABASE=> INSERT INTO books VALUES (5, 'Girl in the blue coat', 24, 'Monica Hesse');
INSERT 0 1
protected-inlet-44333::DATABASE=> INSERT INTO books VALUES (6, 'The fire by night', 15, 'Teresa Messinco');
INSERT 0 1


protected-inlet-44333::DATABASE=> SELECT * FROM books;
 id |           name            | price |     author
----+---------------------------+-------+-----------------
  1 | The book thief            |    19 | Markus Zusak
  2 | The last year of the war  |    22 | Susan Meissner
  3 | Life after life           |    23 | Kate Atkinson
  4 | The thousand bomber raids |    14 | Martyn Charton
  5 | Girl in the blue coat     |    24 | Monica Hesse
  6 | The fire by night         |    15 | Teresa Messinco
(6 filas)
