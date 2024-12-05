-- Visualizzare tutti i magazzini ordinati per provincia :)
SELECT * 
FROM  magazzino
ORDER BY provincia asc;
-- asc  sta per ascending
-- desc sta per descending

-- Visualizzare tutti gli ordini presenti a DataBase :)
SELECT * 
FROM acquisto
ORDER BY dataAcquisto

-- Visualizzare tutti gli ordini presenti a DataBase includendo mdati del prodotto e del relativo magazzino 
SELECT p.descrizione, m.nome, m.citta, m.provincia, a.dataAcquisto, a.quantitaAcquisto, a.prezzoAcquisto
FROM prodotto as p, magazzino as m, acquisto as a;
WHERE p.id = a.idPrdodotto AND  a.idMagazzino = m.id;

-- QUERY fatta con Inner Join :)
SELECT p.descrizione, m.nome, m.citta, m.provincia, a.dataAcquisto, a.quantitaAcquisto, a.prezzoAcquisto
FROM prodotto as 
INNER JOIN prodotto as p on p.id = a.idPrdodotto
INNER JOIN magazzino as m on a.idMagazzino = m.id
ORDER BY a.dataAcquisto, a.prezzoAcquisto desc;

-- Determinare il numero di prodotto presenti a DATABASE
-- Per fare questo mySQL ci mette a disposizione un operatore specifico
SELECT count(id)
FROM prodotto

--Determinare il prezzo minore dei prodotti presenti nel DATBASE
-- Viene fatta con la select
SELECT min(prezzoAcquisto)
FROM prodotto

--Determinare il prezzo massimo di acquisto del DATABASE
SELECT max(prezzoAcquisto)
FROM acquisto

--Determinare il prezzo medio degli acquisti presenti sul DATABASE
-- Utilizzando AVARAGE (media) sintetizzandolo con avg 
--LIMIT serve per limitare il numero di risultati visualizzati dalla query
SELECT avg(prezzoAcquisto)
FROM acquisto

-- Visualizzare tutti gli acquisti con prezzo inferiore o uguale al prezzo di acquisto medio
SELECT acquisto.* -- tiro su tutti i campo di acquisto
FROM acquisto
WHERE prezzoAcquisto <= ( 
    SELECT avg(prezzoAcquisto) FROM acquisto
    );

-- Come query precedente ma visualizzando i dati del prodotto
SELECT p.decrizione as prodotto, a.dataAcquisto , a.quantitaAcquista, a.prezzoAcquisto
FROM acquisto as a, prodotto as p, magazzino as m
WHERE a.prezzoAcquisto <= (
    SELECT avg(prezzoAcquisto) FROM acquisto);
AND p.id == idProdotto 
AND a.idMagazzino = m.id;

--Visualizzare tutti gli ordini effettuati dal magazzino  'Mantova 1';
SELECT p.descrizione, a.dataAcquisto, a.prezzoAcquisto, a.quantitaAcquisto
FROM prodotto as p, acquisto as a, magazzino as m
WHERE p.id = a.idProdotto
AND a.idMagazzino = m.id
AND  m.nome = 'Mantova 1'; -- anche cambiando tra min e maius le lettere non cambia pk in questo caso il databes e case insensitive :)