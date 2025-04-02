-- DDL: Creazione della struttura del database

-- Creazione della tabella 'vendite'
CREATE TABLE vendite (
    id_vendita INT PRIMARY KEY,      -- Identificativo univoco per ogni vendita
    prodotto VARCHAR(50) NOT NULL,  -- Nome del prodotto
    quantità INT NOT NULL,          -- Quantità venduta
    prezzo DECIMAL(10, 2) NOT NULL  -- Prezzo unitario del prodotto
);

-- Modifica della tabella per aggiungere una colonna (se necessario)
ALTER TABLE vendite ADD data_vendita DATE; -- Data della vendita

-- DML: Inserimento e modifica dei dati

-- Inserimento di alcuni dati di esempio
INSERT INTO vendite (id_vendita, prodotto, quantità, prezzo) VALUES
(1, 'scarpe', 2, 50.00),
(2, 'magliette', 5, 20.00),
(3, 'scarpe', 1, 50.00),
(4, 'magliette', 3, 20.00);

-- Aggiornamento dei dati (es. modifica del prezzo di un prodotto)
UPDATE vendite SET prezzo = 55.00 WHERE prodotto = 'scarpe';

-- Query con GROUP BY e HAVING

-- Raggruppamento dei dati per prodotto con la somma delle quantità
SELECT prodotto, SUM(quantità) AS totale_quantità
FROM vendite
GROUP BY prodotto;

-- Filtrare i gruppi con HAVING per mostrare solo i prodotti con quantità totale superiore a 5
SELECT prodotto, SUM(quantità) AS totale_quantità
FROM vendite
GROUP BY prodotto
HAVING SUM(quantità) > 5;

-- Altre funzioni di aggregazione

-- Calcolare la media dei prezzi
SELECT AVG(prezzo) AS prezzo_medio
FROM vendite;

-- Trovare il massimo e il minimo prezzo tra i prodotti
SELECT MAX(prezzo) AS prezzo_massimo, MIN(prezzo) AS prezzo_minimo
FROM vendite;

-- Conteggio del numero totale di prodotti diversi venduti
SELECT COUNT(DISTINCT prodotto) AS numero_prodotti
FROM vendite;

-- Calcolo del ricavo totale (quantità * prezzo per ogni vendita)
SELECT prodotto, SUM(quantità * prezzo) AS ricavo_totale
FROM vendite
GROUP BY prodotto;

-- Esempio con una data per filtrare i risultati
SELECT prodotto, quantità, prezzo, data_vendita
FROM vendite
WHERE data_vendita >= '2025-01-01';

-- TCL: Gestione delle transazioni

-- Inizio di una transazione
BEGIN TRANSACTION;

-- Aggiornamento e conferma di una modifica
UPDATE vendite SET quantità = 10 WHERE id_vendita = 2;
COMMIT;

-- Annullamento di una transazione
BEGIN TRANSACTION;
DELETE FROM vendite WHERE id_vendita = 4;
ROLLBACK;
